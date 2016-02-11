{load_presentation_object filename="cms_banner/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>cms_banner</h1>
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
  <h1>cms_banner</h1>
  <br>
  <div class="class_frm frmcms_banner">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="cms_banner" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}

    <div class="span5">
      <label class="label">id_seccion *</label><br />
      <input type="text" class="field_frm" id="id_seccion" name="id_seccion" value="{$obj->mData.id_seccion}" placeholder="id_seccion" title="Digite el id_seccion" />
    </div>
        
    <div class="span5">
      <label class="label">txt_titulo *</label><br />
      <input type="text" class="field_frm" id="txt_titulo" name="txt_titulo" value="{$obj->mData.txt_titulo}" placeholder="txt_titulo" title="Digite el txt_titulo" />
    </div>
        
    <div class="span5">
      <label class="label">txt_descripcion *</label><br />
      <input type="text" class="field_frm" id="txt_descripcion" name="txt_descripcion" value="{$obj->mData.txt_descripcion}" placeholder="txt_descripcion" title="Digite el txt_descripcion" />
    </div>
        
    <div class="span5">
      <label class="label">fil_image *</label><br />
      <input type="text" class="field_frm" id="fil_image" name="fil_image" value="{$obj->mData.fil_image}" placeholder="fil_image" title="Digite el fil_image" />
    </div>
        
    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_banner">Guardar</a>
    </div>
  </div>
</div>
{/if}
</div>
      