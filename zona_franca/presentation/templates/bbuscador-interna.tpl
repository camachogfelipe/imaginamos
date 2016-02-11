{load_presentation_object filename="buscador_interna" assign="obj"}
<div class="buscador_internas">
  <div class="container cont_buscadorinternas">
    <div class="row">
      <form action="{$obj->cOfPubli}" name="registro" id="registro" method="post">
        <div class="span4 campo_buscadorinternas">
          <input type="text" name="titulo" id="titulo" placeholder="Palabra clave:" value="{$obj->cTitulo}">
        </div>
        <div class="span3 campo_buscadorinternas">
          <select class="select_dd" name="fecha" id="fecha" style="width:100%;">
            <option value="">Fecha de publicaci&oacute;n:</option>
            <option value="1" {if $obj->cFecha=='1'}selected="selected"{/if}>Último día</option>
            <option value="3" {if $obj->cFecha=='3'}selected="selected"{/if}>Últimos (3) días</option>
            <option value="7" {if $obj->cFecha=='7'}selected="selected"{/if}>Últimos (7) días</option>
            <option value="15" {if $obj->cFecha=='15'}selected="selected"{/if}>Últimos (15) días</option>
            <option value="30" {if $obj->cFecha=='30'}selected="selected"{/if}>Últimos (30) días</option>
            <option value="60" {if $obj->cFecha=='60'}selected="selected"{/if}>Últimos (60) días</option>
          </select>
        </div>
        <div class="span3 campo_buscadorinternas">
          <select class="select_dd" name="area" id="area" style="width:100%;">
            <option value="">&Aacute;rea:</option>
            {section name=k loop=$obj->cAreas}
              {if $obj->cAreas[k].id==$obj->cIdArea}
            <option value="{$obj->cAreas[k].id}" selected="selected">{$obj->cAreas[k].txt_nombre}</option>
              {else}
            <option value="{$obj->cAreas[k].id}">{$obj->cAreas[k].txt_nombre}</option>
              {/if}
            {/section}
          </select>
        </div>
        <div class="span2 campo_buscadorinternas">
          <input class="bt_buscarinternas" type="submit" value="Buscar Empleo" onclick="location.href = 'ofertas_publicadas.php'">
        </div>
      </form>
    </div>
  </div>
</div>