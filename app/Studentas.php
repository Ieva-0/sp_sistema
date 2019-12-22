<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentas extends Model
{
    public $timestamps = false;
    public $table = 'studentas';
    protected $fillable = ['vardas','pavarde','el_Pastas','akademine_grupe','stojimo_metai','kursas', 'studiju_programa', 'gimimo_data','gretutines_studijos','user_id' ];
}
