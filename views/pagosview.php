<?php

require_once './libs/Smarty.class.php';


class pagosview
{

function __construct(){


}

function mostrar($titulo, $pagos){
    $smarty= new Smarty();
    $smarty-> assign('titulo', "Registro pagos");
    $smarty->assign("pagos", $pagos);
    $smarty-> display ('templates/pagos.tpl');

}
    





}

?>