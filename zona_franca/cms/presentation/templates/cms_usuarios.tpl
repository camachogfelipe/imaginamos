{load_presentation_object filename="cms_usuarios" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
    <a href="{$obj->mRoles}" class="btn"><i class="icon-user"></i> Roles</a> 
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Secciones</h1>
  {$obj->mList}
</div>
{else}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mThisUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid formContainer">
  <div class="class_frm frmcms_usuarios">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="myFunct" value="UsuariosCrear" />
    <input type="hidden" class="field_frm" id="clase" value="cms_usuarios" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    <input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}

    <div class="span5">
      <label class="label">Nombre *</label>
      <input type="text" class="field_frm" id="txt_nombre" name="txt_nombre" value="{$obj->mData.txt_nombre}" placeholder="nombre" title="Digite el nombre" />
    </div>

    <div class="span5">
      <label class="label">Email *</label>
      <input type="text" class="field_frm" id="txt_email" name="txt_email" value="{$obj->mData.txt_email}" placeholder="email" title="Digite el email"  />
    </div>

    <div class="span5">
      <label class="label">Rol *</label>
      <select name="id_rol" id="id_rol" class="field_frm" title="Seleccione el rol del usuario">
        <option value="">Seleccione</option>
        {section name=k loop=$obj->mRoles}
          {if $obj->mRoles[k].id==$obj->mData.id_rol}
            <option value="{$obj->mRoles[k].id}" selected="selected">{$obj->mRoles[k].txt_nombre}</option>
          {else}
            <option value="{$obj->mRoles[k].id}">{$obj->mRoles[k].txt_nombre}</option>
          {/if}
        {/section}
      </select>
    </div>

    <div class="span5">
      <label class="label">Clave *</label>
      <input type="password" class="field_frm" id="txt_passwd" name="txt_passwd" value="" title="Digite la clave" />
    </div>

    <div class="span5">
      <label class="label">Confirmacion clave *</label>
      <input type="password" class="field_frm" id="passwd_conf" name="passwd_conf" value="" title="Digite la confirmacion de clave" />
    </div>

    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frmcms_usuarios"><i class="icon-ok"></i> Guardar</a> 
    </div>
  </div>
</div>
{/if}
</div>
