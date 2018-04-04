<!DOCTYPE html>
<html>
<body>
<td width="1228"><img src="o.jpg" width="1228" height="300"></td>
<?php
include 'dbcon.php';
session_start();


$sql = mysqli_query($con,"SELECT * FROM `leave`"); //to fethch data from db
?> <center><table border="1" >
<tr><th>leavetype</th>
<th>empname</th>
<th>purpose</th>
<th>startdate</th>
<th>enddate</th>
<th>sessionname</th>
<th>noofdays</th>

<th>departmentname</th>
<th>action</th>

</tr>

<?php
while($row=mysqli_fetch_array($sql))
{	
	?>
	<tr>
		<td><?php echo $row['leave_type'];?></td>
		<td><?php echo $row['empname'];?></td>
		<td><?php echo $row['purpose'];?></td>
		<td><?php echo $row['startdate'];?></td>
		<td><?php echo $row['enddate'];?></td>
		<td><?php echo $row['session_name'];?></td>
		<td><?php echo $row['no_of_days'];?></td>
		<td><?php echo $row['departmentname'];?></td>
		<td><input type="button" name="APPROVE" value="APPROVE"</td>
		</tr>
		
	<?php
}
?>  
</table></center>


</body>
</html>