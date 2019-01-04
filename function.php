<?php

function showdetails($standerd, $rollno)
{
	
	include('dbcon.php');
	
	$qry="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standerd`='$standerd';";
	
	$run=mysqli_query($con,$qry);
	
	if(mysqli_num_rows($run)>0)
	{
		
		$data=mysqli_fetch_assoc($run)
		?>
		<table align="center"  border="1"style="width:60%; height:60%; color:white; margin-top:35px; background:teal">
		<tr>
		    <th colspan="3"><font color="orange" size="5">Student Details</font></th>
		</tr>
		<tr>
		
		    <td rowspan="5" ><img src= dataimg\<?php echo $data['image']; ?>  style="max-width:200px;  margin-left:120px;" "/></td>
		    
		   
		    
		    
		    <th>Rollno</th>
			<td><?php echo $data['rollno']; ?></td>
		</tr>
		<tr>
		<th>Name</th>
			<td><?php echo $data['name']; ?></td>
		</tr>
		
		<tr>
		<th>Standerd</th>
			<td><?php echo $data['standerd']; ?></td>
		</tr>
		
		<tr>
		<th>Parents contact</th>
			<td><?php echo $data['pcont']; ?></td>
		</tr>
		
		
		<tr>
		<th>City</th>
			<td><?php echo $data['city']; ?></td>
		</tr>
		</table>
		<?php
	}
	else{
		
		echo "<script>alert('NO STUDENT FOUND');</script>";
	}
	
}


?>