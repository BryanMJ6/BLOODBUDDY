<?php

use App\Http\Controllers\UserSettingsController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('ayudas', App\Http\Controllers\AyudasController::class);
Route::resource('contactos', App\Http\Controllers\ContactosController::class);
Route::resource('equipos', App\Http\Controllers\EquiposController::class);
Route::resource('terminos', App\Http\Controllers\TerminosController::class);
Route::resource('pacientes', App\Http\Controllers\PacienteController::class)->middleware('auth');
Route::resource('donantes', App\Http\Controllers\DonanteController::class)->middleware('auth');

Route::get('/NewPassword',  [UserSettingsController::class, 'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [UserSettingsController::class, 'changePassword'])->name('changePassword');