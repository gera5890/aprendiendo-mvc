<?php

    class UsuarioModel{

        private $nombre;
        private $apellidos;
        private $email;
        private $password;

        public function getNombre() : string{
            return $this->nombre;
        }
    
        public function setNombre($nombre) : void{
            $this->nombre = $nombre;
        }
    
        public function getApellidos() : string{
            return $this->apellidos;
        }
    
        public function setApellidos($apellidos) : void{
            $this->apellidos = $apellidos;
        }
    
        public function getEmail() : string{
            return $this->email;
        }
    
        public function setEmail($email) : void{
            $this->email = $email;
        }
    
        public function getPassword(){
            return $this->password;
        }
    
        public function setPassword($password){
            $this->password = $password;
        }

        public function getAll(){
            return "imprimiendo todos los usuarios";
        }

        public function crearUsuario(){
            $conn = Connection::connect();
            $sql = "INSERT INTO usuarios(nombre, apellidos, email, password) values(:nombre, :apellidos, :email, :password)";
            $stmn = $conn->prepare($sql);
            $stmn->bindParam(':nombre',$this->nombre,PDO::PARAM_STR,50);
            $stmn->bindParam(':apellidos', $this->apellidos, PDO::PARAM_STR,100);
            $stmn->bindParam(':email', $this->email, PDO::PARAM_STR,50);
            $stmn->bindParam(':password', $this->password, PDO::PARAM_STR, 12);
            $stmn->execute();
        }


    }

?>