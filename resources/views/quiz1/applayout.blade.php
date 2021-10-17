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
		
		{!! Html::style('quiz1/css/normalize1.css') !!}
		{!! Html::style('quiz1/css/demo1.css') !!}
		{!! Html::style('quiz1/css/revealer.css') !!}

          <!-- {!! Html::style('quiz1/https://fonts.googleapis.com/css?family=Hind+Madurai:300,400') !!}
           {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') !!}
        {!! Html::script('quiz1/js/modernizr-custom.js') !!}-->
        <script>document.documentElement.className = 'js';</script>
	</head>
	<body class="demo-1 loading">
	<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-nav-arrow" viewBox="0 0 24 17">
				<title>nav arrow</title>
				<polygon points="14.1333333 2.61666667 18.9333333 7.41666667 0 7.41666667 0 10.0833333 18.9333333 10.0833333 14.1333333 14.8833333 16 16.75 24 8.75 16 0.75"></polygon>
			</symbol>
		</svg>
		<!-- SVG symbol used for navigation arrows -->
		<main >
      <div class="frame">
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
                                           <li>MCQ BOX APP</li>   
                                        <li> {!! HTML::link('/about', 'SERVICES')!!}</li> 
                                         <li>{!! HTML::link('/services', 'ABOUT US')!!}</li>
                                         <li> {!! HTML::link('/team', 'PROFILE')!!}</li> 
                                         <li>  {!! HTML::link('/contact', 'CONTACT US')!!}</li>
                                      </ul>
                                  </div>
                               </div>
                           </div>
      
        </header>
		  <!-- <header id="header">

		      <div class="box-left">
                 <div class="item bt-menu">
                     <div class="ico-menu">
                      <div id="myNav" class="overlay">
                                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                             <div class="back-logo">
                               <div class="collapse navbar-collapse navbar-ex1-collapse">
                                  
                                  {!! Html::image('quiz1/images/back-logo.png', 'a picture', array('id' => 'logo-navbar-middle')) !!}
                               </div>
                             </div>
                           <div class="overlay-content">
                              
                        
                               {!! HTML::link('/introduction', 'INTRODUCTION ')!!}
                               {!! HTML::link('/technology', 'THE TECHNOLOGY')!!}
                               {!! HTML::link('/services', 'ABOUT US')!!} 
                               {!! HTML::link('/why_mcq', 'WHY MCQ?')!!}
                           </div>
                     </div>
                        <div class="menu" >   
                           <span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776; </span>
                        </div>
                     </div>
                 </div> 
                  <div class="header-view">

                        
                                  
                                  {!! Html::image('quiz1/images/logoname.png', 'a picture') !!}
                        
                  </div>
                           <div class="navigation">
                                <div class="group active">
                                 
     
                                      <ul >
                                         <!-- <li><a class="pagenav__button pagenav__button--top" aria-label="Navigate top">MCQ BOX APP</a> </li>
                                           <li>MCQ BOX APP</li>   
                                        <li> {!! HTML::link('/about', 'SERVICES')!!}</li> 
                                         <li> {!! HTML::link('/team', 'OUR TEAM')!!}</li> 
                                         <li>  {!! HTML::link('/contact', 'CONTACT US')!!}</li>
                                      </ul>
                                  </div>
                               </div>
                           </div>
                </header>-->
@yield('content') 

{!! Html::script('quiz1/js/imagesloaded.pkgd.min.js') !!} 
{!! Html::script('quiz1/js/revealer.js') !!} 
{!! Html::script('quiz1/js/demo.js') !!} 
<script> 
 {const DOM = {};
			DOM.body = document.body;
			DOM.gridElems = Array.from(document.querySelectorAll('.grid'));
			
			imagesLoaded(DOM.body, {background: true} , () => {
				DOM.body.classList.remove('loading');
				new Slideshow(DOM.gridElems);
			});
    }
      
    

  </script>
	</body>
</html>
