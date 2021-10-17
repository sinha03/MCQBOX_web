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
       

<div id="2nd_chapter" >
                
     <div class="list-content2">
            <div id="list2">
              
         <table class="table table-bordered table-hover2">     
            <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
              <th>QUESTION</th>
              <th>OPTION A</th>
              <th>OPTION B</th>
              <th>OPTION C</th>
              <th>OPTION D</th>
              <th>ANSWER</th>
              <th>DELETE</th>
              <th>EDIT</th>
                      </tr></thead>
    <tbody>
    
      <?php

  foreach($user11 as $user){

    $id    = $user->id;
    $check_question=$user->check_question;
     $chapter_list=$user->chapter_list;
    $question    = $user->question;
    $option1  = $user->option1;
    $option2  = $user->option2;
    $option3  = $user->option3;
    $option4  = $user->option4;
    $ans = $user->ans;
    

  ?>

  <tr>

    <td><?php echo $id;?></td>
    
    <td><?php echo $question;?></td>
    <td><?php echo $option1;?></td>
    <td><?php echo $option2;?></td>
    <td><?php echo $option3;?></td>
    <td><?php echo $option4;?></td>
    <td><?php echo $ans;?></td>
    

  
    <td>
      <a class="action" href="<?php echo url('delete_chapter');?>/<?php echo $id;?>/<?php echo $check_question;?>">delete</a></td>
      <td><a class="action1" href="<?php echo url('edit_chapter');?>/<?php echo $id;?>/<?php echo $check_question;?>">update</a>

    </td>

  </tr>

    <?php } ?>
    </tbody>
        
</table>
{{ $user11->links() }}
</div>
</div>
</div>
</main>
</body>