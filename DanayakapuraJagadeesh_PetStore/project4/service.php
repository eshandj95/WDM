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
$businessname = $_POST['bn'];
if(isset($fname,$sname,$email)){
$sender = 'eshandj95@gmail.com';
$subject = "Login Details";
$message = "Username - ".$email." Password - ".$result;
$headers = 'From:' . $sender;

mail($email, $subject, $message, $headers);

$query = "INSERT INTO client(firstname,lastname,email,phno,bn,password,roleid) VALUES('$fname','$sname','$email','$phno','$businessname','$result','2')";
if (mysqli_query($con, $query)) {
    header("Location: submit.html");
} 
}


mysqli_close($con);
?>