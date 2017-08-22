<?php

$filename=$_FILES['filename']['name'];
//$size=$_FILES['filename']['size'];
//$type=$_FILES['filename']['type'];
$tmp_name=$_FILES['filename']['tmp_name'];
$error=$_FILES['filename']['error'];
$extension=pathinfo($filename,PATHINFO_EXTENSION);
//$extension=substr($filename,strpos(($filename,'.')+1));
//echo $filename .'<br>'.$size.'<br>'.$type.'<br>'.$tmp_name.'<br>'.$error.'<br>';
if(isset($filename)){
    if(!empty($filename)){
        $location='upload/';
        if(move_uploaded_file($tmp_name,$location.$filename)){
            echo "Uploaded!";

        }else{
            echo "Unable to upload";
        }

    }else{
        echo "Please Upload Some Files....";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File Upload</title>
<script src="bootstrap and js/jquery-2.1.4.min.js"></script>
<script src="bootstrap and js/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap and js/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}</style>
</head>

<body>
<form action="fileupload.php" method="post" enctype="multipart/form-data">
  
   <strong><em>Select the File to be uplaoded:</em></strong> <span class="btn btn-default btn-file" >Browse<input type="file" name="filename"></span> <input type="submit" value="Upload" class="btn btn-info">
</form>


</body>
</html>
