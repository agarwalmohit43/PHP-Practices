function sendform(e){
	
	e.preventDefault();
      $.ajax({
            type: 'POST',
            url: 'config.php',
            data:$("#lgoinform").serialize(),
           	cache: false,
   			success:  function(data){
				var text=data;
			if(data=="Success"){
				window.location.href='config.php';
				}else{
					$('#inputEmail').val('');
					$('#inputPassword').val('');
					alert('Invalid Username Or Password');
					
				}
    		},
			error:function(e){
				alert(e);
			}
		
  	});
}

$(document).ready(function(e) {
    $('#lgoinform').submit(sendform);
});
