
	
   function sendForm(e){
	   e.preventDefault();
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
return false;
}
$(document).ready(function(e) {
    $('#data').on('submit',sendForm);
});


