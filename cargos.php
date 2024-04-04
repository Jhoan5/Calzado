<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_cargo = $_POST['NOM_CARGO'];
    $ubicacion_cargo = $_POST['UBICACION_CARGO'];
    $salario_base = $_POST['SALARIO_BASE'];

    echo "Nombre del Cargo: " . $nombre_cargo . "<br>";
    echo "Ubicación del Cargo: " . $ubicacion_cargo . "<br>";
    echo "Salario Base: " . $salario_base . "<br>";
}
