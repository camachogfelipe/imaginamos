{load_presentation_object filename="menu" assign="obj"}
<div class="cont_header">
  <a class="logo_home" href="{$obj->mSiteUrl}"></a>
  <div class="cont_sliderheader" style="overflow: hidden;">
    <ul id="sliderheader" >
      <li><img src="{$obj->mSiteUrl}/images/slider01.png" height="61" width="167" alt=""></li>
      <li><img src="{$obj->mSiteUrl}/images/slider03.png" height="61" width="167" alt=""></li>
      <li><img src="{$obj->mSiteUrl}/images/slider02.png" height="61" width="167" alt=""></li>
    </ul>
  </div>
  {if $obj->cLoged==0}
  <a href="#zona_segura_empresa" id="bt_zona_segura_empresa" class="fancybox">empresas</a>
  <a href="#zona_segura_usuario" id="bt_zona_segura_usuario" class="fancybox">usuarios</a>
  {else}
  <a href="{$obj->mLogout}" class="cerrar-sesion"><strong>Cerrar sesi&oacute;n</strong></a>
  <span class="divisor">|</span>
  <p class="bienvenida"><a href="{$obj->cUrlZona}">{$obj->cUserName}</a><span><strong>Bienvenido,</strong></span></p>
  {/if}
  <ul class="menu">
    {section name=k loop=$obj->cMenu}
    <li>
      {if $obj->cMenu[k].hijos.0 == ""}
      <a href="{$obj->cMenu[k].url}" class="{if $obj->cSeccion == 'registro_usuario'}activo{/if}">{$obj->cMenu[k].txt_nombre}</a>
      {else}
      <a >{$obj->cMenu[k].txt_nombre}</a>
      <ul class="submenu-2">
        {section name=a loop=$obj->cMenu[k].hijos}
        <li>
          <a href="{$obj->cMenu[k].hijos[a].url}" class="{if $obj->cSeccion == 'buscar-empleo'}activo{/if}" > {$obj->cMenu[k].hijos[a].txt_nombre}</a>
        </li>
        {/section}
      </ul>
      {/if}
    </li>
    {/section}
  </ul>
</div>