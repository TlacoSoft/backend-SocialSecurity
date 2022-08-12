<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

require "./config/conexion.php";

$id = $_GET['id'];

$registros=mysqli_query($link,"SELECT * FROM `grupos` WHERE `idGrupo` = '".$id."'");

if ($reg=mysqli_fetch_array($registros))
{
  $vec=$reg;
}

$cad=json_encode($vec);
echo $cad;

?>