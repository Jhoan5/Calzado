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
  $sql = "SELECT * FROM empleados WHERE cod_empleado = $codigo";
  $registros = mysqli_query($conexion, $sql) or die(err($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    $nombre_empleado = $reg['NOMBRE_EMPLEADO'];
    $apellido_empleado = $reg['APELLIDO_EMPLEADO'];
    $estado_civil = $reg['ESTADO_CIVIL'];
    $tipo_documento = $reg['TIPO_DOCUMENTO'];
    $numero_documento = $reg['NO_DOCUMENTO'];
    $direccion_residencia = $reg['DIRECCION_RESIDENCIA'];
    $fecha_nacimiento = $reg['FECHA_NACIMIENTO'];
    $sexo = $reg['SEXO'];
    $correo_electronico = $reg['CORREO_ELECTRONICO'];
    $tipo_contrato = $reg['TIPO_CONTRATO'];
    $jornada = $reg['JORNADA'];
    $rh = $reg['RH'];
    $nivel_formacion = $reg['FORMACION'];
    $eps = $reg['EPS'];
    $codigo_cargo = $reg['COD_CARGO'];
    $numero_cuenta = $reg['NUMERO_CUENTA'];
  ?>
    <main>
      <h2>Modificar empleado</h2>
      <form action="" method="post">
        <div>
          <label for="NOMBRE_EMPLEADO">Nombre:</label>
          <input type="text" name="NOMBRE_EMPLEADO" id="NOMBRE_EMPLEADO" value="<?php echo $nombre_empleado; ?>" required />
        </div>
        <div>
          <label for="APELLIDO_EMPLEADO">Apellido:</label>
          <input type="text" name="APELLIDO_EMPLEADO" id="APELLIDO_EMPLEADO" value="<?php echo $apellido_empleado; ?>" required />
        </div>
        <div>
          <label for="ESTADO_CIVIL">Estado Civil:</label>
          <select name="ESTADO_CIVIL" id="ESTADO_CIVIL">
            <option value="SOLTERO" <?php if ($estado_civil == 'SOLTERO') echo 'selected'; ?>>Soltero</option>
            <option value="CASADO" <?php if ($estado_civil == 'CASADO') echo 'selected'; ?>>Casado</option>
            <option value="SEPARADO" <?php if ($estado_civil == 'SEPARADO') echo 'selected'; ?>>Separado</option>
            <option value="VIUDO" <?php if ($estado_civil == 'VIUDO') echo 'selected'; ?>>Viudo</option>
            <option value="UNION_LIBRE" <?php if ($estado_civil == 'UNION_LIBRE') echo 'selected'; ?>>Unión Libre</option>
          </select>
        </div>
        <div>
          <label for="TIPO_DOCUMENTO">Tipo de Documento:</label>
          <select name="TIPO_DOCUMENTO" id="TIPO_DOCUMENTO">
            <option value="CC" <?php if ($tipo_documento == 'CC') echo 'selected'; ?>>Cédula de Ciudadanía</option>
            <option value="CE" <?php if ($tipo_documento == 'CE') echo 'selected'; ?>>Cédula de Extranjería</option>
            <option value="PASAPORTE" <?php if ($tipo_documento == 'PASAPORTE') echo 'selected'; ?>>Pasaporte</option>
            <option value="PPT" <?php if ($tipo_documento == 'PPT') echo 'selected'; ?>>Otro documento</option>
          </select>
        </div>
        <div>
          <label for="NO_DOCUMENTO">Número de Documento:</label>
          <input type="text" name="NO_DOCUMENTO" id="NO_DOCUMENTO" value="<?php echo $numero_documento ?>" required />
        </div>
        <div>
          <label for="DIRECCION_RESIDENCIA">Dirección de Residencia:</label>
          <input type="text" name="DIRECCION_RESIDENCIA" id="DIRECCION_RESIDENCIA" value="<?php echo $direccion_residencia; ?>" required />
        </div>
        <div>
          <label for="FECHA_NACIMIENTO">Fecha de Nacimiento:</label>
          <input type="date" name="FECHA_NACIMIENTO" id="FECHA_NACIMIENTO" value="<?php echo $fecha_nacimiento; ?>" required />
        </div>
        <div>
          <label for="SEXO">Sexo:</label>
          <select name="SEXO" id="SEXO">
            <option value="FEMENINO" <?php if ($sexo == 'FEMENINO') echo 'selected'; ?>>Femenino</option>
            <option value="MASCULINO" <?php if ($sexo == 'MASCULINO') echo 'selected'; ?>>Masculino</option>
          </select>
        </div>
        <div>
          <label for="CORREO_ELECTRONICO">Correo Electrónico:</label>
          <input type="email" name="CORREO_ELECTRONICO" id="CORREO_ELECTRONICO" value="<?php echo $correo_electronico; ?>" required />
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
            <option value="DIURNA" <?php if ($jornada == 'DIURNA') echo 'selected'; ?>>Diurna</option>
            <option value="NOCTURNA" <?php if ($jornada == 'NOCTURNA') echo 'selected'; ?>>Nocturna</option>
            <option value="FESTIVA" <?php if ($jornada == 'FESTIVA') echo 'selected'; ?>>Festiva</option>
          </select>
        </div>
        <div>
          <label for="RH">Tipo de RH:</label>
          <select name="RH" id="RH">
            <option value="A" <?php if ($rh == 'A') echo 'selected'; ?>>A</option>
          </select>
        </div>
        <div>
          <label for="FORMACION">Nivel de Formación:</label>
          <select name="FORMACION" id="FORMACION">
            <option value="PRIMARIA" <?php if ($nivel_formacion == 'PRIMARIA') echo 'selected'; ?>>Primaria</option>
            <option value="BACHILLER" <?php if ($nivel_formacion == 'BACHILLER') echo 'selected'; ?>>Bachiller</option>
            <option value="TÉCNICO" <?php if ($nivel_formacion == 'TÉCNICO') echo 'selected'; ?>>Técnico</option>
            <option value="PROFESIONAL" <?php if ($nivel_formacion == 'PROFESIONAL') echo 'selected'; ?>>Profesional</option>
          </select>
        </div>
        <div>
          <label for="EPS">EPS:</label>
          <select name="EPS" id="EPS">
            <option value="NUEVA_EPS" <?php if ($eps == 'NUEVA_EPS') echo 'selected'; ?>>Nueva EPS</option>
            <option value="MEDIMAS" <?php if ($eps == 'MEDIMAS') echo 'selected'; ?>>Medimás</option>
            <option value="COOMEVA" <?php if ($eps == 'COOMEVA') echo 'selected'; ?>>Coomeva</option>
            <option value="COMPENSAR" <?php if ($eps == 'COMPENSAR') echo 'selected'; ?>>Compensar</option>
            <option value="SANITAS" <?php if ($eps == 'SANITAS') echo 'selected'; ?>>Sanitas</option>
            <option value="SURA" <?php if ($eps == 'SURA') echo 'selected'; ?>>Sura</option>
            <option value="SALUD_TOTAL" <?php if ($eps == 'SALUD_TOTAL') echo 'selected'; ?>>Salud Total</option>
          </select>
        </div>
        <div>
          <label for="COD_CARGO">Código de Cargo:</label>
          <input type="text" name="COD_CARGO" id="COD_CARGO" value="<?php echo $codigo_cargo; ?>" required />
        </div>
        <div>
          <label for="NUMERO_CUENTA">Número de Cuenta:</label>
          <input type="text" name="NUMERO_CUENTA" id="NUMERO_CUENTA" value="<?php echo $numero_cuenta; ?>" required />
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
    // Update
    $codigo = $_GET["cod"];
    $sql = "UPDATE empleados SET NOMBRE_EMPLEADO = '$nombre_empleado',APELLIDO_EMPLEADO ='$apellido_empleado', ESTADO_CIVIL = '$estado_civil', TIPO_DOCUMENTO = '$tipo_documento', NO_DOCUMENTO = '$numero_documento', DIRECCION_RESIDENCIA = '$direccion_residencia', FECHA_NACIMIENTO = '$fecha_nacimiento', SEXO = '$sexo', CORREO_ELECTRONICO = '$correo_electronico', TIPO_CONTRATO = '$tipo_contrato', JORNADA = '$jornada', RH = '$rh', FORMACION = '$nivel_formacion', EPS = '$eps',     COD_CARGO = '$codigo_cargo', NUMERO_CUENTA = '$numero_cuenta' WHERE cod_empleado = $codigo;";
    mysqli_query($conexion, $sql) or die(err($conexion));
    echo "<p>¡Empleado actualizado correctamente!</p>";
    mysqli_close($conexion);
  }
  ?>
</body>

</html>