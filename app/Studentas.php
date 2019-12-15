<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentas extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'Vardas', 'Pavarde', 'El_Pastas', 'fk_studentas_user'
    ];
}
