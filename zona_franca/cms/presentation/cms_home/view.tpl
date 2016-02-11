{load_presentation_object filename="cms_home/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>cms_home</h1>
  <br>
  {$obj->mList}
</div>
{else}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid formContainer">
  <h1>Banner home</h1>
  <br>
  <div class="class_frm frmcms_home">
    <form name="frm_ticket" id="frm_ticket" method="post" enctype="multipart/form-data">
      <input type="hidden" class="field_frm" name="myForm" id="myForm" value="frm_ticket" />
      <input type="hidden" class="field_frm" name="modo" id="modo" value="save" />
      <input type="hidden" class="field_frm" name="redirect" id="redirect" value="{$obj->mThisUrl}" />
      {if $obj->mData.id!=""}
      <input type="hidden" class="field_frm" name="id" id="id" value="{$obj->mData.id}" />
      {/if}

      <div class="span5">
        <label class="label">Titulo *</label><br />
        <input type="text" class="field_frm" id="txt_titulo" name="txt_titulo" value="{$obj->mData.txt_titulo}" placeholder="Titulo" title="Digite el titulo" />
      </div>
        
      <div class="span5">
        <label class="label">Subtitulo *</label><br />
        <input type="text" class="field_frm" id="txt_subtitulo" name="txt_subtitulo" value="{$obj->mData.txt_subtitulo}" placeholder="Subtitulo" title="Digite el subtitulo" />
      </div>
        
      <div class="span5">
        <label class="label">Imagen *</label><br />
        {if $obj->mData.fil_image!=""}
        <img src="{$obj->mSiteUrl}/files/home/thum_{$obj->mData.fil_image}" class="img-rounded">
        {/if}
        <input type="file" class="field_frm" id="fil_image" name="fil_image" value="" />
      </div>
        
      <div class="span10">
        <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_home">Guardar</a>
      </div>
    </form>
  </div>
</div>
{/if}
</div>
      