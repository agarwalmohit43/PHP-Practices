<?php
include('config.php');

if(isset($_POST['action']))
{
	 if ($_POST['action'] == "maq")
    {
		$sub=$_POST['subject'];
        $query="insert into subject(sname) values('".$sub ."')";
        $con->query($query);
        echo"Entered Successfully";
	}
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<link href="bootstrap.min.css" />
</head>

<body>
	

<select id="subjects" name="subjectsname">
 <?php
        $pdo = new PDO('mysql:host=localhost;dbname=final', 'root', 'loverboy43');
        #Set Error Mode to ERRMODE_EXCEPTION.
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    $stmt = $pdo->prepare('Select sname from subject');
    $stmt->execute();
       while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<option>'.$row['sname'].'</option>';
       }
     ?>
 </select>
 
    
    <br />
     <button type="button" value="nav" id="nav1">Category Wise</button>
 <button type="button" value="nav" id="nav2">Chapter Wise</button>
 <button type="button" value="nav" id="nav3">Qtype Wise</button>



<script>


$('#nav1').click(function(e) {
		var ss=$('#subjects option:selected').text();

    /*window.location.href="http://localhost/project/maq/cat.php?sname="+ss;*/
	window.location.href="http://localhost/project/maq/categoryP.php?sname="+ss;
});

$('#nav2').click(function(e) {
		var ss=$('#subjects option:selected').text();

    /*window.location.href="http://localhost/project/maq/cat.php?sname="+ss;*/
window.location.href="http://localhost/project/maq/chapterP.php?sname="+ss;});

$('#nav3').click(function(e) {
		var ss=$('#subjects option:selected').text();

    /*window.location.href="http://localhost/project/maq/cat.php?sname="+ss;*/
window.location.href="http://localhost/project/maq/qtypeP.php?sname="+ss;})</script>
</body>
</html>