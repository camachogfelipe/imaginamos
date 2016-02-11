{load_presentation_object filename="cargos_oferta" assign="obj"}

{include file="buscador-interna.tpl"} 

<!-- buscador_internas -->
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
  <div class="container cont_contenidos">
    <div class="row">
      <div class="span4"> {include file="buscador_columna.tpl"} </div>
      <!-- izquierda -->
      <div class="span8">
        <div class="cont_titulos inline">
          <h1 class="inline">Cargos con <span>mayor oferta</span></h1>
          <div class="clear"></div>
        </div>
        <div class="row">
         <div class="span8 slider_ofertasdescripcion">
            <ul class="slider_ofertasdesc">
              {section name=k loop=$obj->cSectorOferta step=5}
              <li>
                {section name=a loop=$obj->cSectorOferta start=$smarty.section.k.index step=1 max=22}
                <div class="campo_ofertaempleo2">
                  <span class="numero-dv">{$obj->cSectorOferta[a].num}</span> 
                  <span class="campo_ofertaempleocont2"> 
                    <a href="{$obj->cOfPubli}&id_prof={$obj->cSectorOferta[a].id}">{$obj->cSectorOferta[a].txt_nombre}</a> 
                  </span> 
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
<!-- contenedor_internas -->