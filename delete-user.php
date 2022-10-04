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

<div class="topnav">
  <a  href="add-users.html" style="width:31%">Add User</a>
  <a  href="modify-user.php" style="width:31%">Modify User</a>
  <a class="active" href="delete-user.php" style="width:30%">Delete User</a>

</div>
<br>

<button type="submit" name="button" style="background-color:white; color:Black; width: 100%;">Select User</button>

<table class="blueTable" action="modify.php">
<thead>
<tr>
<th>Surname</th>
<th>Name</th>
<th>Username</th>


</tr>
</thead>
<?php
  $con=mysqli_connect("localhost","root","","pda");

  $result=mysqli_query($con,"select * from users  ") or die("Failed to connect" .mysqli_error());
  

  while($row = $result->fetch_assoc()){
    echo"<tr><form action=delete.php method=post>";
    echo"<td>".$row['Surname']."</td>";
    echo"<td>".$row['Name']."</td>";
    echo"<td>".$row['Username']."</td>";
    echo"<input type=hidden name=id value='".$row['User_Code']."'>";
    echo"<td><button type=submit>Delete</button>";
    echo"</form></tr>";
  }
  echo "</table>"
?>
</table>
</body>
</html>
