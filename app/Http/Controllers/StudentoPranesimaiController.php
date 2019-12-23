<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class StudentoPranesimaiController extends Controller
{
    public function index ()
    {
        if(Gate::allows('studentas')) {

        $id = Auth::id();

        $pranesimai = DB::table('pranesimas')->where('gavejas','=',$id)->paginate(6);

        return view('Studentas.studento_pranesimai',compact('pranesimai'));
        }
        else abort(404);
    }

    public function show($id)
    {
        $pranesimas = DB::table('pranesimas')->where('id_Pranesimas','=',$id)->first();
        return view('Studentas.studento_pranesimai_detaliau',compact('pranesimas'));
    }
}
