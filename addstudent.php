<?php
session_start();
  

  if(isset($_SESSION['uid']))
    {
	
    }
  else{
	 
      } 

?>

<?php

  include('header.php');
  include('titlehead.php');
?>
<html>
<head>
<title>student</title>
<body>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table align="center" border= "1" style="width:34%; margin-top:5%;" bgcolor="TEAL">
<tr>
<th>Roll no</th>
<td> <input type="number" name="rollno" placeholder="Enter roll no." required></td>
</tr>

<tr>
<th>Name</th>
<td> <input type="text" name="name" placeholder="Enter student name" required></td>
</tr>


<tr>
<th>City</th>
<td> <input type="text" name="city" placeholder="enter current city" required></td>
</tr>


<tr>
<th>Parents contact no.</th>
<td> <input type="text" name="pcon"  placeholder="enter parents no."required></td>
</tr>


<tr>
<th>Standerd</th>
<td><input type="number" name="std" placeholder="select standerd"   required>
 
   
</tr>


<tr>
<th>Student Image</th>
<td><input type="file" name="simg"  size="5"  placeholder ="choose image" required="required"></td>
</tr>

<tr>
<td colspan="6" align="center" ><input type="submit"  style="color:blue; background:white" name="submit" value="submit"></td>
</tr>


</table>

</form>
</body>
</head>
</html>


<?php

if(isset($_POST['submit']))
{
	
	include('dbcon.php');
	
	$rollno= $_POST['rollno'];
	$name= $_POST['name'];
	$city= $_POST['city'];
	$pcon= $_POST['pcon'];
	$std= $_POST['std'];
	$imagename= $_FILES['simg']['name'];
	$tempname= $_FILES['simg']['tmp_name'];
	
	move_uploaded_file($tempname,"../dataimg/$imagename");
	
	$qry ="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`, `image`) VALUES ('$rollno','$name','$city','$pcon','$std' , '$imagename')";
	$run=mysqli_query($con,$qry); 
	echo(mysqli_error($con));
	if($run==true)
	 {
		
?>
		<script> 
		alert('data inserted succesfully');
		</script>
<?php
	 }
	 else{
		 
		    echo ("Error:".mysql_error($con));
	     }
	
}

?>