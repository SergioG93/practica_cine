<?php include '../layouts/head.php'; ?>
<?php
require_once '../model/config.php';
require_once '../model/peliculasmodel.php';

$id=$_GET['Id'];

$query='select * from peliculas where Id= '.$id.';';

$peli=peliculasmodel::editpeli($query);
 ?>
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card">
      <div class="card-header bg-dark py-1">
          <h6 class="text-white">Actualizar Pelicula</h6>
      </div>
      <div class="card-body">
        <form class="" action="upgradepeli.php" method="post">
          <div class="form-group">
            <input type="hidden" name="Id" value="<?php echo $peli->Id; ?>">
            <label class="col-sm-6 col-form-label" for="Name">Nombre de la pelicula</label>
            <div class="col-sm-12">
              <input type="text" name="Name" value="<?php echo $peli->Name ?>" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="Descripcion">Descripcion</label>
            <div class="col-sm-12">
              <input type="text" name="Descripcion" value="<?php echo $peli->Descripcion ?>" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="Horario">Horario</label>
            <div class="col-sm-12">
              <input type="text" name="Horario" value="<?php echo $peli->Horario?>" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="row justify-content-center">
              <input type="submit" name="submit" value="Actualizar" class="btn btn-primary btn-sm">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include '../Layouts/footer.php'; ?>
