<!--
	/*
	* Add edit delete rows dynamically using jquery and php
	* http://www.amitpatil.me/
	*
	* @version
	* 2.0 (4/19/2014)
	* 
	* @copyright
	* Copyright (C) 2014-2015 
	*
	* @Auther
	* Amit Patil
	* Maharashtra (India)
	*
	* @license
	* This file is part of Add edit delete rows dynamically using jquery and php.
	* 
	* Add edit delete rows dynamically using jquery and php is freeware script. you can redistribute it and/or 
	* modify it under the terms of the GNU Lesser General Public License as published by
	* the Free Software Foundation, either version 3 of the License, or
	* (at your option) any later version.
	* 
	* Add edit delete rows dynamically using jquery and php is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	* GNU General Public License for more details.
	* 
	* You should have received a copy of the GNU General Public License
	* along with this script.  If not, see <http://www.gnu.org/copyleft/lesser.html>.
	*/
-->
<?php
	// Show only compile error
	error_reporting(E_COMPILE_ERROR );
	// check if pdo library enabled ? 
	require_once("ajax_table.class.php");
	$obj = new ajax_table();
	$records = $obj->getRecords();
	//echo phpinfo();
	 //data retrieve from categories
 $dbh = new PDO("mysql:host=localhost;dbname=ajax_table", "root", "loverboy43");
$result = mysql_query("SELECT cat FROM info");
$data = array();
while ($row = mysql_fetch_array($result)) {
    array_push($data, $row["cat"]);
}
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>Ajax Table Inline Edit</title>

 
 
 
  <script>
	

	 // Column names must be identical to the actual column names in the database, if you dont want to reveal the column names, you can map them with the different names at the server side.
	 var columns = new Array("qs","qtype","cat","chap");
	 var placeholder = new Array("Enter Qs","","","");
	 var inputType = new Array("text","select","select1","select2");
	 var table = "tableDemo";
	 var selectOpt = new Array("Pune","Karad","Kolhapur","Satara","Sangli");
	 var selectOpt2 = <?php echo json_encode($data, JSON_PRETTY_PRINT) ?>;
	 var selectOpt3 = new Array("Pune","sdasd","Kolhapur","Satara","Sangli");
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
			<th width="16%">Question</th>
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
			<td class="fname"><?=$eachRecord['qs'];?></td>
			<td class="lname"><?=$eachRecord['qtype'];?></td>
			<td class="tech"><?=$eachRecord['cat'];?></td>
			<td class="email"><?=$eachRecord['chap'];?></td>
			<td>
				<a href="javascript:;" id="<?=$eachRecord['id'];?>" class="ajaxEdit"><img src="" class="eimage"></a>
				<a href="javascript:;" id="<?=$eachRecord['id'];?>" class="ajaxDelete"><img src="" class="dimage"></a>
			</td>
		</tr>
		<?php }
		}
		?>
	</table>  
 </body>
</html>
