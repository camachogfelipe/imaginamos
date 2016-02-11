<?php /* Smarty version 2.6.24, created on 2013-09-15 22:18:24
         compiled from estadi_empseg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'estadi_empseg.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'estadi_empseg','assign' => 'obj'), $this);?>

<div class="container-fluid">
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/highcharts.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/modules/exporting.js"></script>

  <?php echo '
  <script type="text/javascript">
   $(function () {
    $(\'#container\').highcharts({
      chart: {
        type: \'line\',
        marginRight: 130,
        marginBottom: 25
      },
      title: {
        text: \'Consiguieron trabajo\',
        x: -20 //center
      },
      xAxis: {
        categories: '; ?>
[<?php echo $this->_tpl_vars['obj']->cCatego; ?>
]<?php echo '
      },
      yAxis: {
        title: {
          text: \'N&uacute;mero personas\'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: \'#808080\'
        }]
      },
      tooltip: {
        valueSuffix: \' personas\'
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
    
    $(\'#container2\').highcharts({
      chart: {
        type: \'line\',
        marginRight: 130,
        marginBottom: 25
      },
      title: {
        text: \'A trav&eacute;s de empleo en marcha\',
        x: -20 //center
      },
      xAxis: {
        categories: '; ?>
[<?php echo $this->_tpl_vars['obj']->cCatego; ?>
]<?php echo '
      },
      yAxis: {
        title: {
          text: \'N&uacute;mero personas\'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: \'#808080\'
        }]
      },
      tooltip: {
        valueSuffix: \' personas\'
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
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->cAtra) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

            name: '<?php echo $this->_tpl_vars['obj']->cAtra[$this->_sections['k']['index']]['txt_cargo']; ?>
',
            data: [<?php echo $this->_tpl_vars['obj']->cAtra[$this->_sections['k']['index']]['datos']; ?>
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

  <div class="row-fluid">
    <div class="btn-group">
      <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    </div>
  </div>

  <div class="row-fluid listContainer">
    <h1>Feedback personas</h1>
    <br>

    <div id="container"></div>
    <br>
    <div id="container2"></div>
  </div>
</div>