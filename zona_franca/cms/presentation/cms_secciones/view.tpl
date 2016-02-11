{load_presentation_object filename="cms_secciones/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Secciones</h1>
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
  <h1>Secciones</h1>
  <br>
  <div class="class_frm frmcms_secciones">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="cms_secciones" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    <input type="hidden" class="field_frm" id="txt_seccion" value="contenido" />

    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}

    <div class="span5">
      <label class="label">Nombre *</label><br />
      <input type="text" class="field_frm" id="txt_nombre" name="txt_nombre" value="{$obj->mData.txt_nombre}" placeholder="Nombre" title="Digite el nombre" />
    </div>

    <div class="span5">
      <label class="label">Padre</label><br />
      <select name="id_padre" id="id_padre" class="field_frm" >
        <option value="">Seleccione</option>
        {section name=k loop=$obj->cPadre}
          {if $obj->cPadre[k].id==$obj->mData.id_padre}
        <option value="{$obj->cPadre[k].id}" selected="selected">{$obj->cPadre[k].txt_nombre}</option>
          {else}
        <option value="{$obj->cPadre[k].id}">{$obj->cPadre[k].txt_nombre}</option>
          {/if}
        {/section}
      </select>
    </div>

    {if $obj->mData.id=="12"}
    <div class="span5">
      <label class="label">Descripcion *</label><br />
      <textarea class="field_frm" id="txt_descripcion" name="txt_descripcion" rows="3" title="Digite la descripcion">{$obj->mData.txt_descripcion}</textarea>
    </div>
    {/if}

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_secciones">Guardar</a>
    </div>
  </div>
</div>
{/if}
</div>
