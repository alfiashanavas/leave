<!DOCTYPE html>

<?php
include 'dbcon.php';
session_start();

$sql = mysqli_query($con,"SELECT * FROM `add leave type`where `status`='1'"); //to fethch data from db


if(isset($_POST['edit']))
{
	//echo "<script> alert('hai');</script>";

$a=$_POST['type_name'];
$b=$_POST['description'];
$u=$_SESSION["userid"];
echo "<script> alert('$u');</script>";

$sqls="UPDATE `add leave type` SET `type_name`='$a',`description`='$b' where user_id='$u'";
$ress=mysqli_query($con,$sqls);
header("location:leavetypereport.php"); 
}

if(isset($_POST['delete']))
{
echo "<script> alert('hai');</script>";

$a=$_POST['type_name'];
$b=$_POST['description'];

$u=$_POST["user_id"];
echo "<script> alert('$u');</script>";
$sqld="UPDATE `add leave type` SET `status`='0' WHERE `user_id`='$u'";
$resd=mysqli_query($con,$sqld);
header("location:leavetypereport.php"); 
}
?>

<html>
<body>
<td width="1337"><img src="b.jpg" width="1337" height="587"></td>
<center><table border="1" >


<th>typename</th>
<th>description</th>



</tr>

<?php
while($row=mysqli_fetch_array($sql))
{	
	?>
		<form action="#" method="post">
	<tr>
		<td> <input type="text" name="type_name"value="<?php echo $row['type_name'];?>"></td>
		<td> <input type ="text" name="description"value="<?php echo $row['description'];?>"></td>
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