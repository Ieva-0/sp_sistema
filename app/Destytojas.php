<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destytojas extends Model
{
    public $timestamps = false;
    public $table = "destytojas";
    protected $fillable = ['laisvas_karjeros_mentorius'];

}
