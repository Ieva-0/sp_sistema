<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/imone', function () {
    return view('Imone/imones_navigavimo_meniu');
});
Route::get('/imone/prisijungti', function () {
    return view('Imone/imones_prisijungimo_langas');
});
Route::get('/imone/registracija', function () {
    return view('Imone/imones_registracijos_langas');
});
Route::get('/imone/paskaitos', function () {
    return view('Imone/imones_paskaitu_sarasas');
});
Route::get('/imone/sukurti_paskaita', function () {
    return view('Imone/paskaitos_kurimo_langas');
});
Route::get('/imone/redaguoti_paskaita', function () {
    return view('Imone/paskaitos_redagavimo_langas');
});
Route::get('/imone/redaguoti_paskaita/paskaita1', function () {
    return view('Imone/paskaita1');
});