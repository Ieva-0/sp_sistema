<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\Grupe;
use App\GrupNarys;
use App\GrupPrasymas;
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
        $prasymai = GrupPrasymas::all();
        $grupe = Grupe::FindOrFail($id);
        $users = User::all();
        $studentai = Studentas::all();
        $destytojai = Destytojas::all();
        return view('Studiju posisteme.grupes_prasymai', compact('prasymai', 'grupe', 'users', 'studentai', 'destytojai'));

    }
    public function show($id, $id2)
    {
        $grupe = Grupe::FindOrFail($id);
        $prasymas = GrupPrasymas::FindOrFail($id2);
        $user = User::FindOrFail($prasymas->user);
        $studentas = Studentas::where('fk_studentas_user', $user->id)->first();
        $destytojas = Destytojas::where('fk_destytojas_user', $grupe->vadovas)->first();
        return view('Studiju posisteme.grupes_prasymai', compact('grupe', 'prasymas', 'destytojas', 'studentas'));
//        }
    }
    public function destroy($id, $id2)
    {
        if(request('decision') == 1)
        {
            $prasymas = GrupPrasymas::FindOrFail($id2);
            GrupNarys::create([
                'user' => $prasymas->user,
                'grupe' => $id
            ]);
            $prasymas->delete();
        }
        else {
            $prasymas = GrupPrasymas::FindOrFail($id2);
            $prasymas->delete();
        }
        return redirect()->action('GrupesPrasymaiController@index', ['id' => $id]);
    }
    public function create($id)
    {
        $grupe = Grupe::FindOrFail($id);
        $destytojas = Destytojas::where('fk_destytojas_user', $grupe->vadovas)->first();
        return view('Studiju posisteme.sukurti_grupes_prasyma', compact('grupe', 'destytojas'));
    }
    public function store($id)
    {
        $this->validate(request(), [
            'motyvacinis' => 'required|max:1010|min:30',
        ],
            [
                'motyvacinis.required' => 'Būtina pateikti motyvacinį laišką.',
                'motyvacinis.max' => 'Motyvacinis laiškas turi būti trumpesnis nei 250 simbolių.',
                'motyvacinis.min' => 'Motyvacinis laiškas turi būti ilgesnis nei 30 simbolių.',
            ]);
        GrupPrasymas::create([
            'studentas' => '1',
            'grupe' => $id,
            'motyvacinis_tekstas' => request('motyvacinis'),
            'data' => Carbon::now()->format('Y-m-d')
        ]);
        return redirect('/studijos/grupes');
    }
}
