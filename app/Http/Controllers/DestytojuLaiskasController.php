<?php


namespace App\Http\Controllers;
use App\Laiskas;
use App\User;
use App\Destytojas2;
use App\Product;
use Illuminate\Http\Request;
use App\Imone;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class DestytojuLaiskasController extends Controller
{
    public function create()
    {
        return view('Destytojas.Destytojo_laisku_siuntimas');
    }

    public function store()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'tema' => 'required|regex:/(^[\pL ]+)$/u',
            'tekstas' => 'required|regex:/(^[\pL ]+)$/u',
        ],
            [
                'email.email' => 'Įveskite galiojantį el. paštą.',
                'email.required' => 'El. paštas yra būtinas.',
                'tema.required' => 'tema yra būtinas.',
                'tema.regex' => 'tema turi būti sudarytas tik iš raidžių.',
                'tekstas.required' => 'tekstas yra būtina.',
                'tekstas.regex' => 'tekstas turi būti sudaryta tik iš raidžių.',
            ]);


        Laiskas::create([
            'tema' => request('tema'),
            'tekstas' => request('tekstas'),
            'el_pastas' => request('email'),
        ]);

        return redirect()->to('/Destytojas/laiskas')->withErrors(['message'=> 'Sėkmingai išsiųstas pranešimas']);
    }
}
