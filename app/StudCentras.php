<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudCentras extends Model
{
    public $table = "studiju_centras";
    protected $fillable = ['el_pastas', 'vardas', 'pavarde', 'user_id'];
    public $timestamps = false;

}
