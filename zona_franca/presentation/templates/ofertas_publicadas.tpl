{load_presentation_object filename="ofertas_publicadas" assign="obj"}

{include file="buscador-interna.tpl"}

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="row">
      <div class="span4">
        {include file="buscador_columna.tpl"}
      </div>
      <!-- izquierda -->
      <div class="span8">
        <div class="cont_titulos inline">
          <h1 class="inline">Ofertas <span>Publicadas</span></h1>
          <div class="clear"></div>
          <h2 class="inline">{$obj->cSubTitulo}</h2>
        </div>
        <div class="row">
          <div class="span8 slider_ofertasdescripcion">
            <ul class="slider_ofertasdesc">
              {section name=k loop=$obj->cData step=8}
              <li>
                {section name=a loop=$obj->cData start=$smarty.section.k.index step=1 max=8}
                <div class="campo_oferta">
                  <div class="contcampo_oferta">
                    <div class="logo_ofertas">
                      <img src="{$obj->mSiteUrl}/cms/files/empresas/emp_{$obj->cData[a].fil_logo}" alt="logo {$obj->cData[a].txt_nom_comercial}">
                    </div>
                    <div class="info_ofertas">
                      <div class="row-fluid fluid_ofertas">
                        <div class="span7 titulos_oferta">
                          <h2 class="inline">{$obj->cData[a].txt_cargo}</h2>
                          <div class="clear"></div>
                          <h6><span>Sector:</span> {$obj->cData[a].nom_area} - {$obj->cData[a].nom_departamento} </h6>
                        </div>
                        <div class="span4 titulos_oferta">
                          <!--<h5 class="italic">
                            Federación de banqueros
                          </h5>-->
                        </div>
                        <div class="clear"></div>
                        <p>{$obj->cData[a].descripcion}</p>
                        <div class="clear"></div>
                        <div class="span7">
                          <!--<h6>Avisos publicados: (1.200) </h6>-->
                        </div>
                        <div class="span5">
                          <p class="text_peque text_naranja">
                            <a class="bt_naranja popup" href="#oferta-detalle2" onclick="DetalleOfertaH( '{$obj->cData[a].id}' );">Ver más información</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {/section}
							</li>
              {/section}
            </ul>
          </div>
        </div>
        <!-- ROW -->
      </div>
    </div>
  </div>
</div>