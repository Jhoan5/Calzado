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
    <h1>Agregar productos</h1>
    <form action="" method="post">
      <div>
        <label for="COD_PROVEEDOR">Código de Proveedor:</label>
        <input type="text" name="COD_PROVEEDOR" id="COD_PROVEEDOR" required />
      </div>
      <div>
        <label for="Clasificacion">Clasificación:</label>
        <select name="Clasificacion" id="Clasificacion">
          <option value="vas vendido">Más Vendido</option>
          <option value="menos vendido">Menos Vendido</option>
          <option value="mas economico">Más Económico</option>
          <option value="comida">Comida</option>
          <option value="electrodomesticos">Electrodomésticos</option>
          <option value="hogar">Hogar</option>
        </select>
      </div>
      <div>
        <label for="Descripcion">Descripción:</label>
        <input type="text" name="Descripcion" id="Descripcion" required />
      </div>
      <div>
        <label for="Cantidad_disponible">Cantidad Disponible:</label>
        <input type="text" name="Cantidad_disponible" id="Cantidad_disponible" required />
      </div>
      <div>
        <label for="PRECIO_COMPRA">Precio de Compra:</label>
        <input type="text" name="PRECIO_COMPRA" id="PRECIO_COMPRA" required />
      </div>
      <div>
        <label for="PRECIO_VENTA">Precio de Venta:</label>
        <input type="text" name="PRECIO_VENTA" id="PRECIO_VENTA" required />
      </div>
      <div>
        <label for="FECHA_DE_INGRESO">Fecha de Ingreso:</label>
        <input type="date" name="FECHA_DE_INGRESO" id="FECHA_DE_INGRESO" required />
      </div>
      <div>
        <label for="FECHA_DE_EXPIRACION">Fecha de Expiración:</label>
        <input type="date" name="FECHA_DE_EXPIRACION" id="FECHA_DE_EXPIRACION" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
    <?php
    include '../a-main.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $codigo_proveedor = $_POST['COD_PROVEEDOR'];
      $clasificacion = $_POST['Clasificacion'];
      $descripcion = $_POST['Descripcion'];
      $cantidad_disponible = $_POST['Cantidad_disponible'];
      $precio_compra = $_POST['PRECIO_COMPRA'];
      $precio_venta = $_POST['PRECIO_VENTA'];
      $fecha_ingreso = $_POST['FECHA_DE_INGRESO'];
      $fecha_expiracion = $_POST['FECHA_DE_EXPIRACION'];
      $conexion = conexion();
      $sql = "INSERT INTO productos (COD_PROVEEDOR, Clasificacion, Descripcion, Cantidad_disponible,
    PRECIO_COMPRA, PRECIO_VENTA, FECHA_DE_INGRESO, FECHA_DE_EXPIRACION)
    VALUES ($codigo_proveedor, '$clasificacion', '$descripcion', $cantidad_disponible,
    $precio_compra, $precio_venta, '$fecha_ingreso', '$fecha_expiracion')";
      mysqli_query($conexion, $sql) or die(err($conexion));
      echo "<p>producto guardado correctamente!</p>";
    }
    ?>
  </main>
</body>

</html>