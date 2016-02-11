{load_presentation_object filename="cms_secciones_articulo/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->cBack}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Secciones articulo</h1>
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
  <h1>Secciones articulo</h1>
  <br>
  <div class="class_frm frmcms_secciones_articulo">
    <form name="frm_ticket" id="frm_ticket" method="post" enctype="multipart/form-data">
      <input type="hidden" class="field_frm" name="myForm" id="myForm" value="frm_ticket" />
      <input type="hidden" class="field_frm" name="modo" id="modo" value="save" />
      <input type="hidden" class="field_frm" name="redirect" id="redirect" value="{$obj->mThisUrl}" />
      <input type="hidden" class="field_frm" name="fec_creasi" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
      <input type="hidden" class="field_frm" name="id_seccion" id="id_seccion" value="{$obj->mData.id_seccion}" />

      {if $obj->mData.id!=""}
      <input type="hidden" class="field_frm" name="id_articulo" id="id_articulo" value="{$obj->mData.id}" />
      {/if}

      <div class="span10">
        <label class="label">Titulo *</label>
        <input type="text" class="field_frm input-xxlarge" id="txt_titulo" name="txt_titulo" value="{$obj->mData.txt_titulo}" placeholder="Titulo" title="Digite el titulo" />
      </div>

      <div class="span10">
        <label class="label">Descripcion *</label>
        <textarea class="field_frm input-xxlarge" id="txt_descripcion" name="txt_descripcion" rows="3" title="Digite el descripcion">{$obj->mData.txt_descripcion}</textarea>
      </div>

      <div class="span10">
        <label class="label">Imagen *</label>
        {if $obj->mData.fil_image!=""}
        <img src="{$obj->mSiteUrl}/files/secart/thum_{$obj->mData.fil_image}" class="img-rounded">
        {/if}
        <input type="file" class="field_frm" id="fil_image" name="fil_image" value="" />
      </div>

      {*<div class="span5">
        <label class="label">Posicion</label>
        <input type="text" class="field_frm" id="ind_posicion" name="ind_posicion" value="{$obj->mData.ind_posicion}" placeholder="ind_posicion"  />
      </div>*}

      <div class="span10">
        <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_secciones_articulo"><i class="icon-ok"></i> Guardar</a>
      </div>
    </form>
  </div>
</div>
{/if}
</div>
