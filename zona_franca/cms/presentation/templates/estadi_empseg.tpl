{load_presentation_object filename="estadi_empseg" assign="obj"}
<div class="container-fluid">
  <script src="{$obj->mSiteUrl}/scripts/highcharts.js"></script>
  <script src="{$obj->mSiteUrl}/scripts/modules/exporting.js"></script>

  {literal}
  <script type="text/javascript">
   $(function () {
    $('#container').highcharts({
      chart: {
        type: 'line',
        marginRight: 130,
        marginBottom: 25
      },
      title: {
        text: 'Consiguieron trabajo',
        x: -20 //center
      },
      xAxis: {
        categories: {/literal}[{$obj->cCatego}]{literal}
      },
      yAxis: {
        title: {
          text: 'N&uacute;mero personas'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },
      tooltip: {
        valueSuffix: ' personas'
      },
      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -10,
        y: 100,
        borderWidth: 0
      },
      series: [{/literal}
        {section name=k loop=$obj->cOfertas}
          {literal}
          {
          {/literal}
            name: '{$obj->cOfertas[k].txt_cargo}',
            data: [{$obj->cOfertas[k].datos}]
          {literal}
          },
          {/literal}
       {/section}
       {literal}
       ]
    });
    
    $('#container2').highcharts({
      chart: {
        type: 'line',
        marginRight: 130,
        marginBottom: 25
      },
      title: {
        text: 'A trav&eacute;s de empleo en marcha',
        x: -20 //center
      },
      xAxis: {
        categories: {/literal}[{$obj->cCatego}]{literal}
      },
      yAxis: {
        title: {
          text: 'N&uacute;mero personas'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },
      tooltip: {
        valueSuffix: ' personas'
      },
      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -10,
        y: 100,
        borderWidth: 0
      },
      series: [{/literal}
        {section name=k loop=$obj->cAtra}
          {literal}
          {
          {/literal}
            name: '{$obj->cAtra[k].txt_cargo}',
            data: [{$obj->cAtra[k].datos}]
          {literal}
          },
          {/literal}
       {/section}
       {literal}
       ]
    });
  });
  </script>
  {/literal}
  <div class="row-fluid">
    <div class="btn-group">
      <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
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