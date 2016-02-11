<?php /* Smarty version 2.6.24, created on 2014-01-08 12:35:27
         compiled from C:%5Cxampp%5Chtdocs%5Cimaginamos%5Cjames_garcia%5Czona_franca%5Ccms/presentation/cms_encuesta_pregunta/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'C:\\xampp\\htdocs\\imaginamos\\james_garcia\\zona_franca\\cms/presentation/cms_encuesta_pregunta/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "cms_encuesta_pregunta/controller",'assign' => 'obj'), $this);?>

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
  <h1>Encuesta preguntas</h1>
  <br>
  <?php echo $this->_tpl_vars['obj']->mList; ?>

</div>
<?php else: ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" class="btn"><i class="icon-arrow-left"></i>Volver</a>
  </div>
</div>

<div class="row-fluid formContainer">
  <h1>Encuesta preguntas</h1>
  <br>
  <div class="class_frm frmcms_encuesta_pregunta">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="cms_encuesta_pregunta" />
    <input type="hidden" class="field_frm" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
    <input type="hidden" class="field_frm" id="ind_estado" value="1" />
    <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
    <input type="hidden" class="field_frm" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
    <?php endif; ?>

    <div class="span5">
      <label class="label">Pregunta *</label><br />
      <textarea class="field_frm" id="txt_pregunta" name="txt_pregunta" rows="3" title="Digite el pregunta"><?php echo $this->_tpl_vars['obj']->mData['txt_pregunta']; ?>
</textarea>
    </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_encuesta_pregunta">Guardar</a>
    </div>
  </div>
</div>
<?php endif; ?>
</div>