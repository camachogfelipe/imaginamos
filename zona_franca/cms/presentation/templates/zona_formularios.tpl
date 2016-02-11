{load_presentation_object filename="zona_formularios" assign="obj"}
<div class="container-fluid">
  <div class="row-fluid">
    <div class="btn-group">
      <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    </div>
  </div>
  <br />
  <h1>Formularios</h1>
  <br>
  <!--div class="row-fluid"-->
    {section name=a loop=$obj->mList}
      <a href="{$obj->mList[a].link}">
        <div class="span2 btn" style="margin-bottom: 5px;">
          <img width="80" src="{$obj->mList[a].fil_image}" class="marcoDash" />
          <br>
          <label>{$obj->mList[a].txt_nombre}</label>
        </div>
      </a>
    {/section}
  <!--/div-->
</div>