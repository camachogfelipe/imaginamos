<div class="cont_940 contenedor_internas clearfix">
    <div class="conttabs_general sec_lineas" style="opacity: 1; height: auto; overflow: visible; padding: 0px;">
        <div class="grillados tit_secciones">
            <h1>lineas</h1>
        </div>
        <div class="clear"></div>
        <!--<div class="cont_slidermenulineas">
            <ul class="slidermenulineas">
                <li class="activo_sliderlineas">
                    <a href="#">-->
                        <div class="cont_tittrabaje">
                            <h1>resultados de busqueda</h1>
                            <h2><?= $datos['migaActual'] ?></h2>
                        </div>
                    <!--</a>
                </li>
            </ul>
        </div>-->
        <div class="clear"></div>
        <?php
        $secciones = array();
        foreach ($datos['productos'] as $data) :
					$url = base_url() . $data->url;
					$seccion = $data->seccion;
					if ($data->seccion == 'enterese') :
						$seccion = 'ent&eacute;rate';
						$link = base_url() . "enterate";
					endif;
					
					if ($data->seccion == 'categoria') :
						$seccion = 'categor&iacute;a';
						$link = base_url() . "lineas";
					endif;
					
					if ($data->seccion == 'linea') :
						$seccion = 'l&iacute;neas';
						$link = base_url() . "lineas";
					endif;
					
					if ($data->seccion == 'vacante') :
						$seccion = 'Vacante';
						$link = base_url() . "trabaja";
					endif;
					
					if ($data->seccion == 'equipo') :
						$seccion = 'Equipo';
						$link = base_url() . "equipo";
					endif;
					
					if(empty($link)) $link = base_url();
					
					if (!array_key_exists($data->seccion, $secciones)) : ?>
          	<br><div class="subcategorias_lineas inline">
            	<a class="inline" href="<?php echo $link ?>" id="subcategoria_lineas1">
              	<div class="cont_tittrabaje"><h1><?php echo $seccion ?></h1></div>
              </a>
            </div>
           <?php
					 endif;
					 $secciones[$data->seccion] = $data->seccion;
					 ?>
           <li><a href="<?php echo $url ?>"><?php echo $data->titulo ?></a></li>
           <?php
				endforeach;
        ?>
    </div>
</div>