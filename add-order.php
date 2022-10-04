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

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}


.sidenav p {
  padding: 0px 8px 8px 32px;
  margin:3px -5px 15px 47px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
  position:center;

}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

a {
 padding: 8px 8px 8px 32px;
 text-decoration: none;
 font-size: 25px;
 color: #818181;
 display: block;
 transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
  background-color: #ff0000;
 -webkit-border-radius: 40px;
-moz-border-radius: 40px;
border-radius: 40px;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

button {
  background-color: #ff0000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  font-size: 20px;
  cursor: pointer;
  width: 100%;
  -webkit-border-radius: 40px;
-moz-border-radius: 40px;
border-radius: 40px;
}





.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ff0000;
  color: white;
}

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



<?php


$user=$_SESSION['usercode'];
$table=$_SESSION['table'];
$product=$_SESSION['product'];
$date=date("y/m/d");
$time=date("H:i:s");
$state=1;
$pieces=$_POST['pieces'];
$desc=$_POST['desc'];

$conn = mysqli_connect("localhost","root","","pda");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result=mysqli_query($conn,"select * from orders_header  ") or die("Failed to connect" .mysqli_error());
$numberOfRows = mysqli_num_rows($result);

$id=$numberOfRows+1;

$_SESSION['id']=$id;



$total=0;
$result1=mysqli_query($conn,"select * from menu  ") or die("Failed to connect" .mysqli_error());
while($row1 = $result1->fetch_assoc()){
  if($row1['Product_Code']==$product){
for($i=0; $i<$pieces; $i++){
  $total=$total+$row1['product_price'];
}
$price=$row1['product_price'];
}
}



$sql = "INSERT INTO orders_header (Order_Code, Table_Code, date_, User_Code, order_state, Order_Total)
VALUES ('$id','$table', '$date', '$user', '$state', '$total')";





if (mysqli_query($conn, $sql)) {
    echo " ";
    $_SESSION['af']=1;
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<table class="blueTable" action="modify.php">
<thead>
<tr>
<th>Name</th>
<th>Pieces</th>
<th>Total Price</th>
<th>Description</th>

</tr>
</thead>

<?php


$user=$_SESSION['usercode'];
$table=$_SESSION['table'];
$product=$_SESSION['product'];
$date=date("y/m/d");
$state=1;
$pieces=$_POST['pieces'];
$desc=$_POST['desc'];

$_SESSION['pieces']=$pieces;
$_SESSION['descr']=$desc;

$conn = mysqli_connect("localhost","root","","pda");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$total=0;
$result=mysqli_query($conn,"select * from menu  ") or die("Failed to connect" .mysqli_error());
while($row = $result->fetch_assoc()){
  if($row['Product_Code']==$product){
for($i=0; $i<$pieces; $i++){
  $total=$total+$row['product_price'];
}
$price=$row['product_price'];
$name=$row['product_name'];
$_SESSION['price']=$row['product_price'];
}

}



    echo"<tr><form action=add-order1.php method=post>";
    echo"<td>".$name."</td>";
    echo"<td>".$pieces."</td>";
    echo"<td>".$total."</td>";
    echo"<td>".$desc."</td>";
    echo"<td><button type=submit>Verify & Sent Order</button></td>";

    echo"</form></tr>";

  echo "</table>"



?>
</table>
</body>
</html>
