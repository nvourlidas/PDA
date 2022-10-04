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
img{width: 30%; margin:3px 70px 15px 47px; }

p{font-size: 40px; margin-left: 50px;}

@media screen and (max-height: 750px) {
  img{width: 50%; margin:3px 70px 15px 47px; background-color: white; -webkit-border-radius: 20px 18px 18px 23px;
-moz-border-radius: 20px 18px 18px 23px;
border-radius: 20px 18px 18px 23px; }

  p{font-size: 20px; margin:center; color: white;}

  table{margin-top: 60px;}

  }


</style>
</head>
<body>



<?php


$name=$_POST['name'];
$price=$_POST['price'];
$category=$_POST['category'];

$conn = mysqli_connect("localhost","root","","pda");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($category=='coffee'){
  $category1=1;
}elseif ($category=='food') {
  $category1=2;
}
elseif ($category=='drinks') {
  $category1=3;
}elseif ($category=='chocolate') {
  $category1=4;
}elseif ($category=='tea') {
  $category1=5;
}elseif ($category=='pastry') {
  $category1=6;
}


$sql = "INSERT INTO menu (product_name, product_category, product_price )
VALUES ('$name','$category1', '$price'  )";

if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


<h1>New Product created successfully</h1>

<a href="add-product.html">
<img  src="left-arrow.png"  alt=""  />
</a><p>Go Back</p>


</body>
</html>
