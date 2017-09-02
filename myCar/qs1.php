<?php

//defining array
$arr = array(11,45,2,4,176,34,21,90,1001);
$arrlength = count($arr);


//using For loop
echo "using for loop";
for($x = 0; $x < $arrlength; $x++)
{
    echo "  ".$arr[$x];
}

echo "<br>";
//using while loop
echo "using while loop";
$x=0;
while($x<$arrlength)
{
     echo "  ".$arr[$x];
     $x++;
}

echo "<br>";
//using do-while loop
echo "using do-while loop";
$x=0;
do
{
	echo "  ".$arr[$x];
     $x++;
}while($x<$arrlength);


?>