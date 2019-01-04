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
?>

<div align ="center" class="admintitle">

  <h3 ><a href="index.php" style="float:left; margin-right:10px; color:#fff;">Back To Home</a></h3>
   <h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h4>
  <h1>Welcome to Admin Dashboard</h1>
  
</div>

<div class="dashboard">
<table   align="center" style="width:55%  height:60%";>
<tr>
<td></td><td><a href="addstudent.php"><font color="white" size="5"> 1. Insert Student Details</font></a></td>
</tr>
<tr>
<td></td><td><a href="updatestudent.php"><font color="white" size="5">2. Update Student Details</font></a></td>
</tr>

<tr>
<td></td><td><a href="deletestudent.php"><font color="white" size="5">3. Delete Student Details</font></a></td>
</tr>

</table>


</div>
</body>
</head>