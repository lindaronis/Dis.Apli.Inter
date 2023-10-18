<?php
	$precio_actual = 10;
	$cantidad_adquirida = 2;
	$nuevo_precio = $precio_actual - ($precio_actual * 0.05); 
	$importe_compra = $precio_actual * $cantidad_adquirida;
	$importe_descuento = $importe_compra * 0.07;
	$importe_pagar = $importe_compra - $importe_descuento;
	$caramelos_obsequio = $cantidad_adquirida * 2;

	echo "Nuevo precio: S/ " . number_format($nuevo_precio, 2) . "<br>";
	echo "Importe de compra: S/ " . number_format($importe_compra, 2) . "<br>";
	echo "Importe del descuento: S/ " . number_format($importe_descuento, 2) . "<br>";
	echo "Importe a pagar: S/ " . number_format($importe_pagar, 2) . "<br>";
	echo "Caramelos obsequiados: " . $caramelos_obsequio;
?>