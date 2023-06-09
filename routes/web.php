<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProfileAdminController;




Auth::routes();

Route::get('/foo', function () {
	Artisan::call('storage:link');
});


Route::group(['middleware' => ['auth']], function () {
	Route::get('/', [HomeController::class, 'index'])->name('home');
	Route::get('/internal', [HomeController::class, 'internal'])->name('internal');
	Route::get('/contactos', [HomeController::class, 'contactos'])->name('contactos');
	Route::resource('dashboard/post', \App\Http\Controllers\PostController::class);
	Route::resource('dashboard/internal', \App\Http\Controllers\InternalController::class);
	Route::resource('dashboard/correo', \App\Http\Controllers\correosController::class);
	Route::get('profile', [ProfileController::class, 'profile'])->name('profile.edit');
	Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::put('password', [ProfileController::class, 'password'])->name('profile.password');
});


Route::group(['middleware' => ['role:administrador']], function () {

	Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
	Route::get('dashboard/profile', [ProfileAdminController::class, 'edit'])->name('dashboard.edit');
	Route::put('dashboard/profile', [ProfileAdminController::class, 'update'])->name('dashboard.update');
	Route::put('dashboard/password', [ProfileAdminController::class, 'password'])->name('dashboard.password');
});
