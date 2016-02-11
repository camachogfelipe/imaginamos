{load_presentation_object filename="directorio_empresas" assign="obj"}

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
        <div class="cont_titulos-2 inline">
          <h1 class="inline">Directorio <span>de Empresas</span></h1>
          <div class="clear"></div>
          <h2 class="inline">{$obj->cTitulo}</h2>
          <div class="clear espacio_en_blancopeque"></div>
          <p class="inline">{$obj->cSubTitulo}</p>
          <div class="sombra_division"></div>
        </div>
        <div class="row">
          <div class="span8 slider_directorio">
            <ul class="paginador centrado">
              <!-- <li><a href="#" class="control">&lt;</a></li>-->
              <li><a href="{$obj->mThisUrl}&orden=a" {if $obj->mOrden=='a'}class="active"{/if}>a</a></li>
              <li><a href="{$obj->mThisUrl}&orden=b" {if $obj->mOrden=='b'}class="active"{/if}>b</a></li>
              <li><a href="{$obj->mThisUrl}&orden=c" {if $obj->mOrden=='c'}class="active"{/if}>c</a></li>
              <li><a href="{$obj->mThisUrl}&orden=d" {if $obj->mOrden=='d'}class="active"{/if}>d</a></li>
              <li><a href="{$obj->mThisUrl}&orden=e" {if $obj->mOrden=='e'}class="active"{/if}>e</a></li>
              <li><a href="{$obj->mThisUrl}&orden=f" {if $obj->mOrden=='f'}class="active"{/if}>f</a></li>
              <li><a href="{$obj->mThisUrl}&orden=g" {if $obj->mOrden=='g'}class="active"{/if}>g</a></li>
              <li><a href="{$obj->mThisUrl}&orden=h" {if $obj->mOrden=='h'}class="active"{/if}>h</a></li>
              <li><a href="{$obj->mThisUrl}&orden=i" {if $obj->mOrden=='i'}class="active"{/if}>i</a></li>
              <li><a href="{$obj->mThisUrl}&orden=j" {if $obj->mOrden=='j'}class="active"{/if}>j</a></li>
              <li><a href="{$obj->mThisUrl}&orden=k" {if $obj->mOrden=='k'}class="active"{/if}>k</a></li>
              <li><a href="{$obj->mThisUrl}&orden=l" {if $obj->mOrden=='l'}class="active"{/if}>l</a></li>
              <li><a href="{$obj->mThisUrl}&orden=m" {if $obj->mOrden=='m'}class="active"{/if}>m</a></li>
              <li><a href="{$obj->mThisUrl}&orden=n" {if $obj->mOrden=='n'}class="active"{/if}>n</a></li>
              <li><a href="{$obj->mThisUrl}&orden=ñ" {if $obj->mOrden=='ñ'}class="active"{/if}>ñ</a></li>
              <li><a href="{$obj->mThisUrl}&orden=o" {if $obj->mOrden=='o'}class="active"{/if}>o</a></li>
              <li><a href="{$obj->mThisUrl}&orden=p" {if $obj->mOrden=='p'}class="active"{/if}>p</a></li>
              <li><a href="{$obj->mThisUrl}&orden=q" {if $obj->mOrden=='q'}class="active"{/if}>q</a></li>
              <li><a href="{$obj->mThisUrl}&orden=r" {if $obj->mOrden=='r'}class="active"{/if}>r</a></li>
              <li><a href="{$obj->mThisUrl}&orden=s" {if $obj->mOrden=='s'}class="active"{/if}>s</a></li>
              <li><a href="{$obj->mThisUrl}&orden=t" {if $obj->mOrden=='t'}class="active"{/if}>t</a></li>
              <li><a href="{$obj->mThisUrl}&orden=u" {if $obj->mOrden=='u'}class="active"{/if}>u</a></li>
              <li><a href="{$obj->mThisUrl}&orden=v" {if $obj->mOrden=='v'}class="active"{/if}>v</a></li>
              <li><a href="{$obj->mThisUrl}&orden=w" {if $obj->mOrden=='w'}class="active"{/if}>w</a></li>
              <li><a href="{$obj->mThisUrl}&orden=x" {if $obj->mOrden=='x'}class="active"{/if}>x</a></li>
              <li><a href="{$obj->mThisUrl}&orden=y" {if $obj->mOrden=='y'}class="active"{/if}>y</a></li>
              <li><a href="{$obj->mThisUrl}&orden=z" {if $obj->mOrden=='z'}class="active"{/if}>z</a></li>
              <!-- <li><a href="#" class="control">&gt;</a></li>-->
            </ul>
            <div class="clear espacio_en_blanco"></div>
            <ul class="slider_directorio">
              {section name=k loop=$obj->cData step=28}
                <li>
                  <div class="campo-directorio">
                    <div class="row-fluid">
                      {section name=x loop=$obj->cData start=$smarty.section.k.index step=1 max=28}

                        
                          <a style="width: 143px; height: 170px; float: left; margin: 0 10px 10px 0;" href="{$obj->cDescrip}&id_empresa={$obj->cData[x].id}" class="enlace-directorio" >
                            <div class="logo-directorio"> <img style="background: none; border: none;" src="{$obj->mSiteUrl}/cms/files/empresas/emp_{$obj->cData[x].fil_logo}" alt="logo {$obj->cData[x].txt_nom_comercial}"> </div>
                            <p class="centrar_contenido">{$obj->cData[x].txt_nom_comercial}</p>
                            <div class="clear"></div>
                          </a>

                      {/section}
                    </div>
                  </div>
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

{literal}

<script>
  
  $(window).load(function() {

    $(".logo-directorio img").each(function() {
          var alto_papa = parseInt($(this).parent(".logo-directorio").height());
          var alto_this = parseInt($(this).height());
          //console.log(alto_papa);
          console.log(alto_this);

          if( alto_papa > alto_this ){

            $(this).css({
                 position:'absolute',
                 top: (alto_papa - $(this).outerHeight())/2,
            });

          } else{
            $(this).css({
                 height: 105 ,
                 position:'absolute',
                 top: 0
            });
          }


    });

  });
  
  

</script>
<!-- contenedor_internas -->
{/literal}