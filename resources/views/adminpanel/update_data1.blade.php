@extends('adminpanel.add_course')
 @section('content') 
 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>update question with answer</span>
            </div> 
<?php

  foreach($user1 as $user1){

     $all_id= $user1->all_id;
        $id=$user1->id;
        $formula=$user1->formula;
  }



?>

{{ Form::open(['route' => ['update_formula', $user1->id],'files'=>true], ['class' => 'contact100-form validate-form']) }} 


              <div class="wrap-input1001 validate-input1">

                 {{ Form::hidden('all_id', $all_id, ['size' => '30x1'])}}
 
                {{ Form::label('Formula','Formula:'), ['class' => 'label-input100']}}<br>

                {{ Form::textarea('formula', $formula, ['class' => 'text'])}}

              </div>
   
             <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        update
                    </button>
                </div>

            {!! Form::close() !!}

@endsection