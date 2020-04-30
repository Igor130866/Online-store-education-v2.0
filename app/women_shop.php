<?php
 require_once('header.php');
 ?>

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
                  <p class="card-text">Артикул товара</p>
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

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  require_once('footer.php');
 ?>
