<?php
  require "conexion.php";

  $id = $_POST['id'];

  $sql = "SELECT Id, Nombre, ApellidoPaterno Apaterno, ApellidoMaterno Amaterno, EstatusId Estatus
          FROM personas 
          WHERE Id = '$id'
          LIMIT 1
          ";

  $myResultado = $conexion -> query($sql);

  $persona = [];

  if($myResultado->num_rows > 0) {
    $persona = $myResultado -> fetch_array();
  }

  echo json_encode($persona, JSON_UNESCAPED_UNICODE);

?>