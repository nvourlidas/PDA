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
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;

}

.sidenav button {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px;
}
img{width: 30%; margin:3px 70px 15px 47px; }
p{font-size: 40px; margin-left: 50px;}

@media screen and (max-height: 650px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  .sidenav {
  height: 100%;
  width: 120px;}
  p{font-size: 20px; margin:center; color: white;}
  h2{font-size:10px; color:white;}

  img{width: 50%; margin:3px 70px 15px 47px; background-color: white; -webkit-border-radius: 20px 18px 18px 23px;
-moz-border-radius: 20px 18px 18px 23px;
border-radius: 20px 18px 18px 23px; }
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
h2{font-size:33px; color:white;}
</style>
</head>
<body>

  <div class="sidenav">

  <div class="dropdown">
      <button class="dropbtn">Select Order State
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="cashier.php">Preperation</a>
        <a href="cashier1.php">Ready</a>
        <a href="cashier2.php">Serving</a>
         <a href="cashier3.php">Deliverd</a>
      </div>
    </div>

   <table id="customers">
    <tr>

      <th><h2>Preperation</h2></th>

    </tr>
    <?php
      $con=mysqli_connect("localhost","root","","pda");

      $result=mysqli_query($con,"select * from orders_header  ") or die("Failed to connect" .mysqli_error());




      while($row = $result->fetch_assoc()){
        if($row['order_state']==1){
          if($row['date_']==date("Y-m-d")){
        echo"<tr><form action=see-orders1.php method=post>";

        echo"<input type=hidden name=id value='".$row['Order_Code']."'>";

        echo"<td><button id=but type=submit>".$row['Order-Entry-Time_']."</button>";
        echo"</form></tr>";
      }
      }
    }
      echo "</table>"
    ?>

  </table>
  </div>

  <table>
  <tbody>
  <tr>
  <td><a href="cashier.html">
  <img  src="cashier.png"  alt=""  />
</a> <p>Store Cash</p></td>
  <td><a href="food-menu.html">
  <img  src="restaurant-service.png"  alt=""  />
</a><p>Waiter Cash</p></td>
  </tr>
  <tr>
  <td><a href="amounts.html">
  <img  src="oil.png"  alt=""  />
</a><p>Amounts</p></td>
  <td><a href="index.html"><img  src="logout.png"  alt=""  /></a><p>Log Out</p></td>

  </tbody>
  </table>

  <script>
  setTimeout(function() {
  location.reload();

}, 5000);
</script>

</body>
</html>
