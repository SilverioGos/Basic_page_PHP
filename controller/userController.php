<?php
    class userController{
        private $model;
        public function __construct(){
            require_once("../../models/userModel.php");
            $this->model = new userModel();
            
        }
        //Tabla Clientes
        public function guardar($nombre, $apellidos, $direccion, $correo, $telefono){
            $id = $this->model->insertar($nombre, $apellidos, $direccion, $correo, $telefono);
            return($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre, $apellidos, $direccion, $correo, $telefono){
            return ($this->model->update($id,$nombre, $apellidos, $direccion, $correo, $telefono) != false) ? header("Location:show.php?id=".$id): header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
        }

        //Tabla Productos

        public function guardar1($nombre, $descripcion, $precio, $stock){
            $id = $this->model->insertar1($nombre, $descripcion, $precio, $stock);
            return($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show1($id){
            return ($this->model->show1($id) != false) ? $this->model->show1($id) : header("Location:index.php");
        }
        public function index1(){
            return ($this->model->index1()) ? $this->model->index1() : false;
        }
        public function update1($id, $nombre, $descripcion, $precio, $stock){
            return ($this->model->update1($id, $nombre, $descripcion, $precio, $stock) != false) ? header("Location:show.php?id=".$id): header("Location:index.php");
        }
        public function delete1($id){
            return ($this->model->delete1($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
        }

        //Tabla Empleados

        public function guardar2($nombre, $apellidos, $direccion, $correo, $telefono, $fecha, $puesto, $salario){
            $id = $this->model->insertar2($nombre, $apellidos, $direccion, $correo, $telefono, $fecha, $puesto, $salario);
            return($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show2($id){
            return ($this->model->show2($id) != false) ? $this->model->show2($id) : header("Location:index.php");
        }
        public function index2(){
            return ($this->model->index2()) ? $this->model->index2() : false;
        }
        public function update2($id, $nombre, $apellidos, $direccion, $correo, $telefono, $fecha, $puesto, $salario){
            return ($this->model->update2($id, $nombre, $apellidos, $direccion, $correo, $telefono, $fecha, $puesto, $salario) != false) ? header("Location:show.php?id=".$id): header("Location:index.php");
        }
        public function delete2($id){
            return ($this->model->delete2($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
        }


        
        //Tabla Orden
        public function guardar3($id_cliente, $id_producto, $id_empleado, $fecha){
            $id = $this->model->insertar3($id_cliente, $id_producto, $id_empleado, $fecha);
            return($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show3($id){
            return ($this->model->show3($id) != false) ? $this->model->show3($id) : header("Location:index.php");
        }
        public function index3(){
            return ($this->model->index3()) ? $this->model->index3() : false;
        }
        public function update3($id, $id_cliente, $id_producto, $id_empleado, $fecha){
            return ($this->model->update3($id, $id_cliente, $id_producto, $id_empleado, $fecha) != false) ? header("Location:show.php?id=".$id): header("Location:index.php");
        }
        public function delete3($id){
            return ($this->model->delete3($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
        }
    }

?>