<!DOCTYPE html>

<?php
include 'dbcon.php';
session_start();

$sql = mysqli_query($con,"SELECT * FROM `add department`where `status`='1'"); //to fethch data from db


if(isset($_POST['edit']))
{
	//echo "<script> alert('hai');</script>";

$a=$_POST['department_name'];
$b=$_POST['staffname'];
$u=$_SESSION["userid"];
echo "<script> alert('$u');</script>";

$sqls="UPDATE `add department` SET `department_name`='$a',`staffname`='$b' where user_id='$u'";
$ress=mysqli_query($con,$sqls);
header("location:departmentreport.php"); 
}

if(isset($_POST['delete']))
{
echo "<script> alert('hai');</script>";

$a=$_POST['department_name'];
$b=$_POST['staffname'];

$u=$_POST["user_id"];
echo "<script> alert('$u');</script>";
$sqld="UPDATE `add department` SET `status`='0' WHERE `user_id`='$u'";
$resd=mysqli_query($con,$sqld);
header("location:departmentreport.php"); 
}
?>

<html>
<body>
<td width="1338"><img src="b.jpg" width="1338" height="586"></td>
<center><table border="1" >


<th>departmentname</th>
<th>staffname</th>



</tr>

<?php
while($row=mysqli_fetch_array($sql))
{	
	?>
		<form action="#" method="post">
	<tr>
		<td> <input type="text" name="department_name"value="<?php echo $row['department_name'];?>"></td>
		<td> <input type ="text" name="staffname"value="<?php echo $row['staffname'];?>"></td>
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