<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_factura_cabeza = $_POST['FACTURACABEZA_COD'];
    $codigo_producto = $_POST['PRODUCTO_COD'];
    $cantidad = $_POST['CANTIDAD'];
    $precio_unitario = $_POST['PRECIO_UNITARIO'];
    $tipo_de_pago = $_POST['TIPO_DE_PAGO'];
    $subtotal = $_POST['SUBTOTAL'];
    $descuento = $_POST['DESCUENTO'];
    $iva = $_POST['IVA'];
    $neto_a_pagar = $_POST['NETO_A_PAFGAR'];

    echo "Código de Factura Cabeza: " . $codigo_factura_cabeza . "<br>";
    echo "Código de Producto: " . $codigo_producto . "<br>";
    echo "Cantidad: " . $cantidad . "<br>";
    echo "Precio Unitario: " . $precio_unitario . "<br>";
    echo "Tipo de Pago: " . $tipo_de_pago . "<br>";
    echo "Subtotal: " . $subtotal . "<br>";
    echo "Descuento: " . $descuento . "<br>";
    echo "IVA: " . $iva . "<br>";
    echo "Neto a Pagar: " . $neto_a_pagar . "<br>";
}
