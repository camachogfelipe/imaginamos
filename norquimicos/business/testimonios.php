<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>- IPLER -</title>
    <meta name="viewport" content="width=1000, maximum-scale=2" />
    <link type="image/x-icon" href="<?php echo  Link::Build('/') ?>secciones/favicon.ico" rel="shortcut icon" />
    <meta http-equiv="content-language" content="es" />
    <meta http-equiv="pragma" content="No-Cache" />
    <meta name="Keywords" lang="es" content="Pre-ICFES, Pre-Universitarios, Clientes, Testimonios, Lectura Rápida, Lectura Comprensiva, IPLER, Física, Química, Matemáticas, Bioligía, Aprendizaje en Escritura, Ortografía." />
    <meta name="Description" lang="es" content="" />
    <meta name="copyright" content="imaginamos.com" />
    <meta name="date" content="2012" />
    <meta name="author" content="diseño web: imaginamos.com" />
    <meta name="robots" content="All" />

    <link type="text/css" href="<?php echo  Link::Build('/') ?>css/ipler.css" rel="stylesheet" />

    <script type="text/javascript" src="<?php echo  Link::Build('/') ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo  Link::Build('/') ?>js/jquery.superfish.js"></script>
    <script type="text/javascript" src="<?php echo  Link::Build('/') ?>js/jquery.pajinate.js"></script>
    <script type="text/javascript" src="<?php echo  Link::Build('/') ?>js/jquery.colorbox.js"></script>
    <script type="text/javascript" src="<?php echo  Link::Build('/') ?>js/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php echo  Link::Build('/') ?>js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
    <script type="text/javascript" src="<?php echo  Link::Build('/') ?>js/jHeader.js"></script>
    <script type="text/javascript" src="<?php echo  Link::Build('/') ?>js/jTestimonios.js"></script>
    <script type="text/javascript" src="<?php echo  Link::Build('/') ?>js/jFooter.js"></script>
    <script type="text/javascript">
      function cambioclass(val){
        $('div[class^="bt-terminos"]').removeClass("bt-terminos-activo");
        $("#as"+val).addClass("bt-terminos-activo");        
        $.post('<?php echo Link::ToSection(array("seccion"=>"consulta")) ?>', { valor: val } , function(cambioresultado){          
          $('.content_paging').empty().html(cambioresultado); 
          //alert("voyaca");
        });
      }
    </script>
  </head>
  <body>


    <div id="loader">
      <div id="progress"></div>
    </div>


    <?php include("header.php"); ?>


    <div class="info-site">
      <div class="con-info-site">
        <div class="t-internas">TESTIMONIOS</div>
        <div class="menu-testimonios">
          <div class="t-menu-testimonios">FILTROS</div>
          <div class="bt-terminos bt-terminos-activo" onclick="cambioclass(1);" id="as1">Todos</div>
          <div class="bt-terminos" onclick="cambioclass(2);"id="as2">Estudiantes</div>
          <div class="bt-terminos" onclick="cambioclass(3);"id="as3">Profesionales</div>
          <div class="bt-terminos" onclick="cambioclass(4);"id="as4">Educadores</div>
          <div class="bt-terminos" onclick="cambioclass(5);"id="as5">Padres</div>
        </div>
        <div class="margen-paginador">
          <div id="paging_site" class="container">
            <div class="page_navigation"></div>
            <ul class="content_paging">
              <?php
              $consulta = DbHandler::GetAll("SELECT * FROM testimonios");
              for ($a = 0, $b = count($consulta); $a < $b; $a++) {
                echo' 
          
              <li>
                <div class="testimonio">
                  <div class="texto-testimonio">
                    <div class="top-texto-testimonio"></div>
                    <div class="body-texto-testimonio">
                      <p class="head-testimonio">' . utf8_encode($consulta[$a]["texto"]) . '</p>
                      <div class="comas-a"></div>
                      <div class="comas-c"></div>
                    </div>
                    <div class="bottom-texto-testimonio"></div>
                    <div class="usuario-testimonio">
                      <p class="usuario-desc">' . utf8_encode($consulta[$a]["descripcion"]) . '</p>
                      <p class="usuario-desc">' . utf8_encode($consulta[$a]["nombre"]) . ' - ' . utf8_encode($consulta[$a]["edad"]) . ' años</p>
                      <div class="icono-user"></div>
                    </div>
                  </div>
                </div>
              </li>

        
           
           ';
              }
              ?>
            </ul>
            <div class="linea-paginador"></div>
            <div class="page_navigation"></div>
          </div>
        </div>
        <div class="sombra-inf-tabs mar-servicios-inf"></div>
      </div>
    </div>


    <?php include("footer.php"); ?>


  </body>
</html>