<?php /* Smarty version 2.6.24, created on 2013-07-08 08:21:12
         compiled from /var/www/zonafranca/cms/presentation/cms_articulos/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/zonafranca/cms/presentation/cms_articulos/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "cms_articulos/controller",'assign' => 'obj'), $this);?>

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
  <h1>Articulos</h1>
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
  <h1>Articulos</h1>
  <br>
  <div class="class_frm frmcms_articulos">
    <form name="frm_ticket" id="frm_ticket" method="post" enctype="multipart/form-data">
      <input type="hidden" class="field_frm" name="myForm" id="myForm" value="frm_ticket" />
      <input type="hidden" class="field_frm" name="modo" id="modo" value="save" />
      <input type="hidden" class="field_frm" name="redirect" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
      <input type="hidden" class="field_frm" name="fec_creasi" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
      <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
      <input type="hidden" class="field_frm" name="id" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
      <?php endif; ?>

      <div class="span5">
        <label class="label">Tipo *</label>
        <select name="id_tipo" id="id_tipo" class="field_frm" title="Seleccione el modulo">
          <option value="">Seleccione</option>
          <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cTipo) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
            <?php if ($this->_tpl_vars['obj']->cTipo[$this->_sections['k']['index']]['id'] == $this->_tpl_vars['obj']->mData['id_tipo']): ?>
              <option value="<?php echo $this->_tpl_vars['obj']->cTipo[$this->_sections['k']['index']]['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['obj']->cTipo[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
            <?php else: ?>
              <option value="<?php echo $this->_tpl_vars['obj']->cTipo[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cTipo[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
            <?php endif; ?>
          <?php endfor; endif; ?>
        </select>
      </div>

      <div class="span5">
        <label class="label">Titulo *</label>
        <input type="text" class="field_frm" id="txt_titulo" name="txt_titulo" value="<?php echo $this->_tpl_vars['obj']->mData['txt_titulo']; ?>
" placeholder="txt_titulo" title="Digite el txt_titulo" />
      </div>

      <div class="span5">
        <label class="label">Imagen *</label>
        <?php if ($this->_tpl_vars['obj']->mData['fil_image'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/files/articulos/thum_<?php echo $this->_tpl_vars['obj']->mData['fil_image']; ?>
" class="img-rounded"><br />
        <?php endif; ?>
        <input type="file" class="field_frm" id="fil_image" name="fil_image" value="" />
      </div>

      <div class="span5">
        <label class="label">Video *</label>
        <input type="text" class="field_frm" id="fil_video" name="fil_video" value="<?php echo $this->_tpl_vars['obj']->mData['fil_video']; ?>
" placeholder="Video" />
      </div>

      <div class="span10">
        <label class="label">Descripcion *</label>
        <textarea class="field_frm input-xxlarge" id="txt_descripcion" name="txt_descripcion" rows="3" title="Digite el txt_descripcion"><?php echo $this->_tpl_vars['obj']->mData['txt_descripcion']; ?>
</textarea>
      </div>

      <div class="span10">
        <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_articulos"><i class="icon-ok"></i> Guardar</a>
      </div>
    </form>
  </div>
</div>
<?php endif; ?>
</div>