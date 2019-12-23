<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\GrupNarys;
use App\Pranesimas;
use App\ProjDalyvis;
use App\Projektas;
use App\Studentas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PranesimaiController extends Controller
{
    public static function stud($message, $subject)
    {
        $studentai = Studentas::all();
        foreach($studentai as $studentas) {
            Pranesimas::create([
                'data' => Carbon::now()->format('Y-m-d'),
                'laikas' => Carbon::now()->format('h:i:s'),
                'tekstas' => $message,
                'tema' => $subject,
                'gavejas' => $studentas->fk_studentas_user,
                'siuntejas' => 18
            ]);
        }
    }
    public static function user($id, $message, $subject)
    {
        Pranesimas::create([
            'data' => Carbon::now()->format('Y-m-d'),
            'laikas' => Carbon::now()->format('h:i:s'),
            'tekstas' => $message,
            'tema' => $subject,
            'gavejas' => $id,
            'siuntejas' => 18
        ]);
    }
    public static function dest($message, $subject)
    {
        $destytojai = Destytojas::all();
        foreach($destytojai as $destytojas) {
            Pranesimas::create([
                'data' => Carbon::now()->format('Y-m-d'),
                'laikas' => Carbon::now()->format('h:i:s'),
                'tekstas' => $message,
                'tema' => $subject,
                'gavejas' => $destytojas->fk_destytojas_user,
                'siuntejas' => 18
            ]);
        }
    }
    public static function grupe($id, $message, $subject)
    {
        $nariai = GrupNarys::where('grupe', $id)->get();
        foreach($nariai as $narys) {
            Pranesimas::create([
                'data' => Carbon::now()->format('Y-m-d'),
                'laikas' => Carbon::now()->format('h:i:s'),
                'tekstas' => $message,
                'tema' => $subject,
                'gavejas' => $narys->user,
                'siuntejas' => 18
            ]);
        }
    }
    public static function projektas($id, $message, $subject)
    {
        $dalyviai = ProjDalyvis::where('projektas', $id)->get();
        foreach($dalyviai as $dalyvis) {
            Pranesimas::create([
                'data' => Carbon::now()->format('Y-m-d'),
                'laikas' => Carbon::now()->format('h:i:s'),
                'tekstas' => $message,
                'tema' => $subject,
                'gavejas' => $dalyvis->user,
                'siuntejas' => 18
            ]);
        }
    }
}
