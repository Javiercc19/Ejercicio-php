<?php

$precio_unitario = 650.00;
$cantidad = 2;

$costo_total = $precio_unitario * $cantidad;


$descuento_tarjeta = 0.18;  
$descuento_efectivo = 0.25; 

$monto_descuento_tarjeta = $costo_total * $descuento_tarjeta;
$total_tarjeta = $costo_total - $monto_descuento_tarjeta;


$monto_descuento_efectivo = $costo_total * $descuento_efectivo;
$total_efectivo = $costo_total - $monto_descuento_efectivo;

echo "Pago con tarjeta\n";
echo "Costo total: Q" . number_format($costo_total, 2) . "\n";
echo "Descuento (18%): Q" . number_format($monto_descuento_tarjeta, 2) . "\n";
echo "Total a pagar: Q" . number_format($total_tarjeta, 2) . "\n\n";

echo "Pago en efectivo =\n";
echo "Costo total: Q" . number_format($costo_total, 2) . "\n";
echo "Descuento (25%): Q" . number_format($monto_descuento_efectivo, 2) . "\n";
echo "Total a pagar: Q" . number_format($total_efectivo, 2) . "\n";
?>