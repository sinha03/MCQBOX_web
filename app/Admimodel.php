<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admimodel extends Model
{
    protected $table = 'admin';
    protected $fillable = [
        'email','password',
    ];
 protected $hidden = [
       'password', 
   ];
}
