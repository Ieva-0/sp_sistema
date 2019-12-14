<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *   protected $fillable = ['data', 'trukme','vieta','tema','papildoma_informacija','lektorius','laikas','mokymo_kalba','fk_Darbuotojasid','fk_Auditorijaid_Auditorija'];
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
