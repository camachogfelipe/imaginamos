<?php
$titulo = $_POST["titulo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
if (mail($titulo, $asunto, $mensaje)) {
  echo "El mail ha sido enviado";
} else {
  echo "Error de envio " . mysql_error();
}
?>


<script src="js/jquery-latest.js" type="text/javascript"></script>
<script src="js/jquery.form.js" type="text/javascript"></script> 