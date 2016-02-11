<?php
    function accents2HTML($mensaje){
            $mensaje = str_replace("á","&aacute;",$mensaje);
            $mensaje = str_replace("é","&eacute;",$mensaje);
            $mensaje = str_replace("í","&iacute;",$mensaje);
            $mensaje = str_replace("ó","&oacute;",$mensaje);
            $mensaje = str_replace("ú","&uacute;",$mensaje);
            $mensaje = str_replace("ñ","&ntilde;",$mensaje);
            return $mensaje;
    }
?>
