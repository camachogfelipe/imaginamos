<?php


    if($_POST['nombre'] == 'Nombre' || $_POST['comentarios'] == 'Comentario' ){
        header('Location:./../inmetal/index.php?seccion=contactenos&Erno=2');
        exit;
    }else{
    $fecha = date("d-m-Y");
    $hora = date("H:i:s");
    $destino = "dayron.garzon@imaginamos.com.co";
    //$destino = "sales@anuice.com";
    $asunto = " Comentarios Inmetal";
    $desde = "FROM: ".$_POST['email']."";
    $comentario1= "
        \n
        Nombre:  ". $_POST['nombre']. "\n
        Email:   " .$_POST['email']."\n
        Telefono:  ". $_POST['telefono']."\n 
        Empresa:  ". $_POST['empresa']."\n 
        Comentario:  ". $_POST['comentarios']."\n
        Enviado:    ".$fecha." a las ".$hora." \n
        \n";
    
    mail($destino,$asunto, $comentario1, $desde);

header('Location:./../inmetal/index.php?seccion=contactenos&Erno=1');
exit;
    }
?>
