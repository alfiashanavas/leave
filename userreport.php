<!DOCTYPE html>

<?php
include 'dbcon.php';
session_start();

$sql = mysqli_query($con,"SELECT * FROM `registration` where `status`='1'"); //to fethch data from db

if(isset($_POST['edit']))
{
//echo "<script> alert('hai');</script>";

$a=$_POST['image'];
	$b=$_POST['name'];
$c=$_POST['phone_no'];
$d=$_POST['email'];
$u=$_POST["user_id"];
//echo "<script> alert('$u');</script>";
$sqls="UPDATE `registration` SET `image`='$a',`name`='$b',`phone_no`='$c',`email`='$d' WHERE `user_id`='$u'";
$ress=mysqli_query($con,$sqls);
header("location:userreport.php"); 
}

if(isset($_POST['delete']))
{
echo "<script> alert('hai');</script>";

$a=$_POST['image'];
$b=$_POST['name'];
$c=$_POST['phone_no'];

$d=$_POST['email'];
$u=$_POST["user_id"];
echo "<script> alert('$u');</script>";
$sqld="UPDATE `registration` SET `status`='0' WHERE `user_id`='$u'";
$resd=mysqli_query($con,$sqld);
header("location:userreport.php"); 
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
 <li><a href="staffregistration.php">Staffregistration</a></li>
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
	
  <body>

  <td width="1336"><img src="b.jpg" width="1336" height="486"></td>
  <div style="background-color:white">


<center><table border="1" >
<th>image</th>
<th>name</th>
<th>phoneno</th>
<th>email</th>




</tr>

<?php
while($row=mysqli_fetch_array($sql))
{	
	?>
	<form action="#" method="post" enctype="multipart/form-data">
	<tr>
	<tr>
	  	<td><img src="<?php echo $row['image'] ?>" width="75px" height="75px"/></td>	
		<td> <input type="text" name="name"value="<?php echo $row['name'];?>"></td>
		<!--<td><?php echo $row['address'];?></td>-->
		<td> <input type="number" name="phone_no" value="<?php echo $row['phone_no'];?>"></td>
		<!--<td><?php echo $row['username'];?></td>
		<td><?php echo $row['password'];?></td>-->
		<td> <input type="text" name="email"value="<?php echo $row['email'];?>"></td>
		<!--<td><?php echo $row['email'];?></td>-->
		
		<td> <input type="hidden" name="user_id"value="<?php echo $row['user_id'];?>"></td>
		<td><input type="submit" name="edit" value="edit"><input type="submit" name="delete" value="delete"></td>
		
	</tr>
	</tr>
	
	</form>
	<?php
}
?>  
</table></center>
</body>
</html>