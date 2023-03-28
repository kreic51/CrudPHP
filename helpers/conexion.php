<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $bd = 'crud';

  $conexion = new mysqli($host, $user, $pass, $bd);

  if($conexion->connect_error){
    die("Error de conexion: $conexion->connect_error");
  }
?>