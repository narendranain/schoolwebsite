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
<title>addstudent</title>
<body>

<table align="center"  style="margin-top:10px";>
  <form action="updatestudent.php" method="post"  enctype="multipart/form-data">
   <tr>
   <th>Standerd:</th>
  <td>  <input type="number" name="standerd" placeholder="Enter standerd" required="required"></td>
  </tr>
<tr>
<th>Student name:</th>  
<td>  <input type="text" name="name" placeholder="Enter student name" required="required"></td>
   </tr>
   
   <tr >
   <td colspan="2" align="center" >
   <input  style="color:blue;"; type="submit" name="submit" value="search"/></td>
</tr>
   </form>
   </table>
   </body>
</head>

</html>
<table align="center" border="1" width="100%"     style="margin-top:10px;">
<tr style="background-color:#000; color:#fff";>
<th>NO</th>
<th>Image</th>
<th>Name</th>
<th>Rollno</th>
<th>Edit</th>
</tr>

<?php

if(isset($_POST['submit']))
{
	
	include('dbcon.php');
	
	$standerd= $_POST['standerd'];
	$name= $_POST['name'];

     $sql="SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";	
	
	 $run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)<1)
	{
		
		echo "<tr><td colspan='5'>NO record found</td></tr>";
	}
	
	else{
		
	$count=0;	
	
	 while($data=mysqli_fetch_array($run))
	 {
		 $count++
		 ?>

		 <tr style="margin-top:2px;">
		 <td align="center"><b><?php echo $count;?></td>
         <td><img src="../dataimg/<?php echo  $data['image']; ?>" style="max-width:100px; margin-left:120px;"/></td>
         <td align="center"><b><?php echo $data['name'];?></b></td>
         <td align="center"><b><?php echo $data['rollno'];?></td>
         <td align="center"><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
	
         </tr>
     	<?php
		 
	 }
		 
	 
       }
}


?>
 
</table>
