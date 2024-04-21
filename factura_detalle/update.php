<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <title>Calzado</title>
  <link rel='stylesheet' href='../style.css'>
</head>

<body>
  <?php
  include '../a-main.php'; // Archivo que contiene la función conexion() y err()
  $conexion = conexion();
  $codigo = $_GET["cod"];
  $sql = "SELECT * FROM factura_detalle WHERE cod_factura_detalle = $codigo";
  $registros = mysqli_query($conexion, $sql) or die(err($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    $codigo_factura = $reg['FACTCAB_COD'];
    $metodo_pago = $reg['METODO_PAGO'];
    $codigo_producto = $reg['COD_PRODUCTO'];
    $cantidad = $reg['CANTIDAD'];
    $precio_venta = $reg['PRECIO_VENTA'];
    $monto = $reg['MONTO'];
    $subtotal = $reg['SUBTOTAL'];
    $iva = $reg['IVA'];
    $descuento = $reg['DESCUENTO'];
    $neto_pagar = $reg['NETO_PAGAR'];
  ?>
    <main>
      <h2>Modificar factura_detalle</h2>
      <form action="" method="post">
        <div>
          <label for="FACTCAB_COD">Código de la Factura:</label>
          <input type="text" name="FACTCAB_COD" id="FACTCAB_COD" value="<?php echo $codigo_factura; ?>" required />
        </div>
        <div>
          <label for="METODO_PAGO">Método de Pago:</label>
          <select name="METODO_PAGO" id="METODO_PAGO">
            <option value="EFECTIVO" <?php if ($metodo_pago == 'EFECTIVO') echo 'selected'; ?>>Efectivo</option>
            <option value="CHEQUE" <?php if ($metodo_pago == 'CHEQUE') echo 'selected'; ?>>Cheque</option>
            <option value="TARJETA" <?php if ($metodo_pago == 'TARJETA') echo 'selected'; ?>>Tarjeta</option>
          </select>
        </div>
        <div>
          <label for="COD_PRODUCTO">Código de Producto:</label>
          <input type="text" name="COD_PRODUCTO" id="COD_PRODUCTO" value="<?php echo $codigo_producto; ?>" required />
        </div>
        <div>
          <label for="CANTIDAD">Cantidad:</label>
          <input type="text" name="CANTIDAD" id="CANTIDAD" value="<?php echo $cantidad; ?>" pattern="[0-9]+" />
        </div>
        <div>
          <label for="PRECIO_VENTA">Precio de Venta:</label>
          <input type="text" name="PRECIO_VENTA" id="PRECIO_VENTA" value="<?php echo $precio_venta; ?>" required />
        </div>
        <div>
          <label for="MONTO">Monto:</label>
          <input type="text" name="MONTO" id="MONTO" value="<?php echo $monto; ?>" required />
        </div>
        <div>
          <label for="SUBTOTAL">Subtotal:</label>
          <input type="text" name="SUBTOTAL" id="SUBTOTAL" value="<?php echo $subtotal; ?>" pattern="[0-9]+" />
        </div>
        <div>
          <label for="IVA">IVA:</label>
          <input type="text" name="IVA" id="IVA" value="<?php echo $iva; ?>" pattern="[0-9]{1,2}" />
        </div>
        <div>
          <label for="DESCUENTO">Descuento:</label>
          <input type="text" name="DESCUENTO" id="DESCUENTO" value="<?php echo $descuento; ?>" pattern="[0-9]{1,2}" required />
        </div>
        <div>
          <label for="NETO_PAGAR">Neto a Pagar:</label>
          <input type="text" name="NETO_PAGAR" id="NETO_PAGAR" value="<?php echo $neto_pagar; ?>" required />
        </div>
        <div>
          <button type="submit">Guardar</button>
        </div>
      </form>
    </main>
  <?php
    mysqli_close($conexion);
  }
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
    // Update
    $codigo = $_GET["cod"];
    $sql = "UPDATE factura_detalle SET METODO_PAGO = '$metodo_pago', COD_PRODUCTO = $codigo_producto,  CANTIDAD = $cantidad, PRECIO_VENTA = $precio_venta, MONTO = $monto, SUBTOTAL = $subtotal, IVA = $iva, DESCUENTO = $descuento,NETO_PAGAR = $neto_pagar WHERE cod_factura_detalle = $codigo;";
    mysqli_query($conexion, $sql) or die(err($conexion));
    echo "<p>¡factura_detalle actualizado correctamente!</p>";
    mysqli_close($conexion);
  }
  ?>
</body>

</html>