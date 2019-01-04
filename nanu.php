<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>dairy</title>
	<style>
	#di{
		top:10px;
	float:left;
    height:150px;
    width:1400px;
    margin-left:
    background-color: gray;		
	}
	#div2{
          height: 200px;
          width: 740px;
          margin-left: 5px;
         float: left;


	}
	#image
{  
	float:left;
    height:450px;
    width:444px;
    background-color: orange;
}
#audio
{   top:100px;
	float:left;
    height:200px;
    width:280px;
    margin-left:5px;
    background-color: orange;
        
}
#marquee
{
  height: 150px;
  width: 140px;
  background-color: orange;
  float:right;
}
</style>
</head>
<body>

<div id="di" align="left">
<center><table  border="0.8"  >
<center><tr> 
<td><h1><font color="red" size="40">P</font></h1></td>
<td><font color="skyblue" size="10">A</font></td> 
<td><font color="purple" size="10">T</font></td>
<td><font color="red" size="10">I</font></td>
<td><font color="yellow" size="10">D</font></td>
<td><font color="green" size="10">A</font></td>
<td><font color="skyblue" size="10"><letter-spacing ="-5">R</letter-spacing></font><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<td><h1><font color="orange" size="40">S</font></h1></td>
<td><font color="orange" size="40">C</font></td>
<td><font color="lightgreen" size="10">H</font></td>
<td><font color="red" size="10">O</font></td>
<td><font color="yellow" size="10">O</font></td>
<td><font color="blue" size="10"><letter-spacing ="-5">L</letter-spacing></font><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<td><h1><font color="ORANGE" size="50">N</font></h1></td>
<td><font color="red" size="10">A</font></td>
<td><font color="BLUE" size="40">L</font></td>
<td><font color="purple" size="40">K</font></td>
<td><font color="GRAY" size="40">H</font></td>
<td><font color="TINY" size="40">E</font></td>
<td><font color="orange" size="40">D</font></td>
<td><font color="RED" size="40"><letter-spacing ="-15">A</letter-spacing></font></td>&nbsp;&nbsp;&nbsp;&nbsp;

<td><font color="blue" size="5" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<u><a href="G:\nn\wamp64\www\student_managment\admin\admindash.php">Admin Login</a></u></font></td>
</tr></table></center> 
<div>
<tr>
&emsp;&emsp;<td><a href="http://narendra-dairy-form.site123.me"><font color="blue">ABOUT US</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<td><a href="file:///C:/nanu/aboutus.html"><font color="blue">STUDENT'S</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<td><a href="www.my sirji.com"><font color="blue">ADMISSION</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<td><a href="www.jma.com"><font color="blue">STAFF</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<td><a href="www.jma.com"><font color="blue">CONTACT</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<td><a href="www.jma.com"><font color="red"><b size="5">*RESULT</b></font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
</table>
</tr></div>
</div>

  <div id="image" align="left">

   <!--<tr><td><video height="445px"  margin top="10" ="400px" controls="autofocus" >
     <source src="E:\video new/Dillagi_2016_Hindi_Video_Song_By_Rahat_Fateh_Ali_Khan_HD__1080p.mp4" type=""></video></td></tr>-->
     <table border="0.9"  >
	 <tr><td><font size="5"   color="red">
<marquee  direction="up" style="background:teal"  height="446px" width="300px" scrollamount="2" 
behavior="alternative">
&nbsp;*&nbsp;&nbsp;<a href="www.patidarschool.com"><font color="red" size="6px"><u><b>Result</b></u></font></a></br>
</br>&nbsp;*&nbsp;&nbsp;<font color="red" size="6px"><u> <b>New Admission<b></u></br>
 </br>&nbsp;*&nbsp;<u> <font color="red" size="6px">Scholarship Form </u></br> 
</br>&nbsp; *&nbsp;&nbsp;<b><font color="red" size="6px"><u>Exam Form</u></b></i></marquee></font></td>
</tr>
</table>
</div>



<div id="image" align="center">
<h1 align="center">REGISTRATION FORM</h1>
<form action="table.html" method="post">
<center>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table align="center" border= "1.2" style="width:50px; height:30%; margin-top:5%;" bgcolor="TEAL">
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


</div>
   </tr></div>

 

<div id="image" align="right">
<tr>
<td><img src="G:\nn\wamp64\www\student_managment/patidarschool3.jpg" width="400px" height="225px" hspace="0"></td>
<td><img src="C:\Users\narendra\Downloads/patidarschool3.jpg" width="400px" height="225px" hspace="0"></td></tr></div></table>
	 
	 <?php
	 

	 ?>
	 
	 
	 </body>
</html>