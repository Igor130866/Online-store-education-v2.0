<?php
require_once "../lib_query/start.php";
require_once "top.php";
?>

<div class="container">
  <h1>Общая статистика</h1> 
  <form id="data-total-amount">
    <button class="btn btn-red" type="submit">ИТОГО</button>
  </form>
  
  <div id="rowdata" class="row">
    <div class="col-md-3">  
      <p>Имя</p> 
    </div>
    <div class="col-md-3">
      <p>Телефон</p>
    </div>
    <div class="col-md-3">
      <p>Электронная почта</p>
    </div>
    <div class="col-md-3">
      <p>Дата обращения</p>
    </div>
  </div>
  
  <div id="result" class="row">
    <?php $order = 0; ?>
    <?php foreach ($result as $order)  ?>
    <?php {echo $order;}  ?>
  </div>

<?php 
  require_once "end.php";
?>