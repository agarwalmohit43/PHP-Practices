/**
 * Created by MOHIT AGARWAL on 07-06-2017.
 */
$(document).ready(function (e) {
    $('#fillDetails').on('submit',fillDetails);
})

function fillDetails(e) {
    e.preventDefault();

    var action="details";
    var country=$('#country').val();

    var data={
        action:action,
        fname:$('#firstname').val(),
        lname:$('#lastname').val(),
        contact:$('#telephone').val(),
        country:country,
        email :$('#email').val(),
        subject:$('#subject').val(),
        message:$('#message').val()
    }
    $.ajax({
        type: 'POST',
        url: 'php/fillDetails.php',
        data:data,
        cache: false,
        beforeSend: function(){
            $('#loadingmessage').show();
            $('#supbtn').hide();
        },
        success:  function(data){
            $('#loadingmessage').hide();
            $('#supbtn').show();
             if(data=="e2"){
                 $('#fadeandscale').popup('hide');
                 swal("Message sent successfully","Thank you", "success");
             }
            else{
                swal("Something went wrong!","Try signing up after some time.","error");
            }
        }
    });
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

function isString(evt)
{
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 65 || charCode > 122)) {
        return false;
    }
    return true;
}