<?php /* Smarty version 2.6.24, created on 2014-01-16 23:01:53
         compiled from zona_empresa.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'zona_empresa.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'zona_empresa','assign' => 'obj'), $this);?>


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
    $(\'#container\').highcharts({
      chart: {
        type: \'line\',
        marginRight: 130,
        marginBottom: 45
      },
      title: {
        text: \'Alcance convocatoria\',
        x: -20 //center
      },
      xAxis: {
        categories: '; ?>
[<?php echo $this->_tpl_vars['obj']->cCatego; ?>
]<?php echo '
      },
      yAxis: {
        title: {
          text: \'Postulados\'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: \'#808080\'
        }]
      },
      tooltip: {
        valueSuffix: \' postulados\'
      },
      legend: {
        layout: \'vertical\',
        align: \'right\',
        verticalAlign: \'top\',
        x: -10,
        y: 100,
        borderWidth: 0
      },
      series: ['; ?>

        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cOfertas) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <?php echo '
          {
          '; ?>

            name: '<?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['txt_cargo']; ?>
',
            data: [<?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['datos']; ?>
]
          <?php echo '
          },
          '; ?>

       <?php endfor; endif; ?>
       <?php echo '
       ]
    });
  });
</script>
'; ?>


<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos-2 inline">
      <h1 class="inline"><?php echo $this->_tpl_vars['obj']->cInfEmp['titulo']; ?>
</h1>
      <div class="clear"></div>
      <h2 class="inline">NIT: <?php echo $this->_tpl_vars['obj']->cInfEmp['txt_nit']; ?>
</h2>

      <!-- <div class="sombra_division"></div> -->
    </div>
  </div>
</div>
<div class="fondo-gris">
  <div class="campo-perfil">
    <div class="row-fluid">
      <div class="span2 ">
        <div class="perfil-img clearfix">
          <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/empresas/emp_<?php echo $this->_tpl_vars['obj']->cInfEmp['fil_logo']; ?>
" alt="<?php echo $this->_tpl_vars['obj']->cInfEmp['txt_nom_comercial']; ?>
">
        </div>
      </div>
      <div class="span10 relativo">
        <div class="espacio_en_blancopeque"></div>
        <a class="btn-editar" href="javascript:void(0);" onclick="ElimEmpresa( '<?php echo $this->_tpl_vars['obj']->cInfEmp['id']; ?>
' );">Eliminar empresa</a>
        <a class="btn-editar" href="<?php echo $this->_tpl_vars['obj']->cRegist; ?>
">Editar</a>
        <h2><?php echo $this->_tpl_vars['obj']->cInfEmp['txt_nom_comercial']; ?>
</h2>
        <div class="espacio_en_blancopeque"></div>
        <p>
      <span class="text_naranja">Descripción: </span><?php echo $this->_tpl_vars['obj']->cInfEmp['txt_descripcion']; ?>

        </p>
      </div>
    </div>
  </div>
</div>
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas-2">
  <div class="container cont_contenidos">
    <div class="clear espacio_en_blanco"></div>
    <div class="row-fluid cont_graficos">
      <div class="span6 relativo padding20 div_grafico div_grafico1">
        <h2 class="hojadevida-titulo2">Datos de contacto</h2>
        <div class="clear espacio_en_blanco"></div>
        <div class="empresaCentro">
        <p><span class="text_naranja">NIT: </span><?php echo $this->_tpl_vars['obj']->cInfEmp['txt_nit']; ?>
</p>
        <p><span class="text_naranja">Sector: </span><?php echo $this->_tpl_vars['obj']->cInfEmp['nom_ramo']; ?>
</p>
        <p><span class="text_naranja">Subsector: </span><?php echo $this->_tpl_vars['obj']->cInfEmp['txt_ramo_2']; ?>
</p>
        <p><span class="text_naranja">Nombre Comercial: </span><?php echo $this->_tpl_vars['obj']->cInfEmp['txt_nom_comercial']; ?>
</p>
        <p><span class="text_naranja">Razón Social: </span><?php echo $this->_tpl_vars['obj']->cInfEmp['txt_razon_social']; ?>
</p>
        <p><span class="text_naranja">Departamento: </span><?php echo $this->_tpl_vars['obj']->cInfEmp['nom_depart']; ?>
</p>
        <p><span class="text_naranja">Ciudad: </span><?php echo $this->_tpl_vars['obj']->cInfEmp['nom_ciudad']; ?>
</p>
        </div>
        <div class="clear espacio_en_blanco"></div>
        <a class="btn-editar float_right" href="<?php echo $this->_tpl_vars['obj']->cRegist; ?>
">Editar</a> 
      </div>
      <div class="span6 relativo div_grafico">
        <h2 class="estadisticas-titulo">Estadística</h2>
        <div class="clear espacio_en_blancopeque"></div>

        <div id="container" style=""></div>

      </div>
    </div>
  </div>
</div>
<div class="separador-gris"></div>
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas-2">
  <div class="container cont_contenidos relativo">
    <h2><span>Personas Recomendadas / Empleados Potenciales</span></h2>
    <div class="buscar-gente-dv">
      <form action="<?php echo $this->_tpl_vars['obj']->cBusPer; ?>
" name="registro" id="registro" method="post">
        <select class="select_dd" name="id_prof" id="id_prof" style="width:200px;">
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
          <optgroup label="<?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['txt_nombre']; ?>
">
            <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['profe']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
            <option value="<?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['profe'][$this->_sections['j']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['obj']->cAreas[$this->_sections['k']['index']]['profe'][$this->_sections['j']['index']]['txt_nombre']; ?>
</option>
            <?php endfor; endif; ?>
          </optgroup>
          <?php endfor; endif; ?>
        </select>
        <input type="text" class="" name="perfil" id="perfil" placeholder="Palabra clave" style="width: 200px; float: left; margin: 0 10px 0 0;">
        <input class="buscar-dv" type="submit" value="Buscar" onclick="location.href = 'resultados-buscador.php'">
      </form>
    </div>
    <div class="clear espacio_en_blancogrande"></div>
    <div class="clear espacio_en_blancopeque"></div>
    <?php if ($this->_tpl_vars['obj']->cRecome['0']['nom_profesion'] != ""): ?>
    <div class="perf-slider">
      <ul class="slider-perfil-dv">
        <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cRecome) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['max'] = (int)5;
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
        <a href="<?php echo $this->_tpl_vars['obj']->cRecome[$this->_sections['k']['index']]['link']; ?>
"><li>
          <div class="campo-perfil">
            <div class="row-fluid">
              <div class="span2 ">
                <div class="perfil-img">
                  <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/personas/perso_<?php echo $this->_tpl_vars['obj']->cRecome[$this->_sections['k']['index']]['fil_image']; ?>
">
                </div>
              </div>
              <div class="span10 ">
                <div class="espacio_en_blanco"></div>
                <h2><?php echo $this->_tpl_vars['obj']->cRecome[$this->_sections['k']['index']]['nom_aspirante']; ?>
 <em><?php echo $this->_tpl_vars['obj']->cRecome[$this->_sections['k']['index']]['nom_profesion']; ?>
</em></h2>
                <div class="espacio_en_blanco"></div>
                <p><?php echo $this->_tpl_vars['obj']->cRecome[$this->_sections['k']['index']]['perfil']; ?>
</p>
                <ul class="perfil-iconos">
                  <li class="mail"><?php echo $this->_tpl_vars['obj']->cRecome[$this->_sections['k']['index']]['txt_email']; ?>
</li>
                  <li class="movil"><?php echo $this->_tpl_vars['obj']->cRecome[$this->_sections['k']['index']]['txt_movil']; ?>
</li>
                  <li class="telefono"><?php echo $this->_tpl_vars['obj']->cRecome[$this->_sections['k']['index']]['txt_telefono']; ?>
</li>
                  <li class="ubicacion"><?php echo $this->_tpl_vars['obj']->cRecome[$this->_sections['k']['index']]['lugar']; ?>
</li>
                </ul>
              </div>
            </div>
          </div>
        </li></a>
        <?php endfor; endif; ?>
      </ul>
    </div>
    <?php endif; ?>
    <div class="clear espacio_en_blanco"></div>
    <div class="relativo">
      <?php if ($this->_tpl_vars['obj']->cNumOfertas < 20): ?>
      <a class="agregar-dv fancybox" href="<?php echo $this->_tpl_vars['obj']->cRegofe; ?>
">Agregar nueva oferta</a>
      <?php endif; ?>
      <h2>Ofertas publicadas</h2>
      <div class="clear espacio_en_blanco"></div>
      <br>
      <div class="scroll-zonasegura">
        <table class="tabla tabla_header" width="920" border="1" bordercolor="#CCCCCC" id="tbl1">
          <thead>
            <tr>
              <td class="tabla_titulos" style="width:100px;">Fecha</td>
              <td class="tabla_titulos">Título de la oferta</td>
              <td class="tabla_titulos" style="width:150px;">Estado</td>
              <td class="tabla_titulos" style="width:160px;">Opciones</td>
            </tr>
          </thead>
          <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cOfertas) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <tr>
            <td class="tabla_contenidos"> <?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['fec_creasi']; ?>
 </td>
            <td class="tabla_contenidos"> <?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['txt_cargo']; ?>
<br><?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['postulados']; ?>
</td>
            <td class="tabla_contenidos">
              <select class="select_dd" id="select<?php echo $this->_sections['k']['index']; ?>
" style="width:95%;" onchange="EstadoOferta( '<?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['id']; ?>
', this )">
                <option value="1" <?php if ($this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['ind_visible'] == 1): ?>selected="selected"<?php endif; ?>>Abierta</option>
                <option value="0" <?php if ($this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['ind_visible'] == 0): ?>selected="selected"<?php endif; ?>>Cerrada</option>
              </select>
            </td>
            <td class="tabla_contenidos">
                            <a href="<?php echo $this->_tpl_vars['obj']->cRegofe; ?>
&id=<?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['id']; ?>
" class="float_left enlace-tabla">Editar<a>
              <span class="separador-punto-2"></span>
              <a href="#oferta-detalle2" class="float_left enlace-tabla popup" onclick="segEmpresa( '<?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['id']; ?>
' );" >Borrar<a>
              <span class="separador-punto-2"></span>
              <a href="#oferta-detalle2" class="float_left enlace-tabla popup" onclick="postuladosListado( '<?php echo $this->_tpl_vars['obj']->cOfertas[$this->_sections['k']['index']]['id']; ?>
' );" >Postulados<a>
            </td>
          </tr>
     <?php endfor; endif; ?>

        </table>
      </div>
    </div>
    <div class="clear espacio_en_blancogrande"></div>
  </div>
</div>
<!-- contenedor_internas -->