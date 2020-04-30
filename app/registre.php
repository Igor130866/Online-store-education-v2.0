<?php
//$_GET
session_start();
header('Content-type: text/html; charset=utf-8'); 

require_once('lib_query/start.php');
require_once('lib_query/db.php');

$login = trim($_POST["login"]);
$pass = trim($_POST["pass"]);

$login = htmlspecialchars($login);
$pass = htmlspecialchars($pass);

$_SESSION["login"] = $login;
$_SESSION["pass"] = $pass;

if ($login == ADM_LOGIN && $pass == ADM_PASSWORD) {
   exit("admin");
}

if (empty($login) or empty($pass)) {
  exit("Не все поля заполнены !!!");
}

$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'"); 
$result = $result->fetch_assoc();

if (isset($result)) {
  exit("Такой пользователь уже зарегистрирован");
}

$result = $mysqli->query("INSERT INTO `users`(`login`, `pass`) VALUES ('$login', '$pass')");

if (!result) {
  exit("Не удалось добавить пользователя");
}
//if ($mysqli->connect_error) {
//  die("error перед выходом ".$mysqli->connect_error);
// }
exit("ok");

?>