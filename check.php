<?php

$con = mysqli_connect("localhost","root","","pda");
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM orders_header ORDER BY time DESC LIMIT 10";

$rows = mysqli_query($con,$sql) or die(mysqli_error($con));
while($r = mysqli_fetch_assoc()){

echo "New Order";

}



?>
