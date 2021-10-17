@extends('adminpanel.add_course')
 @section('content') 
 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>update question with answer</span>
            </div> 
<?php

  foreach($user1 as $user){

     $question_id    = $user->question_id;
     $id=$user->id;
      $check_question    = $user->check_question;
		$question  = $user->question;
		$option1  = $user->option1;
		$option2  = $user->option2;
		$option3  = $user->option3;
		$option4  = $user->option4;
		$ans = $user->ans;
  }



?>

{{ Form::open(['route' => ['update',$user->check_question],'files'=>true], ['class' => 'contact100-form validate-form']) }} 


              <div class="wrap-input1001 validate-input1">

                 {{ Form::hidden('question_id', $question_id, ['size' => '30x1'])}}
                 
                  {{ Form::hidden('id', $id, ['size' => '30x1'])}}
 
                {{ Form::label('Question','Question:'), ['class' => 'label-input100']}}<br>

                {{ Form::textarea('question', $question, ['class' => 'text'])}}

              </div>

              <div class="wrap-input1001 validate-input1">
                
                 {{ Form::label('Option A',' Option A:'), ['class' => 'label-input100']}}<br>

                  {{ Form::textarea('option1', $option1, ['class' => 'text'])}}
              </div>
               <div class="wrap-input1001 validate-input1">
                
                 {{ Form::label('Option B',' Option B:'), ['class' => 'label-input100']}}<br>

                  {{ Form::textarea('option2', $option2, ['class' => 'text'])}}
              </div>

                  <div class="wrap-input1001 validate-input1">
                
                 {{ Form::label('Option C',' Option C:'), ['class' => 'label-input100']}}<br>

                  {{ Form::textarea('option3', $option3, ['class' => 'text'])}}
              </div>

               <div class="wrap-input1001 validate-input1">
                
                 {{ Form::label('Option D','Option D:'), ['class' => 'label-input100']}}<br>

                  {{ Form::textarea('option4', $option4, ['class' => 'text'])}}
              </div>

               <div class="wrap-input1001 validate-input1">
                
                 {{ Form::label('Answer',' Answer:'), ['class' => 'label-input100']}}<br>

                  {{ Form::textarea('ans', $ans, ['class' => 'text'])}}
              </div>


             
              
              
             <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        update
                    </button>
                </div>

            {!! Form::close() !!}

@endsection