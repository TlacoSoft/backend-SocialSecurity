<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

require "./config/conexion.php";

$lat = $_GET['latitude'];
$lng = $_GET['longitude'];
$id= $_GET['id'];

class Result {}
$response = new Result();

if(isset($id)){

    mysqli_query($link,"INSERT INTO `location` (`idUbicacion`, `idUser`, `latitude`, `longitude`) VALUES (NULL, '".$id."', '".$lat."', '".$lng."')");

    $response->resultado = 'OK';
    $response->mensaje = 'Registro correcto';
  

    echo json_encode($response);

}

?>