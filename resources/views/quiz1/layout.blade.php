
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
	       <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	       <title>@yield('title')  </title>
	      <!--boostrap-->
	         <link href="css/bootstrap.min.css" rel="stylesheet">
           <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600|Merriweather:400' rel='stylesheet' type='text/css'>
  
           {!! Html::style('quiz1/css/style.css') !!}
           {!! Html::style('quiz1/css/animate.css') !!}
           {!! Html::style('quiz1/css/bootstrap.css') !!}
            {!! Html::style('quiz1/css/bootstrap-theme.css' )!!}
            {!! Html::style('quiz1/css/bootstrap.min.css') !!}
           {!! Html::style('quiz1/https://fonts.googleapis.com/css?family=Hind+Madurai:300,400') !!}
           {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') !!}
          {!! Html::script('quiz1/js/modernizr-custom.js') !!}
	
  </head>

  <body>
       <div id="wrapper">

       	   <header id="header"> 
         
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
                              
                             <li>{!! HTML::link('/app', 'MCQ BOX APP')!!}</li> 
                             <li>{!! HTML::link('/about', 'ABOUT US')!!}</li> 
                             <li>{!! HTML::link('/team', 'OUR TEAM')!!}</li> 
                           <li>{!! HTML::link('/contact', 'CONTACT US')!!}</li> 
                           </div>
                     </div>
                        <div class="menu" >   
                           <span style="font-size:13px;cursor:pointer" onclick="openNav()">&#9776; menu</span>
                        </div>
                     </div>
                 </div>  
              </div>

                <div class="box-right">

                    <div class="nav navbar-nav navbar-right">
                     
                         <strong> 
                          <a class="open-login" href="/login">Register/login </a>
                        </strong>
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
{!! Html::script('quiz1/js/bootstrap.min.js') !!}
{!! Html::script('quiz1/js/wow.js') !!}	
  {!! Html::script('quiz1/js/classie.js') !!} 
   {!! Html::script('quiz1/js/main.js') !!} 
    </div>
  </body>
</html>