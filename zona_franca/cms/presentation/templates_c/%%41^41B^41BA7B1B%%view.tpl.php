<?php /* Smarty version 2.6.24, created on 2014-01-08 12:46:05
         compiled from C:%5Cxampp%5Chtdocs%5Cimaginamos%5Cjames_garcia%5Czona_franca%5Ccms/presentation/cms_secciones_articulo/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'C:\\xampp\\htdocs\\imaginamos\\james_garcia\\zona_franca\\cms/presentation/cms_secciones_articulo/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "cms_secciones_articulo/controller",'assign' => 'obj'), $this);?>

<div class="container-fluid">
<?php if ($this->_tpl_vars['obj']->mModo == 'list'): ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->cBack; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="<?php echo $this->_tpl_vars['obj']->mCrear; ?>
" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Secciones articulo</h1>
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
  <h1>Secciones articulo</h1>
  <br>
  <div class="class_frm frmcms_secciones_articulo">
    <form name="frm_ticket" id="frm_ticket" method="post" enctype="multipart/form-data">
      <input type="hidden" class="field_frm" name="myForm" id="myForm" value="frm_ticket" />
      <input type="hidden" class="field_frm" name="modo" id="modo" value="save" />
      <input type="hidden" class="field_frm" name="redirect" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
      <input type="hidden" class="field_frm" name="fec_creasi" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
      <input type="hidden" class="field_frm" name="id_seccion" id="id_seccion" value="<?php echo $this->_tpl_vars['obj']->mData['id_seccion']; ?>
" />

      <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
      <input type="hidden" class="field_frm" name="id_articulo" id="id_articulo" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
      <?php endif; ?>

      <div class="span10">
        <label class="label">Titulo *</label>
        <input type="text" class="field_frm input-xxlarge" id="txt_titulo" name="txt_titulo" value="<?php echo $this->_tpl_vars['obj']->mData['txt_titulo']; ?>
" placeholder="Titulo" title="Digite el titulo" />
      </div>

      <div class="span10">
        <label class="label">Descripcion *</label>
        <textarea class="field_frm input-xxlarge" id="txt_descripcion" name="txt_descripcion" rows="3" title="Digite el descripcion"><?php echo $this->_tpl_vars['obj']->mData['txt_descripcion']; ?>
</textarea>
      </div>

      <div class="span10">
        <label class="label">Imagen *</label>
        <?php if ($this->_tpl_vars['obj']->mData['fil_image'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/files/secart/thum_<?php echo $this->_tpl_vars['obj']->mData['fil_image']; ?>
" class="img-rounded">
        <?php endif; ?>
        <input type="file" class="field_frm" id="fil_image" name="fil_image" value="" />
      </div>

      
      <div class="span10">
        <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_secciones_articulo"><i class="icon-ok"></i> Guardar</a>
      </div>
    </form>
  </div>
</div>
<?php endif; ?>
</div>