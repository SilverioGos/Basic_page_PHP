<?php
    require_once("c://xampp/htdocs/mvc_prueba1/controller/userController.php");
    $conex = new userController();
    $conex->update3($_POST['id_orden'],$_POST['id_cliente'],$_POST['id_producto'],$_POST['id_empleado'],$_POST['fecha']);
?>