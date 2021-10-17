@extends('quiz1.Adminloginlayout')
@section('Title','Quiz App') 
@section('content') 

        <div id="content">
           
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" method="POST" action="{!! route('adminlogin') !!}">
                    {!! csrf_field() !!}
                     <fieldset class="step">
                        
                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    LOGIN 
                                </button>
                            </div>
                        </div>

                   
                </fieldset>
                      
                 </form>
                
                </div>
                <div id="navigation" style="display:none;">
                    
                </div>
               
            </div>
        </div>
@endsection	