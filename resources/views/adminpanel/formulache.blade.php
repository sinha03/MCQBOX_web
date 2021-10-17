@include('adminpanel.header')

        <div id="content">
           
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" method="POST" action="{!! route('store1') !!}">
                    {!! csrf_field() !!}
                     <fieldset class="step">
                         <div class="form-group{{ $errors->has('phy1') ? ' has-error' : '' }}">
                            <label for="phy1" class="col-md-4 control-label">chemistry formula</label>

                            <div class="col-md-6">
                                <input id="phy1" type="text" class="form-control" name="phy1" value="{{ old('phy1') }}" required autofocus>

                                @if ($errors->has('phy1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phy1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    submit 
                                </button>
                            </div>
                        </div>

                   
                </fieldset>
                      
                 </form>