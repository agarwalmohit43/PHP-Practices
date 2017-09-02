/**
 * Created by MOHIT AGARWAL on 07-06-2017.
 */


$(document).ready(function (e) {
    $('#signin').on('submit',signin);
})

function signin(e) {
    e.preventDefault();

    var action="login";
    var user=$('#uname').val();

    var data={
        action:action,
        uname:user,
        pass: $('#password').val()
    }
    $.ajax({
        type: 'POST',
        url: 'php/login.php',
        data:data,
        cache: false,
        success:  function(data){
            if(data=="e1"){
                //swal("Loged In","Welcome: "+user,"success");
                $('#fade').popup('hide');
                window.location.href="admin.php";
            }else if(data=="e2"){
                $('#fade').popup('hide');
                swal("Wrong username or password","Please enter correct Username or password", "error");

            }
            else{
                swal("Something went wrong!","Try signing up after some time.","error");
            }
        }
    });
}