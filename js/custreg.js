 $(document).ready(function(){
  $("#myFormc").on("submit",function(){
    var val_name= /^[A-Za-z ]+$/;
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    var val_username= /^[0-9a-zA-Z]+$/;
    var val_password= /^[0-9a-zA-Z]+$/;
    $name= $('#name').val();
    $email= $('#email').val();
    $username= $('#username').val();
    $password= $('#password').val();
    if(!val_name.test($name)){
      $("#name").focus();
      alert("enter name ,name must be alphabets only");
      return false;
    }
    else if (!val_email.test($email)) {
      $("#email").focus();
      alert("enter a valid email");
      return false;
    }
        else if (!val_username.test($username)) {
      $("#username").focus();
      alert("enter username");
      return false;
    }
    else if (!val_password.test($password)) {
      $("#password").focus();
      alert("enter password");
      return false;
    }
    else {
      return true;
    }
  });
    $("#name").focusout(function(){
    var val_name= /^[A-Za-z ]+$/; 
    $name= $('#name').val();
    if(!val_name.test($name)){
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
