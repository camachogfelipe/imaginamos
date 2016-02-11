{load_presentation_object filename="buscador_columna" assign="obj"}



<div class="cont_izqgris bg_grisobscuro height970">
  <div class="contcontenidos_izqgris">
    <h3>Filtrar b�squeda de empleo por</h3>
    <div class="clear espacio_en_blanco"></div>
    <form action="{$obj->cOfPubli}" name="registro" id="registro" method="post" >
      <h2 class="acc_trigger"><a href="#">Sector</a></h2>
      <div class="acc_container">
        <div class="block">
          <div class="opciones">
            {section name=k loop=$obj->cAreas max=4}
            <p>
              <input type="radio" name="area" value="{$obj->cAreas[k].id}" id="area_{$smarty.section.k.index}" {*class="cform"*} {if $obj->cAreas[k].id==$obj->cIdArea}checked="checked"{/if} >
              <label for="area_{$smarty.section.k.index}" class="lblr">{$obj->cAreas[k].txt_nombre} <span>({$obj->cAreas[k].num})</span></label>
            </p>
            {/section}

          {if $obj->cContador.area<=5}
            <a href="javascript:void(0)" onClick="limpiar('area')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          {/if}
            
          </div>
          {if $obj->cContador.area>=5}
          <div class="mas-opciones-1">
            {section name=k start=4 loop=$obj->cAreas}
            <p style="width: 100%; margin: 0; padding: 0;">
              <input type="radio" name="area" value="{$obj->cAreas[k].id}" id="area_{$smarty.section.k.index}" {*class="cform"*} {if $obj->cAreas[k].id==$obj->cIdArea}checked="checked"{/if}>
              <label for="area_{$smarty.section.k.index}" class="lblr">{$obj->cAreas[k].txt_nombre} <span>({$obj->cAreas[k].num})</span></label>
            </p>
            {/section}
          </div>
            <a href="javascript:void(0)" onClick="limpiar('area')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <div class="clear"></div>
          <a class="float_right ampliar-opciones-1" href="#">M�s opciones</a>
          {/if}
        </div>
      </div>
      <h2 class="acc_trigger"><a href="#">Lugar de trabajo</a></h2>
      <div class="acc_container">
        <div class="block">
          <div class="opciones">
            {section name=k loop=$obj->cLugares max=4}
            <p>
              <input type="radio" name="lugar" value="{$obj->cLugares[k].id}" id="lugar_{$smarty.section.k.index}" {*class="cform"*} {if $obj->cLugares[k].id==$obj->cIdLugar}checked="checked"{/if}>
              <label for="lugar_{$smarty.section.k.index}" class="lblr">{$obj->cLugares[k].txt_nombre} <span>({$obj->cLugares[k].num})</span></label>
            </p>
            {/section}

          {if $obj->cContador.lugar<=5}
            <a href="javascript:void(0)" onClick="limpiar('lugar')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          {/if}
            
          </div>
          {if $obj->cContador.lugar>=5}
          <div class="mas-opciones-2">
            {section name=k start=4 loop=$obj->cLugares}
              <p style="width: 100%; margin: 0; padding: 0;">
              <input type="radio" name="lugar" value="{$obj->cLugares[k].id}" id="lugar_{$smarty.section.k.index}" {*class="cform"*} {if $obj->cLugares[k].id==$obj->cIdLugar}checked="checked"{/if}>
              <label for="lugar_{$smarty.section.k.index}" class="lblr">{$obj->cLugares[k].txt_nombre} <span>({$obj->cLugares[k].num})</span></label>
            </p>
            {/section}
          </div>
            <a href="javascript:void(0)" onClick="limpiar('lugar')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <div class="clear"></div>
          <a class="float_right ampliar-opciones-2" href="#">M�s opciones</a>
          {/if}
        </div>
      </div>
      <h2 class="acc_trigger"><a href="#">Jerarqu�a</a></h2>
      <div class="acc_container">
        <div class="block">
          <div class="opciones">
            {section name=k loop=$obj->cJerar}
            <p>
              <input type="radio" name="jerar" value="{$obj->cJerar[k].id}" id="jerar_{$smarty.section.k.index}" {*class="cform"*} {if $obj->cJerar[k].id==$obj->cIdJerar}checked="checked"{/if}>
              <label for="jerar_{$smarty.section.k.index}" class="lblr">{$obj->cJerar[k].txt_nombre} <span>({$obj->cJerar[k].num})</span></label>
            </p>
            {/section}
            <a href="javascript:void(0)" onClick="limpiar('jerar')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          </div>
        </div>
      </div>
      <h2 class="acc_trigger"><a href="#">Fecha de publicaci�n</a></h2>
      <div class="acc_container">
        <div class="block">
          <div class="opciones">
            <p>
              <input type="radio" name="fecha" value="1" id="fecha_1" {*class="cform"*} {if $obj->cFecha==1}checked="checked"{/if}>
              <label for="fecha_1" class="lblr">�ltimo d�a</label>
            </p>
            <p>
              <input type="radio" name="fecha" value="3" id="fecha_2" {*class="cform"*} {if $obj->cFecha==3}checked="checked"{/if}>
              <label for="fecha_2" class="lblr">�ltimos (3) d�as</label>
            </p>
            <p>
              <input type="radio" name="fecha" value="7" id="fecha_3" {*class="cform"*} {if $obj->cFecha==7}checked="checked"{/if}>
              <label for="fecha_3" class="lblr">�ltimos (7) d�as</label>
            </p>
            <p>
              <input type="radio" name="fecha" value="15" id="fecha_4" {*class="cform"*} {if $obj->cFecha==15}checked="checked"{/if}>
              <label for="fecha_4" class="lblr">�ltimos (15) d�as</label>
            </p>
          </div>
          <div class="mas-opciones-4">
            <p style="width: 100%; margin: 0; padding: 0;">
              <input type="radio" name="fecha" value="30" id="fecha_5" {*class="cform"*} {if $obj->cFecha==30}checked="checked"{/if}>
              <label for="fecha_5" class="lblr">�ltimos (30) d�as</label>
            </p>
            <p style="width: 100%; margin: 0; padding: 0;">
              <input type="radio" name="fecha" value="60" id="fecha_6" {*class="cform"*} {if $obj->cFecha==60}checked="checked"{/if}>
              <label for="fecha_6" class="lblr">�ltimos (60) d�as</label>
            </p>
          </div>
            <a href="javascript:void(0)" onClick="limpiar('fecha')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <div class="clear"></div>
          <a class="float_right ampliar-opciones-4" href="#">M�s opciones</a>
        </div>
      </div>
      <h2 class="acc_trigger"><a href="#">Aspiraci&oacute;n salarial</a></h2>
      <div class="acc_container">
        <div class="block">
          <div class="opciones">
            {section name=k loop=$obj->cAspira max=4}
            <p>
              <input type="radio" name="aspira" value="{$obj->cAspira[k].id}" id="aspira_{$smarty.section.k.index}" {*class="cform"*} {if $obj->cAspira[k].id==$obj->cIdAspira}checked="checked"{/if}>
              <label for="aspira_{$smarty.section.k.index}" class="lblr">{$obj->cAspira[k].txt_nombre} <span>({$obj->cAspira[k].num})</span></label>
            </p>
            {/section}

          {if $obj->cContador.lugar<=5}
            <a href="javascript:void(0)" onClick="limpiar('aspira')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          {/if}
          </div>
          {if $obj->cContador.lugar>=5}
          <div class="mas-opciones-5">
            {section name=k start=4 loop=$obj->cAspira}
              <p style="width: 100%; margin: 0; padding: 0;">
              <input type="radio" name="aspira" value="{$obj->cAspira[k].id}" id="aspira_{$smarty.section.k.index}" {*class="cform"*} {if $obj->cAspira[k].id==$obj->cIdAspira}checked="checked"{/if}>
              <label for="aspira_{$smarty.section.k.index}" class="lblr">{$obj->cAspira[k].txt_nombre} <span>({$obj->cAspira[k].num})</span></label>
            </p>
            {/section}
          </div>
            <a href="javascript:void(0)" onClick="limpiar('aspira')"  style="color: #f55e2d; text-decoration: none;">Anular Selecci�n</a>
          <div class="clear"></div>
          <a class="float_right ampliar-opciones-5" href="#">M�s opciones</a>
          {/if}
        </div>
      </div>
      <div class="campo_buscadorinternas">
        <input class="bt_buscarinternas buscar-columna" type="submit" value="Buscar Empleo" onclick="location.href = 'ofertas_publicadas.php'">
      </div>
    </form>
  </div>
</div>

{literal}
<script type="text/javascript">

  function limpiar(parametro) {

    var inputdefinido = "input[name="+parametro+"]";
    $(inputdefinido).attr('checked',false);

  }

</script>
{/literal}