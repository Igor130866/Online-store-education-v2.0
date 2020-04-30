<?php
require_once "../lib_query/start.php";
require_once "top.php";
$orders = getOrders(); 
?>

<div class="container">
  <h1>Общая информация</h1> 
  <!--<form id="data-total-amount">
    <button class="btn btn-red" type="submit">ИТОГО</button>
  </form>-->
  
  <div id="rowdata" class="row">
    <div class="col-md-2">  
      <p>ID</p> 
    </div>
    <div class="col-md-3">  
      <p>Имя</p> 
    </div>
    <div class="col-md-2">
      <p>Телефон</p>
    </div>
    <div class="col-md-3">
      <p>Электронная почта</p>
    </div>
    <div class="col-md-2">
      <p>Дата обращения</p>
    </div>
  </div>

  <?php $orders = getOrders(); ?>
  <?php foreach ($orders as $order) { ?>

    <div id="rowdata" class="row">
    <div class="col-md-2">  
    <p><?php echo $order["id"]?></p>
    </div>
    <div class="col-md-3">  
    <p><?php echo $order["name"]?></p>
    </div>
    <div class="col-md-2">
    <p><?php echo $order["telephone"]?></p>
    </div>
    <div class="col-md-3">
    <p><?php echo $order["email"]?></p>
    </div>
    <div class="col-md-2">
    <p><?php if ($order["date"]) { ?><?=date(FORMAT_DATE, $order["date"])?><?php } else { ?>Нет<?php } ?></p>
    </div>
  </div>
   <?php } ?>
   


<?php 
  require_once "end.php";
?>