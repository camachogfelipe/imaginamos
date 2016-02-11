<?php

        include_once './../php/clases.php';
   
    $noticiaDAO = new noticiaDAO();
    $noticia = new noticia();
    $mes = $_GET['mes'];
    $anio = $_GET['anio'];
    $noticias = $mes && $anio ? $noticiaDAO->getByMesAnio($mes,$anio) : $noticias= 0;



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <meta name="Keywords" lang="es" content="palabras clave" />
        <meta name="Description" lang="es" content="texto empresarial" />
        <meta name="date" content="2011" />
        <meta name="author" content="diseño web: imaginamos.com" />
        <meta name="robots" content="All" />
        <title>INTECPLAST S.A.</title>
        <style type="text/css">
            <!--

            -->
        </style>
        <link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />
        <link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .Estilo1 {color: #00FFFF}
            -->



            #tabshistoria2 {
                width:1007px;
                height:100%;
                z-index:1500;
                background-image: url(images/bgcontenidostabs.png);
                background-repeat: no-repeat;
                background-position: center top;    
            }
        </style>


        <link href="style_acord/format.css" rel="stylesheet" type="text/css" />
        <link href="style_acord/text.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
        <script type="text/javascript" src="includes/javascript.js"> </script>

    </head>

    <body class="body">


        <div id="wrapcontentintecplasttabs" class="clearfix">

            <!----------------------------HEADER INTECPLAST-------------------------------------------->


            <?php include("includes/principalHeader.php"); ?>


            <!----------------------------FIN HEADER INTECPLAST------------------------------------------->



            <!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->

<?php
                    function convertMes($num_mes){
                            
                        $meses=array('January','February','March','April','May','June','July','August','September','October','November','December');

                        $num_mes= $num_mes-1;

                        $mes=$meses[$num_mes];
                        
                        return $mes;
                    }
?>    
            <div id="subtit01tabs"></div>

            <div id="subtit02">News</div>

            <div id="cajonnoticiasseccion" class="clearfix"> 

                <div id="rightcontnot" class="clearfix">

                    <div id="titulossectab"><?php echo convertMes($mes)," ",$anio ?> </div>

                    <div id="sepclear"></div>


                    <?php if ($noticias>0): ?>
                        
                    <!--Comienzo de contenedor de noticias-->
                    <?php foreach ($noticias as $noticia): ?>
                        
                    <?php $fecha = $noticia->getFecha(); $year=substr($fecha, 0,-6); $day=substr($fecha, 8); $num_mes=substr($fecha, 5,2); ?>

                    <div id="envnewsmes">
                        <div id="titnewscajon">
                            <span class="fechanoticia"><?php echo $day ?> / <?php echo $mes=convertMes($num_mes) ?> </span>&nbsp;&nbsp;&nbsp;<?php echo $noticia->getTitulo_i() ?> </div>
                        <div id="contmodininews">
                            <div id="imgofemes"><img src="./..<?php echo $noticia->getImagen_i() ?>" width="118" height="121" /></div>

                            <div id="textonewscaj" style="font-weight:normal">
                                <?php echo $noticia->getDescripcion_i() ?>


                            </div>
                            <div id="separadorsomb"><img src="images/separacionmodinicio.png" /></div>
                            <br/>
                            <br />
                            <br/>

                            <div id="sepclear"></div>

                        </div>
                        <div id="footmodnotsec"><img src="images/footmodnoticiasec.png" /></div>


                    </div>

                    <?php endforeach ?>
                    <!--Fin de contenedor de noticias-->
                    <?php endif ?>
                </div>

                <?php $fechas = $noticiaDAO->getFechas(); ?>

                <div id="leftmenunot" class="clearfix">

                    <div id="menuv">
                        <ul>
                            <!--
                            <li ><a href="#nogo" id="selec">Abril 2012</a></li>
                            -->
                            <?php foreach ($fechas as $fecha): 
                                $num_mes= $fecha->getMes();
                                $lAnio=$fecha->getId() ?>
                                
                            <li><a href="noticias.php?mes=<?php echo $num_mes ?>&anio=<?php echo $lAnio ?>"  
                            <?php echo $num_mes==$_GET['mes'] && $lAnio == $_GET['anio'] ? "id='selec'" : "id='' " ?> ><?php echo $mes=convertMes($num_mes)," ",$lAnio ?></a></li>

                            <?php endforeach ?>

                        </ul>

                    </div>

                    <div id="sepclear"> </div>

                </div>

                <div id="sepclear2"></div>

            </div>

            <div id="sepclear2"></div>


            <!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->
        </div>
        <!----------------------------FOOTER INTECPLAST-------------------------------------------->

        <?php include("includes/principalFooter.php"); ?>


        <!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->


    </body>
</html>