<?php
require_once '../model/config.php';
require_once '../model/peliculasmodel.php';

$id=$_POST['Id'];
$query='delete from peliculas where Id="'.$id.'";';
$success=peliculasmodel::delete($query);
if ($success) {
  Header('Location:index.php');
}

 ?>
