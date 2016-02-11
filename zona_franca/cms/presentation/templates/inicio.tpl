{load_presentation_object filename="inicio" assign="obj"}
<div class="container-fluid">
	<div class="row padding10">
  {section name=a loop=$obj->mList}
    <a href="{$obj->mList[a].link}" class="span2 btn item-lista" >
        <img src="{$obj->mList[a].fil_image}" />
        <p>{$obj->mList[a].txt_nombre}</p>
   
    </a>
  {/section}
  </div>
</div>