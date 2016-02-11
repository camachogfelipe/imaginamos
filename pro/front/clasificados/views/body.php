<script src="js/clasificados.js"></script>
<style type="text/css">
	span.ui-spinner {background:none !important; border:none !important; margin-top: -1px !important; margin-left: -5px !important; width:165px !important;}
	a.ui-spinner-button {height:14px !important;}
	a.ui-spinner-up {top:4px !important;}
	a.ui-spinner-down {top:19px !important;}
</style>

<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txSeccion">
            <div class="encabezado-tit">Clasificados</div>
            <div class="encabezado-subtit">Ofertas armónicas</div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="contenido">
    <div class="clasificados-cont">
        <ul class="tabs">
            <li class="t5 <?php echo  $seccion == 'categorias' ? 'active' : null ?>"><a href="<?php echo site_url('clasificados') ?>">Categorías</a></li>
            <li class="t6 <?php echo $seccion == 'buscador' ? 'active' : null ?>"><a href="<?php echo site_url('clasificados/buscador') ?>">Buscador</a></li>
            <li class="t8 <?php echo $seccion == 'crear_anuncio' ? 'active' : null ?>"><a href="<?php echo site_url('clasificados/crear_anuncio') ?>">Crear Anuncio</a></li>
        </ul>
    </div>

    <div class="clear"></div>
    <div class="tab_container">
        <div><?php echo $content ?><div class="clear"></div></div>
        <div class="clr"></div>
    </div>
</div>




