$(document).ready(function(e) {
    $('#signup').on('submit',sendsignupform);
});

function sendsignupform(e){
	 
	   e.preventDefault();
	   var email=$('#supemail').val();
	 var password=$('#suppass').val();
	 var cpassword=$('#supcpass').val();
	 if(password==cpassword)
	 {
		 
		 $.ajax({
            type: 'POST',
            url: 'datainsertion.php',
            data:jQuery("#data").serialize(),
           cache: false,
    success:  function(data){
		
		 $('#display_form_submission').dialogBox({
					title: 'Successfull',
					hasClose: true,
				effect: 'flip-horizontal',
			content: data});
    }
  }); 
	}else
	{
			 alert("Password didnot matched");
     }
	   
     
return false;
}
/*
$(document).ready(function(e) {
   $('#signupbtn').click(function(e) {
     
});
	
});*/