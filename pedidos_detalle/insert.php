<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calzado</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <form action="" method="post">
      <div>
        <label for="FACTURACABEZA_COD">Código de Factura Cabeza:</label>
        <input type="text" name="FACTURACABEZA_COD" id="FACTURACABEZA_COD" required />
      </div>
      <div>
        <label for="PRODUCTO_COD">Código de Producto:</label>
        <input type="text" name="PRODUCTO_COD" id="PRODUCTO_COD" required />
      </div>
      <div>
        <label for="CANTIDAD">Cantidad:</label>
        <input type="text" name="CANTIDAD" id="CANTIDAD" required />
      </div>
      <div>
        <label for="PRECIO_UNITARIO">Precio Unitario:</label>
        <input type="text" name="PRECIO_UNITARIO" id="PRECIO_UNITARIO" required />
      </div>
      <div>
        <label for="TIPO_DE_PAGO">Tipo de Pago:</label>
        <select name="TIPO_DE_PAGO" id="TIPO_DE_PAGO">
          <option value="EFECTIVO">Efectivo</option>
          <option value="CHEQUE">Cheque</option>
          <option value="TARJETA">Tarjeta</option>
        </select>
      </div>
      <div>
        <label for="SUBTOTAL">Subtotal:</label>
        <input type="text" name="SUBTOTAL" id="SUBTOTAL" required />
      </div>
      <div>
        <label for="DESCUENTO">Descuento:</label>
        <input type="text" name="DESCUENTO" id="DESCUENTO" required />
      </div>
      <div>
        <label for="IVA">IVA:</label>
        <input type="text" name="IVA" id="IVA" required />
      </div>
      <div>
        <label for="NETO_A_PAFGAR">Neto a Pagar:</label>
        <input type="text" name="NETO_A_PAFGAR" id="NETO_A_PAFGAR" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
    <?php
    include '../a-main.php';
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
      $sql = "INSERT INTO pedidos_detalle (FACTURACABEZA_COD, PRODUCTO_COD, CANTIDAD, PRECIO_UNITARIO,
    TIPO_DE_PAGO, SUBTOTAL, DESCUENTO, IVA, NETO_A_PAFGAR)
    VALUES ('$codigo_factura_cabeza', $codigo_producto, $cantidad, $precio_unitario,
    '$tipo_de_pago', $subtotal, $descuento, $iva, $neto_a_pagar)";
      mysqli_query($conexion, $sql) or die(err($conexion));
    }
    ?>
  </main>
</body>

</html>