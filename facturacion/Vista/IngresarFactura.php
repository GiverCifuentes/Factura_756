<?php
session_start();

if (!(isset($_SESSION["NombreUsuario"]))) {
 header("location:../../Index.php");    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
     <h1 align="center">Facturación</h1>
     <form align="center" action="../Controlador/ControladorFacturacion.php" method="post">

     Cliente:
     <select name="CodigoCliente" id="CodigoCliente">
          <option option="">Seleccione</option>
          <option value="1206">Tomasa Arias</option>
          <option value="1111">Jannin Santa</option>
     </select>
     <br>
     Producto:
     <select name="CodigoProducto" id="CodigoProducto">
          <option option="">Seleccione</option>
          <option value="10">Arroz</option>
          <option value="11">Panela</option>
     </select>
     <br>
     Precio:
     <input type="text" id="PrecioProducto" name="PrecioProducto">
     <br>
     Cantidad:
     <input type="text" id="CantidadProducto" name="CantidadProducto">
     <br>
     <button type="button" name="AgregarProducto" id="AgregarProducto" onclick="AgregarDetalle()">Agregar</button>
     
     <br>
     <br>
     <table align="center" id="ListaProductos" border="1">
     <thead>
     <th>Nombre</th>
     <th>Codigo</th>
     <th>Cantidad</th>
     <th>Precio</th>
     <th>Valor Detalle</th>
     <th></th>
     </thead>
     <tbody>

     </tbody>
     </table>
     <br>
     <input type="text" id="ProductosAgregados" name="ProductosAgregados" value="0">
     <br>
     <input type="hidden" name="Registrar" id="Registrar">
     <button type="submit">Registrar</button>
     </form>
     <br>
     <div align="center">
     <button><a href="../Index.php">Volver</a></button>
     </div>

</body>
<script>
    function AgregarDetalle()
    {
        let CodigoProducto = $('#CodigoProducto').val();//Capturar el ´código del producto seleccionado
        let NombreProducto = $('select[name="CodigoProducto"] option:selected').text(); // Capturar el código del producto que está seleccionado
        let CantidadProducto = $('#CantidadProducto').val(); //Capturar la Cantidad del producto
        let PrecioProducto = $('#PrecioProducto').val(); //Capturar El precio
        let ValorDetalle = CantidadProducto*PrecioProducto;

        $('#ProductosAgregados').val(parseInt($('#ProductosAgregados').val()) + 1);//Incrementar Productos Agregados
        let ConsecutivoProducto = $('#ProductosAgregados').val();

        let htmlTags = '<tr>' +
        '<td>' + NombreProducto + '</td>' +
        '<td>' + '<input type="text" id="CodigoProducto'+ConsecutivoProducto+'" name="CodigoProducto'+ConsecutivoProducto+'" value="'+CodigoProducto+'">'+'</td>' +
        '<td>' + '<input type="text" id="CantidadProducto'+ConsecutivoProducto+'" name="CantidadProducto'+ConsecutivoProducto+'" value="'+CantidadProducto+'">'+'</td>' +
        '<td>' + '<input type="text" id="PrecioProducto'+ConsecutivoProducto+'" name="PrecioProducto'+ConsecutivoProducto+'" value="'+PrecioProducto+'">'+'</td>' +
        '<td>' + '<input type="text" id="ValorDetalle'+ConsecutivoProducto+'" name="ValorDetalle'+ConsecutivoProducto+'" value="'+ValorDetalle+'">'+'</td>' +
        '<td>' +  '<button type="button" onclick="EliminarDetalle('+ConsecutivoProducto+')" >Eliminar</button>' +'</td>' +
        '</tr>';
       $('#ListaProductos tbody').append(htmlTags);//app agregar al final de la tabla filas
    }

    function EliminarDetalle(ConsecutivoProducto)
    {
        alert(ConsecutivoProducto);
    }
</script>
</html>


