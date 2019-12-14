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
// IMONE
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
Route::post('/imone/create/create', 'PaskaitosController@store');
Route::get('/imone/create', 'PaskaitosController@create');

//Route::resource('imone/create','PaskaitosController');


Route::get('/studijos/registracija', function () {
    return view('Studiju posisteme.registracija');
});
Route::get('/studijos/prisijungti', function () {
    return view('Studiju posisteme.prisijungimas');
});
Route::get('/studijos', function () {
    return view('Studiju posisteme.pradinis');
});
// ERASMUS+
Route::get('/studijos/projektai', function () {
    return view('Studiju posisteme.projektai');
});
Route::get('/studijos/projektai/1', function () {
    return view('Studiju posisteme.projektas');
});
Route::get('/studijos/projektai/1/dalyviai', function () {
    return view('Studiju posisteme.projekto_dalyviai');
});
Route::get('/studijos/projektai/sukurti', function () {
    return view('Studiju posisteme.sukurti_projekta');
});
Route::get('/studijos/projektai/prasymai', function () {
    return view('Studiju posisteme.projektu_prasymai');
});
Route::get('/studijos/projektai/prasymai/1', function () {
    return view('Studiju posisteme.projekto_prasymas');
});
// KARJEROS MENTORYSTE
Route::get('/studijos/mentoryste', function () {
    return view('Studiju posisteme.mentorystes_prasymai');
});
Route::get('/studijos/mentoryste/1', function () {
    return view('Studiju posisteme.mentorystes_prasymas');
});
Route::get('/studijos/mentoryste/laisvi', function () {
    return view('Studiju posisteme.laisvi_mentoriai');
});
// MOKSLO GRUPES
Route::get('/studijos/grupes', function () {
    return view('Studiju posisteme.grupes');
});
Route::get('/studijos/grupes/sukurti', function () {
    return view('Studiju posisteme.sukurti_grupe');
});
Route::get('/studijos/grupes/1', function () {
    return view('Studiju posisteme.grupe');
});
Route::get('/studijos/grupes/1/nariai', function () {
    return view('Studiju posisteme.grupes_nariai');
});
// MODULIU IVERTINIMAI
Route::get('/studijos/moduliai', function () {
    return view('Studiju posisteme.moduliai');
});
Route::get('/studijos/moduliai/1', function () {
    return view('Studiju posisteme.modulio_ivertinimai');
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

//Destytojas

Route::get('/Destytojas', function () {
    return view('Destytojas/Destytojo_navigavimo_meniu');
});

Route::get('/Destytojas/Dokumentai', function () {
    return view('Destytojas/Destytojo_dokumento_pridejimas');
});

Route::get('/Destytojas/Laiskai', function () {
    return view('Destytojas/Destytojo_laisku_siuntimas');
});

Route::get('/Destytojas/Auditorijos', function () {
    return view('Destytojas/Destytojo_Auditorijos_rezervacija');
});

Route::get('/Destytojas/Profilis', function () {
    return view('Destytojas/Destytojo_profilis');
});

Route::get('/Destytojas/Prisijungti', function () {
    return view('Destytojas/Destytojo_prisijungimo_langas');
});

Route::get('/Destytojas/registracija', function () {
    return view('Destytojas/Destytojo_registracijos_langas');
});
