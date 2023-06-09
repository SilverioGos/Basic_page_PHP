<?php
    require_once("c://xampp/htdocs/mvc_prueba1/views/head/head.php");
    require_once("c://xampp/htdocs/mvc_prueba1/controller/userController.php");
    $conex = new userController();
    $rows = $conex->index1();
?>
<br>
<div class="mb-3">
    <a href="/mvc_prueba1/views/vistasp/create.php" class="btn btn-primary">Agregar nuevo Producto</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                
                <tr>
                    <th><?= $row[0] ?></th>            
                    <th><?= $row[1] ?></th>
                    <th><?= $row[2] ?></th>
                    <th><?= $row[3] ?></th>
                    <th><?= $row[4] ?></th>
                    
                    <th><a href="show.php?id=<?= $row[0]?>" class="btn btn-primary">Ver</a></th>
                    <th><a href="edit.php?id=<?= $row[0]?>" class="btn btn-success">Editar</a></th>
                    <!-- Button trigger modal -->
                    <th><a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Eliminar</a></th>
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
                                <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                </tr>
    
            <?php endforeach; ?>    
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
require_once("c://xampp/htdocs/mvc_prueba1/views/head/footer.php");
?>