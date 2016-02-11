<?php /* Smarty version 2.6.24, created on 2014-01-16 21:59:52
         compiled from registro_persona.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'registro_persona.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'registro_persona','assign' => 'obj'), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buscador-interna.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos inline">
      <h1 class="inline">Realice <span> su registro aqu&iacute;</span></h1>
      <div class="clear"></div>
      <h2 class="inline">Usuarios</h2>

      <!-- <div class="sombra_division"></div> -->
    </div>
    <div class="clear espacio_en_blanco"></div>
    <div class="row">
      <div class="span4 columna_tabsformularios">
        <ul class="pasos_formularios">
          <?php if ($this->_tpl_vars['obj']->cEdit != 'edit'): ?>
            <li class="activo_btformulario info1">Registro en el Sistema</li>
            <li class="info2">Perf&iacute;l de usuario</li>
          <?php else: ?>
            <li class="activo_btformulario info2">Perf&iacute;l de usuario</li>
          <?php endif; ?>
          <li class="info3">Perf&iacute;l profesional</li>
          <li class="info4">Experiencia laboral</li>
          <li class="info5">Educaci&oacute;n formal</li>
          <li class="info6">Educaci&oacute;n no formal</li>
          <li class="info7">Idiomas</li>
          <li class="info8">Inform&aacute;tica</li>
        </ul>
      </div>
      <div class="span8 cont_izqgris">
        <div class="cont_cont_grisancho620">
          <div class="row-fluid form_fluid">
            <div class="span12">
              <form name="registro_usuario" id="registro_usuario" method="post" >
                <input type="hidden" name="enviar" value="enviar" />
                <div class="row-fluid cont_formfluid">
                  <?php if ($this->_tpl_vars['obj']->cEdit != 'edit'): ?>
                    <fieldset class="pasos_formulario" id="info1">

                      <input type="hidden" name="acp_terminos" id="acp_terminos" class="requerido1" value="" title="Terminos y condiciones" />
                      <!-- <legend class="tit_formulario"> <strong>Lorem ipsum dolor sit amet</strong> , consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </legend> -->
                      <!-- <div class="clear espacio_en_blanco"></div> -->
                      <h2 ><span>Registro en el Sistema</span></h2>
                      <div class="clear espacio_en_blanco"></div>
                      <div class="span7">
                        <label>Usuario <span>(*)</span></label>
                      </div>
                      <div class="span5">
                        <input type="text" name="txt_nickname" id="txt_nickname" class="solo_texto_numeros requerido1 validate[required]" placeholder="Usuario" title="Usuario" value="<?php echo $this->_tpl_vars['obj']->cData['txt_nickname']; ?>
">
                      </div>
                      <div class="clear espacio_en_blancopeque"></div>
                      <div class="span7">
                        <label>E-mail <span>(*)</span></label>
                      </div>
                      <div class="span5">
                        <input type="text" name="txt_email" id="txt_email" class="requerido1 validate[required]" placeholder="E-mail" title="E-mail" value="<?php echo $this->_tpl_vars['obj']->cData['txt_email']; ?>
">
                      </div>
                      <div class="clear espacio_en_blancopeque"></div>
                      <div class="span7">
                        <label>Confirmaci&oacute;n e-mail <span>(*)</span></label>
                      </div>
                      <div class="span5">
                        <input type="text" name="txt_email2" id="txt_email2" class="requerido1 validate[required]" placeholder="Confirmaci&oacute;n e-mail" title="Confirmaci&oacute;n e-mail" value="<?php echo $this->_tpl_vars['obj']->cData['txt_email']; ?>
">
                      </div>
                      <div class="clear espacio_en_blancopeque"></div>
                      <div class="span7">
                        <label>Contrase&ntilde;a <span>(*)</span></label>
                      </div>
                      <div class="span5">
                        <input type="password" name="txt_passwd" id="txt_passwd" class="requerido1 validate[required]" placeholder="Contrase&ntilde;a" title="Contrase&ntilde;a" value="<?php echo $this->_tpl_vars['obj']->cData['txt_passwd']; ?>
">
                      </div>
                      <div class="clear espacio_en_blancopeque"></div>
                      <div class="span7">
                        <label>Confirmaci&oacute;n contrase&ntilde;a <span>(*)</span></label>
                      </div>
                      <div class="span5">
                        <input type="password" name="txt_passwd2" id="txt_passwd2" class="requerido1 validate[required]" placeholder="Confirmaci&oacute;n contrase&ntilde;a" title="Confirmaci&oacute;n contrase&ntilde;a" >
                      </div>
                      <div class="clear espacio_en_blancopeque"></div>
                      <div class="span7">
                        <label for="option3" class="lblr"><a class="terminos-condiciones" href="terminos-condiciones.php">Acepto t&eacute;rminos y condiciones</a> <span>(*)</span></label>
                      </div>
                      <div class="span5 col-forms">
                        <p>
                          <input class="validate[required]" type="radio" name="data" value="option1" id="term_option1" />

                          <label for="term_option1" class="lblr">Si</label>
                        </p>
                        <p>
                          <input type="radio" name="data" value="option2" id="term_option2" class="" >
                          <label for="term_option2" class="lblr">No</label>
                        </p>
                      </div>
                      <div class="clear espacio_en_blancopeque"></div>
                      <div class="span7"> <?php echo $this->_tpl_vars['obj']->cCaptcha; ?>
 </div>
                      <div class="campos_obli">*(campos obligatorios)</div>
                      <div class="clear espacio_en_blancopeque"></div>
                      <a class="siguiente_btn siguiente_btn1 inline float_right valid1" onclick="btnSiguiente(1)">Siguiente</a>

                      <div class="clear espacio_en_blancopeque"></div>
                    </fieldset>
                  <?php endif; ?>

                <?php if ($this->_tpl_vars['obj']->cData['id_registro'] != ""): ?>
                  <input type="hidden" name="id_registro" value="<?php echo $this->_tpl_vars['obj']->cData['id_registro']; ?>
" />
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['obj']->cData['id_persona'] != ""): ?>
                  <input type="hidden" name="id_persona" value="<?php echo $this->_tpl_vars['obj']->cData['id_persona']; ?>
" />
                <?php endif; ?>

                  <fieldset class="pasos_formulario" id="info2">

                    <h2 ><span>Perf&iacute;l de usuario</span></h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>N&uacute;mero de identificaci&oacute;n <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="num_identifica" id="num_identifica" class="val_num solo_numeros requerido2 validate[required]" placeholder="N&uacute;mero de identificaci&oacute;n" title="N&uacute;mero de identificaci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['num_identifica']; ?>
" onkeyup="format(this)">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Primer nombre <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_prim_nom" id="txt_prim_nom" class="val_texto solo_texto requerido2 validate[required]" placeholder="Primer nombre" title="Primer nombre" value="<?php echo $this->_tpl_vars['obj']->cData['txt_prim_nom']; ?>
"  onkeyup="checkInput(this)">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Segundo nombre </label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_seg_nom" id="txt_seg_nom" class="solo_texto" placeholder="Segundo nombre" value="<?php echo $this->_tpl_vars['obj']->cData['txt_seg_nom']; ?>
"  onkeyup="checkInput(this)">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Primer apellido <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_prim_apell" id="txt_prim_apell" class="val_texto solo_texto requerido2 validate[required]" placeholder="Primer apellido" title="Primer apellido" value="<?php echo $this->_tpl_vars['obj']->cData['txt_prim_apell']; ?>
"  onkeyup="checkInput(this)">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Segundo apellido</label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_seg_apell" id="txt_seg_apell" class="solo_texto" placeholder="Segundo apellido" value="<?php echo $this->_tpl_vars['obj']->cData['txt_seg_apell']; ?>
"  onkeyup="checkInput(this)">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>G&eacute;nero <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido2 validate[required]" name="id_genero" id="id_genero"  style="width:100% ;" title="GÃ©nero">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cGeneros) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                          <?php if ($this->_tpl_vars['obj']->cGeneros[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_genero']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cGeneros[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cGeneros[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cGeneros[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cGeneros[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>

                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Fecha de nacimiento </label>
                    </div>
                    <div class="span5">

                      <input class="text-input datepicker" type="text" name="fec_nacimiento" id="fec_nacimiento" placeholder="Fecha de nacimiento" title="Fecha de nacimiento" value="<?php echo $this->_tpl_vars['obj']->cData['fec_nacimiento']; ?>
" />
                    </div>

                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Estado civil</label>
                    </div>
                    <div class="span5">
                      <select class="selectdd" name="id_estado_civ" id="id_estado_civ" style="width:100% ;">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cEstciv) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                          <?php if ($this->_tpl_vars['obj']->cEstciv[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_estado_civ']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cEstciv[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cEstciv[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cEstciv[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cEstciv[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Departamento de residencia <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido2 validate[required]" name="per_id_departamento" id="per_id_departamento" style="width:100%;" title="Departamento" onchange="RecargarCiudades('per_id_ciudad', this);">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cDeparts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                          <?php if ($this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['per_id_departamento']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Ciudad/municipio de residencia <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido2 validate[required]"  name="per_id_ciudad" id="per_id_ciudad" style="width:100%;" title="Ciudad/municipio">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cPerCiudades) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                          <?php if ($this->_tpl_vars['obj']->cPerCiudades[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['per_id_ciudad']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cPerCiudades[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cPerCiudades[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cPerCiudades[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cPerCiudades[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Barrio <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_barrio" id="txt_barrio" class="requerido2 validate[required]"  placeholder="Barrio" title="Barrio" value="<?php echo $this->_tpl_vars['obj']->cData['txt_barrio']; ?>
">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Tel&eacute;fono fijo</label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_telefono" id="txt_telefono" class="val_num solo_numeros" placeholder="Tel&eacute;fono fijo" title="Tel&eacute;fono fijo" value="<?php echo $this->_tpl_vars['obj']->cData['txt_telefono']; ?>
"  onkeyup="format(this)">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Tel&eacute;fono Celular</label>
                    </div>
                    <div class="span5">
                      <input type="text" name="txt_movil" id="txt_movil" class="val_num solo_numeros" placeholder="Tel&eacute;fono Celular" title="Tel&eacute;fono celular" value="<?php echo $this->_tpl_vars['obj']->cData['txt_movil']; ?>
"  onkeyup="format(this)">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Tipo de Poblaci&oacute;n <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido2 validate[required]" name="id_poblacion" id="id_poblacion" style="width:100% ;" title="Tipo de poblaci&oacute;n">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cPoblacion) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                          <?php if ($this->_tpl_vars['obj']->cPoblacion[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_poblacion']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cPoblacion[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cPoblacion[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cPoblacion[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cPoblacion[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>

                    <div class="clear espacio_en_blancopeque"></div>
                    <?php if ($this->_tpl_vars['obj']->cEdit != 'edit'): ?><a class="atras_btn inline float_left" id="atras_btn_frm2">Atr&aacute;s</a><?php endif; ?>
                    <a class="siguiente_btn siguiente_btn2 inline float_right" onclick="btnSiguiente(2)">Siguiente</a>
                    <div class="clear espacio_en_blancogrande"></div>
                    <div class="campos_obli">*(campos obligatorios)</div>
                    <div class="clear espacio_en_blancopeque"></div>
                  </fieldset>

                  <fieldset class="pasos_formulario" id="info3">

                    <h2><span>Perf&iacute;l profesional</span></h2>
                    <div class="clear espacio_en_blanco"></div>

                    <div class="span7">
                      <label>Sector <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido3 validate[required]" name="id_area" id="id_area" style="width:100% ;" title="Área" onchange="RecargarProfesion('id_profesion', this);">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cArea) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                          <?php if ($this->_tpl_vars['obj']->cArea[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_area']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cArea[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cArea[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cArea[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cArea[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>

                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>&Aacute;rea <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido3 validate[required]" name="id_profesion" id="id_profesion" style="width:100% ;" title="&Aacute;rea">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cProfe) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                          <?php if ($this->_tpl_vars['obj']->cProfe[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_profesion']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cProfe[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cProfe[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cProfe[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cProfe[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>

                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label for="option3" class="lblr">Se encuentra trabajando <span>(*)</label>
                    </div>
                    <div class="span5 col-forms">
                      <p>
                        <input type="radio" name="ind_trabajando" value="1" id="option1" class="validate[required] requerido3" <?php if ($this->_tpl_vars['obj']->cData['ind_trabajando'] == '1'): ?>checked="checked"<?php endif; ?>>
                        <label for="option1" class="lblr">Si</label>
                      </p>
                      <p>
                        <input type="radio" name="ind_trabajando" value="0" id="option2" class="validate[required] requerido3" <?php if ($this->_tpl_vars['obj']->cData['ind_trabajando'] == '0'): ?>checked="checked"<?php endif; ?>>
                        <label for="option2" class="lblr">No</label>
                      </p>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span7">
                      <label>Rango salarial mensual <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido3 validate[required] " name="id_aspiracion" id="id_aspiracion" style="width:100% ;" title="Rango salarial mensual">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cAspira) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                          <?php if ($this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_aspiracion']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                                        <div class="span12 relativo"> <a href="perfil_laboral.php" class="bt_ayudaform terminos-condiciones"></a>
                      <label>Perfil laboral (M&aacute;ximo 256 caracteres)</label>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span12">
                    	<input type="hidden" name="id_perfil" value="<?php echo $this->_tpl_vars['obj']->cData['id_perfil']; ?>
" />
                      <textarea name="txt_perfil" id="txt_perfil" ><?php echo $this->_tpl_vars['obj']->cData['txt_perfil']; ?>
</textarea>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span12 relativo"> <a href="habilidades.php" class="bt_ayudaform terminos-condiciones" ></a>
                      <label>Habilidades (M&aacute;ximo 256 caracteres)</label>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>
                    <div class="span12 relativo">
                      <textarea name="txt_habilidades" id="txt_habilidades" ><?php echo $this->_tpl_vars['obj']->cData['txt_habilidades']; ?>
</textarea>
                    </div>

                    <div class="clear espacio_en_blancopeque"></div>
                    <a class="atras_btn inline float_left">Atr&aacute;s</a> <a class="siguiente_btn siguiente_btn3 inline float_right" onclick="btnSiguiente(3)">Siguiente</a>
                    <div class="clear espacio_en_blancogrande"></div>
                    <div class="campos_obli">*(campos obligatorios)</div>
                    <div class="clear espacio_en_blancopeque"></div>
                  </fieldset>

                  <fieldset class="pasos_formulario" id="info4">

                    <h2><span>Experiencia Laboral</span></h2>
                    <span class="paste_sp" id="secc_exp">

                      <div id="expe_opc_0" class="contenedor_mas">
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Empresa</label>
                        </div>
                        <div class="span5">
                          <input type="text" name="lab_txt_empresa[]" id="lab_txt_empresa" placeholder="Empresa" value="<?php echo $this->_tpl_vars['obj']->cData['lab_txt_empresa']['0']; ?>
">
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Cargo</label>
                        </div>
                        <div class="span5">
                          <input type="text" name="lab_txt_cargo[]" id="lab_txt_cargo" placeholder="Cargo" value="<?php echo $this->_tpl_vars['obj']->cData['lab_txt_cargo']['0']; ?>
">
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>    
                        
                        <div class="span7">
                          <label>Sector </label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" style="width:100% ;" title="Seleccione el sector laboral" onchange="RecargarProfesion2('.lab_id_arealab_0', this.value);">
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cArealab) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cArealab[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['lab_id_arealab']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cArealab[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cArealab[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cArealab[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cArealab[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>&Aacute;rea</label>
                        </div>
                        <div class="span5">
                          <select class="lab_id_arealab_0 selectdd" name="lab_id_arealab[]" id="lab_id_arealab" style="width:100% ;" title="Seleccione el &Aacute;rea laboral">
                            <option value="">Seleccione</option>
                          </select>
                        </div>
                        
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Fecha de ingreso</label>
                        </div>
                        <div class="span5">
                          <input type="text" class="datepicker" name="lab_fec_ingreso[]" id="lab_fec_ingreso_0" placeholder="Fecha de ingreso" value="<?php echo $this->_tpl_vars['obj']->cData['lab_fec_ingreso']['0']; ?>
">
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label for="option3" class="lblr">Trabajo ah&iacute; actualmente<span> (*)</span></label>
                        </div>
                        <div class="span5 col-forms">
                          <p>
                            <input type="radio" class="validate[required] requerido4" name="lab_ind_actual[]" value="1" id="optiona_0"  onclick="hideFinaliza('lab_fecfin_0');" <?php if ($this->_tpl_vars['obj']->cData['lab_ind_actual']['0'] == '1'): ?>checked="checked"<?php endif; ?> >
                            <label for="optiona_0" class="lblr">Si</label>
                          </p>
                          <p>
                            <input type="radio" class="validate[required] requerido4" name="lab_ind_actual[]" value="0" id="optionb_0"  onclick="showFinaliza('lab_fecfin_0');" <?php if ($this->_tpl_vars['obj']->cData['lab_ind_actual']['0'] == '0'): ?>checked="checked"<?php endif; ?>>
                            <label for="optionb_0" class="lblr">No</label>
                          </p>
                        </div>

                        <div id="lab_fecfin_0" style="display: none;">   
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Fecha de Finalizaci&oacute;n</label>
                          </div>
                          <div class="span5">
                            <input type="text" class="datepicker" name="lab_fec_finaliza[]" id="lab_fec_finaliza_0" placeholder="Fecha de Finalizaci&oacute;n"  value="<?php echo $this->_tpl_vars['obj']->cData['lab_fec_finaliza']['0']; ?>
">
                          </div>
                        </div>

                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Departamento </label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="lab_id_departamento[]" id="lab_id_departamento0" style="width:100% ;" onchange="RecargarCiudades('lab_id_ciudad0', this);" >
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cDeparts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['lab_id_departamento']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Ciudad/municipio </label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="lab_id_ciudad[]" id="lab_id_ciudad0" style="width:100% ;" >
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cLabCiud['0']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cLabCiud['0'][$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['lab_id_ciudad']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cLabCiud['0'][$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cLabCiud['0'][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cLabCiud['0'][$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cLabCiud['0'][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>

                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Tel&eacute;fono</label>
                        </div>
                        <div class="span5">
                          <input type="text" name="lab_txt_telefono[]" id="lab_txt_telefono" placeholder="Tel&eacute;fono" value="<?php echo $this->_tpl_vars['obj']->cData['lab_txt_telefono']['0']; ?>
">
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span12 relativo"> <a href="funciones_y_logros.php" class="bt_ayudaform terminos-condiciones"></a>
                          <label>Funciones y Logros (M&aacute;ximo 500 caracteres)</label>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span12">
                          <textarea name="lab_txt_funciones[]" id="lab_txt_funciones" ><?php echo $this->_tpl_vars['obj']->cData['lab_txt_funciones']['0']; ?>
</textarea>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                      </div>
                      <hr>

                      <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['start'] = (int)1;
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData['txt_empresa']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
if ($this->_sections['a']['start'] < 0)
    $this->_sections['a']['start'] = max($this->_sections['a']['step'] > 0 ? 0 : -1, $this->_sections['a']['loop'] + $this->_sections['a']['start']);
else
    $this->_sections['a']['start'] = min($this->_sections['a']['start'], $this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] : $this->_sections['a']['loop']-1);
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = min(ceil(($this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] - $this->_sections['a']['start'] : $this->_sections['a']['start']+1)/abs($this->_sections['a']['step'])), $this->_sections['a']['max']);
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
                        <div id="expe_opc_<?php echo $this->_sections['a']['index']; ?>
" class="contenedor_mas">
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Empresa</label>
                          </div>

                          <div class="span5">
                            <input type="text" name="lab_txt_empresa[]" id="lab_txt_empresa" placeholder="Empresa" value="<?php echo $this->_tpl_vars['obj']->cData['lab_txt_empresa'][$this->_sections['a']['index']]; ?>
">
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Cargo</label>
                          </div>
                          <div class="span5">
                            <input type="text" name="lab_txt_cargo[]" id="lab_txt_cargo" placeholder="Cargo" value="<?php echo $this->_tpl_vars['obj']->cData['lab_txt_cargo'][$this->_sections['a']['index']]; ?>
">
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                        
                          <div class="span7">
                            <label>Sector </label>
                          </div>
                          <div class="span5">
                            <select class="selectdd" style="width:100% ;" title="Seleccione el sector laboral" onchange="RecargarProfesion2('.lab_id_arealab_<?php echo $this->_sections['a']['index']; ?>
', this.value);">
                              <option value="">Seleccione</option>
                              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cArealab) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                <?php if ($this->_tpl_vars['obj']->cArealab[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['lab_id_arealab'][$this->_sections['a']['index']]): ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cArealab[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cArealab[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php else: ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cArealab[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cArealab[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php endif; ?>
                              <?php endfor; endif; ?>
                            </select>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>&Aacute;rea</label>
                          </div>
                          <div class="span5">
                            <select class="lab_id_arealab_<?php echo $this->_sections['a']['index']; ?>
 selectdd" name="lab_id_arealab[]" id="lab_id_arealab" style="width:100% ;" title="Seleccione el &Aacute;rea laboral">
                              <option value="">Seleccione</option>
                            </select>
                          </div>
                        
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Fecha de ingreso</label>
                          </div>
                          <div class="span5">
                            <input type="text" class="datepicker" name="lab_fec_ingreso[]" id="lab_fec_ingreso_<?php echo $this->_sections['a']['index']; ?>
" placeholder="Fecha de ingreso" value="<?php echo $this->_tpl_vars['obj']->cData['lab_fec_ingreso'][$this->_sections['a']['index']]; ?>
">
                          </div>

                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label for="option3" class="lblr">Trabajo ah&iacute; actualmente<span>(*)</label>
                          </div>
                          <div class="span5 col-forms">
                            <p>
                              <input type="radio" name="lab_ind_actual[]" value="1" id="optiona_<?php echo $this->_sections['a']['index']; ?>
" class="validate[required]" onclick="hideFinaliza('lab_fecfin_<?php echo $this->_sections['a']['index']; ?>
');" <?php if ($this->_tpl_vars['obj']->cData['lab_ind_actual'][$this->_sections['a']['index']] == '1'): ?>checked="checked"<?php endif; ?>>
                              <label for="optiona_<?php echo $this->_sections['a']['index']; ?>
" class="lblr">Si</label>
                            </p>
                            <p>
                              <input type="radio" name="lab_ind_actual[]" value="0" id="optionb_<?php echo $this->_sections['a']['index']; ?>
" class="validate[required]" onclick="showFinaliza('lab_fecfin_<?php echo $this->_sections['a']['index']; ?>
');" <?php if ($this->_tpl_vars['obj']->cData['lab_ind_actual'][$this->_sections['a']['index']] == '0'): ?>checked="checked"<?php endif; ?> >

                              <label for="optionb_<?php echo $this->_sections['a']['index']; ?>
" class="lblr">No</label>
                            </p>
                          </div>

                          <div id="lab_fecfin_<?php echo $this->_sections['a']['index']; ?>
" style="display: none;">
                            <div class="clear espacio_en_blancopeque"></div>
                            <div class="span7">
                              <label>Fecha de Finalizaci&oacute;n</label>
                            </div>
                            <div class="span5">
                              <input type="text" class="datepicker" name="lab_fec_finaliza[]" id="lab_fec_finaliza_<?php echo $this->_sections['a']['index']; ?>
" placeholder="Fecha de Finalizaci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['lab_fec_finaliza'][$this->_sections['a']['index']]; ?>
">
                            </div>
                          </div>

                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Departamento</label>
                          </div>
                          <div class="span5">
                            <select class="selectdd" name="lab_id_departamento[]" id="lab_id_departamento" style="width:100% ;" onchange="RecargarCiudades('lab_id_ciudad<?php echo $this->_sections['a']['index']; ?>
', this);" >
                              <option value="">Seleccione</option>
                              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cDeparts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                <?php if ($this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['lab_id_departamento'][$this->_sections['a']['index']]): ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php else: ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php endif; ?>
                              <?php endfor; endif; ?>
                            </select>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Ciudad/municipio</label>
                          </div>
                          <div class="span5">
                            <select class="selectdd" name="lab_id_ciudad[]" id="lab_id_ciudad<?php echo $this->_sections['a']['index']; ?>
" style="width:100%; border: 1px solid red;">
                              <option value="">Seleccione</option>
                              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cLabCiud[$this->_sections['a']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                <?php if ($this->_tpl_vars['obj']->cLabCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['lab_id_ciudad'][$this->_sections['a']['index']]): ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cLabCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cLabCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php else: ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cLabCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cLabCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php endif; ?>
                              <?php endfor; endif; ?>
                            </select>
                          </div>

                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Tel&eacute;fono</label>
                          </div>
                          <div class="span5">
                            <input type="text" name="lab_txt_telefono[]" id="lab_txt_telefono" placeholder="Tel&eacute;fono" value="<?php echo $this->_tpl_vars['obj']->cData['lab_txt_telefono'][$this->_sections['a']['index']]; ?>
">
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span12 relativo"><a href="#oferta-detalle2" class="bt_ayudaform popup" onclick="AyudaHV('1');"></a>
                            <label>Funciones y Logros (M&aacute;ximo 500 caracteres)</label>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span12">
                            <textarea name="lab_txt_funciones[]" id="lab_txt_funciones" ><?php echo $this->_tpl_vars['obj']->cData['lab_txt_funciones'][$this->_sections['a']['index']]; ?>
</textarea>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                        </div>
                        <hr>
                      <?php endfor; endif; ?>
                    </span>

                    <a id="add_exp" class="btn_amarillo inline float_right" >A&ntilde;adir m&aacute;s</a>

                    <div class="clear espacio_en_blancopeque"></div>
                    <a class="atras_btn inline float_left">Atr&aacute;s</a> <a class="siguiente_btn siguiente_btn4 inline float_right" onClick="btnSiguiente(4)">Siguiente</a>
                    <div class="clear espacio_en_blancogrande"></div>
                    <div class="campos_obli">*(campos obligatorios)</div>
                    <div class="clear espacio_en_blancopeque"></div>
                  </fieldset>

                  <fieldset class="pasos_formulario" id="info5">

                    <h2><span>Educaci&oacute;n</span></h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <h2>Educaci&oacute;n Formal</h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <span class="paste_sp" id="secc_edf">
                      <?php if ($this->_tpl_vars['obj']->cEdit != 'edit'): ?>
												<div id="edf_opc_0" class="contenedor_mas">
                        <div class="span7">
                          <label>Nivel de Estudio</label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="edf_id_nivel_estudio[]" id="edf_id_nivel_estudio" style="width:100% ;" >
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cNivEst) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['edf_id_nivel_estudio']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>T&iacute;tulo Obtenido</label>
                        </div>
                        <div class="span5">
                          <input type="text" name="edf_txt_titulo[]" id="edf_txt_titulo" placeholder="T&iacute;tulo Obtenido" value="<?php echo $this->_tpl_vars['obj']->cData['txt_titulo']['0']; ?>
">
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Instituci&oacute;n</label>
                        </div>
                        <div class="span5">
                          <input type="text" name="edf_txt_institucion[]" id="edf_txt_institucion" placeholder="Instituci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['txt_institucion']['0']; ?>
">
                        </div>

                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Fecha de ingreso</label>
                        </div>
                        <div class="span5">
                          <input type="text" class="datepicker" name="edf_fec_ingreso[]" id="edf_fec_ingreso_0" placeholder="Fecha de ingreso" value="<?php echo $this->_tpl_vars['obj']->cData['edf_fec_ingreso'][$this->_sections['a']['index']]; ?>
">
                        </div>

                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label for="option3" class="lblr">¿Estudio en Curso? <span>(*)</label>
                        </div>
                        <div class="span5 col-forms">
                          <p>
                            <input type="radio" name="edf_ind_encurso[]" value="1" id="edf_optiona_0" class="validate[required]" onclick="hideFinaliza('edf_anio_0');" <?php if ($this->_tpl_vars['obj']->cData['edf_ind_encurso']['0'] == '1'): ?>checked="checked"<?php endif; ?> >
                            <label for="edf_optiona_0" class="lblr">Si</label>
                          </p>
                          <p>
                            <input type="radio" name="edf_ind_encurso[]" value="0" id="edf_optionb_0" class="validate[required]" onclick="showFinaliza('edf_anio_0');" <?php if ($this->_tpl_vars['obj']->cData['edf_ind_encurso']['0'] == '0'): ?>checked="checked"<?php endif; ?> >
                            <label for="edf_optionb_0" class="lblr">No</label>
                          </p>
                        </div>

                        <div id="edf_anio_0" style="display: none;">
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7" >
                            <label>Fecha finalizaci&oacute;n</label>
                          </div>
                          <div class="span5">
                            <input type="text" class="datepicker" name="edf_fec_finaliza[]" id="edf_fec_finaliza_0" placeholder="Fecha de finalizacion" value="<?php echo $this->_tpl_vars['obj']->cData['lab_fec_ingreso'][$this->_sections['a']['index']]; ?>
">
                          </div>
                        </div>

                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Departamento </label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="edf_id_departamento[]" id="edf_id_departamento0" style="width:100% ;" onchange="RecargarCiudades('edf_id_ciudad0', this);">
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cDeparts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['edf_id_departamento']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Ciudad/municipio</label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="edf_id_ciudad[]" id="edf_id_ciudad0" style="width:100% ;" >
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cEdfCiud['0']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cEdfCiud['0'][$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['edf_id_ciudad']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cEdfCiud['0'][$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cEdfCiud['0'][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cEdfCiud['0'][$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cEdfCiud['0'][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <hr>
                      </div>
                      <?php else: ?>
                      	<?php echo $this->_tpl_vars['obj']->cData['id_persona']; ?>

                        <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['start'] = (int)0;
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData['edf_id_nivel_estudio']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
if ($this->_sections['a']['start'] < 0)
    $this->_sections['a']['start'] = max($this->_sections['a']['step'] > 0 ? 0 : -1, $this->_sections['a']['loop'] + $this->_sections['a']['start']);
else
    $this->_sections['a']['start'] = min($this->_sections['a']['start'], $this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] : $this->_sections['a']['loop']-1);
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = min(ceil(($this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] - $this->_sections['a']['start'] : $this->_sections['a']['start']+1)/abs($this->_sections['a']['step'])), $this->_sections['a']['max']);
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
												<div id="edf_opc_<?php echo $this->_sections['a']['index']; ?>
" class="contenedor_mas">
                            <div class="span7">
                              <label>Nivel de Estudio</label>
                            </div>
                            <div class="span5">
                              <select class="selectdd" name="edf_id_nivel_estudio[]" id="edf_id_nivel_estudio" style="width:100% ;" >
                                <option value="">Seleccione</option>
                                <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cNivEst) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                  <?php if ($this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['edf_id_nivel_estudio'][$this->_sections['a']['index']]): ?>
                                    <option value="<?php echo $this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                  <?php else: ?>
                                    <option value="<?php echo $this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                  <?php endif; ?>
                                <?php endfor; endif; ?>
                              </select>
                            </div>
                            <div class="clear espacio_en_blancopeque"></div>
                            <div class="span7">
                              <label>T&iacute;tulo Obtenido</label>
                            </div>
                            <div class="span5">
                              <input type="text" name="edf_txt_titulo[]" id="edf_txt_titulo" placeholder="T&iacute;tulo Obtenido" value="<?php echo $this->_tpl_vars['obj']->cData['edf_txt_titulo'][$this->_sections['a']['index']]; ?>
">
                            </div>
                            <div class="clear espacio_en_blancopeque"></div>
                            <div class="span7">
                              <label>Instituci&oacute;n</label>
                            </div>
                            <div class="span5">
                              <input type="text" name="edf_txt_institucion[]" id="edf_txt_institucion" placeholder="Instituci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['edf_txt_institucion'][$this->_sections['a']['index']]; ?>
">
                            </div>
                            <div class="clear espacio_en_blancopeque"></div>
                            <div class="span7">
                              <label>A&ntilde;o de Finalizaci&oacute;n</label>
                            </div>
                            <div class="span5">
                              <input type="text" class="datepicker" name="edf_fec_ingreso[]" id="edf_fec_ingreso_<?php echo $this->_sections['a']['index']; ?>
" placeholder="Fecha de ingreso" value="<?php echo $this->_tpl_vars['obj']->cData['lab_fec_ingreso'][$this->_sections['a']['index']]; ?>
">
                            </div>
                            <div class="clear espacio_en_blancopeque"></div>
                            <div class="span7">
                              <label for="option3" class="lblr">¿Estudio en Curso? <span>(*)</label>
                            </div>
                            <div class="span5 col-forms">
                              <p>
                                <input type="radio" name="edf_ind_encurso[]" value="1" id="edf_optiona_<?php echo $this->_sections['a']['index']; ?>
" class="validate[required]"onclick="hideFinaliza('edf_anio_<?php echo $this->_sections['a']['index']; ?>
');" <?php if ($this->_tpl_vars['obj']->cData['edf_ind_encurso']['0'] == '1'): ?>checked="checked"<?php endif; ?>>
                                <label for="edf_optiona_<?php echo $this->_sections['a']['index']; ?>
" class="lblr">Si</label>
                              </p>
                              <p>
                                <input type="radio" name="edf_ind_encurso[]" value="0" id="edf_optionb_<?php echo $this->_sections['a']['index']; ?>
"  onclick="showFinaliza('edf_anio_<?php echo $this->_sections['a']['index']; ?>
');" <?php if ($this->_tpl_vars['obj']->cData['edf_ind_encurso']['0'] == '1'): ?>checked="checked"<?php endif; ?>>
                                <label for="edf_optionb_<?php echo $this->_sections['a']['index']; ?>
" class="lblr">No</label>
                              </p>
                            </div>
  
                            <div id="edf_anio_<?php echo $this->_sections['a']['index']; ?>
">
                              <div class="clear espacio_en_blancopeque"></div>
                              <div class="span7">
                                <label>A&ntilde;o de Finalizaci&oacute;n</label>
                              </div>
                              <div class="span5">
                                <input type="text" class="datepiker" name="edf_fec_finaliza[]" id="edf_fec_finaliza_<?php echo $this->_sections['a']['index']; ?>
" placeholder="A&ntilde;o de Finalizaci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['edf_fec_finaliza'][$this->_sections['a']['index']]; ?>
">
                              </div>
                            </div>
  
                            <div class="clear espacio_en_blancopeque"></div>
                            <div class="span7">
                              <label>Departamento </label>
                            </div>
                            <div class="span5">
                              <select class="selectdd" name="edf_id_departamento[]" id="edf_id_departamento<?php echo $this->_sections['a']['index']; ?>
" style="width:100% ;" onchange="RecargarCiudades('edf_id_ciudad<?php echo $this->_sections['a']['index']; ?>
', this);">
                                <option value="">Seleccione</option>
                                <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cDeparts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                  <?php if ($this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['edf_id_departamento'][$this->_sections['a']['index']]): ?>
                                    <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                  <?php else: ?>
                                    <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                  <?php endif; ?>
                                <?php endfor; endif; ?>
                              </select>
                            </div>
                            <div class="clear espacio_en_blancopeque"></div>
                            <div class="span7">
                              <label>Ciudad/municipio</label>
                            </div>
                            <div class="span5">
                              <select class="selectdd" name="edf_id_ciudad[]" id="edf_id_ciudad<?php echo $this->_sections['a']['index']; ?>
" style="width:100% ;" >
                                <option value="">Seleccione</option>
                                <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cEdfCiud[$this->_sections['a']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                  <?php if ($this->_tpl_vars['obj']->cEdfCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cEdfCiud[$this->_sections['a']['index']]['formal_id_ciudad'][$this->_sections['a']['index']]): ?>
                                    <option value="<?php echo $this->_tpl_vars['obj']->cEdfCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cEdfCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                  <?php else: ?>
                                    <option value="<?php echo $this->_tpl_vars['obj']->cEdfCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cEdfCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                  <?php endif; ?>
                                <?php endfor; endif; ?>
                              </select>
                            </div>
                            <div class="clear espacio_en_blancopeque"></div>
                            <hr>
                          </div>
                        <?php endfor; endif; ?>                      	
                      <?php endif; ?>
                    </span>

                    <a id="add_edf" class="btn_amarillo inline float_right" >A&ntilde;adir m&aacute;s</a>
                    <div class="clear espacio_en_blancopeque"></div>
                    <a class="atras_btn inline float_left">Atr&aacute;s</a> <a class="siguiente_btn siguiente_btn5 inline float_right" onClick="btnSiguiente(5)">Siguiente</a>
                    <div class="clear espacio_en_blancogrande"></div>
                    <div class="campos_obli">*(campos obligatorios)</div>
                    <div class="clear espacio_en_blancopeque"></div>
                  </fieldset>

                  <fieldset class="pasos_formulario" id="info6">

                    <h2><span>Educaci&oacute;n</span></h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <h2>Educaci&oacute;n No Formal</h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <span class="paste_sp" id="secc_ednf">
                      <div id="ednf_opc_0" class="contenedor_mas">
                        <div class="span7">
                          <label>T&iacute;tulo obtenido</label>
                        </div>
                        <div class="span5">
                          <input type="text" name="ednf_txt_titulo[]" id="ednf_txt_titulo" placeholder="T&iacute;tulo obtenido" value="<?php echo $this->_tpl_vars['obj']->cData['ednf_txt_titulo']['0']; ?>
">
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Instituci&oacute;n</label>
                        </div>
                        <div class="span5">
                          <input type="text" name="ednf_txt_institucion[]" id="ednf_txt_institucion" placeholder="Instituci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['ednf_txt_institucion']['0']; ?>
">
                        </div>

                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Fecha de ingreso</label>
                        </div>
                        <div class="span5">
                          <input type="text" class="datepicker" name="ednf_fec_ingreso[]" id="ednf_fec_ingreso_0" placeholder="Fecha de ingreso" value="<?php echo $this->_tpl_vars['obj']->cData['ednf_fec_ingreso'][$this->_sections['a']['index']]; ?>
">
                        </div>

                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label for="option3" class="lblr">¿Estudio en Curso? <span>(*)</span></label>
                        </div>
                        <div class="span5 col-forms">
                          <p>
                            <input type="radio" name="ednf_ind_encurso[]" value="1" id="ednf_optiona_0" class="validate[required]" onclick="hideFinaliza('ednf_anio_0');" <?php if ($this->_tpl_vars['obj']->cData['ednf_ind_encurso']['0'] == '1'): ?>checked="checked"<?php endif; ?>>
                            <label for="ednf_optiona_0" class="lblr">Si</label>
                          </p>
                          <p>
                            <input type="radio" name="ednf_ind_encurso[]" value="0" id="ednf_optionb_0" class="validate[required]" onclick="showFinaliza('ednf_anio_0');" <?php if ($this->_tpl_vars['obj']->cData['ednf_ind_encurso']['0'] == '0'): ?>checked="checked"<?php endif; ?>>
                            <label for="ednf_optionb_0" class="lblr">No</label>
                          </p>
                        </div>

                        <div id="ednf_anio_0" style="display: none;">
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7" >
                            <label>Fecha finalizaci&oacute;n</label>
                          </div>
                          <div class="span5">
                            <input type="text" class="datepicker" name="ednf_fec_finaliza[]" id="ednf_fec_finaliza_0" placeholder="Fecha de finalizacion" value="<?php echo $this->_tpl_vars['obj']->cData['ednf_fec_finaliza'][$this->_sections['a']['index']]; ?>
">
                          </div>
                        </div>

                        <div id="ednf_anio_0" style="display: none;">
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>A&ntilde;o de Finalizaci&oacute;n</label>
                          </div>
                          <div class="span5">
                            <input type="text" class="datepiker" name="ednf_fec_finaliza[]" id="ednf_fec_finaliza" placeholder="A&ntilde;o de Finalizaci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['ednf_fec_finaliza']['0']; ?>
">
                          </div>
                        </div>

                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Departamento </label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="ednf_id_departamento[]" id="ednf_id_departamento0" style="width:100% ;" onchange="RecargarCiudades('ednf_id_ciudad0', this);">
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cDeparts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['ednf_id_departamento']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Ciudad/municipio </label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="ednf_id_ciudad[]" id="ednf_id_ciudad0" style="width:100% ;">
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cEdnfCiud['0']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cEdnfCiud['0'][$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['ednf_id_ciudad']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cEdnfCiud['0'][$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cEdnfCiud['0'][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cEdnfCiud['0'][$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cEdnfCiud['0'][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <hr>
                      </div>

                      <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['start'] = (int)1;
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData['ednf_txt_titulo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
if ($this->_sections['a']['start'] < 0)
    $this->_sections['a']['start'] = max($this->_sections['a']['step'] > 0 ? 0 : -1, $this->_sections['a']['loop'] + $this->_sections['a']['start']);
else
    $this->_sections['a']['start'] = min($this->_sections['a']['start'], $this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] : $this->_sections['a']['loop']-1);
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = min(ceil(($this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] - $this->_sections['a']['start'] : $this->_sections['a']['start']+1)/abs($this->_sections['a']['step'])), $this->_sections['a']['max']);
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
                        <div id="ednf_opc_<?php echo $this->_sections['a']['index']; ?>
" class="contenedor_mas">
                          <div class="span7">
                            <label>T&iacute;tulo obtenido</label>
                          </div>
                          <div class="span5">
                            <input type="text" name="ednf_txt_titulo[]" id="ednf_txt_titulo" placeholder="T&iacute;tulo obtenido" value="<?php echo $this->_tpl_vars['obj']->cData['ednf_txt_titulo'][$this->_sections['a']['index']]; ?>
">
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Instituci&oacute;n</label>
                          </div>
                          <div class="span5">
                            <input type="text" name="ednf_txt_institucion[]" id="ednf_txt_institucion" placeholder="Instituci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['ednf_txt_institucion'][$this->_sections['a']['index']]; ?>
">
                          </div>

                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Fecha de ingreso</label>
                          </div>
                          <div class="span5">
                            <input type="text" class="datepicker" name="ednf_fec_ingreso[]" id="ednf_fec_ingreso_<?php echo $this->_sections['a']['index']; ?>
" placeholder="Fecha de ingreso" value="">
                          </div>

                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label for="option3" class="lblr">¿Estudio en Curso? <span>(*)</span></label>
                          </div>
                          <div class="span5 col-forms">
                            <p>
                              <input type="radio" name="ednf_ind_encurso[]" value="1" id="ednf_optiona_<?php echo $this->_sections['a']['index']; ?>
"  onclick="hideFinaliza('ednf_anio_<?php echo $this->_sections['a']['index']; ?>
');" <?php if ($this->_tpl_vars['obj']->cData['ednf_ind_encurso'][$this->_sections['a']['index']] == '1'): ?>checked="checked"<?php endif; ?>>
                              <label for="ednf_optiona_<?php echo $this->_sections['a']['index']; ?>
" class="lblr">Si</label>
                            </p>
                            <p>
                              <input type="radio" name="ednf_ind_encurso[]" value="0" id="ednf_optionb_<?php echo $this->_sections['a']['index']; ?>
"  onclick="showFinaliza('ednf_anio_<?php echo $this->_sections['a']['index']; ?>
');" <?php if ($this->_tpl_vars['obj']->cData['ednf_ind_encurso'][$this->_sections['a']['index']] == '0'): ?>checked="checked"<?php endif; ?>>
                              <label for="ednf_optionb_<?php echo $this->_sections['a']['index']; ?>
" class="lblr">No</label>
                            </p>
                          </div>

                          <div id="ednf_anio_<?php echo $this->_sections['a']['index']; ?>
" style="display: none;">
                            <div class="clear espacio_en_blancopeque"></div>
                            <div class="span7">
                              <label>A&ntilde;o de Finalizaci&oacute;n</label>
                            </div>
                            <div class="span5">
                              <input type="text" class="datepicker" name="ednf_fec_finaliza[]" id="ednf_fec_finaliza_<?php echo $this->_sections['a']['index']; ?>
" placeholder="A&ntilde;o de Finalizaci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['ednf_fec_finaliza'][$this->_sections['a']['index']]; ?>
">
                            </div>
                          </div>

                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Departamento </label>
                          </div>
                          <div class="span5">
                            <select class="selectdd" name="ednf_id_departamento[]" id="ednf_id_departamento<?php echo $this->_sections['a']['index']; ?>
" style="width:100% ;" onchange="RecargarCiudades('ednf_id_ciudad<?php echo $this->_sections['a']['index']; ?>
', this);">
                              <option value="">Seleccione</option>
                              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cDeparts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                <?php if ($this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['ednf_id_departamento'][$this->_sections['a']['index']]): ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php else: ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php endif; ?>
                              <?php endfor; endif; ?>
                            </select>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Ciudad/municipio </label>
                          </div>
                          <div class="span5">
                            <select class="selectdd" name="ednf_id_ciudad[]" id="ednf_id_ciudad<?php echo $this->_sections['a']['index']; ?>
" style="width:100% ;">
                              <option value="">Seleccione</option>
                              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cEdnfCiud[$this->_sections['a']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                <?php if ($this->_tpl_vars['obj']->cEdnfCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['ednf_id_ciudad'][$this->_sections['a']['index']]): ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cEdnfCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cEdnfCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php else: ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cEdnfCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cEdnfCiud[$this->_sections['a']['index']][$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php endif; ?>
                              <?php endfor; endif; ?>
                            </select>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <hr>
                        </div>
                      <?php endfor; endif; ?>
                    </span>

                    <a id="add_ednf" class="btn_amarillo inline float_right">A&ntilde;adir m&aacute;s</a>
                    <div class="clear espacio_en_blancopeque"></div>
                    <a class="atras_btn inline float_left">Atr&aacute;s</a> <a class="siguiente_btn siguiente_btn6 inline float_right" onClick="btnSiguiente(6)">Siguiente</a>
                    <div class="clear espacio_en_blancogrande"></div>
                    <div class="campos_obli">*(campos obligatorios)</div>
                    <div class="clear espacio_en_blancopeque"></div>
                  </fieldset>

                  <fieldset class="pasos_formulario" id="info7">

                    <h2><span>Idiomas</span></h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <span class="paste_sp">
                      <div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Idioma</label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="id_idioma[]" id="id_idioma" style="width:100% ;" onchange="validarCual(this.value, 0);">
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cIdioma) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cIdioma[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_idioma']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cIdioma[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cIdioma[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cIdioma[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cIdioma[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                            <option value="0">Otro</option>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        
                        <span id="idioma_cual_0" style="display:none;">
                          <div class="span7">
                            <label>¿Cu&aacute;l?</label>
                          </div>
                          <div class="span5">
                            <input type="text" name="txt_cual[]" id="txt_cual" placeholder="Cu&aacute;l" value="<?php echo $this->_tpl_vars['obj']->cData['txt_cual']['0']; ?>
">
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                        </span>
                        
                        <div class="span7">
                          <h3>Dominio</h3>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label> Habla</label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="id_habla[]" id="id_habla" style="width:100% ;" >
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cIdioDomi) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_habla']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Escritura</label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="id_escritura[]" id="id_escritura" style="width:100% ;" >
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cIdioDomi) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_escritura']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Lectura</label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="id_lectura[]" id="id_lectura" style="width:100% ;" >
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cIdioDomi) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_lectura']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <hr>
                      </div>
                      <?php if ($this->_tpl_vars['obj']->idiomas > 1): ?>
                      <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['start'] = (int)1;
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData['id_idioma']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
if ($this->_sections['a']['start'] < 0)
    $this->_sections['a']['start'] = max($this->_sections['a']['step'] > 0 ? 0 : -1, $this->_sections['a']['loop'] + $this->_sections['a']['start']);
else
    $this->_sections['a']['start'] = min($this->_sections['a']['start'], $this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] : $this->_sections['a']['loop']-1);
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = min(ceil(($this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] - $this->_sections['a']['start'] : $this->_sections['a']['start']+1)/abs($this->_sections['a']['step'])), $this->_sections['a']['max']);
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
                        <div id="idioma_<?php echo $this->_sections['a']['index']; ?>
" class="contenedor_mas">
                          <a href="javascript:void(0);" class="eliminar_obj" onclick="eliminarObjetoRecursivoDOM('#idioma_<?php echo $this->_sections['a']['index']; ?>
');">Eliminar</a>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Idioma</label>
                          </div>
                          <div class="span5">
                            <select class="selectdd" name="id_idioma[]" id="id_idioma" style="width:100% ;">
                              <option value="">Seleccione</option>
                              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cIdioma) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                <?php if ($this->_tpl_vars['obj']->cIdioma[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_idioma'][$this->_sections['a']['index']]): ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cIdioma[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cIdioma[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php else: ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cIdioma[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cIdioma[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php endif; ?>
                              <?php endfor; endif; ?>
                            </select>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>¿Cu&aacute;l?</label>
                          </div>
                          <div class="span5">
                            <input type="text" name="txt_cual[]" id="txt_cual" placeholder="Cu&aacute;l" value="<?php echo $this->_tpl_vars['obj']->cData['txt_cual'][$this->_sections['a']['index']]; ?>
">
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <h3>Dominio</h3>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label> Habla</label>
                          </div>
                          <div class="span5">
                            <select class="selectdd" name="id_habla[]" id="id_habla" style="width:100% ;" >
                              <option value="">Seleccione</option>
                              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cIdioDomi) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                <?php if ($this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_habla'][$this->_sections['a']['index']]): ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php else: ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php endif; ?>
                              <?php endfor; endif; ?>
                            </select>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Escritura</label>
                          </div>
                          <div class="span5">
                            <select class="selectdd" name="id_escritura[]" id="id_escritura" style="width:100% ;" >
                              <option value="">Seleccione</option>
                              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cIdioDomi) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                <?php if ($this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_escritura'][$this->_sections['a']['index']]): ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php else: ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php endif; ?>
                              <?php endfor; endif; ?>
                            </select>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Lectura</label>
                          </div>
                          <div class="span5">
                            <select class="selectdd" name="id_lectura[]" id="id_lectura" style="width:100% ;" >
                              <option value="">Seleccione</option>
                              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cIdioDomi) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                <?php if ($this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_lectura'][$this->_sections['a']['index']]): ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php else: ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cIdioDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php endif; ?>
                              <?php endfor; endif; ?>
                            </select>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <hr>
                        </div>
                      <?php endfor; endif; ?>
                      <?php endif; ?>
                    </span>

                    <div id="secc_idm"></div>

                    <a id="add_idm" class="btn_amarillo inline float_right">A&ntilde;adir m&aacute;s</a>
                    <div class="clear espacio_en_blancopeque"></div>
                    <a class="atras_btn inline float_left">Atr&aacute;s</a> <a class="siguiente_btn siguiente_btn7 inline float_right" onClick="btnSiguiente(7)">Siguiente</a>
                    <div class="clear espacio_en_blancogrande"></div>
                    <div class="campos_obli">*(campos obligatorios)</div>
                    <div class="clear espacio_en_blancopeque"></div>
                  </fieldset>

                  <fieldset class="pasos_formulario" id="info8">

                    <h2><span>Inform&aacute;tica</span></h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <span class="paste_sp">
                      <div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Programa o aplicaci&oacute;n</label>
                        </div>
                        <div class="span5">
                          <input type="text" name="inf_txt_aplicacion[]" id="inf_txt_aplicacion" placeholder="Programa o aplicaci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['inf_txt_aplicacion']['0']; ?>
">
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <div class="span7">
                          <label>Dominio</label>
                        </div>
                        <div class="span5">
                          <select class="selectdd" name="inf_id_dominio[]" id="inf_id_dominio" style="width:100% ;" >
                            <option value="">Seleccione</option>
                            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cInfoDomi) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                              <?php if ($this->_tpl_vars['obj']->cInfoDomi[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['inf_id_dominio']['0']): ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cInfoDomi[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cInfoDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php else: ?>
                                <option value="<?php echo $this->_tpl_vars['obj']->cInfoDomi[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cInfoDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                              <?php endif; ?>
                            <?php endfor; endif; ?>
                          </select>
                        </div>
                        <div class="clear espacio_en_blancopeque"></div>
                        <hr>
                      </div>

                      <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['start'] = (int)1;
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData['inf_txt_aplicacion']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
if ($this->_sections['a']['start'] < 0)
    $this->_sections['a']['start'] = max($this->_sections['a']['step'] > 0 ? 0 : -1, $this->_sections['a']['loop'] + $this->_sections['a']['start']);
else
    $this->_sections['a']['start'] = min($this->_sections['a']['start'], $this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] : $this->_sections['a']['loop']-1);
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = min(ceil(($this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] - $this->_sections['a']['start'] : $this->_sections['a']['start']+1)/abs($this->_sections['a']['step'])), $this->_sections['a']['max']);
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
                        <div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Programa o aplicaci&oacute;n</label>
                          </div>
                          <div class="span5">
                            <input type="text" name="inf_txt_aplicacion[]" id="inf_txt_aplicacion" placeholder="Programa o aplicaci&oacute;n" value="<?php echo $this->_tpl_vars['obj']->cData['inf_txt_aplicacion'][$this->_sections['a']['index']]; ?>
">
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <div class="span7">
                            <label>Dominio</label>
                          </div>
                          <div class="span5">
                            <select class="selectdd" name="inf_id_dominio[]" id="inf_id_dominio" style="width:100% ;" >
                              <option value="">Seleccione</option>
                              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cInfoDomi) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
                                <?php if ($this->_tpl_vars['obj']->cInfoDomi[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['inf_id_dominio'][$this->_sections['a']['index']]): ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cInfoDomi[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cInfoDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php else: ?>
                                  <option value="<?php echo $this->_tpl_vars['obj']->cInfoDomi[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cInfoDomi[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                                <?php endif; ?>
                              <?php endfor; endif; ?>
                            </select>
                          </div>
                          <div class="clear espacio_en_blancopeque"></div>
                          <hr>
                        </div>
                      <?php endfor; endif; ?>
                    </span>

                    <div class="clear espacio_en_blancopeque"></div>
                    <div id="secc_inf"></div>

                    <a id="add_inf" class="btn_amarillo inline float_right">A&ntilde;adir m&aacute;s</a>
                    <div class="clear espacio_en_blancopeque"></div>
                    <a class="atras_btn inline float_left">Atr&aacute;s</a> <a class="inline float_right form_finalizado" id="enviar_usuario" >Finalizar</a>
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
  <?php echo $this->_tpl_vars['obj']->cScript; ?>

</script>