<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_cliente = $_POST['NOMBRE_CLIENTE'];
    $apellido_cliente = $_POST['APELLIDO_CLIENTE'];
    $tipo_documento = $_POST['TIPO_DOCUMENTO'];
    $numero_documento = $_POST['NO_DOCUMENTO'];
    $telefono = $_POST['TELEFONO'];
    $direccion = $_POST['DIRECCION'];
    $correo_electronico = $_POST['CORREO_ELECTRONICO'];
    $sexo = $_POST['SEXO'];
    $edad = $_POST['EDAD'];
    $estado_civil = $_POST['ESTADO_CIVIL'];

    echo "Nombre: " . $nombre_cliente . "<br>";
    echo "Apellido: " . $apellido_cliente . "<br>";
    echo "Tipo de Documento: " . $tipo_documento . "<br>";
    echo "Número de Documento: " . $numero_documento . "<br>";
    echo "Teléfono: " . $telefono . "<br>";
    echo "Dirección: " . $direccion . "<br>";
    echo "Correo Electrónico: " . $correo_electronico . "<br>";
    echo "Sexo: " . $sexo . "<br>";
    echo "Edad: " . $edad . "<br>";
    echo "Estado Civil: " . $estado_civil . "<br>";
}
