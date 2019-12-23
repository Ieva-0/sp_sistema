<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laiskas extends Model
{
    public $table = "issiustas_pranesimas";
    protected $fillable = ['el_pastas', 'tema', 'tekstas'];
    public $timestamps = false;

}
