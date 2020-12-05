<?php

// configurar la conexion de Bd
// Conectar  servername usuario password puerto nombre de la bd
$config = array(
  'host' =>'localhost' ,
'username'=>'root',
'password'=>'',
'database'=>'cinebd'
);

//conectar por metodo SQL
$db=new mysqli($config['host'],$config['username'],$config['password'],$config['database']);
if ($db->connect_errno) {
  die("Se ha presentado un problema con su conexion a la base de datos");
}

?>
