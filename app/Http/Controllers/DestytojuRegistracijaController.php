<?php


namespace App\Http\Controllers;

use App\User;
use App\Destytojas2;
use App\Product;
use Illuminate\Http\Request;
use App\Imone;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class DestytojuRegistracijaController extends Controller
{
    public function create()
    {
        return view('Destytojas.Destytojo_registracijos_langas');
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
                'password.required' => 'Slaptažodis yra būtinas.',
                'password.confirmed' => 'Slaptažodis ir patvirtinimas turi sutapti.'
            ]);

        $user = User::create([
            'email' => request('email'),
            'name' => request('vardas'),          
            'password' => request('slaptazodis'),
        ]);
        Destytojas2::create([
            'vardas' => request('vardas'),
            'pavarde' => request('pavarde'),
            'El_Pastas' => request('El_Pastas'),
        ]);

        return redirect()->to('/Destytojas/Prisijungti');
    }
}
