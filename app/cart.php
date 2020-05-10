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
    <form class="form-inline mr-3 my-2 my-lg-0">
        <button class="btn btn-red my-2 my-sm-0 delete-basket" type="submit"><i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>ОПЛАТИТЬ</button>
      </form>
      <form class="form-inline mr-2 my-2 my-lg-0">
        <button class="btn btn-red my-2 my-sm-0 block-basket" type="submit"><i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>КОРЗИНА</button>
      </form>
    </div>

    <div class="col-md-11 card-row justify-content-center">
        
          <?php
            $result = $mysqli->query("SELECT * FROM `cart` WHERE 1"); 
            if (mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_array($result);  
            } 
            //print_r($row);
           /* $resultt = $mysqli->query("SELECT * FROM `ose_products` WHERE 1"); 
            if (mysqli_num_rows($result) > 0) {
              $roww = mysqli_fetch_array($resultt);  
            } */
            //$result = $result->fetch_assoc();
            do {
                  
              echo"

              <div class='card-deck mb-3'>
              <div class='card text-center d-inline-block'>
              <img src='img/".$row[cart_img]."'class='card-img-top wid-hei' alt='Картинка'> 
                <div class='card-body'>
                  <p class='card-title'>Название : <span class='price'>".$row[cart_name]."</span></p>
                  <p class='card-text'>Размер : <span class='price'>".$row[cart_size]."</span> </p>
                 
                  <p class='card-text'>Стоимость : <span class='price'>".group_numerals($row[cart_price])."</span> руб</p>
                  <p> <span iid = ".$row[id_cart]." class = 'count-minus'> - </span>
                      <span id = 'input-id$row[id_cart]' iid = ".$row[id_cart]." class = 'count-input'>".$row[cart_count]."</span>
                      <span iid = ".$row[id_cart]." class = 'count-plus'> + </span>
                  </p>
                  <a href='#' class='btn btn-sm btn-red' tid=".$row[id].">Количество</a>
                </div>
              </div>
            </div>

              ";
            } while ($row = mysqli_fetch_array($result));
          ?>
        </div>

  </div>
</section>

  <?php
  require_once('footer.php');
 ?>