<?php
$pagina = 'inicio';
require_once './config.php';
require_once '../control/ControlUsuarios.php'; //Controlador
require_once '../../shared/model/Usuario.php';

$Form = new Form("fContenido");

$objetoAjax = new xajax();
new ControlUsuarios($objetoAjax, $Form);//Controlador GUI.
$objetoAjax->processRequest();

require_once './header.php';

echo $objetoAjax->getJavascript("../shared/lib/xajax");

$Form->getHeader('', NULL, NULL, NULL, 'cms_form');
?>

<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		xajax_muestraFormCambio();
	});
	
	function validaEnvia(){
		if ( !validarTexto('oldpass', 'Por favor digite el password anterior.') ) return false;
		if ( !validarTexto('newpass', 'Por favor digite el nuevo password.') ) return false;
		if ( !validarTexto('newpassr', 'Por favor digite la confirmacion del password') ) return false;
		if ( !passigual('newpass', 'newpassr', 'Los password no coinciden.') ) return false;
			
		xajax_cambiarPass( $('#oldpass').val(), $('#newpass').val() );
	}
</script>
						
<div class="simplebox grid360-left" id="capa_formulario">
</div>


<?php
	$Form->getFooter();

	require_once './footer.php';
?>