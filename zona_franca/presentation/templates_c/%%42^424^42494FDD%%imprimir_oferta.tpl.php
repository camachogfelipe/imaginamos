<?php /* Smarty version 2.6.24, created on 2014-01-09 08:29:14
         compiled from imprimir_oferta.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'imprimir_oferta.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'imprimir_oferta','assign' => 'obj'), $this);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body onload="window.print()">
<table width="100%" border="0" style="border: 1px solid #ddd;">
  <tr>
    <td style="color:#4E4E4E; font-size:32px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"><?php echo $this->_tpl_vars['obj']->mData['txt_cargo']; ?>
</td>
  </tr>
  <tr>
    <td style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"><?php echo $this->_tpl_vars['obj']->mData['txt_nom_comercial']; ?>
</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
        <tr>
          <td width="25%" align="center" valign="top"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/cms/files/empresas/emp_<?php echo $this->_tpl_vars['obj']->mData['fil_logo']; ?>
" width="150" height="150" style="border: 4px solid #ddd; border-radius: 5px;"/></td>
          <td width="75%" valign="top" style="color:#4E4E4E; font-family:Verdana, Geneva, sans-serif; font-size: 14px;"><div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif">Descripci&oacute;n de la Oferta</div>
            <p><?php echo $this->_tpl_vars['obj']->mData['txt_descripcion']; ?>
</p>
            <p><span style="color: #F55E2D;">Fecha de publicaci&oacute;n: </span><?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
</p>
            <p><span style="color: #F55E2D;">Departamento: </span><?php echo $this->_tpl_vars['obj']->mData['dep_ofe']; ?>
</p>
            <p><span style="color: #F55E2D;">Ciudad / Municipio: </span><?php echo $this->_tpl_vars['obj']->mData['ciu_ofe']; ?>
</p>
            <p><span style="color: #F55E2D;">Sector: </span><?php echo $this->_tpl_vars['obj']->mData['nom_sector']; ?>
</p>
            <p><span style="color: #F55E2D;">&aacute;rea: </span><?php echo $this->_tpl_vars['obj']->mData['nom_area']; ?>
</p>
            <p><span style="color: #F55E2D;">Jerarqu&iacute;a: </span><?php echo $this->_tpl_vars['obj']->mData['nom_jerarquia']; ?>
</p>
            <p><span style="color: #F55E2D;">Salario: </span><?php echo $this->_tpl_vars['obj']->mData['salario']; ?>
</p>
            <p><span style="color: #F55E2D;">Vacantes: </span><?php echo $this->_tpl_vars['obj']->mData['num_vacantes']; ?>
</p>
            <div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>
            <div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"> Requisitos</div>
            <p><?php echo $this->_tpl_vars['obj']->mData['txt_requisitos']; ?>
</p>
            <!--<div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>-->
            <!--<div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"> Informaci&oacute;n general del aspirante</div>-->
            <p><span style="color: #F55E2D;">Nivel de estudios: </span><?php echo $this->_tpl_vars['obj']->mData['nom_nivel_estudio']; ?>
</p>
            <p><span style="color: #F55E2D;">Departamento de residencia del aspirante: </span><?php echo $this->_tpl_vars['obj']->mData['dep_aspi']; ?>
</p>
            <p><span style="color: #F55E2D;">Ciudad / Municipio del aspirante: </span><?php echo $this->_tpl_vars['obj']->mData['ciu_aspi']; ?>
</p>
            <p><span style="color: #F55E2D;">Edad: </span><?php echo $this->_tpl_vars['obj']->mData['num_edad_aspi']; ?>
</p>
            <p><span style="color: #F55E2D;">&aacute;rea: </span><?php echo $this->_tpl_vars['obj']->mData['nom_area_aspi']; ?>
</p>
            <p><span style="color: #F55E2D;">Experiencia laboral:</span><?php echo $this->_tpl_vars['obj']->mData['num_exp_aspi']; ?>
</p>
            <div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>
            <!--<div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"> Cargos equivalentes</div>
            <p> <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mRela) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
              <?php echo $this->_tpl_vars['obj']->mRela[$this->_sections['k']['index']]['txt_nombre']; ?>
,
              <?php endfor; endif; ?> </p>
            <div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>--></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>