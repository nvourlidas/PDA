<?php
$con=mysqli_connect("localhost","root","","pda");


$result=mysqli_query($con,"update users set Surname='$_POST[surname]', Name='$_POST[name]', Username='$_POST[username]', Password='$_POST[password]' where User_Code='$_POST[id]'") or die("Failed to connect" .mysqli_error());

header("Location: modify-user.php");
?>
