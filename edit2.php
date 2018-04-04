<!DOCTYPE html>
<html>
<body>
<?php
include 'dbcon.php';
session_start();

$sql = mysqli_query($con,"SELECT * FROM `add leave type`"); //to fethch data from db
?> <center><table border="1" >

<th>empname</th>
<th>description</th>

<th>action</th>

</tr>

<?php
while($row=mysqli_fetch_array($sql))
{	
	?>
	<tr>
		<td><?php echo $row['empname'];?></td>
		<td><?php echo $row['description'];?></td>
		
		<td><input type="button" name="edit" value="edit"><input type="button"name="delete" value="delete"></td>
	</tr>
	<?php
}
?>  
</table></center>
</body>
</html>