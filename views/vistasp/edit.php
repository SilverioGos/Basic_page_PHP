<?php 
    require_once("c://xampp/htdocs/mvc_prueba1/views/head/head.php");
    require_once("c://xampp/htdocs/mvc_prueba1/controller/userController.php");
    $conex = new userController();
    $cli = $conex->show1($_GET['id']);
?>
<form action="update.php" method="post" autocomplete="off">
    <h2> Editando registro </h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id_producto" readonly class="form-control-plaintext" id="staticEmail" value="<?= $cli[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $cli[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
        <input type="text" name="descripcion" class="form-control" id="descripcion" value="<?= $cli[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
        <input type="number" name="precio" class="form-control" id="precio" value="<?= $cli[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Stock</label>
        <div class="col-sm-10">
        <input type="number" name="stock" class="form-control" id="stock" value="<?= $cli[4]?>">
        </div>
    </div>
    
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $cli[0]?>">Cancelar</a>
    </div>
</form>
<?php 
    require_once("c://xampp/htdocs/mvc_prueba1/views/head/footer.php");
?>