<?php /* Smarty version 2.6.24, created on 2013-12-10 17:53:20
         compiled from buscador-interna.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'buscador-interna.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'buscador_interna','assign' => 'obj'), $this);?>

<div class="buscador_internas">
  <div class="container cont_buscadorinternas">
    <div class="row">
      <form action="<?php echo $this->_tpl_vars['obj']->cOfPubli; ?>
" name="registro" id="registro" method="post">
        <div class="span4 campo_buscadorinternas">
          <input type="text" name="titulo" id="titulo" placeholder="Palabra clave:" value="<?php echo $this->_tpl_vars['obj']->cTitulo; ?>
">
        </div>
        <div class="span3 campo_buscadorinternas">
          <select class="select_dd" name="fecha" id="fecha" style="width:100%;">
            <option value="">Fecha de publicaci&oacute;n:</option>
            <option value="1" <?php if ($this->_tpl_vars['obj']->cFecha == '1'): ?>selected="selected"<?php endif; ?>>Último día</option>
            <option value="3" <?php if ($this->_tpl_vars['obj']->cFecha == '3'): ?>selected="selected"<?php endif; ?>>Últimos (3) días</option>
            <option value="7" <?php if ($this->_tpl_vars['obj']->cFecha == '7'): ?>selected="selected"<?php endif; ?>>Últimos (7) días</option>
            <option value="15" <?php if ($this->_tpl_vars['obj']->cFecha == '15'): ?>selected="selected"<?php endif; ?>>Últimos (15) días</option>
            <option value="30" <?php if ($this->_tpl_vars['obj']->cFecha == '30'): ?>selected="selected"<?php endif; ?>>Últimos (30) días</option>
            <option value="60" <?php if ($this->_tpl_vars['obj']->cFecha == '60'): ?>selected="selected"<?php endif; ?>>Últimos (60) días</option>
          </select>
        </div>
        <div class="span3 campo_buscadorinternas">
          <select class="select_dd" name="area" id="area" style="width:100%;">
            <option value="">&Aacute;rea:</option>
            <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cAreas) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
              <?php if ($this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->cIdArea): ?>
            <option value="<?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
              <?php else: ?>
            <option value="<?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
              <?php endif; ?>
            <?php endfor; endif; ?>
          </select>
        </div>
        <div class="span2 campo_buscadorinternas">
          <input class="bt_buscarinternas" type="submit" value="Buscar Empleo" onclick="location.href = 'ofertas_publicadas.php'">
        </div>
      </form>
    </div>
  </div>
</div>