<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, *");
header('Content-Type: application/json');

require "./config/conexion.php";

$email = $_GET['email'];

$registros=mysqli_query($link,"SELECT * FROM grupo_usuarios inner join usuarios on usuarios.idUsuario = grupo_usuarios.idUsuario inner join grupos on grupos.idGrupo = grupo_usuarios.idGrupo where email = '".$email."'");

while ($reg=mysqli_fetch_array($registros))
{
$vec[]=$reg;
}

$cad=json_encode($vec);
echo $cad;
?>