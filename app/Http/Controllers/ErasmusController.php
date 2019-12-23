<?php

namespace App\Http\Controllers;

use App\Pranesimas;
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
            'dalyviai' => 'required|integer|min:1',
        ],
            [
                'salis.required' => 'Šalis yra būtinas laukas.',
                'istaiga.required' => 'Mokymo įstaiga yra būtinas laukas.',
                'dalyviai.required' => 'Dalyvių kiekis yra būtinas laukas.',
                'dalyviai.integer' => 'Dalyvių kiekis turi būti sveikas skaičius.',
                'dalyviai.min' => 'Dalyvių kiekis turi būti daugiau nei 0.',
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

        //$subject = 'Naujas Erasmus+ projektas';
        //$message = 'Šalis: '.request('salis').', įstaiga: '.request('istaiga').', dalyvauti gali '.request('dalyviai').' dalyviai. Jau galite siųsti prašymus.';
        //if(request('tipas') == 1)
        //    PranesimaiController::stud($message, $subject);
        //else PranesimaiController::dest($message, $subject);

        return redirect('/studijos/projektai')->withErrors([ 'status' => 'Sėkmingai sukurtas projektas.']);
    }
    public function show($id)
    {
        if(Gate::allows('all')) {
            $projektas = Projektas::FindOrFail($id);
            $dalyviai = ProjDalyvis::all();
            $semestro_tipai = DB::table('semestro_tipai')->get();
            return view('Studiju posisteme.projektas', compact('projektas', 'dalyviai', 'semestro_tipai'));
        }
        else abort(404);
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
        //$subject = 'Redaguotas Erasmus+ projektas';
        //$message = 'Šalis: '.request('salis').', įstaiga: '.request('istaiga').', dalyvauti gali '.request('dalyviai').' dalyviai. Tai informacinis pranešimas projekto dalyviams.';
        //PranesimaiController::projektas($projektas->id, $message, $subject);

        return redirect('/studijos/projektai')->withErrors([ 'status' => 'Sėkmingai redaguota projekto informacija.']);
    }
    public function destroy($id)
    {
        $projektas = Projektas::FindOrFail($id);
        $dalyviai = ProjDalyvis::where('projektas', $id)->get();
        $prasymai = ProjPrasymas::where('projektas', $id)->get();
        //$subject = 'Ištrintas Erasmus+ projektas';
        //$message = 'Šalis: '.request('salis').', įstaiga: '.request('istaiga').'. Tai informacinis pranešimas projekto dalyviams.';
        //PranesimaiController::projektas($projektas->id, $message, $subject);
        foreach($dalyviai as $dalyvis)
        {
            $dalyvis->delete();
        }
        foreach($prasymai as $prasymas)
        {
            $prasymas->delete();
        }
        $projektas->delete();
        return redirect('/studijos/projektai')->withErrors([ 'status' => 'Sėkmingai ištrintas projektas.']);
    }

}
