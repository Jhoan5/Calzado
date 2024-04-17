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
    $codigo = $_GET["cod_cargo"];
    $sql = "SELECT * FROM cargos WHERE cod_cargo = $codigo";
    $registros = mysqli_query($conexion, $sql) or die(err($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        $nombre_cargo = $reg['NOM_CARGO'];
        $ubicacion_cargo = $reg['UBICACION_CARGO'];
        $salario_base = $reg['SALARIO_BASE'];
    ?>
        <main>
            <form action="" method="POST">
                <div>
                    <label for="NOM_CARGO">Nombre del Cargo:</label>
                    <select name="NOM_CARGO" id="NOM_CARGO">
                        <option value="ADMINISTRADOR" <?php if ($nombre_cargo == 'ADMINISTRADOR') echo 'selected'; ?>>Administrador</option>
                        <option value="VENDEDOR" <?php if ($nombre_cargo == 'VENDEDOR') echo 'selected'; ?>>Vendedor</option>
                    </select>
                </div>
                <div>
                    <label for="UBICACION_CARGO">Ubicación del Cargo:</label>
                    <input type="text" name="UBICACION_CARGO" value="<?php echo $ubicacion_cargo; ?>" id="UBICACION_CARGO" required />
                </div>
                <div>
                    <label for="SALARIO_BASE">Salario Base:</label>
                    <input type="text" name="SALARIO_BASE" value="<?php echo $salario_base; ?>" id="SALARIO_BASE" pattern="[0-9]+" required />
                </div>
                <div>
                    <button type="submit">Guardar</button>
                </div>
            </form>
        </main>
    <?php
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_cargo = $_POST['NOM_CARGO'];
        $ubicacion_cargo = $_POST['UBICACION_CARGO'];
        $salario_base = $_POST['SALARIO_BASE'];
        $conexion = conexion();
        // Update
        $codigo = $_GET["cod_cargo"];
        $sql = "UPDATE cargos SET NOM_CARGO = '$nombre_cargo', UBICACION_CARGO = '$ubicacion_cargo', SALARIO_BASE = '$salario_base' WHERE COD_CARGO = '$codigo'";
        mysqli_query($conexion, $sql) or die(err($conexion));
        echo "<p>¡Cargo actualizado correctamente!</p>";
    }
    ?>
</body>

</html>