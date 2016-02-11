<?php /* Smarty version 2.6.24, created on 2014-01-08 17:15:53
         compiled from detalle_persona.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'detalle_persona.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'detalle_persona','assign' => 'obj'), $this);?>


<?php echo '
<script type="text/javascript">

  
$( document ).ready(function() {

	var validarsession = $("#validarsession").val();
	if (validarsession != "") {
		//alert("Se desplegará modal de sesión");
	  $(".contenedor_internas-2").html("");
	  $(".campo-perfil").html("");
	  $("#txt_urlempresa").val(validarsession);
      $("#bt_zona_segura_empresa").trigger("click");
	};
});

</script>
'; ?>



<input type="hidden" id="validarsession" value="<?php echo $this->_tpl_vars['obj']->cInfoPer['id_encrypt']; ?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "buscador-interna.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos-2 inline">
      <h1 class="inline">Perfil del <span> Aspirante</span></h1>
      <div class="clear"></div>
            <!-- <div class="sombra_division"></div> -->
    </div>
  </div>

  <div class="fondo-gris">
  <div class="campo-perfil">
    <div class="row-fluid">
      <div class="span2 ">
        <div class="perfil-img"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/personas/perso_<?php echo $this->_tpl_vars['obj']->cInfoPer['fil_image']; ?>
"></div>
      </div>
      <div class="span10 ">
        <div class="espacio_en_blanco"></div>
        <h2><?php echo $this->_tpl_vars['obj']->cInfoPer['nom_aspirante']; ?>
, <em><?php echo $this->_tpl_vars['obj']->cInfoPer['nom_profesion']; ?>
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

<div class="clear espacio_en_blanco"></div>
<div class="contenedor_internas-2">
  <div class="container cont_contenidos maxheight">
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
                  <p><strong>Inicio:</strong> <?php echo $this->_tpl_vars['obj']->cPerHv['estudios'][$this->_sections['k']['index']]['fec_ingreso']; ?>

                  <?php if ($this->_tpl_vars['obj']->cPerHv['estudios'][$this->_sections['k']['index']]['fec_ingreso'] == 'no'): ?>
									<p><strong>Finalización:</strong> <?php echo $this->_tpl_vars['obj']->cPerHv['estudios'][$this->_sections['k']['index']]['fec_finaliza']; ?>
</p>
                  <?php else: ?>
                  <p><strong>Finalización:</strong> En curso</p>
                  <?php endif; ?>
									<br />
									<?php endfor; endif; ?> </div>
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
									<?php endfor; endif; ?> </div>
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
									<?php endfor; endif; ?> </div>
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
								<?php endfor; endif; ?> </div>
						</div>
					</div>
		



</div>


</div>