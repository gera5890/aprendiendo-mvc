<?php

    class UsuarioController{

        public function mostrarTodos(){
            require_once "./models/Usuario.model.php";
            $usuario = new UsuarioModel();
            $todos_los_usuarios = $usuario->getAll();
            require_once "./views/mostrarUsuarios.php";
        }

        public function crearUsuario(){
            require_once "./views/crearUsuario.php";
        }

    }

?>