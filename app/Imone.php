<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imone extends Model
{
    public $table = "imones";
    public $timestamps = false;
    protected $fillable = ['pavadinimas', 'sritis','fk_imone_user','el_pastas'];
  
}
