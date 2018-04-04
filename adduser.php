<?php
include_once('dbcon.php');
session_start();
?>

<?php



if(isset($_POST['submit']))
{
$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$department=$_POST['department'];
$username=$_POST['username'];
$password=$_POST['password'];
$phno=$_POST['phno'];
$email=$_POST['email'];


$sql="INSERT INTO `registration`( `name`, `address`, `gender`, `phoneno`, `email`, `departmentid`, `status`) VALUES ('$name','$address','$gender','$phno','$email','$department','1')";
$res=mysqli_query($con,$sql); 

echo "<script> alert('registration');</script>";
$userid="SELECT `user_id` FROM `registration` WHERE `email`='$e'";
$result2=mysqli_query($con,$userid);
while($row=mysqli_fetch_array($result2))
{

  $u=$row["user_id"];
}
//echo "<script> alert('$u');</script>";
$sql12="INSERT INTO `login`( `userid`, `username`, `password`, `type`, `status`) VALUES ('$u','$username','$password','u',1)";
$res12=mysqli_query($con,$sql12);
//$sql="INSERT INTO `add user`(`name`,  `address`,`gender`,`department`,`username`,`password`,`phno`,`email`) VALUES
 //('$name','$address','$gender','$department','$username','$password','$phno','$email');";
	
	//$res=mysqli_query($con,$sql) ;
	
}
?>




<html>
<head>
<style>
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
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	font-size: 14px;
	color: #FFFFFF;
}
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>

</head>


<body>

<script>
  var myIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
  }
  </script>
<ul>
<li><a href="logout.php">Logout</a></li>
 <li><a href="home1.php">Home</a></li>
<li><a href="aboutus.php">About us</a></li>

   <li><div class="dropdown">
		 <button onclick="" class="dropbtn">Adminisration</button>
         <div id="myDropdown" class="dropdown-content">
    <a href="addleavetype.php">addleavetype</a>
	<a href="adddepartment.php">adddepartment</a>
	<a href="adduser.php">adduser</a>
	</div></div></li>
	
   <li><div class="dropdown">
		 <button onclick="" class="dropbtn">Report</button>
         <div id="myDropdown" class="dropdown-content">
    <a href="leavetypereport.php">leavetypereport</a>
	<a href="departmentreport.php">departmentreport</a>
	<a href="userreport.php">userreport</a>

  </div></div></li>
	
  <li><a href="staffregistration.php">Staffregistration</a></li>

<body>
<td width="1228"><img src="n.jpg" width="1228" height="300"></td>
<div style="background-color:white">
<center>
<h1>ADD USER</h1>
<form action="" method="post" name="form">
<fieldset>

     
<table border=0>
  <tr>
  	<td> name:</td>
  	<td><input type="text" name="name"></td>
   </tr>
   <tr>
   		<td> address:</td>
 <td> <input type="text" name="address"></td> 
  </tr>
  <tr> 
  <td> gender:</td>
 <td> <input type="radio"  name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        &nbsp &nbsp <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male	</td>
  </tr>
  <tr>
   <td> department:</td>
 <td> <input type="text" name="department"></td>
  </tr>
  <tr>
 <td> username:</td>
 <td> <input type="text" name="username"></td>
  </tr>
  <tr>
 <td> password:</td> 
 <td> <input type="password" name="password"></td>
  </tr>
  <tr>
 <td> phno:</td>
 <td> <input type= "text" name="phno"></td>
  </tr>
  <tr>
 <td> email:</td>
  <td> <input type= "text" name="email"></td>
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
<center>
</html> 
 