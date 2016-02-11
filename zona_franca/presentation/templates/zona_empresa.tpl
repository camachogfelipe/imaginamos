{load_presentation_object filename="zona_empresa" assign="obj"}

<script src="{$obj->mSiteUrl}/scripts/highcharts.js"></script>
<script src="{$obj->mSiteUrl}/scripts/modules/exporting.js"></script>

{include file="buscador-interna.tpl"}

{literal}
<script type="text/javascript">
  $(function () {
    $('#container').highcharts({
      chart: {
        type: 'line',
        marginRight: 130,
        marginBottom: 45
      },
      title: {
        text: 'Alcance convocatoria',
        x: -20 //center
      },
      xAxis: {
        categories: {/literal}[{$obj->cCatego}]{literal}
      },
      yAxis: {
        title: {
          text: 'Postulados'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },
      tooltip: {
        valueSuffix: ' postulados'
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
  });
</script>
{/literal}

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos-2 inline">
      <h1 class="inline">{$obj->cInfEmp.titulo}</h1>
      <div class="clear"></div>
      <h2 class="inline">NIT: {$obj->cInfEmp.txt_nit}</h2>

      <!-- <div class="sombra_division"></div> -->
    </div>
  </div>
</div>
<div class="fondo-gris">
  <div class="campo-perfil">
    <div class="row-fluid">
      <div class="span2 ">
        <div class="perfil-img clearfix">
          <img src="{$obj->mSiteUrl}/cms/files/empresas/emp_{$obj->cInfEmp.fil_logo}" alt="{$obj->cInfEmp.txt_nom_comercial}">
        </div>
      </div>
      <div class="span10 relativo">
        <div class="espacio_en_blancopeque"></div>
        <a class="btn-editar" href="javascript:void(0);" onclick="ElimEmpresa( '{$obj->cInfEmp.id}' );">Eliminar empresa</a>
        <a class="btn-editar" href="{$obj->cRegist}">Editar</a>
        <h2>{$obj->cInfEmp.txt_nom_comercial}</h2>
        <div class="espacio_en_blancopeque"></div>
        <p>
      <span class="text_naranja">Descripci�n: </span>{$obj->cInfEmp.txt_descripcion}
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
        <p><span class="text_naranja">NIT: </span>{$obj->cInfEmp.txt_nit}</p>
        <p><span class="text_naranja">Sector: </span>{$obj->cInfEmp.nom_ramo}</p>
        <p><span class="text_naranja">Subsector: </span>{$obj->cInfEmp.txt_ramo_2}</p>
        <p><span class="text_naranja">Nombre Comercial: </span>{$obj->cInfEmp.txt_nom_comercial}</p>
        <p><span class="text_naranja">Raz�n Social: </span>{$obj->cInfEmp.txt_razon_social}</p>
        <p><span class="text_naranja">Departamento: </span>{$obj->cInfEmp.nom_depart}</p>
        <p><span class="text_naranja">Ciudad: </span>{$obj->cInfEmp.nom_ciudad}</p>
        </div>
        <div class="clear espacio_en_blanco"></div>
        <a class="btn-editar float_right" href="{$obj->cRegist}">Editar</a> 
      </div>
      <div class="span6 relativo div_grafico">
        <h2 class="estadisticas-titulo">Estad�stica</h2>
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
      <form action="{$obj->cBusPer}" name="registro" id="registro" method="post">
        <select class="select_dd" name="id_prof" id="id_prof" style="width:200px;">
          <option value="">&Aacute;rea:</option>
          {section name=k loop=$obj->cAreas}
          <optgroup label="{$obj->cAreas[k].txt_nombre}">
            {section name=j loop=$obj->cAreas[k].profe}
            <option value="{$obj->cAreas[k].profe[j].id}">{$obj->cAreas[k].profe[j].txt_nombre}</option>
            {/section}
          </optgroup>
          {/section}
        </select>
        <input type="text" class="" name="perfil" id="perfil" placeholder="Palabra clave" style="width: 200px; float: left; margin: 0 10px 0 0;">
        <input class="buscar-dv" type="submit" value="Buscar" onclick="location.href = 'resultados-buscador.php'">
      </form>
    </div>
    <div class="clear espacio_en_blancogrande"></div>
    <div class="clear espacio_en_blancopeque"></div>
    {if $obj->cRecome.0.nom_profesion!=""}
    <div class="perf-slider">
      <ul class="slider-perfil-dv">
        {section name=k loop=$obj->cRecome max=5}
        <a href="{$obj->cRecome[k].link}"><li>
          <div class="campo-perfil">
            <div class="row-fluid">
              <div class="span2 ">
                <div class="perfil-img">
                  <img src="{$obj->mSiteUrl}/cms/files/personas/perso_{$obj->cRecome[k].fil_image}">
                </div>
              </div>
              <div class="span10 ">
                <div class="espacio_en_blanco"></div>
                <h2>{$obj->cRecome[k].nom_aspirante} <em>{$obj->cRecome[k].nom_profesion}</em></h2>
                <div class="espacio_en_blanco"></div>
                <p>{$obj->cRecome[k].perfil}</p>
                <ul class="perfil-iconos">
                  <li class="mail">{$obj->cRecome[k].txt_email}</li>
                  <li class="movil">{$obj->cRecome[k].txt_movil}</li>
                  <li class="telefono">{$obj->cRecome[k].txt_telefono}</li>
                  <li class="ubicacion">{$obj->cRecome[k].lugar}</li>
                </ul>
              </div>
            </div>
          </div>
        </li></a>
        {/section}
      </ul>
    </div>
    {/if}
    <div class="clear espacio_en_blanco"></div>
    <div class="relativo">
      {if $obj->cNumOfertas<20}
      <a class="agregar-dv fancybox" href="{$obj->cRegofe}">Agregar nueva oferta</a>
      {/if}
      <h2>Ofertas publicadas</h2>
      <div class="clear espacio_en_blanco"></div>
      <br>
      <div class="scroll-zonasegura">
        <table class="tabla tabla_header" width="920" border="1" bordercolor="#CCCCCC" id="tbl1">
          <thead>
            <tr>
              <td class="tabla_titulos" style="width:100px;">Fecha</td>
              <td class="tabla_titulos">T�tulo de la oferta</td>
              <td class="tabla_titulos" style="width:150px;">Estado</td>
              <td class="tabla_titulos" style="width:160px;">Opciones</td>
            </tr>
          </thead>
          {section name=k loop=$obj->cOfertas}
          <tr>
            <td class="tabla_contenidos"> {$obj->cOfertas[k].fec_creasi} </td>
            <td class="tabla_contenidos"> {$obj->cOfertas[k].txt_cargo}<br>{$obj->cOfertas[k].postulados}</td>
            <td class="tabla_contenidos">
              <select class="select_dd" id="select{$smarty.section.k.index}" style="width:95%;" onchange="EstadoOferta( '{$obj->cOfertas[k].id}', this )">
                <option value="1" {if $obj->cOfertas[k].ind_visible==1}selected="selected"{/if}>Abierta</option>
                <option value="0" {if $obj->cOfertas[k].ind_visible==0}selected="selected"{/if}>Cerrada</option>
              </select>
            </td>
            <td class="tabla_contenidos">
              {*<a href="" class="float_left enlace-tabla">Ver<a><span class="separador-punto-2"></span>*}
              <a href="{$obj->cRegofe}&id={$obj->cOfertas[k].id}" class="float_left enlace-tabla">Editar<a>
              <span class="separador-punto-2"></span>
              <a href="#oferta-detalle2" class="float_left enlace-tabla popup" onclick="segEmpresa( '{$obj->cOfertas[k].id}' );" >Borrar<a>
              <span class="separador-punto-2"></span>
              <a href="#oferta-detalle2" class="float_left enlace-tabla popup" onclick="postuladosListado( '{$obj->cOfertas[k].id}' );" >Postulados<a>
            </td>
          </tr>
     {/section}

        </table>
      </div>
    </div>
    <div class="clear espacio_en_blancogrande"></div>
  </div>
</div>
<!-- contenedor_internas -->