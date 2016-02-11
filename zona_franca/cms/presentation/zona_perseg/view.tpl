{load_presentation_object filename="zona_perseg/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>zona_perseg</h1>
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
  <h1>zona_perseg</h1>
  <br>
  <div class="class_frm frmzona_perseg">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="zona_perseg" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}

    <div class="span5">
      <label class="label">Nombre</label><br />
      <p>{$obj->mData.persona.txt_prim_nom} {$obj->mData.persona.txt_prim_apell}</p>
    </div>

    <div class="span5">
      <label class="label">Documento</label><br />
      <p>{$obj->mData.persona.num_identifica}</p>
    </div>

    <div class="span5">
      <label class="label">¿Ya conseguiste Trabajo?</label><br />
      <p>{$obj->mData.con_trab}</p>
    </div>

    <div class="span5">
      <label class="label">¿Sigues interesado en conseguir trabajo?</label><br />
      <p>{$obj->mData.int_trab}</p>
    </div>
        
    <div class="span5">
      <label class="label">Califique su experiencia de búsqueda de empleo a través de Empleo en Marcha</label><br />
      <p>{$obj->mData.cal_exp}</p>
    </div>

    <div class="span5">
      <label class="label">¿El empleo que consiguió lo hizo a través de Empleo en Marcha?</label><br />
      <p>{$obj->mData.atra_emp}</p>
    </div>

    <div class="span5">
      <label class="label">¿Cómo consiguió el trabajo que tiene actualmente?</label><br />
      <p>{$obj->mData.como_tra}</p>
    </div>
    
    <div class="span5">
      <label class="label">¿Cuánto tiempo se demoró consiguiendo trabajo a través del portal?</label><br />
      <p>{$obj->mData.demo_tra}</p>
    </div>

    <div class="span5">
      <label class="label">Califique su experiencia de búsqueda de empleo a través de Empleo en Marcha</label><br />
      <p>{$obj->mData.expe_emp}</p>
    </div>
        
    <div class="span5">
      <label class="label">¿Recomendaría el Portal de Empleo en Marcha para la obtención de empleo?</label><br />
      <p>{$obj->mData.reco_emp}</p>
    </div>
  </div>
</div>
{/if}
</div>
      