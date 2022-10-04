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

button {
  background-color:#ff0000;
  border: 3px solid #DFE9F7;
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  width:70%;
  cursor: pointer;
  height:60px;


}



@media screen and (max-height: 750px) {
  button {
    background-color:#ff0000;
    border: 3px solid #DFE9F7;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    width:100%;
    cursor: pointer;
    height:50px;
  }

    #but{

      width:45%;
    }

    #img1{
      width:30%;
      background-color: none;
      height: 50px;
    }

}

#but{
  width:30%;
}

#img1{
  width:20%;
  background-color: none;
  height: 50px;
}




</style>
</head>
<body>

  <?php


    $con=mysqli_connect("localhost","root","","pda");

    $result=mysqli_query($con,"select * from menu  ") or die("Failed to connect" .mysqli_error());

    while($row = $result->fetch_assoc()){

      if($row['product_category']==6){
        echo"<form action=product.php method=get>";
        echo"<button  name=product type=submit value='".$row['Product_Code']."'>".$row['product_name']."</button>";
        echo"</form>";
}
}
?>
<div class="footer">
<button id="but" onclick="goBack()"><img id="img1"  src="left-arrow.png"  alt="" /></button>
</div>

<script>
function goBack() {
window.history.back();
}
</script>



</body>
</html>
