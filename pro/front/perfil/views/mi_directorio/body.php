


<script type="text/javascript">
    $(document).ready(function(){
        var estado = 1;
        var estado2 = 0;
        $(".tab_content").hide();
        $(".t6").addClass("active").show();
		
        $(".tab_content:first").show();
        $("ul.tabs li").click(function()
        {
            if ($(this).is('.t3')) {
			  
            } else {
                $("ul.tabs li").removeClass("active");
                $(this).addClass("active");
                $(".tab_content").hide();
                $(".t3").css({
                    'opacity': "0.4"
                });
                var activeTab = $(this).find("a").attr("href");
                $(activeTab).fadeIn();
                return false;
            }
        });
       
        $("#contenu3").scrollbar(428);
        $(".t6").click(function()
        {
            if (estado == 0){
                $("#contenu3").scrollbar(428);
                estado = 1;
            }
		
			
        });
        $(".t7").click(function()
        {
           
            if (estado2 == 0){
                $("#contenu4").scrollbar2(428);
                estado2 = 1;
            }
		
			
        });
        $(".comboBox1").msDropDown().data("dd");
        /*$(".ver-mas").click(function()
           {
			
            $("ul.tabs li").removeClass("active");
            $(".t4").addClass("active");
            $(".tab_content").hide();
    		

            var activeTab = $("#tab4");
            $(activeTab).fadeIn();
            return false;
			
        });
        $(".resultado").click(function()
           {
			
            $("ul.tabs li").removeClass("active");
            $(".t4").addClass("active");
            $(".tab_content").hide();
    		
            var activeTab = $("#tab4");
            $(activeTab).fadeIn();
            return false;
			
        });*/
		
    });
</script>

<style>
    .bgSlider{
        display:none;
    }
    .login{
        display:none;
    }
    .b2{
        color:#333 !important;	
    }
    .c4{
        color:#333 !important;	
    }
    .t4{
        display:none !important;		
    }
    .t4-active{
        display:none !important;	
    }
</style>


<div class="contenido">
    <div class="mi-directorio-cont">
        <ul class="tabs">
            <li class="t6"><a href="#tab1">Mi Directorio</a></li>
            <li class="t8"><a href="<?php echo site_url('directorios/crear_anuncio') ?>">Crear Anuncio</a></li>

        </ul>
    </div>

    <div class="clear"></div>
    <div class="tab_container">

        <div id="tab1" class="tab_content">
            <div class="selectores-buscador">
                <form action="<?php echo current_url() ?>" method="get" accept-charset="utf8">
                
                	<div class="campo-reg-lab" style="width: 405px;margin-top: -16px;">
    					<label style="padding-left: 4px;">Ingrese su búsqueda, ej: Actividad, Marca, Empresa...</label>
                    	<input name="s" class="campo3" type="text" value="<?php echo $this->input->get('s') ?>">
                    </div>
                    <input class="bot-buscar" type="submit" value="buscar" style="float:left;">
                </form>
                <div class="clr"></div>
            </div>
            <div class="resultados"></div>
            <?php if ($datos->exists()) : ?>
                <div id="contenu3">
                    <?php foreach ($datos as $directorio) : ?>
                        <div class="resultado">
                            <a href="<?php echo sprintf($urls->directorio_detalle, $directorio->code, seo_name($directorio->empresa)) ?>">
                                <?php if (!empty($directorio->logo)) : ?>
                                    <div class="logo-anuncio" style="float:left;">
                                        <img src="<?php echo uploads_url($directorio->logo) ?>" alt="Logo de anuncio: <?php echo $directorio->empresa ?>" /> 
                                    </div>
                                <?php else: ?>
                                    <div class="resultado-ico"></div>
                                <?php endif; ?>
                            </a>
                            <a href="<?php echo sprintf($urls->directorio_detalle, $directorio->code, seo_name($directorio->empresa)) ?>">
                                <div class="resultado-nom">
                                    <div class="resultado-empresa"><?php echo $directorio->empresa ?></div>
                                    <div class="resultado-calle"><?php echo $directorio->direccion ?></div>
                                    <div class="resultado-tel">Tel. <?php echo $directorio->telefono ?></div>
                                </div>
                            </a>
                            <div class="resultado-desc"><?php echo $directorio->descripcion ?></div>
                            
                            <div class="opciones-ico">
                                <div class="ver-mas"><a href="<?php echo sprintf($urls->directorio_detalle, $directorio->code, seo_name($directorio->empresa)) ?>">Ver más</a></div>
                                <a href="<?php echo sprintf($eliminar_url, $directorio->code)?>" data-action="delete-anuncio"> <div class="borrar">Borrar</div></a>
                                <a href="<?php echo sprintf($editar_url, $directorio->code) ?>"><div class="editar">Editar</div></a>
                                <div class="estado-detalle"><strong><?php echo $directorio->active ? 'Aprobado' : 'Esperando aprobación' ?></strong></div>
                            </div>
                            <div class="opciones-ico" style="display:none;">
                                <div class="estado-detalle"><strong>Borrando anuncio, por favor espere...</strong></div>
                            </div>
                            
                            <div class="resultado-redes" style="display:none;">
                                <div class="resultado-red"><img src="images/logo-face.png" /></div>
                                <div class="resultado-red"><img src="images/logo-twit.png" /></div>
                                <div class="resultado-red"><img src="images/logo-you.png" /></div>
                            </div>
                            <div class="clr"></div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php if ($datos->paged->total_pages > 1) : ?>
                    <!-- Paginador -->
                    <div class="paginador">
                        <?php if ($datos->paged->has_previous) : ?>
                            <a href=""><div class="pag-prev"></div></a>
                        <?php endif; ?>

                        <div class="numeros">
                            <?php for ($i = 1, $total_pages = $datos->paged->total_pages; $i <= $total_pages; $i++) : ?>
                                <div class="numero"><?php echo $i ?></div>
                            <?php endfor; ?>
                        </div>

                        <?php if ($datos->paged->has_next) : ?>
                            <a href=""><div class="pag-next"></div></a>
                        <?php endif; ?>
                    </div>
                    <!-- // Paginador -->
                <?php endif; ?>

            <?php else: ?>
                <h4>No hay ningún directorio creado.</h4>
            <?php endif; ?>


            <div class="clr"></div>
        </div>


        <div id="tab2" class="tab_content">
            <div class="selectores">
                <form>
                    <div class="selectores-publicar2">
                        <input class="campo4" type="text" placeholder="Nombre de la Empresa">
                        <input class="campo4" type="text" placeholder="Dirección">
                        <input class="campo4" type="text" placeholder="Tel√©fono">

                        <div class="clr"></div>
                        <input class="campo4" type="text" placeholder="Sitio web">
                        <input class="campo4" type="text" placeholder="E-mail">
                        <input class="campo4" type="text" placeholder="Logo">
                        <input class="bot-buscar" type="submit" value="buscar">
                        <input class="campo4" type="text" placeholder="Cuenta Facebook">
                        <input class="campo4" type="text" placeholder="Cuenta Twitter" >
                        <textarea class="area1">Introduce las palabras clave de tu publicación (120 Caracteres)</textarea>
                        <div class="clr"></div>
                    </div>

                    <input class="bot-publicar" type="submit" value="publicar">
                </form>
            </div>
            <div class="clr"></div>
        </div>

        <div class="clr"></div>
    </div>
</div>


<div id="delete-anuncio-modal" title="Eliminar anuncio" style="display:none;">
    <p>Se perderán todos los datos referentes al anuncio. <br> <strong>¿Está seguro de eliminar el anuncio?</strong></p>
</div>

<script defer src="<?php echo front_asset('js/directorio.js') ?>"></script>