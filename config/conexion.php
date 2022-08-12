<?php
  $host_name = 'db5008989093.hosting-data.io';
  $database = 'dbs7588166';
  $user_name = 'dbu2393636';
  $password = 'Rodo*137946*1902';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $link->connect_error .'</p>');
  }
?>
