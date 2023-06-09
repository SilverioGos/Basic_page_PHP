<?php
    require_once("c://xampp/htdocs/mvc_prueba1/controller/userController.php");
    $conex = new userController();
    $conex->update1($_POST['id_producto'],$_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['stock']);
?>