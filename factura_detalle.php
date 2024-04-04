<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_factura = $_POST['FACTCAB_COD'];
    $metodo_pago = $_POST['METODO_PAGO'];
    $codigo_producto = $_POST['COD_PRODUCTO'];
    $cantidad = $_POST['CANTIDAD'];
    $precio_venta = $_POST['PRECIO_VENTA'];
    $monto = $_POST['MONTO'];
    $subtotal = $_POST['SUBTOTAL'];
    $iva = $_POST['IVA'];
    $descuento = $_POST['DESCUENTO'];
    $neto_pagar = $_POST['NETO_PAGAR'];

    echo "Código de la Factura: " . $codigo_factura . "<br>";
    echo "Método de Pago: " . $metodo_pago . "<br>";
    echo "Código de Producto: " . $codigo_producto . "<br>";
    echo "Cantidad: " . $cantidad . "<br>";
    echo "Precio de Venta: " . $precio_venta . "<br>";
    echo "Monto: " . $monto . "<br>";
    echo "Subtotal: " . $subtotal . "<br>";
    echo "IVA: " . $iva . "<br>";
    echo "Descuento: " . $descuento . "<br>";
    echo "Neto a Pagar: " . $neto_pagar . "<br>";
}
