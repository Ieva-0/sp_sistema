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
                'slaptazodis.required' => 'Slaptažodis yra būtinas.',
                'slaptazodis.confirmed' => 'Slaptažodis ir patvirtinimas turi sutapti.'
            ]);

        $user = User::create([
            'name' => request('vardas'),
            'email' => request('email'),
            'password' => request('slaptazodis'),
            'user_level' => 4
        ]);
        Studentas::create([
            'vardas' => request('vardas'),
            'pavarde' => request('pavarde'),
            'El_Pastas' => request('El_Pastas'),
            'Akademine_grupe' =>request('Akademine_grupe'),
            'Stojimo_metai' => request('Stojimo_metai'),
            'Kursas' => request('Kursas'),
            'Studiju_programa' => request('Studiju_programa'),
            'Gimimo_data' => request('Gimimo_data')
        ]);

        auth()->login($user);

        return redirect()->to('/studentas/profilis');
    }
}
