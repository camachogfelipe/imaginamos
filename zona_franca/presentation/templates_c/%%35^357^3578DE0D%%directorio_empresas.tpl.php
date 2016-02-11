<?php /* Smarty version 2.6.24, created on 2014-01-08 18:39:51
         compiled from directorio_empresas.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'directorio_empresas.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'directorio_empresas','assign' => 'obj'), $this);?>


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
      </div>
      <!-- izquierda -->
      <div class="span8">
        <div class="cont_titulos-2 inline">
          <h1 class="inline">Directorio <span>de Empresas</span></h1>
          <div class="clear"></div>
          <h2 class="inline"><?php echo $this->_tpl_vars['obj']->cTitulo; ?>
</h2>
          <div class="clear espacio_en_blancopeque"></div>
          <p class="inline"><?php echo $this->_tpl_vars['obj']->cSubTitulo; ?>
</p>
          <div class="sombra_division"></div>
        </div>
        <div class="row">
          <div class="span8 slider_directorio">
            <ul class="paginador centrado">
              <!-- <li><a href="#" class="control">&lt;</a></li>-->
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=a" <?php if ($this->_tpl_vars['obj']->mOrden == 'a'): ?>class="active"<?php endif; ?>>a</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=b" <?php if ($this->_tpl_vars['obj']->mOrden == 'b'): ?>class="active"<?php endif; ?>>b</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=c" <?php if ($this->_tpl_vars['obj']->mOrden == 'c'): ?>class="active"<?php endif; ?>>c</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=d" <?php if ($this->_tpl_vars['obj']->mOrden == 'd'): ?>class="active"<?php endif; ?>>d</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=e" <?php if ($this->_tpl_vars['obj']->mOrden == 'e'): ?>class="active"<?php endif; ?>>e</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=f" <?php if ($this->_tpl_vars['obj']->mOrden == 'f'): ?>class="active"<?php endif; ?>>f</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=g" <?php if ($this->_tpl_vars['obj']->mOrden == 'g'): ?>class="active"<?php endif; ?>>g</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=h" <?php if ($this->_tpl_vars['obj']->mOrden == 'h'): ?>class="active"<?php endif; ?>>h</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=i" <?php if ($this->_tpl_vars['obj']->mOrden == 'i'): ?>class="active"<?php endif; ?>>i</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=j" <?php if ($this->_tpl_vars['obj']->mOrden == 'j'): ?>class="active"<?php endif; ?>>j</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=k" <?php if ($this->_tpl_vars['obj']->mOrden == 'k'): ?>class="active"<?php endif; ?>>k</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=l" <?php if ($this->_tpl_vars['obj']->mOrden == 'l'): ?>class="active"<?php endif; ?>>l</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=m" <?php if ($this->_tpl_vars['obj']->mOrden == 'm'): ?>class="active"<?php endif; ?>>m</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=n" <?php if ($this->_tpl_vars['obj']->mOrden == 'n'): ?>class="active"<?php endif; ?>>n</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=ñ" <?php if ($this->_tpl_vars['obj']->mOrden == 'ñ'): ?>class="active"<?php endif; ?>>ñ</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=o" <?php if ($this->_tpl_vars['obj']->mOrden == 'o'): ?>class="active"<?php endif; ?>>o</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=p" <?php if ($this->_tpl_vars['obj']->mOrden == 'p'): ?>class="active"<?php endif; ?>>p</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=q" <?php if ($this->_tpl_vars['obj']->mOrden == 'q'): ?>class="active"<?php endif; ?>>q</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=r" <?php if ($this->_tpl_vars['obj']->mOrden == 'r'): ?>class="active"<?php endif; ?>>r</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=s" <?php if ($this->_tpl_vars['obj']->mOrden == 's'): ?>class="active"<?php endif; ?>>s</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=t" <?php if ($this->_tpl_vars['obj']->mOrden == 't'): ?>class="active"<?php endif; ?>>t</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=u" <?php if ($this->_tpl_vars['obj']->mOrden == 'u'): ?>class="active"<?php endif; ?>>u</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=v" <?php if ($this->_tpl_vars['obj']->mOrden == 'v'): ?>class="active"<?php endif; ?>>v</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=w" <?php if ($this->_tpl_vars['obj']->mOrden == 'w'): ?>class="active"<?php endif; ?>>w</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=x" <?php if ($this->_tpl_vars['obj']->mOrden == 'x'): ?>class="active"<?php endif; ?>>x</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=y" <?php if ($this->_tpl_vars['obj']->mOrden == 'y'): ?>class="active"<?php endif; ?>>y</a></li>
              <li><a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
&orden=z" <?php if ($this->_tpl_vars['obj']->mOrden == 'z'): ?>class="active"<?php endif; ?>>z</a></li>
              <!-- <li><a href="#" class="control">&gt;</a></li>-->
            </ul>
            <div class="clear espacio_en_blanco"></div>
            <ul class="slider_directorio">
              <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['step'] = ((int)28) == 0 ? 1 : (int)28;
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
                  <div class="campo-directorio">
                    <div class="row-fluid">
                      <?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cData) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['start'] = (int)$this->_sections['k']['index'];
$this->_sections['x']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['x']['max'] = (int)28;
$this->_sections['x']['show'] = true;
if ($this->_sections['x']['max'] < 0)
    $this->_sections['x']['max'] = $this->_sections['x']['loop'];
if ($this->_sections['x']['start'] < 0)
    $this->_sections['x']['start'] = max($this->_sections['x']['step'] > 0 ? 0 : -1, $this->_sections['x']['loop'] + $this->_sections['x']['start']);
else
    $this->_sections['x']['start'] = min($this->_sections['x']['start'], $this->_sections['x']['step'] > 0 ? $this->_sections['x']['loop'] : $this->_sections['x']['loop']-1);
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = min(ceil(($this->_sections['x']['step'] > 0 ? $this->_sections['x']['loop'] - $this->_sections['x']['start'] : $this->_sections['x']['start']+1)/abs($this->_sections['x']['step'])), $this->_sections['x']['max']);
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?>

                        
                          <a style="width: 143px; height: 170px; float: left; margin: 0 10px 10px 0;" href="<?php echo $this->_tpl_vars['obj']->cDescrip; ?>
&id_empresa=<?php echo $this->_tpl_vars['obj']->cData[$this->_sections['x']['index']]['id']; ?>
" class="enlace-directorio" >
                            <div class="logo-directorio"> <img style="background: none; border: none;" src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/empresas/emp_<?php echo $this->_tpl_vars['obj']->cData[$this->_sections['x']['index']]['fil_logo']; ?>
" alt="logo <?php echo $this->_tpl_vars['obj']->cData[$this->_sections['x']['index']]['txt_nom_comercial']; ?>
"> </div>
                            <p class="centrar_contenido"><?php echo $this->_tpl_vars['obj']->cData[$this->_sections['x']['index']]['txt_nom_comercial']; ?>
</p>
                            <div class="clear"></div>
                          </a>

                      <?php endfor; endif; ?>
                    </div>
                  </div>
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

<?php echo '

<script>
  
  $(window).load(function() {

    $(".logo-directorio img").each(function() {
          var alto_papa = parseInt($(this).parent(".logo-directorio").height());
          var alto_this = parseInt($(this).height());
          //console.log(alto_papa);
          console.log(alto_this);

          if( alto_papa > alto_this ){

            $(this).css({
                 position:\'absolute\',
                 top: (alto_papa - $(this).outerHeight())/2,
            });

          } else{
            $(this).css({
                 height: 105 ,
                 position:\'absolute\',
                 top: 0
            });
          }


    });

  });
  
  

</script>
<!-- contenedor_internas -->
'; ?>