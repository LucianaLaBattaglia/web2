<?php

require_once 'index.php';
require_once 'pagos.php';
require_once 'controllers/pagoscontroller.php';

$parteURL= explode("/", $_GET['action']);

$controller=new pagoscontroller();

if($parteURL[0]==""){
    $controller->home();
}else{
    if($parteURL[0]=='agregar'){
    $controller->insertarpagos();
    }
    if($parteURL[0]=='borrar'){
       $controller->borrarpagos($parteURL[1]);
    }
    if($parteURL[0]=="procesar"){
        procesar_pagos($parteURL[1]);
    }
}




?>