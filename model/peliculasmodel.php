<?php
 /**
  *
  */
 class peliculasmodel
 {

   public function listapeli()
   {

     global $db;
     $query="select * from peliculas";
     $consulta=$db->query($query);
     $lineas=$consulta->fetch_All();
     // All

     if (isset($lineas)) {
       return $lineas;
     }

   else {
     return false;
   }
   }

   public function addpeli($query){
     global $db;

     $consulta=$db->query($query);

     if ($consulta) {
       return true;
     }
   }

   public function editpeli($query){
     global $db;

     $consulta=$db->query($query);
     $linea=$consulta->fetch_object();
     if (isset($linea)) {
        return $linea;
     }
     else{
       return false;
     }
   }

   public function updatepeli($query)
   {
     global $db;

     $consulta=$db->query($query);
     if ($consulta) {
       return true;
     }
     else{
       return false;
     }
   }

   public function delete($query)
   {
     global $db;
     $consulta=$db->query($query);
     if ($consulta) {
       return true;
     }
     else{
       return false;
     }
   }
}




 ?>
