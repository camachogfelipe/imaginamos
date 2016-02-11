{load_presentation_object filename="cms_contacto/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Contacto</h1>
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
  <h1>Contacto</h1>
  <br>
  <div class="class_frm frmcms_contacto">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="cms_contacto" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mSiteUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}

    <div class="span5">
      <label class="label">Telefono *</label><br />
      <input type="text" class="field_frm" id="txt_telefono" name="txt_telefono" value="{$obj->mData.txt_telefono}" placeholder="Telefono" title="Digite el telefono" />
    </div>

    <div class="span5">
      <label class="label">Email *</label><br />
      <input type="text" class="field_frm" id="txt_email" name="txt_email" value="{$obj->mData.txt_email}" placeholder="Email" title="Digite el email" />
    </div>

    <div class="span5">
      <label class="label">Twitter *</label><br />
      <input type="text" class="field_frm" id="txt_twitter" name="txt_twitter" value="{$obj->mData.txt_twitter}" placeholder="Twitter" title="Digite el twitter" />
    </div>

    <div class="span5">
      <label class="label">Facebook *</label><br />
      <input type="text" class="field_frm" id="txt_facebook" name="txt_facebook" value="{$obj->mData.txt_facebook}" placeholder="Facebook" title="Digite el facebook" />
    </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_contacto">Guardar</a>
    </div>
  </div>
</div>
{/if}
</div>
