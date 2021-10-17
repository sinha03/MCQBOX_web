<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insert_course extends Model
{
    // 
    protected $table="course_list";
      protected $fillable = [
        'course',
    ];
 
}
