<?php
    require_once("c://xampp/htdocs/mvc_prueba1/controller/userController.php");
    $del = new userController();
    $del->delete1($_GET['id']);
?>