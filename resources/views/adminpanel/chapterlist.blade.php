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
       

 
 <!-- @foreach($list as $list)
                         
               

                   <div id="content">
            <div id="wrapper">
                <div id="steps">
            

 

                  <form id="formElem" name="formElem" method="POST" action="{!! route('chapterlist', array('id' => $list->id,'list_subject' => $list->list_subject)) !!}">
                    {!! csrf_field() !!}
                   
           
                      
                         <input type="hidden" name="id" value="{{ $list->id }}">
                          <input type="hidden" name="list_subject" value="{{ $list->list_subject }}">

                 @endforeach
                     <fieldset class="step"> 
                         <div class="form-group{{ $errors->has('chapter_list') ? ' has-error' : '' }}">
                            <label for="chapter_list" class="col control-label">ADD CHAPTER</label>

                            <div class="col-md-6">
                                <input id="chapter_list" type="text" class="form-control1" name="chapter_list" value="{{ old('chapter_list') }}" required autofocus>

                                @if ($errors->has('chapter_list'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('chapter_list') }}</strong>
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
                </div>
               </div>
             </div>
      -->

<div id="2nd_chapter" >
                
     <div class="list-content2">
      <h3 class="h2">CHAPTER lIST</h3>
            <div id="list2">
              
         <table class="table table-bordered table-hover2">     
                   <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
                  <th>CHAPTER LIST</th>
                 
                   </tr></thead>
    <tbody>
    
        <?php

    foreach($user11 as $user11){

        $chapter_id    = $user11->chapter_id;
        $chapter_list=$user11->chapter_list;

    ?>

    <tr>

        <td><?php echo $chapter_id;?></td>
        
        <td><a class="action2" href="<?php echo url('single_list');?>/<?php echo $chapter_id;?>"><?php echo $chapter_list;?></a></td>
        
          <?php } ?>
          </tr>
    </tbody>
        
</table>
</div>
</div>
</div>
</main>
</body>