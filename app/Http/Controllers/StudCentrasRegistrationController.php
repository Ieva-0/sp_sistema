<?php

namespace App\Http\Controllers;

use App\StudCentras;
use App\User;
use App\Studentas;
use App\Destytojas;
use App\Imone;
use Illuminate\Http\Request;

class StudCentrasRegistrationController extends Controller
{
    public function create()
    {
        return view('Studiju posisteme.registracija');
    }

    public function store()
    {
        $this->validate(request(), [
            'email' => 'required|email|unique:users',
            'vardas' => 'required|regex:/(^[\pL ]+)$/u',
            'pavarde' => 'required|regex:/(^[\pL ]+)$/u',
            'slaptazodis' => 'required|confirmed',
        ],
            [
                'email.email' => 'Įveskite galiojantį el. paštą.',
                'email.required' => 'El. paštas yra būtinas.',
                'email.unique' => 'Toks el. paštas jau yra.',
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
            'user_level' => 3
        ]);
        StudCentras::create([
            'vardas' => request('vardas'),
            'pavarde' => request('pavarde'),
            'el_pastas' => request('email'),
            'user_id' => $user->id
        ]);
        auth()->login($user);

        return redirect()->to('/studijos');
    }
}
