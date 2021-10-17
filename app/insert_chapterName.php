<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insert_chapterName extends Model
{
    //

     protected $table="chapter_name";


      protected $fillable = [
        'course','chapter','chapter_name',
    ];
}
