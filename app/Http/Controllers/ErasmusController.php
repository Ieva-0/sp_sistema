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

class ErasmusController extends Controller
{
    public function index()
    {
        $projektai = Projektas::all();
        $semestro_tipai = DB::table('semestro_tipai')->get();
        $dalyvio_tipai = DB::table('erasmus_dalyvio_tipas')->get();
        $dalyviai = ProjDalyvis::all();
        $prasymai = ProjPrasymas::all();
        return view('Studiju posisteme.projektai', compact('projektai', 'semestro_tipai', 'dalyvio_tipai', 'dalyviai', 'prasymai'));
    }
    public function create()
    {
        return view('Studiju posisteme.sukurti_projekta');
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
        $projektas = Projektas::FindOrFail($id);
        return view('Studiju posisteme.redaguoti-projekta', compact('projektas'));
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
    public function dalyviai($id)
    {
        $dalyviai = ProjDalyvis::where('projektas', $id)->get();
        $projektas = Projektas::FindOrFail($id);
        $users = User::all();
        $studentai = Studentas::all();
        $destytojai = Destytojas::all();
        return view('Studiju posisteme.projekto_dalyviai', compact('dalyviai', 'studentai', 'destytojai', 'projektas'));
    }
    public function dalyviai_destroy($id, $id2)
    {
        $dalyvis = ProjDalyvis::FindOrFail($id2);
        $dalyvis->delete();
        return redirect()->action('ErasmusController@dalyviai', ['id' => $id]);
    }
    public function prasymai($id)
    {
        $prasymai = ProjPrasymas::all();
        $projektas = Projektas::FindOrFail($id);
        $users = User::all();
        $studentai = Studentas::all();
        $destytojai = Destytojas::all();
        return view('Studiju posisteme.projekto_prasymai', compact('prasymai', 'projektas', 'studentai', 'destytojai'));

    }
    public function prasymas($id, $id2)
    {
        $projektas = Projektas::FindOrFail($id);
        $prasymas = ProjPrasymas::FindOrFail($id2);
        $user = User::FindOrFail($prasymas->user);
        $semestro_tipai = DB::table('semestro_tipai')->get();
//        if($projektas->dalyvio_tipas == 1) {
            $studentas = Studentas::where('fk_studentas_user', $user->id)->first();
//            return view('Studiju posisteme.projekto_prasymas', compact('projektas', 'prasymas', 'studentas', 'semestro_tipai'));
//        }
//        else {
            $destytojas = Destytojas::where('fk_destytojas_user', $user->id)->first();
            return view('Studiju posisteme.projekto_prasymas', compact('projektas', 'prasymas', 'destytojas', 'studentas', 'semestro_tipai'));
//        }
    }
    public function prasymai_destroy($id, $id2)
    {
        if(request('decision') == 1)
        {
            $prasymas = ProjPrasymas::FindOrFail($id2);
            ProjDalyvis::create([
               'user' => $prasymas->user,
                'projektas' => $id
            ]);
            $prasymas->delete();
        }
        else {
            $prasymas = ProjPrasymas::FindOrFail($id2);
            $prasymas->delete();
        }
        return redirect()->action('ErasmusController@prasymai', ['id' => $id]);
    }
    public function prasymai_create($id)
    {
        $projektas = Projektas::FindOrFail($id);
        $semestro_tipai = DB::table('semestro_tipai')->get();
        return view('Studiju posisteme.sukurti_projekto_prasyma', compact('projektas', 'semestro_tipai'));
    }
    public function prasymai_store($id)
    {
        $this->validate(request(), [
        'motyvacinis' => 'required|max:1000|min:30',
        ],
        [
            'motyvacinis.required' => 'Būtina pateikti motyvacinį laišką.',
            'motyvacinis.max' => 'Motyvacinis laiškas turi būti trumpesnis nei 1000 simbolių.',
            'motyvacinis.min' => 'Motyvacinis laiškas turi būti ilgesnis nei 30 simbolių.',
        ]);
        ProjPrasymas::create([
            'user' => '1',
            'projektas' => $id,
            'motyvacinis_tekstas' => request('motyvacinis'),
            'data' => Carbon::now()->format('Y-m-d')
        ]);
        return redirect('/studijos/projektai');
    }
}
