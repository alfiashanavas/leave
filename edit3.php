<!DOCTYPE html>
<html>
<body>
<?php
include 'dbcon.php';
session_start();

$sql = mysqli_query($con,"SELECT * FROM `add user`"); //to fethch data from db
?> <center><table border="1" >

<th>name</th>
<th>address</th>
<th>gender</th>
<th>department</th>
<th>username</th>
<th>password</th>

<th>phno</th>
<th>email</th>
<th>action</th>

</tr>

<?php
while($row=mysqli_fetch_array($sql))
{	
	?>
	<tr>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['department'];?></td>
		<td><?php echo $row['username'];?></td>
		<td><?php echo $row['password'];?></td>
		<td><?php echo $row['phno'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><input type="button" name="edit" value="edit"><input type="button"name="delete" value="delete"></td>
	</tr>
	<?php
}
?>  
</table></center>
</body>
</html>