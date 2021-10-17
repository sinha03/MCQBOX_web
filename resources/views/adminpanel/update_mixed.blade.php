@extends('adminpanel.add_course')
 @section('content') 
 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>update question with answer</span>
            </div> 
<?php


  
 foreach($phy1_model11 as $phy1_model){

     $id    = $phy1_model->id;
    $question  = $phy1_model->question;
    $option1  = $phy1_model->option1;
    $option2  = $phy1_model->option2;
    $option3  = $phy1_model->option3;
    $option4  = $phy1_model->option4;
    $ans = $phy1_model->ans;
  }


?>



{{ Form::open(['url' => 'update_mixed','files'=>true], ['class' => 'contact100-form validate-form']) }} 


              <div class="wrap-input1001 validate-input1">

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