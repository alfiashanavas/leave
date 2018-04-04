<!DOCTYPE html>
<?php
$db=mysqli_connect("localhost","root","","home services");


if(isset($_POST['submit']))
{
  //echo 'hai';
$username=$_POST["userid"];

$password=$_POST["psw"];

$confirm_password=$_POST["cpsw"];

$firstName=$_POST["fname"];

$lastName=$_POST["lname"];

$address=$_POST["address"];

$city=$_POST["city"];

$date_of_birth=$_POST["dob"];

$email=$_POST["email"];

if(isset($_POST["gender"])) {


$gender = $_POST["gender"];

}

else
 {
$gender= '';
}

$contact=$_POST["contact"];

/*echo $gender;*/
$sql="INSERT INTO `registration`(`Reg_id`, `username`, `Password`, `confirm password`, `Firstname`, `lastname`, `address`, `city`, `dob`, `email_id`, `gender`, `contact`) VALUES (NULL,'$username','$password','$confirm_password','$firstName','$lastName','$address','$city','$date_of_birth','$email','$gender','$contact')";
 $result=mysqli_query($db,$sql);

/*
$sql1="INSERT INTO `login`(`username`, `password`, `role`) VALUES ('$a','$b',1)";
$result1=mysqli_query($db,$sql1);*/
echo "Sucessfully inserted";

$sql2= "select MAX(`Reg_id`) as regid from `registration`";
$result2=mysqli_query($db,$sql2);
$row = mysqli_fetch_array($result2);
$register_id = $row['regid'];
$sql3="INSERT INTO `login`( `Reg_id`, `username`, `password`, `Role`) VALUES ('$register_id','$username','$password',1)";
$result2=mysqli_query($db,$sql3);
echo '<script>alert("saved Sucessfully");</script>';
  /*header("location:Register.php");*/
}
?>

<html >
<head>
  <meta charset="UTF-8">
  <title>REGISTRATION</title>



        <link rel="stylesheet" href="css/style1.css">


</head>

<body>
  <div class="menu_block ">
    <nav class="horizontal-nav full-width horizontalNav-notprocessed">
      <ul class="sf-menu">



         </ul>
      </nav>
     <div class="clear"></div>
  </div>
</div>
  <div class="login-page">

  <div class="form">
    <form name="myform" method="post"  action="#" onSumbit="return validate()">
    <div id="3">
    </div>
    <div>
       <h2>REGISTRATION FORM</h2>
        <label><br><b>USERNAME:</b></br></label>
        <input type="text" name="userid" pattern="[a-zA-Z\-'\s]+" title="Please use alphabets" required/>
    	<br>
        <label><br><b>FIRST-NAME:</b></br></label>
        <input type="text" name="fname" pattern="[a-zA-Z\-'\s]+" title="Please use alphabets" required/>
    	<br>
      <br>
        <label><br><b>LAST-NAME:</b></br></label>
        <input type="text" name="lname"   pattern="[a-zA-Z\-'\s]+" title="Please use alphabets"  required>
    	<br>
    	<label><br><b>PASSWORD:</b></br></label>
    	<input type="password" name="psw" pattern="^[a-zA-Z]\w{3,14}$" title="Only use alphabets and Number.Eg:abcd or 1234" required>
    	<br>
      <br>
    	<label><br><b>CONFIRM PASSWORD:</b></br></label>
    	<input type="password" name="cpsw"  pattern="^[a-zA-Z]\w{3,14}$" title="Only use alphabets and Number.Eg:abcd or 1234" required>
    	<br>
    	<label><br><b>EMAIL:</b></br></label>
    	<input type="email" name="email"  pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" title="Use this format.Eg: 	
             asmith@mactec.com ,foo12@foo.in" required>
    	<br>
    	<label><br><b>ADDRESS:</b></br></label>
    	<textarea  name="address"  pattern="^[A-Za-z-0-99999999'" required>
     	</textarea>
    	<br>
    	<label><br><b>GENDER:</b></br></label>
    	<input type="radio" name="gender" value="female">Female</input>
      <input type="radio" name="gender" value="male">Male</input>
    	<br>
      <br>
    	<label><br><b>DOB:</b></br></label>
    	<input type="text" name="dob"  placeholder="yyyy-mm-dd" pattern="^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$"  required>
    	<br>
      <br>
    	<label><br><b>PHN NUMBER:</b></br></label>
    	<input type="text" name="contact"  pattern="[789][0-9]{9}"  title="Mobile Number Must be 10 digit" required/>
    	<br>
      <br>
    	<label><br><b>CITY:</b></br></label>
    	<input type="text" name="city" pattern="[a-zA-Z\-'\s]+" title="Please use alphabets" required>
    	<br>
      <br></br>
    		  <button type="submit" name="submit" value="submit">REGISTER</button>
          <p class="message">Login <a href="login.php">LOGIN</a></p>
          <p class="message">Home? <a href="index.php"</a>Home</p>
    </div></form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index1.js"></script>

</body>
</html>
