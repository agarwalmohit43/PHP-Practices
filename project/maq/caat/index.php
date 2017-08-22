
<?php
	include('config.php');
if(isset($_GET['sname']))
{
    $sname=$_GET['sname'];
	$sql = "SELECT sid FROM subject where sname='".$sname."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sid=$row['sid'];
    }
} else {
    echo "0 results";
}
$conn->close();
	
	
	
     error_reporting(E_COMPILE_ERROR );
	require_once("ajax_table.class.php");
	$obj = new ajax_table();
	   
	$records = $obj->getRecords($sid);
    }
else{

    echo "hi" . "<br/>";
    header("location: /unable");
}
	//echo phpinfo();
	 //data retrieve from categories
 $dbh = new PDO("mysql:host=localhost;dbname=final", "root", "loverboy43");
$result = mysql_query("SELECT category,id FROM category where sid=$sid");
$category = array();
while ($row = mysql_fetch_array($result)) {
    array_push($category, $row);
}


 $dbh2 = new PDO("mysql:host=localhost;dbname=final", "root", "loverboy43");
$result2 = mysql_query("SELECT chapter,id FROM chapter where sid=$sid");
$chapters = array();
while ($row = mysql_fetch_assoc($result2)) {
    array_push($chapters, $row);
}
  
 ?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>Ajax Table Inline Edit</title>

 
 
 
  <script>
	

	 // Column names must be identical to the actual column names in the database, if you dont want to reveal the column names, you can map them with the different names at the server side.
	 var columns = new Array("qtype","category","chapter");
	 var placeholder = new Array("","","","Above mentioned");
	 var inputType = new Array("select","select1","select2");
	 var table = "tableDemo";
	 var selectOpt = new Array("Long","Short","Very Short");
	 var category = <?php echo json_encode($category, JSON_PRETTY_PRINT) ?>;
	 var chapters = <?php echo json_encode($chapters, JSON_PRETTY_PRINT) ?>;
	
	 ;


	 // Set button class names 
	 var savebutton = "ajaxSave";
	 var deletebutton = "ajaxDelete";
	 var editbutton = "ajaxEdit";
	 var updatebutton = "ajaxUpdate";
	 var cancelbutton = "cancel";
	 
	 var saveImage = "images/save.png"
	 var editImage = "images/edit.png"
	 var deleteImage = "images/remove.png"
	 var cancelImage = "images/back.png"
	 var updateImage = "images/save.png"

	 // Set highlight animation delay (higher the value longer will be the animation)
	 var saveAnimationDelay = 3000; 
	 var deleteAnimationDelay = 1000;
	  
	 // 2 effects available available 1) slide 2) flash
	 var effect = "flash"; 
  
  </script>
  <script src="js/jquery-1.11.0.min.js"></script>	
  <script src="js/jquery-ui.js"></script>	
  <script src="js/script.js"></script>	
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
	<table border="0" class="tableDemo bordered">
		<tr class="ajaxTitle">
			<th width="2%">Sr</th>
		
			<th width="16%">Question Type</th>
			<th width="12%">Question Category</th>
			<th width="20%">Chapter</th>
			<th width="14%">Action</th>
		</tr>
		<?php
		if(count($records)){
		 $i = 1;	
		 $eachRecord= 0;
		 foreach($records as $key=>$eachRecord){
		?>
		<tr id="<?=$eachRecord['id'];?>">
			<td><?=$i++;?></td>
			<td class="qtype"><?=$eachRecord['qtype'];?></td>
			<td class="category"><?=$eachRecord['category'];?></td>
			<td class="chapter"><?=$eachRecord['chapter'];?></td>

			<td>
				<a href="javascript:;" id="<?=$eachRecord['id'];?>" class="ajaxEdit"><img src="" class="eimage"></a>
				<a href="javascript:;" id="<?=$eachRecord['id'];?>" class="ajaxDelete"><img src="" class="dimage"></a>
			</td>
		</tr>
		<?php }
		}
		?>
	</table>  
    <br/>
         <a href="http://localhost/project/maq/cat/index.php?sname=<?php echo $_GET['sname']?>">Back</a>
              <a href="http://localhost/project/maq/index.php">Home</a>


 </body>
</html>
