<!DOCTYPE html>
<html lang="en" class="js no-touch">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>@yield('title')  </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico"> 
  
          
           
       
          {!! Html::style('quiz1/css/component.css') !!}
    {!! Html::style('quiz1/css/base.css') !!} 
    {!! Html::style('quiz1/css/normalize.css') !!} 
    {!! Html::style('quiz1/css/header.css') !!} 
           {!! Html::style('quiz1/https://fonts.googleapis.com/css?family=Hind+Madurai:300,400') !!}
           {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') !!}
        
  </head>
  <body>
 
     
 
 <main class="container">
    <div class="pages">
      <div class="page page--current">
          <header id="header">
                 <div class="box-left">
                  <div class="header-view">

                        <a href="/introduction">{!! Html::image('quiz1/images/logoname.png', 'a picture')  !!}</a>
                                  
                                 <!-- {!! Html::image('quiz1/images/logoname.png', 'a picture') !!}-->
                        
                  </div>
                           <div class="navigation">
                                <div class="group active">
                                 
     
                                      <ul >
                                         <!-- <li><a class="pagenav__button pagenav__button--top" aria-label="Navigate top">MCQ BOX APP</a> </li>-->
                                            <li> {!! HTML::link('/mcqapp', 'MCQ BOX APP')!!}</li> 
                                                                                
                                            <li> {!! HTML::link('/about', 'SERVICES')!!}</li> 
                                            <li>ABOUT US</li>
                                            <li> {!! HTML::link('/team', 'PROFILE')!!}</li> 
                                            <li>  {!! HTML::link('/contact', 'CONTACT US')!!}</li>
                                      </ul>
                                  </div>
                               </div>
                           </div>
      
      
       </header>
@yield('content')  
<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}


</script>
{!! Html::script('quiz1/https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}

    </div>
  </body>
</html>