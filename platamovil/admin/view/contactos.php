<?php
$pagina = 'contacto';
require_once './config.php';

$Form = new Form("fContacto");

require_once './header.php';
?>

<script type="text/javascript" language="javascript">
	function validaEnvia(){
		if ( !validarTexto('fechaInicial', 'Por favor digite la fecha inicial.') ) return false;
		if ( !validarTexto('fechaFinal', 'Por favor digite la fecha final.') ) return false;
			
		$('#<?=$Form->getName()?>').submit();
	}
	
	$(document).ready(function(){
		$('#fechaInicial').datepicker({showOn: 'button', buttonImage: '../shared/css/admin/images/calendar.gif', buttonImageOnly: true, dateFormat: 'yy-mm-dd', showAnim: 'slideDown'});
		$('#fechaFinal').datepicker({showOn: 'button', buttonImage: '../shared/css/admin/images/calendar.gif', buttonImageOnly: true, dateFormat: 'yy-mm-dd', showAnim: 'slideDown'});
	});
</script>

<?=$Form->getHeader('', 'excelContacto.php', NULL, NULL, 'cms_form')?>
<div class="simplebox grid360-left">
	<div class="titleh">
		<h3>Reporte de contactos</h3>
		<div class="shortcuts-icons">
			<a title="Buscar contactos generados" href="#" class="shortcut tips">
				<img width="25" height="25" alt="icon" src="../shared/img/admin/icons/shortcut/question.png">
			</a>
		</div>
	</div>
	<div class="body">
		<label class="cf" for="fechaInicial">
			<strong>Fecha inicial:</strong>
			<?=$Form->text('fechaInicial', '', 10, "off", '', 'width:100px; display: inline;', 'st-forminput', 'aaaa-mm-dd')?>
		</label>
		<label class="cf" for="fechaFinal">
			<strong>Fecha final:</strong>
			<?=$Form->text('fechaFinal', '', 10, "off", '', 'width:100px; display: inline;', 'st-forminput', 'aaaa-mm-dd')?>
		</label>
	</div>
	<div class="button-box">
		<?=$Form->button('btnEnviar', 'Generar', FALSE, "onclick=\"validaEnvia();\"", NULL, 'button-blue')?>
	</div>
</div>


<?php

$Form->getFooter();

require_once './footer.php';
?>