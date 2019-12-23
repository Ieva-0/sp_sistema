<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destytojas2 extends Model
{
    public $table = "destytojai";
    protected $fillable = ['el_pastas', 'vardas', 'pavarde', 'user_id'];
    public $timestamps = false;

}
