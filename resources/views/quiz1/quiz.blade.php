@extends('quiz1.layout')
@section('Title','Quiz App') 
@section('content')  
       <section id="content">
                  <div class="content-view">

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
                                         <li>{!! HTML::link('/introduction', 'INTRODUCTION')!!} 
                                       </li> 
                                         <li>{!! HTML::link('/technology', 'THE TECHNOLOGY')!!}</li> 
                                         <li>{!! HTML::link('/services', 'SERVICES')!!}</li> 
                                         <li>{!! HTML::link('/why_mcq', 'WHY MCQ?')!!}</li>
                                    </ul>
                               </div>
                           </div>
                 </div>     
                      
                  <div class="back-inner">
                       <div class="inner">
                           {!! Html::image('quiz1/images/background.png') !!}
                        </div>  
                        <div class="back-caption">
                           
                           <h3>Intelligence is in the head not in age</h3> 
                           
                        
                           
                        </div>
                          
                   </div>
               
                


          </section>      
       
@endsection
     