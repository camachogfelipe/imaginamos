<?php /* Smarty version 2.6.24, created on 2014-01-08 17:17:41
         compiled from buscador_personas.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'buscador_personas.tpl', 1, false),array('modifier', 'base64_encode', 'buscador_personas.tpl', 29, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'buscador_personas','assign' => 'obj'), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buscador-interna.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos-2 inline">
      <h1 class="inline">Busca<span> tu gente</span></h1>
      <div class="clear"></div>
      <h2 class="inline">Busca tu gente</h2>
      <p>Estos son los perfiles m&aacute;s adecuados que Empleo en Marcha ha encontrado para tu empresa.</p>
      <!-- <div class="sombra_division"></div> -->
    </div>

    <div class="clear espacio_en_blanco"></div>
    <div class="buscador-gente-dv2">
      <ul class="slider-buscador-dv">
        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['start'] = (int)$this->_sections['k']['index'];
$this->_sections['a']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['a']['max'] = (int)5;
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
          <div class="campo-perfil">
            <div class="row-fluid">
              <div class="span2 ">
                <div class="perfil-img"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/personas/perso_<?php echo $this->_tpl_vars['obj']->cData[$this->_sections['a']['index']]['fil_image']; ?>
"></div>
              </div>
              <div class="span10 ">
                <div class="espacio_en_blanco"></div>
                <h2><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
index.php?base&seccion=detalle_persona&id=<?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->cData[$this->_sections['a']['index']]['id_perfil'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : base64_encode($_tmp)); ?>
" target="_blank"><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['a']['index']]['nom_aspirante']; ?>
 <em><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['a']['index']]['nom_profesion']; ?>
</em></a></h2>
                <div class="espacio_en_blanco"></div>
                <p><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['a']['index']]['perfil']; ?>
</p>
                <ul class="perfil-iconos">
                  <li class="mail"><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['a']['index']]['txt_email']; ?>
</li>
                  <li class="movil"><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['a']['index']]['txt_movil']; ?>
</li>
                  <li class="telefono"><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['a']['index']]['txt_telefono']; ?>
</li>
                  <li class="ubicacion"><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['a']['index']]['lugar']; ?>
</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="clear espacio_en_blanco"></div>
          <?php endfor; endif; ?>
        </li>
        <?php endfor; endif; ?>
      </ul>
    </div>
  </div>
</div>
<!-- contenedor_internas -->