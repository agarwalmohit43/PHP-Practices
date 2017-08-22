<?php
session_start();

if(!isset($_SESSION['userid'])) {
    echo "<script>window.location.href='index.php'</script>";
}?>