<?php
include 'dbcon.php';
session_start();
if(session_status()==PHP_SESSION_NONE)
{
  session_start();
}
if(session_destroy())
	
{
	$sql1="update `login` set `status` ='0' where `status`='1'";
	$result=mysqli_query($con,$sql1);
header('location:home.php');
}
?> 