<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usere extends Authenticatable
{
    use Notifiable;

    protected $table = 'usere';

    protected $fillable = [
        'email', 'nom', 'prenom', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

