<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Hello, EDU !!!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="favicon.ico" rel="shortout icon" type="image/x-icon"/>
  <!--    <link rel = "stylesheet" href = "libs/bootstrap/dist/css/bootstrap.min.css" type = "text/css"/>  
  -->
  <link rel = "stylesheet" href = "css/libs.min.css"> 
  <link rel = "stylesheet" href = "css/main.min.css"> 
  
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
      <div class="container mt-2">
        <a class="navbar-brand" href="index.php">StyleTour</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Техподдержка<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Язык
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Английский</a>
                <a class="dropdown-item" href="#">Русский</a>
                <a class="dropdown-item" href="#">Французский</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Такса Free 50$</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Валюта
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Доллар США</a>
              <a class="dropdown-item" href="#">Российский рубль</a>
            </div>
            </li>
          </ul>

          <button type="button" class="btn btn-red my-sm-0 mr-3 my-2 my-lg-0" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Войти</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ВХОД В Личный кабинет</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="admin" action = "registre.php" method = "POST" class=" form-inline mr-3 my-2 my-lg-0">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Логин </label>
                      <input type="text" class="form-control input-admin ml-5" id="recipient-name" name="login">
                    </div>
                    <div class="form-group mt-1 mb-3">
                      <label for="message-text" class="password col-form-label">Пароль</label>
                      <input type="password" class=" form-control input-adminn ml-4" id="message-text" name="pass">
                    </div>
                      <button type="submit" class="btn btn-primary">Согласен</button>
                  </form>  
                </div>
                  
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                </div>
              </div>
            </div>
          </div>

          <!--    
            <button class="btn btn-red my-2 my-sm-0" type="submit">Войти</button>
           
          --> 
          
          <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-red my-2 my-sm-0" type="submit"><i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>КОРЗИНА</button>
          </form>
        </div>
      </div> 
    </nav>
      
    <nav class="navbar navbar-expand-lg bg-dark navbar-custom pb-0">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="33"></a>
        <div class="collapse navbar-collapse navbar-collapse-logo" id="navbarSupportedContent">
          <ul class="navbar-nav navbar-nav-logo">
            <li class="nav-item active">
              <a id = "women" class="nav-link nav-link-logo" href="women_shop.php">Women</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-logo" href="men_shop.php">Men</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-logo" href="#">Shop</a>
            </li>                
            <li class="nav-item">
              <a class="nav-link nav-link-logo" href="#">Kids</a>
            </li>
          </ul>  
          <form class="form-inline my-2 my-lg-0">
            <div class="form-group mx-sm-3">
              <form>            
                <label for="inputPassword2" class="sr-only">Password</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Что желаете">
              </form>  
            </div>
            <button class="btn btn-red my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div> 
    </nav>