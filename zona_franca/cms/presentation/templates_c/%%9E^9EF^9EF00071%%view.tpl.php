<?php /* Smarty version 2.6.24, created on 2013-09-19 18:19:36
         compiled from /var/www/html/cms/presentation/zona_personas/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/html/cms/presentation/zona_personas/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "zona_personas/controller",'assign' => 'obj'), $this);?>

<div class="container-fluid">
<?php if ($this->_tpl_vars['obj']->mModo == 'list'): ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class=" listContainer">
  <h1>Personas</h1>
  <br>
  <a href="<?php echo $this->_tpl_vars['obj']->mDescarga; ?>
">Descargar</a>
  <?php echo $this->_tpl_vars['obj']->mList; ?>

</div>
<?php else: ?>

<?php echo '
<script type="text/javascript">
  $(function(){
    $(\'#tabs\').tabs();
  });
</script>
<style>
#tabs {}
#tabs li {
width: auto;
height: 30px;
padding: 0 10px;
line-height: 25px;}
#tabs li a {
margin: 0 auto;
padding: 0;}

#tabs-1, #tabs-2, #tabs-3, #tabs-4, #tabs-5, #tabs-6, #tabs-7, #tabs-8 { border: 1px solid #ddd;
padding: 20px 0 20px;
	background: #F3F1F1;
	background: -moz-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -webkit-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -o-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -ms-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: linear-gradient(180deg, #FDFCFC 30%, #F3F1F1 70%);}
	
	.icon-pencil { margin: 2px 0 0;}
	
</style>
'; ?>


<div class="">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="formContainer">
  <h1>Personas</h1>
  <br>

  <!--Start Horizontal Tabs-->
  <div id="tabs">
    <ul>
      <li><a href="#tabs-1"><i class="icon-pencil"></i> Usuario</a></li>
      <li><a href="#tabs-2"><i class="icon-pencil"></i> Profesional</a></li>
      <li><a href="#tabs-3"><i class="icon-pencil"></i> Exp laboral</a></li>
      <li><a href="#tabs-4"><i class="icon-pencil"></i> Edu formal</a></li>
      <li><a href="#tabs-5"><i class="icon-pencil"></i> Edu no formal</a></li>
      <li><a href="#tabs-6"><i class="icon-pencil"></i> Idioma</a></li>
      <li><a href="#tabs-7"><i class="icon-pencil"></i> Informatica</a></li>
    </ul>

    <div id="tabs-1">
 
          <div class="span5">
            <label class="label">Identificacion</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['num_identifica']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Primer nombre</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['txt_prim_nom']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Segundo nombre</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['txt_seg_nom']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Primer apellido</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['txt_prim_apell']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Segundo apellido</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['txt_seg_apell']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Genero</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['nom_genero']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">fecha nacimiento</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['fec_nacimiento']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Estado civil</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['nom_estado_civ']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Departamento</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['nom_departamento']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Ciudad</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['nom_ciudad']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Barrio</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['txt_barrio']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Telefono</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['txt_telefono']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Movil</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['txt_movil']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Poblacion</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['nom_poblacion']; ?>
</p>
          </div>
            <div style="clear:both;"></div>
    </div>

    <div id="tabs-2">
   
          <div class="span5">
            <label class="label">Profesion</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['profe']['nom_profesion']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Trabajando</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['profe']['trabajando']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Aspiraci&oacute;n</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['profe']['nom_aspiracion']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Tipo trabajo</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['profe']['txt_tipotrabajo']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Perfil</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['profe']['txt_perfil']; ?>
</p>
          </div>

          <div class="span5">
            <label class="label">Habilidades</label>
            <p><?php echo $this->_tpl_vars['obj']->mData['profe']['fec_nacimiento']; ?>
</p>
          </div>
          <div style="clear:both;"></div>
    </div>

    <div id="tabs-3">
   
          <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mData['exper']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <div id="contenedor_<?php echo $this->_sections['k']['index']; ?>
">
            <div class="span5">
              <label class="label">Empresa</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['exper'][$this->_sections['k']['index']]['txt_empresa']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Cargo</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['exper'][$this->_sections['k']['index']]['txt_cargo']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Area laboral</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['exper'][$this->_sections['k']['index']]['nom_arealab']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Fecha ingreso</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['exper'][$this->_sections['k']['index']]['fec_ingreso']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Actual</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['exper'][$this->_sections['k']['index']]['actual']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Fecha finalizaci&oacute;n</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['exper'][$this->_sections['k']['index']]['fec_finaliza']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Departamento</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['exper'][$this->_sections['k']['index']]['nom_departamento']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Ciudad</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['exper'][$this->_sections['k']['index']]['nom_ciudad']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Telefono</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['exper'][$this->_sections['k']['index']]['txt_telefono']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Funciones</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['exper'][$this->_sections['k']['index']]['txt_funciones']; ?>
</p>
            </div>
          </div>
          <?php endfor; endif; ?>

            <div style="clear:both;"></div>
    </div>

    <div id="tabs-4">


          <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mData['formal']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <div id="contenedor_<?php echo $this->_sections['k']['index']; ?>
">
            <div class="span5">
              <label class="label">Nivel estudio</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['formal'][$this->_sections['k']['index']]['nivel_estudio']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Titulo obtenido</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['formal'][$this->_sections['k']['index']]['txt_titulo']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Institucion laboral</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['formal'][$this->_sections['k']['index']]['txt_institucion']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Estudio en curso</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['formal'][$this->_sections['k']['index']]['encurso']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">A&ntilde;o finalizaci&oacute;n</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['formal'][$this->_sections['k']['index']]['fec_finaliza']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Departamento</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['formal'][$this->_sections['k']['index']]['nom_departamento']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Ciudad</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['formal'][$this->_sections['k']['index']]['nom_ciudad']; ?>
</p>
            </div>
          </div>
          <?php endfor; endif; ?>
            <div style="clear:both;"></div>
    </div>

    <div id="tabs-5">
      

          <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mData['nformal']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <div id="contenedor_<?php echo $this->_sections['k']['index']; ?>
">
            <div class="span5">
              <label class="label">Titulo obtenido</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['nformal'][$this->_sections['k']['index']]['txt_titulo']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Institui&oacute;n</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['nformal'][$this->_sections['k']['index']]['txt_institucion']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Estudio en curso</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['nformal'][$this->_sections['k']['index']]['encurso']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">A&ntilde;o finalizaci&oacute;n</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['nformal'][$this->_sections['k']['index']]['fec_finaliza']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Departamento</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['nformal'][$this->_sections['k']['index']]['nom_departamento']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Ciudad</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['nformal'][$this->_sections['k']['index']]['nom_ciudad']; ?>
</p>
            </div>
          </div>
          <?php endfor; endif; ?>
        <div style="clear:both;"></div>
    </div>

    <div id="tabs-6">
  

          <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mData['idioma']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <div id="contenedor_<?php echo $this->_sections['k']['index']; ?>
">
            <div class="span5">
              <label class="label">Idioma</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['idioma'][$this->_sections['k']['index']]['nom_idioma']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Cual</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['idioma'][$this->_sections['k']['index']]['txt_cual']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Habla</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['idioma'][$this->_sections['k']['index']]['nom_habla']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Escritura</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['idioma'][$this->_sections['k']['index']]['nom_escritura']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Lectura</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['idioma'][$this->_sections['k']['index']]['nom_lectura']; ?>
</p>
            </div>
          </div>
          <?php endfor; endif; ?>
     <div style="clear:both;"></div>
      
    </div>

    <div id="tabs-7">
      

          <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mData['infor']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <div id="contenedor_<?php echo $this->_sections['k']['index']; ?>
">
            <div class="span5">
              <label class="label">Programa o aplicaci&oacute;n</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['infor'][$this->_sections['k']['index']]['txt_aplicacion']; ?>
</p>
            </div>

            <div class="span5">
              <label class="label">Dominio</label>
              <p><?php echo $this->_tpl_vars['obj']->mData['infor'][$this->_sections['k']['index']]['nom_dominio']; ?>
</p>
            </div>
          </div>
          <?php endfor; endif; ?>

           <div style="clear:both;"></div>
    </div>

  </div>
</div>
<?php endif; ?>
</div>