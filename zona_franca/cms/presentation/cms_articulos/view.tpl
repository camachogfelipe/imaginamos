{load_presentation_object filename="cms_articulos/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Articulos</h1>
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
  <h1>Articulos</h1>
  <br>
  <div class="class_frm frmcms_articulos">
    <form name="frm_ticket" id="frm_ticket" method="post" enctype="multipart/form-data">
      <input type="hidden" class="field_frm" name="myForm" id="myForm" value="frm_ticket" />
      <input type="hidden" class="field_frm" name="modo" id="modo" value="save" />
      <input type="hidden" class="field_frm" name="redirect" id="redirect" value="{$obj->mThisUrl}" />
      <input type="hidden" class="field_frm" name="fec_creasi" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
      {if $obj->mData.id!=""}
      <input type="hidden" class="field_frm" name="id" id="id" value="{$obj->mData.id}" />
      {/if}

      <div class="span5">
        <label class="label">Tipo *</label>
        <select name="id_tipo" id="id_tipo" class="field_frm" title="Seleccione el modulo">
          <option value="">Seleccione</option>
          {section name=k loop=$obj->cTipo}
            {if $obj->cTipo[k].id==$obj->mData.id_tipo}
              <option value="{$obj->cTipo[k].id}" selected="selected">{$obj->cTipo[k].txt_nombre}</option>
            {else}
              <option value="{$obj->cTipo[k].id}">{$obj->cTipo[k].txt_nombre}</option>
            {/if}
          {/section}
        </select>
      </div>

      <div class="span5">
        <label class="label">Titulo *</label>
        <input type="text" class="field_frm" id="txt_titulo" name="txt_titulo" value="{$obj->mData.txt_titulo}" placeholder="txt_titulo" title="Digite el txt_titulo" />
      </div>

      <div class="span5">
        <label class="label">Imagen *</label>
        {if $obj->mData.fil_image!=""}
        <img src="{$obj->mSiteUrl}/files/articulos/thum_img_{$obj->mData.fil_image}" class="img-rounded"><br />
        {/if}
        <input type="file" class="field_frm" id="fil_image" name="fil_image" value="" />
      </div>

      <div class="span5">
        <label class="label">Video *</label>
        <input type="text" class="field_frm" id="fil_video" name="fil_video" value="{$obj->mData.fil_video}" placeholder="Video" />
      </div>

      <div class="span10">
        <label class="label">Descripcion *</label>
        <textarea class="field_frm input-xxlarge" id="txt_descripcion" name="txt_descripcion" rows="3" title="Digite el txt_descripcion">{$obj->mData.txt_descripcion}</textarea>
      </div>

      <div class="span10">
        <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_articulos"><i class="icon-ok"></i> Guardar</a>
      </div>
    </form>
  </div>
</div>
{/if}
</div>
