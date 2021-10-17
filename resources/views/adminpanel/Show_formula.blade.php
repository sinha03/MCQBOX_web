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
                
     <div class="list-content">
      <h3 class="h2">FORMULA lIST</h3>
            <div id="list">

         <table class="table table-bordered table-hover2">
                   
                   <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
                  <th>FORMULA</th>
                  <th>DELETE</th>
                    <th>EDIT</th>
                   </tr></thead>
    <tbody>
    
        <?php

    foreach($user as $user){

        $all_id= $user->all_id;
        $id=$user->id;
        $formula=$user->formula;

    ?>

    <tr>

        <td><?php echo $all_id;?></td>
        
        <td><?php echo $formula;?></a></td>
       <td>
            <a class="action1" href="<?php echo url('delete_formula');?>/<?php echo $all_id;?>">delete</a></td>
            <td><a class="action" href="<?php echo url('edit_formula');?>/<?php echo $all_id;?>">update</a>

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
