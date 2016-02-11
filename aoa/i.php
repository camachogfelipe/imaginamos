<?php

/**
 *   Cargador de instrucciones del operativo
 *
 * @version $Id$
 * @copyright 2010
 */

$Instruccion=base64_decode($i);
echo $Instruccion;
eval($Instruccion);
if($Fecha_control>=date('Y-m-d'))
{
	//setcookie('ia',base64_encode($Acc),time()+60*2 /*dos minutos*/);
	//setcookie('da',base64_encode($Datos),time()+60*2 /*dos minutos*/);
	header("location:$Programa");
}
else
	echo "<body bgcolor='ffffff'><font color='red'>Solicitud Vencida $Fecha_control $Instruccion</font></body>";
?>