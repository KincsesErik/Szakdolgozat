<?php

    session_start();

    require 'Model/db_inc.php';
    $db = new DataBase();

    
    $page = $_REQUEST['page'] ?? "Main";

    $controllerFile = 'controller/'.$page.'.php';

    if(file_exists($controllerFile)){
        require $controllerFile;
    }

?>