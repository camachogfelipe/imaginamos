{load_presentation_object filename="cms_permisos" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mRegres}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  {$obj->mList}
</div>
{else}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mThisUrl}&id={$obj->mIdRol}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid formContainer">
  <div class="class_frm frmcms_permisos">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="cms_permisos" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}
    <input type="hidden" class="field_frm" id="id_rol" value="{$obj->mData.id_rol}" />

    <div class="span5">
      <label class="label">Modulo *</label>
      <select name="id_modulo" id="id_modulo" class="field_frm" title="Seleccione el modulo">
        <option value="">Seleccione</option>
        {section name=k loop=$obj->mModulos}
          {if $obj->mModulos[k].id==$obj->mData.id_modulo}
            <option value="{$obj->mModulos[k].id}" selected="selected">{$obj->mModulos[k].txt_nombre}</option>
          {else}
            <option value="{$obj->mModulos[k].id}">{$obj->mModulos[k].txt_nombre}</option>
          {/if}
        {/section}
      </select>
    </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_permisos"><i class="icon-ok"></i> Guardar</a>
    </div>
  </div>
</div>
{/if}
</div>
