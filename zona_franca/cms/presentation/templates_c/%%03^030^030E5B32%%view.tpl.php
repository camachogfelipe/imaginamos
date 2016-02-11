<?php /* Smarty version 2.6.24, created on 2013-10-02 15:51:13
         compiled from /var/www/html/cms/presentation/zona_empresas_desta/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/html/cms/presentation/zona_empresas_desta/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "zona_empresas_desta/controller",'assign' => 'obj'), $this);?>

<div class="container-fluid">
<?php if ($this->_tpl_vars['obj']->mModo == 'list'): ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->cBack; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <?php if ($this->_tpl_vars['obj']->cNumDesta < 11): ?>
    <a href="<?php echo $this->_tpl_vars['obj']->mCrear; ?>
" class="btn"><i class="icon-plus-sign"></i> Crear</a>
    <?php endif; ?>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Empresas destacadas</h1>
  <br>
  <?php echo $this->_tpl_vars['obj']->mList; ?>

</div>
<?php else: ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid formContainer">
  <h1>Empresas destacadas</h1>
  <br>
  <div class="class_frm frmzona_empresas_desta">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="zona_empresas_desta" />
    <input type="hidden" class="field_frm" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
    <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
    <input type="hidden" class="field_frm" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
    <?php endif; ?>

    <div class="span5">
      <label class="label">Empresa *</label><br />
      <select name="id_empresa" id="id_empresa" class="field_frm" title="Seleccione la empresa">
        <option value="">Seleccione</option>
        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cEmpresas) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <?php if ($this->_tpl_vars['obj']->cEmpresas[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->mData['id_empresa']): ?>
        <option value="<?php echo $this->_tpl_vars['obj']->cEmpresas[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cEmpresas[$this->_sections['k']['index']]['txt_nom_comercial']; ?>
</option>
          <?php else: ?>
        <option value="<?php echo $this->_tpl_vars['obj']->cEmpresas[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cEmpresas[$this->_sections['k']['index']]['txt_nom_comercial']; ?>
</option>
          <?php endif; ?>
        <?php endfor; endif; ?>
      </select>
    </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmzona_empresas_desta">Guardar</a>
    </div>
  </div>
</div>
<?php endif; ?>
</div>