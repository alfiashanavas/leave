<!DOCTYPE html>
<?PHP
/*
include_once ('dbcon.php');
if(isset($_POST['approve']))
{
	$l=$_POST['leave_id'];
	$sqlap="UPDATE `leave` SET `status`='approved' WHERE `leave_id`='$l' ";
$resap=mysqli_query($con,$sqlap);
echo "<script> alert('leave approved')></script>";
}
*/

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
    padding: 16px;
    text-align: center;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Georgia, "Times New Roman", Times, serif; 
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
<h2><li><a href="logout.php">logout</a></li></h2>
 <h2><li><a href="home1.php">home</a> </li></h2>
  <h2><li><a href="aboutus.php"> aboutus</a> </li></h2>
  <h2><li><a href="myleave.php"> myleave</a> </li></h2>
   <h2><li><a href="schangepass.php">changepassword</a></li></h2>
    <h2><li><a href="leaverecord.php">leaverecord</a></li></h2>
  
 <div class="dropdown" >
 <button class="dropbtn">leave</button>
 
     <div id="myDropdown" class="dropdown-content">
    <a href="applyleave.php">applyleave</a>
	<a href="viewleavestatus.php">viewleavestatus</a>
	</div>
   </div> 
  

<td width="1332"><img src="o.jpg" width="1332" height="400"></td>
<div style="background-color:white">
</body>
<?php
include 'dbcon.php';
session_start();
//$l=$_SESSION["logid"];
//$u=$_SESSION["userid"];
//echo "<script> alert('$u');</script>";
$sql = mysqli_query($con,"SELECT * FROM `leave` where  user_id='73'");  //to fethch data from db
?> <center><table border="1" >

<tr>
<th>leavetype</th>
<th>purpose</th>
<th>startdate</th>
<th>enddate</th>

<th>noofdays</th>

<th>departmentname</th>
<th>action</th>

</tr>

<?php
while($row=mysqli_fetch_array($sql))
{	
	?>
<form action="#" method="post">	
	<tr>
        <input type="hidden" name="leave_id" value="<?php echo $row['leave_id'];?>">
		<td><?php echo $row['leave_type'];?></td>
		<td><?php echo $row['purpose'];?></td>
		<td><?php echo $row['startdate'];?></td>
		<td><?php echo $row['enddate'];?></td>
		
		<td><?php echo $row['no_of_days'];?></td>
		<td><?php echo $row['departmentname'];?></td>
				<td><?php echo $row['status'];?></td>

		</tr>
		
	<?php
}
?>  
</table></center>
</form>
</body>
</html>