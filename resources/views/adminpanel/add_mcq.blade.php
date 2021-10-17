@include('adminpanel.header')

 

 <div id="2nd_chapter" class="show_panel">
                
     <div class="list-content">
      <h3 class="h2">Course list</h3>
            <div id="list1">

         <table class="table table-bordered table-hover2">
                   
                   <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
                  <th>course</th>
                   <th>Delete</th>
                    <th>Edit</th>
                   </tr></thead>
    <tbody>
    
        <?php

    foreach($list as $list){

        $id    = $list->id;
        $course=$list->course;

    ?>

    <tr>

        <td><?php echo $id;?></td>
        
        <td><a class="action2" href="<?php echo url('list_course');?>/<?php echo $id;?>"><?php echo $course;?></a></td>
        <td>
            <a class="action1" href="<?php echo url('delete_course');?>/<?php echo $id;?>/<?php echo $course;?>">delete</a></td>
            <td><a class="action" href="<?php echo url('edit_course');?>/<?php echo $id;?>/<?php echo $course;?>">update</a>

        </td>

          <?php } ?>
          </tr>
    </tbody>
        
</table>
</div>

</div>
<!-- <div id="steps">
{!!Form::open(['url' => 'add_mcq1/{id}', 'method' => 'POST'])!!}

        <div class="form-group{{ $errors->has('second_id') ? ' has-error' : '' }}">
                            <label for="second_id" class="col-md-4 control-label">Second_id</label>

                            <div class="col-md-6">
                                <input id="second_id" type="text" class="form-control" name="second_id" value="{{ old('second_id') }}" required autofocus>

                                @if ($errors->has('second_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('second_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('third_id') ? ' has-error' : '' }}">
                            <label for="third_id" class="col-md-4 control-label">Third_id</label>

                            <div class="col-md-6">
                                <input id="third_id" type="text" class="form-control" name="third_id" value="{{ old('third_id') }}" required autofocus>

                                @if ($errors->has('third_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('third_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('forth_id') ? ' has-error' : '' }}">
                            <label for="forth_id" class="col-md-4 control-label">Forth_id</label>

                            <div class="col-md-6">
                                <input id="forth_id" type="text" class="form-control" name="forth_id" value="{{ old('forth_id') }}" required autofocus>

                                @if ($errors->has('forth_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('forth_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('fifth_id') ? ' has-error' : '' }}">
                            <label for="fifth_id" class="col-md-4 control-label">Fifth_id</label>

                            <div class="col-md-6">
                                <input id="fifth_id" type="text" class="form-control" name="fifth_id" value="{{ old('fifth_id') }}" required autofocus>

                                @if ($errors->has('fifth_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fifth_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('six_id') ? ' has-error' : '' }}">
                            <label for="six_id" class="col-md-4 control-label">Six_id</label>

                            <div class="col-md-6">
                                <input id="six_id" type="text" class="form-control" name="six_id" value="{{ old('six_id') }}" required autofocus>

                                @if ($errors->has('six_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('six_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                      <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                            <label for="question" class="col-md-4 control-label">question</label>

                            <div class="col-md-6">
                                <input id="question" type="text" class="form-control" name="question" value="{{ old('question') }}" required autofocus>

                                @if ($errors->has('question'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('option1') ? ' has-error' : '' }}">
                            <label for="option1" class="col-md-4 control-label">option1</label>

                            <div class="col-md-6">
                                <input id="option1" type="text" class="form-control" name="option1" value="{{ old('option1') }}" required autofocus>

                                @if ($errors->has('option1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                           <div class="form-group{{ $errors->has('option2') ? ' has-error' : '' }}">
                            <label for="option2" class="col-md-4 control-label">option2</label>

                            <div class="col-md-6">
                                <input id="option2" type="text" class="form-control" name="option2" value="{{ old('option2') }}" required autofocus>

                                @if ($errors->has('option2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option3') ? ' has-error' : '' }}">
                            <label for="option3" class="col-md-4 control-label">option3</label>

                            <div class="col-md-6">
                                <input id="option3" type="text" class="form-control" name="option3" value="{{ old('option3') }}" required autofocus>

                                @if ($errors->has('option3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('option4') ? ' has-error' : '' }}">
                            <label for="option4" class="col-md-4 control-label">option4</label>

                            <div class="col-md-6">
                                <input id="option4" type="text" class="form-control" name="option4" value="{{ old('option4') }}" required autofocus>

                                @if ($errors->has('option4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('option4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ans') ? ' has-error' : '' }}">
                            <label for="ans" class="col-md-4 control-label">ans</label>

                            <div class="col-md-6">
                                <input id="ans" type="text" class="form-control" name="ans" value="{{ old('ans') }}" required autofocus>

                                @if ($errors->has('ans'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ans') }}</strong>
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

            {!! Form::close() !!}

            </div>
		 </main>
   <script>
   function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    }
    </script>
    {!! Html::script('quiz1/js/classie.js') !!} 
    {!! Html::script('quiz1/js/main.js') !!}
  </body>

</html>
-->
