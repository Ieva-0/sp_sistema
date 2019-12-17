<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registracija_praktikai extends Model
{
    //
    public $table = "registracija_praktikai";
    public $timestamps = false;
    protected $fillable = ['vardas', 'pavarde', 'baigimo_laikas', 'pastas', 'kursas','pareigos','fk_praktikosid'];
}
