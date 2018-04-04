<?php
session_start();
include 'dbcon.php';

///if(!(isset($_SESSION['log_'])))
//{

//header('location:home.php');
//}

if(isset($_POST['submit']))
{
$a=$_POST["uname"];
$b=$_POST["pwd"];
$c=$_POST["pwd2"];
$d=$_POST["pwd3"];
//print_r($b);
}

$sql="SELECT * FROM `login`";
echo $sql;
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$id=$_SESSION['username'];
	
	
	if($a==  $row['user_name']&&$b==$row['password']&&$row['role_id']==2)
	{
			if($d!=$c)	
			{
				
				header('location:uhome.php');
				echo("password are not same");
				break;
			}

			else{
				
				$sql2="update `tbl_login2` set password='$c' where log_id=$id";
				$result=mysqli_query($con,$sql2) ;
				echo("sucess");
				header('location:uhome.php');
				break;
				}
			}
	else
	{
		
		echo(" incorrect password");
		header('location:changepassword.php');
		
	}
	
	if($a==  $row['user_name']&&$b==$row['password']&&$row['role_id']==3)
	{
			if($d!=$c)	
			{
				header('location:changepassword.php');
				echo("password are not same");
				break;
			}

			else{
				
				$sql2="update `tbl_login2` set password='$c' where log_id=$id";
				$result=mysqli_query($con,$sql2) ;
				header('location:uhome.php');
				break;
				}
			}
	else
	{

		header('location:changepassword.php');
		echo(" incorrect password");
	}
		
}
?> 