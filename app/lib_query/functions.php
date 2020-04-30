<?php
function getOrders() {
  $query = "SELECT * FROM `clients` WHERE 1";
  $result = getTable($query);
  if (!$result) return array();
return $result;
}

function getTable($query) {

  global $mysqli;
  $result_set = $mysqli->query($query);
  if (is_null($result_set)) return false;
  $result = array();
  while (($row = $result_set->fetch_assoc()) != false) {
    $result[] = $row;
  }
  $result_set->close();

return $result;
}
/*function isAdmin ($login = false, $password = false) {
  if (!$login) $login = isset($_SESSION["login"])? $_SESSION["login"] : false;
  if (!$password) $password = isset($_SESSION["password"])? $_SESSION["password"] : false;
  return mb_strtolower($login) === mb_strtolower(ADM_LOGIN) && $password === ADM_PASSWORD;
}

function login ($login, $password) {
  $password = hashSecret($password);
  if (isAdmin($login, $password)) { 
    $_SESSION["login"] = $login;
    $_SESSION["password"] = $password;
    return true;
  }
}  */



