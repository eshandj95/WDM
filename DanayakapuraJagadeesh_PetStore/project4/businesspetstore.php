<?php

$con = mysqli_connect("localhost","root","","db-wdm");

if (empty($_POST['service'])) {
    echo "Service Name required<br>";
  } else {
    $sname = $_POST['service'];
}

$bname = $_POST['bname'];



if(isset($sname)){
$query = "INSERT INTO businesspetstore(bname,sname) VALUES('$bname','$sname')";
if (mysqli_query($con, $query)) {
    header('Location: blanding.html');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>