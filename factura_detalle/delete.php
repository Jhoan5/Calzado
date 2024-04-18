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
        <h1>Eliminado</h1>
        <?php
        include '../a-main.php';
        # Delete
        $conexion = conexion();
        $codigo = $_GET["cod"];
        $sql = "DELETE FROM factura_detalle WHERE COD_FACTURA_DETALLE = $codigo";
        mysqli_query($conexion, $sql) or die(err($conexion));
        echo "<p>factura detalle eliminado correctamente!</p>";
        ?>
    </main>
</body>

</html>