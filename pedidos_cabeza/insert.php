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
    <h1>Agregar pedidos_cabeza</h1>
    <form action="" method="post">
      <div>
        <label for="COD_PROVEEDOR">Código de Proveedor:</label>
        <input type="text" name="COD_PROVEEDOR" id="COD_PROVEEDOR" required />
      </div>
      <div>
        <label for="FECHA_PEDIDO">Fecha de Pedido:</label>
        <input type="date" name="FECHA_PEDIDO" id="FECHA_PEDIDO" required />
      </div>
      <div>
        <label for="FECHA_ENTREGA">Fecha de Entrega:</label>
        <input type="date" name="FECHA_ENTREGA" id="FECHA_ENTREGA" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
  </main>
  <?php
  include '../a-main.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_proveedor = $_POST['COD_PROVEEDOR'];
    $fecha_pedido = $_POST['FECHA_PEDIDO'];
    $fecha_entrega = $_POST['FECHA_ENTREGA'];
    $conexion = conexion();
    $sql = "INSERT INTO pedidos_cabeza (COD_PROVEEDOR, FECHA_PEDIDO, FECHA_ENTREGA)
    VALUES ('$codigo_proveedor', '$fecha_pedido', '$fecha_entrega')";
    mysqli_query($conexion, $sql) or die(err($conexion));
  }
  ?>
</body>

</html>