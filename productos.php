<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_proveedor = $_POST['COD_PROVEEDOR'];
    $clasificacion = $_POST['Clasificacion'];
    $descripcion = $_POST['Descripcion'];
    $cantidad_disponible = $_POST['Cantidad_disponible'];
    $precio_compra = $_POST['PRECIO_COMPRA'];
    $precio_venta = $_POST['PRECIO_VENTA'];
    $fecha_ingreso = $_POST['FECHA_DE_INGRESO'];
    $fecha_expiracion = $_POST['FECHA_DE_EXPIRACION'];

    echo "Código de Proveedor: " . $codigo_proveedor . "<br>";
    echo "Clasificación: " . $clasificacion . "<br>";
    echo "Descripción: " . $descripcion . "<br>";
    echo "Cantidad Disponible: " . $cantidad_disponible . "<br>";
    echo "Precio de Compra: " . $precio_compra . "<br>";
    echo "Precio de Venta: " . $precio_venta . "<br>";
    echo "Fecha de Ingreso: " . $fecha_ingreso . "<br>";
    echo "Fecha de Expiración: " . $fecha_expiracion . "<br>";
}
