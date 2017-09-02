<?php

include "php/session.php";

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-spacing: 0;
            border: 1px solid #ddd
        }

        td, th {
            border: none;
            text-align: left;
            padding: 8px;
        }

        th{
            background-color: #f7f7f9;
            font-family: "Lato", "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }


        tr:hover
        {
            background-color: cornflowerblue;
        }
    </style>

    <!-- CSS files-->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/icon.css" rel="stylesheet">

    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/font-awesome.min.css"/>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/externalFilldata.js"></script>
    <script src="js/login.js"></script>


    <!--sweetalert-->
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
</head>
<body>
<div class="parallax-container">
    <div class="parallax"><img src="images/para0.jpe"></div>
    <nav class="transparent">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo black-text">&nbsp;GET</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="php/logout.php" class="black-text">Logout</a></li>
            </ul>
        </div>
    </nav

</div>
</div>


<div class="section white">
    <div class="row container">
        <h4 class="header">USER MESSAGE</h4>
        <p class="grey-text text-darken-3 lighten-3">
        <div style="overflow-x:auto;">
            <table id="tableadd">
                <tr>
                    <th>FristName</th>
                    <th>LastName</th>
                    <th>Contact Number</th>
                    <th>Country</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>



            </table>
         </div>
        </p>

    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="images/para1.jpe"></div>
</div>


<footer class="page-footer blue-grey darken-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer</h5>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>
<script>
    
    $(document).ready(function (e) {
        $('.parallax').parallax();
        var data={action:"admin"}

        $.ajax({
            type:"POST",
            url:"php/fetchDetails.php",
            data:data,
            success: function(data){
				//debugger;
                if(data){
					console.log(data);
                    data = JSON.parse(data);
                    data.forEach(function(data,index)
					{
                        $('#tableadd').append("<tr><td>"+data.FirstName+"</td><td>"+data.LastName+"</td><td>"+data.ContactNumber+"</td><td>"+data.Country+"</td><td>"+data.Email+"</td><td>"+data.Subject+"</td><td>"+data.Message+"</td></tr>")

                    });


                }
            }
        });
    })
</script>
</body>
</html>

