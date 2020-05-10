<?php
  session_start();
  header('Content-type: text/html; charset=utf-8'); 
  require_once('lib_query/db.php');
  require_once('lib_query/functions.php');
  require_once('header.php');
?>

<section class="main-content">
  <div class="container">
    <div class = "form-basket">
      
      <form action = 'cart.php' class="form-inline my-2 my-lg-0">
        <button class="btn btn-red my-2 my-sm-0 block-basket" type="submit"><i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>Корзина ПУСТА</button>
      </form>
    </div>
      <div class="row card-row mt-0">
        <div class="col-md-3">
          <div class="sitebar">
            <div class="widget">
              <h3>Мужская одежда</h3>
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
              <h3>Выбор по возможности</h3>
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
          <div class="col-md-9 card-row">
        
          <?php
            $result = $mysqli->query("SELECT * FROM `ose_products` WHERE 1"); 
            if (mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_array($result);  
            } 
            //$result = $result->fetch_assoc();
            do {

                  $img_path = $_SERVER['DOCUMENT_ROOT'].'/img/'.$row[img];
                  $max_width = 190;
                  $max_height = 190;
                    list($width, $height) = getimagesize($img_path);
                  $ratioh = $max_height/$height;
                  $ratiow = $max_width/$width;
                  $ratio = min($ratioh,$ratiow);
                  $width = intval($ratio*$width);
                  $height = intval($ratio*$height); 
                  //echo $width, $height;
                
              echo"

              <div class='card-deck mb-3'>
              <div class='card text-center d-inline-block'>
                <img src='img/".$row[img]."'class='card-img-top wid-hei' alt='...'>
                <div class='card-body'>
                  <h5 class='card-title'>Название : <span class='price'>".$row[name]."</span></h5>
                  <p class='card-text'>Размер :<span class='price'>".$row[size]."</span> </p>
                  <p class='card-text'>Артикул товара : <span class='artiqul'>".$row[vendor_code]."</span></p>
                  <p class='card-text'>Стоимость : <span class='price'>".group_numerals($row[price])."</span> руб</p>
                  <a href='#' class='btn btn-sm btn-red put-basket' tid=".$row[id].">Добавить в корзину</a>
                </div>
              </div>
            </div>

              ";
            } while ($row = mysqli_fetch_array($result));
          ?>
        </div>
    </div>
  </div>
</section>

<!---
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
            <h3>Мужская одежда</h3>
            <div class="card-deck mb-3">
              <div class="card text-center">
                <img src="img/goods4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Название : </h5>
                  <p class="card-text">Краткое описание товара</p>
                  <p class="card-text">Артикул товара</p>
                  <p class="card-text">Стоимость : <span class="price"> 100 </span> руб</p>
                  <a href="#" class="btn btn-sm btn-red <?php if (!(isset($_SESSION["login"]))){echo 'd-none';}?>">Добавить в корзину</a>
                </div>
              </div>
              <div class="card text-center">
                <img src="img/goods4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Название  карточки</h5>
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
  </section> -->

  <?php
  require_once('footer.php');
 ?>