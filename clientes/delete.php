<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Calzado</title>
    <link rel='stylesheet' href='../style.css'>
</head>

<body>
    <main>
        <h2>Eliminado</h2>
        <?php
        include '../a-main.php';
        // Delete
        $conexion = conexion();
        $codigo = $_GET["cod"];
        $sql = "DELETE FROM clientes WHERE COD_CLIENTE = $codigo";
        mysqli_query($conexion, $sql) or die(err($conexion));
        echo "<p>cliente eliminado correctamente!</p>";
        mysqli_close($conexion);
        ?>
    </main>
</body>

</html>