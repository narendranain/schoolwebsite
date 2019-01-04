<html>
    <head></head>
        
            
        
        <h4><a href="index.php"><font size="5px" color="blue">Back</font></a></td></h4>
        
        <body>    
        </body>
        
    
</html>


<?php
if(isset($_POST['submit']))
{
	
	$standerd=$_POST['std'];
	$rollno=$_POST['rollno'];
	
	include('dbcon.php');
	include('function.php');
	
	showdetails($standerd, $rollno);
	
}




?>
