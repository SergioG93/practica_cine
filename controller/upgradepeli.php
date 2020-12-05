<?php

require_once '../model/config.php';
require_once '../model/peliculasmodel.php';

$id=$_POST['Id'];
$name=$_POST['Name'];
$descripcion=$_POST['Descripcion'];
$precio=$_POST['Horario'];

 $query='update peliculas set Name="'.$name.'",Descripcion="'.$descripcion.'",Horario="'.$horario.'" where Id='.$id.';';


$update=peliculasmodel::updatepeli($query);
if ($update) {
  Header('Location:index.php');
}
 ?>
