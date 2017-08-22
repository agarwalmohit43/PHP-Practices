<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'loverboy43';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
    die('Could not connect: ' . mysql_error());
}

$table_name = "subject";
$backup_file  = "subject".date('Y.m.d').".sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";

mysql_select_db('try');
$retval = mysql_query( $sql, $conn );
echo  $retval;
if(! $retval ) {
    die('Could not take data backup: ' . mysql_error());
}

echo "Backedup  data successfully\n";

mysql_close($conn);
?>