{load_presentation_object filename="zona_personas/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class=" listContainer">
  <h1>Personas</h1>
  <br>
  <a href="{$obj->mDescarga}">Descargar</a>
  {$obj->mList}
</div>
{else}

{literal}
<script type="text/javascript">
  $(function(){
    $('#tabs').tabs();
  });
</script>
<style>
#tabs {}
#tabs li {
width: auto;
height: 30px;
padding: 0 10px;
line-height: 25px;}
#tabs li a {
margin: 0 auto;
padding: 0;}

#tabs-1, #tabs-2, #tabs-3, #tabs-4, #tabs-5, #tabs-6, #tabs-7, #tabs-8 { border: 1px solid #ddd;
padding: 20px 0 20px;
	background: #F3F1F1;
	background: -moz-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -webkit-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -o-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -ms-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: linear-gradient(180deg, #FDFCFC 30%, #F3F1F1 70%);}
	
	.icon-pencil { margin: 2px 0 0;}
	
</style>
{/literal}

<div class="">
  <div class="btn-group">
    <a href="{$obj->mThisUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="formContainer">
  <h1>Personas</h1>
  <br>

  <!--Start Horizontal Tabs-->
  <div id="tabs">
    <ul>
      <li><a href="#tabs-1"><i class="icon-pencil"></i> Usuario</a></li>
      <li><a href="#tabs-2"><i class="icon-pencil"></i> Profesional</a></li>
      <li><a href="#tabs-3"><i class="icon-pencil"></i> Exp laboral</a></li>
      <li><a href="#tabs-4"><i class="icon-pencil"></i> Edu formal</a></li>
      <li><a href="#tabs-5"><i class="icon-pencil"></i> Edu no formal</a></li>
      <li><a href="#tabs-6"><i class="icon-pencil"></i> Idioma</a></li>
      <li><a href="#tabs-7"><i class="icon-pencil"></i> Informatica</a></li>
    </ul>

    <div id="tabs-1">
 
          <div class="span5">
            <label class="label">Identificacion</label>
            <p>{$obj->mData.num_identifica}</p>
          </div>

          <div class="span5">
            <label class="label">Primer nombre</label>
            <p>{$obj->mData.txt_prim_nom}</p>
          </div>

          <div class="span5">
            <label class="label">Segundo nombre</label>
            <p>{$obj->mData.txt_seg_nom}</p>
          </div>

          <div class="span5">
            <label class="label">Primer apellido</label>
            <p>{$obj->mData.txt_prim_apell}</p>
          </div>

          <div class="span5">
            <label class="label">Segundo apellido</label>
            <p>{$obj->mData.txt_seg_apell}</p>
          </div>

          <div class="span5">
            <label class="label">Genero</label>
            <p>{$obj->mData.nom_genero}</p>
          </div>

          <div class="span5">
            <label class="label">fecha nacimiento</label>
            <p>{$obj->mData.fec_nacimiento}</p>
          </div>

          <div class="span5">
            <label class="label">Estado civil</label>
            <p>{$obj->mData.nom_estado_civ}</p>
          </div>

          <div class="span5">
            <label class="label">Departamento</label>
            <p>{$obj->mData.nom_departamento}</p>
          </div>

          <div class="span5">
            <label class="label">Ciudad</label>
            <p>{$obj->mData.nom_ciudad}</p>
          </div>

          <div class="span5">
            <label class="label">Barrio</label>
            <p>{$obj->mData.txt_barrio}</p>
          </div>

          <div class="span5">
            <label class="label">Telefono</label>
            <p>{$obj->mData.txt_telefono}</p>
          </div>

          <div class="span5">
            <label class="label">Movil</label>
            <p>{$obj->mData.txt_movil}</p>
          </div>

          <div class="span5">
            <label class="label">Poblacion</label>
            <p>{$obj->mData.nom_poblacion}</p>
          </div>
            <div style="clear:both;"></div>
    </div>

    <div id="tabs-2">
   
          <div class="span5">
            <label class="label">Profesion</label>
            <p>{$obj->mData.profe.nom_profesion}</p>
          </div>

          <div class="span5">
            <label class="label">Trabajando</label>
            <p>{$obj->mData.profe.trabajando}</p>
          </div>

          <div class="span5">
            <label class="label">Aspiraci&oacute;n</label>
            <p>{$obj->mData.profe.nom_aspiracion}</p>
          </div>

          <div class="span5">
            <label class="label">Tipo trabajo</label>
            <p>{$obj->mData.profe.txt_tipotrabajo}</p>
          </div>

          <div class="span5">
            <label class="label">Perfil</label>
            <p>{$obj->mData.profe.txt_perfil}</p>
          </div>

          <div class="span5">
            <label class="label">Habilidades</label>
            <p>{$obj->mData.profe.fec_nacimiento}</p>
          </div>
          <div style="clear:both;"></div>
    </div>

    <div id="tabs-3">
   
          {section name=k loop=$obj->mData.exper}
          <div id="contenedor_{$smarty.section.k.index}">
            <div class="span5">
              <label class="label">Empresa</label>
              <p>{$obj->mData.exper[k].txt_empresa}</p>
            </div>

            <div class="span5">
              <label class="label">Cargo</label>
              <p>{$obj->mData.exper[k].txt_cargo}</p>
            </div>

            <div class="span5">
              <label class="label">Area laboral</label>
              <p>{$obj->mData.exper[k].nom_arealab}</p>
            </div>

            <div class="span5">
              <label class="label">Fecha ingreso</label>
              <p>{$obj->mData.exper[k].fec_ingreso}</p>
            </div>

            <div class="span5">
              <label class="label">Actual</label>
              <p>{$obj->mData.exper[k].actual}</p>
            </div>

            <div class="span5">
              <label class="label">Fecha finalizaci&oacute;n</label>
              <p>{$obj->mData.exper[k].fec_finaliza}</p>
            </div>

            <div class="span5">
              <label class="label">Departamento</label>
              <p>{$obj->mData.exper[k].nom_departamento}</p>
            </div>

            <div class="span5">
              <label class="label">Ciudad</label>
              <p>{$obj->mData.exper[k].nom_ciudad}</p>
            </div>

            <div class="span5">
              <label class="label">Telefono</label>
              <p>{$obj->mData.exper[k].txt_telefono}</p>
            </div>

            <div class="span5">
              <label class="label">Funciones</label>
              <p>{$obj->mData.exper[k].txt_funciones}</p>
            </div>
          </div>
          {/section}

            <div style="clear:both;"></div>
    </div>

    <div id="tabs-4">


          {section name=k loop=$obj->mData.formal}
          <div id="contenedor_{$smarty.section.k.index}">
            <div class="span5">
              <label class="label">Nivel estudio</label>
              <p>{$obj->mData.formal[k].nivel_estudio}</p>
            </div>

            <div class="span5">
              <label class="label">Titulo obtenido</label>
              <p>{$obj->mData.formal[k].txt_titulo}</p>
            </div>

            <div class="span5">
              <label class="label">Institucion laboral</label>
              <p>{$obj->mData.formal[k].txt_institucion}</p>
            </div>

            <div class="span5">
              <label class="label">Estudio en curso</label>
              <p>{$obj->mData.formal[k].encurso}</p>
            </div>

            <div class="span5">
              <label class="label">A&ntilde;o finalizaci&oacute;n</label>
              <p>{$obj->mData.formal[k].fec_finaliza}</p>
            </div>

            <div class="span5">
              <label class="label">Departamento</label>
              <p>{$obj->mData.formal[k].nom_departamento}</p>
            </div>

            <div class="span5">
              <label class="label">Ciudad</label>
              <p>{$obj->mData.formal[k].nom_ciudad}</p>
            </div>
          </div>
          {/section}
            <div style="clear:both;"></div>
    </div>

    <div id="tabs-5">
      

          {section name=k loop=$obj->mData.nformal}
          <div id="contenedor_{$smarty.section.k.index}">
            <div class="span5">
              <label class="label">Titulo obtenido</label>
              <p>{$obj->mData.nformal[k].txt_titulo}</p>
            </div>

            <div class="span5">
              <label class="label">Institui&oacute;n</label>
              <p>{$obj->mData.nformal[k].txt_institucion}</p>
            </div>

            <div class="span5">
              <label class="label">Estudio en curso</label>
              <p>{$obj->mData.nformal[k].encurso}</p>
            </div>

            <div class="span5">
              <label class="label">A&ntilde;o finalizaci&oacute;n</label>
              <p>{$obj->mData.nformal[k].fec_finaliza}</p>
            </div>

            <div class="span5">
              <label class="label">Departamento</label>
              <p>{$obj->mData.nformal[k].nom_departamento}</p>
            </div>

            <div class="span5">
              <label class="label">Ciudad</label>
              <p>{$obj->mData.nformal[k].nom_ciudad}</p>
            </div>
          </div>
          {/section}
        <div style="clear:both;"></div>
    </div>

    <div id="tabs-6">
  

          {section name=k loop=$obj->mData.idioma}
          <div id="contenedor_{$smarty.section.k.index}">
            <div class="span5">
              <label class="label">Idioma</label>
              <p>{$obj->mData.idioma[k].nom_idioma}</p>
            </div>

            <div class="span5">
              <label class="label">Cual</label>
              <p>{$obj->mData.idioma[k].txt_cual}</p>
            </div>

            <div class="span5">
              <label class="label">Habla</label>
              <p>{$obj->mData.idioma[k].nom_habla}</p>
            </div>

            <div class="span5">
              <label class="label">Escritura</label>
              <p>{$obj->mData.idioma[k].nom_escritura}</p>
            </div>

            <div class="span5">
              <label class="label">Lectura</label>
              <p>{$obj->mData.idioma[k].nom_lectura}</p>
            </div>
          </div>
          {/section}
     <div style="clear:both;"></div>
      
    </div>

    <div id="tabs-7">
      

          {section name=k loop=$obj->mData.infor}
          <div id="contenedor_{$smarty.section.k.index}">
            <div class="span5">
              <label class="label">Programa o aplicaci&oacute;n</label>
              <p>{$obj->mData.infor[k].txt_aplicacion}</p>
            </div>

            <div class="span5">
              <label class="label">Dominio</label>
              <p>{$obj->mData.infor[k].nom_dominio}</p>
            </div>
          </div>
          {/section}

           <div style="clear:both;"></div>
    </div>

  </div>
</div>
{/if}
</div>