@extends('adminpanel.add_course')
 @section('content') 
 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>update question with answer</span>
            </div> 
<?php



  foreach($user as $user){

        $id    = $user->id;
		$course    = $user->course;
		
  }



?>
{{ Form::open(['route' => ['update_course', $user->course],'files'=>true], ['class' => 'contact100-form validate-form']) }} 

              <div class="wrap-input1001 validate-input1">

                {{ Form::hidden('id', $id, ['size' => '30x1'])}}
                
                {{ Form::label('course','course'), ['class' => 'label-input100']}}<br>

                {{ Form::textarea('course', $course,['class' => 'text'])}}

              </div>

             <!--  <div class="wrap-input1001 validate-input1">
                
                 <input  type="file" name="image">
              </div>-->
    
             <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        update
                    </button>
                </div>

            {!! Form::close() !!}

@endsection