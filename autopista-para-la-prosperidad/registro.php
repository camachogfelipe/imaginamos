<?php include('header.php') ?>

<div class="mainContent">

<h1 class="tac">REGISTRO</h1>

                <form action="controller.php" class="horizontalForm" method="post">
		<div class="row clearfix">
			<div class="label">Nombre</div>
                        <div class="input"><input type="text" name="nombre" class="validate[required]"></div>
		</div>
		<div class="row clearfix">
			<div class="label">APELLIDO</div>
                        <div class="input"><input type="text" name="apellido" class="validate[required]"></div>
		</div>
		<div class="row clearfix">
			<div class="label">CORREO ELECTRÓNICO</div>
                        <div class="input"><input type="text" name="correo" class="validate[required,custom[email]]" ></div>
		</div>
		<div class="row clearfix">
			<div class="label">CONTRASEÑA</div>
                        <div class="input"><input type="password"class="validate[required]" name="password" id="password"></div>
		</div>
		<div class="row clearfix">
			<div class="label">CONFIRMAR CONTRASEÑA</div>
                        <div class="input"><input type="password"  class="validate[required,equals[password]]"></div>
		</div>
		<div class="row clearfix">
			<div class="label">EMPRESA</div>
                        <div class="input"><input type="text" name="empresa" class="validate[required]"></div>
		</div>
		<div class="row clearfix">
			<div class="label">CARGO</div>
                        <div class="input"><input type="text" name="cargo"></div>
		</div>
		<div class="row clearfix">
			<div class="label">TELÉFONO</div>
                        <div class="input"><input type="text" name="telefono" class="validate[required, custom[onlyNumberSp]]"></div>
		</div>
		<div class="row clearfix">
			<div class="label">MÓVIL</div>
                        <div class="input"><input type="text" name="movil" class="validate[required, custom[onlyNumberSp]]"></div>
		</div>
		<div class="row clearfix">
			<div class="label">PAIS</div>
			<div class="input">
				
			<?php pintar_select_pais(); ?>
				
			</div>
		</div>

		<div class="row clearfix">
			<div class="label"> </div>
			<div class="input">
				<fieldset>
                                     
                                    <legend >TÉRMINOS Y CONDICIONES<a href="regokModal.php" id="modalregistro" class="cBoxSuc fancybox.ajax"></a></legend>
					<div class="terms">Los estudios y documentos en etapa de prefactibilidad que se ponen a disposición de los interesados, así como todos sus anexos, contienen información que solo pretender ilustrar a los interesados sobre el alcance del proyecto sin perjuicio de las verificaciones, validaciones y confirmaciones que de dicha información y de todos los riesgos del proyecto debe hacer el interesado, si luego de manifestar interés resulta precalificado y decide presentar oferta. 

La Agencia Nacional de Infraestructura (ANI) y los estructuradores que la asesoran en el marco de la invitación a precalificar, no asumen ni aceptan ninguna responsabilidad por el contenido de estos estudios en etapa de prefactibilidad, ni por el uso que se haga de los mismos por parte de potenciales inversionistas u otras personas. Así mismo, la ANI y sus asesores se reservan el derecho de: 

a.	Rectificar o modificar cualquier información contenida en dichos estudios. 
b.	Añadir información adicional en etapa de prefactibilidad, en cualquier momento, sin previa justificación o advertencia.
<br><br>
					</div>
                                        <input class="validate[required] checkbox" type="checkbox" id="agree" name="agree">    Acepto los términos y condiciones.
                                        
                            </fieldset>
			</div>
		</div>

		<div class="row clearfix">
			<div class="label"> </div>
                        <input type="hidden" name="accion" id="accion" value="ingresarusuario">
                        <div class="input"><input type="submit" value="IR"></div>
			
		</div>
               
	</form>

</div>
<?php include('footer.php') ?>
<?php if($_GET['Erno'] == 1){ ?>
<script>
$(window).load(function () {
    $("#modalregistro").trigger("click");
});
</script>
<?php } ?>