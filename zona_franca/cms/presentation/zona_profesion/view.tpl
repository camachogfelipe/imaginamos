{load_presentation_object filename="zona_profesion/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->cBack}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Profesiones</h1>
  <br>
  {$obj->mList}
</div>
{else}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mThisUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid formContainer">
  <h1>Profesiones</h1>
  <br>
  <div class="class_frm frmzona_profesion">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="zona_profesion" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    <input type="hidden" class="field_frm" id="ind_estado" value="1" />
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}

    <div class="span5">
      <label class="label">Nombre *</label>
      <input type="text" class="field_frm" id="txt_nombre" name="txt_nombre" value="{$obj->mData.txt_nombre}" placeholder="Nombre" title="Digite el nombre" />
    </div>

    <div class="span5">
        <label class="label">Area *</label>
        <select name="id_area" id="id_area" class="field_frm" title="Seleccione el �rea">
          <option value="">Seleccione</option>
          {section name=k loop=$obj->cArea}
            <option value="{$obj->cArea[k].id}" {if $obj->cArea[k].id==$obj->mData.id_area}selected="selected"{/if}>{$obj->cArea[k].txt_nombre}</option>
          {/section}
        </select>
      </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmzona_profesion">Guardar</a>
    </div>
  </div>
</div>
{/if}
</div>