<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupe extends Model
{
    public $table = "mokslo_grupe";
    protected $fillable = ['Pavadinimas', 'Nariu_kiekis', 'Fakultetas', 'Aprasymas', 'vadovas'];
    public $timestamps = false;
}
