<?php

session_start();

$product=$_GET['product'];



$_SESSION['product']=$product;

header("Location: coffee-select.html");

    ?>
