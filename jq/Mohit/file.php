<?php
if(isset($_POST['name']))
{
    $text=$_POST['name'];

    if(!empty($_POST['name']))
    {

        $count=1;
    $handle=fopen('text.txt','a');
        fwrite($handle, $text."\n");
        fclose($handle);
        $reading=file('text.txt');
        $count_reading=count($reading);
        foreach($reading as $freading){
            echo trim($freading);
            if($count<=$count_reading){
                echo ", ";
            }
            $count++;
        }
    }else
    {
        echo "Please Write Something...... ";
    }
}


?>
<form action="file.php" method="post">
<input type="text" name="name"  />
<input type="submit"/>
    </form>