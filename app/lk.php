<?php
session_start();
require_once('header.php');
?>
  <section class = "persona-room">
    <div class="container">
      <div class="d-flex justify-content-end h4">
        <div class = "mt-3 mr-3" >Уважаемый   
        
        <?php
          echo "   ".$_SESSION["login"].",  ";
        ?>  
        </div> 
        <div class = "mt-3">, добро пожаловать в личный кабинет.
        </div>          
      </div>   
    </div>      
  </section> 
   <!--  
<?php
//  require_once('footer.php');
//?>  -->