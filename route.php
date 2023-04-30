<?php

require_once 'index.php';
require_once 'pagos.php';

$parteURL= explode("/", $_GET['action']);


if($parteURL[0]==""){
    home();
}else{
    if($parteURL[0]=='agregar'){
        insert_pagos();
    }
    if($parteURL[0]=='borrar'){
        delete_pagos($parteURL[1]);
    }
    if($parteURL[0]=="procesar"){
        procesar_pagos($parteURL[1]);
    }
}




?>