<?php /* Smarty version 2.6.24, created on 2013-08-13 11:12:47
         compiled from cms_usuarios.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'cms_usuarios.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'cms_usuarios','assign' => 'obj'), $this);?>

<div class="container-fluid">
<?php if ($this->_tpl_vars['obj']->mModo == 'list'): ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="<?php echo $this->_tpl_vars['obj']->mCrear; ?>
" class="btn"><i class="icon-plus-sign"></i> Crear</a>
    <a href="<?php echo $this->_tpl_vars['obj']->mRoles; ?>
" class="btn"><i class="icon-user"></i> Roles</a> 
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Secciones</h1>
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
  <div class="class_frm frmcms_usuarios">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="myFunct" value="UsuariosCrear" />
    <input type="hidden" class="field_frm" id="clase" value="cms_usuarios" />
    <input type="hidden" class="field_frm" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
    <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
    <input type="hidden" class="field_frm" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
    <?php endif; ?>

    <div class="span5">
      <label class="label">Nombre *</label>
      <input type="text" class="field_frm" id="txt_nombre" name="txt_nombre" value="<?php echo $this->_tpl_vars['obj']->mData['txt_nombre']; ?>
" placeholder="nombre" title="Digite el nombre" />
    </div>

    <div class="span5">
      <label class="label">Email *</label>
      <input type="text" class="field_frm" id="txt_email" name="txt_email" value="<?php echo $this->_tpl_vars['obj']->mData['txt_email']; ?>
" placeholder="email" title="Digite el email"  />
    </div>

    <div class="span5">
      <label class="label">Rol *</label>
      <select name="id_rol" id="id_rol" class="field_frm" title="Seleccione el rol del usuario">
        <option value="">Seleccione</option>
        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mRoles) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <?php if ($this->_tpl_vars['obj']->mRoles[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->mData['id_rol']): ?>
            <option value="<?php echo $this->_tpl_vars['obj']->mRoles[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->mRoles[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
          <?php else: ?>
            <option value="<?php echo $this->_tpl_vars['obj']->mRoles[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->mRoles[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
          <?php endif; ?>
        <?php endfor; endif; ?>
      </select>
    </div>

    <div class="span5">
      <label class="label">Clave *</label>
      <input type="password" class="field_frm" id="txt_passwd" name="txt_passwd" value="" title="Digite la clave" />
    </div>

    <div class="span5">
      <label class="label">Confirmacion clave *</label>
      <input type="password" class="field_frm" id="passwd_conf" name="passwd_conf" value="" title="Digite la confirmacion de clave" />
    </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_usuarios"><i class="icon-ok"></i> Guardar</a> 
    </div>
  </div>
</div>
<?php endif; ?>
</div>