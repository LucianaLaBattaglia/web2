<?php

require_once './views/pagosview.php';
require_once './models/pagosmodel.php';

class pagoscontroller
{

   private $view;
   private $model;
   private $titulo;

function __construct()
{
    $this->view= new pagosview();
    $this->model= new pagosmodel();
    $this->titulo= "Registro pagos";
}


function home(){
    $pagos=$this->model->get_pagos();
    $this->view->mostrar($this->titulo, $pagos);

}

function insertarpagos(){
    $id_deudores= $_POST['id_deudores'];
    $cuota= $_POST['cuota'];
    $cuota_capital= $_POST['cuota_capital'];
    $fecha_pago= $_POST['fecha_pago'];

    $this->model->insert_pagos($id_deudores, $cuota, $cuota_capital, $fecha_pago);
}

function borrarpagos($id_deudores){
    $id_deudores=$_POST['id_deudores'];
    $this->model->delete_pagos($id_deudores);

}







}



?>