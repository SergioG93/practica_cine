<?php

require_once '../model/config.php';
require_once '../model/peliculasmodel.php';

$name=$_POST['Name'];
$descripcion=$_POST['Descripcion'];
$horario=$_POST['Horario'];

$query='insert into peliculas(Name,Descripcion,Horario) values("'.$name.'","'.$descripcion.'","'.$horario.'")';

$cinebd=peliculasmodel::addpeli($query);
if ($cinebd) {
  Header('Location: index.php');
}


 ?>
