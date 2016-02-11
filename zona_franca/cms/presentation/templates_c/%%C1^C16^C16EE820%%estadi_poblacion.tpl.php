<?php /* Smarty version 2.6.24, created on 2013-09-15 22:09:58
         compiled from estadi_poblacion.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'estadi_poblacion.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'estadi_poblacion','assign' => 'obj'), $this);?>

<div class="container-fluid">
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
          text: \'Estadísticas de población\'
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
            text: \'Número personas\'
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
      <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    </div>
  </div>

  <div class="row-fluid listContainer">
    <h1>Tipo de poblaciones</h1>
    <br>

    <div id="detalle_conse"></div>
      </div>
</div>