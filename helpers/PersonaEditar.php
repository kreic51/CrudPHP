<?php

  require "conexion.php";

  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $apaterno = $_POST['apaterno'];
  $amaterno = $_POST['amaterno'];
  $estatus = $_POST['estatus'];

  $sql = "UPDATE personas SET 
        Nombre = '$nombre', 
        ApellidoPaterno = '$apaterno', 
        ApellidoMaterno = '$amaterno', 
        EstatusId = '$estatus'
        WHERE Id = '$id'
          ";

  $myResultado = $conexion -> query($sql);

  if($myResultado) {
    
  }

  header('Location: ../index.php');

?>