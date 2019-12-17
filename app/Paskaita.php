<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Paskaita extends Model
{
    public $table = "paskaita";
    public $timestamps = false;
    protected $fillable = ['data', 'trukme','vieta','tema','papildoma_informacija','lektorius','laikas','mokymo_kalba','fk_Darbuotojasid','fk_Auditorijaid_Auditorija'];
  
}
