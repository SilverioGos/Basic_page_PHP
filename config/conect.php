<?php
    class Database {
        private $hostname="localhost";
        private $database="bicyclestore";
        private $port=33065;
        private $username="root";
        private $password="";
        private $charset= "utf-8";

        function conectar(){
            try {
                $conexion="mysql:host=".$this->hostname.";dbname=".$this->database.";port=".$this->port;
                $options=[
                    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                $pdo = new PDO($conexion,$this->username,$this->password, $options);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
                
            } catch(PDOException $e){
                echo "La conexion ha fallado". $e->getMessage();
                exit;
            }   
        }               
    }
?>