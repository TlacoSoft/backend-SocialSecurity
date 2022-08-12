<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

require "./config/conexion.php";

$id = $_GET['idUser'];

$registros=mysqli_query($link,"SELECT * from ubicacion WHERE idUser =  '".$id."' order by idUbicacion desc limit 1");


class Result {}
$response = new Result( );

    while($row = mysqli_fetch_array($registros)){
        $response->ubicacion = $row['ubicacion'];
    } 


if(isset($response->ubicacion)){

$cadena = $response->ubicacion;
$separador = "lat/lng: (";
$separada = explode($separador, $cadena);
$sin = strrev($separada[1]);
$separador = ")";
$separada = explode($separador, $sin);
$sinletra = strrev($separada[1]);
$separador = ",";
$separada = explode($separador, $sinletra);
$sinletras1 = $separada[0];
$response->lat = $sinletras1;
$cadena = $response->ubicacion;
$separador = "lat/lng: (";
$separada = explode($separador, $cadena);
$sin = $separada[1];
$separador = ",";
$separada = explode($separador, $sin);
$sinletra = $separada[1];
$separador = ")";
$separada = explode($separador, $sinletra);
$sinletras2 = $separada[0];
$response->lng  = $sinletras2;
echo json_encode($response); // MUESTRA EL JSON GENERADO
}


?>