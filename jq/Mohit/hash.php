<?php
$password="hi";
echo md5(90*13+id)."<br/>";
$hash=password_hash($password,PASSWORD_DEFAULT);
echo $hash . "<br/>";

if(password_verify($password,$hash))
{
    echo "success";
} else {
    echo "unsuccess";
}
?>