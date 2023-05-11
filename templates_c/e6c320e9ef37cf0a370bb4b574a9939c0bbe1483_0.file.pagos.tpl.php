<?php
/* Smarty version 4.3.1, created on 2023-05-11 04:05:56
  from 'C:\xampp\htdocs\registropagos\templates\pagos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645c4d8465b110_90860307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c320e9ef37cf0a370bb4b574a9939c0bbe1483' => 
    array (
      0 => 'C:\\xampp\\htdocs\\registropagos\\templates\\pagos.tpl',
      1 => 1683770745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645c4d8465b110_90860307 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   
  <div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    
      <table class="table">
      
    <thead>
      <tr>
        <th scope="col">DEUDORES</th>
        <th scope="col">CUOTA</th>
        <th scope="col">CAPITAL</th>
        <th scope="col">FECHA PAGO</th>
      </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagos']->value, 'pago');
$_smarty_tpl->tpl_vars['pago']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pago']->value) {
$_smarty_tpl->tpl_vars['pago']->do_else = false;
?>
      
      <?php if ($_smarty_tpl->tpl_vars['pago']->value->procesado == 1) {?>
      <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['pago']->value->nombre;?>
</th>
        <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota;?>
</td>
        <td>$<?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota_capital;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->fecha_pago;?>
</td>
        <td><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['pago']->value->id_pagos;?>
</s>">BORRAR</a></td>
      </tr>
      
     <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['pago']->value->procesado == 0) {?>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['pago']->value->nombre;?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota;?>
</td>
            <td>$<?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota_capital;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->fecha_pago;?>
</td>
            <td><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['pago']->value->id_pagos;?>
</s>">BORRAR</a></td>
            <td><a href="procesar/<?php echo $_smarty_tpl->tpl_vars['pago']->value->id_pagos;?>
">SIN PROCESAR</a></td>
      </tr>
      <?php }?>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </tbody>
  </table>
</div>

<div class="container">
<h1>FORMULARIO DE INGRESO DE PAGOS:</h1>
  <form method="POST" action="agregar" >
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ID Deudor</label>
      <input type="text" class="form-control" id="id_deudores" name="id_deudores">
    
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Cuota</label>
      <input type="text" class="form-control" id="cuota" name="cuota">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Importe Cuota</label>
      <input type="text" class="form-control" id="cuota_capital" name="cuota_capital">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha Pago</label>
      <input type="text" class="form-control" id="fecha_pago" name="fecha_pago">
    </div>
    <button type="submit" class="btn btn-primary">AGREGAR</button>
  </form>

</div>
</html>
<?php }
}
