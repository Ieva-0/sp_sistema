<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\ProjDalyvis;
use App\Projektas;
use App\ProjPrasymas;
use App\Studentas;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ErasmusPrasymaiController extends Controller
{
    public function index($id)
    {
        if(Gate::allows('centras')) {
            $prasymai = ProjPrasymas::all();
            $projektas = Projektas::FindOrFail($id);
            $users = User::all();
            $studentai = Studentas::all();
            $destytojai = Destytojas::all();
            return view('Studiju posisteme.projekto_prasymai', compact('prasymai', 'projektas', 'studentai', 'destytojai'));
        }
        else abort(404);
    }
    public function show($id, $id2)
    {
        if(Gate::allows('centras')) {
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
        else abort(404);
    }
    public function destroy($id, $id2)
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
        return redirect()->action('ErasmusPrasymaiController@index', ['id' => $id]);
    }
    public function create($id)
    {
        if(Gate::allows('centras')) {
            $projektas = Projektas::FindOrFail($id);
            $semestro_tipai = DB::table('semestro_tipai')->get();
            return view('Studiju posisteme.sukurti_projekto_prasyma', compact('projektas', 'semestro_tipai'));
        }
        else abort(404);
    }
    public function store($id)
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
