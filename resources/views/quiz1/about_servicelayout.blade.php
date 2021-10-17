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
                                        <li> {!! HTML::link('/about', 'SERVICES')!!}</li> 
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
<script>
  
    (function() {
			var pages = [].slice.call(document.querySelectorAll('.pages > .page')),
				currentPage = 0,
				
				revealerOpts = {
					// the layers are the elements that move from the sides
					nmbLayers : 3,
					// bg color of each layer
					bgcolor : ['#e1e1e1', '#ef3b3b', '#59DAA4'],
					// effect classname
					effect : 'anim--effect-3',
					onStart : function(direction) {
						// next page gets class page--animate-[direction]
						var nextPage = pages[currentPage === 0 ? 1 : 0];
						classie.add(nextPage, 'page--animate-' + direction);
					},
					onEnd : function(direction) {
						// remove class page--animate-[direction] from next page
						var nextPage = pages[currentPage === 0 ? 1 : 0];
						nextPage.className = 'page';
					}
				};
				revealer = new Revealer(revealerOpts);

			// clicking the page nav buttons
		document.querySelector('button.pagenav__button--bottom').addEventListener('click', function() { reveal('bottom'); });
			// triggers the effect by calling instance.reveal(direction, callbackTime, callbackFn)
			function reveal(direction) {
				var callbackTime = 750,
					callbackFn = function() {
						classie.remove(pages[currentPage], 'page--current');
						currentPage = currentPage === 0 ? 1 : 0;
						classie.add(pages[currentPage], 'page--current');	
					};

				revealer.reveal(direction, callbackTime, callbackFn);
			}

			// changing the effect..
			var effectCtrl = document.getElementById('select-effect');
			effectCtrl.addEventListener('change', changeEffect);
			// force it to be the first opt as default
			effectCtrl.value = 'effect-3';

			function changeEffect() {
				revealer.destroy();
				var revealerOpts = {
					// the layers are the elements that move from the sides
					nmbLayers : Number(this.options[this.selectedIndex].getAttribute('data-layers')),
					// bg color of each layer
					bgcolor : this.options[this.selectedIndex].getAttribute('data-colors').split(','),
					// effect classname
					effect : 'anim--' + this.value,
					onStart : function(direction) {
						// next page gets class page--animate-[direction]
						var nextPage = pages[currentPage === 0 ? 1 : 0];
						classie.add(nextPage, 'page--animate-' + direction);
					},
					onEnd : function(direction) {
						// remove class page--animate-[direction] from next page
						var nextPage = pages[currentPage === 0 ? 1 : 0];
						nextPage.className = 'page';
					}
				};
				
				revealer = new Revealer(revealerOpts);
			}
		})();

</script>
<div class="revealer" style="width: 100vw; height: 100vh; transform: rotate3d(0, 0, 1, 180deg); opacity: 0;"><div style="background:#0092DD" class="revealer__layer"></div><div style="background:#fff" class="revealer__layer"></div><div style="background:#59DAA4" class="revealer__layer"></div></div>	
{!! Html::script('quiz1/js/toucheffects.js') !!}
{!! Html::script('quiz1/https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
{!! Html::script('quiz1/js/bootstrap.min.js') !!}
{!! Html::script('quiz1/js/wow.js') !!} 
{!! Html::script('quiz1/js/toucheffects.js') !!}
	
	</body>
</html>
