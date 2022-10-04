<?php

session_start();

$table=$_GET['table'];



$_SESSION['table']=$table;

header("Location: order-menu.html");

    ?>
