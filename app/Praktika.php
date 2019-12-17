<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praktika extends Model
{
    public $table = "praktikos";
    public $timestamps = false;
    protected $fillable = ['trukme', 'fk_Imoneid', 'dalyviu_Skaicius', 'projekto_Tema', 'laikas'];
}
