<?php
header('Content-type: text/html; charset=utf-8'); 
require_once('db.php');

global $mysqli;

  $result_set = $mysqli->query("SELECT * FROM `clients` WHERE 1");
    $result = array();
  while ($row = $result_set->fetch_assoc()) { 
    $result[] = $row;  
    //print_r($row);
   }  
  echo $result; 
   
  // foreach ($rows as $key=> $row) {
  //        print_r ($row);
  //    }
   // foreach ($results_array as $key => $value) {
   //    echo "<p>".$value."</p>";
   // }

    


  //mysqli_fetch_all($result,MYSQLI_ASSOC);
  
 /* while($row = $result->fetch_assoc()) {
    echo "<div>".$row["name"]
               .$row["email"]
               .$row["telephone"]
                .$row["date"]."</div>"."<br>";
              
    //echo "77777";
    //$arrayf = [$row['id'], $row['name'], $row['telephone'], $row['date']];
    
  }*/  
  if (!result) {
    exit("Не удалось получить общее количество");
  }

  //<?php 
  //  echo $row_tipopermissao['descricao'];
  //  
  //header('location:data.php');
  exit ();
  
  ?>