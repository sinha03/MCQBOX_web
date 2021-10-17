<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insert_item extends Model
{
    //
    protected $table="subject_chapter";

      protected $fillable = [
        'list_subject', 
    ];

   
}