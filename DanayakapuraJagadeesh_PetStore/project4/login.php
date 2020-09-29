<?php 
session_start(); 
$con = mysqli_connect("localhost","root","","db-wdm");


if (empty($_POST['pwd'])) {
    echo "Password required<br>";
  } else {
    $passwd = $_POST['pwd'];
}
if (empty($_POST['email'])) {
    echo "Email required<br>";
  } else {
    $login = $_POST['email'];
}

if(isset($passwd,$login)){

if($login!=''&& $passwd!='')
{
 $query="SELECT * FROM client WHERE email ='$login' AND password ='$passwd' ";
 $result=mysqli_query($con,$query); 
 while($item=$result->fetch_assoc())
   {
    $_SESSION['role'] =$item['roleid'];
   }
     if(mysqli_num_rows($result)>0)
      {
        if($_SESSION['role']==1)
          {
             $_SESSION['username']=$login;
             //echo "welcome to php";
              header('Location: clientspetstore.html'); 
          }
        else
           {
            header('Location: businesspetstore.html'); 
           } 
      }
    else
       {
        echo'Incorrect username or password. Please Try again. ';
       }
}
}
?>