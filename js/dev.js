$(document).ready(function(){
  $("#dregistration").on("submit",function(){
    var val_name= /^[A-Za-z ]+$/;
    var val_age= /^\d{1,2}$/;
    //var val_gender=/^[0-9a-zA-Z]+$/;
    var val_address=/^[0-9a-zA-Z: ]+$/;
    var val_phone= /^[0-9]{9,12}$/;
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
  //  var val_language= /^[0-9a-zA-Z]+$/;
    var val_previous=/^[^&]+$/;
    var val_image= /^[^&]+$/;
    var val_username= /^[0-9a-zA-Z]+$/;
    var val_password= /^[0-9a-zA-Z]+$/;
    $name= $('#name').val();
    $age= $('#age').val();
   // $gender= $('#gender').val();
    $address= $('#address').val();
    $phone= $('#phone').val();
    $email= $('#email').val();
    //$language= $('#language').val();
    $previous=$('#previous').val();
    $image= $('#image').val();
    $username= $('#username').val();
    $password= $('#password').val();
    if(!val_name.test($name)){
     // $("#name").focus();
      alert("Enter Name, Name Must be Alphabets Only");
      return false;
    }
    else if (!val_age.test($age)) {
      //$("#age").focus();
      alert(" Enter Valid Age, Age Must Contain Numbers only ");
      return false;
    }
    else if (!val_address.test($address)) {
      //$("#adress").focus();
      alert("enter address");
      return false;
    }
    else if (!val_phone.test($phone)) {
     // $("#phone").focus();
      alert("enter valid phone number");
      return false;
    }
    else if (!val_email.test($email)) {
      //$("#email").focus();
      alert("enter email as abc@gmail.com");
      return false;
    }
    //else if (!val_language.test($language)) {
     // $("#language").focus();
    //  alert("choose language");
    //  return false;
   // }
    else if (!val_previous.test($previous)) {
      //$("#experiance").focus();
      alert("Choose your previous work");
      return false;
    }
    else if (!val_image.test($image)) {
      //$("#photo").focus();
      alert("choose your photo");
      return false;
    }
    else if (!val_username.test($username)) {
      //$("#username").focus();
      alert("enter username");
      return false;
    }
    else if (!val_password.test($password)) {
      //$("#password").focus();
      alert("enter password");
      return false;
    }
    else {
      return true;
    }
  });
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
    $("#age").focusout(function(){
    var val_age= /^\d{1,2}$/;
    $age= $('#age').val();
	if($age == "" ){
		$('#age_error').html(" Enter age");
		return false;
		}
    else if(!val_age.test($age)){
		$(this).css('border','2px solid red');
		$('#age_error').html("Invalid Age , Enter A Valid Age");
		return false;
    }
    else {
		$(this).css('border','NONE');
		$('#age_error').html("");

      return true;
    }
  });
      $("#address").focusout(function(){
		var val_address= /^[0-9a-zA-Z ]+$/;
		$address= $('#address').val();
		if(!val_address.test($address)){
			$(this).css('border','2px solid red');
	  		$('#address_error').html("Enter Address");
		return false;					
			}
		else {
		$(this).css('border','NONE');
		$('#address_error').html("");
      return true;
			}
  });
      $("#phone").focusout(function(){
		var val_phone= /^[0-9]{9,12}$/;
		$phone= $('#phone').val();
		if($phone == "" ){
		$('#phone_error').html(" Enter phone number");
		return false;
		}
		else if(!val_phone.test($phone)){
			$(this).css('border','2px solid red');
	  		$('#phone_error').html("Phone Number Must Contain 10 Digits");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#phone_error').html("");
		return true;
			}
  });
          $("#email").focusout(function(){
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    $email= $('#email').val();
    if(!val_email.test($email)){
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
       $("#language").focusout(function(){
    var val_language= /^[0-9a-zA-Z]+$/;
    $language= $('#language').val();
    if(!val_email.test($language)){
      $(this).css('border','2px solid red');
	  	  		$('#language_error').html("Invalid Language");

      return false;
    }
    else {
		$(this).css('border','NONE');
								$('#language_error').html("");

      return true;
    }
  });
     $("#previous").focusout(function(){
    var val_previous= /^[^&]+$/;
    $previous= $('#previous').val();
    if(!val_previous.test($previous)){
      $(this).css('border','2px solid red');
	  	  		$('#previous_error').html("Enter A valid work");

      return false;
    }
    else {
		$(this).css('border','NONE');
								$('#previous_error').html("");

      return true;
    }
  });
     $("#image").focusout(function(){
    var val_image= /^[^&]+$/;
    $photo= $('#photo').val();
    if(!val_image.test($image)){
      $(this).css('border','2px solid red');
	  	  		$('#image_error').html("Invalid photo");

      return false;
    }
    else {
		$(this).css('border','NONE');
								$('#image_error').html("");

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
