<?php

	

		include_once './../php/clases.php';



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

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<meta name="Keywords" lang="es" content="palabras clave" />

<meta name="Description" lang="es" content="texto empresarial" />

<meta name="date" content="2011" />

<meta name="author" content="diseño web: imaginamos.com" />

<meta name="robots" content="All" />

<title>Intecplast</title>



  <link rel="stylesheet" href="jquery/development-bundle/themes/base/jquery.ui.all.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>





  <script>

  $(function() {

    $( "#date" ).datepicker();

  });

  </script>





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

            		alert("Enter an email");

              }else if(validar_email4($("#email").val()))

              {

                if ($("#nombre").val()=='') {

            		alert("You must enter your name");

                }

                else if ($("#apellidos").val()=='') {

                  alert("You must enter your Lastname");

                }

                else if ($("#telefono").val()=='') {

                  alert("You must enter your Phone ");

                }

                else if ($("#experiencia").val()=='') {

                    alert("You must enter your Work Experience");

                 }                

                else if ($("#pais").val()=='0') {

                  alert("You must enter your Country ");

                }



                else if ($("#date").val()=='') {

                  alert("You must enter your Date of birth ");

                }



                else if ($("#profesion").val()=='') {

                  alert("You must enter your professión ");

                }



                else if ($("#cargo").val()=='') {

                  alert("You must enter a Since applicant ");

                }



                else if ($("#aspiracion").val()=='') {

                  alert("You must enter a Salary expectations ");

                }

                else if ($("#academica").val()=='') {

                  alert("You must enter a Academic training ");

                }



                else if ($("#complementaria").val()=='') {

                  alert("You must enter a Additional training ");

                }



                else{

                  $("#form6").submit();

                }

              }else

              {

            		alert("The email is not valid");

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



<link type="text/css" href="js/jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.datepick.js"></script>
<script type="text/javascript" src="js/jquery.datepick-es.js"></script>
<script type="text/javascript">
$(function() {
	$('#popupDatepicker').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>

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

					<td width="280" class="textforitem">Name:</td>

					<td width="25">&nbsp;</td>

					<td width="280" class="textforitem">Lastname:</td>

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

		<td width="280" class="textforitem">Gender:</td>

		<td width="25">&nbsp;</td>

		<td width="280" class="textforitem">Mail:</td>

	</tr>

	<tr>

		<td valign="top" class="textforitem">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

							Female&nbsp;

							<input id="genero" name="genero" type="radio" value="femenino" />

							&nbsp;&nbsp;&nbsp;

							Male&nbsp;

							<input id="genero" name="genero" type="radio" value="masculino" />

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

		<td width="280" class="textforitem">Country:</td>

		<td width="25">&nbsp;</td>

		<td width="280" class="textforitem">City:</td>

	</tr>

	<tr>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>          

						<label>

							<select name="pais" id="pais" class="selectsintec" onchange="showCiudades()">   											

								<option value="0">Select country</option>

								<?php if ($totalPaises>0): ?>

									<?php foreach ($paises as $pais): ?>

										<option value="<?php echo $pais->getId(); ?>"><?php echo $pais->getnombre_i(); ?></option>

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

		<td width="280" class="textforitem">Date of birth: </td>

		<td width="25">&nbsp;</td>

		<td width="280" class="textforitem">Profession:</td>

	</tr>

	<tr>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

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

								<option value="">Select Value</option>

									<?php foreach ($profesiones as $profesion): ?>

										<option value="<?php echo $profesion->getNombre_i(); ?>"><?php echo $profesion->getNombre_i() ?></option>

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

		<td width="280" class="textforitem">Since applicant:</td>

		<td width="25">&nbsp;</td>

		<td width="280" class="textforitem">Salary expectations:</td>

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

								<option value="<?php echo $actual->getCargo_i(); ?>"><?php echo $actual->getCargo_i() ?></option>

							<?php else: ?>



								<option value="">Select value</option>



							<?php endif ?>





									<?php foreach ($convocatorias as $convocatoria): ?>

										<option value="<?php echo $convocatoria->getCargo_i(); ?>"><?php echo $convocatoria->getCargo_i() ?></option>

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

								<option value="">Select value</option>

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

		<td width="280" class="textforitem">Academic training :</td>

		<td width="25">&nbsp;</td>

		<td width="280" class="textforitem">Additional training: </td>

	</tr>

	<tr>

		<td valign="top" class="bgcampo2">

			<table width="280" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td width="5">&nbsp;</td>

					<td>

						<label>

							<select name="academica" id="academica" class="selectsintec">				

								<option value="">Select </option>

								<option value="Ph.D">Ph. D</option>

								<option value="Especialización">Specialization</option>

								<option value="Maestría">Mastery</option>

								<option value="Profesional">Professional</option>

								<option value="Técnico">Technical</option>

								<option value="Bachillerato">Baccalaureate</option>

								<option value="Tecnológico">Technological</option>

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

								<option value="">Select </option>

								<option value="Diplomado">Diplomaed</option>

								<option value="Seminario">Seminar</option>

								<option value="Curso">Course</option>

								<option value="Otro">Other</option>

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

		<td width="585" class="textforitem">Work Experience:</td>

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

		<td width="280" class="textforitem">Phone (landline & Cell with indicative): </td>

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

							<input name="telefono" id="telefono" type="text" class="transparenteform"  onkeyup="format(this)" onchange="format(this)"/>

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

		<td width="280" class="textforitem">Attach CV: </td>

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

		<td valign="top" class="textforitem">Fields with (*) are required </td>

		<td>&nbsp;</td>

		<td valign="top" >&nbsp;</td>

	</tr>

	<tr>

		<td colspan="3" valign="top" class="textforitem">&nbsp;</td>

	</tr>

	<tr>

		<td colspan="3" valign="top" class="textforitem">You can contact us at the e-mail: selección@intecplast.com.co</td>

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









<!-------------------------------FIN BANNER----------------------------------->

<!-------------------------------CONTENIDO----------------------------------->

<!-------------------------------FIN CONTENIDO----------------------------------->

<!-------------------------------FOOTER----------------------------------->

<!-------------------------------FIN FOOTER----------------------------------->

</body>

</html>

