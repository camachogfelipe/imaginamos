
<style>
    .b5{
        color:#333 !important;	
    }
    .t9{
        display:none !important;		
    }
    .t9-active{
        display:none !important;	
    }
    .t10{
        display:none !important;		
    }
    .t10-active{
        display:none !important;	
    }
    .login{
        display:none;	
    }
</style>
<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txSeccion">
            <div class="encabezado-tit">Directorio</div>
            <div class="encabezado-subtit">La guía del músico</div>
        </div>
    </div>
</div>

<div class="contenido">
    <div class="directorio-cont">
        
        <ul class="tabs">
            <li class="<?php echo  $tab_content_active == 'categorias' ? 'active' : null ?> t5"><a href="<?php echo site_url('directorio') ?>">Categoría</a></li>
            <li class="<?php echo $tab_content_active == 'buscador' ? 'active' : null ?> t6"><a href="<?php echo site_url('directorio/buscador/') ?>">Buscador</a></li>
            <li class="<?php echo $tab_content_active == 'a_z' ? 'active' : null ?> t7"><a href="<?php echo site_url('directorio/a_z') ?>">A - Z</a></li>
            <li class="<?php echo $tab_content_active == 'crear_anuncio' ? 'active' : null ?> t8"><a href="<?php echo site_url('directorio/crear_anuncio') ?>">Crear Anuncio</a></li>
            <li class="t9"><a href="#tab5">Lista categoria</a></li>
        </ul>
        
        <div class="tab_content">
            <?php echo $tab_content ?>
        </div>
    </div>

</div>

<script src="js/directorio.js"></script>