<?php /* Smarty version 2.6.24, created on 2013-12-10 17:53:20
         compiled from buscador_columna.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'buscador_columna.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'buscador_columna','assign' => 'obj'), $this);?>




<div class="cont_izqgris bg_grisobscuro height970">
  <div class="contcontenidos_izqgris">
    <h3>Filtrar b�squeda de empleo por</h3>
    <div class="clear espacio_en_blanco"></div>
    <form action="<?php echo $this->_tpl_vars['obj']->cOfPubli; ?>
" name="registro" id="registro" method="post" >
      <h2 class="acc_trigger"><a href="#">Sector</a></h2>
      <div class="acc_container">
        <div class="block">
          <div class="opciones">
            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cAreas) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['max'] = (int)4;
$this->_sections['k']['show'] = true;
if ($this->_sections['k']['max'] < 0)
    $this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = min(ceil(($this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] - $this->_sections['k']['start'] : $this->_sections['k']['start']+1)/abs($this->_sections['k']['step'])), $this->_sections['k']['max']);
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
            <p>
              <input type="radio" name="area" value="<?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['id']; ?>
" id="area_<?php echo $this->_sections['k']['index']; ?>
"  <?php if ($this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cIdArea): ?>checked="checked"<?php endif; ?> >
              <label for="area_<?php echo $this->_sections['k']['index']; ?>
" class="lblr"><?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['txt_nombre']; ?>
 <span>(<?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['num']; ?>
)</span></label>
            </p>
            <?php endfor; endif; ?>

          <?php if ($this->_tpl_vars['obj']->cContador['area'] <= 5): ?>
            <a href="javascript:void(0)" onClick="limpiar('area')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <?php endif; ?>
            
          </div>
          <?php if ($this->_tpl_vars['obj']->cContador['area'] >= 5): ?>
          <div class="mas-opciones-1">
            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['start'] = (int)4;
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cAreas) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
if ($this->_sections['k']['start'] < 0)
    $this->_sections['k']['start'] = max($this->_sections['k']['step'] > 0 ? 0 : -1, $this->_sections['k']['loop'] + $this->_sections['k']['start']);
else
    $this->_sections['k']['start'] = min($this->_sections['k']['start'], $this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] : $this->_sections['k']['loop']-1);
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = min(ceil(($this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] - $this->_sections['k']['start'] : $this->_sections['k']['start']+1)/abs($this->_sections['k']['step'])), $this->_sections['k']['max']);
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
            <p style="width: 100%; margin: 0; padding: 0;">
              <input type="radio" name="area" value="<?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['id']; ?>
" id="area_<?php echo $this->_sections['k']['index']; ?>
"  <?php if ($this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cIdArea): ?>checked="checked"<?php endif; ?>>
              <label for="area_<?php echo $this->_sections['k']['index']; ?>
" class="lblr"><?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['txt_nombre']; ?>
 <span>(<?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['num']; ?>
)</span></label>
            </p>
            <?php endfor; endif; ?>
          </div>
            <a href="javascript:void(0)" onClick="limpiar('area')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <div class="clear"></div>
          <a class="float_right ampliar-opciones-1" href="#">M�s opciones</a>
          <?php endif; ?>
        </div>
      </div>
      <h2 class="acc_trigger"><a href="#">Lugar de trabajo</a></h2>
      <div class="acc_container">
        <div class="block">
          <div class="opciones">
            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cLugares) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['max'] = (int)4;
$this->_sections['k']['show'] = true;
if ($this->_sections['k']['max'] < 0)
    $this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = min(ceil(($this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] - $this->_sections['k']['start'] : $this->_sections['k']['start']+1)/abs($this->_sections['k']['step'])), $this->_sections['k']['max']);
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
            <p>
              <input type="radio" name="lugar" value="<?php echo $this->_tpl_vars['obj']->cLugares[$this->_sections['k']['index']]['id']; ?>
" id="lugar_<?php echo $this->_sections['k']['index']; ?>
"  <?php if ($this->_tpl_vars['obj']->cLugares[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cIdLugar): ?>checked="checked"<?php endif; ?>>
              <label for="lugar_<?php echo $this->_sections['k']['index']; ?>
" class="lblr"><?php echo $this->_tpl_vars['obj']->cLugares[$this->_sections['k']['index']]['txt_nombre']; ?>
 <span>(<?php echo $this->_tpl_vars['obj']->cLugares[$this->_sections['k']['index']]['num']; ?>
)</span></label>
            </p>
            <?php endfor; endif; ?>

          <?php if ($this->_tpl_vars['obj']->cContador['lugar'] <= 5): ?>
            <a href="javascript:void(0)" onClick="limpiar('lugar')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <?php endif; ?>
            
          </div>
          <?php if ($this->_tpl_vars['obj']->cContador['lugar'] >= 5): ?>
          <div class="mas-opciones-2">
            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['start'] = (int)4;
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cLugares) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
if ($this->_sections['k']['start'] < 0)
    $this->_sections['k']['start'] = max($this->_sections['k']['step'] > 0 ? 0 : -1, $this->_sections['k']['loop'] + $this->_sections['k']['start']);
else
    $this->_sections['k']['start'] = min($this->_sections['k']['start'], $this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] : $this->_sections['k']['loop']-1);
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = min(ceil(($this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] - $this->_sections['k']['start'] : $this->_sections['k']['start']+1)/abs($this->_sections['k']['step'])), $this->_sections['k']['max']);
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
              <p style="width: 100%; margin: 0; padding: 0;">
              <input type="radio" name="lugar" value="<?php echo $this->_tpl_vars['obj']->cLugares[$this->_sections['k']['index']]['id']; ?>
" id="lugar_<?php echo $this->_sections['k']['index']; ?>
"  <?php if ($this->_tpl_vars['obj']->cLugares[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cIdLugar): ?>checked="checked"<?php endif; ?>>
              <label for="lugar_<?php echo $this->_sections['k']['index']; ?>
" class="lblr"><?php echo $this->_tpl_vars['obj']->cLugares[$this->_sections['k']['index']]['txt_nombre']; ?>
 <span>(<?php echo $this->_tpl_vars['obj']->cLugares[$this->_sections['k']['index']]['num']; ?>
)</span></label>
            </p>
            <?php endfor; endif; ?>
          </div>
            <a href="javascript:void(0)" onClick="limpiar('lugar')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <div class="clear"></div>
          <a class="float_right ampliar-opciones-2" href="#">M�s opciones</a>
          <?php endif; ?>
        </div>
      </div>
      <h2 class="acc_trigger"><a href="#">Jerarqu�a</a></h2>
      <div class="acc_container">
        <div class="block">
          <div class="opciones">
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
            <p>
              <input type="radio" name="jerar" value="<?php echo $this->_tpl_vars['obj']->cJerar[$this->_sections['k']['index']]['id']; ?>
" id="jerar_<?php echo $this->_sections['k']['index']; ?>
"  <?php if ($this->_tpl_vars['obj']->cJerar[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cIdJerar): ?>checked="checked"<?php endif; ?>>
              <label for="jerar_<?php echo $this->_sections['k']['index']; ?>
" class="lblr"><?php echo $this->_tpl_vars['obj']->cJerar[$this->_sections['k']['index']]['txt_nombre']; ?>
 <span>(<?php echo $this->_tpl_vars['obj']->cJerar[$this->_sections['k']['index']]['num']; ?>
)</span></label>
            </p>
            <?php endfor; endif; ?>
            <a href="javascript:void(0)" onClick="limpiar('jerar')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          </div>
        </div>
      </div>
      <h2 class="acc_trigger"><a href="#">Fecha de publicaci�n</a></h2>
      <div class="acc_container">
        <div class="block">
          <div class="opciones">
            <p>
              <input type="radio" name="fecha" value="1" id="fecha_1"  <?php if ($this->_tpl_vars['obj']->cFecha == 1): ?>checked="checked"<?php endif; ?>>
              <label for="fecha_1" class="lblr">�ltimo d�a</label>
            </p>
            <p>
              <input type="radio" name="fecha" value="3" id="fecha_2"  <?php if ($this->_tpl_vars['obj']->cFecha == 3): ?>checked="checked"<?php endif; ?>>
              <label for="fecha_2" class="lblr">�ltimos (3) d�as</label>
            </p>
            <p>
              <input type="radio" name="fecha" value="7" id="fecha_3"  <?php if ($this->_tpl_vars['obj']->cFecha == 7): ?>checked="checked"<?php endif; ?>>
              <label for="fecha_3" class="lblr">�ltimos (7) d�as</label>
            </p>
            <p>
              <input type="radio" name="fecha" value="15" id="fecha_4"  <?php if ($this->_tpl_vars['obj']->cFecha == 15): ?>checked="checked"<?php endif; ?>>
              <label for="fecha_4" class="lblr">�ltimos (15) d�as</label>
            </p>
          </div>
          <div class="mas-opciones-4">
            <p style="width: 100%; margin: 0; padding: 0;">
              <input type="radio" name="fecha" value="30" id="fecha_5"  <?php if ($this->_tpl_vars['obj']->cFecha == 30): ?>checked="checked"<?php endif; ?>>
              <label for="fecha_5" class="lblr">�ltimos (30) d�as</label>
            </p>
            <p style="width: 100%; margin: 0; padding: 0;">
              <input type="radio" name="fecha" value="60" id="fecha_6"  <?php if ($this->_tpl_vars['obj']->cFecha == 60): ?>checked="checked"<?php endif; ?>>
              <label for="fecha_6" class="lblr">�ltimos (60) d�as</label>
            </p>
          </div>
            <a href="javascript:void(0)" onClick="limpiar('fecha')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <div class="clear"></div>
          <a class="float_right ampliar-opciones-4" href="#">M�s opciones</a>
        </div>
      </div>
      <h2 class="acc_trigger"><a href="#">Aspiraci&oacute;n salarial</a></h2>
      <div class="acc_container">
        <div class="block">
          <div class="opciones">
            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cAspira) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['max'] = (int)4;
$this->_sections['k']['show'] = true;
if ($this->_sections['k']['max'] < 0)
    $this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = min(ceil(($this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] - $this->_sections['k']['start'] : $this->_sections['k']['start']+1)/abs($this->_sections['k']['step'])), $this->_sections['k']['max']);
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
            <p>
              <input type="radio" name="aspira" value="<?php echo $this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['id']; ?>
" id="aspira_<?php echo $this->_sections['k']['index']; ?>
"  <?php if ($this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cIdAspira): ?>checked="checked"<?php endif; ?>>
              <label for="aspira_<?php echo $this->_sections['k']['index']; ?>
" class="lblr"><?php echo $this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['txt_nombre']; ?>
 <span>(<?php echo $this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['num']; ?>
)</span></label>
            </p>
            <?php endfor; endif; ?>

          <?php if ($this->_tpl_vars['obj']->cContador['lugar'] <= 5): ?>
            <a href="javascript:void(0)" onClick="limpiar('aspira')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <?php endif; ?>
          </div>
          <?php if ($this->_tpl_vars['obj']->cContador['lugar'] >= 5): ?>
          <div class="mas-opciones-5">
            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['start'] = (int)4;
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cAspira) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
if ($this->_sections['k']['start'] < 0)
    $this->_sections['k']['start'] = max($this->_sections['k']['step'] > 0 ? 0 : -1, $this->_sections['k']['loop'] + $this->_sections['k']['start']);
else
    $this->_sections['k']['start'] = min($this->_sections['k']['start'], $this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] : $this->_sections['k']['loop']-1);
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = min(ceil(($this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] - $this->_sections['k']['start'] : $this->_sections['k']['start']+1)/abs($this->_sections['k']['step'])), $this->_sections['k']['max']);
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
              <p style="width: 100%; margin: 0; padding: 0;">
              <input type="radio" name="aspira" value="<?php echo $this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['id']; ?>
" id="aspira_<?php echo $this->_sections['k']['index']; ?>
"  <?php if ($this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cIdAspira): ?>checked="checked"<?php endif; ?>>
              <label for="aspira_<?php echo $this->_sections['k']['index']; ?>
" class="lblr"><?php echo $this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['txt_nombre']; ?>
 <span>(<?php echo $this->_tpl_vars['obj']->cAspira[$this->_sections['k']['index']]['num']; ?>
)</span></label>
            </p>
            <?php endfor; endif; ?>
          </div>
            <a href="javascript:void(0)" onClick="limpiar('aspira')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <div class="clear"></div>
          <a class="float_right ampliar-opciones-5" href="#">M�s opciones</a>
          <?php endif; ?>
        </div>
      </div>
      <div class="campo_buscadorinternas">
        <input class="bt_buscarinternas buscar-columna" type="submit" value="Buscar Empleo" onclick="location.href = 'ofertas_publicadas.php'">
      </div>
    </form>
  </div>
</div>

<?php echo '
<script type="text/javascript">

  function limpiar(parametro) {

    var inputdefinido = "input[name="+parametro+"]";
    $(inputdefinido).attr(\'checked\',false);

  }

</script>
'; ?>