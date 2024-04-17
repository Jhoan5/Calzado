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
        <label for="RAZON_SOCIAL">Razón Social:</label>
        <input type="text" name="RAZON_SOCIAL" id="RAZON_SOCIAL" required />
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
        <input type="text" name="DOCUMENTO" id="DOCUMENTO" required />
      </div>
      <div>
        <label for="DIRECCION">Dirección:</label>
        <input type="text" name="DIRECCION" id="DIRECCION" required />
      </div>
      <div>
        <label for="TELEFONO">Teléfono:</label>
        <input type="text" name="TELEFONO" id="TELEFONO" required />
      </div>
      <div>
        <label for="CORREO_ELECTRONICO">Correo Electrónico:</label>
        <input type="email" name="CORREO_ELECTRONICO" id="CORREO_ELECTRONICO" required />
      </div>
      <div>
        <label for="CIUDAD">Ciudad:</label>
        <input type="text" name="CIUDAD" id="CIUDAD" required />
      </div>
      <div>
        <label for="NOMBRE_REPRESENTANTE">Nombre del Representante:</label>
        <input type="text" name="NOMBRE_REPRESENTANTE" id="NOMBRE_REPRESENTANTE" required />
      </div>
      <div>
        <label for="TELEFONO_REPRESENTANTE">Teléfono del Representante:</label>
        <input type="text" name="TELEFONO_REPRESENTANTE" id="TELEFONO_REPRESENTANTE" required />
      </div>
      <div>
        <label for="CORREO_REPRESENTANTE">Correo del Representante:</label>
        <input type="email" name="CORREO_REPRESENTANTE" id="CORREO_REPRESENTANTE" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
    <?php
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
      $sql = "INSERT INTO proveedores (RAZON_SOCIAL, TIPO_DOCUMENTO, DOCUMENTO, DIRECCION, TELEFONO,
    CORREO_ELECTRONICO, CIUDAD, NOMBRE_REPRESENTANTE, TELEFONO_REPRESENTANTE, CORREO_REPRESENTANTE)
    VALUES ('$razon_social', '$tipo_documento', '$documento', '$direccion', '$telefono',
    '$correo_electronico', '$ciudad', '$nombre_representante', '$telefono_representante',
    '$correo_representante')";
      mysqli_query($conexion, $sql) or die(err($conexion));
    }
    ?>
  </main>
</body>

</html>