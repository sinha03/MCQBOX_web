<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>@yield('title')  </title>
    
    <meta name="keywords" content="overlay, reveal, effect, page transition, inspiration, javascript" />
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600|Merriweather:400' rel='stylesheet' type='text/css'>
       <link type="text/css" rel="stylesheet" href="quiz1/css/jquery.dropdown.css" />
    {!! Html::style('quiz1/css/normalize.css') !!}
    {!! Html::style('quiz1/css/sidebar.css') !!}
    {!! Html::style('quiz1/css/sidebar_style.css') !!}
    {!! Html::style('quiz1/css/backend.css') !!}
 

        {!! Html::style('quiz1/https://fonts.googleapis.com/css?family=Hind+Madurai:300,400') !!}
        {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') !!}
        {!! Html::script('quiz1/js/modernizr-custom.js') !!}
        {!! Html::script('quiz1/js/jquery.dropdown.js.js') !!}
        
    </head>
   
    <body>
   
       <main class="container2">
       <header id="header">
         <div class="box-left">
        
                
                        <div class="menu" >   
                           <a href="../subject_list">{!! Html::image('quiz1/images/left1.png', 'a picture')  !!}</a>
                        </div>
                     
                
                           
                
              </div>
             
               
       </header>
       

 


<div id="content">
            <div id="wrapper">
                <div id="steps">
            

  @foreach($list as $list)

                  <form id="formElem" name="formElem" method="POST" action="{!! route('list_subject', array('id' => $list->id)) !!}">
                    {!! csrf_field() !!}
                   
      
                        {{ Form::select('check_action', ['SELECT ACTION','ADD MCQ','SHOW MCQ'])}}
                         <input type="hidden" name="id" value="{{ $list->id }}">

                 @endforeach
                     <fieldset class="step1"> 
                         <div class="form-group1{{ $errors->has('list_subject') ? ' has-error' : '' }}">
                            <label for="list_subject" class="col control-label">ADD LIST</label>

                            <div class="col-md-6">
                                <input id="list_subject" type="text" class="form-control1" name="list_subject" value="{{ old('list_subject') }}" required autofocus>

                                @if ($errors->has('list_subject'))
                                    <span class="help-block">
                                        <strong class="help">{{ $errors->first('list_subject') }}</strong>
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
                      
                <!-- {!! Form::close() !!}-->
                 </form>
                </div>
               </div>
             </div>
      
<div id="2nd_chapter" >
                
     <div class="list-content1">
      <h3 class="h2">ACTION lIST</h3>
            <div id="list1">

         <table class="table table-bordered table-hover2">
                   
                   <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
                  <th>LIST</th>
                  <th>DELETE</th>
                    <th>EDIT</th>
                   </tr></thead>
    <tbody>
    
        <?php

    foreach($user as $user){

        $list_id= $user->list_id;
        $id=$user->id;
        $check_action=$user->check_action;
        $list_subject=$user->list_subject;

    ?>

    <tr>

        <td><?php echo $list_id;?></td>
        
        <td><a class="action2" href="<?php echo url('chapterlist');?>/<?php echo $list_subject;?>/<?php echo $id;?>/<?php echo $check_action;?>"><?php echo $list_subject;?></a></td>
       <td>
            <a class="action1" href="<?php echo url('delete_chapterlist');?>/<?php echo $list_id;?>/<?php echo $list_subject;?>">delete</a></td>
            <td><a class="action" href="<?php echo url('edit_chapterlist');?>/<?php echo $list_id;?>/<?php echo $list_subject;?>">update</a>

        </td>
          <?php } ?>
          </tr>
    </tbody>
        
</table>
</div>

</div>
</div>
</main>
</body>
</html>
