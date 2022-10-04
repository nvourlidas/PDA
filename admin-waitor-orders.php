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
</style>

</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style = "width: 50%; float: center; margin: 2px 0 20px 50px; ;padding: 0px 0px 0px 0px; " src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Circle-icons-profile.svg"  alt=""  />
  <p><i class="fa fa-fw fa-user"></i>Owner</p>
  <a href="add-users.html">Users</a>
  <a href="user-roles.php">User Roles</a>
  <a href="menu1.php">Menu</a>
  <a href="admin-waitor-orders.php">Waitor-orders</a>
  <a href="owner-orders.html">Orders</a>
  <a href="index.html">Log out</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


<br>
<button type="button" name="button" style="background-color:white; color:Black; width: 100%;">Select Waiter</button>

<table id="customers">
  <tr>
    <th>Waiters</th>


  </tr>
  <?php
    $con=mysqli_connect("localhost","root","","pda");

    $result= $con->query("select * from users ")or die($con->error);



    while($row =$result->fetch_assoc()){

      if($row['Role_Code']==2){

      echo"<tr><form action=see-orders.php method=post>";
      echo"<td>".$row['Username']."</td>";

      echo"<input type=hidden name=id value='".$row['User_Code']."'>";
      echo"<td><button value=id type=submit>See Orders</button>";
echo"</td></form></tr>";

}
}
    echo "</table>"

  ?>
</table>


</body>
</html>
