<?php
session_start();
  

  if(isset($_SESSION['uid']))
    {
	 echo "";
    }
  else{
	   echo "error!!!!";
      } 

?>

<?php

  include('header.php');
  include('titlehead.php');
   include('dbcon.php');

 $sid= $_GET['sid'];
 
 $sql="SELECT * FROM `student` WHERE `id`='$sid'";
  
 $run=mysqli_query($con,$sql);
 
 $data=mysqli_fetch_assoc($run);

?>

<html>
<head>
<title>student</title>
<body>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
<table align="center" border= "1" style="width:34%; margin-top:5%;" bgcolor="TEAL">
<tr>
<th>Roll no</th>
<td> <input type="number" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
</tr>

<tr>
<th>Name</th>
<td> <input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
</tr>


<tr>
<th>City</th>
<td> <input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
</tr>


<tr>
<th>Parents contact no.</th>
<td> <input type="text" name="pcon" value=<?php echo $data['pcont']; ?> required></td>
</tr>


<tr>
<th>Standerd</th>
<td><input type="number" name="std" value=<?php echo $data['standerd']; ?>   required></td>
 
   
</tr>


<tr>
<th>Student Image</th>
<td><input type="file" name="simg"   size="5" value=<?php echo $data['image']; ?> required></td>
</tr>

<tr>
<td colspan="6" align="center" >

   <input type="hidden" name="sid" value=<?php echo $data['id']; ?> />
<input type="submit"  style="color:blue; background:white" name="submit" value="submit"></td>
</tr>


</table>

</form>
</body>
</head>
</html>
