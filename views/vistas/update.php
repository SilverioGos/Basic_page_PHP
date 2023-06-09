<?php
    require_once("c://xampp/htdocs/mvc_prueba1/controller/userController.php");
    $conex = new userController();
    $conex->update($_POST['id_cliente'],$_POST['nombre'],$_POST['apellidos'],$_POST['direccion'],$_POST['correo'],$_POST['telefono']);
?>