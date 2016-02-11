<?php /* Smarty version 2.6.24, created on 2013-12-26 17:36:04
         compiled from home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'home.tpl', 1, false),array('modifier', 'strip_tags', 'home.tpl', 115, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'home','assign' => 'obj'), $this);?>


<script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/highcharts.js"></script>
<script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/modules/exporting.js"></script>

<div id="fb-root"></div>
<?php echo '
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=651843338177397";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>


'; ?>

  <div class="over-banner"></div>
<div class="banner">

  <div>
    <form action="<?php echo $this->_tpl_vars['obj']->cOfPubli; ?>
" name="registro" id="registro" method="post">
      <h1>Buscador de <span>Empleos</span></h1>
      <h2><?php echo $this->_tpl_vars['obj']->mBannerHome['txt_subtitulo']; ?>
</h2>
      <div class="clear espacio_en_blanco"></div>
      <input type="text" name="titulo" id="titulo" placeholder="Palabra clave:">
      <div class="clear espacio_en_blanco"></div>
      <div class="cont_selecthome float_left">
        <select class="select_dd" name="fecha" id="fecha" style="width:100%;">
          <option value="">Fecha de publicaci&oacute;n:</option>
          <option value="1" >Último día</option>
          <option value="3" >Últimos (3) días</option>
          <option value="7" >Últimos (7) días</option>
          <option value="15" >Últimos (15) días</option>
          <option value="30" >Últimos (30) días</option>
          <option value="60" >Últimos (60) días</option>
        </select>
      </div>
      <div class="cont_selecthome float_right">
        <select class="select_dd" name="area" id="area" style="width:100%;">
          <option value="">&Aacute;rea:</option>
          <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cAreas) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <option value="<?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['txt_nombre']; ?>
</option>
          <?php endfor; endif; ?>
        </select>
      </div>
      <div class="clear espacio_en_blanco"></div>
      <input class="bt_buscarinternas" type="submit" value="Buscar Empleo">
    </form>
    <div>
      <span></span>
      <ul>
        <li>
          <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/home/bann_<?php echo $this->_tpl_vars['obj']->mBannerHome['fil_image']; ?>
" height="373" width="612" alt="">
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="ofertas">
  <div>
    <div class="ultimas">
      <h1>&Uacute;ltimas<span> Ofertas</span></h1>
      <h2>Estas son las ofertas más recientes que las empresas tienen para tí!</h2>
      <div class="clear espacio_en_blancogrande"></div>
      <ul id="slider1">
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
          <div class="oferta">
            <h1><?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['fecha']; ?>
</h1>
            <span></span>
            <h2><?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['txt_nom_comercial']; ?>
<span><?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['txt_cargo']; ?>
</span></h2>
            <span></span>
            <p><?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['descripcion']; ?>
</p>
            <span></span>
            <a class="popup" href="#oferta-detalle2" onclick="DetalleOfertaH( '<?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['a']['index']]['id']; ?>
' );">Aplicar a la oferta</a>
          </div>
          <?php endfor; endif; ?>
        </li>
        <?php endfor; endif; ?>
      </ul>
    </div>
    <div class="cargos">
      <h1>&Aacute;reas con mayor <span>Oferta</span></h1>
      <div class="cont_slider2">
        <ul id="slider2">
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
            <div class="cargo">
              <h1><?php echo $this->_tpl_vars['obj']->cSectorOferta[$this->_sections['a']['index']]['num']; ?>
<span>ofertas</span></h1>
              <a href="<?php echo $this->_tpl_vars['obj']->cOfPubli; ?>
&area=<?php echo $this->_tpl_vars['obj']->cSectorOferta[$this->_sections['a']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cSectorOferta[$this->_sections['a']['index']]['txt_nombre']; ?>
</a>
            </div>
            <?php endfor; endif; ?>
          </li>
          <?php endfor; endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="destacados">
  <div>
    <div><!-- 1 -->
      <h1>Noticias<span>Últimas noticias</span></h1>
      <ul id="noticias_home">
        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['max'] = (int)3;
$this->_sections['k']['show'] = true;
if ($this->_sections['k']['max'] < 0)
    $this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
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
          <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/articulos/thum_img_<?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['fil_image']; ?>
" height="218" width="191" alt="">
          <h1><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['txt_titulo']; ?>
</h1>
          <h2><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['fec_creasi']; ?>
</h2>
          <p><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['descripcion'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</p>
          <a class="ir-noticias" href="index.php?base&seccion=consejos">Ir a noticias</a>
          <a class="popup" href="#oferta-detalle" onclick="DetalleConsejo( '<?php echo $this->_tpl_vars['obj']->cData[$this->_sections['k']['index']]['id']; ?>
' );">M&aacute;s Informaci&oacute;n</a>
          </li>
        <?php endfor; endif; ?>
      </ul>
    </div>

    <div>
      <h1>Ciudades<span>con Mayor Oferta</span></h1>
      <p><?php echo $this->_tpl_vars['obj']->cCity['txt_descripcion']; ?>
</p>
      <ul>
        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cCiudadOferta) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <a href="<?php echo $this->_tpl_vars['obj']->cOfPubli; ?>
&id_ciudad=<?php echo $this->_tpl_vars['obj']->cCiudadOferta[$this->_sections['k']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cCiudadOferta[$this->_sections['k']['index']]['txt_nombre']; ?>
</a>
          <span><?php echo $this->_tpl_vars['obj']->cCiudadOferta[$this->_sections['k']['index']]['num']; ?>
</span>
        </li>
        <?php endfor; endif; ?>
      </ul>
    </div>

    <div>
      <h1>Responde<span>nuestra encuesta</span></h1>
      <h2>¿<?php echo $this->_tpl_vars['obj']->cEncuesta['txt_pregunta']; ?>
?</h2>
      <form action="" class="encuesta">
        <input type="hidden" id="id_pregunta" value="<?php echo $this->_tpl_vars['obj']->cEncuesta['id']; ?>
" />
        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cEncuesta['opciones']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <p>
          <input type="radio" name="id_opcion" id="id_opcion_<?php echo $this->_sections['k']['index']; ?>
" value="<?php echo $this->_tpl_vars['obj']->cEncuesta['opciones'][$this->_sections['k']['index']]['id']; ?>
"  class="cform" <?php if ($this->_sections['k']['index'] == 0): ?>checked="checked"<?php endif; ?>>
          <label for="id_opcion_<?php echo $this->_sections['k']['index']; ?>
" class="lblr"><?php echo $this->_tpl_vars['obj']->cEncuesta['opciones'][$this->_sections['k']['index']]['txt_respuesta']; ?>
</label>
        </p>
        <?php endfor; endif; ?>
        <div class="clear"></div>
        <a class="popup" href="#oferta-detalle" onclick="VotarEncuesta();">Votar</a>
      </form>
    </div>

  </div>
</div>
<div class="socios">
  <div>
    <div>
      <h1>Empresas<span>destacadas</span></h1>
        <ul id="scrollerlogos">
          <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cDesta) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <a href="<?php echo $this->_tpl_vars['obj']->cDescrip; ?>
&id_empresa=<?php echo $this->_tpl_vars['obj']->cDesta[$this->_sections['k']['index']]['id']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/empresas/emp_<?php echo $this->_tpl_vars['obj']->cDesta[$this->_sections['k']['index']]['fil_logo']; ?>
" height="134" width="134"></a>
          </li>
          <?php endfor; endif; ?>
        </ul>
      </div>

      <div>

        <!--plugin social-->

        <div class="plugin_facebook">
          <!--<iframe src="//www.facebook.com/plugins/facepile.php?app_id&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FZona-Franca-de-Occidente%2F476953895668855&amp;action=Comma+separated+list+of+action+of+action+types&amp;width=220&amp;max_rows=1&amp;colorscheme=light&amp;size=large&amp;show_count=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:220px;" allowTransparency="true"></iframe>-->
          <div class="fb-like-box" data-href="https://www.facebook.com/pages/Zona-Franca-de-Occidente/476953895668855?ref=ts&amp;fref=ts" data-height="190px" width="240px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>
        <!--Finplugin social-->



        <a href="<?php echo $this->_tpl_vars['obj']->cContac['txt_twitter']; ?>
" target="_blank"></a><!-- Twitter -->
        <a href="<?php echo $this->_tpl_vars['obj']->cContac['txt_facebook']; ?>
" target="_blank"></a><!-- Facebook -->
      </div>


    </div>
  </div>


<!-- POPUP OFERTAS -->
<div id="oferta-detalle" style="display: none;">
  <div class="cont_emergente" id="detalle_conse">
    <h1 class="centrar_contenido">Lorem Ipsum Dolor Sit Amet</h1>
    <div class="clear"></div>
    <div class="sombra_division"></div>
    <div class="row-fluid">
      <div class="span4 noticias-detalle">
        <img src="http://i.istockimg.com/file_thumbview_approve/14377944/2/stock-photo-14377944-four-business-people-with-puzzle.jpg" alt="">
        <div class="clear espacio_en_blanco"></div>
        <!--iframe width="200" height="170" src="http://www.youtube.com/embed/pN2Lkzqe8e0" frameborder="0" allowfullscreen></iframe-->
      </div>
      <div class="span8">
        <h2>Lorem Ipsum Dolor</h2>
        <div class="clear espacio_en_blanco"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis ornare ipsum. Sed lacinia interdum laoreet. Pellentesque et ornare mauris. Donec commodo condimentum interdum. Nunc sit amet orci vel eros facilisis placerat. Sed vulputate aliquam libero, quis adipiscing nisi placerat eu. Aenean erat ipsum, cursus sed eleifend non, fringilla ac ante. Pellentesque vitae pellentesque nunc. </p>
      </div>
    </div>
  </div>
</div>