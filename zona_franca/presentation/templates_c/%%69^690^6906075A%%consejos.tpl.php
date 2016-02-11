<?php /* Smarty version 2.6.24, created on 2014-01-08 18:03:49
         compiled from consejos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'consejos.tpl', 1, false),array('modifier', 'strip_tags', 'consejos.tpl', 35, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'consejos','assign' => 'obj'), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buscador-interna.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="row"> 
      <!-- izquierda -->
      <div class="span12 consejos-profesionales">
        <div class="cont_titulos-2 inline"> <?php if ($this->_tpl_vars['obj']->mTipo == '1'): ?>
          <h1 class="inline">Ultimas <span>Noticias </span></h1>
          <?php else: ?>
          <h1 class="inline">Consejos <span>Profesionales </span></h1>
          <?php endif; ?>
          <div class="clear"></div>
          <div class="clear espacio_en_blancopeque"></div>
          <!-- <div class="sombra_division"></div> --> 
        </div>
        <div class="row">
          <div class="span12">
            <div class="loultimo">
              <h3 class="inline">LO &Uacute;LTIMO</h3>
              <div class="clear espacio_en_blancopeque"></div>
              <div class="row-fluid">
                <div class="span8"> <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/articulos/art_img_<?php echo $this->_tpl_vars['obj']->cData['0']['fil_image']; ?>
">
                  <div class="clear espacio_en_blancopeque"></div>
                  <div class="row-fluid">
                    <div class="span8">
                      <h2><?php echo $this->_tpl_vars['obj']->cData['0']['txt_titulo']; ?>
</h2>
                    </div>
                    <div class="span4">
                      <h6 class="fecha"><span><?php echo $this->_tpl_vars['obj']->cData['0']['fec_creasi']; ?>
</span></h6>
                    </div>
                  </div>
                  <p><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->cData['0']['descripcion'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</p>
                  <div class="clear espacio_en_blancopeque"></div>
                  <p class="text_peque text_naranja float_right"> <a class="bt_naranja popup" href="#oferta-detalle" onclick="DetalleConsejo( '<?php echo $this->_tpl_vars['obj']->cData['0']['id']; ?>
' );" >Ver m&aacute;s informaci&oacute;n</a> </p>
                </div>
                <div class="span4">
                  <div class="loultimo-mini"> <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/articulos/art_img_<?php echo $this->_tpl_vars['obj']->cData['1']['fil_image']; ?>
">
                    <h6 class="fecha"><span><?php echo $this->_tpl_vars['obj']->cData['1']['fec_creasi']; ?>
</span></h6>
                    <h2><?php echo $this->_tpl_vars['obj']->cData['1']['txt_titulo']; ?>
</h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <p class="text_peque text_naranja float_right"> <a class="bt_naranja popup" href="#oferta-detalle" onclick="DetalleConsejo( '<?php echo $this->_tpl_vars['obj']->cData['1']['id']; ?>
' );">Ver m&aacute;s informaci&oacute;n</a> </p>
                  </div>
                  <div class="clear espacio_en_blancopeque"></div>
                  <div class="loultimo-mini"> <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/articulos/art_img_<?php echo $this->_tpl_vars['obj']->cData['2']['fil_image']; ?>
">
                    <h6 class="fecha"><span><?php echo $this->_tpl_vars['obj']->cData['2']['fec_creasi']; ?>
</span></h6>
                    <h2><?php echo $this->_tpl_vars['obj']->cData['2']['txt_titulo']; ?>
</h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <p class="text_peque text_naranja float_right"> <a class="bt_naranja popup" href="#oferta-detalle" onclick="DetalleConsejo( '<?php echo $this->_tpl_vars['obj']->cData['2']['id']; ?>
' );">Ver m&aacute;s informaci&oacute;n</a> </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <?php if ($this->_tpl_vars['obj']->mTipo == '1'): ?>
            <h3 class="inline">OTRAS NOTICIAS</h3>
            <?php else: ?>
            <h3 class="inline">OTROS CONSEJOS</h3>
            <?php endif; ?>
            <div class="clear espacio_en_blancopeque"></div>
            <ul class="slider_noticias">
            	<li>
              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['start'] = (int)3;
$this->_sections['k']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
if ($this->_sections['k']['start'] < 0)
    $this->_sections['k']['start'] = max($this->_sections['k']['step'] > 0 ? 0 : -1, $this->_sections['k']['loop'] + $this->_sections['k']['start']);
else
    $this->_sections['k']['start'] = min($this->_sections['k']['start'], $this->_sections['k']['step'] > 0 ? $this->_sections['k']['loop'] : $this->_sections['k']['loop']-1);
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
                <div class="campo_noticias">
                  <div class="row-fluid">
                    <div class="span2">
                      <div class="logo_ofertas"> <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/articulos/art_img_<?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['fil_image']; ?>
" alt=""> </div>
                    </div>
                    <div class="span10">
                      <h2 class="inline"><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['txt_titulo']; ?>
</h2>
                      <div class="clear"></div>
                      <h6><span><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['fec_creasi']; ?>
</span></h6>
                      <p><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['descripcion']; ?>
</p>
                      <p class="text_peque text_naranja float_right"> <a class="bt_naranja popup" href="#oferta-detalle" onclick="DetalleConsejo( '<?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['id']; ?>
' );">Ver m&aacute;s informaci&oacute;n</a> </p>
                    </div>
                  </div>
                </div>
                <?php if (!(1 & $this->_sections['k']['index'])): ?>
                </li><li>
                <?php endif; ?>
                <?php endfor; endif; ?>
              </li>
            </ul>
          </div>
        </div>
        <!-- ROW --> 
      </div>
    </div>
  </div>
</div>
<!-- contenedor_internas --> 

<!-- POPUP OFERTAS -->
<div id="oferta-detalle" style="display: none;">
  <div class="cont_emergente" id="detalle_conse">
    <h1 class="centrar_contenido">Lorem Ipsum Dolor Sit Amet</h1>
    <div class="clear"></div>
    <div class="sombra_division"></div>
    <div class="row-fluid">
      <div class="span4 noticias-detalle"> <img src="http://i.istockimg.com/file_thumbview_approve/14377944/2/stock-photo-14377944-four-business-people-with-puzzle.jpg" alt="">
        <div class="clear espacio_en_blanco"></div>
        <iframe width="200" height="170" src="http://www.youtube.com/embed/pN2Lkzqe8e0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="span8">
        <h2>Lorem Ipsum Dolor</h2>
        <div class="clear espacio_en_blanco"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis ornare ipsum. Sed lacinia interdum laoreet. Pellentesque et ornare mauris. Donec commodo condimentum interdum. Nunc sit amet orci vel eros facilisis placerat. Sed vulputate aliquam libero, quis adipiscing nisi placerat eu. Aenean erat ipsum, cursus sed eleifend non, fringilla ac ante. Pellentesque vitae pellentesque nunc. </p>
      </div>
    </div>
  </div>
</div>