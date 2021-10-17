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
  
            {!! Html::style('quiz1/css/hover-effects.css') !!}
          {!! Html::style('quiz1/css/animate.css') !!}
            {!! Html::style('quiz1/css/bootstrap.min.css') !!}
           {!! Html::style('quiz1/https://fonts.googleapis.com/css?family=Hind+Madurai:300,400') !!}
           {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') !!}
          {!! Html::script('quiz1/js/modernizr-custom.js') !!}
           <script>document.documentElement.className = 'js';</script>
  </head>
  <body class="loading">
   <div id="wrapper">

           <header id="header"> 
         
              <div class="box-left">
                 <div class="item bt-menu">
                     <div class="ico-menu">
                      <div id="myNav" class="overlay">
                                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                             <div class="back-logo">
                               <div class="collapse navbar-collapse navbar-ex1-collapse">
                                  
                                
                               </div>
                             </div>
                           <div class="overlay-content">
                              
                             {!! HTML::link('/mcqapp', 'MCQ BOX APP')!!}
                             {!! HTML::link('/about', 'SERVICES')!!} 
                             {!! HTML::link('/services', 'SERVICES')!!} 
                             {!! HTML::link('/team', 'PROFILE')!!}
                           {!! HTML::link('/contact', 'CONTACT US')!!}
                           </div>
                     </div>
                        <div class="menu" >   
                           <span style="font-size:13px;cursor:pointer" onclick="openNav()">&#9776; menu</span>
                        </div>
                        <div class="logo1">
                        
                        </div>
                     </div>
                 </div>  
              </div>

               <div class="box-right">

                    <div class="nav navbar-nav navbar-right">
                     
                         {!! Html::image('quiz1/images/logoname.png', 'a picture', array('id' => 'logo-navbar-middle')) !!}
                    </div>
               </div>
              
                         
         
           

          </header>
@yield('content') 
{!! Html::script('quiz1/js/imagesloaded.pkgd.min.js') !!} 
{!! Html::script('quiz1/js/revealer.js') !!} 
{!! Html::script('quiz1/js/demo.js') !!} 
<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
 {const DOM = {};
      DOM.body = document.body;
      DOM.gridElems = Array.from(document.querySelectorAll('.grid'));
      
      imagesLoaded(DOM.body, {background: true} , () => {
        DOM.body.classList.remove('loading');
        new Slideshow(DOM.gridElems);
      });
    }

</script>
{!! Html::script('quiz1/https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
{!! Html::script('quiz1/js/bootstrap.min.js') !!}
{!! Html::script('quiz1/js/wow.js') !!} 
  {!! Html::script('quiz1/js/classie.js') !!} 
   {!! Html::script('quiz1/js/main.js') !!} 
{!! Html::script('quiz1/js/toucheffects.js') !!} 
    </div>
  </body>
</html>