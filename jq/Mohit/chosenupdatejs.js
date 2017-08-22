$(document).ready(function(e) {
    $(".chzn-select").chosen();
	
	$.ajax({
			type:"POST",
			url:'chosenupdated.php',
			
			success: function(data)
			{
				var items=JSON.parse(data);
				gitem=items;
				
				for(var i=0;i<items.length;i++)
				{
					$('#city_feedback').text(gitem[i].city);
					
					$('#external').append('<option>'+ items[i].city +'</option>');
					$("#external").trigger("chosen:updated");
				}
			}
		   }).error(function()
		   {
				alert('error');
		
		   }
		);
		/*var chosed=$('.chzn-select').chosen().val();
	alert(chosed);*/
	$(".chzn-select").chosen({

     disable_search_threshold: 10

}).change(function(event){

     if(event.target == this){
        alert($(this).val());
     }

});
	
	
});


//jalert
$(document).ready(function () {
 /* $.jAlert({
    'title': 'goBus',
    'content': 'WELCOME',
    'theme': 'green',
    'btns': { 'text': 'close' }
  });*/
  	
	$('#alertme').click(function(e)
	 {
  				//alert("hi");
				//successAlert('Success', 'You did it!');
				//infoAlert('Info', 'Information!'); //blue alert
				//imageAlert('mohit.jpg');
				
	/*confirm(function(){
    		imageAlert('mohit.jpg');
  }, function(){
  			infoAlert('Info', 'Information!');
  });*/
  $.jAlert({'type': 'confirm','confirmQuestion': 'Are you sure Mohit?', 'onConfirm': confirmCallback, 'onDeny': denyCallback});
			function confirmCallback(){
					imageAlert('mohit.jpg');
					}
					function denyCallback(){infoAlert('Info', 'Information!');}
				 
	});
	//animation
	//$(div).addClass('dance');
});

$(document).ready(function(e) {
	$('#waitMe_ex').click(function(){
		run_waitMe('bounce');
	});
	function run_waitMe(effect){
		$('#w_feedback').waitMe({
			effect:'bounce',
			text: 'Please wait...',
			bg: 'rgba(255,255,255,0.7)',
			color:'#000',
			sizeW:'',
			sizeH:'',
			source: 'img.svg'
		});
	}
});

