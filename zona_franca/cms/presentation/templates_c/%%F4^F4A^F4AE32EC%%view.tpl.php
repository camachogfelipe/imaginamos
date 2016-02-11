<?php /* Smarty version 2.6.24, created on 2013-10-28 15:03:13
         compiled from /var/www/html/cms/presentation/zona_empseg/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/html/cms/presentation/zona_empseg/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "zona_empseg/controller",'assign' => 'obj'), $this);?>

<div class="container-fluid">
<?php if ($this->_tpl_vars['obj']->mModo == 'list'): ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>zona_empseg</h1>
  <br>
  <a href="<?php echo $this->_tpl_vars['obj']->mDescarga; ?>
">Descargar</a>
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
  <h1>zona_empseg</h1>
  <br>
  <div class="class_frm frmzona_empseg">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="zona_empseg" />
    <input type="hidden" class="field_frm" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
    <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
    <input type="hidden" class="field_frm" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
    <?php endif; ?>

    <div class="span5">
      <label class="label">Empresa</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['empresa']['txt_razon_social']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">Cargo</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['oferta']['txt_cargo']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">¿Consiguió empleado para su oferta?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['con_empl']; ?>
</p>
    </div>
        
    <div class="span5">
      <label class="label">¿El empleado que consiguió fue a través de Empleo en Marcha?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['trav_emar']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">Cuantos empleados consiguierón empleo?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['num_emple']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">Cédula de los empleados contratados (separadas por comas )</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['num_cedulas']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">Califique su experiencia de contratación a través de Empleo en Marcha</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['cali_exp']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">En términos de tiempo ¿La obtención de empleado se ajustó en los términos esperados por la empresa?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['tiem_esp']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">¿Cómo consiguió el empleado?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['como_emp']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">¿Dentro del proceso le fue de utilidad a la empresa el servicio otorgado por Empleo en Marcha?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['util_emar']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">¿Por qué está eliminando su oferta?</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['elim_ofe']; ?>
</p>
    </div>

    <div class="span5">
      <label class="label">Ingrese el resultado de su experiencia con el portal de Empleo en Marcha</label><br />
      <p><?php echo $this->_tpl_vars['obj']->mData['resu_exp']; ?>
</p>
    </div>

  </div>
</div>
<?php endif; ?>
</div>
      