<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_proveedor = $_POST['COD_PROVEEDOR'];
    $fecha_pedido = $_POST['FECHA_PEDIDO'];
    $fecha_entrega = $_POST['FECHA_ENTREGA'];

    echo "Código de Proveedor: " . $codigo_proveedor . "<br>";
    echo "Fecha de Pedido: " . $fecha_pedido . "<br>";
    echo "Fecha de Entrega: " . $fecha_entrega . "<br>";
}
