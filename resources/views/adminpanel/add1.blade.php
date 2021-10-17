@extends('adminpanel.add_course')
 @section('content') 
 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>update question with answer</span>
            </div> 
<?php



  foreach($user as $user){
       
        $list_id    = $user->list_id;
             $id    = $user->id;
		   $list_subject    = $user->list_subject;
		
  }



?>
{{ Form::open(['route' => ['update_chapterlist',$user->id],'files'=>true], ['class' => 'contact100-form validate-form']) }} 

              <div class="wrap-input1001 validate-input1">


                {{ Form::hidden('list_id', $list_id, ['size' => '30x1'])}}
                
                {{ Form::label('list_subject','list_subject'), ['class' => 'label-input100']}}<br>

                {{ Form::textarea('list_subject', $list_subject,['class' => 'text'])}}

              </div>

             <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        update
                    </button>
                </div>

            {!! Form::close() !!}

@endsection