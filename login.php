<?php

session_start();


$username=$_POST['username'];
$password=$_POST['password'];

$username=stripcslashes($username);
$password=stripcslashes($password);


$con=mysqli_connect("localhost","root","","pda");

$result=mysqli_query($con,"select * from users  ") or die("Failed to connect" .mysqli_error());



while($row = $result->fetch_assoc()){

if($row['Username']== $username && $row['Password'] == $password){
  if($row['Role_Code']==1){
    header("Location: owner-home.html");
  }elseif ($row['Role_Code']==2) {
    $_SESSION['usercode']=$row['User_Code'];
    header("Location: waitor-home.html");
  }elseif ($row['Role_Code']==3) {
    header("Location: kitchen.php");;
  }elseif ($row['Role_Code']==4) {
    header("Location: cashier.php");
  }
} else{
  echo "Login Failed. Try Again!";
}


}





?>
