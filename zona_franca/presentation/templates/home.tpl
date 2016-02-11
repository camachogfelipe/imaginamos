{load_presentation_object filename="home" assign="obj"}

<script src="{$obj->mSiteUrl}/scripts/highcharts.js"></script>
<script src="{$obj->mSiteUrl}/scripts/modules/exporting.js"></script>

<div id="fb-root"></div>
{literal}
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=651843338177397";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


{/literal}
  <div class="over-banner"></div>
<div class="banner">

  <div>
    <form action="{$obj->cOfPubli}" name="registro" id="registro" method="post">
      <h1>Buscador de <span>Empleos</span></h1>
      <h2>{$obj->mBannerHome.txt_subtitulo}</h2>
      <div class="clear espacio_en_blanco"></div>
      <input type="text" name="titulo" id="titulo" placeholder="Palabra clave:">
      <div class="clear espacio_en_blanco"></div>
      <div class="cont_selecthome float_left">
        <select class="select_dd" name="fecha" id="fecha" style="width:100%;">
          <option value="">Fecha de publicaci&oacute;n:</option>
          <option value="1" >�ltimo d�a</option>
          <option value="3" >�ltimos (3) d�as</option>
          <option value="7" >�ltimos (7) d�as</option>
          <option value="15" >�ltimos (15) d�as</option>
          <option value="30" >�ltimos (30) d�as</option>
          <option value="60" >�ltimos (60) d�as</option>
        </select>
      </div>
      <div class="cont_selecthome float_right">
        <select class="select_dd" name="area" id="area" style="width:100%;">
          <option value="">&Aacute;rea:</option>
          {section name=k loop=$obj->cAreas}
          <option value="{$obj->cAreas[k].id}">{$obj->cAreas[k].txt_nombre}</option>
          {/section}
        </select>
      </div>
      <div class="clear espacio_en_blanco"></div>
      <input class="bt_buscarinternas" type="submit" value="Buscar Empleo">
    </form>
    <div>
      <span></span>
      <ul>
        <li>
          <img src="{$obj->mSiteUrl}/cms/files/home/bann_{$obj->mBannerHome.fil_image}" height="373" width="612" alt="">
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="ofertas">
  <div>
    <div class="ultimas">
      <h1>&Uacute;ltimas<span> Ofertas</span></h1>
      <h2>Estas son las ofertas m�s recientes que las empresas tienen para t�!</h2>
      <div class="clear espacio_en_blancogrande"></div>
      <ul id="slider1">
        {section name=k loop=$obj->cOfertas step=4}
        <li>
          {section name=a loop=$obj->cOfertas start=$smarty.section.k.index step=1 max=4}
          <div class="oferta">
            <h1>{$obj->cOfertas[a].fecha}</h1>
            <span></span>
            <h2>{$obj->cOfertas[a].txt_nom_comercial}<span>{$obj->cOfertas[a].txt_cargo}</span></h2>
            <span></span>
            <p>{$obj->cOfertas[a].descripcion}</p>
            <span></span>
            <a class="popup" href="#oferta-detalle2" onclick="DetalleOfertaH( '{$obj->cOfertas[a].id}' );">Aplicar a la oferta</a>
          </div>
          {/section}
        </li>
        {/section}
      </ul>
    </div>
    <div class="cargos">
      <h1>&Aacute;reas con mayor <span>Oferta</span></h1>
      <div class="cont_slider2">
        <ul id="slider2">
          {section name=k loop=$obj->cSectorOferta step=5}
          <li>
            {section name=a loop=$obj->cSectorOferta start=$smarty.section.k.index step=1 max=5}
            <div class="cargo">
              <h1>{$obj->cSectorOferta[a].num}<span>ofertas</span></h1>
              <a href="{$obj->cOfPubli}&area={$obj->cSectorOferta[a].id}">{$obj->cSectorOferta[a].txt_nombre}</a>
            </div>
            {/section}
          </li>
          {/section}
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="destacados">
  <div>
    <div><!-- 1 -->
      <h1>Noticias<span>�ltimas noticias</span></h1>
      <ul id="noticias_home">
        {section name=k loop=$obj->cData max=3}
        <li>
          <img src="{$obj->mSiteUrl}/cms/files/articulos/thum_img_{$obj->cData[k].fil_image}" height="218" width="191" alt="">
          <h1>{$obj->cData[k].txt_titulo}</h1>
          <h2>{$obj->cData[k].fec_creasi}</h2>
          <p>{$obj->cData[k].descripcion|strip_tags}</p>
          <a class="ir-noticias" href="index.php?base&seccion=consejos">Ir a noticias</a>
          <a class="popup" href="#oferta-detalle" onclick="DetalleConsejo( '{$obj->cData[k].id}' );">M&aacute;s Informaci&oacute;n</a>
          </li>
        {/section}
      </ul>
    </div>

    <div>
      <h1>Ciudades<span>con Mayor Oferta</span></h1>
      <p>{$obj->cCity.txt_descripcion}</p>
      <ul>
        {section name=k loop=$obj->cCiudadOferta}
        <li>
          <a href="{$obj->cOfPubli}&id_ciudad={$obj->cCiudadOferta[k].id}">{$obj->cCiudadOferta[k].txt_nombre}</a>
          <span>{$obj->cCiudadOferta[k].num}</span>
        </li>
        {/section}
      </ul>
    </div>

    <div>
      <h1>Responde<span>nuestra encuesta</span></h1>
      <h2>�{$obj->cEncuesta.txt_pregunta}?</h2>
      <form action="" class="encuesta">
        <input type="hidden" id="id_pregunta" value="{$obj->cEncuesta.id}" />
        {section name=k loop=$obj->cEncuesta.opciones}
        <p>
          <input type="radio" name="id_opcion" id="id_opcion_{$smarty.section.k.index}" value="{$obj->cEncuesta.opciones[k].id}"  class="cform" {if $smarty.section.k.index==0}checked="checked"{/if}>
          <label for="id_opcion_{$smarty.section.k.index}" class="lblr">{$obj->cEncuesta.opciones[k].txt_respuesta}</label>
        </p>
        {/section}
        <div class="clear"></div>
        <a class="popup" href="#oferta-detalle" onclick="VotarEncuesta();">Votar</a>
      </form>
    </div>

  </div>
</div>
<div class="socios">
  <div>
    <div>
      <h1>Empresas<span>destacadas</span></h1>
        <ul id="scrollerlogos">
          {section name=k loop=$obj->cDesta}
          <li>
            <a href="{$obj->cDescrip}&id_empresa={$obj->cDesta[k].id}" target="_blank"><img src="{$obj->mSiteUrl}/cms/files/empresas/emp_{$obj->cDesta[k].fil_logo}" height="134" width="134"></a>
          </li>
          {/section}
        </ul>
      </div>

      <div>

        <!--plugin social-->

        <div class="plugin_facebook">
          <!--<iframe src="//www.facebook.com/plugins/facepile.php?app_id&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FZona-Franca-de-Occidente%2F476953895668855&amp;action=Comma+separated+list+of+action+of+action+types&amp;width=220&amp;max_rows=1&amp;colorscheme=light&amp;size=large&amp;show_count=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:220px;" allowTransparency="true"></iframe>-->
          <div class="fb-like-box" data-href="https://www.facebook.com/pages/Zona-Franca-de-Occidente/476953895668855?ref=ts&amp;fref=ts" data-height="190px" width="240px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>
        <!--Finplugin social-->



        <a href="{$obj->cContac.txt_twitter}" target="_blank"></a><!-- Twitter -->
        <a href="{$obj->cContac.txt_facebook}" target="_blank"></a><!-- Facebook -->
      </div>


    </div>
  </div>


<!-- POPUP OFERTAS -->
<div id="oferta-detalle" style="display: none;">
  <div class="cont_emergente" id="detalle_conse">
    <h1 class="centrar_contenido">Lorem Ipsum Dolor Sit Amet</h1>
    <div class="clear"></div>
    <div class="sombra_division"></div>
    <div class="row-fluid">
      <div class="span4 noticias-detalle">
        <img src="http://i.istockimg.com/file_thumbview_approve/14377944/2/stock-photo-14377944-four-business-people-with-puzzle.jpg" alt="">
        <div class="clear espacio_en_blanco"></div>
        <!--iframe width="200" height="170" src="http://www.youtube.com/embed/pN2Lkzqe8e0" frameborder="0" allowfullscreen></iframe-->
      </div>
      <div class="span8">
        <h2>Lorem Ipsum Dolor</h2>
        <div class="clear espacio_en_blanco"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis ornare ipsum. Sed lacinia interdum laoreet. Pellentesque et ornare mauris. Donec commodo condimentum interdum. Nunc sit amet orci vel eros facilisis placerat. Sed vulputate aliquam libero, quis adipiscing nisi placerat eu. Aenean erat ipsum, cursus sed eleifend non, fringilla ac ante. Pellentesque vitae pellentesque nunc. </p>
      </div>
    </div>
  </div>
</div>