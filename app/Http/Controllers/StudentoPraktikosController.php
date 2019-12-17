<?php

namespace App\Http\Controllers;

use Session;
use App\Praktika;
use Illuminate\Support\Facades\DB;
use App\Registracija_praktikai;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class StudentoPraktikosController extends Controller
{
    public function index($id = 0)
    {
        $praktiku_list = DB::select("SELECT praktikos.id,praktikos.trukme,praktikos.id,dalyviu_Skaicius,projekto_Tema,laikas,pavadinimas,sritis,el_pastas  FROM praktikos LEFT JOIN imones ON praktikos.fk_Imoneid=imones.id");

        //        return view('Imone/imones_praktiku_sarasas')->with('praktiku_list', $results);
        //$auditorija_list = DB::table('auditorija')->get();
        return view('Studentas.studento_praktikos_registracija')->with('praktiku_list', $praktiku_list); //->with('auditorija_list', $auditorija_list);
    }
    //
}
