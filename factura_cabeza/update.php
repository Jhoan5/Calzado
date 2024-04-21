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
  $sql = "SELECT * FROM factura_cabeza WHERE cod_factura = $codigo";
  $registros = mysqli_query($conexion, $sql) or die(err($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    $fecha_expedicion = $reg['FECHA_EXPEDICION'];
    $fecha_entrega = $reg['FECHA_ENTREGA'];
    $codigo_cliente = $reg['COD_CLIENTE'];
    $codigo_empleado = $reg['COD_EMPLEADO'];
  ?>
    <main>
      <h2>Modificar factura_cabeza</h2>
      <form action="" method="post">
        <div>
          <label for="FECHA_EXPEDICION">Fecha de Expedición:</label>
          <input type="date" name="FECHA_EXPEDICION" id="FECHA_EXPEDICION" value="<?php echo $fecha_expedicion; ?>" required />
        </div>
        <div>
          <label for="FECHA_ENTREGA">Fecha de Entrega:</label>
          <input type="date" name="FECHA_ENTREGA" id="FECHA_ENTREGA" value="<?php echo $fecha_entrega; ?>" required />
        </div>
        <div>
          <label for="COD_CLIENTE">Código de Cliente:</label>
          <input type="text" name="COD_CLIENTE" id="COD_CLIENTE" value="<?php echo $codigo_cliente; ?>" required />
        </div>
        <div>
          <label for="COD_EMPLEADO">Código de Empleado:</label>
          <input type="text" name="COD_EMPLEADO" id="COD_EMPLEADO" value="<?php echo $codigo_empleado; ?>" required />
        </div>
        <div>
          <button type="submit">Guardar</button>
        </div>
      </form>
    </main>
  <?php
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_expedicion = $_POST['FECHA_EXPEDICION'];
    $fecha_entrega = $_POST['FECHA_ENTREGA'];
    $codigo_cliente = $_POST['COD_CLIENTE'];
    $codigo_empleado = $_POST['COD_EMPLEADO'];
    $conexion = conexion();
    // Update
    $codigo = $_GET["cod"];
    $sql = "UPDATE factura_cabeza SET FECHA_EXPEDICION = '$fecha_expedicion',FECHA_ENTREGA = '$fecha_entrega',COD_CLIENTE = $codigo_cliente,COD_EMPLEADO = $codigo_empleado WHERE cod_factura = $codigo;";
    mysqli_query($conexion, $sql) or die(err($conexion));
    echo "<p>¡Factura_cabeza actualizado correctamente!</p>";
    mysqli_close($conexion);
  }
  ?>
</body>

</html>