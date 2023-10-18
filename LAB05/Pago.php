<?php
	$importe_total_vendido = $_POST['importe_total_vendido'];
	$cantidad_hijos = $_POST['cantidad_hijos'];
	$sueldo_basico = 600;
	$comision = $importe_total_vendido * 0.075;
	$bonificacion = $cantidad_hijos * 50;
	$sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
	$descuento = $sueldo_bruto * 0.11;
	$sueldo_neto = $sueldo_bruto - $descuento;
	echo "La bonificación es: " . number_format($bonificacion, 2) . "<br>";
	echo "El sueldo bruto es: " . number_format($sueldo_bruto, 2) . "<br>";
	echo "El descuento es: " . number_format($descuento, 2) . "<br>";
	echo "El sueldo neto es: " . number_format($sueldo_neto, 2) . "<br>";
?>