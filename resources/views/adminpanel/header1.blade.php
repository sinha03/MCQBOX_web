<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
		 <title>@yield('title')  </title>
		
		<meta name="keywords" content="overlay, reveal, effect, page transition, inspiration, javascript" />
		<link rel="shortcut icon" href="favicon.ico">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600|Merriweather:400' rel='stylesheet' type='text/css'>
       <link type="text/css" rel="stylesheet" href="quiz1/css/jquery.dropdown.css" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
           <div class="header-view">
                                  
                                 <a href="/introduction">{!! Html::image('quiz1/images/logoname.png', 'a picture')  !!}</a>
                        
                  </div>
                  </div>
                 <div class="navbar">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           <!-- <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>-->
                        @else
                           <div class="dropdown">
                             <button class="dropbtn">

                                    {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                               
                              </button>

                                <div class="dropdown-content">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                  </form>
                               </div>
                            </div>
                            @endif
              </div>
            
               
       </header>
                
                
                           
                
              
       

