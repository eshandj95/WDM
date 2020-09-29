<?php

$result = "";
$chars = 'abcdefghijklmnopqrstuvwxyz0123456789';  

$chararray = str_split($chars);                     //Splitting the avalable characters into single elements

for($i=0;$i<10;$i++){
	$randItem = array_rand($chararray);             //Generating randomn characters
	$result .= "".$chararray[$randItem];
}


$con = mysqli_connect("localhost","root","","db-wdm");
if (empty($_POST['firstname'])) {
    echo "First Name required<br>";
  } else {
    $fname = $_POST['firstname'];
}
if (empty($_POST['lastname'])) {
    echo "Last Name required<br>";
  } else {
    $sname = $_POST['lastname'];
}
if (empty($_POST['email'])) {
    echo "Email required<br>";
  } else {
    $email = $_POST['email'];
}



$phno  = $_POST['phno'];
$clientsname = $_POST['bn'];
if(isset($fname,$sname,$email)){
$query = "INSERT INTO client(firstname,lastname,email,phno,bn,password,roleid) VALUES('$fname','$sname','$email','$phno','','$result',1)";
if (mysqli_query($con, $query)) {
   header("Location: submit.html");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>