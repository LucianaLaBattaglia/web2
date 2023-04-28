<?php




function conectar(){

return new PDO('mysql:host=localhost;'
.'dbname=bd_registropagos;charset=utf8'
, 'root', '');

}

function get_pagos(){
$db=conectar();
$sentencia= $db-> prepare ("select*from pagos");
$sentencia-> execute();
return $sentencia->fetchAll(PDO::FETCH_OBJ);
}


function insert_pagos(){
$id_deudores= $_POST['id_deudores'];
$cuota= $_POST['cuota'];
$cuota_capital= $_POST['cuota_capital'];
$fecha_pago= $_POST['fecha_pago'];

$db= conectar();
$sentencia= $db-> prepare('INSERT INTO pagos(id_deudores, cuota, cuota_capital, fecha_pago) VALUES (?,?,?,?)');
$sentencia-> execute(array($id_deudores, $cuota, $cuota_capital, $fecha_pago));
header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));

}


function delete_pagos($id_pagos){
$db=conectar();
$sentencia= $db-> prepare('DELETE from pagos where id_pagos=?');
$sentencia-> execute(array($id_pagos));
header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
}

?>