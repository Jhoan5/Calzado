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
        <h2>Buscar empleado</h2>
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
        $arr = ["COD_EMPLEADO", "NOMBRE_EMPLEADO", "APELLIDO_EMPLEADO", "ESTADO_CIVIL", "TIPO_DOCUMENTO", "NO_DOCUMENTO", "DIRECCION_RESIDENCIA", "FECHA_NACIMIENTO", "SEXO", "CORREO_ELECTRONICO", "TIPO_CONTRATO", "JORNADA", "RH", "FORMACION", "EPS", "COD_CARGO", "NUMERO_CUENTA"];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["search"];
            $opcion = $_POST["opcion"];
            $conexion = conexion();
            if ($opcion == 'cod') {
                $sql = "SELECT * FROM empleados WHERE cod_empleado = $input";
            } elseif ($opcion == 'nombre') {
                $sql = "SELECT * FROM empleados WHERE nombre = $input";
            }
            $registros = mysqli_query($conexion, $sql) or die(err($conexion));
            make_table($arr, $registros, 'empleados');
        } else {
            $conexion = conexion();
            $sql = "SELECT * FROM empleados";
            $registros = mysqli_query($conexion, $sql) or die(err($conexion));
            make_table($arr, $registros, 'empleados');
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