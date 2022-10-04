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

h1{color: white;
margin-left: 100px;}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}


#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: white;}

#customers tr:hover {background-color: white;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  padding:15px;
  text-align: left;
  background-color: #ff0000;
  color: white;
}

#customers tr {
  padding-top: 12px;

  text-align: left;
  background-color: white;
  color: black;
}

#customers td {
  padding-top: 12px;
  padding-bottom: 12px;
  padding:15px;
  text-align: left;
  background-color: white;
  color: black;
}

a {
  color: dodgerblue;
}


@media screen and (max-height: 670px) {
  img{width: 50%; margin:3px 70px 15px 47px; background-color: white; -webkit-border-radius: 20px 18px 18px 23px;
-moz-border-radius: 20px 18px 18px 23px;
border-radius: 20px 18px 18px 23px; }

  p{font-size: 20px; margin:center; color: white;}

  table{margin-top: 60px;}

  #img1{
    width:9%;
    height: 2px;

  }
  .footer button{
    background-color: #ff0000;
    border: none;
    height: 2px;
  }

  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #ff0000;
   color: white;
   text-align: center;
   height: 10px;
}

  }

  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #ff0000;
   color: white;
   text-align: center;
   height: 50px;
}

.footer button{
  background-color: #ff0000;
  border: none;
}

#img1{
  width:12%;
  background-color: none;
  height: 50px;
}

table.blueTable {
  border: 3px solid #A4A4A4;
  background-color: white;
  width: 100%;
  text-align: left;
  border-collapse: collapse;

}
table.blueTable td, table.blueTable th {
  border: 2px solid #AAAAAA;
  padding: 8px 8px;
}
table.blueTable tbody td {
  font-size: 22px;
  font-weight: bold;
  color: black;
}

table.blueTable thead {
  background: #FF0000;
  background: -moz-linear-gradient(top, #ff4040 0%, #ff1919 66%, #FF0000 100%);
  background: -webkit-linear-gradient(top, #ff4040 0%, #ff1919 66%, #FF0000 100%);
  background: linear-gradient(to bottom, #ff4040 0%, #ff1919 66%, #FF0000 100%);
  border-bottom: 0px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 0px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}


/* Add a blue text color to links */
a {
  color: dodgerblue;
}

#but {
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


</style>
</head>
<body>

<h1>Preperation</h1>

<br>

<table class="blueTable" action="modify.php">
<thead>
<tr>
<th>Order Time</th>
<th>Order Total</th>



</tr>
</thead>
<?php
  $con=mysqli_connect("localhost","root","","pda");

  $result=mysqli_query($con,"select * from orders_header  ") or die("Failed to connect" .mysqli_error());




  while($row = $result->fetch_assoc()){
    if($row['order_state']==1){
      if($row['date_']==date("Y-m-d")){
    echo"<tr><form action=see-orders1.php method=post>";
    echo"<td>".$row['Order-Entry-Time_']."</td>";
    echo"<td>".$row['Order_Total']."$</td>";

    echo"<input type=hidden name=id value='".$row['Order_Code']."'>";

    echo"<td><button id=but type=submit>See Order</button>";
    echo"</form></tr>";
  }
  }
}
  echo "</table>"
?>
</table>

<div class="footer">
<button onclick="goBack()"><img id="img1"  src="left-arrow.png"  alt="" /></button>
</div>

<script>
function goBack() {
window.location.href = "waitor-home.html";
}
</script>


</body>
</html>
