<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Owner</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  background:#4d4d4d;
}

img{ width: 30%;
    position: center;
    float:none;}

</style>
</head>
<body>


<?php


$code=$_SESSION['product'];
$pieces=$_SESSION['pieces'];
$price=$_SESSION['price'];
$descr=$_SESSION['descr'];
$id=$_SESSION['id'];

$conn = mysqli_connect("localhost","root","","pda");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO orders_details (Order_Code, Product_Code, Pieces, Price, Comments)
VALUES ('$id','$code', '$pieces', '$price', '$descr')";


if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

<h1>Order Created Succesfuly</h1>
<a href="waitor-home.html">
<img  src="left-arrow.png"  alt=""  />
</a>


<h3>Go To Home </h3>

</body>
</html>
