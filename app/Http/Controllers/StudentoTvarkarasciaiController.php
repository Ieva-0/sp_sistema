<?php

namespace App\Http\Controllers;

use App\Modulis;
use App\ModuliuTvarkarastis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentoTvarkarasciaiController extends Controller
{
    public function index()
    {
        $id = Auth::id();


        $moduliai = ModuliuTvarkarastis::join('studentai_moduliai', function($join){
            $join->on('modulio_uzsiemimas.fk_Moduliskodas','=','studentai_moduliai.fk_Moduliskodas')
                ->where('fk_studentasid','=',$id = Auth::id());
    })
            ->join('auditorija','fk_Auditorijaid_Auditorija','=','id_auditorija')
            ->join('uzsiemimo_tipas','tipas','=','id_Uzsiemimo_tipas')
            ->paginate(10);
        return view('Studentas.studento_tvarkarastis',compact('moduliai'));
    }

}
