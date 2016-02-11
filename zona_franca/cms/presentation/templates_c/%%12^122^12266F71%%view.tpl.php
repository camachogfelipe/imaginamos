<?php /* Smarty version 2.6.24, created on 2013-09-17 10:32:52
         compiled from /var/www/html/cms/presentation/cms_home/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/html/cms/presentation/cms_home/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "cms_home/controller",'assign' => 'obj'), $this);?>

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
  <h1>cms_home</h1>
  <br>
  <?php echo $this->_tpl_vars['obj']->mList; ?>

</div>
<?php else: ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid formContainer">
  <h1>Banner home</h1>
  <br>
  <div class="class_frm frmcms_home">
    <form name="frm_ticket" id="frm_ticket" method="post" enctype="multipart/form-data">
      <input type="hidden" class="field_frm" name="myForm" id="myForm" value="frm_ticket" />
      <input type="hidden" class="field_frm" name="modo" id="modo" value="save" />
      <input type="hidden" class="field_frm" name="redirect" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
      <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
      <input type="hidden" class="field_frm" name="id" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
      <?php endif; ?>

      <div class="span5">
        <label class="label">Titulo *</label><br />
        <input type="text" class="field_frm" id="txt_titulo" name="txt_titulo" value="<?php echo $this->_tpl_vars['obj']->mData['txt_titulo']; ?>
" placeholder="Titulo" title="Digite el titulo" />
      </div>
        
      <div class="span5">
        <label class="label">Subtitulo *</label><br />
        <input type="text" class="field_frm" id="txt_subtitulo" name="txt_subtitulo" value="<?php echo $this->_tpl_vars['obj']->mData['txt_subtitulo']; ?>
" placeholder="Subtitulo" title="Digite el subtitulo" />
      </div>
        
      <div class="span5">
        <label class="label">Imagen *</label><br />
        <?php if ($this->_tpl_vars['obj']->mData['fil_image'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/files/home/thum_<?php echo $this->_tpl_vars['obj']->mData['fil_image']; ?>
" class="img-rounded">
        <?php endif; ?>
        <input type="file" class="field_frm" id="fil_image" name="fil_image" value="" />
      </div>
        
      <div class="span10">
        <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_home">Guardar</a>
      </div>
    </form>
  </div>
</div>
<?php endif; ?>
</div>
      