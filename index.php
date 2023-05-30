<?php

require_once "autoload.php";

if(isset($_GET['controller'])){
    $nombreControlador = $_GET['controller'].'Controller';
}else{
    echo "La pagina no existe";
    die();
}

if(isset($nombreControlador) && class_exists($nombreControlador)){
    $controlador = new $nombreControlador();
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        echo "No existe la operacion";
    }
}else{
    echo "La pagina no existe :)";
}


