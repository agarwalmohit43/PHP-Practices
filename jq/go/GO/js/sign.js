$(document).ready(function(e) {
    $('#signup').on('submit',signup);
	 $('#signin').on('submit',signin);
	 $('#forgetpass').on('submit',forgetpassword);
});

function signup(e){
	 e.preventDefault();
	 var email=	$('#supemail').val(); 
	 if($('#suppass').val().length >=8 && $('#suppass').val().length <=15)  
	   {
		   var action="signup";
		  
		   
			if($('#suppass').val() == $('#supcpass').val())
			{		
				var data={
					action:action,
					email :$('#supemail').val(),
					contact:$('#supno').val(),
					password:$('#suppass').val()
					}
					
					 $.ajax({
						type: 'POST',
						url: 'phpfiles/signup.php',
						data:data,
					   cache: false,
					   beforeSend: function(){
						   $('#loadingmessage').show();
						   $('#supbtn').hide();
						   },
				success:  function(data){
					$('#loadingmessage').hide();
					$('#supbtn').show();
					if(data==email){
						swal("Signed Up Successfully", "An activation link has been send to your email: " + email + "\n Kindly activate your account.", "success");
						}
						else if(data=="e1"){
							swal("Please enter a valid email address","ex:abc@xyz.com","error");
							
							}else if(data=="e2"){
								swal("Email id already exists","Kindly signin","error");
								}
						else{
							swal("Something went wrong!","Try signing up after some time.","error");
							
							}
				}
			  }); 
			  
					
			}
			else
			{
				swal("Confirm Password and Password doesnot matched!","Please enter same password.","error");
			}
				  
		 
	   }
	   else
	   {
		  swal("Password should be between 8 to 15 characters","Note: Please enter the password between 8 to 15 characters","error");
		}
	 
	 return false;
	}
	
function signin(e){
	 e.preventDefault();
	 var action="signin";
	 var email=$('#siemail').val();
	 var data={
		 action:action,
		 email:$('#siemail').val(),
		 password:$('#sipass').val(),
		 }
		 
		 $.ajax({
						type: 'POST',
						url: 'phpfiles/signin.php',
						data:data,
					   cache: false,
				success:  function(data){
					
					if(data==email){
						swal({   title: email,   text: "Welcome",   imageUrl: "images/hand.png" });
						}else if(data=="e1"){
							swal("Invalid Email Address or Password","Kindly enter correct details or signup.", "error");
							
						}					
						else{
							swal("Account Not Activated", "An activation link has been send to your email: " + email + "\n Kindly activate your account.", "error");
							}
				}
			  }); 
		
	 
	 return false;
	
	
	}	
	
	function forgetpassword(e){
		e.preventDefault();
		var action="forgetpass";
		var email=$('#femail').val();
		var data={
			action:action,
			email:$('#femail').val()
		}
		 $.ajax({
						type: 'POST',
						url: 'phpfiles/fpass.php',
						data:data,
					   cache: false,
					   
			 beforeSend: function(){
						   $('#loadingmessage2').show();
						   $('#fpassbtn').hide();
						   },
				success:  function(data){
					$('#loadingmessage2').hide();
					 $('#fpassbtn').show();

					
				if(data==email){
						swal("An Password reset link has been send to your email: " + email,"\n Kindly reset your account password.","success");
						}else{
							swal(email, "Doesnot exists", "error");
							
							}
				
				
								}
			  }); 
		
		
		return false;
		}
	
	
function isNumber(evt)
{
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		return false;
	}
	return true;
}
function validateEmail(emailField)
{
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
         swal("Invalid Email Address","Please enter a valid email address \n ex:abc@xyz.com","error");
            return false;
        }
        return true;
}


