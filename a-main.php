<?php
# mysqli_connect
function conexion()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "calzado";
    return mysqli_connect($servername, $username, $password, $bdname);
}

function err($conexion)
{
    return "Error: " . mysqli_error($conexion);
}
function make_table($arr, $registros, $tbname, $cod = null)
{
    // Iniciar la tabla
    echo "<table>";
    echo "<caption>Lista $tbname</caption>";
    // Encabezados de la tabla
    echo "<thead><tr>";
    foreach ($arr as $columna) {
        echo "<th>$columna</th>";
    }
    echo "<th>EDITAR</th><th>BORRAR</th>";
    echo "</tr></thead>";

    // Cuerpo de la tabla
    echo "<tbody>";
    while ($reg = mysqli_fetch_assoc($registros)) {
        echo "<tr>";
        foreach ($arr as $columna) {
            echo "<td>{$reg[$columna]}</td>";
        }
        if ($cod == null) {
            $cod = $reg[strtoupper("cod_" . substr($tbname, 0, -1))];
        }
        echo "<td><a href='update.php?cod=$cod'>Editar</a></td>"
            . "<td><a href='delete.php?cod=$cod'>Borrar</a></td>";
        echo "</tr>";
    }
    echo "</tbody>";

    // Cerrar la tabla
    echo "</table>";
}
