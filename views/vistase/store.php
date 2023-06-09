<?php
    require_once("c://xampp/htdocs/mvc_prueba1/controller/userController.php");
    $conex = new userController();
    $conex->guardar2($_POST['nombre'], $_POST['apellidos'],$_POST['direccion'], $_POST['correo'], $_POST['telefono'], $_POST['fecha_contra'], $_POST['puesto'], $_POST['salario']);

?>