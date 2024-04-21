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
    $sql = "SELECT * FROM proveedores WHERE cod_proveedor = $codigo";
    $registros = mysqli_query($conexion, $sql) or die(err($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        $razon_social = $reg['RAZON_SOCIAL'];
        $tipo_documento = $reg['TIPO_DOCUMENTO'];
        $documento = $reg['DOCUMENTO'];
        $direccion = $reg['DIRECCION'];
        $telefono = $reg['TELEFONO'];
        $correo_electronico = $reg['CORREO_ELECTRONICO'];
        $ciudad = $reg['CIUDAD'];
        $nombre_representante = $reg['NOMBRE_REPRESENTANTE'];
        $telefono_representante = $reg['TELEFONO_REPRESENTANTE'];
        $correo_representante = $reg['CORREO_REPRESENTANTE'];
    ?>
    <main>
    <form action="" method="post">
      <div>
        <label for="RAZON_SOCIAL">Razón Social:</label>
        <input type="text" name="RAZON_SOCIAL" id="RAZON_SOCIAL" value="<?php echo $razon_social; ?>" required />
      </div>
      <div>
        <label for="TIPO_DOCUMENTO">Tipo de Documento:</label>
        <select name="TIPO_DOCUMENTO" id="TIPO_DOCUMENTO">
          <option value="NIT">NIT</option>
          <option value="RUT">RUT</option>
          <option value="CEDULA">Cédula</option>
        </select>
      </div>
      <div>
        <label for="DOCUMENTO">Documento:</label>
        <input type="text" name="DOCUMENTO" id="DOCUMENTO" value="<?php echo $documento; ?>" required />
      </div>
      <div>
        <label for="DIRECCION">Dirección:</label>
        <input type="text" name="DIRECCION" id="DIRECCION" value="<?php echo $direccion; ?>" required />
      </div>
      <div>
        <label for="TELEFONO">Teléfono:</label>
        <input type="text" name="TELEFONO" id="TELEFONO" value="<?php echo $telefono; ?>" required />
      </div>
      <div>
        <label for="CORREO_ELECTRONICO">Correo Electrónico:</label>
        <input type="email" name="CORREO_ELECTRONICO" id="CORREO_ELECTRONICO" value="<?php echo $correo_electronico; ?>" required />
      </div>
      <div>
        <label for="CIUDAD">Ciudad:</label>
        <input type="text" name="CIUDAD" id="CIUDAD" value="<?php echo $ciudad; ?>" required />
      </div>
      <div>
        <label for="NOMBRE_REPRESENTANTE">Nombre del Representante:</label>
        <input type="text" name="NOMBRE_REPRESENTANTE" id="NOMBRE_REPRESENTANTE" value="<?php echo $nombre_representante; ?>" required />
      </div>
      <div>
        <label for="TELEFONO_REPRESENTANTE">Teléfono del Representante:</label>
        <input type="text" name="TELEFONO_REPRESENTANTE" id="TELEFONO_REPRESENTANTE" value="<?php echo $telefono_representante; ?>" required />
      </div>
      <div>
        <label for="CORREO_REPRESENTANTE">Correo del Representante:</label>
        <input type="email" name="CORREO_REPRESENTANTE" id="CORREO_REPRESENTANTE" value="<?php echo $correo_representante; ?>" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
    </main>
    <?php
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $razon_social = $_POST['RAZON_SOCIAL'];
      $tipo_documento = $_POST['TIPO_DOCUMENTO'];
      $documento = $_POST['DOCUMENTO'];
      $direccion = $_POST['DIRECCION'];
      $telefono = $_POST['TELEFONO'];
      $correo_electronico = $_POST['CORREO_ELECTRONICO'];
      $ciudad = $_POST['CIUDAD'];
      $nombre_representante = $_POST['NOMBRE_REPRESENTANTE'];
      $telefono_representante = $_POST['TELEFONO_REPRESENTANTE'];
      $correo_representante = $_POST['CORREO_REPRESENTANTE'];
        $conexion = conexion();
        // Update
        $codigo = $_GET["cod"];
        $sql = "UPDATE proveedores SET RAZON_SOCIAL = '$razon_social', TIPO_DOCUMENTO = '$tipo_documento',    DOCUMENTO = '$documento', DIRECCION = '$direccion', TELEFONO = '$telefono', CORREO_ELECTRONICO = '$correo_electronico', CIUDAD = '$ciudad', NOMBRE_REPRESENTANTE = '$nombre_representante',        TELEFONO_REPRESENTANTE = '$telefono_representante', CORREO_REPRESENTANTE = '$correo_representante' WHERE cod_proveedor = $codigo;";
        mysqli_query($conexion, $sql) or die(err($conexion));
        echo "<p>¡Proveedor actualizado correctamente!</p>";
    }
    ?>
</body>

</html>