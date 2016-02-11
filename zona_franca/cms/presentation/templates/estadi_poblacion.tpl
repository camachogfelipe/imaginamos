{load_presentation_object filename="estadi_poblacion" assign="obj"}
<div class="container-fluid">
  <script src="{$obj->mSiteUrl}/scripts/highcharts.js"></script>
  <script src="{$obj->mSiteUrl}/scripts/modules/exporting.js"></script>

  {literal}
  <script type="text/javascript">
    $(function () {
      $('#detalle_conse').highcharts({
        chart:
        {
          type: 'column',
          margin: [ 50, 50, 100, 80]
        },
        title: {
          text: 'Estad&iacute;sticas de poblaci&oacute;n'
        },
        xAxis: {
  {/literal}
          categories: [{$obj->mOptList}],
  {literal}
          labels: {
            rotation: -45,
            align: 'right',
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        },
        yAxis: {
          min: 0,
          title: {
            text: 'N&uacute;mero personas'
          }
        },
        legend: {
          enabled: false
        },
        tooltip: {
          formatter: function() {
            return '<b>'+ this.x +'</b><br/>'+
            'Votos: '+ Highcharts.numberFormat(this.y, 1);
          }
        },
        series: [{
          name: 'Votos',
  {/literal}
          data: [{$obj->mResList}],
  {literal}
          dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            x: 4,
            y: 10,
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        }]
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
    <h1>Tipo de poblaciones</h1>
    <br>

    <div id="detalle_conse"></div>
    {*$obj->mList*}
  </div>
</div>