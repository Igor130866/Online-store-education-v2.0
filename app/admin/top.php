<?php session_start(); ?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Admin- панель !!!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="favicon.ico" rel="shortout icon" type="image/x-icon"/>
  <link rel = "stylesheet" href = "../css/libs.min.css"> 
  <link rel = "stylesheet" href = "../css/main.min.css"> 
  
</head>
<body>
<div class="container">
    <div class = "mt-2 mb-2">
        <?php echo "Добрый день, Уважаемый  ".$_SESSION["login"]; ?>
    </div>
    <div class="row row-table">
        <div class="col-2">
            <div id="menu1">
                <a href = "/admin/index.php">Главная</a>
            </div>
        </div>
        <div class="col-2">
            <div id="menu2">
                <a href = "/admin/index.php">Заказы</a>
            </div>
        </div>
        <div class="col-2">
            <div id="menu3">
                <a href = "/admin/clients.php">Клиенты</a>
            </div>
        </div>
        <div class="col-2">
            <div id="menu3">
                <a href = "/admin/data.php">Статистика</a>
            </div>
        </div>
        <div class="col-2">
            <div id="logout">
                <a href="../index.php">Выход</a>
            </div>
        </div>
    </div>
</div>