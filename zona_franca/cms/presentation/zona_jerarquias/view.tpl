{load_presentation_object filename="zona_jerarquias/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>zona_jerarquias</h1>
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
  <h1>zona_jerarquias</h1>
  <br>
  <div class="class_frm frmzona_jerarquias">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="zona_jerarquias" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}

    <div class="span5">
      <label class="label">txt_nombre *</label><br />
      <input type="text" class="field_frm" id="txt_nombre" name="txt_nombre" value="{$obj->mData.txt_nombre}" placeholder="txt_nombre" title="Digite el txt_nombre" />
    </div>
        
    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmzona_jerarquias">Guardar</a>
    </div>
  </div>
</div>
{/if}
</div>
      