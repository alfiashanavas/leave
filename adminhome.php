<?php
include 'dbcon.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>leave</title>
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

<script>
  var myIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
  }
  </script>
<ul>
<li><a href="logout.php">Logout</a></li>
 <li><a href="home1.php">Home</a></li>
<li><a href="aboutus.php">About us</a></li>
<li><a href="registration.php">registration</a></li>
   <li><div class="dropdown">
		 <button onclick="" class="dropbtn">Adminisration</button>
         <div id="myDropdown" class="dropdown-content">
    <a href="addleavetype.php">addleavetype</a>
	<a href="adddepartment.php">adddepartment</a>
	<a href="adduser.php">adduser</a>
	
	</div></div></li>
	
   <li><div class="dropdown">
		 <button onclick="" class="dropbtn">Report</button>
         <div id="myDropdown" class="dropdown-content">
    <a href="leavetypereport.php">leavetypereport</a>
	<a href="departmentreport.php">departmentreport</a>
	<a href="userreport.php">userreport</a>

  </div></div></li>
	
  <li><a href="staffregistration.php">Staffregistration</a></li>
  
  
 
  <h1><font color="red"><span style="color:red;font-family:Calibri Light (Headings)"><b><pre><MARQUEE>welcome to leave mangement system</MARQUEE></PRE></b></span></h1>
<body bgcolor=" white">
<td width="1337"><img src="x.jpg" width="1337" height="587"></td>
</ul>

</body>
</html>
