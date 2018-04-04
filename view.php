<!DOCTYPE html>
<html>
<body>
<td width="1338"><img src="o.jpg" width="1338" height="586"></td>
</body>
<?php
include 'dbcon.php';
session_start();

$sql = mysqli_query($con,"SELECT * FROM `leave apply`"); //to fethch data from db

?> <center><table border="1" >
<tr><th>leavetype</th>

<th>startdate</th>
<th>enddate</th>
<th>purpose</th>

<th>action</th>

</tr>

<?php
while($row=mysqli_fetch_array($sql))
{	
	?>
	<tr>
		<td><?php echo $row['leave_type'];?></td>
		
	
	
		<td><?php echo $row['startdate'];?></td>
		<td><?php echo $row['enddate'];?></td>
		<td><?php echo $row['purpose'];?></td>
		
		<td><input type="button" name="approve" value="approve"</td>
		</tr>
		
	<?php
}
?>  
</table></center>


</body>
</html>