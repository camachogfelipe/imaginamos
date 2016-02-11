<?php /* Smarty version 2.6.24, created on 2013-08-13 15:22:16
         compiled from /var/www/CMK/zonafranca/cms/presentation/cms_encuesta_opciones/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/CMK/zonafranca/cms/presentation/cms_encuesta_opciones/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "cms_encuesta_opciones/controller",'assign' => 'obj'), $this);?>

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
  <h1>Opciones encuesta</h1>
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
  <h1>Opciones encuesta</h1>
  <br>
  <div class="class_frm frmcms_encuesta_opciones">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="cms_encuesta_opciones" />
    <input type="hidden" class="field_frm" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
    <input type="hidden" class="field_frm" id="id_pregunta" name="id_pregunta" value="<?php echo $this->_tpl_vars['obj']->mData['id_pregunta']; ?>
" />
    <input type="hidden" class="field_frm" id="ind_estado" value="1" />
    <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
    <input type="hidden" class="field_frm" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
    <?php endif; ?>

    <div class="span5">
      <label class="label">Respuesta *</label><br />
      <input type="text" class="field_frm" id="txt_respuesta" name="txt_respuesta" value="<?php echo $this->_tpl_vars['obj']->mData['txt_respuesta']; ?>
" placeholder="Respuesta" title="Digite el respuesta" />
    </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_encuesta_opciones">Guardar</a>
    </div>
  </div>
</div>
<?php endif; ?>
</div>