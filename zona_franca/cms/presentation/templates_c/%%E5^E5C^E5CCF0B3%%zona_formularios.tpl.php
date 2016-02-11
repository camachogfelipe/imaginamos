<?php /* Smarty version 2.6.24, created on 2013-08-12 11:31:42
         compiled from zona_formularios.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'zona_formularios.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'zona_formularios','assign' => 'obj'), $this);?>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="btn-group">
      <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <br />
  <h1>Formularios</h1>
  <br>
  <!--div class="row-fluid"-->
    <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mList) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
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
      <a href="<?php echo $this->_tpl_vars['obj']->mList[$this->_sections['a']['index']]['link']; ?>
">
        <div class="span2 btn" style="margin-bottom: 5px;">
          <img width="80" src="<?php echo $this->_tpl_vars['obj']->mList[$this->_sections['a']['index']]['fil_image']; ?>
" class="marcoDash" />
          <br>
          <label><?php echo $this->_tpl_vars['obj']->mList[$this->_sections['a']['index']]['txt_nombre']; ?>
</label>
        </div>
      </a>
    <?php endfor; endif; ?>
  <!--/div-->
</div>