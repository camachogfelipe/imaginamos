{load_presentation_object filename="zona_empresas_desta/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->cBack}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    {if $obj->cNumDesta < 20}
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
    {/if}
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Empresas destacadas</h1>
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
  <h1>Empresas destacadas</h1>
  <br>
  <div class="class_frm frmzona_empresas_desta">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="zona_empresas_desta" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}

    <div class="span5">
      <label class="label">Empresa *</label><br />
      <select name="id_empresa" id="id_empresa" class="field_frm" title="Seleccione la empresa">
        <option value="">Seleccione</option>
        {section name=k loop=$obj->cEmpresas}
          {if $obj->cEmpresas[k].id==$obj->mData.id_empresa}
        <option value="{$obj->cEmpresas[k].id}" selected="selected">{$obj->cEmpresas[k].txt_nom_comercial}</option>
          {else}
        <option value="{$obj->cEmpresas[k].id}">{$obj->cEmpresas[k].txt_nom_comercial}</option>
          {/if}
        {/section}
      </select>
    </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmzona_empresas_desta">Guardar</a>
    </div>
  </div>
</div>
{/if}
</div>
