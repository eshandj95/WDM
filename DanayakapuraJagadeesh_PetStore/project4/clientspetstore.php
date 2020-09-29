<?php

$con = mysqli_connect("localhost","root","","db-wdm");

if (empty($_POST['mpet'])) {
    echo "Pet name required<br>";
  } else {
    $sname = $_POST['mpet'];
}
$cname = $_POST['cname'];

if(isset($sname)){
$query = "INSERT INTO clientspetstore(cname,sname) VALUES('$cname','$sname')";
if (mysqli_query($con, $query)) {
    header('Location: clanding.html');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>