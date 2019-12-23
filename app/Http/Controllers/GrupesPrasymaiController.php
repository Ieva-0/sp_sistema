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
use Illuminate\Support\Facades\Gate;

class GrupesPrasymaiController extends Controller
{
    public function index($id)
    {
        if(Gate::allows('centras')) {
            $prasymai = GrupPrasymas::where('grupe', $id)->get();
            $grupe = Grupe::FindOrFail($id);
            $users = User::all();
            $studentai = Studentas::all();
            $check = GrupPrasymas::where('grupe', $id)->count();
            if($check == 0) {
                return view('Studiju posisteme.grupes_prasymai', compact('prasymai', 'grupe', 'users', 'studentai'))->withErrors(['status' => 'Nėra prašymų.']);
            }
            else return view('Studiju posisteme.grupes_prasymai', compact('prasymai', 'grupe', 'users', 'studentai'));
        }
        else abort(404);

    }
    public function show($id, $id2)
    {
        if(Gate::allows('centras')) {
            $grupe = Grupe::FindOrFail($id);
            $prasymas = GrupPrasymas::FindOrFail($id2);
            $user = User::FindOrFail($prasymas->studentas);
            $studentas = Studentas::where('fk_studentas_user', $user->id)->first();
            $destytojas = Destytojas::where('fk_destytojas_user', $grupe->vadovas)->first();
            return view('Studiju posisteme.grupes_prasymas', compact('grupe', 'prasymas', 'destytojas', 'studentas'));
        }
        else abort(404);
    }
    public function destroy($id, $id2)
    {
        if(request('decision') == 1)
        {
            $grupe = Grupe::FindOrFail($id);
            $prasymas = GrupPrasymas::FindOrFail($id2);
            GrupNarys::create([
                'user' => $prasymas->user,
                'grupe' => $id
            ]);

            $subject = "Jūsų prašymas prisijungti prie mokslo grupės priimtas.";
            $message = "Pavadinimas: ".$grupe->Pavadinimas.", fakultetas: ".$grupe->Fakultetas.". Sveikiname ir linkime sėkmės!";
            PranesimaiController::user($prasymas->user, $message, $subject);

            $prasymas->delete();
        }
        else {
            $prasymas = GrupPrasymas::FindOrFail($id2);
            $grupe = Grupe::FindOrFail($id);
            $subject = "Jūsų prašymas prisijungti prie mokslo grupės atmestas.";
            $message = "Pavadinimas: ".$grupe->Pavadinimas.", fakultetas: ".$grupe->Fakultetas.". Dėl daugiau informacijos kreipkitės į grupės vadovą arba fakulteto administraciją.";
            PranesimaiController::user($prasymas->studentas, $message, $subject);

            $prasymas->delete();
        }
        return redirect()->action('GrupesPrasymaiController@index', ['id' => $id])->withErrors(['status' => 'Prašymas ištrintas']);
    }
    public function create($id)
    {
        if(Gate::allows('studentas')) {
            $grupe = Grupe::FindOrFail($id);
            $destytojas = Destytojas::where('fk_destytojas_user', $grupe->vadovas)->first();
            return view('Studiju posisteme.sukurti_grupes_prasyma', compact('grupe', 'destytojas'));
        }
        else abort(404);
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
        return redirect('/studijos/grupes')->withErrors(['status' => 'Prašymas pateiktas.']);
    }
}
