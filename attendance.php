<?php
session_start();
//var_dump($_POST);
include('dbcon.php');
date_default_timezone_set('Asia/Kolkata');
//var_dump($_POST);
//search
//select &*
//	die();
	//var_dump($_POST);
	
$ddt="";
if(isset($_POST['p_date']))
{
	$ddt=$_POST['p_date'];
}else
	{
		$ddt=date("Y-m-d");
	}



if(isset($_POST['submit']))
{
	$date= $_POST['p_date'];
	//$date = date('Y-m-d',$_POST['p_date']);

	$res=mysqli_query($con,"select * from registration where status='1'");
							
							/* selecting members list */
							$num=1;
					
                            while($row=mysqli_fetch_array($res))
                  
			  { 
							  /* printing members list */
							  $st=0;
							  $userid=$row['user_id'];
							 // echo $_POST[$userid];
							  
								if(isset($_POST[$userid]))
								{
									$st=1;
								}
								else
								{
									$st=0;
									
								}
							$sql="insert into attendance values(NULL,".$row["user_id"].",'". $date."',".$st.") on duplicate key update status=".$st;
		                    $res1=mysqli_query($con,$sql) ;				
																 
								  }	 
							
							  

	
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
    padding: 15px;
    text-align: center;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
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
	<li><a href="logout.php">logout</a></li></h2>
	<li><a href="home1.php">home</a></li></h2>
	<li><a href="staffchangepass.php">changepassword</a></li></h2>
	<li><a href="appliedleave.php">appliedleave</a></li></h2>
	<li><a href="edit.php">edit</a></li></h2>
	<li><a href="attendance.php">attendance</a></li></h2>

<div class="dropdown" >
 <button class="dropbtn">leaverecord</button>
 
     <div id="myDropdown" class="dropdown-content">
    <a href="addleaverecord.php">addleaverecord</a>
	<a href="leaverecordreport.php">leaverecordreport</a>
	</div>
   </div>
</style>
</head>

<body style="text-align: center;" class="ui1">
<td width="1228"><img src="n.jpg" width="1228" height="300"></td>
<div style="background-color:white">
<form action="#" method="post">
<table class="table table-condensed table-bordered table-hover table-striped">
					<thead>
                        <tr class="thead-tr">
                            <th colspan="3" class="text-center" ><input type="date" name="p_date" value=<?php echo $ddt; ?>></th>
							<th><input type="submit" name="search" value="search"></th>
							
                        </tr>
                        <tr class="new-b">
                            
                            <th class="text-center"> NO:</th>
                            <th class="text-center">employee</th>
							<th class="text-center" style="width:50px;">PRESENT </th>
                        </tr>

                    </thead>
					
                    
					
                        <tr  class="danger">
						<?php
						$frs=0;
	$res5="";
	$sql="";
	
	
						
	$sql="SELECT count(*) FROM `attendance` WHERE date='".$ddt."'";
	$res=mysqli_query($con,$sql) ;
	$data=mysqli_fetch_array($res);
	//echo $sql;
	//echo $data[0];
	
	if($data[0]==0)
	{
		echo '<h2>Fresh Entry</h2>';
		$sql="SELECT user_id,name FROM registration where status =1";
	}
	else
	{
		$frs=1;
		echo "<H2>Edit attendance </h2>";
		
		//echo $sql;
		$sql="SELECT r.user_id,r.name,a.status  FROM registration r left join  `attendance` a  on r.user_id=a.empid WHERE a.date='".$ddt."'";
	}


	
	
	//echo $sql;
$res5=mysqli_query($con,$sql);
                          // $res=mysqli_query($con,"select *  from registration where status='1'");
							
							/* selecting members list */
							$num=1;
				
                           while($row=mysqli_fetch_array($res5))
                                  { 
							  /* printing members list */
									$name=$row["name"];
									 
									$chk="";
									if($frs==1)
									{
									 if($row["status"]==1)
									 {
										 $chk="checked";
									 }
									}
									else
									{
										$chk="checked";
									}
							
							  ?>
                            
                            <td><?php echo ($name); ?></td>
							
							 <td>
							
									
							<input type="checkbox" name="<?php echo $row["user_id"];?>" value="<?php echo $row["user_id"];?>" <?php echo $chk; ?> />
							 </td>
                        </tr>
								  <?php
								   $num+=1;
								  }
//}
								  ?>
								  <tr><td></td><td><input name="submit" type="submit"></td></tr>
								  </form>
                             </table>
                    </body>

                     
           