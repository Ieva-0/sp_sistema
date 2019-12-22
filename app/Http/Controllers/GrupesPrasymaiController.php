<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\Grupe;
use App\GrupNarys;
use App\ProjPrasymas;
use App\Studentas;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrupesPrasymaiController extends Controller
{
    public function index($id)
    {
        $prasymai = ProjPrasymas::all();
        $projektas = Grupe::FindOrFail($id);
        $users = User::all();
        $studentai = Studentas::all();
        $destytojai = Destytojas::all();
        return view('Studiju posisteme.projekto_prasymai', compact('prasymai', 'projektas', 'users', 'studentai', 'destytojai'));

    }
    public function show($id, $id2)
    {
        $projektas = Grupe::FindOrFail($id);
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
    public function destroy($id, $id2)
    {
        if(request('decision') == 1)
        {
            $prasymas = ProjPrasymas::FindOrFail($id2);
            GrupNarys::create([
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
    public function create($id)
    {
        $projektas = Grupe::FindOrFail($id);
        $semestro_tipai = DB::table('semestro_tipai')->get();
        return view('Studiju posisteme.sukurti_projekto_prasyma', compact('projektas', 'semestro_tipai'));
    }
    public function store($id)
    {
        $this->validate(request(), [
            'motyvacinis' => 'required|max:250|min:30',
        ],
            [
                'motyvacinis.required' => 'Būtina pateikti motyvacinį laišką.',
                'motyvacinis.max' => 'Motyvacinis laiškas turi būti trumpesnis nei 250 simbolių.',
                'motyvacinis.min' => 'Motyvacinis laiškas turi būti ilgesnis nei 30 simbolių.',
            ]);
        Prasymas::create([
            'user' => '1',
            'grupe' => $id,
            'motyvacinis_tekstas' => request('motyvacinis'),
            'data' => Carbon::now()->format('Y-m-d')
        ]);
        return redirect('/studijos/grupes');
    }
}
