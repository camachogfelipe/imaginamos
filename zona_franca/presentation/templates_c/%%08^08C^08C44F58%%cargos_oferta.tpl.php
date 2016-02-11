<?php /* Smarty version 2.6.24, created on 2013-12-10 21:55:41
         compiled from cargos_oferta.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'cargos_oferta.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'cargos_oferta','assign' => 'obj'), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buscador-interna.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 

<!-- buscador_internas -->
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="row">
      <div class="span4"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buscador_columna.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
      <!-- izquierda -->
      <div class="span8">
        <div class="cont_titulos inline">
          <h1 class="inline">Cargos con <span>mayor oferta</span></h1>
          <div class="clear"></div>
        </div>
        <div class="row">
         <div class="span8 slider_ofertasdescripcion">
            <ul class="slider_ofertasdesc">
              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cSectorOferta) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['step'] = ((int)5) == 0 ? 1 : (int)5;
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = min(ceil(($this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] - $this->_sections['k']['start'] : $this->_sections['k']['start']+1)/abs($this->_sections['k']['step'])), $this->_sections['k']['max']);
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
                <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cSectorOferta) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['start'] = (int)$this->_sections['k']['index'];
$this->_sections['a']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['a']['max'] = (int)22;
$this->_sections['a']['show'] = true;
if ($this->_sections['a']['max'] < 0)
    $this->_sections['a']['max'] = $this->_sections['a']['loop'];
if ($this->_sections['a']['start'] < 0)
    $this->_sections['a']['start'] = max($this->_sections['a']['step'] > 0 ? 0 : -1, $this->_sections['a']['loop'] + $this->_sections['a']['start']);
else
    $this->_sections['a']['start'] = min($this->_sections['a']['start'], $this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] : $this->_sections['a']['loop']-1);
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = min(ceil(($this->_sections['a']['step'] > 0 ? $this->_sections['a']['loop'] - $this->_sections['a']['start'] : $this->_sections['a']['start']+1)/abs($this->_sections['a']['step'])), $this->_sections['a']['max']);
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
                <div class="campo_ofertaempleo2">
                  <span class="numero-dv"><?php echo $this->_tpl_vars['obj']->cSectorOferta[$this->_sections['a']['index']]['num']; ?>
</span> 
                  <span class="campo_ofertaempleocont2"> 
                    <a href="<?php echo $this->_tpl_vars['obj']->cOfPubli; ?>
&id_prof=<?php echo $this->_tpl_vars['obj']->cSectorOferta[$this->_sections['a']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cSectorOferta[$this->_sections['a']['index']]['txt_nombre']; ?>
</a> 
                  </span> 
                </div>
                <?php endfor; endif; ?>
              </li>
              <?php endfor; endif; ?>
            </ul>
          </div>
        </div>
        <!-- ROW --> 
      </div>
    </div>
  </div>
</div>
<!-- contenedor_internas -->