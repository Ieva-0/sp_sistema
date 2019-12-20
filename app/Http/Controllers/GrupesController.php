<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\GrupNarys;
use App\Grupe;
use App\ProjPrasymas;
use App\Studentas;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrupesController extends Controller
{
    public function index()
    {
        $grupes = Grupe::all();
        $nariai = GrupNarys::all();
        $destytojai = Destytojas::all();
        //$prasymai = ProjPrasymas::all();
        return view('Studiju posisteme.grupes', compact('grupes', 'nariai', 'destytojai'));
    }
    public function create()
    {
        $destytojai = Destytojas::leftJoin('mokslo_grupe', function($join) {
            $join->on('destytojas.fk_destytojas_user', '=', 'mokslo_grupe.vadovas');
        })->whereRaw('mokslo_grupe.Pavadinimas IS NULL')->get();
        return view('Studiju posisteme.sukurti_grupe', compact('destytojai'));
    }
    public function store()
    {
        $this->validate(request(), [
            'pavadinimas' => 'required|regex:/(^[\pL ]+)$/u|max:250|unique:mokslo_grupe',
            'fakultetas' => 'required|regex:/(^[\pL ]+)$/u|max:250',
            'nariu_kiekis' => 'required|integer|max:999|min:1',
            'aprasymas' => 'required|min:30|max:1000',
        ],
            [
                'pavadinimas.required' => 'Pavadinimas yra būtinas laukas.',
                'pavadinimas.unique' => 'Grupė tokiu pavadinimu jau egzistuoja',
                'pavadinimas.max' => 'Pavadinimas turi būti trumpesnis nei 250 simbolių.',
                'fakultetas.required' => 'Fakultetas yra būtinas laukas.',
                'fakultetas.max' => 'Fakultetas turi būti trumpesnis nei 250 simbolių.',
                'nariu_kiekis.required' => 'Narių kiekis yra būtinas laukas.',
                'nariu_kiekis.integer' => 'Narių kiekis turi būti sveikas skaičius.',
                'nariu_kiekis.max' => 'Narių kiekis turi būti ne didesnis negu 3 skaitmenys.',
                'nariu_kiekis.min' => 'Narių kiekis turi būti daugiau nei 0.',
                'pavadinimas.regex' => 'Grupės pavadinimas turi būti sudarytas tik iš raidžių ir tarpų.',
                'fakultetas.regex' => 'Fakulteto pavadinimas turi būti sudarytas tik iš raidžių ir tarpų.',
                'aprasymas.max' => 'Aprašymas turi būti trumpesnis nei 1000 simbolių.',
                'motyvacinis.min' => 'Aprašymas laiškas turi būti ilgesnis nei 30 simbolių.',
            ]);

        Grupe::create([
            'Pavadinimas' => request('pavadinimas'),
            'Fakultetas' => request('fakultetas'),
            'Nariu_kiekis' => request('nariu_kiekis'),
            'Aprasymas' => request('aprasymas'),
            'vadovas' => request('vadovas'),
        ]);
        return redirect('/studijos/grupes');
    }
    public function show($id)
    {
        $grupe = Grupe::FindOrFail($id);
        $nariai = GrupNarys::all();
        $destytojas = Destytojas::where('fk_destytojas_user', $grupe->vadovas)->first();
        return view('Studiju posisteme.grupe', compact('grupe', 'destytojas', 'nariai'));
    }
    public function edit($id)
    {
        $grupe = Grupe::FindOrFail($id);
        $destytojai = Destytojas::leftJoin('mokslo_grupe', function($join) {
            $join->on('destytojas.fk_destytojas_user', '=', 'mokslo_grupe.vadovas');
        })->whereRaw('mokslo_grupe.Pavadinimas IS NULL OR mokslo_grupe.id = ?', [$grupe->id])->get();
        return view('Studiju posisteme.redaguoti-grupe', compact('destytojai', 'grupe'));
    }
    public function update($id)
    {
        $grupe = Grupe::FindOrFail($id);
        $this->validate(request(), [
            'pavadinimas' => 'required|regex:/(^[\pL ]+)$/u|max:250|unique:mokslo_grupe',
            'fakultetas' => 'required|regex:/(^[\pL ]+)$/u|max:250',
            'nariu_kiekis' => 'required|integer|max:999|min:1',
            'aprasymas' => 'required|min:30|max:1000',
        ],
            [
                'pavadinimas.required' => 'Pavadinimas yra būtinas laukas.',
                'pavadinimas.unique' => 'Grupė tokiu pavadinimu jau egzistuoja',
                'pavadinimas.max' => 'Pavadinimas turi būti trumpesnis nei 250 simbolių.',
                'fakultetas.required' => 'Fakultetas yra būtinas laukas.',
                'fakultetas.max' => 'Fakultetas turi būti trumpesnis nei 250 simbolių.',
                'nariu_kiekis.required' => 'Narių kiekis yra būtinas laukas.',
                'nariu_kiekis.integer' => 'Narių kiekis turi būti sveikas skaičius.',
                'nariu_kiekis.max' => 'Narių kiekis turi būti ne didesnis negu 3 skaitmenys.',
                'nariu_kiekis.min' => 'Narių kiekis turi būti daugiau nei 0.',
                'pavadinimas.regex' => 'Grupės pavadinimas turi būti sudarytas tik iš raidžių ir tarpų.',
                'fakultetas.regex' => 'Fakulteto pavadinimas turi būti sudarytas tik iš raidžių ir tarpų.',
                'aprasymas.max' => 'Aprašymas turi būti trumpesnis nei 1000 simbolių.',
                'motyvacinis.min' => 'Aprašymas laiškas turi būti ilgesnis nei 30 simbolių.',
            ]);
        $grupe->update([
            'Pavadinimas' => request('pavadinimas'),
            'Fakultetas' => request('fakultetas'),
            'Nariu_kiekis' => request('nariu_kiekis'),
            'Aprasymas' => request('tipas'),
            'vadovas' => request('vadovas'),
        ]);
        return redirect('/studijos/grupes');
    }
    public function destroy($id)
    {
        $grupe = Grupe::FindOrFail($id);
        $grupe->delete();
        return redirect('/studijos/grupes');
    }

}
