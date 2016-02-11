{load_presentation_object filename="detalle_persona" assign="obj"}

{literal}
<script type="text/javascript">

  
$( document ).ready(function() {

	var validarsession = $("#validarsession").val();
	if (validarsession != "") {
		//alert("Se desplegará modal de sesión");
	  $(".contenedor_internas-2").html("");
	  $(".campo-perfil").html("");
	  $("#txt_urlempresa").val(validarsession);
      $("#bt_zona_segura_empresa").trigger("click");
	};
});

</script>
{/literal}


<input type="hidden" id="validarsession" value="{$obj->cInfoPer.id_encrypt}">
{include file="buscador-interna.tpl"}
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos-2 inline">
      <h1 class="inline">Perfil del <span> Aspirante</span></h1>
      <div class="clear"></div>
      {*<h2 class="inline">Lorem ipsum dolor sit consectetur</h2>*}
      <!-- <div class="sombra_division"></div> -->
    </div>
  </div>

  <div class="fondo-gris">
  <div class="campo-perfil">
    <div class="row-fluid">
      <div class="span2 ">
        <div class="perfil-img"><img src="{$obj->mSiteUrl}/cms/files/personas/perso_{$obj->cInfoPer.fil_image}"></div>
      </div>
      <div class="span10 ">
        <div class="espacio_en_blanco"></div>
        <h2>{$obj->cInfoPer.nom_aspirante}, <em>{$obj->cInfoPer.nom_profesion}</em></h2>
        <div class="espacio_en_blanco"></div>
        <p>{$obj->cInfoPer.perfil}</p>
        <ul class="perfil-iconos">
          <li class="mail">{$obj->cInfoPer.txt_email}</li>
          <li class="movil">{$obj->cInfoPer.txt_movil}</li>
          <li class="telefono">{$obj->cInfoPer.txt_telefono}</li>
          <li class="ubicacion">{$obj->cInfoPer.lugar}</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="clear espacio_en_blanco"></div>
<div class="contenedor_internas-2">
  <div class="container cont_contenidos maxheight">
					<div class="clear espacio_en_blanco"></div>
					<div class="scroll-zonasegura">
						<div class="row-fluid">
							<div class="span12">
								<h2 class="hojadevida-titulo ico-1">Información General</h2>
								<div class="clear espacio_en_blancopeque"></div>
								<div class="info-general-dv">
									<p><span class="text_naranja">Fecha de nacimiento: </span>{$obj->cPerHv.fec_nacimiento} </p>
									<p><span class="text_naranja">Estado civil: </span>{$obj->cPerHv.nom_estado_civ} </p>
									<p><span class="text_naranja">Teléfono: </span>{$obj->cPerHv.txt_telefono}</p>
									<p><span class="text_naranja">Celular: </span>{$obj->cPerHv.txt_movil}</p>
									<p><span class="text_naranja">Ciudad de residencia: </span>{$obj->cPerHv.nom_ciudad}</p>
								</div>
								<div class="clear espacio_en_blancopeque"></div>
								<h2 class="hojadevida-titulo ico-2">Perfil</h2>
								<div class="clear espacio_en_blancopeque"></div>
								<p class="parrafo">{$obj->cPerHv.txt_perfil}</p>
								<div class="clear espacio_en_blancopeque"></div>
								<h2 class="hojadevida-titulo ico-3">Habilidades</h2>
								<div class="clear espacio_en_blancopeque"></div>
								<p class="parrafo">{$obj->cPerHv.txt_habilidades}</p>
								<div class="clear espacio_en_blanco"></div>
								<h2 class="hojadevida-titulo ico-4">Estudios realizados</h2>
								<div class="clear espacio_en_blancopeque"></div>
								<div class="estudios-realizados-dv"> {section name=k loop=$obj->cPerHv.estudios}
									<p><strong>Título:</strong> {$obj->cPerHv.estudios[k].txt_titulo}</p>
									<p><strong>Institución:</strong> {$obj->cPerHv.estudios[k].txt_institucion}</p>
                  <p><strong>Inicio:</strong> {$obj->cPerHv.estudios[k].fec_ingreso}
                  {if $obj->cPerHv.estudios[k].fec_ingreso=="no"}
									<p><strong>Finalización:</strong> {$obj->cPerHv.estudios[k].fec_finaliza}</p>
                  {else}
                  <p><strong>Finalización:</strong> En curso</p>
                  {/if}
									<br />
									{/section} </div>
								{if $obj->cPerHv.idiomas!=""}
								<div class="clear espacio_en_blanco"></div>
								<h2 class="hojadevida-titulo ico-5">Idiomas</h2>
								<div class="clear espacio_en_blancopeque"></div>
								<div class="estudios-realizados-dv"> {section name=k loop=$obj->cPerHv.idiomas}
									<p><strong>Idioma:</strong>{$obj->cPerHv.idiomas[k].txt_nombre}</p>
									<p><strong>Habla:</strong>{$obj->cPerHv.idiomas[k].habla}</p>
									<p><strong>Escritura:</strong>{$obj->cPerHv.idiomas[k].escri}</p>
									<p><strong>Lectura:</strong>{$obj->cPerHv.idiomas[k].lectur}</p>
									<br />
									{/section} </div>
								{/if}
								
								{if $obj->cPerHv.informa!=""}
								<div class="clear espacio_en_blancopeque"></div>
								<h2 class="hojadevida-titulo ico-6">Inform&aacute;tica</h2>
								<div class="clear espacio_en_blancopeque"></div>
								<div class="estudios-realizados-dv"> {section name=k loop=$obj->cPerHv.informa}
									<p><strong>Aplicación:</strong>{$obj->cPerHv.informa[k].txt_aplicacion}</p>
									<p><strong>Dominio:</strong>{$obj->cPerHv.informa[k].txt_nombre}</p>
									<br />
									{/section} </div>
								{/if}
								<div class="clear espacio_en_blanco"></div>
								<h2 class="hojadevida-titulo ico-7">Experiencia Laboral</h2>
                {section name=k loop=$obj->cPerHv.exper}
								<div class="experiencia-item">
									<div class="clear espacio_en_blancopeque"></div>
									<p class="float_left">{$obj->cPerHv.exper[k].txt_cargo}</p>
									<span class="separador-punto"></span>
									<p class="float_left"><em> {$obj->cPerHv.exper[k].txt_empresa}</em> </p>
									<p class="float_left"><span class="text_naranja"> Desde: </span> {$obj->cPerHv.exper[k].fec_ingreso} </p>
									{if $obj->cPerHv.exper[k].fec_finaliza!="0000-00-00"}
									<p class="float_left"><span class="text_naranja"> &nbsp; &nbsp; Hasta: </span> {$obj->cPerHv.exper[k].fec_finaliza} </p>
									{/if}
									<div class="clear espacio_en_blancopeque"></div>
									<p><em>Labor desempeñada:</em></p>
									<p>{$obj->cPerHv.exper[k].txt_funciones}</p>
								</div>
								{/section} </div>
						</div>
					</div>
		



</div>


</div>