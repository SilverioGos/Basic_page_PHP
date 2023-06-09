<?php 
    require_once("c://xampp/htdocs/mvc_prueba1/views/head/head.php");
    require_once("c://xampp/htdocs/mvc_prueba1/controller/userController.php");
    $conex = new userController();
    $date = $conex->show($_GET['id']);
?>
<br>
<br>
<h2 class="text-center">Detalles del registro</h2>
<br>
<br>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Eliminar</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Deseas eliminar el registro?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Una vez este sea eliminado, no se podra recuperar el registro.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
                
            </div>
            </div>
        </div>
    </div>
</div>
<br>
<table class="table container-fluid">
            <thead class="table-success table-striped">
                <tr>    
                    <th scope="col">Id</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td scope="col"><?= $date[0]?></td>
                        <td scope="col"><?= $date[1]?></td>
                        <td scope="col"><?= $date[2]?></td>
                        <td scope="col"><?= $date[3]?></td>
                        <td scope="col"><?= $date[4]?></td>
                        <td scope="col"><?= $date[5]?></td>
                    </tr>
            </tbody>
        </table>


<?php 
    require_once("c://xampp/htdocs/mvc_prueba1/views/head/footer.php");
?>