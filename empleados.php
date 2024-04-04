<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_empleado = $_POST['NOMBRE_EMPLEADO'];
    $apellido_empleado = $_POST['APELLIDO_EMPLEADO'];
    $estado_civil = $_POST['ESTADO_CIVIL'];
    $tipo_documento = $_POST['TIPO_DOCUMENTO'];
    $numero_documento = $_POST['NO_DOCUMENTO'];
    $direccion_residencia = $_POST['DIRECCION_RESIDENCIA'];
    $fecha_nacimiento = $_POST['FECHA_NACIMIENTO'];
    $sexo = $_POST['SEXO'];
    $correo_electronico = $_POST['CORREO_ELECTRONICO'];
    $tipo_contrato = $_POST['TIPO_CONTRATO'];
    $jornada = $_POST['JORNADA'];
    $rh = $_POST['RH'];
    $nivel_formacion = $_POST['FORMACION'];
    $eps = $_POST['EPS'];
    $codigo_cargo = $_POST['COD_CARGO'];
    $numero_cuenta = $_POST['NUMERO_CUENTA'];

    echo "Nombre: " . $nombre_empleado . "<br>";
    echo "Apellido: " . $apellido_empleado . "<br>";
    echo "Estado Civil: " . $estado_civil . "<br>";
    echo "Tipo de Documento: " . $tipo_documento . "<br>";
    echo "Número de Documento: " . $numero_documento . "<br>";
    echo "Dirección de Residencia: " . $direccion_residencia . "<br>";
    echo "Fecha de Nacimiento: " . $fecha_nacimiento . "<br>";
    echo "Sexo: " . $sexo . "<br>";
    echo "Correo Electrónico: " . $correo_electronico . "<br>";
    echo "Tipo de Contrato: " . $tipo_contrato . "<br>";
    echo "Jornada: " . $jornada . "<br>";
    echo "Tipo de RH: " . $rh . "<br>";
    echo "Nivel de Formación: " . $nivel_formacion . "<br>";
    echo "EPS: " . $eps . "<br>";
    echo "Código de Cargo: " . $codigo_cargo . "<br>";
    echo "Número de Cuenta: " . $numero_cuenta . "<br>";
}
