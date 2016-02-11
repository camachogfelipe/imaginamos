<?php /* Smarty version 2.6.24, created on 2013-12-10 21:55:53
         compiled from areas_empleo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'areas_empleo.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'areas_empleo','assign' => 'obj'), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buscador-interna.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="row">
      <div class="span4">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buscador_columna.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div><!-- izquierda -->
      <div class="span8">
        <div class="cont_titulos inline">
          <h1 class="inline">Áreas de <span>empleo</span></h1>
          <div class="clear"></div>
          <h2 class="inline"></h2>
          <div class="clear espacio_en_blancopeque"></div>
          <p class="inline">En esta sección encontrarás las ofertas de empleo agrupadas en las áreas laborales que se ajustan a tus necesidades.</p>
        </div>

        <div class="row">
          <div class="span8 slider_ofertaempleo">
            <div class="row">

              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
              <div class="campo_ofertaempleo">
                <div class="campo_ofertaempleocont">
                  <div class="imagen_ofertaempleo">
                    <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/images/imagen_empleo.jpg" alt="">
                  </div>
                  <div class="info_ofertaempleo">
                    <h2><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['txt_nombre']; ?>
</h2>
                  </div>
                  <ul>
                    <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['profe']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                      <a href="<?php echo $this->_tpl_vars['obj']->cOfPubli; ?>
&id_prof=<?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['profe'][$this->_sections['a']['index']]['id_sector']; ?>
"><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['profe'][$this->_sections['a']['index']]['txt_nombre']; ?>
 <span>(<?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['profe'][$this->_sections['a']['index']]['num']; ?>
)</span></a>
                    </li>
                    <?php endfor; endif; ?>
                  </ul>
                </div>
              </div>
              <?php endfor; endif; ?>

            </div>
          </div>
        </div><!-- ROW -->
      </div>
    </div>
  </div>
</div>
<!-- contenedor_internas -->
