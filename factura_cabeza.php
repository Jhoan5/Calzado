<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_expedicion = $_POST['FECHA_EXPEDICION'];
    $fecha_entrega = $_POST['FECHA_ENTREGA'];
    $codigo_cliente = $_POST['COD_CLIENTE'];
    $codigo_empleado = $_POST['COD_EMPLEADO'];

    echo "Fecha de Expedición: " . $fecha_expedicion . "<br>";
    echo "Fecha de Entrega: " . $fecha_entrega . "<br>";
    echo "Código de Cliente: " . $codigo_cliente . "<br>";
    echo "Código de Empleado: " . $codigo_empleado . "<br>";
}
