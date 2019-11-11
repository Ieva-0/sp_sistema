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




Route::get('/studentas', function () {
    return view('Studentas/studento_pagrindinis_meniu');
});

Route::get('/studentas/prisijungti', function () {
    return view('Studentas/studento_prisijungimas');
});

Route::get('/studentas/uzsiemimu_registracija', function () {
    return view('Studentas/studento_uzsiemimu_registracija');
});

Route::get('/studentas/Erasmus', function () {
    return view('Studentas/studento_Erasmus_registracija');
});

Route::get('/studentas/karjeros_mentorius', function () {
    return view('Studentas/studento_karjeros_mentorio_registracija');
});

Route::get('/studentas/mokslo_grupes', function () {
    return view('Studentas/studento_mokslo_grupes_registracija');
});

Route::get('/studentas/praktikos', function () {
    return view('Studentas/studento_praktikos_registracija');
});

Route::get('/studentas/profilis', function () {
    return view('Studentas/studento_profilio_perziura');
});

Route::get('/studentas/profilio_redagavimas', function () {
    return view('Studentas/studento_profilio_redagavimas');
});

Route::get('/studentas/tvarkarastis', function () {
    return view('Studentas/studento_tvarkarastis');
});
