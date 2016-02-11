<?php /* Smarty version 2.6.24, created on 2013-12-27 11:43:09
         compiled from registro_oferta.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'registro_oferta.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'registro_oferta','assign' => 'obj'), $this);?>


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
                <?php if ($this->_tpl_vars['obj']->cData['id_oferta']): ?>
                  <input type="hidden" name="id_oferta" id="id_oferta" value="<?php echo $this->_tpl_vars['obj']->cData['id_oferta']; ?>
" />
                <?php endif; ?>
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
                      <input type="text" name="txt_cargo" id="txt_cargo" class="requerido" placeholder="Nombre del Cargo" title="Nombre del Cargo" value="<?php echo $this->_tpl_vars['obj']->cData['txt_cargo']; ?>
">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span12">
                      <label>Descripción de la Oferta (Máximo 500 caracteres) <span>(*)</span></label>
                    </div>
                    <div class="span12">
                      <textarea name="txt_descripcion" id="txt_descripcion" class="requerido" title="Descripci&oacute;n" ><?php echo $this->_tpl_vars['obj']->cData['txt_descripcion']; ?>
</textarea>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Departamento <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_departamento" id="id_departamento" onchange="RecargarCiudades('id_ciudad', this);" title="Departamento">
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
                          <?php if ($this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_departamento']): ?>
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
                    <div class="clear espacio_en_blanco"></div>

                    <div class="span7">
                      <label>Ciudad / Municipio <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_ciudad" id="id_ciudad" title="Ciudad">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cCiudades) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                          <?php if ($this->_tpl_vars['obj']->cCiudades[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_ciudad']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cCiudades[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cCiudades[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cCiudades[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cCiudades[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Sector <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_area" id="id_area" title="&Aacute;rea" onchange="RecargarProfesion( 'id_sector', this );">
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
                      <label>Área <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_sector" id="id_sector" title="Profesi&oacute;n">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cSector) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                          <?php if ($this->_tpl_vars['obj']->cSector[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_sector']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cSector[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cSector[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cSector[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cSector[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Jerarqu&iacute;a <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_jerarquia" id="id_jerarquia" title="Jerarqu&iacute;a">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cJerar) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                          <?php if ($this->_tpl_vars['obj']->cJerar[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_jerarquia']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cJerar[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cJerar[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cJerar[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cJerar[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Salario <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_area_aspi" id="id_area_aspi" title="Salario">
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
                          <?php if ($this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_area_aspi']): ?>
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

                    <div class="span7">
                      <label>Número de vacantes <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="num_vacantes" id="num_vacantes" class="requerido" placeholder="Número de vacantes" title="Número de vacantes" value="<?php echo $this->_tpl_vars['obj']->cData['num_vacantes']; ?>
">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span12">
                      <label>Requisitos (Máximo 500 caracteres) <span>(*)</span></label>
                    </div>
                    <div class="span12">
                      <textarea name="txt_requisitos" id="txt_requisitos" class="requerido" title="Requisitos"><?php echo $this->_tpl_vars['obj']->cData['txt_requisitos']; ?>
</textarea>
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
                          <?php if ($this->_tpl_vars['obj']->cNivEst[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_nivel_estudio']): ?>
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
                      <label>Departamento de residencia del aspirante <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_depto_aspi" id="id_depto_aspi" onchange="RecargarCiudades('id_ciudad_aspi', this);" title="Departamento">
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
                          <?php if ($this->_tpl_vars['obj']->cDeparts[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_depto_aspi']): ?>
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
                    <div class="clear espacio_en_blanco"></div>

                    <div class="span7">
                      <label>Ciudad / Municipio del aspirante<span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <select class="selectdd requerido" style="width:100%;" name="id_ciudad_aspi" id="id_ciudad_aspi" title="Ciudad">
                        <option value="">Seleccione</option>
                        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cCiudades) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                          <?php if ($this->_tpl_vars['obj']->cCiudades[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cData['id_ciudad_aspi']): ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cCiudades[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cCiudades[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['obj']->cCiudades[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cCiudades[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
                          <?php endif; ?>
                        <?php endfor; endif; ?>
                      </select>
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Edad del aspirante en a&ntilde;os</label>
                    </div>
                    <div class="span5">
                      <input type="text" name="num_edad_aspi" id="num_edad_aspi" placeholder="Edad" title="Edad" value="<?php echo $this->_tpl_vars['obj']->cData['num_edad_aspi']; ?>
">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <div class="span7">
                      <label>Experiencia Laboral requerida en a&ntilde;os <span>(*)</span></label>
                    </div>
                    <div class="span5">
                      <input type="text" name="num_exp_aspi" id="num_exp_aspi" class="requerido" placeholder="Experiencia Laboral" title="Experiencia Laboral" value="<?php echo $this->_tpl_vars['obj']->cData['num_exp_aspi']; ?>
">
                    </div>
                    <div class="clear espacio_en_blancopeque"></div>

                    <a href="<?php echo $this->_tpl_vars['obj']->mVolver; ?>
" class="atras_btn2 inline float_left">Atrás</a>
                    <a class="inline float_right form_finalizado" id="enviar_oferta" >Finalizar</a>
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