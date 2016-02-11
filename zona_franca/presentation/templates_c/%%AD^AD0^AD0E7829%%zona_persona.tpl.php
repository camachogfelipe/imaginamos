<?php /* Smarty version 2.6.24, created on 2014-01-08 16:59:01
         compiled from zona_persona.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'zona_persona.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'zona_persona','assign' => 'obj'), $this);?>
 
<script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/highcharts.js"></script> 
<script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/modules/exporting.js"></script> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buscador-interna.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo ' 
<script type="text/javascript">
  $(function () {
    $(\'#container1\').highcharts({
      chart:
      {
        type: \'column\',
        margin: [ 50, 50, 100, 80]
      },
      title: {
        text: \'Actividad Hoja de Vida\'
      },
      xAxis: {
'; ?>

        categories: [<?php echo $this->_tpl_vars['obj']->cCatego; ?>
],
<?php echo '
        labels: {
          rotation: -45,
          align: \'right\',
          style: {
            fontSize: \'13px\',
            fontFamily: \'Verdana, sans-serif\'
          }
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: \'Número de postulaciones\'
        }
      },
      legend: {
        enabled: false
      },
      tooltip: {
        formatter: function() {
          return \'<b>\'+ this.x +\'</b><br/>\'+
          \'Postulaciones: \'+ Highcharts.numberFormat(this.y, 1);
        }
      },
      series: [{
        name: \'Postulaciones\',
'; ?>

        data: [<?php echo $this->_tpl_vars['obj']->mResList; ?>
],
<?php echo '
        dataLabels: {
          enabled: true,
          rotation: -90,
          color: \'#FFFFFF\',
          align: \'right\',
          x: 4,
          y: 10,
          style: {
            fontSize: \'13px\',
            fontFamily: \'Verdana, sans-serif\'
          }
        }
      }]
    });
    
    $(\'#container2\').highcharts({
      chart:
      {
        type: \'column\',
        margin: [ 50, 50, 100, 80]
      },
      title: {
        text: \'Vistas de Hoja de Vida\'
      },
      xAxis: {
'; ?>

        categories: [<?php echo $this->_tpl_vars['obj']->cCatego2; ?>
],
<?php echo '
        labels: {
          rotation: -45,
          align: \'right\',
          style: {
            fontSize: \'13px\',
            fontFamily: \'Verdana, sans-serif\'
          }
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: \'Número de vistas Hoja de Vida\'
        }
      },
      legend: {
        enabled: false
      },
      tooltip: {
        formatter: function() {
          return \'<b>\'+ this.x +\'</b><br/>\'+
          \'Vistas: \'+ Highcharts.numberFormat(this.y, 1);
        }
      },
      series: [{
        name: \'Postulaciones\',
'; ?>

        data: [<?php echo $this->_tpl_vars['obj']->mResList2; ?>
],
<?php echo '
        dataLabels: {
          enabled: true,
          rotation: -90,
          color: \'#FFFFFF\',
          align: \'right\',
          x: 4,
          y: 10,
          style: {
            fontSize: \'13px\',
            fontFamily: \'Verdana, sans-serif\'
          }
        }
      }]
    });
  });
</script> 
'; ?>

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos-2 inline">
      <h1 class="inline">Mi<span> Perfil</span></h1>
      <div class="clear"></div>
      <h2 class="inline"></h2>
      <!-- <div class="sombra_division"></div> --> 
    </div>
  </div>
</div>
<div class="fondo-gris" >
  <div class="campo-perfil" style="position: relative;">
    <div class="row-fluid">
      <div class="span2 ">
        <div class="perfil-img"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/personas/perso_<?php echo $this->_tpl_vars['obj']->cInfoPer['fil_image']; ?>
"></div>
      </div>
      <div class="span10 ">
        <div class="espacio_en_blanco"></div>
        <h2><?php echo $this->_tpl_vars['obj']->cInfoPer['nom_aspirante']; ?>
, <span>Bienvenido</span> <em><?php echo $this->_tpl_vars['obj']->cInfoPer['nom_profesion']; ?>
 - <?php echo $this->_tpl_vars['obj']->cInfoPer['nom_area']; ?>
</em></h2>
        <div class="espacio_en_blanco"></div>
        <p><?php echo $this->_tpl_vars['obj']->cInfoPer['perfil']; ?>
</p>
        <ul class="perfil-iconos">
          <li class="mail"><?php echo $this->_tpl_vars['obj']->cInfoPer['txt_email']; ?>
</li>
          <li class="movil"><?php echo $this->_tpl_vars['obj']->cInfoPer['txt_movil']; ?>
</li>
          <li class="telefono"><?php echo $this->_tpl_vars['obj']->cInfoPer['txt_telefono']; ?>
</li>
          <li class="ubicacion"><?php echo $this->_tpl_vars['obj']->cInfoPer['lugar']; ?>
</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas-2">
  <div class="container cont_contenidos">
    <div id="tab-container" class='tab-container'>
      <ul class='tabs-zonasegura'>
        <li class='tab'><a href="#tabs1">Ofertas recomendadas</a></li>
        <span class="separador"></span>
        <li class='tab'><a href="#tabs2">Ver/Actualizar Mi Hoja de Vida</a></li>
        <span class="separador"></span>
        <li class='tab'><a href="#tabs3">Mis Aplicaciones</a></li>
        <span class="separador"></span>
        <li class='tab'><a href="#tabs4">Mis datos de cuenta</a></li>
      </ul>
      <div class='panel-container'>
        <div id="tabs1">
          <div class="clear espacio_en_blanco"></div>
          <div class="scroll-zonasegura"> <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cOfert) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div class="campo_oferta-int">
              <div class="contcampo_oferta-int">
                <div class="logo_ofertas"> <img ><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/empresas/emp_<?php echo $this->_tpl_vars['obj']->cOfert[$this->_sections['k']['index']]['fil_logo']; ?>
" alt="logo <?php echo $this->_tpl_vars['obj']->cOfert[$this->_sections['k']['index']]['txt_nom_comercial']; ?>
"> </div>
                <div class="info_ofertas-int">
                  <div class="row-fluid fluid_ofertas">
                    <div class="span7 titulos_oferta">
                      <h2 class="inline"><?php echo $this->_tpl_vars['obj']->cOfert[$this->_sections['k']['index']]['txt_cargo']; ?>
</h2>
                      <div class="clear espacio_en_blancopeque"></div>
                      <h6><span>Sector:</span> <?php echo $this->_tpl_vars['obj']->cOfert[$this->_sections['k']['index']]['nom_area']; ?>
 - <?php echo $this->_tpl_vars['obj']->cOfert[$this->_sections['k']['index']]['nom_departamento']; ?>
 </h6>
                    </div>
                    <div class="clear"></div>
                    <p><?php echo $this->_tpl_vars['obj']->cOfert[$this->_sections['k']['index']]['descripcion']; ?>
</p>
                    <div class="clear"></div>
                    <div class="span3 offset9">
                      <p class="text_peque text_naranja float_right marg20"> <a class="bt_naranja popup float_right" href="#oferta-detalle2" onclick="DetalleOfertaH( '<?php echo $this->_tpl_vars['obj']->cOfert[$this->_sections['k']['index']]['id']; ?>
' );">Ver más información</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endfor; endif; ?> </div>
        </div>
        <div id="tabs2" class="relativo"> <a class="editar-dv" href="<?php echo $this->_tpl_vars['obj']->cRegist; ?>
">Editar</a>
          <div class="clear espacio_en_blanco"></div>
          <div class="scroll-zonasegura">
            <div class="row-fluid">
              <div class="span12">
                <h2 class="hojadevida-titulo ico-1">Información General</h2>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="info-general-dv">
                  <p><span class="text_naranja">Fecha de nacimiento: </span><?php echo $this->_tpl_vars['obj']->cPerHv['fec_nacimiento']; ?>
 </p>
                  <p><span class="text_naranja">Estado civil: </span><?php echo $this->_tpl_vars['obj']->cPerHv['nom_estado_civ']; ?>
 </p>
                  <p><span class="text_naranja">Teléfono: </span><?php echo $this->_tpl_vars['obj']->cPerHv['txt_telefono']; ?>
</p>
                  <p><span class="text_naranja">Celular: </span><?php echo $this->_tpl_vars['obj']->cPerHv['txt_movil']; ?>
</p>
                  <p><span class="text_naranja">Ciudad de residencia: </span><?php echo $this->_tpl_vars['obj']->cPerHv['nom_ciudad']; ?>
</p>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <h2 class="hojadevida-titulo ico-2">Perfil</h2>
                <div class="clear espacio_en_blancopeque"></div>
                <p class="parrafo"><?php echo $this->_tpl_vars['obj']->cPerHv['txt_perfil']; ?>
</p>
                <div class="clear espacio_en_blancopeque"></div>
                <h2 class="hojadevida-titulo ico-3">Habilidades</h2>
                <div class="clear espacio_en_blancopeque"></div>
                <p class="parrafo"><?php echo $this->_tpl_vars['obj']->cPerHv['txt_habilidades']; ?>
</p>
                <div class="clear espacio_en_blanco"></div>
                <h2 class="hojadevida-titulo ico-4">Estudios realizados</h2>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="estudios-realizados-dv"> <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cPerHv['estudios']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                  <p><strong>Título:</strong> <?php echo $this->_tpl_vars['obj']->cPerHv['estudios'][$this->_sections['k']['index']]['txt_titulo']; ?>
</p>
                  <p><strong>Institución:</strong> <?php echo $this->_tpl_vars['obj']->cPerHv['estudios'][$this->_sections['k']['index']]['txt_institucion']; ?>
</p>
                  <p><strong>Finalización:</strong> <?php echo $this->_tpl_vars['obj']->cPerHv['estudios'][$this->_sections['k']['index']]['fec_finaliza']; ?>
</p>
                  <br />
                  <?php endfor; endif; ?>
                </div>
                <?php if ($this->_tpl_vars['obj']->cPerHv['idiomas'] != ""): ?>
                <div class="clear espacio_en_blanco"></div>
                <h2 class="hojadevida-titulo ico-5">Idiomas</h2>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="estudios-realizados-dv"> <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cPerHv['idiomas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                  <p><strong>Idioma:</strong><?php echo $this->_tpl_vars['obj']->cPerHv['idiomas'][$this->_sections['k']['index']]['txt_nombre']; ?>
</p>
                  <p><strong>Habla:</strong><?php echo $this->_tpl_vars['obj']->cPerHv['idiomas'][$this->_sections['k']['index']]['habla']; ?>
</p>
                  <p><strong>Escritura:</strong><?php echo $this->_tpl_vars['obj']->cPerHv['idiomas'][$this->_sections['k']['index']]['escri']; ?>
</p>
                  <p><strong>Lectura:</strong><?php echo $this->_tpl_vars['obj']->cPerHv['idiomas'][$this->_sections['k']['index']]['lectur']; ?>
</p>
                  <br />
                  <?php endfor; endif; ?>
                </div>
                <?php endif; ?>
                
                <?php if ($this->_tpl_vars['obj']->cPerHv['informa'] != ""): ?>
                <div class="clear espacio_en_blancopeque"></div>
                <h2 class="hojadevida-titulo ico-6">Inform&aacute;tica</h2>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="estudios-realizados-dv"> <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cPerHv['informa']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                  <p><strong>Aplicación:</strong><?php echo $this->_tpl_vars['obj']->cPerHv['informa'][$this->_sections['k']['index']]['txt_aplicacion']; ?>
</p>
                  <p><strong>Dominio:</strong><?php echo $this->_tpl_vars['obj']->cPerHv['informa'][$this->_sections['k']['index']]['txt_nombre']; ?>
</p>
                  <br />
                  <?php endfor; endif; ?>
                </div>
                <?php endif; ?>
                <div class="clear espacio_en_blanco"></div>
                <h2 class="hojadevida-titulo ico-7">Experiencia Laboral</h2>
                <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cPerHv['exper']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <div class="experiencia-item">
                  <div class="clear espacio_en_blancopeque"></div>
                  <p class="float_left"><?php echo $this->_tpl_vars['obj']->cPerHv['exper'][$this->_sections['k']['index']]['txt_cargo']; ?>
</p>
                  <span class="separador-punto"></span>
                  <p class="float_left"><em> <?php echo $this->_tpl_vars['obj']->cPerHv['exper'][$this->_sections['k']['index']]['txt_empresa']; ?>
</em> </p>
                  <p class="float_left"><span class="text_naranja"> Desde: </span> <?php echo $this->_tpl_vars['obj']->cPerHv['exper'][$this->_sections['k']['index']]['fec_ingreso']; ?>
 </p>
                  <?php if ($this->_tpl_vars['obj']->cPerHv['exper'][$this->_sections['k']['index']]['fec_finaliza'] != "0000-00-00"): ?>
                  <p class="float_left"><span class="text_naranja"> &nbsp; &nbsp; Hasta: </span> <?php echo $this->_tpl_vars['obj']->cPerHv['exper'][$this->_sections['k']['index']]['fec_finaliza']; ?>
 </p>
                  <?php endif; ?>
                  <div class="clear espacio_en_blancopeque"></div>
                  <p><em>Labor desempeñada:</em></p>
                  <p><?php echo $this->_tpl_vars['obj']->cPerHv['exper'][$this->_sections['k']['index']]['txt_funciones']; ?>
</p>
                </div>
                <?php endfor; endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div id="tabs3">
          <div class="scroll-zonasegura"> <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cOferApl) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div class="campo_oferta-int <?php echo $this->_tpl_vars['obj']->cOferApl[$this->_sections['k']['index']]['estado']; ?>
">
              <div class="contcampo_oferta-int">
                <div class="logo_ofertas"> <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/empresas/emp_<?php echo $this->_tpl_vars['obj']->cOferApl[$this->_sections['k']['index']]['fil_logo']; ?>
" alt="logo <?php echo $this->_tpl_vars['obj']->cOferApl[$this->_sections['k']['index']]['txt_nom_comercial']; ?>
"> </div>
                <div class="info_ofertas-int">
                  <div class="row-fluid fluid_ofertas">
                    <div class="span7 titulos_oferta">
                      <h2 class="inline"><?php echo $this->_tpl_vars['obj']->cOferApl[$this->_sections['k']['index']]['txt_cargo']; ?>
</h2>
                      <div class="clear espacio_en_blancopeque"></div>
                      <h6><span>Sector:</span> <?php echo $this->_tpl_vars['obj']->cOferApl[$this->_sections['k']['index']]['nom_area']; ?>
 - <?php echo $this->_tpl_vars['obj']->cOferApl[$this->_sections['k']['index']]['nom_departamento']; ?>
 </h6>
                    </div>
                    <div class="clear"></div>
                    <p><?php echo $this->_tpl_vars['obj']->cOferApl[$this->_sections['k']['index']]['descripcion']; ?>
</p>
                    <div class="clear"></div>
                    <div class="span3 offset9">
                      <p class="text_peque text_naranja float_right marg20"> <a class="bt_naranja popup float_right" href="#oferta-detalle2" onclick="DetalleOfertaH( '<?php echo $this->_tpl_vars['obj']->cOferApl[$this->_sections['k']['index']]['id']; ?>
' );">Ver más información</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endfor; endif; ?> </div>
        </div>
        <div id="tabs4">
          <form action="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" class="formulario-zonasegura" name="frm-zonasegura" id="frm-zonasegura" method="post" enctype="multipart/form-data">
            <a class="cerrar-dv" style="" href="javascript:void(0);" onclick="ElimUsuario( '<?php echo $this->_tpl_vars['obj']->cInfoPer['id']; ?>
', '<?php echo $this->_tpl_vars['obj']->cInfoPer['id_registrado']; ?>
' );">Eliminar usuario</a>
            <input type="hidden" name="modo" value="save" />
            <a class="cerrar-dv" id="enviar_misdatos" href="#">Guardar</a>
            <div class="clear espacio_en_blanco"></div>
            <div class="row-fluid">
              <div class="span4">
                <label>Cargar/Modificar imagen de perfil</label>
                <input type="file" name="fil_image" id="fil_image">
              </div>
              <div class="span4">
                <label>Modificar contraseña</label>
                <input type="password" name="txt_passwd" id="txt_passwd" value="<?php echo $this->_tpl_vars['obj']->cData['txt_passwd']; ?>
">
              </div>
              <div class="span4">
                <label>Nivel de Privacidad de Hoja de Vida </label>
                <select class="select_dd priva" name="ind_privaci" id="ind_privaci" style="width:100% ;margin-top: 10px;">
                  <option class="nivel_p_1" value="1" <?php if ($this->_tpl_vars['obj']->cInfoPer['ind_privaci'] == '1'): ?>selected="selected"<?php endif; ?>>Público</option>
                  <option class="nivel_p_2" value="0" <?php if ($this->_tpl_vars['obj']->cInfoPer['ind_privaci'] == '0'): ?>selected="selected"<?php endif; ?>>Privado</option>
                </select>
                <div class="tooltip-priva">
                  <p><b>Público:</b> Su perfil aparecerá en todos los resultados de busqueda de las empresas.</p>
                  <p><b>Privado:</b> Su perfil unicamente sera visto por las empresas en las cuales haya aplicado para una oferta laboral.</p>
                </div>
              </div>
              <div class="span4"> </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="clear espacio_en_blanco"></div>
            <div class="clear espacio_en_blanco"></div>
            <div class="clear espacio_en_blanco"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="separador-gris"></div>
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas-2">
  <div class="container cont_contenidos">
    <div class="row-fluid">
      <div class="span12 box-estadisticas">
        <h2 class="estadisticas-titulo">Actividad Hoja de Vida</h2>
        <div class="clear espacio_en_blancopeque"></div>
        <p>En esta sección podrás ver la actividad que ha tenido tu hoja de vida en Empleo en Marcha día a día por número de aplicaciones a ofertas laborales.</p>
        <div class="clear espacio_en_blanco"></div>
        <div id="container1" style="min-width: 412px; height: 296px; margin: 0 auto"></div>
      </div>
      <div class="span12 box-estadisticas" >
        <h2 class="estadisticas-titulo">Vistas de Hoja de Vida</h2>
        <div class="clear espacio_en_blancopeque"></div>
        <p>Esta gráfica te muestra la cantidad  de veces que las empresas han visto tu perfil y la fecha en que lo han hecho.</p>
        <div class="clear espacio_en_blanco"></div>
        <div id="container2" style="min-width: 412px; height: 296px; margin: 0 auto"></div>
      </div>
    </div>
  </div>
</div>