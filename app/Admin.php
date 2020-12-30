<?php

namespace App;

use Illuminate\Foundation\Auth\User as SetAuth;

class Admin extends SetAuth
{
    
    protected $fillable = [
        'name',
        'username',
        'password'
    ];
    
    protected $hidden = [
        'password'
    ];
}
