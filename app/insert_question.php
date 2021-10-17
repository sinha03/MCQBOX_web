<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insert_question extends Model
{
    //
     protected $table="subject_question";


      protected $fillable = [
        'question','option1','option2','option3','option4',
    ];

    
}
