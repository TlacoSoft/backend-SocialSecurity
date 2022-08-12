<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

require "./config/conexion.php";

$email = $_GET['email'];

class Result {}
$response = new Result();

if(isset($email)){

    $validar=mysqli_query($link,"SELECT * FROM `usuarios` WHERE `email` = '".$email."'");
  if ($reg=mysqli_fetch_array($validar)){
    $response->resultado = 'Error';
    $response->message = 'El correo ya existe';
  }else{

    mysqli_query($link,"INSERT INTO `usuarios` (`idUsuario`, `email`) VALUES (NULL, '".$email."');");


    $response->resultado = 'OK';
    $response->mensaje = 'Registro correcto';
  }
  
    echo json_encode($response);

}

?>