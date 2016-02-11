<?php session_start();
include( '../business/class/Correo.class1.php');
include( '../include/define.php' );
include( '../include/config.php' );
include( '../business/function/plGeneral.fnc.php' );  
foreach ($_POST as $key => $value)
    {
            $arrinputs[$key] = $value;
            $$key = $value;	
    }
    
$sqlQuery = "INSERT INTO pqr_registro (nombre, cedula, direccion, email, placa, aseguradora, tipo_de_solicitud, comentarios_texto)
			 VALUES ('$nombre','$cedula','$dir','$email','$placa','$aseguradora','$tipo','$comentarios')";
$insert = DbHandler::Execute($sqlQuery);
$dbreg = new Dbpqr_registro();
$lastid= $dbreg->getMaxId();
if($insert){
	$sqlQuery = "INSERT INTO respuestas_pqr (pqr_registro_id, texto)
				 VALUES ('$lastid','REGISTRADA')";
	$insert = DbHandler::Execute($sqlQuery);
    $id = $_POST["id"];
    $body= '<p class="texto_doc" style="text-align: center;">
			<p>Sr(a) '.$nombre.'</p>
			Hemos registrado tu PQR<br>
			Recuerda que puedes seguir tu pqr<br>
			Codigo PQR: <span style="color: blue;" id="codigopqr">"'.$lastid.'"</span>
			</p>';
	$asunto = utf8_decode("PQR");
	$cCorreo = new Correo();
	$cCorreo->SendEmail($email, $asunto, $body);

    header('Location: ../index.php?base&seccion=pqr&send=1&idpqr='.  base64_encode($lastid));
    exit();
}else{
    header('Location: ../index.php?base&seccion=pqr&send=2');
    exit();
}

?>
