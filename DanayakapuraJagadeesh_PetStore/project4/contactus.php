<?php
$con = mysqli_connect("localhost","root","","db-wdm");
if (empty($_POST['firstname'])) {
    echo "First Name required<br>";
  } else {
    $fname = $_POST['firstname'];
}
if (empty($_POST['secondname'])) {
    echo "Last Name required<br>";
  } else {
    $sname = $_POST['secondname'];
}
if (empty($_POST['email'])) {
    echo "Email required<br>";
  } else {
    $email = $_POST['email'];
}
if (empty($_POST['comment'])) {
    echo "Comment required<br>";
  } else {
    $comments = $_POST['comment'];
}


$phno  = $_POST['phno'];
if(isset($fname,$sname,$email,$comments)){
$query = "INSERT INTO contactus(Fname,Lname,Email,Phone,Comments) VALUES('$fname','$sname','$email','$phno','$comments')";
if (mysqli_query($con, $query)) {
    header("Location: submit.html");
} 
}


mysqli_close($con);
?>
