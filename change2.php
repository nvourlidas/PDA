<?php
$con=mysqli_connect("localhost","root","","pda");


$st=4;

$result=mysqli_query($con,"update orders_header set order_state='$st' where Order_Code='$_POST[id]'") or die("Failed to connect" .mysqli_error());

header("Location: serving.php");
?>
