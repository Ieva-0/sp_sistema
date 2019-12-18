<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentas extends Model
{
    public $timestamps = false;
    public $table = 'studentas';
    protected $fillable = ['fk_Destytojastabelio_nr'];
}
