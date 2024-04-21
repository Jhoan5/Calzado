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
  $sql = "SELECT * FROM pedidos_detalle WHERE cod_pedidodetalle = $codigo";
  $registros = mysqli_query($conexion, $sql) or die(err($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    $codigo_factura_cabeza = $reg['FACTURACABEZA_COD'];
    $codigo_producto = $reg['PRODUCTO_COD'];
    $cantidad = $reg['CANTIDAD'];
    $precio_unitario = $reg['PRECIO_UNITARIO'];
    $tipo_de_pago = $reg['TIPO_DE_PAGO'];
    $subtotal = $reg['SUBTOTAL'];
    $descuento = $reg['DESCUENTO'];
    $iva = $reg['IVA'];
    $neto_a_pagar = $reg['NETO_A_PAFGAR'];
  ?>
    <main>
      <h2>Modificar pedidos_detalle</h2>
      <form action="" method="post">
        <div>
          <label for="FACTURACABEZA_COD">Código de Factura Cabeza:</label>
          <input type="text" name="FACTURACABEZA_COD" id="FACTURACABEZA_COD" value="<?php echo $codigo_factura_cabeza; ?>" required />
        </div>
        <div>
          <label for="PRODUCTO_COD">Código de Producto:</label>
          <input type="text" name="PRODUCTO_COD" id="PRODUCTO_COD" value="<?php echo $codigo_producto; ?>" required />
        </div>
        <div>
          <label for="CANTIDAD">Cantidad:</label>
          <input type="text" name="CANTIDAD" id="CANTIDAD" value="<?php echo $cantidad; ?>" required />
        </div>
        <div>
          <label for="PRECIO_UNITARIO">Precio Unitario:</label>
          <input type="text" name="PRECIO_UNITARIO" id="PRECIO_UNITARIO" value="<?php echo $precio_unitario; ?>" required />
        </div>
        <div>
          <label for="TIPO_DE_PAGO">Tipo de Pago:</label>
          <select name="TIPO_DE_PAGO" id="TIPO_DE_PAGO">
            <option value="EFECTIVO" <?php if ($tipo_de_pago == 'EFECTIVO') echo 'selected'; ?>>Efectivo</option>
            <option value="CHEQUE" <?php if ($tipo_de_pago == 'CHEQUE') echo 'selected'; ?>>Cheque</option>
            <option value="TARJETA" <?php if ($tipo_de_pago == 'TARJETA') echo 'selected'; ?>>Tarjeta</option>
          </select>
        </div>
        <div>
          <label for="SUBTOTAL">Subtotal:</label>
          <input type="text" name="SUBTOTAL" id="SUBTOTAL" value="<?php echo $subtotal; ?>" required />
        </div>
        <div>
          <label for="DESCUENTO">Descuento:</label>
          <input type="text" name="DESCUENTO" id="DESCUENTO" value="<?php echo $descuento; ?>" required />
        </div>
        <div>
          <label for="IVA">IVA:</label>
          <input type="text" name="IVA" id="IVA" value="<?php echo $iva; ?>" required />
        </div>
        <div>
          <label for="NETO_A_PAFGAR">Neto a Pagar:</label>
          <input type="text" name="NETO_A_PAFGAR" id="NETO_A_PAFGAR" value="<?php echo $neto_a_pagar; ?>" required />
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
    $codigo_factura_cabeza = $_POST['FACTURACABEZA_COD'];
    $codigo_producto = $_POST['PRODUCTO_COD'];
    $cantidad = $_POST['CANTIDAD'];
    $precio_unitario = $_POST['PRECIO_UNITARIO'];
    $tipo_de_pago = $_POST['TIPO_DE_PAGO'];
    $subtotal = $_POST['SUBTOTAL'];
    $descuento = $_POST['DESCUENTO'];
    $iva = $_POST['IVA'];
    $neto_a_pagar = $_POST['NETO_A_PAFGAR'];
    $conexion = conexion();
    // Update
    $codigo = $_GET["cod"];
    $sql = "UPDATE pedidos_detalle SET FACTURACABEZA_COD = '$codigo_factura_cabeza', PRODUCTO_COD = $codigo_producto, CANTIDAD = $cantidad, PRECIO_UNITARIO = $precio_unitario, TIPO_DE_PAGO = '$tipo_de_pago', SUBTOTAL = $subtotal, DESCUENTO = $descuento, IVA = $iva, NETO_A_PAFGAR = $neto_a_pagar WHERE cod_pedidodetalle = $codigo;";
    mysqli_query($conexion, $sql) or die(err($conexion));
    echo "<p>¡Pedido_detalle actualizado correctamente!</p>";
    mysqli_close($conexion);
  }
  ?>
</body>

</html>