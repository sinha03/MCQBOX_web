@extends('courses.list_course')
@section('content')
<div class="row">

</div>

		<!-- /Contact -->
		
		<!-- Header with Navigation -->
		<div id="header1">
		
			 <?php
            foreach($list as $list){
      
              ?>

              
               <ul id="navigation1"> 
                      <li> {!! Html::link('/list_course','back')!!} </li>
            
                        <a href='add_mcq/{{ $list->id }}'><li>{{ $list->add_MCQ }}</li></a>
                            <a href='show_mcq/{{ $list->id }}'><li>{{ $list->show_MCQ }}</li></a>
                       
                   
                    
                    </ul>
           
        
             <?php } ?>


			
		</div>
		 </main>
   <script>
   function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    }
    </script>
    {!! Html::script('quiz1/js/classie.js') !!} 
    {!! Html::script('quiz1/js/main.js') !!}
  </body>

</html>

@endsection