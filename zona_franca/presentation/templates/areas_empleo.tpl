{load_presentation_object filename="areas_empleo" assign="obj"}

{include file="buscador-interna.tpl"}

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="row">
      <div class="span4">
        {include file="buscador_columna.tpl"}
      </div><!-- izquierda -->
      <div class="span8">
        <div class="cont_titulos inline">
          <h1 class="inline">Áreas de <span>empleo</span></h1>
          <div class="clear"></div>
          <h2 class="inline"></h2>
          <div class="clear espacio_en_blancopeque"></div>
          <p class="inline">En esta sección encontrarás las ofertas de empleo agrupadas en las áreas laborales que se ajustan a tus necesidades.</p>
        </div>

        <div class="row">
          <div class="span8 slider_ofertaempleo">
            <div class="row">

              {section name=k loop=$obj->cData}
              <div class="campo_ofertaempleo">
                <div class="campo_ofertaempleocont">
                  <div class="imagen_ofertaempleo">
                    <img src="{$obj->mSiteUrl}/images/imagen_empleo.jpg" alt="">
                  </div>
                  <div class="info_ofertaempleo">
                    <h2>{$obj->cData[k].txt_nombre}</h2>
                  </div>
                  <ul>
                    {section name=a loop=$obj->cData[k].profe}
                    <li>
                      <a href="{$obj->cOfPubli}&id_prof={$obj->cData[k].profe[a].id_sector}">{$obj->cData[k].profe[a].txt_nombre} <span>({$obj->cData[k].profe[a].num})</span></a>
                    </li>
                    {/section}
                  </ul>
                </div>
              </div>
              {/section}

            </div>
          </div>
        </div><!-- ROW -->
      </div>
    </div>
  </div>
</div>
<!-- contenedor_internas -->

