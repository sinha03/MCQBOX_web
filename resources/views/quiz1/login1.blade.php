@extends('quiz1.login1layout')
@section('Title','Quiz App') 
@section('content') 

        <div id="content">
           
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" method="POST" action="{!! route('login1') !!}">
                    {!! csrf_field() !!}
                   
                  
                  <fieldset class="step">
                         <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
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
                                    login1 
                                </button>
                            </div>
                        </div>

                 </fieldset>       
              
                 
                 </form>
                
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        
                        <li class="selected">
                            <a href="#">login1</a>
                        </li>
                        
                     
                    </ul>
                </div>
            </div>
        </div>
@endsection	