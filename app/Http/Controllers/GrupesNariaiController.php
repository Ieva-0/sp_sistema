<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\Grupe;
use App\GrupNarys;
use App\Studentas;
use App\User;
use Illuminate\Http\Request;

class GrupesNariaiController extends Controller
{
    public function index($id)
    {
        $nariai = GrupNarys::where('grupe', $id)->get();
        $grupe= Grupe::FindOrFail($id);
        $users = User::all();
        $studentai = Studentas::all();
        $destytojai = Destytojas::all();
        return view('Studiju posisteme.grupes_nariai', compact('nariai', 'grupe', 'studentai', 'destytojai', 'users'));
    }
    public function destroy($id, $id2)
    {
        $narys = GrupNarys::FindOrFail($id2);
        $narys->delete();
        return redirect()->action('GrupesNariaiController@index', ['id' => $id]);
    }
}
