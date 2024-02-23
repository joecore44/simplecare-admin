<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Livewire\Attributes\Computed;
use App\Consultations\TimeSlotGenerator;
use App\Consultations\Filters\AppointmentFilter;
use App\Consultations\Filters\SlotsPassedTodayFilter;
use App\Consultations\Filters\UnavailabilityFilter;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function availableTimeSlots(ProviderAvailability $schedule, Service $service){

        return (new TimeSlotGenerator($schedule, $service))
        ->applyFilters([
            new SlotsPassedTodayFilter(),
            new UnavailabilityFilter($schedule->unavailabilities),
            new AppointmentFilter($this->appointmentForDate($schedule->date)),
        ])
        ->get();
    }

    public function appointmentForDate(Carbon $date)
    {
        return $this->appointmentsAsProvider()
                    ->whereDate('date', $date)
                    ->where('provider_id', $this->id)
                    ->get();
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function chartNotes()
    {
        return $this->hasMany(ChartNote::class);
    }

    #[Computed]
    public function chartNotesByClient($clientId)
    {
        return $this->chartNotes()->where('client_id', $clientId);
    }

    public function clients(): HasManyThrough
    {
        return $this->hasManyThrough(Client::class, Account::class);
    }

    public function services(){
        return $this->belingsToMany(Service::class);
    }

    public function providerAvilabilities(){
        return $this->hasMany(ProviderAvailability::class, 'provider_id');
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    // For appointments where the user is the provider
    public function appointmentsAsProvider() {
        return $this->hasMany(Appointment::class, 'provider_id');
    }

    // For appointments where the user is the client
    public function appointmentsAsClient() {
        return $this->hasMany(Appointment::class, 'client_id');
    }


}
