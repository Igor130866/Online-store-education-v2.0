<?php
header('Content-type: text/html; charset=utf-8'); 

require_once('db.php');

$name = htmlspecialchars(trim($_POST["name"]));
$telephone = htmlspecialchars(trim($_POST["telephone"]));
$email = htmlspecialchars(trim($_POST["email"]));
$date = time(); //$_SERVER['SERVER_TIME'];
//echo $date;
global $mysqli;

 if (empty($name) or empty($telephone) or empty($email)) {
  exit("Не все поля  заполнены !!!");
 }
 
  $result = $mysqli->query("INSERT INTO `clients`(`name`,`telephone`,`email`,`date`) VALUES ('$name','$telephone','$email','$date')");
  if (!result) {
    exit("Не удалось добавить посетителя");
  }

  //header('location: ../index.php');
  exit ();
