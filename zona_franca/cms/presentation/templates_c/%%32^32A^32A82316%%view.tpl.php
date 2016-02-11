<?php /* Smarty version 2.6.24, created on 2013-08-13 18:10:07
         compiled from /var/www/CMK/zonafranca/cms/presentation/cms_banner/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/CMK/zonafranca/cms/presentation/cms_banner/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "cms_banner/controller",'assign' => 'obj'), $this);?>

<div class="container-fluid">
<?php if ($this->_tpl_vars['obj']->mModo == 'list'): ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="<?php echo $this->_tpl_vars['obj']->mCrear; ?>
" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>cms_banner</h1>
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
  <h1>cms_banner</h1>
  <br>
  <div class="class_frm frmcms_banner">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="cms_banner" />
    <input type="hidden" class="field_frm" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
    <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
    <input type="hidden" class="field_frm" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
    <?php endif; ?>

    <div class="span5">
      <label class="label">id_seccion *</label><br />
      <input type="text" class="field_frm" id="id_seccion" name="id_seccion" value="<?php echo $this->_tpl_vars['obj']->mData['id_seccion']; ?>
" placeholder="id_seccion" title="Digite el id_seccion" />
    </div>
        
    <div class="span5">
      <label class="label">txt_titulo *</label><br />
      <input type="text" class="field_frm" id="txt_titulo" name="txt_titulo" value="<?php echo $this->_tpl_vars['obj']->mData['txt_titulo']; ?>
" placeholder="txt_titulo" title="Digite el txt_titulo" />
    </div>
        
    <div class="span5">
      <label class="label">txt_descripcion *</label><br />
      <input type="text" class="field_frm" id="txt_descripcion" name="txt_descripcion" value="<?php echo $this->_tpl_vars['obj']->mData['txt_descripcion']; ?>
" placeholder="txt_descripcion" title="Digite el txt_descripcion" />
    </div>
        
    <div class="span5">
      <label class="label">fil_image *</label><br />
      <input type="text" class="field_frm" id="fil_image" name="fil_image" value="<?php echo $this->_tpl_vars['obj']->mData['fil_image']; ?>
" placeholder="fil_image" title="Digite el fil_image" />
    </div>
        
    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_banner">Guardar</a>
    </div>
  </div>
</div>
<?php endif; ?>
</div>
      