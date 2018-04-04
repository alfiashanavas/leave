<?php
include_once('dbcon.php');
?>

<?php



if(isset($_POST['submit']))
{
$selectuser=$_POST['selectuser'];
$leavetype=$_POST['leavetype'];

$noofleave=$_POST['noofleave'];
$description=$_POST['description'];


$sql="INSERT INTO `addleave`(`selectuser`, `leave_type`, `noofleave`,`description`) VALUES
 ('$selectuser','$leavetype','$noofleave','$description');";
	
	$res=mysqli_query($con,$sql) ;
	
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
<h1>ADD LEAVE </h1>
<form action="" method="post" name="form">
<fieldset>
<table border=0>
  <tr>
  	<td> selectuser:</td>
  	<td><input type="text" name="selectuser"></td>
   </tr>
   <tr>
   		<td> leavetype:</td>
 <td> <input type="text" name="leavetype"></td> 
  </tr>
  <tr> 
  <td> noofleave:</td>
 <td> <input type="text" name="noofleave"></td>
  </tr>
  <tr>
   <td> description:</td>
 <td> <input type="text" name="description"></td>
  </tr>
  
 
  </table>
     

<p>	
  
 <input type ="Edit"  name="Edit" value= "Edit">
   <input type = "cancel" name="cancel" value= "cancel">
  

    
  
    
    
</p>
</form>
</fieldset
</body>
<td width="1337"><img src="p.jpg" width="1337" height="587"></td>
</html> 
 