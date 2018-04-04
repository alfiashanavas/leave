<?php
include_once('dbcon.php');
?>

<?php



if(isset($_POST['submit']))
{
	$leavetype=$_POST['leavetype'];
$empname=$_POST['empname'];

$purpose=$_POST['purpose'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$sessionname=$_POST['sessionname'];
$noofdays=$_POST['noofdays'];
$departmentname=$_POST['departmentname'];

$sql="INSERT INTO `leave`(`leave_type`, `empname`, `purpose`, `startdate`, `enddate`, `session name`, `no_of_days`,`departmentname`)  VALUES
 ('$leavetype','$empname','$purpose','$startdate','$enddate','$sessionname','$noofdays','$departmentname');";
	
	$res=mysqli_query($con,$sql);
	
}
?>




<html>
<head>
<link rel="stylesheet" type= "text/css"  href = "leave.css">
<style>
body
{

background-repeat:no repeat;
border-style:"solid";
border-width:"thick";




}
h1
{
text-align:center;
color:black;
text-decoration:underline;
}
</style>
</head>
<body>
<h1>PROFILE </h1>
<form action="" method="post" name="form">
<fieldset>

     
<table border=0>
  <tr>
  	<td> leavetype:</td>
  	<td><input type="text" name="leavetype"></td>
   </tr>
   <tr>
   		<td> empname:</td>
 <td> <input type="text" name="empname"></td> 
  </tr>
  <tr> 
  <td> purpose:</td>
 <td> <input type="text" name="purpose"></td>
  </tr>
  <tr>
   <td> startdate:</td>
 <td> <input type="date" name="startdate"></td>
  </tr>
  <tr>
 <td> enddate:</td>
 <td> <input type="date" name="enddate"></td>
  </tr>
  <tr>
 <td> sessionname:</td> 
 <td> <input type="text" name="sessionname"></td>
  </tr>
  <tr>
 <td> noofdays:</td>
 <td> <input type= "text" name="noofdays"></td>
  </tr>
  <tr>
 <td> departmentname:</td>
  <td> <input type= "text" name="departmentname"></td>
  </tr>
  <tr>
  <td> updatestatus:</td>
  <td> <input type="text" name="updatestatus></td>
  
  </tr>
  </table>
<p>
  
 <input type="Edit" name="Edit" value= "Edit">
   <input type = "Cancel" name="Cancel" value= "Cancel">
  

    
  
    
    
</p>
</form>
</fieldset
</body>
<td width="1337"><img src="n.jpg" width="1337" height="587"></td>
</ul>
</html> 
 