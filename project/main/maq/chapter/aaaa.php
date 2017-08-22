
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
$sname="math";
$sql = "SELECT sid FROM subject where sname='".$sname."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "sid: " . $row["sid"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>