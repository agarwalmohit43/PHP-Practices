<?php
// Database
define ( 'DB_HOST', 'localhost' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASSWORD', 'loverboy43' );
define ( 'DB_DB', 'final' );
?>

<?php


$servername = "localhost";
$username = "root";
$password = "loverboy43";
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>