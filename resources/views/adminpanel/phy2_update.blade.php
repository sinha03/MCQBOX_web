@extends('adminpanel.add_course')
 @section('content') 
 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>update formulas</span>
            </div> 
<?php

  foreach($user1 as $user){

     $id    = $user->id;
     $all_formula=$user->all_formula;
    $formula=$user->formula;
   
  }



?>

{{ Form::open(['route' => ['update_formula', $user->all_formula],'files'=>true], ['class' => 'contact100-form validate-form']) }} 

            <div class="wrap-input1001 validate-input1">
                    {{ Form::hidden('id', $id, ['size' => '30x1'])}}
                
                 {{ Form::label('formula',' Formula:'), ['class' => 'label-input100']}}<br>

                  {{ Form::textarea('formula', $formula, ['class' => 'text'])}}
              </div>

             
              
              
             <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        update
                    </button>
                </div>

            {!! Form::close() !!}

@endsection