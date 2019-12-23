<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DestytojuDokumentaiController extends Controller {
   public function index() {
      return view('Destytojas.Destytojo_dokumento_pridejimas');
   }

   public function create()
   {
       return view('Destyojas.create');
   }

}