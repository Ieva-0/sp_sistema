<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\ProjDalyvis;
use App\Projektas;
use App\Studentas;
use App\User;
use Illuminate\Http\Request;

class ErasmusDalyviaiController extends Controller
{
    public function index($id)
    {
        if(Gate::allows('centras')) {
            $dalyviai = ProjDalyvis::where('projektas', $id)->get();
            $projektas = Projektas::FindOrFail($id);
            $users = User::all();
            $studentai = Studentas::all();
            $destytojai = Destytojas::all();
            return view('Studiju posisteme.projekto_dalyviai', compact('dalyviai', 'studentai', 'destytojai', 'projektas'));
        }
        else abort(404);
    }
    public function destroy($id, $id2)
    {
        $dalyvis = ProjDalyvis::FindOrFail($id2);
        $dalyvis->delete();
        return redirect()->action('ErasmusDalyviaiController@index', ['id' => $id]);
    }
}
