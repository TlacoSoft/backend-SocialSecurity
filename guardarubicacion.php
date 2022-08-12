<?php
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Credentials: true');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Accept");
header('Content-Type: application/json');

  $ubi = $_GET['ubicacion'];
  $id = $_GET['idUser'];

  require "./config/conexion.php";

   mysqli_query($link,"INSERT INTO `ubicacion` (`idUbicacion`, `idUser`, `ubicacion`) VALUES (NULL, '".$id."', '".$ubi."')");

  class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'Registro correcto';

  echo json_encode($response);
?>
