$(document).ready(function(e) {
    $('#signup').on('submit',sendsignupform);
});

function sendsignupform(e){
	 
	   e.preventDefault();
	   if($('#suppass').val().length >=8 && $('#suppass').val().length <=15) 
	   {
		   
		 var email=$('#supemail').val();
		  var password=$('#suppass').val();
		 var data={
			   username : email,
			   pass		: password
			   }
		
		 var cpassword=$('#supcpass').val();
		 if(password==cpassword)
	 	{
		 
					 $.ajax({
						type: 'POST',
						url: 'signup.php',
						data:data,
					   cache: false,
				success:  function(data){
					
					 if(data==password)
					 {
						 swal("Successfully signed up");
						 }
				}
			  }); 
			  
	    }
	      else
	          {
			 alert("Password didnot matched");
              } 
	   
	   }else
	   {
		   alert("Password should be between 8 to 15 characters");
		   }
return false;
}
/*
$(document).ready(function(e) {
   $('#signupbtn').click(function(e) {
     
});
	
});*/

$(document).ready(function(e) {
    var a=5;
	$('#otpbtn').click(function(e) {
        var b=$('#otpt').val();
		if(b==a){
			swal("Good job!", "You clicked the button!", "success")
			} else {
				alert("no");
				}
    });
	
});