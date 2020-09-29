<?php

$con = mysqli_connect("localhost","root","","db-wdm");
$bname = $_POST['bname'];
$sname = $_POST['service'];

$query = "INSERT INTO businesspetstore(bname,sname) VALUES('$bname','$sname')";
if (mysqli_query($con, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>