<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(BookController::class)->prefix('books')->group(function () {
        Route::get('', 'index')->name('books');
        Route::get('create', 'create')->name('books.create');
        Route::post('store', 'store')->name('books.store');
        Route::get('show/{id}', 'show')->name('books.show');
        Route::get('edit/{id}', 'edit')->name('books.edit');
        Route::put('edit/{id}', 'update')->name('books.update');
        Route::delete('destroy/{id}', 'destroy')->name('books.destroy');
    });

    Route::controller(ReservationController::class)->prefix('reservations')->group(function () {
        Route::get('', 'index')->name('reservations');
        Route::get('create', 'create')->name('reservations.create');
        Route::post('store', 'store')->name('reservations.store');
        Route::get('show/{id}', 'show')->name('reservations.show');
        Route::get('edit/{id}', 'edit')->name('reservations.edit');
        Route::put('edit/{id}', 'update')->name('reservations.update');
        Route::delete('destroy/{id}', 'destroy')->name('reservations.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::controller(HomeController::class)->prefix('views')->group(function () {
    Route::get('', 'index')->name('views');
    Route::get('create', 'create')->name('views.create');
    Route::post('store', 'store')->name('views.store');
    Route::get('show/{id}', 'show')->name('views.show');
    Route::put('edit/{id}', 'update')->name('views.update');
    Route::delete('destroy/{id}', 'destroy')->name('views.destroy');
});
