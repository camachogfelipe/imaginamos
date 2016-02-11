<?php /* Smarty version 2.6.24, created on 2013-10-16 17:29:38
         compiled from /var/www/html/cms/presentation/zona_copy/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/html/cms/presentation/zona_copy/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "zona_copy/controller",'assign' => 'obj'), $this);?>

<div class="container-fluid">
  <?php if ($this->_tpl_vars['obj']->mModo == 'list'): ?>
    <div class="row-fluid">
      <div class="btn-group">
        <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
              </div>
    </div>

    <div class="row-fluid listContainer">
      <h1>zona_copy</h1>
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
      <h1>Edicion de texto</h1>
      <br>
      <div class="class_frm frmzona_copy">
        <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
        <input type="hidden" class="field_frm" id="clase" value="zona_copy" />
        <input type="hidden" class="field_frm" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
        <input type="hidden" class="field_frm" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
        <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
          <input type="hidden" class="field_frm" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
        <?php endif; ?>

        <div class="span5">
          <label class="label">Titulo *</label><br />
          <input type="text" class="field_frm" id="titulo" name="titulo" value="<?php echo $this->_tpl_vars['obj']->mData['titulo']; ?>
" placeholder="Digite el titulo" title="Digite el titulo" />
        </div>

        <div class="span10">
          <br /><br /><label class="label">Texto *</label><br />
          <textarea class="field_frm" id="texto" name="texto" rows="3" title="Digite el texto" placeholder="Digite el texto"><?php echo $this->_tpl_vars['obj']->mData['texto']; ?>
</textarea>
        </div>

        <div class="span10">
          <a href="javascript:void(0);" class="btn submit_frm" frmid="frmzona_copy">Guardar</a>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>