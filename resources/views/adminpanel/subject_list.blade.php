@include('adminpanel.header1')
<div class="main">
<aside class="sidebar">

  <div id="header1">


               <ul id="navigation1"> 
               <li> <h2 class="adminis">Adminise</h2></li>
                <li class="selected"> <a id="link" href='#COURSE_list'>COURSE LIST</a></li>
                <li> <a id="link"  href='#add_course'>ADD COURSE </a></li>
               
                  <li class="selected"> <a id="link" href='#CHAPTER_list'>ADD CHAPTER NAME</a></li>
                    <li> <a id="link"  href='#chapterName'>SHOW CHAPTER NAME </a></li>
                     <li><a id="link"  href='#formula_show'>FORMULAS & RULES</a></li>
                 <li> <a id="link"  href='#formula_add'>ADD RULES</a></li>
                   
              
               
               
                    </ul>
 </div>      
</aside>
    
  
  <div id="add_course" class="panel">
  <div class="form-content">
			<div id="list">
 
            <form id="formElem" class="form" name="formElem" method="POST"  action="{!! route('course') !!}">
                    {!! csrf_field() !!}
                     <fieldset class="step">
                         <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                            <label for="course" class="col-md-4 control-label">ADD COURSE</label>

                            <div class="col-md-6">
                                <input id="course" type="text" class="form-control12" name="course" value="{{ old('course') }}" required autofocus>

                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <!--  <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">add image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control11" name="image" value="{{ old('image') }}" required autofocus>
                             
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->
                          
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    submit 
                                </button>
                            </div>
                        </div>

                   
                </fieldset>
                      
                 </form>
                 <!-- <h4> <a class="show"  href='add_mcq'>Show Course list </a></h4>-->
  </div>
    </div>
    </div> 
         
 <div id="COURSE_list" class="panel">
  <div class="form-content4">
    <h3 class="h1">Course list</h3>
      <div id="list4">
    

         <table class="table table-bordered table-hover3">
                   
                    
                   <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
                  <th>course</th>
                   <th>Delete</th>
                    <th>Edit</th>
                   </tr></thead>
    <tbody>
    
        <?php

    foreach($list as $list1){

        $id    = $list1->id;
        $course=$list1->course;

    ?>

    <tr>

        <td><?php echo $id;?></td>
        
        <td><a class="action3" href="<?php echo url('list_course');?>/<?php echo $id;?>"><?php echo $course;?></a></td>
        <td>
            <a class="action1" href="<?php echo url('delete_course');?>/<?php echo $id;?>/<?php echo $course;?>">delete</a></td>
            <td><a class="action" href="<?php echo url('edit_course');?>/<?php echo $id;?>/<?php echo $course;?>">update</a>

        </td>

          <?php } ?>
          </tr>
    </tbody>
        
</table>
</div>

</div>
</div>

		</div>
		</div>
		</div> 
         
 <div id="CHAPTER_list" class="panel">
  <div class="form-content3">
    <h3 class="h1">Course list</h3>
      <div id="list3">
    

         <table class="table table-bordered table-hover3">
                   
                   <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
                  <th>course</th>
                   
                   </tr></thead>
    <tbody>
    
        <?php

    foreach($list as $list){

        $id    = $list->id;
        $course=$list->course;

    ?>

    <tr>

        <td><?php echo $id;?></td>
        
        <td><a class="action3" href="<?php echo url('chapter_name');?>/<?php echo $id;?>/<?php echo $course;?>"><?php echo $course;?></a></td>
      

          <?php } ?>
          </tr>
    </tbody>
        
</table>
</div>

</div>
</div>

<div id="chapterName" class="panel">
  <div class="form-content3">
    <h3 class="h1">Course list</h3>
      <div id="list3">
    

         <table class="table table-bordered table-hover3">
                   
                   <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
                  <th>course</th>
                   
                   </tr></thead>
    <tbody>
    
        <?php

    foreach($list2 as $list2){

        $id    = $list2->id;
        $course=$list2->course;

    ?>

    <tr>

        <td><?php echo $id;?></td>
        
        <td><a class="action3" href="<?php echo url('show_chapter_list');?>/<?php echo $id;?>"><?php echo $course;?></a></td>
      

          <?php } ?>
          </tr>
    </tbody>
        
</table>
</div>

</div>
</div>


<div id="formula_show" class="panel">
  <div class="form-content3">
    <h3 class="h1">Course list</h3>
      <div id="list3">
    

         <table class="table table-bordered table-hover3">
                   
                   <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
                  <th>course</th>
                   
                   </tr></thead>
    <tbody>
    
        <?php

    foreach($list3 as $list3){

        $id    = $list3->id;
        $course=$list3->course;

    ?>

    <tr>

        <td><?php echo $id;?></td>
        
        <td><a class="action3" href="<?php echo url('Show_formula');?>/<?php echo $id;?>"><?php echo $course;?></a></td>
      

          <?php } ?>
          </tr>
    </tbody>
        
</table>
</div>

</div>
</div>

<div id="formula_add" class="panel">
  <div class="form-content3">
    <h3 class="h1">Course list</h3>
      <div id="list3">
    

         <table class="table table-bordered table-hover3">
                   
                   <thead>
                   
                   <tr>
                  <th>ID</th>  
                   
                  <th>course</th>
                   
                   </tr></thead>
    <tbody>
    
        <?php

    foreach($list4 as $list4){

        $id    = $list4->id;
        $course=$list4->course;

    ?>

    <tr>

        <td><?php echo $id;?></td>
        
        <td><a class="action3" href="<?php echo url('Add_formula');?>/<?php echo $id;?>"><?php echo $course;?></a></td>
      

          <?php } ?>
          </tr>
    </tbody>
        
</table>
</div>

</div>
</div>
		<!-- <div id="physics2_list" class="panel">
		 <div class="content">
			<div id="list">

               <ul id="navigation_list"> 
                      <li><a  href="physics2">ADD CHAPTER BASED MCQ</a></li>
              
                       <li><a  href="physics2nd">SHOW CHAPTER BASED MCQ</a></li>
                       <li><a  href="chapter_phy2">ADD CHAPTER BASED MODEL TEST</a></li>
                         <li><a  href="show_phy2">SHOW CHAPTER BASED MODEL TEST</a></li>
                          <li><a  href="mixed_test">ADD 8 SUBJECTS MIXED MODEL TEST</a></li>
                          <li><a  href="show_mixed">SHOW 8 SUBJECT MIXED MODEL TEST</a></li>
                           <li><a href="phy2_singletest">SHOW SINGLE SUBJECTS  MODEL TEST</a></li> 
                            <li><a  href="single_test2">ADD SINGLE SUBJECT MODEL TEST</a></li>
                              <li><a href="formulaphy">ADD FORMULAS</a></li> 
                              <li><a  href="showphy">SHOW FORMULAS</a></li>
                    </ul>

		</div>
		</div>
		</div> 
		<!-- <div id="chemistry1_list" class="panel">
		  <div class="content">
			<div id="list">

               <ul id="navigation_list"> 
                     <li><a  href="chemistry1">ADD CHAPTER BASED MCQ</a></li>
              
                       <li><a  href="chemistry1st">SHOW CHAPTER BASED MCQ</a></li>
                       <li><a  href="chapter_che1">ADD CHAPTER BASED MODEL TEST</a></li>
                         <li><a  href="show_che1">SHOW CHAPTER BASED MODEL TEST</a></li>
                          <li><a  href="mixed_test">ADD 8 SUBJECTS MIXED MODEL TEST</a></li>
                          <li><a  href="show_mixed">SHOW 8 SUBJECT MIXED MODEL TEST</a></li>
                           <li><a href="show_single2">SHOW SINGLE SUBJECTS  MODEL TEST</a></li> 
                            <li><a  href="single_test2">ADD SINGLE SUBJECT MODEL TEST</a></li>
                              <li><a href="formulaphy">ADD FORMULAS</a></li> 
                              <li><a  href="showphy">SHOW FORMULAS</a></li>
  
                    </ul>

		</div>
		</div>
		</div> 
		 <div id="chemistry2_list" class="panel">
		  <div class="content">
			<div id="list">

               <ul id="navigation_list"> 
                        <li><a  href="chemistry2">ADD CHAPTER BASED MCQ</a></li>
              
                       <li><a  href="chemistry2nd">SHOW CHAPTER BASED MCQ</a></li>
                       <li><a  href="chapter_che2">ADD CHAPTER BASED MODEL TEST</a></li>
                         <li><a  href="show_che1">SHOW CHAPTER BASED MODEL TEST</a></li>
                          <li><a  href="mixed_test">ADD 8 SUBJECTS MIXED MODEL TEST</a></li>
                          <li><a  href="show_mixed">SHOW 8 SUBJECT MIXED MODEL TEST</a></li>
                           <li><a href="show_single2">SHOW SINGLE SUBJECTS  MODEL TEST</a></li> 
                            <li><a  href="single_test2">ADD SINGLE SUBJECT MODEL TEST</a></li>
                              <li><a href="formulaphy">ADD FORMULAS</a></li> 
                              <li><a  href="showphy">SHOW FORMULAS</a></li>
                    </ul>

		</div>
		</div> 
		</div> 
		 <div id="biology1_list" class="panel">
		  <div class="content">
			<div id="list">

               <ul id="navigation_list"> 
                       <li><a  href="biology1">ADD CHAPTER BASED MCQ</a></li>
              
                       <li><a  href="biology1st">SHOW CHAPTER BASED MCQ</a></li>
                       <li><a  href="chapter_bio1">ADD CHAPTER BASED MODEL TEST</a></li>
                         <li><a  href="show_bio1">SHOW CHAPTER BASED MODEL TEST</a></li>
                          <li><a  href="mixed_test">ADD 8 SUBJECTS MIXED MODEL TEST</a></li>
                          <li><a  href="show_mixed">SHOW 8 SUBJECT MIXED MODEL TEST</a></li>
                           <li><a href="show_single4">SHOW SINGLE SUBJECTS  MODEL TEST</a></li> 
                            <li><a  href="single_test4">ADD SINGLE SUBJECT MODEL TEST</a></li>
                              
  
                    </ul>

		</div>
		</div>
		</div>
		<div id="biology2_list" class="panel">
		 <div class="content">
			<div id="list">

               <ul id="navigation_list"> 
                       <li><a  href="biology2">ADD CHAPTER BASED MCQ</a></li>
              
                       <li><a  href="biology2nd">SHOW CHAPTER BASED MCQ</a></li>
                       <li><a  href="chapter_bio2">ADD CHAPTER BASED MODEL TEST</a></li>
                         <li><a  href="show_bio2">SHOW CHAPTER BASED MODEL TEST</a></li>
                          <li><a  href="mixed_test">ADD 8 SUBJECTS MIXED MODEL TEST</a></li>
                          <li><a  href="show_mixed">SHOW 8 SUBJECT MIXED MODEL TEST</a></li>
                           <li><a href="show_single5">SHOW SINGLE SUBJECTS  MODEL TEST</a></li> 
                            <li><a  href="single_test5">ADD SINGLE SUBJECT MODEL TEST</a></li>
                              
                    </ul>

		</div>
		</div>
		</div>
		<div id="math1_list" class="panel">
		 <div class="content">
			<div id="list">

               <ul id="navigation_list"> 
                      <li><a  href="math1">ADD CHAPTER BASED MCQ</a></li>
              
                       <li><a  href="math1">SHOW CHAPTER BASED MCQ</a></li>
                       <li><a  href="chapter_math1">ADD CHAPTER BASED MODEL TEST</a></li>
                         <li><a  href="show_math1">SHOW CHAPTER BASED MODEL TEST</a></li>
                          <li><a  href="mixed_test">ADD 8 SUBJECTS MIXED MODEL TEST</a></li>
                          <li><a  href="show_mixed">SHOW 8 SUBJECT MIXED MODEL TEST</a></li>
                           <li><a href="show_single6">SHOW SINGLE SUBJECTS  MODEL TEST</a></li> 
                            <li><a  href="single_test6">ADD SINGLE SUBJECT MODEL TEST</a></li>
                             <li><a href="formulaphy">ADD FORMULAS</a></li> 
                              <li><a  href="showphy">SHOW FORMULAS</a></li>
                    </ul>

		</div>
		</div>
		</div>
		<div id="math2_list" class="panel">
		 <div class="content">
			<div id="list">

               <ul id="navigation_list"> 
                      <li><a  href="math2">ADD CHAPTER BASED MCQ</a></li>
              
                       <li><a  href="math2nd">SHOW CHAPTER BASED MCQ</a></li>
                       <li><a  href="chapter_math2">ADD CHAPTER BASED MODEL TEST</a></li>
                         <li><a  href="show_math2">SHOW CHAPTER BASED MODEL TEST</a></li>
                          <li><a  href="mixed_test">ADD 8 SUBJECTS MIXED MODEL TEST</a></li>
                          <li><a  href="show_mixed">SHOW 8 SUBJECT MIXED MODEL TEST</a></li>
                           <li><a href="show_single7">SHOW SINGLE SUBJECTS  MODEL TEST</a></li> 
                            <li><a  href="single_test7">ADD SINGLE SUBJECT MODEL TEST</a></li>
                             <li><a href="formulaphy">ADD FORMULAS</a></li> 
                              <li><a  href="showphy">SHOW FORMULAS</a></li>
  
                    </ul>

		</div>
			</div>
		</div>
    
  <div id="header1">


               <ul id="navigation1"> 
                <li> <a id="link"  href='add_mcq'>ADD NEW COURSE </a></li>
               
                  <li class="selected"> <a id="link" href='#physics1_list'>PHYSICS 1ST PAPER</a></li>
                    <li> <a id="link"  href='#physics2_list'>PHYSICS 2ND PAPER </a></li>
                   <li> <a id="link"  href='#chemistry1_list'>CHEMISTRY 1ST PAPER</a></li>
                    <li><a id="link"  href='#chemistry2_list'>CHEMISTRY 2ND PAPER</a></li>
                   <li> <a id="link"  href='#biology1_list'>BIOLOGY 1ST PAPER </a></li>
                 <li> <a id="link"  href='#biology2_list'>BIOLOGY 2ND PAPER</a></li>
                 <li> <a id="link"  href='#math1_list'>MATH 1ST PAPER </a></li>
                 <li>  <a id="link"  href='#math2_list'>MATH 2ND PAPER</a></li>
                    </ul>
       

    
    </div>
 

		</div>
    -->
    <div class="content-wrapper">
        <div class="container-fluid">
        @yield('content')
        </div>
    </div>



       
  </main>
   <script>

$(document).ready(function() {
    $("#navigation1 li").click(function() {
        $(this).addClass('active').siblings('li').removeClass('active');
    });
});
   function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    }
    </script>
     
    {!! Html::script('quiz1/js/classie.js') !!} 
        {!! Html::script('quiz1/js/app.js') !!} 
    {!! Html::script('quiz1/js/main.js') !!}
  </body>

</html>
