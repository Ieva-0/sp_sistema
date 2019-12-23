<?php

namespace App\Http\Controllers;

use App\Studentas;
use App\Destytojas2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DestytojuProfilisController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $destytojas = DB::table('destytojai')->where('id',$id)->first();

        return view('Destytojas.Destytojo_profilis', compact('destytojas'));

    }
    public function update()
    {



        $id = Auth::id();
        $destytojas = Destytojas2::where('id',$id)->first();
//        $this->validate(request(), [
//            'pavadinimas' => 'required|regex:/(^[\pL ]+)$/u|max:250|unique:mokslo_grupe',
//            'fakultetas' => 'required|regex:/(^[\pL ]+)$/u|max:250',
//            'nariu_kiekis' => 'required|integer|max:999|min:1',
//            'aprasymas' => 'required|min:30|max:1000',
//        ],
//            [
//                'pavadinimas.required' => 'Pavadinimas yra būtinas laukas.',
//                'pavadinimas.unique' => 'Grupė tokiu pavadinimu jau egzistuoja',
//                'pavadinimas.max' => 'Pavadinimas turi būti trumpesnis nei 250 simbolių.',
//                'fakultetas.required' => 'Fakultetas yra būtinas laukas.',
//                'fakultetas.max' => 'Fakultetas turi būti trumpesnis nei 250 simbolių.',
//                'nariu_kiekis.required' => 'Narių kiekis yra būtinas laukas.',
//                'nariu_kiekis.integer' => 'Narių kiekis turi būti sveikas skaičius.',
//                'nariu_kiekis.max' => 'Narių kiekis turi būti ne didesnis negu 3 skaitmenys.',
//                'nariu_kiekis.min' => 'Narių kiekis turi būti daugiau nei 0.',
//                'pavadinimas.regex' => 'Grupės pavadinimas turi būti sudarytas tik iš raidžių ir tarpų.',
//                'fakultetas.regex' => 'Fakulteto pavadinimas turi būti sudarytas tik iš raidžių ir tarpų.',
//                'aprasymas.max' => 'Aprašymas turi būti trumpesnis nei 1000 simbolių.',
//                'motyvacinis.min' => 'Aprašymas laiškas turi būti ilgesnis nei 30 simbolių.',
//            ]);

      //  dd(request()->all());
        $this->validate(request(), [
            'El_Pastas' => 'required|email',
            'Vardas' => 'required|regex:/(^[\pL ]+)$/u',
            'Pavarde' => 'required|regex:/(^[\pL ]+)$/u',
        ],
            [
                'El_Pastas.email' => 'Įveskite galiojantį el. paštą.',
                'El_Pastas.required' => 'El. paštas yra būtinas.',
                'Vardas.required' => 'Vardas yra būtinas.',
                'Vardas.regex' => 'Vardas turi būti sudarytas tik iš raidžių.',
                'Pavarde.required' => 'Pavardė yra būtina.',
                'Pavarde.regex' => 'Pavardė turi būti sudaryta tik iš raidžių.',
            ]);
        $destytojas->update([
            'vardas' => request('Vardas'),
            'pavarde' => request('Pavarde'),
            'el_Pastas' => request('El_Pastas'),
        ]);
        return redirect('/Destytojas/Profilis');
    }

    public function edit()
    {
    $id = Auth::id();
       $destytojas =  Destytojas2::where('id',$id)->first();
        return view('Destytojo_profilio_redagavimas', compact('destytojas'));
    }
}
