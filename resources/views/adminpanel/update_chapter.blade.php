@extends('adminpanel.add_course')
 @section('content') 
 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>update question with answer</span>
            </div> 
<?php



  foreach($user1 as $user1){
       
        $chap_id    = $user1->chap_id;
             $id    = $user1->id;
             $course=$user1->course;
		   $chapter    = $user1->chapter;
		     $chapter_name    = $user1->chapter_name;
		
  }



?>
{{ Form::open(['route' => ['update_chapter',$user1->id,$user1->course],'files'=>true], ['class' => 'contact100-form validate-form']) }} 

              <div class="wrap-input1001 validate-input1">


                {{ Form::hidden('chap_id', $chap_id, ['size' => '30x1'])}}
                
                {{ Form::label('Chapter','Chapter'), ['class' => 'label-input100']}}<br>

                {{ Form::textarea('chapter', $chapter,['class' => 'text'])}}

              </div>

              <div class="wrap-input1001 validate-input1">


               
                
                {{ Form::label('Chapter_name','Chapter_name'), ['class' => 'label-input100']}}<br>

                {{ Form::textarea('chapter_name', $chapter_name,['class' => 'text'])}}

              </div>

             <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        update
                    </button>
                </div>

            {!! Form::close() !!}

@endsection