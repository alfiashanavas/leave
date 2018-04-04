$(document).ready(function(){

  $("#myform").on("submit",function(){
	  alert('validation');

    var val_name=  /^[a-zA-Z ]*$/;
    var val_address= /^[a-zA-Z ]*$/;
    var val_gender=/^[0-9a-zA-Z ]+$/;
    var val_phoneno= /^[0-9]{9,12}$/;
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    var val_departmentname= /^[a-zA-Z ]*$/;
    
    var val_username= /^[0-9a-zA-Z]+$/;
    var val_password= /^[0-9a-zA-Z]+$/;
	    

    $name= $('#name').val();
    
    $address= $('#address').val();
	$gender= $('#gender').val();
    $phoneno= $('#phoneno').val();
    $email= $('#email').val();
    $departmentname=$('#departmentname').val();
    $username= $('#username').val();
    $password= $('#password').val();
	    

    if(!val_name.test($name)){
      alert("Enter name,Name Must be Alphabets Only");
      return false;
    }
    
    else if (!val_address.test($address)) {
      alert("enter address");
      return false;
    }
    else if (!val_gender.test($gender)) {
      alert("enter valid gender");
      return false;
    }
    else if (!val_phoneno.test($phoneno)) {
      alert("enter phoneno");
      return false;
    }
    else if (!val_email.test($email)) {
      alert("enter email");
      return false;
    }
    else if (!val_departmentname.test($departmentname)) {
      alert("enter departmentname");
      return false;
    }
    
    else if (!val_username.test($username)) {
      alert("enter username");
      return false;
    }
    else if (!val_password.test($password)) {
      alert("enter password");
      return false;
    }
	
    else {
      return true;
    }
  });
  
  function validate()
  {
	 var val_name=  /^[a-zA-Z ]*$/;
    var val_address= /^[a-zA-Z ]*$/;
    var val_gender=/^[0-9a-zA-Z ]+$/;
    var val_phoneno= /^[0-9]{9,12}$/;
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    var val_departmentname= /^[a-zA-Z ]*$/;
    
    var val_username= /^[0-9a-zA-Z]+$/;
    var val_password= /^[0-9a-zA-Z]+$/;
	    

    $name= $('#name').val();
    
    $address= $('#address').val();
	$gender= $('#gender').val();
    $phoneno= $('#phoneno').val();
    $email= $('#email').val();
    $departmentname=$('#departmentname').val();
    $username= $('#username').val();
    $password= $('#password').val();
	    

    if(!val_name.test($name)){
      alert("Enter name,Name Must be Alphabets Only");
      return false;
    }
    
    else if (!val_address.test($address)) {
      alert("enter address");
      return false;
    }
    else if (!val_gender.test($gender)) {
      alert("enter valid gender");
      return false;
    }
    else if (!val_phoneno.test($phoneno)) {
      alert("enter phoneno");
      return false;
    }
    else if (!val_email.test($email)) {
      alert("enter email");
      return false;
    }
    else if (!val_departmentname.test($departmentname)) {
      alert("enter departmentname");
      return false;
    }
    
    else if (!val_username.test($username)) {
      alert("enter username");
      return false;
    }
    else if (!val_password.test($password)) {
      alert("enter password");
      return false;
    }
	
    else {
      return true;
    }  
  }
  
  $("#name").focusout(function(){
    var val_name=  /^[a-zA-Z ]*$/;
    $name= $('#name').val();
	if($name == "" ){
		$('#name_error').html(" Enter Name");
		return false;
		}
    else if(!val_name.test($name)){
		$(this).css('border','2px solid red');
		$('#name_error').html("Invalid Name , Name Must be Alphabets Only");
		return false;
        }
    else {
		$(this).css('border','NONE');
		$('#name_error').html("");
      return true;
    }
  });
   
    $("#address").focusout(function(){
    var val_address= /^[a-zA-Z ]*$/;
    $age= $('#address').val();
	if($address == "" ){
		$('#address_error').html(" Enter address");
		return false;
		}
    else if(!val_address.test($address)){
		$(this).css('border','2px solid red');
		$('#address_error').html("Invalid address , Enter A Valid address");
		return false;
    }
    else {
		$(this).css('border','NONE');
		$('#address_error').html("");

      return true;
    }
  });
  
      
        $("#phoneno").focusout(function(){
		var val_phoneno= /^[0-9]{9,12}$/;
		$phoneno= $('#phoneno').val();
		if($phoneno == "" ){
		$('#phoneno_error').html(" Enter phoneno");
		return false;
		}
		else if(!val_phoneno.test($phoneno)){
			$(this).css('border','2px solid red');
	  		$('#phoneno_error').html("Phone Number Must Contain 10 Digits");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#phoneno_error').html("");
		return true;
			}
  });
         $("#email").focusout(function(){
			var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
			$email= $('#email').val();
			if($email == "" ){
			$('#email_error').html(" Enter Email");
			return false;
		}
			
			else if(!val_email.test($email)){
				$(this).css('border','2px solid red');
	  	  		$('#email_error').html("Invalid email , Email must Like abc@gmail.com");	
				return false;
			}
			else {
				$(this).css('border','NONE');
				$('#email_error').html("");
				return true;
			}
	});
       $("#departmentname").focusout(function(){
		var val_departmentname= /^[[a-zA-Z ]*$/;
		$departmentname= $('#departmentname').val();
		if(!val_departmentname.test($departmentname)){
			$(this).css('border','2px solid red');
			$('#departmentname_error').html("Enter departmentname");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#departmentname_error').html("");
		return true;
		}
	});
		
	
       $("#username").focusout(function(){
		var val_username= /^[0-9a-zA-Z]+$/;
		$username= $('#username').val();
		if(!val_username.test($username)){
			$(this).css('border','2px solid red');
	  	  	$('#username_error').html("Invalid Username ");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#username_error').html("");

		return true;
		}
  });
   
		$("#password").focusout(function(){
		var val_password= /^[0-9a-zA-Z]+$/;
		$password= $('#password').val();
		if(!val_password.test($password)){
			$(this).css('border','2px solid red');
	  	  	$('#password_error').html("Invalid password ");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#password_error').html("");
		return true;
		}
  });
  
 });