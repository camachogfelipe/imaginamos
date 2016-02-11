{load_presentation_object filename="descripcion" assign="obj"}

{include file="buscador-interna.tpl"}

<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="row">
      <div class="span4">
        <div class="cont_izqgris-2">
          <div class="contcontenidos_izqgris">
            <h3 class="centrar_contenido">{$obj->cEmpresa.txt_nom_comercial}</h3>
            <h4 class="centrar_contenido">{$obj->cEmpresa.txt_website}</h4>
            <div class="clear espacio_en_blanco"></div>
            <div class="logo_empresa1 centrado clearfix">
              <img src="{$obj->mSiteUrl}/cms/files/empresas/emp_{$obj->cEmpresa.fil_logo}" alt="">
            </div>
            <div class="clear espacio_en_blanco"></div>
            <h5>Descripción</h5>
            <p>{$obj->cEmpresa.txt_descripcion}</p>
            <div class="sombrapeque clear"></div>
            <h5>Razón Social</h5>
            <p>{$obj->cEmpresa.txt_razon_social}</p>
            <div class="sombrapeque clear"></div>
            <h5>Sector</h5>
            <p>{$obj->cEmpresa.nom_ramo}</p>
            <p>{$obj->cEmpresa.txt_ramo_2}</p>
            <div class="sombrapeque clear"></div>
            <div class="clear espacio_en_blanco"></div>
            <div class="centrar_inline iconos_izq">
              <a id="imprimir" class="inline" href="#"></a>
              <a id="guardar" class="inline" href="#"></a>
              <a id="mensaje" class="inline" href="#"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="span8">
        <div class="cont_titulos inline">
          <h1 class="inline">Ofertas <span>Publicadas</span></h1>
          <div class="clear"></div>
          <h2 class="inline">Se encontraron {$obj->cNumOfertas} ofertas de trabajo</h2>
        </div>

        <div class="row">
          <div class="span8 slider_ofertasdescripcion-2">
            <ul class="slider_ofertasdesc">
              {section name=k loop=$obj->cOfertas step=4}
              <li>
                {section name=a loop=$obj->cOfertas start=$smarty.section.k.index step=1 max=4}
                <div class="campo_oferta">
                  <div class="contcampo_oferta">
                    <div class="logo_ofertas">
                      <img src="{$obj->mSiteUrl}/cms/files/empresas/emp_{$obj->cOfertas[a].fil_logo}" alt="logo {$obj->cOfertas[a].txt_nom_comercial}">
                    </div>
                    <div class="info_ofertas">
                      <div class="row-fluid fluid_ofertas">
                        <div class="span7 titulos_oferta">
                          <h2 class="inline">{$obj->cOfertas[a].txt_cargo}</h2>
                          <div class="clear"></div>
                          <h6><span>Sector:</span> {$obj->cOfertas[a].nom_area} - {$obj->cOfertas[a].nom_departamento} </h6>
                        </div>
                        <div class="span4 titulos_oferta">
                          {*<h5 class="italic">
                            Federación de banqueros
                          </h5>*}
                        </div>
                        <div class="clear"></div>
                        <p>{$obj->cOfertas[a].descripcion}</p>
                        <div class="clear"></div>
                        <div class="span7">
                          {*<h6>Avisos publicados: (1.200) </h6>*}
                        </div>
                        <div class="span5">
                          <p class="text_peque text_naranja">
                            <a class="bt_naranja popup" href="#oferta-detalle2" onclick="DetalleOfertaH( '{$obj->cOfertas[a].id}' );">Ver más información</a>
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
        </div><!-- ROW -->

      </div>
    </div>
  </div>
</div><!-- contenedor_internas -->