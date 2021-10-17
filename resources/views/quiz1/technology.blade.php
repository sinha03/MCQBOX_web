@extends('quiz1.technolayout')
@section('Title','Quiz App') 
@section('content') 

        <div class="content">
                 <!-- <div class="content-view">

                          <div class="logo-list">
                            <div class="logo">
                               <div class="collapse navbar-collapse navbar-ex1-collapse">
                                  
                                  {!! Html::image('quiz1/images/logoname.png', 'a picture', array('id' => 'logo-navbar-middle')) !!}
                               </div>
                           </div>
                         </div>

                           <div class="navigation">
                                <div class="group active">
     
     
                                    <ul>
                                        <li>{!! HTML::link('/introduction', 'INTRODUCTION')!!}</li> 
                                         <li>THE TECHNOLOGY</li> 
                                         <li>{!! HTML::link('/services', 'ABOUT US')!!}</li> 
                                         <li>{!! HTML::link('/why_mcq', 'WHY MCQ?')!!}</li>
                                    </ul>
                               </div>
                           </div>
                 </div>-->
       	
       <div class="techno-content">           
           <ul>
        	<li>
            	<div class="port-4 effect-1">
                	<div class="image-box">
                    	{!! Html::image('quiz1/images/photo2.jpg') !!}
                    </div>
                    <div class="text-desc">
                    	<h3 class="head">Mobile App</h3>
                        <p class="text1">Here we used both Web Application and Mobile App for students so that they can used both from anywhere and anytime.</p>
                    	
                    </div>
                </div>
            </li>
            <li>
            	<div class="port-4 effect-2">
                	<div class="image-box">
                    {!! Html::image('quiz1/images/photo8.jpg') !!}
                    </div>
                    <div class="text-desc">
                    	<h3 class="head">Digital Relationships</h3>
                        <p class="text1">Trust is the singlemost important ingredient missing from digital relationships but you should trust this application that doesn't loss your hope.<strong>MCQ BOX APP</strong> is a digital mechanism of trust</p>
                    	
                    </div>
                </div>
            </li>
            <li>
            	<div class="port-4 effect-3">
                	<div class="image-box">
                    	{!! Html::image('quiz1/images/photo11.jpg') !!}
                    </div>
                    <div class="text-desc">
                    	<h3 class="head">University Admission</h3>
                        <p class="text1">The hit mobile mcq app combines cute designs with a wide variety of  questions and a turn-based head-to-head system to great effect. students may study with friends or family, and spin the wheel to answer questions based on physices,chemistry,boilogy,math to become the first to acquire the goals like university admission...</p>
                    	
                    </div>
                </div>
            </li>
        </ul>
			
	 </div>	
</div>	
 </div>
       </div>
      </main>
@endsection