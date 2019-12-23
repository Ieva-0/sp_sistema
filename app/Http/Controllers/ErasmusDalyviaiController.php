<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\ProjDalyvis;
use App\Projektas;
use App\Studentas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ErasmusDalyviaiController extends Controller
{
    public function index($id)
    {
        if(Gate::allows('centras')) {
            $dalyviai = ProjDalyvis::where('projektas', $id)->get();
            $check = ProjDalyvis::where('projektas', $id)->count();
            $projektas = Projektas::FindOrFail($id);
            $users = User::all();
            $studentai = Studentas::all();
            $destytojai = Destytojas::all();
            if($check == 0) {
                return view('Studiju posisteme.projekto_dalyviai', compact('dalyviai', 'studentai', 'destytojai', 'projektas'))->withErrors(['status' => 'Nėra dalyvių.']);
            }
            else return view('Studiju posisteme.projekto_dalyviai', compact('dalyviai', 'studentai', 'destytojai', 'projektas'));
        }
        else abort(404);
    }
    public function destroy($id, $id2)
    {
        $dalyvis = ProjDalyvis::FindOrFail($id2);
        $projektas = Projektas::FindOrFail($id);
        //$subject = "Buvote pašalintas iš Erasmus+ projekto dalyvių sąrašo.";
        //$message = "Šalis: ".$projektas->salis.", įstaiga: ".$projektas->istaiga.". Dėl daugiau informacijos teiraukitės fakulteto administracijos.";
        //PranesimaiController::user($dalyvis->user, $message, $subject);
        $dalyvis->delete();
        return redirect()->action('ErasmusDalyviaiController@index', ['id' => $id])->withErrors(['status' => 'Dalyvis ištrintas.']);
    }
}
