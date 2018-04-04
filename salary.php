<?php
include_once('dbcon.php');
?>

<?php
session_start();
$u=$_SESSION["userid"];

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
  <h2><li><a href="myleave.php">myleave</a></li></h2>
  <h2><li><a href="leaverecord.php">leaverecord</a></li></h2>
  <h2><li><a href="salary.php">salary</a></li></h2>
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
<h1> salary </h1>
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


  ?>
 
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
  <td> <?php $lv=$tt-$p; echo $tt-$p;?></td>
  <tr>
  <td> percentage of attendance </td>
  <td> <?php echo intval($p/$tt*100). "%"; ?> </td>
  
  <td>
  </td>
  </tr>
  </table>
<?php 
$sq1="SELECT b_salary as p FROM `registration` where user_id='$u'";
// echo $sq1;
  $re=mysqli_query($con,$sq1);
							
							/* selecting members list */
							$num=1;
					$row1=mysqli_fetch_assoc($re);
                           
									
									 $p=$row1["p"];
								
								 // echo $row["p"];
							echo 'Basic Salary:'. $p;
							$wa=$p/25;
							echo "<br> salary :" .($p-$wa*$lv);


  ?>
 
 


    
  
    
    
</p>
</form>
</fieldset>
</ul>
</body>
</center>
</html> 
 