<?php include '../layouts/head.php'; ?>
<?php
require_once '../model/config.php';
require_once '../model/peliculasmodel.php';


$peli = peliculasmodel::listapeli();
if (isset($peli)) {
}
else{

}
 ?>
 <div class="row justify-content-left mt-3">
  <div class="container">
    <a href="../pelicula.php" class="btn btn-sm btn-outline-primary">Nueva pelicula</a>
  </div>

</div>
<div class="row justify-content-center">


  <div class="col-md-10 mt-4">
    <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>Sala</th>
          <th>Titulo</th>
          <th>Descripcion</th>
          <th>Horario</th>
          <th colspan="2">Accion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($peli as $c): ?>
          <tr>
            <td><?php echo $c[0]; ?></td>
            <td><?php echo $c[1]; ?></td>
            <td><?php echo $c[2]; ?></td>
            <td><?php echo $c[3];?></td>
            <td colspan="2"><form class="form-inline my-2 my-lg-0" action="updatepeli.php" method="get">
              <input type="hidden" name="Id" value="<?php echo $c[0]; ?>  ">
              <button type="submit" name="button" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i> </button>

            </form>
            <form class="form-inline my-2 my-lg-0" action="Delete.php" method="post">
              <input type="hidden" name="Id" value="<?php echo $c[0]; ?>">
              <button type="submit" name="button" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
            </form>
          </td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>
<?php include '../layouts/footer.php'; ?>
