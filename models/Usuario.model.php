<?php

    class UsuarioModel{

        private $nombre;
        private $apellidos;
        private $email;
        private $password;

        public function getNombre(){
            return $this->nombre;
        }
    
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    
        public function getApellidos(){
            return $this->apellidos;
        }
    
        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
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


    }

?>