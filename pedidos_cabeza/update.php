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
  $sql = "SELECT * FROM pedidos_cabeza WHERE cod_pedidocabeza = $codigo";
  $registros = mysqli_query($conexion, $sql) or die(err($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    $codigo_proveedor = $reg['COD_PROVEEDOR'];
    $fecha_pedido = $reg['FECHA_PEDIDO'];
    $fecha_entrega = $reg['FECHA_ENTREGA'];
  ?>
    <main>
      <h2>Modificar pedidos_cabeza</h2>
      <form action="" method="post">
        <div>
          <label for="COD_PROVEEDOR">Código de Proveedor:</label>
          <input type="text" name="COD_PROVEEDOR" id="COD_PROVEEDOR" value="<?php echo $codigo_proveedor; ?>" required />
        </div>
        <div>
          <label for="FECHA_PEDIDO">Fecha de Pedido:</label>
          <input type="date" name="FECHA_PEDIDO" id="FECHA_PEDIDO" value="<?php echo $fecha_pedido; ?>" required />
        </div>
        <div>
          <label for="FECHA_ENTREGA">Fecha de Entrega:</label>
          <input type="date" name="FECHA_ENTREGA" id="FECHA_ENTREGA" value="<?php echo $fecha_entrega; ?>" required />
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
    $codigo_proveedor = $_POST['COD_PROVEEDOR'];
    $fecha_pedido = $_POST['FECHA_PEDIDO'];
    $fecha_entrega = $_POST['FECHA_ENTREGA'];
    $conexion = conexion();
    // Update
    $codigo = $_GET["cod"];
    $sql = "UPDATE pedidos_cabeza SET COD_PROVEEDOR = '$codigo_proveedor', FECHA_PEDIDO = '$fecha_pedido',FECHA_ENTREGA = '$fecha_entrega' WHERE cod_pedidocabeza = $codigo;";
    mysqli_query($conexion, $sql) or die(err($conexion));
    echo "<p>¡factura_detalle actualizado correctamente!</p>";
    mysqli_close($conexion);
  }
  ?>
</body>

</html>