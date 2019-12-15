<?php

namespace App\Http\Controllers;

use App\User;
use App\Studentas;
use App\Destytojas;
use App\Imone;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registracija');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'user_level' => 'required'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'user_level' => request('user_level')
        ]);

        Studentas::create([
            'Vardas' => request('name'),
            'Pavarde' => request('surname'),
            'El_Pastas' => request('email'),
            'fk_studentas_user' => $user->id
        ]);

        auth()->login($user);

        return redirect()->to('/');
    }
}
