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
    <h1>Agregar cliente</h1>
    <form action="" method="post">
      <div>
        <label for="NOMBRE_CLIENTE">Nombre:</label>
        <input type="text" name="NOMBRE_CLIENTE" id="NOMBRE_CLIENTE" required />
      </div>
      <div>
        <label for="APELLIDO_CLIENTE">Apellido:</label>
        <input type="text" name="APELLIDO_CLIENTE" id="APELLIDO_CLIENTE" required />
      </div>
      <div>
        <label for="TIPO_DOCUMENTO">Tipo de Documento:</label>
        <select name="TIPO_DOCUMENTO" id="TIPO_DOCUMENTO">
          <option value="CC">Cédula de Ciudadanía</option>
          <option value="CE">Cédula de Extranjería</option>
          <option value="PASAPORTE">Pasaporte</option>
          <option value="PPT">Otro documento</option>
        </select>
      </div>
      <div>
        <label for="NO_DOCUMENTO">Número de Documento:</label>
        <input type="text" name="NO_DOCUMENTO" id="NO_DOCUMENTO" required />
      </div>
      <div>
        <label for="TELEFONO">Teléfono:</label>
        <input type="text" name="TELEFONO" id="TELEFONO" required />
      </div>
      <div>
        <label for="DIRECCION">Dirección:</label>
        <input type="text" name="DIRECCION" id="DIRECCION" required />
      </div>
      <div>
        <label for="CORREO_ELECTRONICO">Correo Electrónico:</label>
        <input type="email" name="CORREO_ELECTRONICO" id="CORREO_ELECTRONICO" required />
      </div>
      <div>
        <label for="SEXO">Sexo:</label>
        <select name="SEXO" id="SEXO">
          <option value="FEMENINO">Femenino</option>
          <option value="MASCULINO">Masculino</option>
        </select>
      </div>
      <div>
        <label for="EDAD">Edad:</label>
        <input type="text" name="EDAD" id="EDAD" pattern="[0-9]{1,2}" required />
      </div>
      <div>
        <label for="ESTADO_CIVIL">Estado Civil:</label>
        <select name="ESTADO_CIVIL" id="ESTADO_CIVIL">
          <option value="SOLTERO">Soltero</option>
          <option value="CASADO">Casado</option>
          <option value="SEPARADO">Separado</option>
          <option value="VIUDO">Viudo</option>
          <option value="UNION LIBRE">Unión Libre</option>
        </select>
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
    <?php
    include '../a-main.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre_cliente = $_POST['NOMBRE_CLIENTE'];
      $apellido_cliente = $_POST['APELLIDO_CLIENTE'];
      $tipo_documento = $_POST['TIPO_DOCUMENTO'];
      $numero_documento = $_POST['NO_DOCUMENTO'];
      $telefono = $_POST['TELEFONO'];
      $direccion = $_POST['DIRECCION'];
      $correo_electronico = $_POST['CORREO_ELECTRONICO'];
      $sexo = $_POST['SEXO'];
      $edad = $_POST['EDAD'];
      $estado_civil = $_POST['ESTADO_CIVIL'];
      $conexion = conexion();
      $sql = "INSERT INTO clientes (NOMBRE_CLIENTE, APELLIDO_CLIENTE, TIPO_DOCUMENTO, NO_DOCUMENTO, TELEFONO, DIRECCION, CORREO_ELECTRONICO, SEXO, EDAD, ESTADO_CIVIL)
    VALUES ('$nombre_cliente', '$apellido_cliente', '$tipo_documento', '$numero_documento', '$telefono', '$direccion', '$correo_electronico', '$sexo', '$edad', '$estado_civil')";
      mysqli_query($conexion, $sql) or die(err($conexion));
      echo "<p>cliente guardado correctamente!</p>";
    }
    ?>
  </main>
</body>

</html>