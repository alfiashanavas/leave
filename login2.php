<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
	$username=$_POST["username"];   //username value from the form
	$password=$_POST["password"];
	$password=SHA1($password);
	//echo $password;
	//password value from the form
     /*echo "<script> alert('$password');</script>";*/

	$sql="select * from login where `username`='$username' and `password`='$password'"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function

	if($fetch=mysqli_fetch_array($res))
	{
		
		if($fetch['type']=='u') // role means user , for admin set to 0 and for user set to  
		{
			$_SESSION["username"]=$fetch['username'];//session name is username
			$_SESSION["password"]=$fetch['password'];//session name password
			//$_SESSION["logid"]=$fetch['logid'];
			$_SESSION["userid"]=$fetch['userid'];
			$u=$_SESSION["userid"];
//echo "<script> alert('$u');</script>";

			//$_SESSION["username"]=$username;	// setting username as session variable 
				header("location:uhome.php");
                     				//home page or the dashboard page to be redirected
	    		}
		if($fetch['type']=='staff') // role means staff , for admin set to 0 and for user set to  
		{
			$_SESSION["username"]=$fetch['username'];//session name is username
			$_SESSION["password"]=$fetch['password'];//session name password
			//$_SESSION["logid"]=$fetch['logid'];

			//$_SESSION["username"]=$username;	// setting username as session variable 
				header("location:staffhome.php");
                     				//home page or the dashboard page to be redirected
	    }
	elseif($fetch['type']=='admin') // role means admin, for admin set to 0 and for user set to  
		{			   
		$_SESSION["username"]=$fetch['username'];
		/*$_SESSION["username"]=$username;*/// setting username as session variable 
		$_SESSION["password"]=$fetch['password'];
		$_SESSION["logid"]=$fetch['logid'];
		
		        header("location:adminhome.php");
	        
		}
	}
}

	?>


 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src='https://www.google.com/recaptcha/api.js'></script>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}`	

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
<!--
body {
	background-color: #999999;
}
-->

      form {
          border: 2px  #f1f1f1;
      }

      input[type=text], input[type=password] {
          width: 30%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
       border: 1px solid white;
       box-sizing: border-box;
      }

      button {
	background-color: #000066;
	color: white;
	padding: 12px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 30%;
      }

      .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
      }

      .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
      }

      img.avatar {
          width: 10%;
          border-radius: 65px;
      }
.style2 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}
.style4 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	color: #000066;
}
.style5 {color: #000066}
</style>
<body>


<p>&nbsp;</p>
<form action="" method="post" name="form" >
  <div class="imgcontainer">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;
  </div>

  <div class="container">

      <center>  <label><b><font color="black"><span class="style4">Username</span></b></label>
<input type="text" placeholder="Enter Username" name="username" required>
<br/>

    <span class="style2">
    <span class="style5">
    <label><b>Password</b></label>
    </span>    </span>
    <input type="password" placeholder="Enter Password" name="password" required>
<br/>
</center>
<center>

<div class="g-recaptcha" data-sitekey="6LdwE0EUAAAAAN2iNd2tyWqx0WG-Xlqg8wjqVUOp"></div>
</center>
</br>

<input type="submit" name="submit" style="position:relative;width:410px;left:480px;">Login</style>

</style></button>
<br/>


  </div>

</div>
<br />
</form>
<p><br />
</p>
<p><br />
  <br />
</p>

</body>

</html>