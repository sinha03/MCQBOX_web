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
       
<div id="chapterName">
      <div class="list-content2">
      <h3 class="h2">CHAPTER LIST</h3>
            <div id="list2">
    

         <table class="table table-bordered table-hover2">
                   
                   <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
                  <th>CHAPTER</th>
                  <th>CHAPTER NAME</th> 
                  <th>DELETE</th>
                  <th>EDIT</th>
                   </tr></thead>
    <tbody>
    
        <?php

    foreach($list2 as $list2){

        $chap_id    = $list2->chap_id;
        $chapter=$list2->chapter;
        $chapter_name=$list2->chapter_name;

    ?>

    <tr>

        <td><?php echo $chap_id;?></td>
        
        <td><?php echo $chapter;?></td>
      
        <td><?php echo $chapter_name;?></td>

         <td>
            <a class="action1" href="<?php echo url('delete_chapter');?>/<?php echo $chap_id;?>">delete</a></td>
            <td><a class="action" href="<?php echo url('edit_chapter');?>/<?php echo $chap_id;?>">update</a>

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