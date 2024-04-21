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
        <h2>Buscar pedido_cabeza</h2>
        <form action="" method="POST">
            <div>
                <label for="opcion">Buscar por:</label>
                <select name="opcion" id="opcion">
                    <option value="cod">código</option>
                </select>
            </div>
            <div>
                <label for="search">Buscar: </label>
                <input type="search" name="search" id="search" placeholder="Buscar" />
            </div>
            <div>
                <input type="submit" value="Buscar" />
            </div>
        </form>
        <?php
        include '../a-main.php';
        $arr = ["COD_PEDIDOCABEZA", "COD_PROVEEDOR", "FECHA_PEDIDO", "FECHA_ENTREGA"];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["search"];
            $opcion = $_POST["opcion"];
            $conexion = conexion();
            if ($opcion == 'cod') {
                $sql = "SELECT * FROM pedidos_cabeza WHERE cod_pedidocabeza= $input";
            } elseif ($opcion == 'nombre') {
                $sql = "SELECT * FROM pedidos_cabeza WHERE nombre = $input";
            }
            $registros = mysqli_query($conexion, $sql) or die(err($conexion));
            make_table($arr, $registros, 'pedidos_cabeza', 'cod_pedidocabeza');
            mysqli_close($conexion);
        } else {
            $conexion = conexion();
            $sql = "SELECT * FROM pedidos_cabeza";
            $registros = mysqli_query($conexion, $sql) or die(err($conexion));
            make_table($arr, $registros, 'pedidos_cabeza', 'cod_pedidocabeza');
            mysqli_close($conexion);
        }
        ?>
    </main>
    <script>
        const opcion = document.getElementById('opcion'),
            input = document.getElementById('search');

        opcion.addEventListener('change', function() {
            opcion.value === 'cod' ? input.pattern = '[0-9]+' : input.pattern = '';

        });
    </script>

</body>

</html>