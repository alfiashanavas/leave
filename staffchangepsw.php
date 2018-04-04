<?php
include_once('dbcon.php');
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
<h1>change password </h1>
<form name="myform" method="post" action="changepassword.php">
<table >
	
	<tr><td> User name:</td> <td><input type="text" name="uname"></td></tr>
	<tr><td>password:</td><td><input type="password" name="pwd"></td></tr>
	<tr><td>new password:</td><td><input type="password" name="pwd2"></td></tr>
	<tr><td> confirm password:</td><td><input type="password" name="pwd3"></td></tr>
	<tr><td ><button class="button" name="submit">change</button></td></tr>
	&nbsp&nbsp</table>
	  
</form>


  
    


</body>
</html> 
 