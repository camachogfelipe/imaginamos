{load_presentation_object filename="registro_empresa" assign="obj"}

{include file="buscador-interna.tpl"}

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos inline">
      <h1 class="inline">Realice <span> su registro aquí</span></h1>
      <div class="clear"></div>
      <h2 class="inline">Empresas</h2>
      <!-- <div class="sombra_division"></div> -->
    </div>
    <div class="clear espacio_en_blanco"></div>
    <div class="row">
      <div class="span4 columna_tabsformularios">
        <ul class="pasos_formularios">
          <li class="activo_btformulario info1">Registro en el Sistema</li>
          <li class="info2">Datos de Contacto del Administrador</li>
          <li class="info3">Datos de la Empresa</li>
        </ul>
      </div>
      <div class="span8 cont_izqgris">
        <div class="cont_cont_grisancho620">
          <div class="row-fluid form_fluid">
            <div class="span12">
              <form name="registro_empresa" id="registro_empresaaa" method="post" enctype="multipart/form-data">
                <div class="row-fluid cont_formfluid">
                  <fieldset class="pasos_formulario" id="info1">

                    <input type="hidden" name="enviar" value="enviar" />
                    <input type="hidden" name="acp_terminos" id="acp_terminos" class="requerido1" value="" title="terminos y condiciones" />
                    {if $obj->cData.id_registro}
                      <input type="hidden" name="id_registro" id="id_registro" value="{$obj->cData.id_registro}" />
                    {/if}
                    <!-- <legend class="tit_formulario"> <strong>Lorem ipsum dolor sit amet</strong> , consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </legend> -->
                    <!-- <div class="clear espacio_en_blanco"></div> -->
                    <h2 ><span>Registro en el Sistema</span></h2>
                    <div class="clear espacio_en_blanco"></div>
                    <div class="span7">
                      <label>Usuario <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_nickname" id="txt_nickname" class="solo_texto_numeros requerido1 validate[required]" placeholder="Usuario" title="Usuario" value="{$obj->cData.txt_nickname}" >
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>E-mail <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_email" id="txt_email" class="requerido1 validate[required]" placeholder="E-mail" title="E-mail" value="{$obj->cData.txt_email}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Confirmación e-mail <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_email2" id="txt_email2" class="requerido1 validate[required]" placeholder="Confirmación e-mail" title="Confirmación e-mail" value="{$obj->cData.txt_email}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Contraseña <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="password" name="txt_passwd" id="txt_passwd" class="requerido1 validate[required]" placeholder="Contraseña" title="Contraseña" value="{$obj->cData.txt_passwd}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Confirmación contraseña <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="password" name="txt_passwd2" id="txt_passwd2" class="requerido1 validate[required]" placeholder="Confirmación contraseña" title="Confirmación contraseña">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label for="option3" class="lblr"><a class="terminos-condiciones" href="terminos-condiciones.php">Acepto términos y condiciones</a> <span>(*)</span></label>
                    </div>
                    <div class="span5 col-forms">
                      <p>
                        <input type="radio" name="data" value="option1" id="term_option1" class="requerido1 validate[required]" {*onclick="terminos(1)"*}>
                        <label for="term_option1" class="lblr">Si</label>
                      </p>
                      <p>
                        <input type="radio" name="data" value="option2" id="term_option2" class="cform validate[required]" {*onclick="terminos(0)"*}>
                        <label for="term_option2" class="lblr">No</label>
                      </p>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7"> {$obj->cCaptcha} </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <a class="siguiente_btn siguiente_btn1 inline float_right" onClick="btnSiguiente(1)">Siguiente</a>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="campos_obli">*(campos obligatorios)</div>
                    <div class="clear espacio_en_blancopeque"></div>
                  </fieldset>

                  <fieldset class="pasos_formulario" id="info2">

                    <h2 ><span>Datos de Contacto del Administrador</span></h2>
                    <div class="clear espacio_en_blanco"></div>
                    {if $obj->cData.id_empresa}
                      <input type="hidden" name="id_empresa" id="id_empresa" value="{$obj->cData.id_empresa}" />
                    {/if}
                    <div class="span7">
                      <label>Primer nombre <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_prim_nom" id="txt_prim_nom" class="val_texto solo_texto requerido2 validate[required]" placeholder="Primer nombre" title="Primer nombre" value="{$obj->cData.txt_prim_nom}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Segundo nombre </label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_seg_nom" id="txt_seg_nom" placeholder="Segundo nombre" class="solo_texto" value="{$obj->cData.txt_seg_nom}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Primer apellido <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_prim_apell" id="txt_prim_apell" class="val_texto solo_texto requerido2 validate[required]" placeholder="Primer apellido" title="Primer apellido" value="{$obj->cData.txt_prim_apell}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Segundo apellido</label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_seg_apell" id="txt_seg_apell" class="solo_texto" placeholder="Segundo apellido" value="{$obj->cData.txt_seg_apell}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Género <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd" name="id_genero" id="id_genero" class="requerido2 validate[required]" style="width:100% ;" title="Género">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cGeneros}
                          {if $obj->cGeneros[k].id==$obj->cData.id_genero}
                            <option value="{$obj->cGeneros[k].id}" selected="selected">{$obj->cGeneros[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cGeneros[k].id}">{$obj->cGeneros[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Fecha de nacimiento <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" class="datepicker" name="fec_nacimiento" class="requerido2 validate[required]" id="fec_nacimiento" placeholder="Fecha de nacimiento" title="Fecha de nacimiento" value="{$obj->cData.fec_nacimiento}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Cargo <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_cargo" id="txt_cargo" class="val_texto solo_texto requerido2 validate[required]" placeholder="Cargo" title="Cargo" value="{$obj->cData.txt_cargo}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Teléfono <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_telefono" id="txt_telefono" class="requerido2 validate[required]" placeholder="Teléfono" title="Teléfono" value="{$obj->cData.txt_telefono}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <a class="atras_btn inline float_left atras_btn_frm2" id="atras_btn_frm2">Atrás</a> <a class="siguiente_btn siguiente_btn2 inline float_right" onClick="btnSiguiente(2)">Siguiente</a>
                    <div class="clear espacio_en_blancogrande"></div>
                    <div class="campos_obli">*(campos obligatorios)</div>
                    <div class="clear espacio_en_blancopeque"></div>
                  </fieldset>

                  <fieldset class="pasos_formulario" id="info3">

                    <h2><span>Datos de la Empresa</span></h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    {if $obj->cData.id_contacto}
                      <input type="hidden" name="id_contacto" id="id_contacto" value="{$obj->cData.id_contacto}" />
                    {/if}
                    <div class="span7">
                      <label>Nombre Comercial</label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_nom_comercial" id="txt_nom_comercial" class="val_texto solo_texto" placeholder="Nombre comercial" title="Nombre comercial" value="{$obj->cData.txt_nom_comercial}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Razón social <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_razon_social" id="txt_razon_social" class="val_texto solo_texto requerido3 validate[required]" placeholder="Razón socia" title="Razón social" value="{$obj->cData.txt_razon_social}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Sector <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido3 validate[required]" name="id_ramo" id="id_ramo" style="width:100%;" title="Ramo">
                        <option value="">Seleccione</option>
                        {section name=k loop=$obj->cRamos}
                          {if $obj->cRamos[k].id==$obj->cData.id_ramo}
                            <option value="{$obj->cRamos[k].id}" selected="selected">{$obj->cRamos[k].txt_nombre}</option>
                          {else}
                            <option value="{$obj->cRamos[k].id}">{$obj->cRamos[k].txt_nombre}</option>
                          {/if}
                        {/section}
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Ramo/actividad</label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_ramo_2" id="txt_ramo_2" placeholder="Otro ramo o actividad" value="{$obj->cData.txt_ramo_2}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Dirección <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_direccion" id="txt_direccion" class="requerido3 validate[required]" placeholder="Dirección" title="Dirección" value="{$obj->cData.txt_direccion}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Departamento <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd selectdd requerido3 validate[required]" name="id_departamento" id="id_departamento" style="width:100%;" onchange="RecargarCiudades('id_ciudad', this);" title="Departamento">
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
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Ciudad / Municipio <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido validate[required]" name="id_ciudad" id="id_ciudad" style="width:100%;" title="Ciudad">
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
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>NIT <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_nit" id="txt_nit" class="requerido3 validate[required]" placeholder="NIT" title="Nit" value="{$obj->cData.txt_nit}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Página Web</label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_website" id="txt_website" placeholder="Página Web" value="{$obj->cData.txt_website}">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span12 relativo"><a href="#oferta-detalle2" class="bt_ayudaform popup" onclick="AyudaHV('1');"></a>
                      <label>Descripción de la empresa (Máximo 500 caracteres) <span>(*)</span></label>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span12">
                      <textarea name="txt_descripcion" id="txt_descripcion" class="requerido3 validate[required]" title="Descripción">{$obj->cData.txt_descripcion}</textarea>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Logo</label>
                    </div>
                    <div class="span5">
                      <input type="file" name="fil_image" id="fil_image" >
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <a class="atras_btn inline float_left">Atrás</a> <a class="inline float_right form_finalizado" id="enviar_empresa" {*href="registro_exitoso-empresa.php"*}>Finalizar</a>
                    <div class="clear espacio_en_blancogrande"></div>
                    <div class="campos_obli">*(campos obligatorios)</div>
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