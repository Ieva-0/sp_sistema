<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjDalyvis extends Model
{
    public $table = "erasmus_dalyviai";
    protected $fillable = ['user', 'projektas'];
    public $timestamps = false;
}
