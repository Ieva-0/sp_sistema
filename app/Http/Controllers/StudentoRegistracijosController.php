<?php

namespace App\Http\Controllers;

use App\Studentas;
use Illuminate\Http\Request;
use App\User;

class StudentoRegistracijosController extends Controller
{
    public function create()
    {
        return view('Studentas.studento_registracija');
    }

    public function store()
    {
      //dd(request()->all());
        $this->validate(request(), [
            'email' => 'required|email',
            'vardas' => 'required|regex:/(^[\pL ]+)$/u',
            'pavarde' => 'required|regex:/(^[\pL ]+)$/u',
            'slaptazodis' => 'required|confirmed',

        ],
            [
                'email.email' => 'Įveskite galiojantį el. paštą.',
                'email.required' => 'El. paštas yra būtinas.',
                'vardas.required' => 'Vardas yra būtinas.',
                'vardas.regex' => 'Vardas turi būti sudarytas tik iš raidžių.',
                'pavarde.required' => 'Pavardė yra būtina.',
                'pavarde.regex' => 'Pavardė turi būti sudaryta tik iš raidžių.',
                'password.required' => 'Slaptažodis yra būtinas.',
                'password.confirmed' => 'Slaptažodis ir patvirtinimas turi sutapti.'
            ]);

        $user = User::create([
            'name' => request('vardas'),
            'email' => request('email'),
            'password' => request('slaptazodis'),
            'user_level' => 1
        ]);

        $studentas = Studentas::create([
            'Vardas' => request('vardas'),
            'Pavarde' => request('pavarde'),
            'El_Pastas' => request('email'),
            'Akademine_grupe' =>request('Akademine_grupe'),
            'Stojimo_metai' => request('Stojimo_metai'),
            'Kursas' => request('Kursas'),
            'Studiju_programa' => request('Studiju_programa'),
            'Gimimo_data' => request('Gimimo_data'),
            'user_id' => 1
        ]);
        //dd("daejo");

        return redirect()->to('/studentas/prisijungimas');
    }
}
