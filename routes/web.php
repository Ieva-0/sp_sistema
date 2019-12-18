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
// IMONES POSISTEME
Route::get('/', function () {
    return view('welcome');
});
Route::get('/imone', function () {
    return view('Imone/imones_navigavimo_meniu');
});
// LOGIN REGISTER IMONE
Route::get('/imone/prisijungimas', 'ImoneSessionsController@create');
Route::post('/imone/prisijungimas', 'ImoneSessionsController@store');
Route::get('/imone/atsijungimas', 'ImoneSessionsController@destroy');

Route::get('/imone/registracija', 'ImoneRegistrationController@create');
Route::post('/imone/registracija', 'ImoneRegistrationController@store');
Route::get('/imone/paskaitos', 'PaskaituListController@index')->name('paskaitos-list');

//PRAKTIKAI
Route::post('/aplikacija-praktikai/create', 'PraktikosAplikacijaController@store');
Route::get('/aplikacija-praktikai', 'PraktikosAplikacijaController@create');
Route::get('/aplikacija-praktikai/{id}', 'PraktikosAplikacijaController@show')->name('aplikacija-praktikai');

Route::post('/imone/create-praktika/create', 'PraktikosController@store');
Route::get('/imone/create-praktika', 'PraktikosController@create');


Route::get('/imone/praktikos', 'PraktikosController@index');
Route::get('/imone/praktikos/{id}/edit', 'PraktikosController@edit')->name('praktika-edit');
Route::post('imone/praktikos/{id}', 'PraktikosController@update')->name('praktika-edit-update');
Route::patch('imone/praktikos/{id}', 'PraktikosController@update');
Route::delete('imone/praktikos/{id}', 'PraktikosController@destroy')->name('praktika-destroy');
Route::get('/imone/praktikos/{id}/edit/list', 'PraktikosController@show')->name('praktika-student-list');

//PASKAITOS
Route::get('/imone/paskaitos/{id}/edit/', 'PaskaitosController@edit')->name('paskaita-edit');
Route::post('imone/paskaitos/{id}', 'PaskaitosController@update')->name('paskaita-edit-update');
Route::patch('imone/paskaitos/{id}', 'PaskaitosController@update');

Route::post('/imone/create/create', 'PaskaitosController@store');
Route::get('/imone/create', 'PaskaitosController@create');
Route::delete('imone/paskaitos/{id}', 'PaskaitosController@destroy')->name('paskaita-destroy');





Route::get('/registracija', 'RegistrationController@create');
Route::post('/registracija', 'RegistrationController@store');

//STUDIJU POSISTEME

Route::get('/prisijungimas', 'SessionsController@create');
Route::post('/prisijungimas', 'SessionsController@store');
Route::get('/atsijungimas', 'SessionsController@destroy');

Route::get('/studijos', function () {
    return view('Studiju posisteme.pradinis');
});
// ERASMUS+
Route::get('/studijos/projektai', 'ErasmusController@index');
Route::post('/studijos/projektai', 'ErasmusController@store');
Route::get('/studijos/projektai/sukurti', 'ErasmusController@create');
Route::delete('/studijos/projektai/{id}', 'ErasmusController@destroy');
//Route::get('/studijos/projektai/{id}', 'ErasmusController@show');
Route::get('/studijos/projektai/{id}/redaguoti', 'ErasmusController@edit');
Route::patch('/studijos/projektai/{id}', 'ErasmusController@update');

//Eramus+ dalyviai
Route::get('/studijos/projektai/{id}/dalyviai', 'ErasmusController@dalyviai');
Route::delete('/studijos/projektai/{id}/dalyviai/{id2}', 'ErasmusController@dalyviai_destroy');
//Route::post('/studijos/projektai/{id}/dalyviai', 'ErasmusController@dalyviai_store'); // kai patvirtinamas prasymas

//Erasmus+ prasymai
Route::get('/studijos/projektai/{id}/prasymai', 'ErasmusController@prasymai');
Route::get('/studijos/projektai/{id}/prasymai/sukurti', 'ErasmusController@prasymai_create');
Route::get('/studijos/projektai/{id}/prasymai/{id2}', 'ErasmusController@prasymas'); // parodyti kur studentas dalyvavo/pateike prasyma
Route::delete('/studijos/projektai/{id}/prasymai/{id2}', 'ErasmusController@prasymai_destroy');
Route::post('/studijos/projektai/{id}/prasymai', 'ErasmusController@prasymai_store');


// KARJEROS MENTORYSTE
Route::get('/studijos/mentoryste/prasymai', 'MentorysteController@index');
Route::get('/studijos/mentoryste/prasymai/{id}', 'MentorysteController@show');
Route::get('/studijos/mentoryste/laisvi', 'MentorysteController@laisvi');
Route::delete('/studijos/mentoryste/prasymai/{id}', 'MentorysteController@destroy');

// MOKSLO GRUPES
Route::get('/studijos/grupes', 'GrupesController@index');
Route::get('/studijos/grupes/sukurti', 'GrupesController@create');
Route::post('/studijos/grupes', 'GrupesController@store');
Route::get('/studijos/grupes/{id}', 'GrupesController@show');
Route::get('/studijos/grupes/{id}/redaguoti', 'GrupesController@edit');
Route::patch('/studijos/grupes/{id}', 'GrupesController@update');
Route::delete('/studijos/grupes/{id}', 'GrupesController@destroy');

//Grupiu nariai
Route::get('/studijos/grupes/{id}/nariai', 'GrupesController@nariai');
Route::delete('/studijos/grupes/{id}/nariai/{id2}', 'GrupesController@nariai_destroy');

// MODULIU IVERTINIMAI
Route::get('/studijos/moduliai', 'IvertinimaiController@moduliai');
Route::get('/studijos/moduliai/{id}', 'IvertinimaiController@');

//------------------------------------------------------------------
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

// Route::get('/studentas/praktikos', function () {
//     return view('Studentas/studento_praktikos_registracija');
// });
Route::get('/studentas/praktikos', 'StudentoPraktikosController@index');

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
