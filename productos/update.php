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
    $sql = "SELECT * FROM productos WHERE cod_producto = $codigo";
    $registros = mysqli_query($conexion, $sql) or die(err($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        $codigo_proveedor = $reg['COD_PROVEEDOR'];
        $clasificacion = $reg['Clasificacion'];
        $descripcion = $reg['Descripcion'];
        $cantidad_disponible = $reg['Cantidad_disponible'];
        $precio_compra = $reg['PRECIO_COMPRA'];
        $precio_venta = $reg['PRECIO_VENTA'];
        $fecha_ingreso = $reg['FECHA_DE_INGRESO'];
        $fecha_expiracion = $reg['FECHA_DE_EXPIRACION'];
    ?>
<main>
<form action="" method="post">
      <div>
        <label for="COD_PROVEEDOR">Código de Proveedor:</label>
        <input type="text" name="COD_PROVEEDOR" id="COD_PROVEEDOR" value="<?php echo $codigo_proveedor; ?>" required />
      </div>
      <div>
        <label for="Clasificacion">Clasificación:</label>
        <select name="Clasificacion" id="Clasificacion">
          <option value="vas vendido" <?php if ($clasificacion == 'vas vendido') echo 'selected'; ?>>Más Vendido</option>
          <option value="menos vendido" <?php if ($clasificacion == 'menos vendido') echo 'selected'; ?>>Menos Vendido</option>
          <option value="mas economico" <?php if ($clasificacion == 'mas economico') echo 'selected'; ?>>Más Económico</option>
          <option value="comida" <?php if ($clasificacion == 'comida') echo 'selected'; ?>>Comida</option>
          <option value="electrodomesticos" <?php if ($clasificacion == 'electrodomesticos') echo 'selected'; ?>>Electrodomésticos</option>
          <option value="hogar" <?php if ($clasificacion == 'hogar') echo 'selected'; ?>>Hogar</option>
        </select>
      </div>
      <div>
        <label for="Descripcion">Descripción:</label>
        <input type="text" name="Descripcion" id="Descripcion" value="<?php echo $descripcion; ?>" required />
      </div>
      <div>
        <label for="Cantidad_disponible">Cantidad Disponible:</label>
        <input type="text" name="Cantidad_disponible" id="Cantidad_disponible" value="<?php echo $cantidad_disponible; ?>" required />
      </div>
      <div>
        <label for="PRECIO_COMPRA">Precio de Compra:</label>
        <input type="text" name="PRECIO_COMPRA" id="PRECIO_COMPRA" value="<?php echo $precio_compra; ?>" required />
      </div>
      <div>
        <label for="PRECIO_VENTA">Precio de Venta:</label>
        <input type="text" name="PRECIO_VENTA" id="PRECIO_VENTA" value="<?php echo $precio_venta; ?>" required />
      </div>
      <div>
        <label for="FECHA_DE_INGRESO">Fecha de Ingreso:</label>
        <input type="date" name="FECHA_DE_INGRESO" id="FECHA_DE_INGRESO" value="<?php echo $fecha_ingreso; ?>" required />
      </div>
      <div>
        <label for="FECHA_DE_EXPIRACION">Fecha de Expiración:</label>
        <input type="date" name="FECHA_DE_EXPIRACION" id="FECHA_DE_EXPIRACION" value="<?php echo $fecha_expiracion; ?>" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
</main>
    <?php
    }
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
        // Update
        $codigo = $_GET["cod"];
        $sql = "UPDATE productos SET COD_PROVEEDOR = $codigo_proveedor,Clasificacion = '$clasificacion',Descripcion = '$descripcion',Cantidad_disponible = $cantidad_disponible, PRECIO_COMPRA = $precio_compra, PRECIO_VENTA = $precio_venta, FECHA_DE_INGRESO = '$fecha_ingreso', FECHA_DE_EXPIRACION = '$fecha_expiracion' WHERE cod_producto = $codigo;";
        mysqli_query($conexion, $sql) or die(err($conexion));
        echo "<p>¡Producto actualizado correctamente!</p>";
    }
    ?>
</body>

</html>