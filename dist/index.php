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
<?php  echo " Главная страница "; ?>
  <header  >
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
      <div class="container mt-2">
        <a class="navbar-brand" href="#">StyleTour</a>
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
          <form class="form-inline mr-3 my-2 my-lg-0">
            <button class="btn btn-red my-2 my-sm-0" type="submit">ВОЙТИ</button>
          </form>
          <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-red my-2 my-sm-0" type="submit"><i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>КОРЗИНА</button>
          </form>
        </div>
      </div> 
    </nav>
      
    <nav class="navbar navbar-expand-lg bg-dark navbar-custom pb-0">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="33"></a>
        <div class="collapse navbar-collapse navbar-collapse-logo" id="navbarSupportedContent">
          <ul class="navbar-nav navbar-nav-logo">
            <li class="nav-item active">
              <a class="nav-link nav-link-logo" href="#">Women</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-logo" href="#">Men</a>
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
              <label for="inputPassword2" class="sr-only">Password</label>
              <input type="password" class="form-control" id="inputPassword2" placeholder="Что желаете">
            </div>
            <button class="btn btn-red my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div> 
    </nav>

    <section class = "menu-carousel">
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active carousel-item-brand">
            <img src="img/slider.jpg" class="d-block w-100" alt="1">
            <div class="bgslide" style = "background-image: url(img/slider.jpg);"></div>
            <div class="carousel-caption d-none d-md-block">
              <h1>Women's Apparel</h1>
              <p>T-Shirts, Dress Shirts Tanks, Pants and More...</p>
              <button class="btn btn-red my-2 my-sm-0" type="submit">Shop Women's Apparel</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider.jpg" class="d-block w-100" alt="1">
            <div class="carousel-caption d-none d-md-block">
              <h1>Women's Apparel - 1</h1>
              <p>T-Shirts, Dress Shirts Tanks, Pants and More...</p>
              <button class="btn btn-red my-2 my-sm-0" type="submit">Shop Women's Apparel</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <section class="main-slogan">
    <div class="container">
      <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, quae incidunt velit non aspernatur suscipit repellendus</h2>
    </div>
  </section>   
  
  <section class="main-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="sitebar">
            <div class="widget">
              <h3>Popular Categories</h3>
              <ul>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li class = "more"><a href="#">Show More</a></li>
              </ul>
            </div>
          </div>
          <div class="sitebar">
            <div class="widget">
              <h3>Popular Brends</h3>
              <ul>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li class = "more"><a href="#">Show More</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="content">
            <h3>Женская одежда</h3>
            <div class="card-deck mb-3">
              <div class="card text-center">
                <img src="img/goods5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Название карточки</h5>
                  <p class="card-text">Краткое описание товара</p>
                  <p class="card-text">Стоимость : <span class="price"> 100 </span> руб</p>
                  <a href="#" class="btn btn-sm btn-red">Добавить в корзину</a>
                </div>
              </div>
              <div class="card text-center">
                <img src="img/goods5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Название карточки</h5>
                  <p class="card-text">Краткое описание товара</p>
                  
                </div>
              </div>
              <div class="card text-center">
                <img src="img/goods5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Название карточки</h5>
                  <p class="card-text">Краткое описание товара</p>
                  
                </div>
              </div>
            </div>
            <h3>Мужская одежда</h3>
            <div class="card-deck">
              <div class="card text-center">
                <img src="img/goods4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Название карточки</h5>
                  <p class="card-text">Краткое описание товара</p>
                  
                </div>
              </div>
              <div class="card text-center">
                <img src="img/goods4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Название карточки</h5>
                  <p class="card-text">Краткое описание товара</p>
                  
                </div>
              </div>
              <div class="card text-center">
                <img src="img/goods4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Название карточки</h5>
                  <p class="card-text">Краткое описание товара</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content-email">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-4 d-flex align-self-center">
          <h5>Желаете узнать больше</h5>
        </div>
        <div class="col-md-8">
          <form>
            <div class="d-flex justify-content-between form-row align-items-center">
              <div class="col-auto">
                <label class="sr-only" for="inlineFormInput">Name</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ваше имя">
              </div>
              <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Имя пользователя</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup">
                </div>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-red mb-2">Вам сюда</button>
              </div>
            </div>
          </form>
        </div>
    </div>
    </div>
  </section>
  



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 <!--
   <script src="https://use.fontawesome.com/9aea11037f.js"></script>

<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src = "js/lib.min.js"></script>  
<script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src = "js/jquery.min.js"></script>
<script src = "libs/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src = "libs/jquery/dist/jquery.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src = "libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src = "js/main.min.js"></script>
<script src = "libs/popper.js/dist/popper.min.js"></script>
-->

</body>
</html>