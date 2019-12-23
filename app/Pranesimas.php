<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pranesimas extends Model
{
    public $table = "pranesimas";
    protected $fillable = ['data', 'laikas', 'tekstas', 'tema', 'siuntejas', 'gavejas'];
    public $timestamps = false;
}
