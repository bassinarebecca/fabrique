<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth;
use App\Http\Controllers\MailController;
use App\Http\Controllers;
use App\Http\Controllers\Mail;
use App\Http\Controllers\Program;
use App\Http\Controllers\reservation;
use App\Http\Controllers\Reservations;

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

Route::get('/hj', function () {
    return view('valide/compte');
});

Route::get('/kl', function () {
    return view('admin/dashboard');
});

Route::get('/n,;,', function () {
    return view('pages/index');
});

Route::get('/hh', function () {
    return view('accueil');
});
Route::get('/ll', function () {
    return view('layout/pagereserv');
});

Route::get('/n', 'Program@accueil')->name('accueil');
Route::get('/', 'Program@reservt')->name('reservation/reservt');

Route::get('compte', [auth::class, 'compte'])->name('compte');
Route::get('reservation',[auth::class, 'reservations'])->name('reservation');




Route::get('login',[auth::class, 'login'])->middleware('AlreadyLoggedIn');
Route::get('register',[auth::class, 'register'])->middleware('AlreadyLoggedIn');
Route::post('create',[auth::class, 'create'])->name('pages.name');
Route::post('check',[auth::class, 'check'])->name('pages.check');
Route::get('profile',[auth::class, 'profile'])->middleware('isLogged');
Route::get('logout',[auth::class, 'logout']);
Route::get('/send-email', [MailController::class, 'sendEmail']);
Route::get('deconnexion', [auth::class, 'deconnexion']);
Route::get('admin',[Program::class, 'program'])->name('admin');
Route::post('/reserve',[Program::class, 'create'])->name('admin.name');






//Route::get('/{username}', 'auth@login') -> name('login.auth');
