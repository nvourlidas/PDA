<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: "Lato", sans-serif;
  background:#4d4d4d;
}

img{background:#4d4d4d;
border: 0px;}

button{border:0px;}

table.blueTable {
  border: 1px solid #A4A4A4;
  background-color: white;
  width: 100%;
  text-align: left;
  border-collapse: collapse;

}
table.blueTable td, table.blueTable th {
  border: 5px solid #AAAAAA;
  padding: 8px 8px;
}
table.blueTable tbody td {
  font-size: 17px;
  font-weight: bold;
  color: black;
}

table.blueTable thead {
  background: #FF0000;
  background: -moz-linear-gradient(top, #ff4040 0%, #ff1919 66%, #FF0000 100%);
  background: -webkit-linear-gradient(top, #ff4040 0%, #ff1919 66%, #FF0000 100%);
  background: linear-gradient(to bottom, #ff4040 0%, #ff1919 66%, #FF0000 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 8px;
  font-weight: bold;
  color: #FFFFFF;
  background: #F5F5F5;
  background: -moz-linear-gradient(top, #f7f7f7 0%, #f6f6f6 66%, #F5F5F5 100%);
  background: -webkit-linear-gradient(top, #f7f7f7 0%, #f6f6f6 66%, #F5F5F5 100%);
  background: linear-gradient(to bottom, #f7f7f7 0%, #f6f6f6 66%, #F5F5F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 8px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #FF0000;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
</style>
</head>
<body>

  <table class="blueTable" action="modify.php">
  <thead>
  <tr>
  <th>Product Name</th>
  <th>Pieces</th>
  <th>Price</th>
  <th>Description</th>

  </tr>
  </thead>

<?php

$id=$_POST['id'];

$con = mysqli_connect('localhost','root','','pda');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$result=mysqli_query($con,"select * from orders_details where Order_Code='$id' ") or die("Failed to connect" .mysqli_error());

$row = $result->fetch_assoc();

    $product=$row['Product_Code'];




$result1=mysqli_query($con,"select * from menu  ") or die("Failed to connect" .mysqli_error());
while($row1 = $result1->fetch_assoc()){
  if($row1['Product_Code']==$product){
    $name=$row1['product_name'];
 }
}





  echo"<tr>";
  echo"<td>".$name."</td>";
  echo"<td>".$row['Pieces']."</td>";
  echo"<td>".$row['Price']."</td>";
  echo"<td>".$row['Comments']."</td>";
  echo"</tr>";


echo "</table>";

?>

<button onclick="goBack()"><img id="img1"  src="left-arrow.png"  alt="" /></button>

<script>
function goBack() {
window.history.back();
}
</script>


<h3>Go Back </h3>
</body>
</html>
