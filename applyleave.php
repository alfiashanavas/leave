<?php
include_once('dbcon.php');
?>

<?php

function send($sms, $to) {

    $sms = urlencode($sms);
    $token = "3352fdc884790f382758cf3baf5f280f";
    $sendercode="swmart";   
    $url = "http://sms.safechaser.com/httpapi/httpapi?token=".$token."&sender=".$sendercode."&number=".$to.'&route=2&type=1&sms='.$sms;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $datares = curl_exec($ch);
    curl_close($ch);
    return $datares;
}
session_start();
$u=$_SESSION["userid"];
//var_dump($_SESSION);



if(isset($_POST['submit']))
{
$leavetype=$_POST['leavetype'];
$empname=$_POST['empname'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$purpose=$_POST['purpose'];


$noofdays=$_POST['noofdays'];
$departmentname=$_POST['departmentname'];

$sql="INSERT INTO `leave`(`leave_type`, `empname`, `startdate`, `enddate`, `purpose`,`no_of_days`,`departmentname`,`status`) VALUES ('$leavetype','$empname','$startdate','$enddate','$purpose','$noofdays','$departmentname','applied')";
	$res=mysqli_query($con,$sql);
	echo "<script> alert('leave applied successfully');</script>";
	$sql55="SELECT * FROM `registration` WHERE `user_id`=$u";
	$result55=mysqli_query($con,$sql55);
	$row55=mysqli_fetch_array($result55);
	$mob=$row55['phone_no'];
	//echo $mob;
	$msg="Hi $empname Your leave is sucessfully applied ";
	send($msg,$mob);
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
 <h2> <li><a href="home1.php">home</a></li></h2>
  
  
   <h2><li><a href="schangepass.php">changepassword</a></li></h2>
   <h2><li><a href="myattendance.php">myattendance</a></li></h2>
  <h2><li><a href="myleave.php">myleave</a></li></h2>
  <h2><li><a href="salary.php">salary</a></li></h2>
  <h2><li><a href="leaverecord.php">leaverecord</a></li></h2>
  
 <div class="dropdown" >
 <button class="dropbtn">leave</button>
 
     <div id="myDropdown" class="dropdown-content">
    <a href="applyleave.php">applyleave</a>
	<a href="viewleavestatus.php">viewleavestatus</a>
	</div>
   </div> 

	


   
<td width="1334"><img src="n.jpg" width="1334" height="400"></td>
<center>
<div style="background-color:white">
<h1>APPLY LEAVE </h1>
<br><br>
<body bgcolor= "white">
 </body>
  <tr>
<form action="" method="post" name="form">
<fieldset>

     <table width=100%>
	 <tr><td width=50%>
<table border=0>
 <body bgcolor= "white">
 </body>
  <tr>
  	<td> leavetype</td>
  	<td><input type="text" name="leavetype">
	
	</td>
   </tr>
   <tr>
   	<tr>
  	<td> empname:</td>
  	<td><input type="text" name="empname">
	
	</td>
   </tr>
   <tr>
   			
  <tr>
   <td> startdate</td>
 <td> <input type="date" name="startdate"></td>
  </tr>
  <tr>
 <td> enddate</td>
 <td> <input type="date" name="enddate" ></td>
  </tr>
  <tr>
 <td> purpose</td> 
 <td> <input type="text" name="purpose"> </td>
  </tr>
  <tr>
  
  </tr>
  <tr>
  <td> noofdays</td> 
 <td> <input type="text" name="noofdays"> </td>
  </tr>
  <tr>
  <td> departmentname</td> 
 <td> <input type="text" name="departmentname"> </td>
  </tr>
  <?php 
 // echo $u;
 $tt=0;
  $res=mysqli_query($con,"SELECT count(DISTINCT(date)) as p FROM `attendance`");
							
							/* selecting members list */
							$num=1;
					$row=mysqli_fetch_assoc($res);
                           
								$tt=$row["p"];
									 
								
								 
 $p=0;
 $aaa="SELECT count(DISTINCT(date)) as p FROM `attendance`where empid='$u'";
 //echo $aaa;
  $res=mysqli_query($con,$aaa);
							
							/* selecting members list */
							$num=1;
					$row=mysqli_fetch_assoc($res);
                           
									
									 $p=$row["p"];
								
								 // echo $row["p"];
							$absent=$tt-$p;
if($absent<6)	
{	
							?>
  <td> <input type ="submit" name="submit" value= "submit"></td>
  <td> <input type = "reset" name="reset" value= "reset"></td>
  </tr>
  <?php
}

  ?>
  </table>
  </td>
  <td>
  <table>
  <tr>
  
  <td> total no of working days </td>
  <td> <?php  echo $tt;
 
							
							  ?>
                            
  
  
 </td>
  <tr>
 

  <td> total present days </td>
  <td><?php echo $row["p"];?> </td>
  <tr>
  
  <td> total absent days </td>
  <td> <?php echo $tt-$p;?></td>
  <tr>
  <td> percentage of attendance </td>
  <td> <?php echo intval($p/$tt*100). "%"; ?> </td>
  
  <td>
  </td>
  </tr>
  </table>
<p>	

  <?php
  if($absent>=6)
{
	echo"<td><b><span style='color:red'> maximum leave limit is 16</span></b></td>";
}
  ?>


    
  
    
    
</p>
</form>
</fieldset>
</ul>
</body>
</center>
</html> 
 