<?php
echo "Welcome to my page";

echo "<br>";
echo "<br>";

require 'my_add_function.php';
include 'other_functions.php';



$total1= myadd(9,2);

echo $total1;
echo "<br>";
echo "<br>";


$num1=mymultiply($total1);
echo $num1;



?>