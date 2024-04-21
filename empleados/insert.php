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
    <h2>Insertar empleado</h2>
    <form action="" method="post">
      <div>
        <label for="NOMBRE_EMPLEADO">Nombre:</label>
        <input type="text" name="NOMBRE_EMPLEADO" id="NOMBRE_EMPLEADO" required />
      </div>
      <div>
        <label for="APELLIDO_EMPLEADO">Apellido:</label>
        <input type="text" name="APELLIDO_EMPLEADO" id="APELLIDO_EMPLEADO" required />
      </div>
      <div>
        <label for="ESTADO_CIVIL">Estado Civil:</label>
        <select name="ESTADO_CIVIL" id="ESTADO_CIVIL">
          <option value="SOLTERO">Soltero</option>
          <option value="CASADO">Casado</option>
          <option value="SEPARADO">Separado</option>
          <option value="VIUDO">Viudo</option>
          <option value="UNION_LIBRE">Unión Libre</option>
        </select>
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
        <label for="DIRECCION_RESIDENCIA">Dirección de Residencia:</label>
        <input type="text" name="DIRECCION_RESIDENCIA" id="DIRECCION_RESIDENCIA" required />
      </div>
      <div>
        <label for="FECHA_NACIMIENTO">Fecha de Nacimiento:</label>
        <input type="date" name="FECHA_NACIMIENTO" id="FECHA_NACIMIENTO" required />
      </div>
      <div>
        <label for="SEXO">Sexo:</label>
        <select name="SEXO" id="SEXO">
          <option value="FEMENINO">Femenino</option>
          <option value="MASCULINO">Masculino</option>
        </select>
      </div>
      <div>
        <label for="CORREO_ELECTRONICO">Correo Electrónico:</label>
        <input type="email" name="CORREO_ELECTRONICO" id="CORREO_ELECTRONICO" required />
      </div>
      <div>
        <label for="TIPO_CONTRATO">Tipo de Contrato:</label>
        <select name="TIPO_CONTRATO" id="TIPO_CONTRATO">
          <option value="INDEFINIDO">Indefinido</option>
          <option value="CONTRATO">Contrato</option>
        </select>
      </div>
      <div>
        <label for="JORNADA">Jornada:</label>
        <select name="JORNADA" id="JORNADA">
          <option value="DIURNA">Diurna</option>
          <option value="NOCTURNA">Nocturna</option>
          <option value="FESTIVA">Festiva</option>
        </select>
      </div>
      <div>
        <label for="RH">Tipo de RH:</label>
        <select name="RH" id="RH">
          <option value="A">A</option>
        </select>
      </div>
      <div>
        <label for="FORMACION">Nivel de Formación:</label>
        <select name="FORMACION" id="FORMACION">
          <option value="PRIMARIA">Primaria</option>
          <option value="BACHILLER">Bachiller</option>
          <option value="TÉCNICO">Técnico</option>
          <option value="PROFESIONAL">Profesional</option>
        </select>
      </div>
      <div>
        <label for="EPS">EPS:</label>
        <select name="EPS" id="EPS">
          <option value="NUEVA_EPS">Nueva EPS</option>
          <option value="MEDIMAS">Medimás</option>
          <option value="COOMEVA">Coomeva</option>
          <option value="COMPENSAR">Compensar</option>
          <option value="SANITAS">Sanitas</option>
          <option value="SURA">Sura</option>
          <option value="SALUD_TOTAL">Salud Total</option>
        </select>
      </div>
      <div>
        <label for="COD_CARGO">Código de Cargo:</label>
        <input type="text" name="COD_CARGO" id="COD_CARGO" required />
      </div>
      <div>
        <label for="NUMERO_CUENTA">Número de Cuenta:</label>
        <input type="text" name="NUMERO_CUENTA" id="NUMERO_CUENTA" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
    <?php
    include '../a-main.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre_empleado = $_POST['NOMBRE_EMPLEADO'];
      $apellido_empleado = $_POST['APELLIDO_EMPLEADO'];
      $estado_civil = $_POST['ESTADO_CIVIL'];
      $tipo_documento = $_POST['TIPO_DOCUMENTO'];
      $numero_documento = $_POST['NO_DOCUMENTO'];
      $direccion_residencia = $_POST['DIRECCION_RESIDENCIA'];
      $fecha_nacimiento = $_POST['FECHA_NACIMIENTO'];
      $sexo = $_POST['SEXO'];
      $correo_electronico = $_POST['CORREO_ELECTRONICO'];
      $tipo_contrato = $_POST['TIPO_CONTRATO'];
      $jornada = $_POST['JORNADA'];
      $rh = $_POST['RH'];
      $nivel_formacion = $_POST['FORMACION'];
      $eps = $_POST['EPS'];
      $codigo_cargo = $_POST['COD_CARGO'];
      $numero_cuenta = $_POST['NUMERO_CUENTA'];
      $conexion = conexion();
      $sql = "INSERT INTO empleados (NOMBRE_EMPLEADO, APELLIDO_EMPLEADO, ESTADO_CIVIL, TIPO_DOCUMENTO, NO_DOCUMENTO, DIRECCION_RESIDENCIA, FECHA_NACIMIENTO, SEXO, CORREO_ELECTRONICO, TIPO_CONTRATO, JORNADA, RH, FORMACION, EPS, COD_CARGO, NUMERO_CUENTA)
        VALUES ('$nombre_empleado', '$apellido_empleado', '$estado_civil', '$tipo_documento', '$numero_documento', '$direccion_residencia', '$fecha_nacimiento', '$sexo', '$correo_electronico', '$tipo_contrato', '$jornada', '$rh', '$nivel_formacion', '$eps', '$codigo_cargo', '$numero_cuenta')";
      mysqli_query($conexion, $sql) or die(err($conexion));
      echo "<p>empleado guardado correctamente!</p>";
      mysqli_close($conexion);
    }

    ?>
  </main>
</body>

</html>