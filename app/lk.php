<?php
session_start();
require_once('header.php');
?>
    <section class = "persona-room">
      <div class="container">
        <h1 class = "mt-5 pt-5">Добро пожаловать в личный кабинет</h1>
      </div>
      <span>Уважаемый</span>
      <?php
        echo "Вы обновили эту страницу ".$_SESSION["login"];
      ?>
   </section> 
   <!--  
<?php
//  require_once('footer.php');
//?>  -->