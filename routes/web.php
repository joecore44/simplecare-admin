<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Livewire\Front\HomePage;
use App\Livewire\Front\StepOne;
use App\Livewire\Front\StepTwo;
use App\Livewire\Front\StepThree;
use App\Livewire\Front\StepFour;
use App\Livewire\Dashboard\Marketing;
use App\Livewire\Client\ClientDashboard;
use App\Http\Controllers\DudaLoginController;
use App\Livewire\Client\ClientIndex;
use App\Livewire\Client\ClientCreate;
use App\Livewire\Dashboard\AppointmentsCalendar;
use App\Livewire\Dashboard\AppointmentLobby;
use App\Livewire\Dashboard\ShowAppointment;
use App\Http\Controllers\ShopController;
use App\Livewire\Front\ProductOnboarding;
use App\Livewire\Settings\NoteTemplate;
use App\Livewire\Settings\CreateFormTemplate;
use App\Livewire\Settings\RenderFormTemplate;
use App\Livewire\Pipeline\PipelineCreate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Public Routes
Route::get('/', HomePage::class)->name('home');
Route::get('/onboarding/1', StepOne::class)->name('step-one');
Route::get('/onboarding/2', StepTwo::class)->name('step-two');
Route::get('/onboarding/3', StepThree::class)->name('step-three');
Route::get('/onboarding/4', StepFour::class)->name('step-four');

Route::get('/meet-your-clinician/{product}/{step?}', ProductOnboarding::class)->name('meet-your-clinician');


//Route::redirect('/login', 'login');
Route::get('/duda-login', [DudaLoginController::class, 'login'])->name('duda-login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/marketing', Marketing::class)->name('marketing');

    // Calendar routes
    Route::get('/appointments', AppointmentsCalendar::class)->name('appointments');
    Route::get('/appointment/{appointment:id}', ShowAppointment::class)->name('appointment-show');
    Route::get('/appointment/lobby/{appointment:id}', AppointmentLobby::class)->name('appointment-lobby');

    // Pipeloine routes
    Route::get('/pipeline/{pipelineId}', PipelineCreate::class)->name('pipeline');

    // Client routes
    Route::get('/clients', ClientIndex::class)->name('clients');
    Route::get('clients/new', ClientCreate::class)->name('create-client');
    Route::get('/client/{clientId}/dashboard/', ClientDashboard::class)->name('client-dashboard');

    // Settings routes
    Route::get('/settings/notes-templates/', NoteTemplate::class)->name('notes-templates');
    Route::get('/settings/notes-templates/new/{templateId?}', CreateFormTemplate::class)->name('notes-templates-create');
    Route::get('/preview/form/{uuid}', RenderFormTemplate::class)->name('notes-templates-render');


    // Shop Routes
    Route::get('/shop', ShopController::class)->name('shop');


    Route::fallback(function() {
        return view('pages/utility/404');
    });
});
