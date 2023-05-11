


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$titulo}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   
  <div class="container">
    <h1>{$titulo}</h1>
    
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
    {foreach from=$pagos item=pago}
      
      {if $pago->procesado == 1}
      <tr>
        <th>{$pago->nombre}</th>
        <td>{$pago->cuota}</td>
        <td>${$pago->cuota_capital}</td>
        <td>{$pago->fecha_pago}</td>
        <td><a href="borrar/{$pago->id_pagos}</s>">BORRAR</a></td>
      </tr>
      
     {else}
        {if $pago->procesado == 0}
        <tr>
            <th>{$pago->nombre}</th>
            <td>{$pago->cuota}</td>
            <td>${$pago->cuota_capital}</td>
            <td>{$pago->fecha_pago}</td>
            <td><a href="borrar/{$pago->id_pagos}</s>">BORRAR</a></td>
            <td><a href="procesar/{$pago->id_pagos}">SIN PROCESAR</a></td>
      </tr>
      {/if}
    {/if}
    {/foreach}
    
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
