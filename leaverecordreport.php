<!DOCTYPE html>
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

<ul>
	<li><a href="logout.php">logout</a></li></h2>
	<li><a href="home1.php">home</a></li></h2>
	<li><a href="staffchangepass.php">changepassword</a></li></h2>
	<li><a href="appliedleave.php">appliedleave</a></li></h2>
	<li><a href="edit.php">edit</a></li></h2>
	<li><a href="attendance.php">attendance</a></li></h2>

<div class="dropdown" >
 <button class="dropbtn">leaverecord</button>
 
     <div id="myDropdown" class="dropdown-content">
    <a href="addleaverecord.php">addleaverecord</a>
	<a href="leaverecordreport.php">leaverecordreport</a>
	</div>
   </div>

<body>
<td width="1334"><img src="o.jpg" width="1334" height="400"></td>
<div style="background-color:white">
</body>
<?php
include 'dbcon.php';
session_start();

$sql = mysqli_query($con,"SELECT * FROM `addleaverecord`"); //to fethch data from db
if(isset($_POST['edit']))
{
	//echo "<script> alert('hai');</script>";

$a=$_POST['name'];
$b=$_POST['leave_type'];
$c=$_POST['no_of_leaves'];
$d=$_POST['description'];

//echo "<script> alert('$u');</script>";

$sqls="UPDATE `addleaverecord` SET `name`='$a',`leave_type`='$b', `no_of_leaves`='$c',`description`='$d'";
$ress=mysqli_query($con,$sqls);
header("location:leaverecordreport.php"); 
}

if(isset($_POST['delete']))
{
//echo "<script> alert('hai');</script>";

$a=$_POST['name'];
$b=$_POST['leave_type'];
$c=$_POST['no_of_leaves'];
$d=$_POST['description'];

//echo "<script> alert('$u');</script>";
$sqld="UPDATE `addleaverecord` ";
$resd=mysqli_query($con,$sqld);
header("location:leaverecordreport.php"); 
}
?>

 <center><table border="1" >
<tr>
<th>name</th>
<th>leavetype</th>
<th>noofleaves</th>
<th>description</th
</tr>



<?php
while($row=mysqli_fetch_array($sql))
{	
	?>
	<form action="#" method="post">
	<tr>
		<td> <input type="text" name="name"value="<?php echo $row['name'];?>"></td>
		<td> <input type ="text" name="leave_type"value="<?php echo $row['leave_type'];?>"></td>
		<td> <input type="text"  name="no_of_leaves"value="<?php echo $row['no_of_leaves'];?>"></td>
		<td> <input type="text"  name="description"value="<?php echo $row['description'];?>"></td>
		<td> <input type="hidden"  name="user_id"value="<?php echo $row['user_id'];?>"></td>
		<td><input type="submit" name="edit" value="edit"><td><input type="submit" name="delete" value="delete"></td>
		
		</tr>
		</form>
	<?php
}
?>  
</table></center>
</body>
</html>