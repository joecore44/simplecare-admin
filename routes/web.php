<?php

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


//Route::redirect('/login', 'login');
Route::get('/duda-login', [DudaLoginController::class, 'login'])->name('duda-login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/marketing', Marketing::class)->name('marketing');
    Route::get('/client/{clientId}/dashboard/', ClientDashboard::class)->name('client-dashboard');


    Route::fallback(function() {
        return view('pages/utility/404');
    });
});
