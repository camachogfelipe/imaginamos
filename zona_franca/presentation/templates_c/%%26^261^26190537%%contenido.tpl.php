<?php /* Smarty version 2.6.24, created on 2013-12-26 17:41:15
         compiled from contenido.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'contenido.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'contenido','assign' => 'obj'), $this);?>

<?php echo ' 
<style type="text/css">
  img{/*margin-top: 45px;*/}
  .titulo_contenido ul{list-style: initial ; margin-left: 20px;}
</style>
'; ?>
 

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buscador-interna.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos-2 inline">
      <h1 class="inline"><?php echo $this->_tpl_vars['obj']->cTitulo; ?>
</h1>
      <div class="clear"></div>
      <!-- <div class="sombra_division"></div> -->
    </div>
    <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cArticulos) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <?php if ($this->_sections['k']['iteration'] % 2 == 0): ?>
    <div class="titulo_contenido">
      <div class="row-fluid">
        <div class="span6 border">
          <img class="" src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/secart/art_<?php echo $this->_tpl_vars['obj']->cArticulos[$this->_sections['k']['index']]['fil_image']; ?>
">
        </div>
        <div class="span6">
          <h2 class="inline"><?php echo $this->_tpl_vars['obj']->cArticulos[$this->_sections['k']['index']]['txt_titulo']; ?>
</h2>
          <div class="clear espacio_en_blanco"></div>
          <p><?php echo $this->_tpl_vars['obj']->cArticulos[$this->_sections['k']['index']]['txt_descripcion']; ?>
</p>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="titulo_contenido">
      <div class="row-fluid">
        <div class="span6">
          <h2 class="inline"><?php echo $this->_tpl_vars['obj']->cArticulos[$this->_sections['k']['index']]['txt_titulo']; ?>
</h2>
          <div class="clear espacio_en_blanco"></div>
          <p><?php echo $this->_tpl_vars['obj']->cArticulos[$this->_sections['k']['index']]['txt_descripcion']; ?>
</p>
        </div>
        <div class="span6 border">
          <img class="" src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/secart/art_<?php echo $this->_tpl_vars['obj']->cArticulos[$this->_sections['k']['index']]['fil_image']; ?>
">
        </div>
      </div>
    </div>
    <?php endif; ?>
    <div class="clear espacio_en_blanco"></div>
    <?php endfor; endif; ?>
  </div>
</div>
<!-- contenedor_internas -->