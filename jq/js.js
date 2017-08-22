
    $("#name,#email").focusin(function(e) {
        $(this).css('background-color','#3FF');
    });
	$("#name,#email").blur(function(e) {
        $(this).css('background-color','#FFF');
    });
	$("#newsltr").click(function(e) {
			$("#newsltr").attr('value','Please Wait....');
        	$("#newsltr").attr('disabled','true');

    });
	
	$("#keydown").keyup(function(e) {
        var texts=$("#keydown").val();
		$("#keydown_text").html(texts);
    });

	$('#dropdownlist').change(function(e) {
        var texts=$('#dropdownlist').val();
		if(texts==''){
					$('#dropdownlist_feedback').html('Please select some values');
			}else{
		$('#dropdownlist_feedback').html('You have selected: '+texts);}
    });
//bind	
	$('#bind_test').bind('mouseenter mouseleave ',function(){
		$(this).toggleClass('bold');
	});
//live
$(document).ready(function(e) {
    //$('.duplicate').live({
		//click: function(){
			//alert('you clicked');
			//$(this).after('<input type="button" class="duplicate" value="Click Me!" />');
			//}
		//});	
		var textareasize=55;$('#textareacodinglength_feedback').html(textareasize+' character remaining');		
		$('#textareacodinglength').keyup(function(e) {
            var textarealength=$('#textareacodinglength').val().length;
			textremaing=textareasize-textarealength;
			
					$('#textareacodinglength_feedback').html(textremaing+' character remaining');			
        });
});

//coordinates
$('.cordinates').mousemove(function(e) {
    $('#cord').text('x: ' + e.clientX + ' y: '+e.clientY);
	
	//dialogBox({
		//				title: 'Alert',
			//			hasClose: true,
				//		effect: 'flip-horizontal',
					//	content: 'x: ' + e.clientX + ' y: '+e.clientY
					//})
	
});

$('.hover').mousemove(function(e) {
    var hovertext=$(this).attr('hovertext');
	$('#hoverdiv').text(hovertext).show();
	$('#hoverdiv').css('top', e.clientY+10).css('left', e.clientX+10);}).mouseleave(function(e) {
       $('#hoverdiv').hide(); 
    });;
	
	$('#ipjoins').click(function(e) {
       var text='';
	   $('input[type="text"]').each(function(index, element) {
        text +=$(this).val()+' ';
	
    });
	$('#ip_value').dialogBox({
					title: 'each()',
					hasClose: true,
						effect: 'flip-horizontal',
						content: text});
    });
	$(document).ready(function(e) {
       $('#show_starting').click(function(e) {
       var way=$('#show_starting').attr('value');
	   $('#hs').toggle('fast','linear');
	   
	   if(way=='Hide'){
	   $('#show_starting').attr('value','Show');
	   }else if(way=='Show'){
		   $('#show_starting').attr('value','Hide');
		   }
    });
    });
	    $('#fades_starting').click(function(e) {
            $('#hs').fadeToggle('fast','linear',function(){
				alert('Animation Complete');});
        });
		$(document).ready(function(e) {
          //  $('#slide_up_down').slideDown(2000);
			$('#slides').click(function(e) {
                $('#slide_up_down').slideUp(2000);
            });
        });
		
		$('#slidetoggle').click(function(e) {
            $('#slide_up_down').slideToggle();
        });
		
		$('#imgg').click(function(e) {
            $(this).fadeTo('fast','0.4');
        });
		
		$(document).ready(function(e) {
			$('textarea').scroll(function(e) {
                var scroll= $(this).scrollTop();
				$('#scroll_test_feedback').text('You r at line no.: '+scroll);
				if(scroll==86){
				$('#scroll_test_check').removeAttr('style');
				}
            });
           
        });
		$('.extr').click(function(e) {
            var items=$(this).text();
			$('#item_add').append('<option>'+ items +'</option>');
        });
		
		jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });  
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});

$(document).ready(function(e) {
	 var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.topbtn').fadeIn(duration);
        } else {
            jQuery('.topbtn').fadeOut(duration);
        }
    });  
	
    jQuery('.topbtn').click(function(e) {
		e.preventDefault();
        $('html , body').animate({scrollTop: 0}, duration);
    })
});
// array
$(document).ready(function(e) {
   var names=['mohit','sonu','shikhar','shelu','hi'];
	$('#arr_bttn').click(function(e) {
		 var name=$('#name_array').val();
        if(jQuery.inArray(name,names)!='-1'){
			$('#namesarray_feedback').dialogBox({
					title: 'Element Search',
					hasClose: true,
						effect: 'flip-horizontal',
						content: 'Found'});
			}else{
				$('#namesarray_feedback').dialogBox({
					title: 'Element Search',
					hasClose: true,
					effect: 'flip-horizontal',
					content: 'Not Found' })
				}
    });
});

//eacharraydisplay
$(document).ready(function(e) {
    function display(){
		$('#eacharraynames_feedback').text('');
		$.each(names,function(index,value){
			$('#eacharraynames_feedback').append(value+'<br />');
			
			})
		
		}
		
		var names=['MOHIT','ABHISHEK'];
		$('#eacharraynames_insert').click(function(e) {
			
           var name= $('#eacharraynames').val().toUpperCase();
		   if(name==''){
			   $('#eacharraynames_feedback').html('Enter some values');
			   }
		   else {
			  
			   if(jQuery.inArray(name,names)>=0){
			   $('#eacharraynames_feedback_dialog').dialogBox({
					title: 'Element Search',
					hasClose: true,
						effect: 'flip-horizontal',
						content: 'Already present in array'});
						display()
			   }else{
		 names.push(name);
		   display()}}
			
        });
});

//now
$(document).ready(function(e) {
    setInterval(function(){
		var timestamp=jQuery.now();
		$('#time').text(timestamp);},1)
		
});
//get
$('#http_string').keyup(function(e) {
    var string=$('#http_string').val();
	$.get('reverse.php',{ input:string},function(data){
		$('#http_string_feedback').text(data);
		});
});
//post
$('#post_http_btn').click(function(e) {
	var name=$('#post_http_string').val();
    var string=$('#post_http_textarea').val();
	$.post('reverse.php',{ name:name,string:string},function(data){
		$('#post_http_string_feedback').html(data);
		});
		
		});
		//ajax load
		$('#ajax_btn').click(function(e) {
			var name=$('#ajax_string').val();
			
            $.ajax({url:'page.php',
			data:'name=' + name,
			success: function(data){
				$('#eacharraynames_feedback_dialog').dialogBox({
					title: 'Element Search',
					hasClose: true,
					effect: 'flip-horizontal',
					content: data})}
			}).error(function(){
				alert('error');
				});
					});
					
					//radiobtn
				    
					setInterval(function(){
					
					//alert($('input[name=g]:checked').val());
					},5000
					);
					
					
					$('#dii').click(function(e) {
                        $('#diiiii').dialogBox({
					title: 'Element Search',
					hasClose: true,
						effect: 'flip-horizontal',
						content: 'Already present in array'});
                    });