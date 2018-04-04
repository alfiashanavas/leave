<?php
include 'dbcon.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>

  <title>leave management system</title>
  

  <!-- Div for login section -->
  <div class="login2">
<!--<center><img src="clg.png" id="ajce_img"width="400px" height="300px" ></center>-->
<h2 style="color:red">CHANGE PASSWORD</h2><br>
<form name="myform" method="POST" action="#">
<table >
<?php
//echo $_SESSION['username'];
?>
	<tr><td> User name:</td> <td><input type="text" name="uname" id="uname"></td></tr>
	<tr><td>password:</td><td><input type="password" name="pwd" id="pwd"></td></tr>
	<tr><td>new password:</td><td><input type="password" name="pwd2" id="pwd2"></td></tr>
	<tr><td> confirm password:</td><td><input type="password" name="pwd3" id="pwd3"></td></tr>
	<tr><td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="submit" id= "submit" name="submit" /></td></tr>
	&nbsp;&nbsp;</table>
	  
</form>

  

<td width="1337"><img src="t.jpg" width="1337" height="587"></td>
   
      

      
     
</div>
    
<?php

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
$sql="SELECT * FROM `login`";
echo $sql;
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$id=$_SESSION['username'];
	echo $id;
	if($a==  $row['username']&&$b==$row['password']&&$row['type']=='u')
	{
			if($d!=$c)	
			{
				
				//header('location:uhome.php');
				echo("password are not same");
				break;
			}

			else{
				
				$sql2="update `login` set password='$c' where username='$id'";
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
	
	
	
		
}

}
?> 
    </html>
