<?php
$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;

echo "<br/>";
 $c = 10; $d = 20; echo "$c + $d";
 
 echo "<br/>";
 $e = 10; $f = 20; echo $e + $f;
 echo "<br/>";
$e = 10; $f = 20;
echo '$a + $b';

echo "<br/>";

/*function foo1()
{
  return {
      bar: "hello"
  };
}

function foo2()
{
  return
  {
      bar: "hello"
  };
}*/
?>