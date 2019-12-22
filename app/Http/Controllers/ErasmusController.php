<?php

namespace App\Http\Controllers;

use App\ProjDalyvis;
use App\Projektas;
use App\ProjPrasymas;
use App\Studentas;
use App\Destytojas;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ErasmusController extends Controller
{
    public function index()
    {
        if(Gate::allows('all')) {
            if(auth()->user()->user_level == 1 || auth()->user()->user_level == 2) {
                $projektai = Projektas::where('dalyvio_tipas', auth()->user()->user_level)->where('registracija', 1)->get();
                $semestro_tipai = DB::table('semestro_tipai')->get();

                $dalyvis = ProjDalyvis::where('user', auth()->user()->id)->count();
                $prasymas = ProjPrasymas::where('user', auth()->user()->id)->count();
                if($dalyvis > 0 || $prasymas > 0)
                    $gali = false;
                else $gali = true;
                return view('Studiju posisteme.projektai', compact('projektai', 'semestro_tipai', 'gali'));
            }
            else {
                $projektai = Projektas::all();
                $dalyviai = ProjDalyvis::all();
                $prasymai = ProjPrasymas::all();
                $semestro_tipai = DB::table('semestro_tipai')->get();
                $dalyvio_tipai = DB::table('erasmus_dalyvio_tipas')->get();
                return view('Studiju posisteme.projektai', compact('projektai', 'semestro_tipai', 'dalyvio_tipai', 'dalyviai', 'prasymai'));
            }
        }
        else abort(404);
    }
    public function create()
    {
        if(Gate::allows('centras')) {
            return view('Studiju posisteme.sukurti_projekta');
        }
        else abort(404);
    }
    public function store()
    {
        $this->validate(request(), [
            'salis' => 'required|regex:/(^[\pL ]+)$/u',
            'istaiga' => 'required|regex:/(^[\pL ]+)$/u',
            'dalyviai' => 'required|integer',
        ],
            [
                'salis.required' => 'Šalis yra būtinas laukas.',
                'istaiga.required' => 'Mokymo įstaiga yra būtinas laukas.',
                'dalyviai.required' => 'Dalyvių kiekis yra būtinas laukas.',
                'dalyviai.integer' => 'Dalyvių kiekis turi būti sveikas skaičius.',
                'istaiga.regex' => 'Įstaigos pavadinimas turi būti sudarytas tik iš raidžių ir tarpų.',
                'salis.regex' => 'Šalies pavadinimas turi būti sudarytas tik iš raidžių ir tarpų.',
            ]);

        Projektas::create([
            'salis' => request('salis'),
            'mokymo_istaiga' => request('istaiga'),
            'dalyviu_skaicius' => request('dalyviai'),
            'dalyvio_tipas' => request('tipas'),
            'semestras' => request('semestras'),
            'metai' => request('metai'),
            'user' => request('user')
        ]);
        return redirect('/studijos/projektai');
    }
    public function show($id)
    {
        $projektas = Projektas::FindOrFail($id);
        return view('Studiju posisteme.projektas', compact('projektas'));
    }
    public function edit($id)
    {
        if(Gate::allows('centras')) {
            $projektas = Projektas::FindOrFail($id);
            return view('Studiju posisteme.redaguoti-projekta', compact('projektas'));
        }
        else abort(404);
    }
    public function update($id)
    {
        $projektas = Projektas::FindOrFail($id);
        $this->validate(request(), [
            'salis' => 'required|regex:/(^[\pL ]+)$/u',
            'istaiga' => 'required|regex:/(^[\pL ]+)$/u',
            'dalyviai' => 'required|integer',
        ],
            [
                'salis.required' => 'Šalis yra būtinas laukas.',
                'istaiga.required' => 'Mokymo įstaiga yra būtinas laukas.',
                'dalyviai.required' => 'Dalyvių kiekis yra būtinas laukas.',
                'dalyviai.integer' => 'Dalyvių kiekis turi būti sveikas skaičius.',
                'istaiga.regex' => 'Įstaigos pavadinimas turi būti sudarytas tik iš raidžių ir tarpų.',
                'salis.regex' => 'Šalies pavadinimas turi būti sudarytas tik iš raidžių ir tarpų.',
            ]);
        $projektas->update([
            'salis' => request('salis'),
            'mokymo_istaiga' => request('istaiga'),
            'dalyviu_skaicius' => request('dalyviai'),
            'dalyvio_tipas' => request('tipas'),
            'semestras' => request('semestras'),
            'metai' => request('metai'),
            'user' => request('user')
        ]);
        return redirect('/studijos/projektai');
    }
    public function destroy($id)
    {
        $projektas = Projektas::FindOrFail($id);
        $projektas->delete();
        return redirect('/studijos/projektai');
    }

}
