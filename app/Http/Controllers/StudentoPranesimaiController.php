<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentoPranesimaiController extends Controller
{
    public function show ()
    {
        $id = Auth::id();

        $pranesimai = DB::table('pranesimas')->where('gavejas','=',$id);


    }
}
