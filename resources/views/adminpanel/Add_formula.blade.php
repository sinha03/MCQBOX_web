@extends('adminpanel.add_course')
 @section('content')

 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>enter chapter name </span>
            </div>    
          @foreach($list as $list)    
            <form id="formElem" class="contact100-form validate-form"  name="formElem" method="POST" action="{!! route('add_formula', array('id' => $list->id)) !!}">
                 {!! csrf_field() !!}  
               <div class="list"  > 
               <div class="home">
             
       <a class="home1" href="../subject_list">Back Home</a>
         
       </div> 
                   
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                       <input type="hidden" name="id" value="{{ $list->id }}">   
                       
                        @endforeach
                   </div> 
                     <div class="wrap-input100 validate-input{{ $errors->has('formula') ? ' has-error' : '' }}">
                            <label for="formula" class="label-input100">ADD FORMULA:</label>
                             
                         
                                <input id="formula" type="text" class="input100" name="formula"  value="{{ old('formula') }}" required autofocus>
                              
                              
                                @if ($errors->has('formula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('formula') }}</strong>
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