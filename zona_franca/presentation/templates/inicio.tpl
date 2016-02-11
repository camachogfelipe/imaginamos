{load_presentation_object filename="inicio" assign="obj"}
<div class="container-fluid">
  {section name=a loop=$obj->mList}
    <a href="{$obj->mList[a].link}">
      <div class="span2 btn" style="margin-bottom: 5px;">
        <img width="80" src="{$obj->mList[a].fil_image}" class="marcoDash" />
        <br>
        <label>{$obj->mList[a].txt_nombre}</label>
      </div>
    </a>
  {/section}
</div>