{load_presentation_object filename="registro_oferta" assign="obj"}

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos inline">
      <h1 class="inline">Agregue <span> su oferta aquí</span></h1>
      <div class="clear"></div>
      <h2 class="inline">Nueva ofertas</h2>
      <!-- <div class="sombra_division"></div> -->
    </div>
    <div class="clear espacio_en_blanco"></div>
    <div class="row">
      <div class="span8 cont_izqgris form-agregarofert offset2">
        <div class="cont_cont_grisancho620">
          <div class="row-fluid form_fluid">
            <div class="span12">
              <form name="registro_oferta" id="registro_oferta" method="post" enctype="multipart/form-data">
                <input type="hidden" name="enviar" value="enviar" />
                {if $obj->cData.id_oferta}
                  <input type="hidden" name="id_oferta" id="id_oferta" value="{$obj->cData.id_oferta}" />
                {/if}
                <div class="row-fluid cont_formfluid">

                  <fieldset class="pasos_formulario" id="info1">
                    <!-- <legend class="tit_formulario"> <strong>Lorem ipsum dolor sit amet</strong> , consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </legend> -->
                    <!-- <div class="clear espacio_en_blanco"></div> -->
                    <h2 ><span>Agregar una nueva oferta</span></h2>
                    <div class="clear espacio_en_blanco"></div>
                    <h2 ><span>Detalles del cargo</span></h2>
                    <div class="clear espacio_en_blanco"></div>
                    <div class="span7">
                      <label>Nombre del Cargo <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_cargo" id="txt_cargo" class="requerido" placeholder="Nombre del Cargo" title="Nombre del Cargo" value="{$obj->cData.txt_cargo}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span12">
                      <label>Descripción de la Oferta (Máximo 500 caracteres) <span>(*)</span></label>
                    </div>
                    <div class="span12">
                      <textarea name="txt_descripcion" id="txt_descripcion" class="requerido" title="Descripci&oacute;n" >{$obj->cData.txt_descripcion}</textarea>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Departamento <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_departamento" id="id_departamento" onchange="RecargarCiudades('id_ciudad', this);" title="Departamento">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cDeparts}
                          {if $obj->cDeparts[k].id==$obj->cData.id_departamento}
                            <option value="{$obj->cDeparts[k].id}" selected="selected">{$obj->cDeparts[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cDeparts[k].id}">{$obj->cDeparts[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    <div class="clear espacio_en_blanco"></div>

                    <div class="span7">
                      <label>Ciudad / Municipio <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_ciudad" id="id_ciudad" title="Ciudad">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cCiudades}
                          {if $obj->cCiudades[k].id==$obj->cData.id_ciudad}
                            <option value="{$obj->cCiudades[k].id}" selected="selected">{$obj->cCiudades[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cCiudades[k].id}">{$obj->cCiudades[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Sector <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_area" id="id_area" title="&Aacute;rea" onchange="RecargarProfesion( 'id_sector', this );">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cArea}
                          {if $obj->cArea[k].id==$obj->cData.id_area}
                            <option value="{$obj->cArea[k].id}" selected="selected">{$obj->cArea[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cArea[k].id}">{$obj->cArea[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Área <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_sector" id="id_sector" title="Profesi&oacute;n">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cSector}
                          {if $obj->cSector[k].id==$obj->cData.id_sector}
                            <option value="{$obj->cSector[k].id}" selected="selected">{$obj->cSector[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cSector[k].id}">{$obj->cSector[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Jerarqu&iacute;a <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_jerarquia" id="id_jerarquia" title="Jerarqu&iacute;a">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cJerar}
                          {if $obj->cJerar[k].id==$obj->cData.id_jerarquia}
                            <option value="{$obj->cJerar[k].id}" selected="selected">{$obj->cJerar[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cJerar[k].id}">{$obj->cJerar[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Salario <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_area_aspi" id="id_area_aspi" title="Salario">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cAspira}
                          {if $obj->cAspira[k].id==$obj->cData.id_area_aspi}
                            <option value="{$obj->cAspira[k].id}" selected="selected">{$obj->cAspira[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cAspira[k].id}">{$obj->cAspira[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Número de vacantes <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="num_vacantes" id="num_vacantes" class="requerido" placeholder="Número de vacantes" title="Número de vacantes" value="{$obj->cData.num_vacantes}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span12">
                      <label>Requisitos (Máximo 500 caracteres) <span>(*)</span></label>
                    </div>
                    <div class="span12">
                      <textarea name="txt_requisitos" id="txt_requisitos" class="requerido" title="Requisitos">{$obj->cData.txt_requisitos}</textarea>
                    </div>
                    <div class="clear espacio_en_blanco"></div>

                    <h2 ><span>Informaci&oacute;n general del aspirante</span></h2>
                    <div class="clear espacio_en_blanco"></div>

                    <div class="clear espacio_en_blanco"></div>
                    <div class="span7">
                      <label>Nivel de Estudios del aspirante <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_nivel_estudio" id="id_nivel_estudio" title="Nivel de estudios">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cNivEst}
                          {if $obj->cNivEst[k].id==$obj->cData.id_nivel_estudio}
                            <option value="{$obj->cNivEst[k].id}" selected="selected">{$obj->cNivEst[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cNivEst[k].id}">{$obj->cNivEst[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    {*}
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                    <label>Área Profesional del aspirante <span>()</span></label>
                    </div>
                    <div class="span5">
                    <select class="selectdd requerido" style="width:100%;" name="id_area_aspi" id="id_area_aspi" title="Área Profesional">
                    <option value="">Seleccione</option>
                    {section name=k loop=$obj->cSector}
                    {if $obj->cSector[k].id==$obj->cData.id_area_aspi}
                    <option value="{$obj->cSector[k].id}" selected="selected">{$obj->cSector[k].txt_nombre}</option>
                    {else}
                    <option value="{$obj->cSector[k].id}">{$obj->cSector[k].txt_nombre}</option>
                    {/if}
                    {/section}
                    </select>
                    </div>
                    {*}
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Departamento de residencia del aspirante <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_depto_aspi" id="id_depto_aspi" onchange="RecargarCiudades('id_ciudad_aspi', this);" title="Departamento">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cDeparts}
                          {if $obj->cDeparts[k].id==$obj->cData.id_depto_aspi}
                            <option value="{$obj->cDeparts[k].id}" selected="selected">{$obj->cDeparts[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cDeparts[k].id}">{$obj->cDeparts[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    <div class="clear espacio_en_blanco"></div>

                    <div class="span7">
                      <label>Ciudad / Municipio del aspirante<span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_ciudad_aspi" id="id_ciudad_aspi" title="Ciudad">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cCiudades}
                          {if $obj->cCiudades[k].id==$obj->cData.id_ciudad_aspi}
                            <option value="{$obj->cCiudades[k].id}" selected="selected">{$obj->cCiudades[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cCiudades[k].id}">{$obj->cCiudades[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Edad del aspirante en a&ntilde;os{*<span>(*)</span>*}</label>
                    </div>
                    <div class="span5">
                      <input type="text" name="num_edad_aspi" id="num_edad_aspi" placeholder="Edad" title="Edad" value="{$obj->cData.num_edad_aspi}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Experiencia Laboral requerida en a&ntilde;os <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="num_exp_aspi" id="num_exp_aspi" class="requerido" placeholder="Experiencia Laboral" title="Experiencia Laboral" value="{$obj->cData.num_exp_aspi}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <a href="{$obj->mVolver}" class="atras_btn2 inline float_left">Atrás</a>
                    <a class="inline float_right form_finalizado" id="enviar_oferta" {*href="registro_exitoso-empresa.php"*}>Finalizar</a>
                    <div class="clear espacio_en_blancopeque"></div>
                  </fieldset>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  {$obj->cScript}
</script>