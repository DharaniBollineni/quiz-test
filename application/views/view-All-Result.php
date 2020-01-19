
<link rel="stylesheet" href="<?php echo base_url(); ?>css/index_content_style.css">

<center>


	</br></br>
	<div class="container">
		</br></br>
 <h1> View All Results </h1>
    <hr>
<!--Table-->
<table class="table table-striped w-auto" id="mydata">

  <!--Table head-->
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Result</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
	<?php if($results) {
		foreach ($results as $value) {
	?>
    <tr class="table-info">
		<td><?php echo $value->quiz_id; ?></td>
		<td><?php echo $value->quiz_name; ?></td>
		<td><?php echo $value->quiz_result; ?></td>
		<td><a href="">Edit</a></td>   
    </tr>
	<?php
		}
	} ?> 
  </tbody>
  <!--Table body-->


</table>
<!--Table-->
</div>

</center>















 