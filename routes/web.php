<?php

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
    return view('login.login');
});

/* rota da home */
Route::get('/home', function () {
    return view('home.home');
});

/* rota da Agenda Pessoal */
Route::get('/agenda_pessoal', function () {
    return view('agenda.pessoal');
});

/* rota da Agenda Pessoal */
Route::get('/interessados', function () {
    return view('secretaria.interessados');
});
