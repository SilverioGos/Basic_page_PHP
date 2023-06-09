<?php 
  require_once("c://xampp/htdocs/mvc_prueba1/views/head/head.php");
?>
<br>

<form action="store.php" method="POST" autocomplete="off">
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID_cliente</label>
        <input type="text" name="id_cliente" required class="form-control" id="id_cliente" aria-describedby="emailHelp">
      </div>
      <!--<br>-->
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">ID_producto</label>
        <input type="text" name="id_producto" class="form-control" id="id_producto">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">ID_empleado</label>
        <input type="text" name="id_empleado" class="form-control" id="id_empleado">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Fecha</label>
        <input type="text" name="fecha" class="form-control" id="fecha">
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