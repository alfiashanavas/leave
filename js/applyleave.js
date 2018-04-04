<?php
include_once('dbcon.php');
?>

<?php
session_start();
$u=$_SESSION["userid"];
//echo "<script> alert('$u');</script>";


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


$sql="INSERT INTO `leave`(`leave_type`, `empname`, `purpose`, `startdate`, `enddate`, `session_name`, `no_of_days`, `departmentname`, `user_id`, `status`) VALUES ('$leavetype','$empname','$purpose','$startdate','$enddate','$sessionname','$noofdays`','$departmentname','$u','na')";
	$res=mysqli_query($con,$sql);
	echo "<script> alert('leave applied successfully');</script>";
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
<td width="1337"><img src="n.jpg" width="1337" height="587"></td>
<h1>APPLY LEAVE </h1>
<form action="" method="post" name="form"onSumbit="return validate()">
<fieldset>

     
<table border=0>
  <tr>
  	<td> leavetype:</td>
  	<td><input type="text" name="leavetype" pattern="[a-zA-Z\-'\s]+" title="Please use alphabets" required/></td>
   </tr>
   <tr>
   		<td> empname:</td>
 <td> <input type="text" name="empname" pattern="[a-zA-Z\-'\s]+" title="Please use alphabets" required/></td> 
  </tr>
  <tr> 
  <td> purpose:</td>
 <td> <input type="text" name="purpose" pattern="[a-zA-Z\-'\s]+" title="Please use alphabets" required/></td>
  </tr>
  <tr>
   <td> startdate:</td>
 <td> <input type="date" name="startdate" pattern="^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$"  required/></td>
  </tr>
  <tr>
 <td> enddate:</td>
 <td> <input type="date" name="enddate" pattern="^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$"  required/> </td>
  </tr>
  <tr>
 <td> sessionname:</td> 
 <td> <input type="text" name="sessionname" pattern="[a-zA-Z\-'\s]+" title="Please use alphabets" required/> </td>
  </tr>
  <tr>
 <td> noofdays:</td>
 <td> <input type= "text" name="noofdays" pattern="[789][0-9]{9}" required/> </td>
  </tr>
  <tr>
 <td> departmentname:</td>
  <td> <input type= "text" name="departmentname"pattern="[a-zA-Z\-'\s]+" title="Please use alphabets" required/> </td>
  </tr>
  <tr>
  
  </table>
<p>	

  
 <input type ="submit" name="submit" value= "submit">
   <input type = "reset" name="reset" value= "reset">
  

    
  
    
    
</p>
</form>
</fieldset
</body>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/applyleavevalidation.js"></script>
</ul>
</html> 
 