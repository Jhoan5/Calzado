<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_empleado = $_POST['COD_EMPLEADO'];
    $salario = $_POST['SALARIO'];
    $dias_trabajados = $_POST['DIAS_TRABAJADOS'];
    $salario_base = $_POST['SALARIO_BASE'];
    $tipo_horas_extras = $_POST['TIPO_HORAS_EXTRAS'];
    $cantidad_horas_extra = $_POST['CANTIDAD_HORAS_EXTRA'];
    $valor_horas_extras = $_POST['VALOR_HORAS_EXTRAS'];
    $comisiones = $_POST['COMISIONES'];
    $auxilio_transporte = $_POST['AUXILIO_TRANSPORTE'];
    $total_devengado = $_POST['TOTAL_DEVENGADO'];
    $salud = $_POST['SALUD'];
    $pension = $_POST['PENSION'];
    $prestamos = $_POST['PRESTAMOS'];
    $total_deducido = $_POST['TOTAL_DEDUCIDO'];
    $neto_pagar = $_POST['NETO_PAGAR'];

    echo "Código de Empleado: " . $codigo_empleado . "<br>";
    echo "Salario: " . $salario . "<br>";
    echo "Días Trabajados: " . $dias_trabajados . "<br>";
    echo "Salario Base: " . $salario_base . "<br>";
    echo "Tipo de Horas Extras: " . $tipo_horas_extras . "<br>";
    echo "Cantidad de Horas Extras: " . $cantidad_horas_extra . "<br>";
    echo "Valor de Horas Extras: " . $valor_horas_extras . "<br>";
    echo "Comisiones: " . $comisiones . "<br>";
    echo "Auxilio de Transporte: " . $auxilio_transporte . "<br>";
    echo "Total Devengado: " . $total_devengado . "<br>";
    echo "Salud: " . $salud . "<br>";
    echo "Pensión: " . $pension . "<br>";
    echo "Préstamos: " . $prestamos . "<br>";
    echo "Total Deducido: " . $total_deducido . "<br>";
    echo "Neto a Pagar: " . $neto_pagar . "<br>";
}
