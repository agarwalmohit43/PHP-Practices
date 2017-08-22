<?php
$a=rand();
echo md5($a);
echo "<br/>".$a;

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body>
<div class="panel panel-primary">
    <div class="panel-heading"><center>Reset Password</center></div>
    <div class="panel-body">
        <div class="well well-sm">
            <form action="#" method="get">


                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-edit"></span></span>
                    <input type="text" class="form-control" placeholder="Enter Your Password" aria-describedby="sizing-addon1">
                </div><br/>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-edit"></span></span>
                    <input type="text" class="form-control" placeholder="Confirm Your Password" aria-describedby="sizing-addon1">
                </div><br/><br/>
                <center><button type="button" class="btn btn-primary">Submit</button></center>
            </form>
        </div>
    </div>
</div>
</body>
</html>

