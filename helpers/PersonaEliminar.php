<?php

  require "conexion.php";

  $id = $_POST['id'];
  

  $sql = "DELETE FROM personas 
        WHERE Id = '$id'
          ";

  $myResultado = $conexion -> query($sql);

  if($myResultado) {
    
  }

  header('Location: ../index.php');

?>