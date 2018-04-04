<!DOCTYPE html>

<?php
include 'dbcon.php';
session_start();

$sql = mysqli_query($con,"SELECT * FROM `registration` where `status`='1'"); //to fethch data from db

if(isset($_POST['edit']))
{
//echo "<script> alert('hai');</script>";

$a=$_POST['name'];
$b=$_POST['phone_no'];
$c=$_POST['email'];
$u=$_POST["user_id"];
//echo "<script> alert('$u');</script>";
$sqls="UPDATE `registration` SET `name`='$a',`phone_no`='$b',`email`='$c' WHERE `user_id`='$u'";
$ress=mysqli_query($con,$sqls);
header("location:userreport.php"); 
}

if(isset($_POST['delete']))
{
echo "<script> alert('hai');</script>";

$a=$_POST['name'];
$b=$_POST['phone_no'];
$c=$_POST['email'];
$u=$_POST["user_id"];
echo "<script> alert('$u');</script>";
$sqld="UPDATE `registration` SET `status`='0' WHERE `user_id`='$u'";
$resd=mysqli_query($con,$sqld);
header("location:userreport.php"); 
}
?>

<html>
<body>
<td width="1338"><img src="b.jpg" width="1338" height="586"></td>
<center><table border="1" >

<th>name</th>
<th>phoneno</th>
<th>email</th>



</tr>

<?php
while($row=mysqli_fetch_array($sql))
{	
	?>
	<form action="#" method="post">
	<tr>
	<tr>
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
	</form>
	<?php
}
?>  
</table></center>

</body>
</html>