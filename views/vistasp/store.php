<?php
    require_once("c://xampp/htdocs/mvc_prueba1/controller/userController.php");
    $conex = new userController();
    $conex->guardar1($_POST['nombre'], $_POST['descripcion'],$_POST['precio'], $_POST['stock']);

?>