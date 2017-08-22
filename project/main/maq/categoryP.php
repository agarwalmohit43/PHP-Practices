<html>
  <head>
    <script type="text/javascript" src="../../../ssafs/dashboard/js/loader.js"></script>
    
  </head>
  <body>
  
  <?php
  
     include 'config.php'; 
	 
	    if(isset($_GET['sname']))
{
    $sname=$_GET['sname'];
	$sql = "SELECT sid FROM subject where sname='".$sname."';";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sid=$row['sid'];
    }
} else {
    echo "<strong>"."<font size='50'>"."<center>"."No Records Found"."</center>"."</font>"."</strong>";
}


   $sql = "SELECT category,count(category) as total from question where sid=$sid group by category";
$result = $con->query($sql);
 
    $num_results = $result->num_rows;
 
    if( $num_results > 0){
 
    ?>
    
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
		['chapter', 'Total'],
           <?php
                    while( $row = $result->fetch_assoc() ){
                        extract($row);
                        echo "['{$category}', {$total}],";
                    }
                    ?>
         
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <?php
 
    }else{
        echo "<strong>"."<font size='50'>"."<center>"."No Records Found"."</center>"."</font>"."</strong>";
    }}
    ?>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>