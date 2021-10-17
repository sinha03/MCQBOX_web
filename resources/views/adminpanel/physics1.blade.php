@extends('adminpanel.add_course')
 @section('content')

 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>enter question with answer</span>
            </div>        
            <form id="formElem" class="contact100-form validate-form"  name="formElem" method="POST" action="{!! route('showlist') !!}">
                 {!! csrf_field() !!}  
               <div class="list"  > 
               <div class="home">
              @foreach($list as $list)
               <h1>{{$list->course}}</h1>
               
       <a class="home1" href="/add_mcq">Back Home</a>
         
       </div> 
                <h2>Choose Catagory:</h2>     
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <input type="hidden" name="id" value="{{ $list->id }}">
                 <input type="hidden" name="course" value="{{ $list->course }}">
                   @endforeach
                       {{ Form::select('check_question', ['SELECT CHAPTER','1ST CHAPTER', '2ND CHAPTER', '3RD CHAPTER','4th CHAPTER', '5th CHAPTER', '6th CHAPTER','7th CHAPTER', '8th CHAPTER', '9th CHAPTER','10th CHAPTER'])}}
                     @foreach($list1 as $list1)
                       <input type="hidden" name="chapter_list" value="{{ $list1->chapter_list }}">   
                        @endforeach
                   </div> 
                     <div class="wrap-input100 validate-input{{ $errors->has('question') ? ' has-error' : '' }}">
                            <label for="question" class="label-input100">Question:</label>
                             
                         
                                <input id="question" type="text" class="input100" name="question"  placeholder="কোনটি পদার্থবিজ্ঞানের ভাষায় “নীতি”?" value="{{ old('question') }}" required autofocus>
                              
                              
                                @if ($errors->has('question'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                        <div class="wrap-input100 validate-input{{ $errors->has('option1') ? ' has-error' : '' }}">
                            <label for="option1" class="label-input100">
                    {{ Form::radio('ans', 'A', true,['class' => 'field']) }}Option A:
                     </label>
                            <div class="col-md-6">
                                <input id="option1" type="text" class="input100"  name="option1" placeholder="ভরবেগের নিত্যতা"  value="{{ old('option1') }}" required autofocus>
                          
                                @if ($errors->has('option1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option1') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                           <div class="wrap-input100 validate-input{{ $errors->has('option2') ? ' has-error' : '' }}">
                            <label for="option2" class="label-input100">
                             {{ Form::radio('ans', 'B', false,['class' => 'field']) }}
                              Option B:</label>
                            <div class="col-md-6">
                                <input id="option2" type="text" class="input100" name="option2"  placeholder="বােরের এটম মডেল"  value="{{ old('option2') }}" required autofocus>
                                    
                                @if ($errors->has('option2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option2') }}</strong>
                                    </span>
                                @endif
                            </div>
                             
                        </div>
                         <div class="wrap-input100 validate-input{{ $errors->has('option3') ? ' has-error' : '' }}">
                          <label for="option3" class="label-input100">
                             {{ Form::radio('ans', 'C', false, ['class' => 'field']) }} Option C:</label>
                            <div class="col-md-6">
                                <input id="option3" type="text" class="input100" name="option3"  placeholder="শক্তির সংরক্ষণশীলতা"  value="{{ old('option3') }}" required autofocus>
                                 
                                @if ($errors->has('option2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option3') }}</strong>
                                    </span>
                                @endif
                            </div>
                              
                        </div>
                        <div class="wrap-input100 validate-input{{ $errors->has('option4') ? ' has-error' : '' }}">
                            <label for="option4" class="label-input100">
                            {{ Form::radio('ans', 'D', false, ['class' => 'field'])  }}Option D:
                             </label>
                            <div class="col-md-6">
                                <input id="option4" type="text" class="input100" name="option4"  placeholder="গ্যালিলিওর পড়ন্ত বস্তুর সূত্রাবলী"  value="{{ old('option4') }}" required autofocus>
                              
                                @if ($errors->has('option4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option4') }}</strong>
                                    </span>
                                @endif
                            </div>
                             
                        </div>
                        <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        SAVE
                    </button>
                </div>
               
            </form>
@endsection