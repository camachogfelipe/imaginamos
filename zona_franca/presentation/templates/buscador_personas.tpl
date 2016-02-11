{load_presentation_object filename="buscador_personas" assign="obj"}

{include file="buscador-interna.tpl"}

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="cont_titulos-2 inline">
      <h1 class="inline">Busca<span> tu gente</span></h1>
      <div class="clear"></div>
      <h2 class="inline">Busca tu gente</h2>
      <p>Estos son los perfiles m&aacute;s adecuados que Empleo en Marcha ha encontrado para tu empresa.</p>
      <!-- <div class="sombra_division"></div> -->
    </div>

    <div class="clear espacio_en_blanco"></div>
    <div class="buscador-gente-dv2">
      <ul class="slider-buscador-dv">
        {section name=k loop=$obj->cData step=5}
        <li>
          {section name=a loop=$obj->cData start=$smarty.section.k.index step=1 max=5}
          <div class="campo-perfil">
            <div class="row-fluid">
              <div class="span2 ">
                <div class="perfil-img"><img src="{$obj->mSiteUrl}/cms/files/personas/perso_{$obj->cData[a].fil_image}"></div>
              </div>
              <div class="span10 ">
                <div class="espacio_en_blanco"></div>
                <h2><a href="{$obj->mSiteUrl}/index.php?base&seccion=detalle_persona&id={$obj->cData[a].id_perfil|base64_encode}" target="_blank">{$obj->cData[a].nom_aspirante} <em>{$obj->cData[a].nom_profesion}</em></a></h2>
                <div class="espacio_en_blanco"></div>
                <p>{$obj->cData[a].perfil}</p>
                <ul class="perfil-iconos">
                  <li class="mail">{$obj->cData[a].txt_email}</li>
                  <li class="movil">{$obj->cData[a].txt_movil}</li>
                  <li class="telefono">{$obj->cData[a].txt_telefono}</li>
                  <li class="ubicacion">{$obj->cData[a].lugar}</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="clear espacio_en_blanco"></div>
          {/section}
        </li>
        {/section}
      </ul>
    </div>
  </div>
</div>
<!-- contenedor_internas -->