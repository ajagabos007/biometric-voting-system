<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BiometricController;

use App\Http\Controllers\ElectionController;
use App\Http\Livewire\Users\CaptureUserBiometric;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('voters', UserController::class);
Route::resource('elections', ElectionController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Route::get('voters/biometric/capture1', CaptureUserBiometric::class)->name('biometric.capture');
    // Route::get('voters/biometric/capture', CaptureUserBiometric::class)->name('biometric.capture');
    Route::controller(BiometricController::class)->group(function () {
        Route::get('voters/biometric/capture', 'create')->name('biometric.capture');
    });
});
