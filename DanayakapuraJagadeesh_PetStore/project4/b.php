<?php
$result = "";
$chars = 'abcdefghijklmnopqrstuvwxyz0123456789';  

$chararray = str_split($chars);                     //Splitting the avalable characters into single elements

for($i=0;$i<10;$i++){
	$randItem = array_rand($chararray);             //Generating randomn characters
	$result .= "".$chararray[$randItem];
}

 echo $result;

 ?>

