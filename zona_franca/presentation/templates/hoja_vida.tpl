{load_presentation_object filename="zona_persona" assign="obj"} 
<script src="{$obj->mSiteUrl}/scripts/highcharts.js"></script> 
<script src="{$obj->mSiteUrl}/scripts/modules/exporting.js"></script> 
{include file="buscador-interna.tpl"}

{literal} 
<script type="text/javascript">
  $(function () {
    $('#container1').highcharts({
      chart:
      {
        type: 'column',
        margin: [ 50, 50, 100, 80]
      },
      title: {
        text: 'Actividad Hoja de Vida'
      },
      xAxis: {
{/literal}
        categories: [{$obj->cCatego}],
{literal}
        labels: {
          rotation: -45,
          align: 'right',
          style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
          }
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: 'N�mero de postulaciones'
        }
      },
      legend: {
        enabled: false
      },
      tooltip: {
        formatter: function() {
          return '<b>'+ this.x +'</b><br/>'+
          'Postulaciones: '+ Highcharts.numberFormat(this.y, 1);
        }
      },
      series: [{
        name: 'Postulaciones',
{/literal}
        data: [{$obj->mResList}],
{literal}
        dataLabels: {
          enabled: true,
          rotation: -90,
          color: '#FFFFFF',
          align: 'right',
          x: 4,
          y: 10,
          style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
          }
        }
      }]
    });
    
    $('#container2').highcharts({
      chart:
      {
        type: 'column',
        margin: [ 50, 50, 100, 80]
      },
      title: {
        text: 'Vistas de Hoja de Vida'
      },
      xAxis: {
{/literal}
        categories: [{$obj->cCatego2}],
{literal}
        labels: {
          rotation: -45,
          align: 'right',
          style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
          }
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: 'N�mero de vistas Hoja de Vida'
        }
      },
      legend: {
        enabled: false
      },
      tooltip: {
        formatter: function() {
          return '<b>'+ this.x +'</b><br/>'+
          'Vistas: '+ Highcharts.numberFormat(this.y, 1);
        }
      },
      series: [{
        name: 'Postulaciones',
{/literal}
        data: [{$obj->mResList2}],
{literal}
        dataLabels: {
          enabled: true,
          rotation: -90,
          color: '#FFFFFF',
          align: 'right',
          x: 4,
          y: 10,
          style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
          }
        }
      }]
    });
  });
</script> 
{/literal}
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
	<div class="container cont_contenidos">
		<div class="cont_titulos-2 inline">
			<h1 class="inline">Mi<span> Perfil</span></h1>
			<div class="clear"></div>
			<h2 class="inline"></h2>
			<!-- <div class="sombra_division"></div> --> 
		</div>
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
				<h2>{$obj->cInfoPer.nom_aspirante}, <span>Bienvenido</span> <em>{$obj->cInfoPer.nom_profesion}</em></h2>
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
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas-2">
	<div class="container cont_contenidos">
		<div id="tab-container" class='tab-container'>
			<ul class='tabs-zonasegura'>
				<li class='tab'><a href="#tabs1">Ofertas recomendadas</a></li>
				<span class="separador"></span>
				<li class='tab'><a href="#tabs2">Ver/Actualizar Mi Hoja de Vida</a></li>
				<span class="separador"></span>
				<li class='tab'><a href="#tabs3">Mis Aplicaciones</a></li>
				<span class="separador"></span>
				<li class='tab'><a href="#tabs4">Mis datos de cuenta</a></li>
			</ul>
			<div class='panel-container'>
				<div id="tabs1">
					<div class="clear espacio_en_blanco"></div>
					<div class="scroll-zonasegura"> {section name=k loop=$obj->cOfert}
						<div class="campo_oferta-int">
							<div class="contcampo_oferta-int">
								<div class="logo_ofertas"> <img <img src="{$obj->mSiteUrl}/cms/files/empresas/emp_{$obj->cOfert[k].fil_logo}" alt="logo {$obj->cOfert[k].txt_nom_comercial}"> </div>
								<div class="info_ofertas-int">
									<div class="row-fluid fluid_ofertas">
										<div class="span7 titulos_oferta">
											<h2 class="inline">{$obj->cOfert[k].txt_cargo}</h2>
											<div class="clear espacio_en_blancopeque"></div>
											<h6><span>Sector:</span> {$obj->cOfert[k].nom_area} - {$obj->cOfert[k].nom_departamento} </h6>
										</div>
										<div class="clear"></div>
										<p>{$obj->cOfert[k].descripcion}</p>
										<div class="clear"></div>
										<div class="span3 offset9">
											<p class="text_peque text_naranja float_right marg20"> <a class="bt_naranja popup float_right" href="#oferta-detalle2" onclick="DetalleOfertaH( '{$obj->cOfert[k].id}' );">Ver m�s informaci�n</a> </p>
										</div>
									</div>
								</div>
							</div>
						</div>
						{/section} </div>
				</div>
				<div id="tabs2" class="relativo"> <a class="editar-dv" href="{$obj->cRegist}">Editar</a>
					<div class="clear espacio_en_blanco"></div>
					<div class="scroll-zonasegura">
						<div class="row-fluid">
							<div class="span12">
								<h2 class="hojadevida-titulo ico-1">Informaci�n General</h2>
								<div class="clear espacio_en_blancopeque"></div>
								<div class="info-general-dv">
									<p><span class="text_naranja">Fecha de nacimiento: </span>{$obj->cPerHv.fec_nacimiento} </p>
									<p><span class="text_naranja">Estado civil: </span>{$obj->cPerHv.nom_estado_civ} </p>
									<p><span class="text_naranja">Tel�fono: </span>{$obj->cPerHv.txt_telefono}</p>
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
									<p><strong>T�tulo:</strong> {$obj->cPerHv.estudios[k].txt_titulo}</p>
									<p><strong>Instituci�n:</strong> {$obj->cPerHv.estudios[k].txt_institucion}</p>
									<p><strong>Finalizaci�n:</strong> {$obj->cPerHv.estudios[k].fec_finaliza}</p>
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
									<p><strong>Aplicaci�n:</strong>{$obj->cPerHv.informa[k].txt_aplicacion}</p>
									<p><strong>Dominio:</strong>{$obj->cPerHv.informa[k].txt_nombre}</p>
									<br />
									{/section} </div>
								{/if}
								<div class="clear espacio_en_blanco"></div>
								<h2 class="hojadevida-titulo ico-7">Experiencia Laboral</h2>
								<div class="experiencia-item"> {section name=k loop=$obj->cPerHv.exper}
									<div class="clear espacio_en_blancopeque"></div>
									<p class="float_left">{$obj->cPerHv.exper[k].txt_cargo}</p>
									<span class="separador-punto"></span>
									<p class="float_left"><em> {$obj->cPerHv.exper[k].txt_empresa}</em> </p>
									<p class="float_left"><span class="text_naranja"> Desde: </span> {$obj->cPerHv.exper[k].fec_ingreso} </p>
									{if $obj->cPerHv.exper[k].fec_finaliza!="0000-00-00"}
									<p class="float_left"><span class="text_naranja"> &nbsp; &nbsp; Hasta: </span> {$obj->cPerHv.exper[k].fec_finaliza} </p>
									{/if}
									<div class="clear espacio_en_blancopeque"></div>
									<p><em>Labor desempe�ada:</em></p>
									<p>{$obj->cPerHv.exper[k].txt_funciones}</p>
								</div>
								{/section} </div>
						</div>
					</div>
				</div>
				<div id="tabs3">
					<div class="scroll-zonasegura"> {section name=k loop=$obj->cOferApl}
						<div class="campo_oferta-int {$obj->cOferApl[k].estado}">
							<div class="contcampo_oferta-int">
								<div class="logo_ofertas"> <img src="{$obj->mSiteUrl}/cms/files/empresas/emp_{$obj->cOferApl[k].fil_logo}" alt="logo {$obj->cOferApl[k].txt_nom_comercial}"> </div>
								<div class="info_ofertas-int">
									<div class="row-fluid fluid_ofertas">
										<div class="span7 titulos_oferta">
											<h2 class="inline">{$obj->cOferApl[k].txt_cargo}</h2>
											<div class="clear espacio_en_blancopeque"></div>
											<h6><span>Sector:</span> {$obj->cOferApl[k].nom_area} - {$obj->cOferApl[k].nom_departamento} </h6>
										</div>
										<div class="clear"></div>
										<p>{$obj->cOferApl[k].descripcion}</p>
										<div class="clear"></div>
										<div class="span3 offset9">
											<p class="text_peque text_naranja float_right marg20"> <a class="bt_naranja popup float_right" href="#oferta-detalle2" onclick="DetalleOfertaH( '{$obj->cOferApl[k].id}' );">Ver m�s informaci�n</a> </p>
										</div>
									</div>
								</div>
							</div>
						</div>
						{/section} </div>
				</div>
				<div id="tabs4">
					<form action="{$obj->mThisUrl}" class="formulario-zonasegura" name="frm-zonasegura" id="frm-zonasegura" method="post" enctype="multipart/form-data">
						<input type="hidden" name="modo" value="save" />
						<a class="cerrar-dv" id="enviar_misdatos" href="#">Guardar</a>
						<div class="clear espacio_en_blanco"></div>
						<div class="row-fluid">
							<div class="span4">
								<label>Cargar/Modificar imagen de perfil</label>
								<input type="file" name="fil_image" id="fil_image">
							</div>
							<div class="span4">
								<label>Modificar contrase�a</label>
								<input type="password" name="txt_passwd" id="txt_passwd" value="{$obj->cData.txt_passwd}">
							</div>
							<div class="span4">
								<label>Nivel de Privacidad de Hoja de Vida </label>
								<select class="select_dd priva" name="ind_privaci" id="ind_privaci" style="width:100% ;margin-top: 10px;">
									<option class="nivel_p_1" value="0" {if $obj->cInfoPer.ind_privaci=='1'}selected="selected"{/if}>P�blico</option>
									<option class="nivel_p_2" value="0" {if $obj->cInfoPer.ind_privaci=='0'}selected="selected"{/if}>Privado (No ser� listado en resultados de b�squeda)</option>
								</select>
								<div class="tooltip-priva">
									<p><b>P�blico:</b> Las empresas podran visualizar tu hoja de vida </p>
									<p><b>Privado:</b> Las empresas no podran consultar a tu hoja de vida </p>
								</div>
							</div>
						</div>
						<div class="clear espacio_en_blanco"></div>
						<div class="clear espacio_en_blanco"></div>
						<div class="clear espacio_en_blanco"></div>
						<div class="clear espacio_en_blanco"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="separador-gris"></div>
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas-2">
	<div class="container cont_contenidos">
		<div class="row-fluid">
			<div class="span12 box-estadisticas">
				<h2 class="estadisticas-titulo">Actividad Hoja de Vida</h2>
				<div class="clear espacio_en_blancopeque"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. .</p>
				<div class="clear espacio_en_blanco"></div>
				<div id="container1" style="min-width: 412px; height: 296px; margin: 0 auto"></div>
			</div>
			<div class="span12 box-estadisticas" >
				<h2 class="estadisticas-titulo">Vistas de Hoja de Vida</h2>
				<div class="clear espacio_en_blancopeque"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. .</p>
				<div class="clear espacio_en_blanco"></div>
				<div id="container2" style="min-width: 412px; height: 296px; margin: 0 auto"></div>
			</div>
		</div>
	</div>
</div>