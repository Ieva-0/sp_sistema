<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projektas extends Model
{
    public $table = "erasmus_projektai";
    protected $fillable = ['salis', 'semestras','dalyviu_skaicius','dalyvio_tipas', 'mokymo_istaiga', 'metai', 'user'];
    public $timestamps = false;

}
