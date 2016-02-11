{load_presentation_object filename="cms_encuesta_opciones/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->cBack}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Opciones encuesta</h1>
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
  <h1>Opciones encuesta</h1>
  <br>
  <div class="class_frm frmcms_encuesta_opciones">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="cms_encuesta_opciones" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    <input type="hidden" class="field_frm" id="id_pregunta" name="id_pregunta" value="{$obj->mData.id_pregunta}" />
    <input type="hidden" class="field_frm" id="ind_estado" value="1" />
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}

    <div class="span5">
      <label class="label">Respuesta *</label><br />
      <input type="text" class="field_frm" id="txt_respuesta" name="txt_respuesta" value="{$obj->mData.txt_respuesta}" placeholder="Respuesta" title="Digite el respuesta" />
    </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_encuesta_opciones">Guardar</a>
    </div>
  </div>
</div>
{/if}
</div>