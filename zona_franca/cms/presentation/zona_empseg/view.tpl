{load_presentation_object filename="zona_empseg/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>zona_empseg</h1>
  <br>
  <a href="{$obj->mDescarga}">Descargar</a>
  {$obj->mList}
</div>
{else}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mThisUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid formContainer">
  <h1>zona_empseg</h1>
  <br>
  <div class="class_frm frmzona_empseg">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="zona_empseg" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}

    <div class="span5">
      <label class="label">Empresa</label><br />
      <p>{$obj->mData.empresa.txt_razon_social}</p>
    </div>

    <div class="span5">
      <label class="label">Cargo</label><br />
      <p>{$obj->mData.oferta.txt_cargo}</p>
    </div>

    <div class="span5">
      <label class="label">¿Consiguió empleado para su oferta?</label><br />
      <p>{$obj->mData.con_empl}</p>
    </div>
        
    <div class="span5">
      <label class="label">¿El empleado que consiguió fue a través de Empleo en Marcha?</label><br />
      <p>{$obj->mData.trav_emar}</p>
    </div>

    <div class="span5">
      <label class="label">Cuantos empleados consiguierón empleo?</label><br />
      <p>{$obj->mData.num_emple}</p>
    </div>

    <div class="span5">
      <label class="label">Cédula de los empleados contratados (separadas por comas )</label><br />
      <p>{$obj->mData.num_cedulas}</p>
    </div>

    <div class="span5">
      <label class="label">Califique su experiencia de contratación a través de Empleo en Marcha</label><br />
      <p>{$obj->mData.cali_exp}</p>
    </div>

    <div class="span5">
      <label class="label">En términos de tiempo ¿La obtención de empleado se ajustó en los términos esperados por la empresa?</label><br />
      <p>{$obj->mData.tiem_esp}</p>
    </div>

    <div class="span5">
      <label class="label">¿Cómo consiguió el empleado?</label><br />
      <p>{$obj->mData.como_emp}</p>
    </div>

    <div class="span5">
      <label class="label">¿Dentro del proceso le fue de utilidad a la empresa el servicio otorgado por Empleo en Marcha?</label><br />
      <p>{$obj->mData.util_emar}</p>
    </div>

    <div class="span5">
      <label class="label">¿Por qué está eliminando su oferta?</label><br />
      <p>{$obj->mData.elim_ofe}</p>
    </div>

    <div class="span5">
      <label class="label">Ingrese el resultado de su experiencia con el portal de Empleo en Marcha</label><br />
      <p>{$obj->mData.resu_exp}</p>
    </div>

  </div>
</div>
{/if}
</div>
      