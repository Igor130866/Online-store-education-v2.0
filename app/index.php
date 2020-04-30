<?php
  session_start();

  require_once('lib_query/start.php');
  require_once('header.php');
?>
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
            <img src="img/mobile.jpg" class="d-block w-100" alt="1">
            <div class="carousel-caption d-none d-md-block">
              <h1>Men's Apparel</h1>
              <p>Шорты, шлепанцы, очки and More (и море)...</p>
              <button class="btn btn-red my-2 my-sm-0" type="submit">Shop Men's Apparel</button>
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
 
<?php
  require_once('footer.php');
?>
