<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ivertinimas extends Model
{
    public $table = "ivertinimas";
    protected $fillable = ['ivertinimas', 'studentas', 'modulis'];
    public $timestamps = false;
}
