{load_presentation_object filename="faq" assign="obj"}

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
    <div>
      <h2 class="inline">{$obj->cArticulos[k].txt_titulo}</h2>
      <div class="clear espacio_en_blanco"></div>
      <div class="row-fluid">
        <div class="span6 border">
          <img class="" src="{$obj->mSiteUrl}/cms/files/secart/art_{$obj->cArticulos[k].fil_image}">
        </div>
        <div class="span6">
          <p>{$obj->cArticulos[k].txt_descripcion}</p>
        </div>
      </div>
    </div>
    {else}
    <div>
      <h2 class="inline">{$obj->cArticulos[k].txt_titulo}</h2>
      <div class="clear espacio_en_blanco"></div>
      <div class="row-fluid">
        <div class="span6">
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


    <div class="clear espacio_en_blanco"></div>
    <h2>F.A.Q</h2>
    <div class="clear espacio_en_blanco"></div>
        <div class="row-fluid">
          <div class="span12">
    
          {section name=p loop=$obj->cPreguntas }
            <div class="faq">
              <p><strong>Pregunta:  </strong>{$obj->cPreguntas[p].txt_pregunta}</p>

            {section name=r loop=$obj->cPreguntas[p].respuestas}

              <p><strong>Respuesta:  </strong>{$obj->cPreguntas[p].respuestas[r].txt_respuesta}</p>
              

             {/section}
            </div>
          {/section}

      </div>


  </div>
</div>
<!-- contenedor_internas -->
