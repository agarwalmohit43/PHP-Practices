<?php
$uploadOk = 1;
@$name = $_FILES["fileToUpload"]["name"];
@$temp_name = $_FILES["fileToUpload"]["tmp_name"];
$target_file = basename($name);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
echo $name . '<br>' . $target_file . '<br>'. $imageFileType;
echo '<br>'.$temp_name;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($temp_name);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($temp_name, '..//'.$name)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	
}
?>