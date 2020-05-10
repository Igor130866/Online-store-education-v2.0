<?php
session_start();
header('Content-type: text/html; charset=utf-8'); 

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  require_once('db.php');

  $id = htmlspecialchars(trim($_POST["id"]));
  //$date = time(); //$_SERVER['SERVER_TIME'];
  //  echo $id;
  global $mysqli;
  $result = $mysqli->query("SELECT * FROM `cart` WHERE `id_products`='$id'");

  $row_cnt = $result->num_rows;
    echo $row_cnt."row";
  
    if ($row_cnt > 0)
  {
    $row_count = mysqli_fetch_array($result);
    $new_count = $row_count["cart_count"] + 1;
    $update = $mysqli->query("UPDATE `cart` SET `cart_count`= '$new_count' WHERE `id_products`='$id'");
  
  } else {
   
    $new_count = 1;
    $result = $mysqli->query("SELECT * FROM `ose_products` WHERE `id`='$id'");
    $row = $result->fetch_assoc();
    print_r($row);
    //$row = mysqli_fetch_array($result);
    //$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'"); 

    //$insert = $mysqli->query("INSERT INTO `cart` VALUES ($row[id], $row[price]//, $row[size], $new_count, $row[name])");

  $insert = $mysqli->query("INSERT INTO `cart`(`id_products`, `cart_price`, `cart_size`, `cart_count`) VALUES ($row[id], $row[price], $row[size], $new_count)");

    //  if (!result) {
    //    exit("Не удалось добавить ");
    //}
    }
}