<?php 
    require_once("c://xampp/htdocs/mvc_prueba1/views/head/head.php");
    require_once("c://xampp/htdocs/mvc_prueba1/controller/userController.php");
    $conex = new userController();
    $cli = $conex->show3($_GET['id']);
?>
<form action="update.php" method="post" autocomplete="off">
    <h2> Editando registro </h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id_orden" readonly class="form-control-plaintext" id="id_orden" value="<?= $cli[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">ID_cliente</label>
        <div class="col-sm-10">
        <input type="text" name="id_cliente" class="form-control" id="id_cliente" value="<?= $cli[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">ID_producto</label>
        <div class="col-sm-10">
        <input type="text" name="id_producto" class="form-control" id="id_producto" value="<?= $cli[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">ID_empleado</label>
        <div class="col-sm-10">
        <input type="text" name="id_empleado" class="form-control" id="id_empleado" value="<?= $cli[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10">
        <input type="text" name="fecha" class="form-control" id="fecha" value="<?= $cli[4]?>">
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