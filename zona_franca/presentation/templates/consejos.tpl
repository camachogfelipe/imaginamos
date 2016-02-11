{load_presentation_object filename="consejos" assign="obj"}

{include file="buscador-interna.tpl"}
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="row"> 
      <!-- izquierda -->
      <div class="span12 consejos-profesionales">
        <div class="cont_titulos-2 inline"> {if $obj->mTipo == "1"}
          <h1 class="inline">Ultimas <span>Noticias </span></h1>
          {else}
          <h1 class="inline">Consejos <span>Profesionales </span></h1>
          {/if}
          <div class="clear"></div>
          <div class="clear espacio_en_blancopeque"></div>
          <!-- <div class="sombra_division"></div> --> 
        </div>
        <div class="row">
          <div class="span12">
            <div class="loultimo">
              <h3 class="inline">LO &Uacute;LTIMO</h3>
              <div class="clear espacio_en_blancopeque"></div>
              <div class="row-fluid">
                <div class="span8"> <img src="{$obj->mSiteUrl}/cms/files/articulos/art_img_{$obj->cData.0.fil_image}">
                  <div class="clear espacio_en_blancopeque"></div>
                  <div class="row-fluid">
                    <div class="span8">
                      <h2>{$obj->cData.0.txt_titulo}</h2>
                    </div>
                    <div class="span4">
                      <h6 class="fecha"><span>{$obj->cData.0.fec_creasi}</span></h6>
                    </div>
                  </div>
                  <p>{$obj->cData.0.descripcion|strip_tags}</p>
                  <div class="clear espacio_en_blancopeque"></div>
                  <p class="text_peque text_naranja float_right"> <a class="bt_naranja popup" href="#oferta-detalle" onclick="DetalleConsejo( '{$obj->cData.0.id}' );" >Ver m&aacute;s informaci&oacute;n</a> </p>
                </div>
                <div class="span4">
                  <div class="loultimo-mini"> <img src="{$obj->mSiteUrl}/cms/files/articulos/art_img_{$obj->cData.1.fil_image}">
                    <h6 class="fecha"><span>{$obj->cData.1.fec_creasi}</span></h6>
                    <h2>{$obj->cData.1.txt_titulo}</h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <p class="text_peque text_naranja float_right"> <a class="bt_naranja popup" href="#oferta-detalle" onclick="DetalleConsejo( '{$obj->cData.1.id}' );">Ver m&aacute;s informaci&oacute;n</a> </p>
                  </div>
                  <div class="clear espacio_en_blancopeque"></div>
                  <div class="loultimo-mini"> <img src="{$obj->mSiteUrl}/cms/files/articulos/art_img_{$obj->cData.2.fil_image}">
                    <h6 class="fecha"><span>{$obj->cData.2.fec_creasi}</span></h6>
                    <h2>{$obj->cData.2.txt_titulo}</h2>
                    <div class="clear espacio_en_blancopeque"></div>
                    <p class="text_peque text_naranja float_right"> <a class="bt_naranja popup" href="#oferta-detalle" onclick="DetalleConsejo( '{$obj->cData.2.id}' );">Ver m&aacute;s informaci&oacute;n</a> </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            {if $obj->mTipo == "1"}
            <h3 class="inline">OTRAS NOTICIAS</h3>
            {else}
            <h3 class="inline">OTROS CONSEJOS</h3>
            {/if}
            <div class="clear espacio_en_blancopeque"></div>
            <ul class="slider_noticias">
            	<li>
              {section name=k loop=$obj->cData start=3 step=1}
                <div class="campo_noticias">
                  <div class="row-fluid">
                    <div class="span2">
                      <div class="logo_ofertas"> <img src="{$obj->mSiteUrl}/cms/files/articulos/art_img_{$obj->cData[k].fil_image}" alt=""> </div>
                    </div>
                    <div class="span10">
                      <h2 class="inline">{$obj->cData[k].txt_titulo}</h2>
                      <div class="clear"></div>
                      <h6><span>{$obj->cData[k].fec_creasi}</span></h6>
                      <p>{$obj->cData[k].descripcion}</p>
                      <p class="text_peque text_naranja float_right"> <a class="bt_naranja popup" href="#oferta-detalle" onclick="DetalleConsejo( '{$obj->cData[k].id}' );">Ver m&aacute;s informaci&oacute;n</a> </p>
                    </div>
                  </div>
                </div>
                {if $smarty.section.k.index is even}
                </li><li>
                {/if}
                {/section}
              </li>
            </ul>
          </div>
        </div>
        <!-- ROW --> 
      </div>
    </div>
  </div>
</div>
<!-- contenedor_internas --> 

<!-- POPUP OFERTAS -->
<div id="oferta-detalle" style="display: none;">
  <div class="cont_emergente" id="detalle_conse">
    <h1 class="centrar_contenido">Lorem Ipsum Dolor Sit Amet</h1>
    <div class="clear"></div>
    <div class="sombra_division"></div>
    <div class="row-fluid">
      <div class="span4 noticias-detalle"> <img src="http://i.istockimg.com/file_thumbview_approve/14377944/2/stock-photo-14377944-four-business-people-with-puzzle.jpg" alt="">
        <div class="clear espacio_en_blanco"></div>
        <iframe width="200" height="170" src="http://www.youtube.com/embed/pN2Lkzqe8e0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="span8">
        <h2>Lorem Ipsum Dolor</h2>
        <div class="clear espacio_en_blanco"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis ornare ipsum. Sed lacinia interdum laoreet. Pellentesque et ornare mauris. Donec commodo condimentum interdum. Nunc sit amet orci vel eros facilisis placerat. Sed vulputate aliquam libero, quis adipiscing nisi placerat eu. Aenean erat ipsum, cursus sed eleifend non, fringilla ac ante. Pellentesque vitae pellentesque nunc. </p>
      </div>
    </div>
  </div>
</div>
