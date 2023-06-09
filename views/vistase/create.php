<?php 
  require_once("c://xampp/htdocs/mvc_prueba1/views/head/head.php");
?>
<br>

<form action="store.php" method="POST" autocomplete="off">
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombres</label>
        <input type="text" name="nombre" required class="form-control" id="nombre" aria-describedby="emailHelp">
      </div>
      <!--<br>-->
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Apellidos</label>
        <input type="text" name="apellidos" class="form-control" id="apellidos">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Direccion</label>
        <input type="text" name="direccion" class="form-control" id="direccion">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Correo</label>
        <input type="text" name="correo" class="form-control" id="correo">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefono</label>
        <input type="text" name="telefono" class="form-control" id="telefono">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Fecha de Contratacion</label>
        <input type="text" name="fecha_contra" class="form-control" id="fecha_contra">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Puesto</label>
        <input type="text" name="puesto" class="form-control" id="puesto">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Salario</label>
        <input type="text" name="salario" class="form-control" id="salario">
      </div>
      
      <div class="col-md-12">
        <a class="btn btn-danger" href="index.php">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
  </div>
</form>
<?php 
  require_once("c://xampp/htdocs/mvc_prueba1/views/head/footer.php");
?>