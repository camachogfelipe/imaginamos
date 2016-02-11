{load_presentation_object filename="zona_empresas/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->cDesta}" class="btn"><i style="margin: 2px 0 0;" class="icon-star"></i> Destacados</a> 
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>Empresas</h1>
  <br>
  <a href="{$obj->mDescarga}">Descargar</a>
  {$obj->mList}
</div>
{else}

{literal}
<script type="text/javascript">
  $(function(){
    $('#tabs').tabs();
  });
</script>
<style>
#tabs {}
#tabs li {
width: auto;
height: 30px;
padding: 0 10px;
line-height: 25px;}
#tabs li a {
margin: 0 auto;
padding: 0;}

#tabs-1, #tabs-2, #tabs-3, #tabs-4, #tabs-5, #tabs-6, #tabs-7, #tabs-8 { border: 1px solid #ddd;
padding: 20px 0 20px;
	background: #F3F1F1;
	background: -moz-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -webkit-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -o-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: -ms-linear-gradient(90deg, #FDFCFC 30%, #F3F1F1 70%);
	background: linear-gradient(180deg, #FDFCFC 30%, #F3F1F1 70%);}
	
	.icon-pencil { margin: 2px 0 0;}
	
</style>
{/literal}



<div class="">
  <div class="btn-group">
    <a href="{$obj->mThisUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="formContainer">
  <h1>Empresas</h1>
  <br>

  <!--Start Horizontal Tabs-->
  <div id="tabs">
    <ul>
      <li><a href="#tabs-1"><i class="icon-pencil"></i> Empresa</a></li>
      <li><a href="#tabs-2"><i class="icon-pencil"></i> Contacto</a></li>
    </ul>

    <div id="tabs-1">
      
        <div class="span5">
          <label class="label">Nit</label>
          <p>{$obj->mData.txt_nit}</p>
					
        </div>

        <div class="span5">
          <label class="label">Nombre comercial</label>
          <p>{$obj->mData.txt_nom_comercial}</p>
        </div>

        <div class="span5">
          <label class="label">Razon social</label>
          <p>{$obj->mData.txt_razon_social}</p>
        </div>

        <div class="span5">
          <label class="label">Ramo</label>
          <p>{$obj->mData.id_ramo}</p>
        </div>

        <div class="span5">
          <label class="label">Otro ramo u actividad</label>
          <p>{$obj->mData.txt_ramo_2}</p>
        </div>

        <div class="span5">
          <label class="label">Direccion</label>
          <p>{$obj->mData.txt_direccion}</p>
        </div>

        <div class="span5">
          <label class="label">Departamento</label>
          <p>{$obj->mData.depto}</p>
        </div>

        <div class="span5">
          <label class="label">Ciudad</label>
          <p>{$obj->mData.city}</p>
        </div>

        <div class="span5">
          <label class="label">Website</label>
          <p>{$obj->mData.txt_website}</p>
        </div>

        

        <div class="span5">
          <label class="label">Logo</label>
          {if $obj->mData.fil_logo!=""}
          <img src="{$obj->mSiteUrl}/files/empresas/thum_{$obj->mData.fil_logo}" class="img-rounded"><br />
          {/if}
        </div>
								<div class="span5">
          <label class="label">Descripcion</label>
          <p>{$obj->mData.txt_descripcion}</p>
        </div>
     <div style="clear:both;"></div>
    </div>

    <div id="tabs-2">
    
        <div class="span5">
          <label class="label">Primer nombre</label>
          <p>{$obj->cContac.txt_prim_nom}</p>
        </div>

        <div class="span5">
          <label class="label">Segundo nombre</label>
          <p>{$obj->cContac.txt_seg_nom}</p>
        </div>

        <div class="span5">
          <label class="label">Primer apellido</label>
          <p>{$obj->cContac.txt_prim_apell}</p>
        </div>

        <div class="span5">
          <label class="label">Segundo apellido</label>
          <p>{$obj->cContac.txt_seg_apell}</p>
        </div>

        <div class="span5">
          <label class="label">Genero</label>
          <p>{$obj->cContac.nom_genero}</p>
        </div>

        <div class="span5">
          <label class="label">Fecha nacimiento</label>
          <p>{$obj->cContac.fec_nacimiento}</p>
        </div>

        <div class="span5">
          <label class="label">Cargo</label>
          <p>{$obj->cContac.txt_cargo}</p>
        </div>

        <div class="span5">
          <label class="label">Telefono</label>
          <p>{$obj->cContac.txt_telefono}</p>
        </div>
								 <div style="clear:both;"></div>
      </div>
     

  </div>
</div>
<!--End Horizontal Tabs-->


</div>


{/if}
</div>