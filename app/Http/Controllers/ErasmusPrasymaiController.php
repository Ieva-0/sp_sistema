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
use Illuminate\Support\Facades\Gate;

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
            $studentas = Studentas::where('fk_studentas_user', $user->id)->first();
            $destytojas = Destytojas::where('fk_destytojas_user', $user->id)->first();
            return view('Studiju posisteme.projekto_prasymas', compact('projektas', 'prasymas', 'destytojas', 'studentas', 'semestro_tipai'));
        }
        else abort(404);
    }
    public function show2($id)
    {
        if(auth()->user()->id == $id) {
            $prasymai = ProjPrasymas::where('id', $id)->get();
            $semestro_tipai = DB::table('semestro_tipai')->get();
            return view('Studiju posisteme.projekto_prasymas', compact('projektas', 'prasymas', 'destytojas', 'studentas', 'semestro_tipai'));
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
            $count = ProjDalyvis::where('projektas', $id)->count();
            $projektas = Projektas::FindOrFail($id);
            if($count == $projektas->dalyviu_skaicius)
                $projektas->update([
                    'registracija' => 0,
                ]);

            $subject = "Jūsų prašymas dalyvauti Erasmus+ projekte priimtas.";
            $message = "Šalis: ".$projektas->salis.", įstaiga: ".$projektas->istaiga.". Sveikiname ir linkime sėkmės!";
            PranesimaiController::user($prasymas->user, $message, $subject);

            $prasymas->delete();
        }
        else {
            $prasymas = ProjPrasymas::FindOrFail($id2);
            $projektas = Projektas::FindOrFail($id);

            $subject = "Jūsų prašymas dalyvauti Erasmus+ projekte atmestas.";
            $message = "Šalis: ".$projektas->salis.", įstaiga: ".$projektas->istaiga.". Dėl daugiau informacijos teiraukitės fakulteto administracijos.";
            PranesimaiController::user($prasymas->user, $message, $subject);
            $prasymas->delete();
        }
        return redirect()->action('ErasmusPrasymaiController@index', ['id' => $id])->withErrors(['status' => 'Prašymas ištrintas.']);
    }
    public function create($id)
    {
        if(Gate::allows('studdest')) {
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
        return redirect('/studijos/projektai')->withErrors(['status' => 'Prašymas sukurtas.']);
    }
}
