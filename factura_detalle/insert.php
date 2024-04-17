<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calzado</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <main>
    <h1>Agregar factura_detalle</h1>
    <form action="" method="post">
      <div>
        <label for="FACTCAB_COD">Código de la Factura:</label>
        <input type="text" name="FACTCAB_COD" id="FACTCAB_COD" required />
      </div>
      <div>
        <label for="METODO_PAGO">Método de Pago:</label>
        <select name="METODO_PAGO" id="METODO_PAGO">
          <option value="EFECTIVO">Efectivo</option>
          <option value="CHEQUE">Cheque</option>
          <option value="TARJETA">Tarjeta</option>
        </select>
      </div>
      <div>
        <label for="COD_PRODUCTO">Código de Producto:</label>
        <input type="text" name="COD_PRODUCTO" id="COD_PRODUCTO" required />
      </div>
      <div>
        <label for="CANTIDAD">Cantidad:</label>
        <input type="text" name="CANTIDAD" id="CANTIDAD" pattern="[0-9]+" />
      </div>
      <div>
        <label for="PRECIO_VENTA">Precio de Venta:</label>
        <input type="text" name="PRECIO_VENTA" id="PRECIO_VENTA" required />
      </div>
      <div>
        <label for="MONTO">Monto:</label>
        <input type="text" name="MONTO" id="MONTO" required />
      </div>
      <div>
        <label for="SUBTOTAL">Subtotal:</label>
        <input type="text" name="SUBTOTAL" id="SUBTOTAL" pattern="[0-9]+" />
      </div>
      <div>
        <label for="IVA">IVA:</label>
        <input type="text" name="IVA" id="IVA" pattern="[0-9]{1,2}" />
      </div>
      <div>
        <label for="DESCUENTO">Descuento:</label>
        <input type="text" name="DESCUENTO" id="DESCUENTO" pattern="[0-9]{1,2}" required />
      </div>
      <div>
        <label for="NETO_PAGAR">Neto a Pagar:</label>
        <input type="text" name="NETO_PAGAR" id="NETO_PAGAR" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
    <?php
    include '../a-main.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $codigo_factura = $_POST['FACTCAB_COD'];
      $metodo_pago = $_POST['METODO_PAGO'];
      $codigo_producto = $_POST['COD_PRODUCTO'];
      $cantidad = $_POST['CANTIDAD'];
      $precio_venta = $_POST['PRECIO_VENTA'];
      $monto = $_POST['MONTO'];
      $subtotal = $_POST['SUBTOTAL'];
      $iva = $_POST['IVA'];
      $descuento = $_POST['DESCUENTO'];
      $neto_pagar = $_POST['NETO_PAGAR'];
      $conexion = conexion();
      $sql = "INSERT INTO factura_detalle (FACTCAB_COD, METODO_PAGO, COD_PRODUCTO, CANTIDAD, PRECIO_VENTA, MONTO, SUBTOTAL, IVA, DESCUENTO, NETO_PAGAR)
    VALUES ($codigo_factura, '$metodo_pago', $codigo_producto, $cantidad, $precio_venta, $monto, $subtotal, $iva, $descuento, $neto_pagar)";
      mysqli_query($conexion, $sql) or die(err($conexion));
      echo "<p>factura_detalle guardado correctamente!</p>";
    }
    ?>
  </main>
</body>

</html>