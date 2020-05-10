<?php
session_start();
header('Content-type: text/html; charset=utf-8'); 

require_once('db.php');

$result = $mysqli->query("DELETE FROM `cart` WHERE 1");