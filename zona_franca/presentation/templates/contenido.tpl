{load_presentation_object filename="contenido" assign="obj"}
{literal} 
<style type="text/css">
  img{/*margin-top: 45px;*/}
  .titulo_contenido ul{list-style: initial ; margin-left: 20px;}
</style>
{/literal} 

{include file="buscador-interna.tpl"}

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos-2 inline">
      <h1 class="inline">{$obj->cTitulo}</h1>
      <div class="clear"></div>
      <!-- <div class="sombra_division"></div> -->
    </div>
    {section name=k loop=$obj->cArticulos}
    {if $smarty.section.k.iteration % 2 == 0}
    <div class="titulo_contenido">
      <div class="row-fluid">
        <div class="span6 border">
          <img class="" src="{$obj->mSiteUrl}/cms/files/secart/art_{$obj->cArticulos[k].fil_image}">
        </div>
        <div class="span6">
          <h2 class="inline">{$obj->cArticulos[k].txt_titulo}</h2>
          <div class="clear espacio_en_blanco"></div>
          <p>{$obj->cArticulos[k].txt_descripcion}</p>
        </div>
      </div>
    </div>
    {else}
    <div class="titulo_contenido">
      <div class="row-fluid">
        <div class="span6">
          <h2 class="inline">{$obj->cArticulos[k].txt_titulo}</h2>
          <div class="clear espacio_en_blanco"></div>
          <p>{$obj->cArticulos[k].txt_descripcion}</p>
        </div>
        <div class="span6 border">
          <img class="" src="{$obj->mSiteUrl}/cms/files/secart/art_{$obj->cArticulos[k].fil_image}">
        </div>
      </div>
    </div>
    {/if}
    <div class="clear espacio_en_blanco"></div>
    {/section}
  </div>
</div>
<!-- contenedor_internas -->