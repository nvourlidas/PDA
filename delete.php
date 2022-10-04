<?php
$con=mysqli_connect("localhost","root","","pda");

$result=mysqli_query($con,"delete from users where User_Code='$_POST[id]'") or die("Failed to connect" .mysqli_error());

header("Location: delete-user.php");
?>
