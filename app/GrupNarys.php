<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupNarys extends Model
{
    public $table = "grupiu_nariai";
    protected $fillable = ['user', 'grupe'];
    public $timestamps = false;
}
