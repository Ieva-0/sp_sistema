<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjPrasymas extends Model
{
    public $table = "erasmus_prasymas";
    protected $fillable = ['user', 'projektas', 'motyvacinis_tekstas', 'data'];
    public $timestamps = false;

}
