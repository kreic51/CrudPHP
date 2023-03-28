<?php

  require "conexion.php";

  $nombre = $_POST['nombre'];
  $apaterno = $_POST['apaterno'];
  $amaterno = $_POST['amaterno'];
  $estatus = $_POST['estatus'];

  $sql = "INSERT INTO personas 
          (Nombre, ApellidoPaterno, ApellidoMaterno, EstatusId) 
          VALUES ('$nombre', '$apaterno', '$amaterno', '$estatus')";

  $myResultado = $conexion -> query($sql);

  if($myResultado) {
    $id = $conexion -> insert_id;    
  }

  header('Location: ../index.php');

?>