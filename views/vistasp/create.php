<?php 
  require_once("c://xampp/htdocs/mvc_prueba1/views/head/head.php");
?>
<br>

<form action="store.php" method="POST" autocomplete="off">
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="nombre" required class="form-control" id="nombre" aria-describedby="emailHelp">
      </div>
      <!--<br>-->
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" id="descripcion">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Precio</label>
        <input type="number" name="precio" class="form-control" id="precio">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Stock</label>
        <input type="number" name="stock" class="form-control" id="stock">
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