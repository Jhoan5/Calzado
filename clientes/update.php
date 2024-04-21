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
    include '../a-main.php'; // conexion() y err()
    $conexion = conexion();
    $codigo = $_GET["cod"];
    $sql = "SELECT * FROM clientes WHERE cod_cliente = $codigo";
    $registros = mysqli_query($conexion, $sql) or die(err($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        $nombre_cliente = $reg['NOMBRE_CLIENTE'];
        $apellido_cliente = $reg['APELLIDO_CLIENTE'];
        $tipo_documento = $reg['TIPO_DOCUMENTO'];
        $numero_documento = $reg['NO_DOCUMENTO'];
        $telefono = $reg['TELEFONO'];
        $direccion = $reg['DIRECCION'];
        $correo_electronico = $reg['CORREO_ELECTRONICO'];
        $sexo = $reg['SEXO'];
        $edad = $reg['EDAD'];
        $estado_civil = $reg['ESTADO_CIVIL'];
    ?>
        <main>
            <form action="" method="POST">
                <div>
                    <label for="NOMBRE_CLIENTE">Nombre:</label>
                    <input type="text" name="NOMBRE_CLIENTE" id="NOMBRE_CLIENTE" value="<?php echo $nombre_cliente; ?>" required />
                </div>
                <div>
                    <label for="APELLIDO_CLIENTE">Apellido:</label>
                    <input type="text" name="APELLIDO_CLIENTE" id="APELLIDO_CLIENTE" value="<?php echo $apellido_cliente; ?>" required />
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
                    <input type="text" name="NO_DOCUMENTO" id="NO_DOCUMENTO" value="<?php echo $numero_documento; ?>" required />
                </div>
                <div>
                    <label for="TELEFONO">Teléfono:</label>
                    <input type="text" name="TELEFONO" id="TELEFONO" value="<?php echo $telefono; ?>" required />
                </div>
                <div>
                    <label for="DIRECCION">Dirección:</label>
                    <input type="text" name="DIRECCION" id="DIRECCION" value="<?php echo $direccion; ?>" required />
                </div>
                <div>
                    <label for="CORREO_ELECTRONICO">Correo Electrónico:</label>
                    <input type="email" name="CORREO_ELECTRONICO" id="CORREO_ELECTRONICO" value="<?php echo $correo_electronico; ?>" required />
                </div>
                <div>
                    <label for="SEXO">Sexo:</label>
                    <select name="SEXO" id="SEXO">
                        <option value="FEMENINO" <?php if ($sexo == 'FEMENINO') echo 'selected'; ?>>Femenino</option>
                        <option value="MASCULINO" <?php if ($sexo == 'MASCULINO') echo 'selected'; ?>>Masculino</option>
                    </select>
                </div>
                <div>
                    <label for="EDAD">Edad:</label>
                    <input type="text" name="EDAD" id="EDAD" value="<?php echo $edad; ?>" pattern="[0-9]{1,2}" required />
                </div>
                <div>
                    <label for="ESTADO_CIVIL">Estado Civil:</label>
                    <select name="ESTADO_CIVIL" id="ESTADO_CIVIL">
                        <option value="SOLTERO" <?php if ($estado_civil == 'SOLTERO') echo 'selected'; ?>>Soltero</option>
                        <option value="CASADO" <?php if ($estado_civil == 'CASADO') echo 'selected'; ?>>Casado</option>
                        <option value="SEPARADO" <?php if ($estado_civil == 'SEPARADO') echo 'selected'; ?>>Separado</option>
                        <option value="VIUDO" <?php if ($estado_civil == 'VIUDO') echo 'selected'; ?>>Viudo</option>
                        <option value="UNION LIBRE" <?php if ($estado_civil == 'UNION LIBRE') echo 'selected'; ?>>Unión Libre</option>
                    </select>
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
        // Update
        $codigo = $_GET["cod"];
        $sql = "UPDATE clientes SET NOMBRE_CLIENTE = '$nombre_cliente', APELLIDO_CLIENTE = '$apellido_cliente', TIPO_DOCUMENTO = '$tipo_documento', NO_DOCUMENTO = '$numero_documento', TELEFONO = '$telefono', DIRECCION = '$direccion', CORREO_ELECTRONICO = '$correo_electronico', SEXO = '$sexo', EDAD = '$edad',
            ESTADO_CIVIL = '$estado_civil' WHERE COD_CLIENTE = $codigo;";
        mysqli_query($conexion, $sql) or die(err($conexion));
        echo "<p>cliente actualizado correctamente!</p>";
        mysqli_close($conexion);
    }
    ?>
</body>

</html>