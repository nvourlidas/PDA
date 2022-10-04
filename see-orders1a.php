<?php session_start(); ?>
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

$id=$_SESSION['id'];




$con = mysqli_connect('localhost','root','','pda');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$date=$_POST['date'];

$code=array();
$i=0;
$x=0;
$y=0;
$num=0;
$num1=0;
$result=mysqli_query($con,"select * from orders_header where User_Code='$id'") or die("Failed to connect" .mysqli_error());

while($row = $result->fetch_assoc()){
  if($row['date_']==$date){
    $code[$i]=$row['Order_Code'];

    $i=$i+1;
  }
}




if($i==0){
echo "<h1>There are no orders at this Date</h1> ";
}

$product=array();
$pieces=array();
$price=array();
$desc=array();
$od=array();
$prcode=array();
$pi=array();
$pr=array();
$com=array();



    $result2=mysqli_query($con,"select * from orders_details ") or die("Failed to connect" .mysqli_error());
    while($row2 = $result2->fetch_assoc()){
      $od[$num]=$row2['Order_Code'];
      $prcode[$num]=$row2['Product_Code'];
      $pi[$num]=$row2['Pieces'];
      $pr[$num]=$row2['Price'];
      $com[$num]=$row2['Comments'];
      $num=$num+1;
    }



for($b=0; $b<$i; $b++){
for($d=0; $d<$num; $d++){

    if($od[$d]== $code[$b]){
      $product[$b]=$prcode[$d];

      $pieces[$b]=$pi[$d];
      $price[$b]=$pr[$d];
      $desc[$b]=$com[$d];

      $x=$x+1;
    }
  }
}



$od1=array();
echo"<tr>";
$name=array();
$result1=mysqli_query($con,"select * from menu  ") or die("Failed to connect" .mysqli_error());
while($row1 = $result1->fetch_assoc()){
  $od1[$num1]=$row1['Product_Code'];
  $pname[$num1]=$row1['product_name'];
  $num1=$num1+1;
}

for($d=0; $d<$num1; $d++){
for($b=0; $b<$x; $b++){


  if($od1[$d] == $product[$b]){
    $name[$b]=$pname[$d];


      $y=$y+1;

 }
}
}





for($b=0; $b<$y; $b++){
 echo"<td>".$name[$b]."</td>";
 echo"<td>".$pieces[$b]."</td>";
 echo"<td>".$price[$b]."</td>";
 echo"<td>".$desc[$b]."</td>";
 echo"</tr>";


}
echo "</table>";





?>

<a href="admin-waitor-orders.php"><img id="img1"  src="left-arrow.png"  alt="" /></a>

<script>
function goBack() {
window.history.back();
}
</script>


<h3>Go Back </h3>
</body>
</html>
