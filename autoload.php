<?php

    function autocarga($className){
        include "controllers/$className.php";
    }

    spl_autoload_register('autocarga');

?>