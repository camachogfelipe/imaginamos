<?php /* Smarty version 2.6.24, created on 2013-10-06 14:11:13
         compiled from /var/www/html/cms/presentation/cms_encuesta_respuesta/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', '/var/www/html/cms/presentation/cms_encuesta_respuesta/view.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => "cms_encuesta_respuesta/controller",'assign' => 'obj'), $this);?>

<div class="container-fluid">
<?php if ($this->_tpl_vars['obj']->mModo == 'list'): ?>
<script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/highcharts.js"></script>
<script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/modules/exporting.js"></script>

<?php echo '
<script type="text/javascript">
  $(function () {
    $(\'#detalle_conse\').highcharts({
      chart:
      {
        type: \'column\',
        margin: [ 50, 50, 100, 80]
      },
      title: {
        text: \'Resultado encuesta\'
      },
      xAxis: {
'; ?>

        categories: [<?php echo $this->_tpl_vars['obj']->mOptList; ?>
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
          text: \'Numero de votos\'
        }
      },
      legend: {
        enabled: false
      },
      tooltip: {
        formatter: function() {
          return \'<b>\'+ this.x +\'</b><br/>\'+
          \'Votos: \'+ Highcharts.numberFormat(this.y, 1);
        }
      },
      series: [{
        name: \'Votos\',
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
  });
</script>
'; ?>

<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->cBack; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Respuestas encuesta</h1>
  <br>

  <div id="detalle_conse"></div>
  </div>
<?php else: ?>
<div class="row-fluid">
  <div class="btn-group">
    <a href="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid formContainer">
  <h1>Respuestas encuesta</h1>
  <br>
  <div class="class_frm frmcms_encuesta_respuesta">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="cms_encuesta_respuesta" />
    <input type="hidden" class="field_frm" id="redirect" value="<?php echo $this->_tpl_vars['obj']->mThisUrl; ?>
" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="<?php echo $this->_tpl_vars['obj']->mData['fec_creasi']; ?>
" />
    <?php if ($this->_tpl_vars['obj']->mData['id'] != ""): ?>
    <input type="hidden" class="field_frm" id="id" value="<?php echo $this->_tpl_vars['obj']->mData['id']; ?>
" />
    <?php endif; ?>

    <div class="span5">
      <label class="label">ind_pregunta *</label><br />
      <input type="text" class="field_frm" id="ind_pregunta" name="ind_pregunta" value="<?php echo $this->_tpl_vars['obj']->mData['ind_pregunta']; ?>
" placeholder="ind_pregunta" title="Digite el ind_pregunta" />
    </div>

    <div class="span5">
      <label class="label">ind_opcion *</label><br />
      <input type="text" class="field_frm" id="ind_opcion" name="ind_opcion" value="<?php echo $this->_tpl_vars['obj']->mData['ind_opcion']; ?>
" placeholder="ind_opcion" title="Digite el ind_opcion" />
    </div>

    <div class="span5">
      <label class="label">txt_ip *</label><br />
      <input type="text" class="field_frm" id="txt_ip" name="txt_ip" value="<?php echo $this->_tpl_vars['obj']->mData['txt_ip']; ?>
" placeholder="txt_ip" title="Digite el txt_ip" />
    </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_encuesta_respuesta">Guardar</a>
    </div>
  </div>
</div>
<?php endif; ?>
</div>