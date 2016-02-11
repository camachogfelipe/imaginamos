<?php /* Smarty version 2.6.24, created on 2013-12-10 17:53:20
         compiled from menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'menu.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'menu','assign' => 'obj'), $this);?>

<div class="cont_header">
  <a class="logo_home" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
"></a>
  <div class="cont_sliderheader" style="overflow: hidden;">
    <ul id="sliderheader" >
      <li><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/images/slider01.png" height="61" width="167" alt=""></li>
      <li><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/images/slider03.png" height="61" width="167" alt=""></li>
      <li><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/images/slider02.png" height="61" width="167" alt=""></li>
    </ul>
  </div>
  <?php if ($this->_tpl_vars['obj']->cLoged == 0): ?>
  <a href="#zona_segura_empresa" id="bt_zona_segura_empresa" class="fancybox">empresas</a>
  <a href="#zona_segura_usuario" id="bt_zona_segura_usuario" class="fancybox">usuarios</a>
  <?php else: ?>
  <a href="<?php echo $this->_tpl_vars['obj']->mLogout; ?>
" class="cerrar-sesion"><strong>Cerrar sesi&oacute;n</strong></a>
  <span class="divisor">|</span>
  <p class="bienvenida"><a href="<?php echo $this->_tpl_vars['obj']->cUrlZona; ?>
"><?php echo $this->_tpl_vars['obj']->cUserName; ?>
</a><span><strong>Bienvenido,</strong></span></p>
  <?php endif; ?>
  <ul class="menu">
    <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cMenu) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <li>
      <?php if ($this->_tpl_vars['obj']->cMenu[$this->_sections['k']['index']]['hijos']['0'] == ""): ?>
      <a href="<?php echo $this->_tpl_vars['obj']->cMenu[$this->_sections['k']['index']]['url']; ?>
" class="<?php if ($this->_tpl_vars['obj']->cSeccion == 'registro_usuario'): ?>activo<?php endif; ?>"><?php echo $this->_tpl_vars['obj']->cMenu[$this->_sections['k']['index']]['txt_nombre']; ?>
</a>
      <?php else: ?>
      <a ><?php echo $this->_tpl_vars['obj']->cMenu[$this->_sections['k']['index']]['txt_nombre']; ?>
</a>
      <ul class="submenu-2">
        <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cMenu[$this->_sections['k']['index']]['hijos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
        <li>
          <a href="<?php echo $this->_tpl_vars['obj']->cMenu[$this->_sections['k']['index']]['hijos'][$this->_sections['a']['index']]['url']; ?>
" class="<?php if ($this->_tpl_vars['obj']->cSeccion == 'buscar-empleo'): ?>activo<?php endif; ?>" > <?php echo $this->_tpl_vars['obj']->cMenu[$this->_sections['k']['index']]['hijos'][$this->_sections['a']['index']]['txt_nombre']; ?>
</a>
        </li>
        <?php endfor; endif; ?>
      </ul>
      <?php endif; ?>
    </li>
    <?php endfor; endif; ?>
  </ul>
</div>