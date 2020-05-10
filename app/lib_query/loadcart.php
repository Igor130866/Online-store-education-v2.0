<?php
session_start();
header('Content-type: text/html; charset=utf-8'); 

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  require_once('db.php');
  require_once('functions.php');
  
  $result = $mysqli->query("SELECT * FROM `cart` WHERE 1");
  if (mysqli_num_rows($result) > 0)
  {
    $row = mysqli_fetch_array($result); 

    do {
      $count = $count + $row[cart_count];
      //echo gettype($row[cart_price]);
      $int = $int + ($row[cart_price] * $row[cart_count]);
      //echo $int;
    } 
    while ($row = mysqli_fetch_array($result)); 

    if ($count == 5 or $count == 6 or $count == 7 or $count == 8 or $count == 9 or $count == 10 or $count == 11 or $count == 12 or $count == 13) $str = ' товаров';
    if ($count == 2 or $count == 3 or $count == 4) $str = '  товара';
    if ($count == 1 or $count == 21 or $count == 31) $str = '  товар';

    echo '<span class = "count_bold">'.$count.' '.$str.'</span> на  сумму <span class = "count_bold">'.group_numerals($int).'</span> руб';
  }
    else {
      echo 'корзина пуста';
    }
}
?>  
 