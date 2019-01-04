



<html>
<head>
<title>welcome admin</title>
<body>
 <h3 ><a href="index.php" style="float:left; margin-right:10px;">Back</a></h3>
<h2 align="center">  Admin login</h2>

<form action="admindash.php" method="post" background="blue" color="orange">

<table  align="center">
<tr>
<td> Username</td><td><input type="text" name="username" required></td>

</tr>
<tr>
<td> Password</td><td><input type="text" name="password" required></td>
</tr>
<tr>
<td colspan="1" ></td><td align="center" ><a href="admin/admindash.php"><input type="submit" name="Login" value="Login"></a></td>
</tr>

</table


</form>

</body>
</head>
</html>


<?php
session_start();

include('dbcon.php');

if(isset($_POST['Login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$qry = "SELECT * FROM `admin` WHERE `Username`='$username' AND `Password`='$password';";
	$run = mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	
	if($row<1)
	{
		?>
		<script>
		alert('username or  password not match');
		window.open('login.php','_self');
		</script>
       <?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run);
         
         $id=$data['id'];
          
       
		  
          $_SESSION['uid']=$id;

           header('location:admindash.php');		  
	}
}
?>