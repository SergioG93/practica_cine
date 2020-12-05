<?php include 'layouts/head.php'; ?>

<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card">
      <div class="card-header bg-dark py-1">
          <h6 class="text-white">Nueva pelicula</h6>
      </div>
      <div class="card-body">
        <form class="" action="controller/savepeli.php" method="post">
          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="Name">Nombre de la pelicula</label>
            <div class="col-sm-12">
              <input type="text" name="Name" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="Descripcion">Descripcion</label>
            <div class="col-sm-12">
              <input type="text" name="Descripcion" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="Horario">Horario</label>
            <div class="col-sm-12">
              <input type="text" name="Horario" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="row justify-content-center">
              <input type="submit" name="submit" value="Enviar" class="btn btn-primary btn-sm">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'layouts/footer.php'; ?>
