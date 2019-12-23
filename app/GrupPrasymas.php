<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupPrasymas extends Model
{
    public $table = "grupes_prasymas";
    protected $fillable = ['studentas', 'grupe', 'motyvacinis_tekstas', 'data'];
    public $timestamps = false;
}
