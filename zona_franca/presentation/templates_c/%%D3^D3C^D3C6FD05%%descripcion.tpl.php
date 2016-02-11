<?php /* Smarty version 2.6.24, created on 2013-12-10 18:13:12
         compiled from descripcion.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'descripcion.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'descripcion','assign' => 'obj'), $this);?>


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
        <div class="cont_izqgris-2">
          <div class="contcontenidos_izqgris">
            <h3 class="centrar_contenido"><?php echo $this->_tpl_vars['obj']->cEmpresa['txt_nom_comercial']; ?>
</h3>
            <h4 class="centrar_contenido"><?php echo $this->_tpl_vars['obj']->cEmpresa['txt_website']; ?>
</h4>
            <div class="clear espacio_en_blanco"></div>
            <div class="logo_empresa1 centrado clearfix">
              <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/empresas/emp_<?php echo $this->_tpl_vars['obj']->cEmpresa['fil_logo']; ?>
" alt="">
            </div>
            <div class="clear espacio_en_blanco"></div>
            <h5>Descripci�n</h5>
            <p><?php echo $this->_tpl_vars['obj']->cEmpresa['txt_descripcion']; ?>
</p>
            <div class="sombrapeque clear"></div>
            <h5>Raz�n Social</h5>
            <p><?php echo $this->_tpl_vars['obj']->cEmpresa['txt_razon_social']; ?>
</p>
            <div class="sombrapeque clear"></div>
            <h5>Sector</h5>
            <p><?php echo $this->_tpl_vars['obj']->cEmpresa['nom_ramo']; ?>
</p>
            <p><?php echo $this->_tpl_vars['obj']->cEmpresa['txt_ramo_2']; ?>
</p>
            <div class="sombrapeque clear"></div>
            <div class="clear espacio_en_blanco"></div>
            <div class="centrar_inline iconos_izq">
              <a id="imprimir" class="inline" href="#"></a>
              <a id="guardar" class="inline" href="#"></a>
              <a id="mensaje" class="inline" href="#"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="span8">
        <div class="cont_titulos inline">
          <h1 class="inline">Ofertas <span>Publicadas</span></h1>
          <div class="clear"></div>
          <h2 class="inline">Se encontraron <?php echo $this->_tpl_vars['obj']->cNumOfertas; ?>
 ofertas de trabajo</h2>
        </div>

        <div class="row">
          <div class="span8 slider_ofertasdescripcion-2">
            <ul class="slider_ofertasdesc">
              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cOfertas) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['step'] = ((int)4) == 0 ? 1 : (int)4;
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
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cOfertas) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['start'] = (int)$this->_sections['k']['index'];
$this->_sections['a']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['a']['max'] = (int)4;
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
                <div class="campo_oferta">
                  <div class="contcampo_oferta">
                    <div class="logo_ofertas">
                      <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/empresas/emp_<?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['fil_logo']; ?>
" alt="logo <?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['txt_nom_comercial']; ?>
">
                    </div>
                    <div class="info_ofertas">
                      <div class="row-fluid fluid_ofertas">
                        <div class="span7 titulos_oferta">
                          <h2 class="inline"><?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['txt_cargo']; ?>
</h2>
                          <div class="clear"></div>
                          <h6><span>Sector:</span> <?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['nom_area']; ?>
 - <?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['nom_departamento']; ?>
 </h6>
                        </div>
                        <div class="span4 titulos_oferta">
                                                  </div>
                        <div class="clear"></div>
                        <p><?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['descripcion']; ?>
</p>
                        <div class="clear"></div>
                        <div class="span7">
                                                  </div>
                        <div class="span5">
                          <p class="text_peque text_naranja">
                            <a class="bt_naranja popup" href="#oferta-detalle2" onclick="DetalleOfertaH( '<?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['id']; ?>
' );">Ver m�s informaci�n</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endfor; endif; ?>
              </li>
              <?php endfor; endif; ?>
            </ul>
          </div>
        </div><!-- ROW -->

      </div>
    </div>
  </div>
</div><!-- contenedor_internas -->