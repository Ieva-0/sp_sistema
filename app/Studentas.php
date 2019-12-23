<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentas extends Model
{
    public $timestamps = false;
    public $table = 'studentas';
    protected $fillable = ['Vardas','Pavarde','El_Pastas','Akademine_grupe','Stojimo_metai','Kursas', 'Studiju_programa', 'Gimimo_data','user_id','fk_user_id' ];
}
