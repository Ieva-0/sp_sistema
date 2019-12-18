<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MentorPrasymas extends Model
{
    public $table = "mentorystes_prasymas";
    protected $fillable = ['studentas', 'motyvacinis_tekstas', 'data'];
    public $timestamps = false;

}
