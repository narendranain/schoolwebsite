
<?php

include('../dbcon.php');
	
	
	
	
	$id= $_REQUEST['sid'];
	$qry ="DELETE FROM `student` WHERE `id`='$id';";
	$run=mysqli_query($con,$qry); 
	echo(mysqli_error($con));
	if($run==true)
	 {
		
?>
		<script> 
		alert('data Deleted succesfully');
		window.open('deletestudent.php?','_self');
		</script>
<?php
	 }

?>
