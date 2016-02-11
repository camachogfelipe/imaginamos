<?php /* Smarty version 2.6.24, created on 2013-08-12 11:45:35
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'login.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'store_front','assign' => 'obj'), $this);?>


<div class="container-fluid">
  <div class="class_frm frmlogin form-signin">
    <h2 class="form-signin-heading">Inicio de sesi&oacute;n</h2>
    <input type="hidden" class="field_frm" id="myFunct" value="HacerLogin" />
    <label class="">Correo electr&oacute;nico</label>
    <input type="text" class="field_frm input-block-level" id="email" title="Digite el correo electr&oacute;nico" />
    <label class="">Contrase&ntilde;a</label>
    <input type="password" class="field_frm input-block-level" id="passwd" title="Digite la contrase&ntilde;a del usuario" />
    <div class="clearfix">
      <a href="javascript:void(0);" class="submit_frm btn btn-large btn-primary" frmid="frmlogin">Iniciar sesi&oacute;n</a>
    </div>
  </div>
</div>