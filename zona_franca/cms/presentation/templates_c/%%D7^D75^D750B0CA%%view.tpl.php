<?php /* Smarty version 2.6.24, created on 2013-08-13 11:13:13
         compiled from /var/www/CMK/zonafranca/cms/presentation/zona_empresas/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/CMK/zonafranca/cms/presentation/zona_empresas/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "zona_empresas/controller",'assign' => 'obj'), $this);?>

<div class="container-fluid">
<?php if ($this->_tpl_vars['obj']->mModo == 'list'): ?>
<div class="">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="<?php echo $this->_tpl_vars['obj']->cDesta; ?>
" class="btn"><i style="margin: 2px 0 0;" class="icon-star"></i> Destacados</a> 
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Empresas</h1>
  <br>
  <?php echo $this->_tpl_vars['obj']->mList; ?>

</div>
<?php else: ?>

<?php echo '
<script type="text/javascript">
  $(function(){
    $(\'#tabs\').tabs();
  });
</script>
<style>
#tabs {}
#tabs li {
width: auto;
height: 30px;
padding: 0 10px;
line-height: 25px;}
#tabs li a {
margin: 0 auto;
padding: 0;}

#tabs-1, #tabs-2, #tabs-3, #tabs-4, #tabs-5, #tabs-6, #tabs-7, #tabs-8 { border: 1px solid #ddd;
padding: 20px 0 20px;
	background: #F3F1F1;
	background: -moz-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -webkit-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -o-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -ms-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: linear-gradient(180deg, #FDFCFC 30%, #F3F1F1 70%);}
	
	.icon-pencil { margin: 2px 0 0;}
	
</style>
'; ?>




<div class="">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="formContainer">
  <h1>Empresas</h1>
  <br>

  <!--Start Horizontal Tabs-->
  <div id="tabs">
    <ul>
      <li><a href="#tabs-1"><i class="icon-pencil"></i> Empresa</a></li>
      <li><a href="#tabs-2"><i class="icon-pencil"></i> Contacto</a></li>
    </ul>

    <div id="tabs-1">
      
        <div class="span5">
          <label class="label">Nit</label>
          <p><?php echo $this->_tpl_vars['obj']->mData['txt_nit']; ?>
</p>
					
        </div>

        <div class="span5">
          <label class="label">Nombre comercial</label>
          <p><?php echo $this->_tpl_vars['obj']->mData['txt_nom_comercial']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Razon social</label>
          <p><?php echo $this->_tpl_vars['obj']->mData['txt_razon_social']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Ramo</label>
          <p><?php echo $this->_tpl_vars['obj']->mData['id_ramo']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Otro ramo u actividad</label>
          <p><?php echo $this->_tpl_vars['obj']->mData['txt_ramo_2']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Direccion</label>
          <p><?php echo $this->_tpl_vars['obj']->mData['txt_direccion']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Departamento</label>
          <p><?php echo $this->_tpl_vars['obj']->mData['id_departamento']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Ciudad</label>
          <p><?php echo $this->_tpl_vars['obj']->mData['id_ciudad']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Website</label>
          <p><?php echo $this->_tpl_vars['obj']->mData['txt_website']; ?>
</p>
        </div>

        

        <div class="span5">
          <label class="label">Logo</label>
          <?php if ($this->_tpl_vars['obj']->mData['fil_logo'] != ""): ?>
          <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/files/empresas/thum_<?php echo $this->_tpl_vars['obj']->mData['fil_logo']; ?>
" class="img-rounded"><br />
          <?php endif; ?>
        </div>
								<div class="span5">
          <label class="label">Descripcion</label>
          <p><?php echo $this->_tpl_vars['obj']->mData['txt_descripcion']; ?>
</p>
        </div>
     <div style="clear:both;"></div>
    </div>

    <div id="tabs-2">
    
        <div class="span5">
          <label class="label">Primer nombre</label>
          <p><?php echo $this->_tpl_vars['obj']->cContac['txt_prim_nom']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Segundo nombre</label>
          <p><?php echo $this->_tpl_vars['obj']->cContac['txt_seg_nom']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Primer apellido</label>
          <p><?php echo $this->_tpl_vars['obj']->cContac['txt_prim_apell']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Segundo apellido</label>
          <p><?php echo $this->_tpl_vars['obj']->cContac['txt_seg_apell']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Genero</label>
          <p><?php echo $this->_tpl_vars['obj']->cContac['nom_genero']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Fecha nacimiento</label>
          <p><?php echo $this->_tpl_vars['obj']->cContac['fec_nacimiento']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Cargo</label>
          <p><?php echo $this->_tpl_vars['obj']->cContac['txt_cargo']; ?>
</p>
        </div>

        <div class="span5">
          <label class="label">Telefono</label>
          <p><?php echo $this->_tpl_vars['obj']->cContac['txt_telefono']; ?>
</p>
        </div>
								 <div style="clear:both;"></div>
      </div>
     

  </div>
</div>
<!--End Horizontal Tabs-->


</div>


<?php endif; ?>
</div>