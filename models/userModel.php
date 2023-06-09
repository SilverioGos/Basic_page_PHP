<?php
    class userModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/conect.php");
            $con = new Database();
            $this->PDO = $con->conectar();
        }
        //Tabla Clientes
        public function insertar($nombre, $apellidos, $direccion, $correo, $telefono){
            $statement = $this->PDO->prepare("INSERT INTO clientes VALUES(null, :nom, :ape, :dir, :corr, :tel)");
            $statement->bindParam(":nom", $nombre);
            $statement->bindParam(":ape", $apellidos);
            $statement->bindParam(":dir", $direccion);
            $statement->bindParam(":corr", $correo);
            $statement->bindParam(":tel", $telefono);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function show($id){
            $statement = $this->PDO->prepare("SELECT * FROM clientes WHERE id_cliente = :id limit 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false ;
        }
        public function index(){
            $statement = $this->PDO->prepare("SELECT * FROM clientes");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function update($id,$nombre,$apellidos,$direccion,$correo,$telefono){
            $statement = $this->PDO->prepare("UPDATE clientes SET nombre=:nom, apellidos=:ape, direccion=:dir, correo=:corr, telefono=:tel WHERE id_cliente = :id");
            $statement->bindParam(":nom", $nombre);
            $statement->bindParam(":ape", $apellidos);
            $statement->bindParam(":dir", $direccion);
            $statement->bindParam(":corr", $correo);
            $statement->bindParam(":tel", $telefono);
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? $id : false;
        }
        public function delete($id){
            $statement = $this->PDO->prepare("DELETE FROM clientes WHERE id_cliente = :id");
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? true : false;
        }

        //Tabla Productos
        public function insertar1($nombre, $descripcion, $precio, $stock){
            $statement = $this->PDO->prepare("INSERT INTO productos VALUES(null, :nom, :de, :pre, :stock)");
            $statement->bindParam(":nom", $nombre);
            $statement->bindParam(":de", $descripcion);
            $statement->bindParam(":pre", $precio);
            $statement->bindParam(":stock", $stock);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function show1($id){
            $statement = $this->PDO->prepare("SELECT * FROM productos WHERE id_producto = :id limit 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false ;
        }
        public function index1(){
            $statement = $this->PDO->prepare("SELECT * FROM productos");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function update1($id,$nombre, $descripcion, $precio, $stock){
            $statement = $this->PDO->prepare("UPDATE productos SET nombre=:nom, descripcion=:de, precio=:pre, stock=:sto WHERE id_producto = :id");
            $statement->bindParam(":nom", $nombre);
            $statement->bindParam(":de", $descripcion);
            $statement->bindParam(":pre", $precio);
            $statement->bindParam(":sto", $stock);
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? $id : false;
        }
        public function delete1($id){
            $statement = $this->PDO->prepare("DELETE FROM productos WHERE id_producto = :id");
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? true : false;
        }

        //Tabla Empleados
        public function insertar2($nombre, $apellidos, $direccion, $correo, $telefono, $fecha, $puesto, $salario){
            $statement = $this->PDO->prepare("INSERT INTO empleados VALUES(null, :nom, :ape, :dir, :corr, :tel, :fec, :pues, :sala)");
            $statement->bindParam(":nom", $nombre);
            $statement->bindParam(":ape", $apellidos);
            $statement->bindParam(":dir", $direccion);
            $statement->bindParam(":corr", $correo);
            $statement->bindParam(":tel", $telefono);
            $statement->bindParam(":fec", $fecha);
            $statement->bindParam(":pues", $puesto);
            $statement->bindParam(":sala", $salario);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function show2($id){
            $statement = $this->PDO->prepare("SELECT * FROM empleados WHERE id_empleado = :id limit 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false ;
        }
        public function index2(){
            $statement = $this->PDO->prepare("SELECT * FROM empleados");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function update2($id,$nombre,$apellidos,$direccion,$correo,$telefono,$fecha,$puesto,$salario){
            $statement = $this->PDO->prepare("UPDATE empleados SET nombre=:nom, apellidos=:ape, direccion=:dir, correo=:corr, telefono=:tel, fecha_contra=:fec, puesto=:pues, salario=:sala WHERE id_empleado = :id");
            $statement->bindParam(":nom", $nombre);
            $statement->bindParam(":ape", $apellidos);
            $statement->bindParam(":dir", $direccion);
            $statement->bindParam(":corr", $correo);
            $statement->bindParam(":tel", $telefono);
            $statement->bindParam(":fec", $fecha);
            $statement->bindParam(":pues", $puesto);
            $statement->bindParam(":sala", $salario);
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? $id : false;
        }
        public function delete2($id){
            $statement = $this->PDO->prepare("DELETE FROM empleados WHERE id_empleado = :id");
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? true : false;
        }

        //Tabla Orden
        public function insertar3($idcliente, $idproducto, $idempleado, $fecha){
            $statement = $this->PDO->prepare("INSERT INTO ordenes VALUES(null, :idcli, :idpro, :idem, :fec)");
            $statement->bindParam(":idcli", $idcliente);
            $statement->bindParam(":idpro", $idproducto);
            $statement->bindParam(":idem", $idempleado);
            $statement->bindParam(":fec", $fecha);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function show3($id){
            $statement = $this->PDO->prepare("SELECT ordenes.id_orden, clientes.nombre, productos.nombre, productos.descripcion, productos.precio, empleados.nombre, empleados.puesto, ordenes.fecha
            FROM ordenes
            INNER JOIN clientes ON ordenes.id_cliente = clientes.id_cliente
            INNER JOIN productos ON ordenes.id_producto = productos.id_producto
            INNER JOIN empleados ON ordenes.id_empleado = empleados.id_empleado WHERE id_orden = :id limit 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false ;
        }
        public function index3(){
            $statement = $this->PDO->prepare("SELECT ordenes.id_orden, clientes.nombre, productos.nombre, productos.descripcion, productos.precio, empleados.nombre, empleados.puesto, ordenes.fecha
            FROM ordenes
            INNER JOIN clientes ON ordenes.id_cliente = clientes.id_cliente
            INNER JOIN productos ON ordenes.id_producto = productos.id_producto
            INNER JOIN empleados ON ordenes.id_empleado = empleados.id_empleado;");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function update3($id, $id_cliente, $id_producto, $id_empleado, $fecha){
            $statement = $this->PDO->prepare("UPDATE ordenes SET id_cliente=:idcli, id_producto=:idpro, id_empleado=:idem, fecha=:fec WHERE id_orden = :id");
            $statement->bindParam(":idcli", $id_cliente);
            $statement->bindParam(":idpro", $id_producto);
            $statement->bindParam(":idem", $id_empleado);
            $statement->bindParam(":fec", $fecha);
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? $id : false;
        }
        public function delete3($id){
            $statement = $this->PDO->prepare("DELETE FROM ordenes WHERE id_orden = :id");
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? true : false;
        }
    }

?>