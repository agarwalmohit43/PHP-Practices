<html>
  <head>
    <script type="text/javascript" src="loader.js"></script>
    
  </head>
  <body>
  
  <?php
     include 'config.php'; 
   $sql = "SELECT qtype,count(qtype) as total from question where sid=1 group by qtype";
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
                        echo "['{$qtype}', {$total}],";
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
    }
    ?>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>