@extends('quiz1.about_servicelayout')
@section('Title','Quiz App') 
@section('content') 

	    
  
			 <div class="content">

		        <section class="gridd">
					
					<a class="grid__item11" href="#">
						<h2 class="title title--preview">PHYSICS 1ST PAPER</h2>
						<div class="loader">
						<img class="meta__avatar" src="quiz1/images/11.png" alt="author01"> </div>
						<div class="meta meta--preview">	
						<span class="meta__date"><i class="fa fa-calendar-o">Here we add full physics 1st paper book mcq's thats help a students for prepare himself/herself for all question thats he/she face in admission test or HSC exam or any other exam.</i> </span>
						</div>
					</a>
					<a class="grid__item11" href="#">
						<h2 class="title title--preview">PHYSICS 2ND PAPER</h2>
						<div class="loader">
						<img class="meta__avatar" src="quiz1/images/14.png" alt="author01"> </div>
						<div class="meta meta--preview">
						<span class="meta__date"><i class="fa fa-calendar-o">Here we add full physics 2nd paper book mcq's thats help a students for prepare himself/herself for all question thats he/she face in admission test or HSC exam or any other exam. </i></span>
						</div>
					</a>
					<a class="grid__item11" href="#">
						<h2 class="title title--preview">CHEMISTRY 1ST PAPER</h2>
						<div class="loader">
						<img class="meta__avatar" src="quiz1/images/5.png" alt="author01"> </div>
						<div class="meta meta--preview">
						
							<span class="meta__date"><i class="fa fa-calendar-o">Here we add full Chemistry 1st paper book mcq's thats help a students for prepare himself/herself for all question thats he/she face in admission test or HSC exam or any other exam.</i> </span>
						
						</div>
					</a>
					<a class="grid__item11" href="#">
						<h2 class="title title--preview">CHEMISTRY 2ND PAPER</h2>
						<div class="loader">
						<img class="meta__avatar" src="quiz1/images/19.png" alt="author01"> </div>
						<div class="meta meta--preview">
							
							<span class="meta__date"><i class="fa fa-calendar-o">Here we add full Chemistry 2nd paper book mcq's thats help a students for prepare himself/herself for all question thats he/she face in admission test or HSC exam or any other exam. </i></span>
						</div>
					</a>
					
				</section>
				   <!-- <div class="grid1">

				   <div class="grid__item1">
						   <div class="product1">
							<div class="product__bg1"><h4 class="product__name">Here we add full physics 1at paper book mcq's thats help a students for prepare himself/herself for all question thats he/she face in admission test or HSC exam or any other exam. </h4></div>
							<img class="product__img1" src="quiz1/images/icon/12.png"/>
							<h2 class="product__title1">PHYSICS 1ST PAPER</h2>
							
							

						</div>
						
					  </div>-->
			
	          </div>
	        </div>
				<div class="page">
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
				   <section class="gridd">
					
					<a class="grid__item11" href="#">
						<h2 class="title title--preview">BIOLOGY 1ST PAPER</h2>
						<div class="loader">
						<img class="meta__avatar" src="quiz1/images/3.png" alt="author01"> </div>
						<div class="meta meta--preview">	
						<span class="meta__date"><i class="fa fa-calendar-o">Here we add full Biology 1st paper book mcq's thats help a students for prepare himself/herself for all question thats he/she face in admission test or HSC exam or any other exam.</i> </span>
						</div>
					</a>
					<a class="grid__item11" href="#">
						<h2 class="title title--preview">BIOLOGY 2ND PAPER</h2>
						<div class="loader">
						<img class="meta__avatar" src="quiz1/images/16.png" alt="author01"> </div>
						<div class="meta meta--preview">
						<span class="meta__date"><i class="fa fa-calendar-o">Here we add full Biology 2nd paper book mcq's thats help a students for prepare himself/herself for all question thats he/she face in admission test or HSC exam or any other exam. </i></span>
						</div>
					</a>
					<a class="grid__item11" href="#">
						<h2 class="title title--preview">MATH 1ST PAPER</h2>
						<div class="loader">
						<img class="meta__avatar" src="quiz1/images/2.png" alt="author01"> </div>
						<div class="meta meta--preview">
						
							<span class="meta__date"><i class="fa fa-calendar-o">Here we add full Math 1st paper book mcq's thats help a students for prepare himself/herself for all question thats he/she face in admission test or HSC exam or any other exam.</i> </span>
						
						</div>
					</a>
					<a class="grid__item11" href="#">
						<h2 class="title title--preview">MATH 2ND PAPER</h2>
						<div class="loader">
						<img class="meta__avatar" src="quiz1/images/22.png" alt="author01"> </div>
						<div class="meta meta--preview">
							
							<span class="meta__date"><i class="fa fa-calendar-o">Here we add full Math 2nd paper book mcq's thats help a students for prepare himself/herself for all question thats he/she face in admission test or HSC exam or any other exam. </i></span>
						</div>
					</a>
					
				</section>

					<!-- <div class="content">
				   <div class="grid1">
				    <div class="grid__item1">
						   <div class="product1">
							<div class="product__bg1"><h4 class="product__name">Here we add full biology 1st paper book mcq's thats help a students for prepare himself/herself for all question thats he/she face in admission test or HSC exam or any other exam.</h4></div>
							<img class="product__img1" src="quiz1/images/icon/4.png"/>
							<h2 class="product__title1">BIOLOGY 1ST PAPER</h2>
							

						</div>
						
					  </div>-->
					   
		</div>
	</div>
				<nav class="pagenav">
			                  	<button class="pagenav__button pagenav__button--bottom" aria-label="Navigate bottom">click</button>

		                    </nav>
	         
           
   </main>
@endsection		