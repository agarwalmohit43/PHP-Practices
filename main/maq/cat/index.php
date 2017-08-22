
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
	
	
	
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>

  <title>Ajax Table Inline Edit</title>
  <script>
	 
	 var columns = new Array("category","sid");
	 var placeholder = new Array("Enter Categories","Please enter sid as above");
	 var inputType = new Array("text","text");
	 var table = "tableDemo";
	 
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

	
	 var saveAnimationDelay = 3000; 
	 var deleteAnimationDelay = 1000;
	  
	 var effect = "flash"; 
  
  </script>
  <script src="js/jquery-1.11.0.min.js"></script>	
  <script src="js/jquery-ui.js"></script>	
  <script src="js/script.js"></script>	
  <link rel="stylesheet" href="css/style.css">
  
   <script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<link href="bootstrap.min.css" />
 </head>
 <body>
	<table border="0" class="tableDemo bordered">
		<tr class="ajaxTitle">
			<th width="2%">Sr</th>
			<th width="56%">Categories</th>
            <th width="2%">Sid</th>
			<th width="14%">Action</th>
		</tr>
		<?php
		if(count($records)){
		 $i = 1;	
		 foreach($records as $key=>$eachRecord){
		?>
		<tr id="<?=$eachRecord['id'];?>">
			<td><?=$i++;?></td>
			<td class="category"><?=$eachRecord['category'];?></td>
			<td class="sid"><?=$eachRecord['sid'];?></td>

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
         <a href="http://localhost/project/maq/chapter/index.php?sname=<?php echo $_GET['sname']?>">Back</a>

     <a href="http://localhost/project/maq/caat/index.php?sname=<?php echo $_GET['sname']?>">NEXT</a>
<script>
var sname=<?php echo $_GET['sname'];?>;

$('#nav').click(function(e) {

	/*window.location.href="http://localhost/project/maq/caat/index.php?sname="+sname;*/
	alert('hi');
});

</script>

 </body>
</html>
