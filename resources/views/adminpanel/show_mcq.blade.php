@include('adminpanel.header')



<div class="row">
          <h2>{!! Html::link('/list_course','back')!!}</h2>
          <div class="col-md-10">

            <table border="3px" class="table table-bordered">

	<tr>

		<th>Id</th>
	    <th>second_id</th>
        <th>third_id</th>
         <th>forth_id</th>
        <th>fifth_id</th>
        <th>six_id</th>
		<th>question</th>
		<th>option1</th>
		<th>option2</th>
		<th>option3</th>
		<th>option4</th>
		<th>ans</th>
		<th>action</th>

	</tr>

	<?php

	foreach($user as $user){

		$id    = $user->id;
		$second_id=$user->second_id;
		$third_id=$user->third_id;
		$forth_id=$user->forth_id;
		$fifth_id=$user->fifth_id;
		$six_id=$user->six_id;
		$question    = $user->question;
		$option1  = $user->option1;
		$option2  = $user->option2;
		$option3  = $user->option3;
		$option4  = $user->option4;
		$ans = $user->ans;
		

	?>

	<tr>

		<td><?php echo $id;?></td>
		<td><?php echo $second_id;?></td>
		<td><?php echo $third_id;?></td>
		<td><?php echo $forth_id;?></td>
		<td><?php echo $fifth_id;?></td>
		<td><?php echo $six_id;?></td>
		<td><?php echo $question;?></td>
		<td><?php echo $option1;?></td>
		<td><?php echo $option2;?></td>
		<td><?php echo $option3;?></td>
		<td><?php echo $option4;?></td>
		<td><?php echo $ans;?></td>
		

	</tr>

	  <?php } ?>
</table>
</div>
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
