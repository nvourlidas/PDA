<?php
$con=mysqli_connect("localhost","root","","pda");


if($_POST['role']=='admin'){
  $role=1;
}elseif($_POST['role']=='waiter'){
  $role=2;
}elseif($_POST['role']=='kitchen'){
  $role=3;
}elseif($_POST['role']=='cashier'){
  $role=4;
}


$result=mysqli_query($con,"update users set Role_Code='$role' where User_Code='$_POST[id]'") or die("Failed to connect" .mysqli_error());

header("Location: user-roles.php");
?>
