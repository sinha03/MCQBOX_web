<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class RegModel extends Model
{
	protected $table = 'register';
    protected $fillable = [
        'username', 'fullname','email','password',
    ];



  //hidden attributes
   protected $hidden = [
       'password', 
   ];

}
