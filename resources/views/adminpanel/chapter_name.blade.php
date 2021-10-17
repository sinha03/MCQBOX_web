@extends('adminpanel.add_course')
 @section('content')

 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>enter chapter name </span>
            </div>    
          @foreach($list as $list)    
            <form id="formElem" class="contact100-form validate-form"  name="formElem" method="POST" action="{!! route('chapter_name', array('id' => $list->id,$list->course)) !!}">
                 {!! csrf_field() !!}  
               <div class="list"  > 
               <div class="home">
             
       <a class="home1" href="../subject_list">Back Home</a>
         
       </div> 
                   
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                       <input type="hidden" name="id" value="{{ $list->id }}">   
                        <input type="hidden" name="course" value="{{ $list->course }}">   
                        @endforeach
                   </div> 
                     <div class="wrap-input100 validate-input{{ $errors->has('chapter') ? ' has-error' : '' }}">
                            <label for="chapter" class="label-input100">Chapter:</label>
                             
                         
                                <input id="chapter" type="text" class="input100" name="chapter"  value="{{ old('chapter') }}" required autofocus>
                              
                              
                                @if ($errors->has('chapter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('chapter') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                        <div class="wrap-input100 validate-input{{ $errors->has('chapter_name') ? ' has-error' : '' }}">
                            <label for="chapter_name" class="label-input100">Chapter name:</label>
                             
                         
                                <input id="chapter_name" type="text" class="input100" name="chapter_name"  value="{{ old('chapter_name') }}" required autofocus>
                              
                              
                                @if ($errors->has('chapter_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('chapter_name') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                           
                             
                       
                        <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        SAVE
                    </button>
                </div>
               
            </form>
@endsection