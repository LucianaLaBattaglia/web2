<?php




function conectar(){

return new PDO('mysql:host=localhost;'
.'dbname=db_registro;charset=utf8'
, 'root', '');

}






function procesar_pagos($id_pagos){
    $db=conectar();
    $sentencia= $db-> prepare('UPDATE pagos SET procesado=1 where id_pagos=?');
    $sentencia-> execute(array($id_pagos));
    header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
    }


    function delete_pagos($id_pagos){
        $db=conectar();
        $sentencia= $db-> prepare('DELETE from pagos where id_pagos=?');
        $sentencia-> execute(array($id_pagos));
        header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
        }





?>