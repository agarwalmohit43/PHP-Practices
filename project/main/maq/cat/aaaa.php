
<?php
$servername = "localhost";
$username = "root";
$password = "loverboy43";
$dbname = "try";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM question";
$result = $conn->query($sql);

if ($result->num_rows>0) {

    // output data of each row
    $data = [];
    while($row = $result->fetch_assoc()) {
        array_push($data, $row);
    }
    echo json_encode($data);
} else {
    echo "0 results";
}
$conn->close();
?>




