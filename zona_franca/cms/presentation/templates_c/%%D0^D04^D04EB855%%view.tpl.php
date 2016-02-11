<?php /* Smarty version 2.6.24, created on 2013-10-28 15:27:38
         compiled from /var/www/html/cms/presentation/zona_perseg/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/html/cms/presentation/zona_perseg/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "zona_perseg/controller",'assign' => 'obj'), $this);?>

<div class="container-fluid">
<?php if ($this->_tpl_vars['obj']->mModo == 'list'): ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>zona_perseg</h1>
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
  <h1>zona_perseg</h1>
  <br>
  <div class="class_frm frmzona_perseg">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="zona_perseg" />
    <input type="hidden" class="field_frm" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
    <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
    <input type="hidden" class="field_frm" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
    <?php endif; ?>

    <div class="span5">
      <label class="label">Nombre</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['persona']['txt_prim_nom']; ?>
 <?php echo $this->_tpl_vars['obj']->mData['persona']['txt_prim_apell']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">Documento</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['persona']['num_identifica']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">¿Ya conseguiste Trabajo?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['con_trab']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">¿Sigues interesado en conseguir trabajo?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['int_trab']; ?>
</p>
    </div>
        
    <div class="span5">
      <label class="label">Califique su experiencia de búsqueda de empleo a través de Empleo en Marcha</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['cal_exp']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">¿El empleo que consiguió lo hizo a través de Empleo en Marcha?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['atra_emp']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">¿Cómo consiguió el trabajo que tiene actualmente?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['como_tra']; ?>
</p>
    </div>
    
    <div class="span5">
      <label class="label">¿Cuánto tiempo se demoró consiguiendo trabajo a través del portal?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['demo_tra']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">Califique su experiencia de búsqueda de empleo a través de Empleo en Marcha</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['expe_emp']; ?>
</p>
    </div>
        
    <div class="span5">
      <label class="label">¿Recomendaría el Portal de Empleo en Marcha para la obtención de empleo?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['reco_emp']; ?>
</p>
    </div>
  </div>
</div>
<?php endif; ?>
</div>
      