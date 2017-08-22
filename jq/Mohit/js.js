$(document).ready(function(e) {
	var gitem;
    $('#ci').keyup(function(){
		var city=$("[name='city']").val();
		$('#wait_feed').show();
	//	$('#city_feedback').html(city);
		/*$.ajax({
			url:'keyup.php',
		data:'city='+city,
		success: function(data){
		$('#city_feedback').html(data);
		}
		}).error(function(){
				alert('error');
		
		});*/
		$.ajax({
			type:"POST",
			url:'keyup.php',
			data:'city=' + city,
			success: function(data){
					$('#wait_feed').hide();
				var items=JSON.parse(data);
				gitem=items;
				
				for(var i=0;i<items.length;i++){
					$('#city_feedback').text(gitem[i].city);
					
			$('#external').append('<option>'+ items[i].city +'</option>');
				$("#external").trigger("chosen:updated");
				}
				}
			}).error(function(){
				alert('error');
		
		});
	});
	$(".chzn-select").chosen();


});




					