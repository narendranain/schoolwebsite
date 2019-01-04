


<!DOCTYPE html>
<html>
<head>
	<title>school website</title>
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
	
	#image1
{  
	float:left;
    height:450px;
    width:444px;
    background-color: orange;
}
	
	
	#image
{  
	float:left;
    height:460px;
    width:444px;
    background-color: skyblue;
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

<td><font color="blue" size="5" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<u><a href="login.php">Admin Login</a></u></font></td>
</tr></table></center> 
<div>
<tr>
&emsp;&emsp;<td><a href="about.html"><font color="blue">ABOUT US</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<td><a href="gallery.html"><font color="blue">GALLERY</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<td><a href="admission.html"><font color="blue">ADMISSION</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<td><a href="staff.html"><font color="blue">STAFF</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<td><a href="contact.html"><font color="blue">CONTACT</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<td><a href="result.html"><font color="red">*RESULT</font></a></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
</table>
</tr></div>
</div>

  <div id="image" align="left">

   
     <table border="0.9"  >
	 <tr><td><font size="5"   color="red">
<marquee  direction="up" style="background:teal"  height="458px" width="440px" scrollamount="2" 
behavior="alternative">
&nbsp;*&nbsp;&nbsp;<a href="result.html"><font color="red" size="6px"><u><b>Result</b></u></font></a></br>
</br>&nbsp;*&nbsp;&nbsp;<a href ="addstudent.php"><font color="red" size="6px"><u> <b>New Admission<b></u></a></br>
 </br>&nbsp;*&nbsp; <a href="http://scholarshipportal.mp.nic.in/"><font color="red" size="6px"><u><b>Scholarship Form</b> </u></a></br> 
</br>&nbsp; *&nbsp;&nbsp;<a href="https://mpbse.mponline.gov.in"><font color="red" size="6px"><u><b>Exam Form</b></u></a></i></marquee></font></td>
</tr>
</table>
</div>



<div id="image" align="center">
<tr>

<td>
<?php echo '<img src=nanu.jpg width=441px 
height=226px >';
?>
</td>
<td> <?php echo '<img src="nanu1.jpg" width="441px" height="226px" >'?></td></tr></div></table>
	 </body>





<div  id="image" align="right"> 
  
  
 <form action="show.php" method="post"  enctype="multipart/form-data">
  
  <table border="1"  align="center"width="440px" height="456px" bgcolor="orange">
   <tr>
   <td colspan="2" align="center" ><font color="blue" size="5">Student information</font><b></td>
   </tr>
   
   <tr>
   <td align="left" size="18"><b>choose standerd</b></td>
   <td>
     <select name="std" required>
	 <option value="1">1st</option>
	 <option value="2">2nd</option>
	 <option value="3">3rd</option>
	 <option value="4">4th</option>
	 <option value="5">5th</option>
	 <option value="6">6th</option>
	 <option value="7">7th</option>
	 <option value="8">8th</option>
	 <option value="9">9th</option>
	 <option value="10">10th</option>
	 <option value="11">11th</option>
	 <option value="12">12th</option>
      
	  </select>
   
   </td>
   </tr>
  
  
   <tr>
   <td><b>Enter roll no</b></td>
   <td><input type="text" name="rollno" placeholder="enter student roll" required="required">
   </tr>
   
   <tr>
   <td><b>Enter name</b></td>
   <td><input type="text" name="name" placeholder="enter student name" required="required">
   </tr>
  
<tr>
   <td colspan="2" align="center" ><input type="submit" style="color:white; background:blue;"   name="submit" value="Show info"></td>
   </tr>
  
  </table>




   </div>

 
</html>