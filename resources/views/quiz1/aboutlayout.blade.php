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
		{!! Html::style('quiz1/css/component.css') !!}
		{!! Html::style('quiz1/css/base.css') !!} 
		{!! Html::style('quiz1/css/normalize.css') !!} 
		{!! Html::style('quiz1/css/header.css') !!} 
        {!! Html::script('quiz1/js/modernizr-custom.js') !!}
        	
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
                                           
                                        <li>SERVICES</li> 
                                          <li>{!! HTML::link('/services', 'ABOUT US')!!}</li>
                                         <li> {!! HTML::link('/team', 'PROFILE')!!}</li> 
                                         <li>  {!! HTML::link('/contact', 'CONTACT US')!!}</li>
                                      </ul>
                                  </div>
                               </div>
                           </div>
      
      
		   </header>
 @yield('content') 
{!! Html::script('quiz1/js/classie.js') !!}  
{!! Html::script('quiz1/js/main.js') !!} 

{!! Html::script('quiz1/https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
{!! Html::script('quiz1/js/bootstrap.min.js') !!}
{!! Html::script('quiz1/js/wow.js') !!} 
{!! Html::script('quiz1/js/toucheffects.js') !!} 	
	</body>
</html>
