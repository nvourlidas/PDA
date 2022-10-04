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
$surname=$_POST['Surname'];
$username=$_POST['username'];
$password=$_POST['psw'];
$role=$_POST['role'];

$conn = mysqli_connect("localhost","root","","pda");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($role=='owner'){
  $role1=1;
}elseif ($role=='Waitor') {
  $role1=2;
}
elseif ($role=='Kitchen') {
  $role1=3;
}elseif ($role=='Cashier') {
  $role1=4;
}

$sql = "INSERT INTO users (name, surname, username, password, role_code)
VALUES ('$name', '$surname', '$username', '$password', '$role1')";

if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


<h1>New User created successfully</h1>

<a href="add-users.html">
<img  src="left-arrow.png"  alt=""  />
</a><p>Go Back</p>


</body>
</html>
