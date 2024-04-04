<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $razon_social = $_POST['RAZON_SOCIAL'];
    $tipo_documento = $_POST['TIPO_DOCUMENTO'];
    $documento = $_POST['DOCUMENTO'];
    $direccion = $_POST['DIRECCION'];
    $telefono = $_POST['TELEFONO'];
    $correo_electronico = $_POST['CORREO_ELECTRONICO'];
    $ciudad = $_POST['CIUDAD'];
    $nombre_representante = $_POST['NOMBRE_REPRESENTANTE'];
    $telefono_representante = $_POST['TELEFONO_REPRESENTANTE'];
    $correo_representante = $_POST['CORREO_REPRESENTANTE'];

    echo "Razón Social: " . $razon_social . "<br>";
    echo "Tipo de Documento: " . $tipo_documento . "<br>";
    echo "Documento: " . $documento . "<br>";
    echo "Dirección: " . $direccion . "<br>";
    echo "Teléfono: " . $telefono . "<br>";
    echo "Correo Electrónico: " . $correo_electronico . "<br>";
    echo "Ciudad: " . $ciudad . "<br>";
    echo "Nombre del Representante: " . $nombre_representante . "<br>";
    echo "Teléfono del Representante: " . $telefono_representante . "<br>";
    echo "Correo del Representante: " . $correo_representante . "<br>";
}
