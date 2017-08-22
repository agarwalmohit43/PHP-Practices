<?php

include ('config.php');


if(isset($_POST['action'])) {
    if ($_POST['action'] == "admin") {

        $sql = "SELECT * FROM details";
        $result = $con->query($sql);

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
    }
    else{
        echo "dda";
    }

}
else{
    echo "dsa";
}





?>