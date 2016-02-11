<?php

	

	require_once './php/clases.php';



	$paisDAO = new paisDAO();

	$pais = new pais();

	$paises = $paisDAO->gets();

	$totalPaises = $paisDAO->total();



    $convocatoriaDAO = new convocatoriaDAO();

    $convocatoria = new convocatoria();

    $convocatorias = $convocatoriaDAO->gets();



    $profesionDAO = new profesionDAO();

	$profesion = new profesion();

	$profesiones = $profesionDAO->gets();



	$aspiracionDAO = new aspiracionDAO();

	$aspiracion = new aspiracion();

	$aspiraciones = $aspiracionDAO->gets();







?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


  <link rel="stylesheet" href="jquery/development-bundle/themes/base/jquery.ui.all.css">


<link type="text/css" href="js/jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.datepick.js"></script>
<script type="text/javascript" src="js/jquery.datepick-es.js"></script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>



<script type="text/javascript">


  $(function() {
    $( "#popupDatepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "1970:2030"
    });
  });

// Traducción al español
$(function($){
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
});

</script>

<style type="text/css">
#ui-datepicker-div{font-size: 14px;}

</style>



<script type="text/javascript">




       

          function validar_email4(valor)

          {

              // creamos nuestra regla con expresiones regulares.

              var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

              // utilizamos test para comprobar si el parametro valor cumple la regla

              if(filter.test(valor))

                  return true;

              else

                  return false;

          }

          // cuando presionamos el boton verificar

		function validarFormAspirante(){
              if($("#email").val() == '')

              {

                  alert("Ingrese un email");

              }else if(validar_email4($("#email").val()))

              {

                if ($("#nombre").val()=='') {

                  alert("Debe ingresar su nombre");

                }

                else if ($("#apellidos").val()=='') {

                  alert("Debe ingresar su apellidos");

                }

                else if ($("#experiencia").val()=='') {

                    alert("Debe escribir su experiencia laboral");

                 }                

                else if ($("#pais").val()=='0') {

                  alert("Debe seleccionar un pais ");

                }


                else if ($("#profesion").val()=='') {

                  alert("Debe seleccionar una profesión ");

                }



                else if ($("#cargo").val()=='') {

                  alert("Debe seleccionar un cargo ");

                }



                else if ($("#aspiracion").val()=='') {

                  alert("Debe seleccionar una aspiracion salarial");

                }

                else if ($("#academica").val()=='') {

                  alert("Debe seleccionar su nivel academico ");

                }



                else if ($("#complementaria").val()=='') {

                  alert("Debe seleccionar su educación complementaria ");

                }



                else{

                  $("#form6").submit();

                }

              }else

              {

                  alert("El email no es valido");

              }

		}
       






</script>


<script type="text/javascript">
    function format(input){
     var num = input.value.replace(/\./g,"");
     if(!isNaN(num)){
     num = num.toString().split("").reverse().join("").replace(/(?=\d*\.?)(\d{3})/g,"$1");
     num = num.split("").reverse().join("").replace(/^[\.]/,"");
     input.value = num;
     }else{
     input.value = input.value.replace(/[^\d\.]*/g,"");
     }
     }
  </script>

            


<link rel="stylesheet" type="text/css" href="css/static.layout.css" media="screen" />





<style type="text/css">

</style>



<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />





<link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />





</head>



<body class="body">



<form id="form6" name="form6" method="post" action="procesarAspirante.php" enctype="multipart/form-data">

<table width="613" border="0" align="center" cellpadding="0" cellspacing="0">

	<tr>

		<td >&nbsp;</td>

	</tr>

	<tr>

		<td >&nbsp;</td>

	</tr>

	<tr>

		<td >&nbsp;</td>

	</tr>

	<tr>

		<td >&nbsp;</td>

	</tr>

	<tr>

		<td class="bgcontenidos">

			<!--Inicio Formulario-->



			<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">

				<tr>

					<td width="280" class="textforitem">Nombre:</td>

					<td width="25">&nbsp;</td>

					<td width="280" class="textforitem">Apellidos:</td>

				</tr>

				<tr>

					<td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

							<input type="text" id="nombre" name="nombre" class="transparenteform" value=""/>

						</label>

					</td>

				</tr>

			</table>



		</td>



		<td>&nbsp;</td>



		<td valign="top" class="bgcampo2">



			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td valign="top">

						<label>

							<input type="text" id="apellidos" name="apellidos" class="transparenteform"  value=""/>

						</label>

					</td>

				</tr>

			</table>

		</td>

	</tr>

</table>







<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">

	<tr>

		<td width="280" class="textforitem">Genero:</td>

		<td width="25">&nbsp;</td>

		<td width="280" class="textforitem">Mail:</td>

	</tr>

	<tr>

		<td valign="top" class="textforitem">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>


							Femenino&nbsp;

							<input id="genero" name="genero" type="radio" value="femenino" />

							&nbsp;&nbsp;&nbsp;

							Masculino   &nbsp;

							<input id="genero" name="genero" type="radio" value="masculino" />


					</td>

				</tr>

			</table>

		</td>

		<td>&nbsp;</td>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

							<input type="text" id="email" name="email" class="transparenteform" value=""/>

						</label>

					</td>

				</tr>

			</table>

		</td>

	</tr>

</table>



<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">

	<tr>

		<td width="280" class="textforitem">Pa&iacute;s:</td>

		<td width="25">&nbsp;</td>

		<td width="280" class="textforitem">Ciudad:</td>

	</tr>

	<tr>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>          

						<label>

							<select name="pais" id="pais" class="selectsintec">   											

								<option value="0">Seleccione país</option>

								<?php if ($totalPaises>0): ?>

									<?php foreach ($paises as $pais): ?>

										<option value="<?php echo $pais->getId(); ?>"><?php echo $pais->getnombre_e(); ?></option>

									<?php endforeach ?>

								<?php endif ?>

							</select>

						</label>

					</td>

				</tr>

			</table>

		</td>

		<td>&nbsp;</td>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

							<input type="text" id="ciudad" name="ciudad" class="transparenteform" value=""/>

						</label>

					</td>

				</tr>

			</table>

		</td>

	</tr>

</table>





<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">

	<tr>

		<td width="280" class="textforitem">Fecha de nacimiento: </td>

		<td width="25">&nbsp;</td>

		<td width="280" class="textforitem">Profesi&oacute;n:</td>

	</tr>

	<tr>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<!--input type="text" id="date" name="date" class="transparenteform" value=""/-->
						<input type="text" id="popupDatepicker" name="date" class="transparenteform" value=""/>

					</td>

				</tr>

			</table>

		</td>

		<td>&nbsp;</td>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

						<?php if ($profesiones>0): ?>

							<select name="profesion" id="profesion" class="selectsintec">

								<option value="">Seleccione valor</option>

									<?php foreach ($profesiones as $profesion): ?>

										<option value="<?php echo $profesion->getNombre_e(); ?>"><?php echo $profesion->getNombre_e() ?></option>

									<?php endforeach ?>

							</select>

						<?php endif ?>

						</label>

					</td>

				</tr>

			</table>

		</td>

	</tr>

</table>

<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">

	<tr>

		<td width="280" class="textforitem">Puesto solicitante:</td>

		<td width="25">&nbsp;</td>

		<td width="280" class="textforitem">Expectativa salarial:</td>

	</tr>

	<tr>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

						<?php if ($convocatorias>0): ?>

							<select name="cargo" id="cargo" class="selectsintec">



							<?php if (isset($_GET['id'])):

									

										$id = $_GET['id'];

										$actual = new convocatoria();

										$actual = $convocatoriaDAO->getById($id);

								 

								 ?>

								<option value="<?php echo $actual->getCargo_e(); ?>"><?php echo $actual->getCargo_e() ?></option>

							<?php else: ?>



								<option value="">Seleccione valor</option>



							<?php endif ?>





									<?php foreach ($convocatorias as $convocatoria): ?>

										<option value="<?php echo $convocatoria->getCargo_e(); ?>"><?php echo $convocatoria->getCargo_e() ?></option>

									<?php endforeach ?>

							</select>

						<?php endif ?>

						</label>

					</td>

				</tr>

			</table>

		</td>

		<td>&nbsp;</td>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

						<?php if ($aspiraciones>0): ?>

							<select name="aspiracion" id="aspiracion" class="selectsintec">				

								<option value="">Seleccione valor</option>

									<?php foreach ($aspiraciones as $aspiracion): ?>

										<option value="<?php echo $aspiracion->getValor(); ?>"><?php echo $aspiracion->getValor() ?></option>

									<?php endforeach ?>

							</select>

						<?php endif ?>

						</label>

					</td>

				</tr>

			</table>

		</td>

	</tr>

</table>



<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">

	<tr>

		<td width="280" class="textforitem">Formaci&oacute;n Acad&eacute;mica :</td>

		<td width="25">&nbsp;</td>

		<td width="280" class="textforitem">Formaci&oacute;n complementaria: </td>

	</tr>

	<tr>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

							<select name="academica" id="academica" class="selectsintec">				

								<option value="">Seleccione </option>

								<option value="Ph.D">Ph. D</option>

								<option value="Especialización">Especialización</option>

								<option value="Maestría">Maestría</option>

								<option value="Profesional">Profesional</option>

								<option value="Técnico">Técnico</option>

								<option value="Bachillerato">Bachillerato</option>

								<option value="Tecnológico">Tecnológico</option>

							</select>

						</label>

					</td>

				</tr>

			</table>

		</td>

		<td>&nbsp;</td>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

							<select name="complementaria" id="complementaria" class="selectsintec">				

								<option value="">Seleccione </option>

								<option value="Diplomado">Diplomado</option>

								<option value="Seminario">Seminario</option>

								<option value="Curso">Curso Taller</option>

								<option value="Otro">Otro</option>

							</select>

						</label>

					</td>

				</tr>

			</table>

		</td>

	</tr>

</table>



<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">

	<tr>

		<td width="585" class="textforitem">Experiencia Laboral:</td>

	</tr>

	<tr>

		<td class="bgtextarea">

			<table width="585" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<textarea name="experiencia" id="experiencia" class="transparentearea"></textarea>

					</td>

				</tr>

			</table>

			<label></label>

		</td>

	</tr>

</table>



<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">

	<tr>

		<td width="280" class="textforitem">Tel&eacute;fono (Fijo y celular con indicativo): </td>

		<td width="25">&nbsp;</td>

		<td width="25">&nbsp;</td>

	</tr>

	<tr>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

							<input name="telefono" id="telefono" type="text" class="transparenteform" value="" />

						</label>

					</td>

				</tr>

			</table>

		</td>

		<td>&nbsp;</td>

		<td valign="top" class="">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>&nbsp;</label>

					</td>

				</tr>

			</table>

		</td>

	</tr>

</table>



<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">

	<tr>

		<td width="280" class="textforitem">Adjuntar Hoja de Vida: </td>

		<td width="25">&nbsp;</td>

		<td width="25" class="textforitem">&nbsp;</td>

	</tr>

	<tr>

		<td valign="top" class="bgcampo8">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

							<input type="file" name="adjunto" id="adjunto"/>

						</label>

					</td>

				</tr>

			</table></td>

		<td>&nbsp;</td>

		<td valign="top" >

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td><label></label></td>

				</tr>

			</table>

		</td>

	</tr>

	<tr>

		<td valign="top">

			<div id="btenviarformprom"><!--submit-->

				<a href="#" onclick="validarFormAspirante()">&nbsp;</a>

			</div>

		</td>

		<td>&nbsp;</td>

		<td valign="top" >&nbsp;</td>

	</tr>

	<tr>

		<td valign="top">&nbsp;</td>

		<td>&nbsp;</td>

		<td valign="top" >&nbsp;</td>

	</tr>

	<tr>

		<td valign="top" class="textforitem">Los campos con (*) son obligatorios </td>

		<td>&nbsp;</td>

		<td valign="top" >&nbsp;</td>

	</tr>

	<tr>

		<td colspan="3" valign="top" class="textforitem">&nbsp;</td>

	</tr>

	<tr>

		<td colspan="3" valign="top" class="textforitem">Tambi&eacute;n pueden contactarnos al e-mail: selección@intecplast.com.co</td>

	</tr>

	<tr>

		<td colspan="3" valign="top" class="textforitem">&nbsp;</td>

	</tr>

	<tr>

		<td colspan="3" valign="top" class="textforitem">&nbsp;</td>

	</tr>

</table>



<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">

	<tr>

		<td>

			<ul id="vertical">

		</td>

	</tr>

</table>



</td>

</tr>

<tr>

<td class="bgcontenidos">&nbsp;</td>

</tr>

</table>



</form>




</body>

</html>

