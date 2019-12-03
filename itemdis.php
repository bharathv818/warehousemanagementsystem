<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>warehouse database </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>

  <div class="titlebar">
    <h2 style="color:black" align="center">WareHouse</h2>
  </div>

<div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  <a href="index2.php" class="active" >Items</a>
  <a href="shelf.php" >shelf</a>
  <a href="employees.php">employees</a>
  <a href="delevaries.php">Deliveries</a>
  <a href="checkout.php">checkout</a>
 </div> 
 
 <?php
    include "itemsearch.php"
 
 ?>
 
 </body>
 </html>