<?php
session_start();
header('Content-type: text/html; charset=utf-8'); 

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  require_once('db.php');
  require_once('functions.php');

  $id = htmlspecialchars(trim($_POST["id"]));
  
  $result = $mysqli->query("SELECT * FROM `cart` WHERE id_cart = '$id'");
  if (mysqli_num_rows($result) > 0)
  {
    $row = mysqli_fetch_array($result); 
    $new_count = $row[cart_count] + 1;

    if ($new_count > 0) {
      $update = $mysqli->query("UPDATE `cart` SET `cart_count`= '$new_count' WHERE `id_cart` = '$id'");
      echo $new_count;
    } else {
      echo $row[cart_count];
    }
  }
}