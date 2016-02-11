<?php



    include_once './php/clases.php';

    $articuloDAO = new articuloDAO();

    $articulo = new articulo();

    $articulos = $articuloDAO->getBySeccionFlag(6,12);



      $promocionDAO = new promocionDAO();

      $promocion = new promocion();

      $principal = $promocionDAO->getByPrincipal();



      $imagenDAO = new imagenDAO();

    $imagen = new imagen();

    $imagenes = $imagenDAO->getBySeccionFlag(9,1);



        $puntoDAO = new puntoDAO();

    $punto = new punto();

    $puntoPpal = $puntoDAO->getByTipoPunto(1);

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





<link href="css/stylos_intecplast_inicio.css" rel="stylesheet" type="text/css" />

<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

<link href="css/menu.css" rel="stylesheet" type="text/css" />

<style type="text/css">


.Estilo1 {color: #00FFFF}

#imgslidenot {
  width:450px !important;
}

#txtthumblanzamiento p{width:150px;} 

#contenidosinicio {
  width:1000px;
}

</style>


<style type="text/css">
  
#slidebox .thumbs{
  bottom: 0;
}

#slidebox .previous {
    margin-left: 370px;
    margin-top: 118px;
}

#slidebox .next {
    margin-top: 117px;
}

</style>



</head>



<body class="body">







<?php include("includes/principalHeader.php"); ?>












<!--Banner Principal-->

<div id="envbanner" style="text-align:center">



<iframe width="965" height="395" src="banner_intecplast.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe>



</div>

<!--Fin Banner Principal-->





<div id="wrapcontentintecplast">



  <div id="envsombra"><img src="images/sombinf.png" width="962" height="27" /></div>



  <div id="wrapcontentintecplast">



    <!--Lanzamientos-->



    <div id="titulolanzamientos">LANZAMIENTOS</div>



    <div id="envthumbsinicio">

    <?php foreach ($articulos as $articulo): ?>

      

        <div id="thumbinicio">



          <div id="imgthumbinicio">

          

            <div id="txtthumblanzamiento">



              <span class="titthumblanz"><?php echo $articulo->getTitulo_e() ?></span>

          

              <?php echo $articulo->getDescripcion_e() ?>



                          <div id="btmasinfolnz"><a href="<?php echo $articulo->getEnlace_e() ?>" target="_self">Ver más</a></div>

          

            </div>

          

            <div id="imglanzamiento">

            <div style="width:113px; height:168px;">

              <img style="margin:30px 0 0 10px;" src=".<?php echo $articulo->getImagen_e() ?>" width="105"/>

            </div>  

            </div>

          

          </div>

          

          <div id="sombrathumblanzamiento"></div>



        </div>

    <?php endforeach ?>

    <!--Fin de Lanzamientos-->





    <div id="sepdottedhome"><img src="images/seplineahome.png" width="965" height="47" /></div>





    <!--Inicio de bloque de Contenedores-->

    <div id="contenidosinicio">

      <!--Inicio Columna Derecha-->

      <div id="envcolcontinicio2">



          <!--Catalogo de Productos-->

          <div id="colcontinicio1">

            <div id="sepclear3"></div>

            <div id="sepclear3"></div>



            <div id="titulocatalogoinicio">

              <a href="catalogo.php">CATÁLOGO <br/><span class="colortitcata">DE PRODUCTOS</span></a>

            </div>



            <iframe width="470" height="214" src="slide_catalogo.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe>



          </div>

          <!--Fin Catalogo de Productos-->





          <div id="sepclear3"></div>



          <!--Noiticias-->

          <div id="colcontinicio2">

          

            <div id="titulonoticiasslide">

              <a href="noticias.php">ÚLTIMAS NOTICIAS</a>

            </div>



            <?php include "slide_noticias.php"; ?></div>



          </div>
                    
                    
                    
                    <div id="colcontinicio1">
                    
                                    <div id="sepclear3"></div>
                    
                                    <div style="height:27px;"></div>
                    
                                    <!--Inifio Oferta del Mes-->
                    
                                    <div id="envofertames">
                    
                    
                    
                                        <div id="titofertames">
                    
                                            <a href="promociones.php">OFERTA DEL MES</a>
                    
                                        </div>
                    
                                        
                    
                                        <div id="contmodini">
                    
                                                <div id="envcotizar">
                    
                                                    <div id="bt_cotizar">
                    
                                                        <a href="promociones.php">&nbsp;</a>
                    
                                                    </div>
                    
                                                </div>
                    
                    
                    
                                                <div id="imgofemes">
                    
                                                    <img src=".<?php echo $principal->getImagen_e() ?>" width="118" height="121" />
                    
                                                </div>
                    
                    
                    
                                                <div id="separadorsomb">
                    
                                                    <img src="images/separacionmodinicio.png" />
                    
                                                </div>
                    
                                            
                    
                                                <div id="textocajonofer">
                    
                                                    <span class="txttitofer">
                    
                                                        <?php echo $principal->getTitulo_e() ?>
                    
                                                    </span>
                    
                                                    <p><?php echo substr($principal->getDescripcion_e(),0,30) ?></p>
                    
                                                    <p><!--<span class="unidadprecio"><?php echo $principal->getUnidades() ?> x <?php echo $principal->getPrecio() ?></span>--></p>
                    
                                                    <p><span class="txtlineinf">Ref:</span><?php echo $principal->getReferencia() ?><br />
                    
                                                       <span class="txtlineinf">Precio Unitario:</span><?php echo $principal->getPrecio() ?><br />
                    
                                                       <span class="txtlineinf">Unidades:</span><?php echo $principal->getUnidades() ?></p>
                    
                                                    
                    
                                                </div>
                    
                    
                    
                                                <br/>
                    
                                                <br/>
                    
                                                <br/>
                    
                    
                    
                                                <div id="sepclear"></div>
                    
                                        </div>
                    
                    
                    
                                        <div id="footmodini">
                    
                                            <img src="images/footmoduloinicio3.png" />
                    
                                        </div>     
                    
                    
                    
                                    </div>
                    
                                    <!--Fin Oferta del Mes-->
                    
                    
                    
                                    <div id="sepclear3"></div>
                    
                    
                    
                                    <!--Puntos de Venta-->
                    
                                    <div id="envofertames">
                    
                    
                    
                                        <div id="titpuntosdeventa">
                    
                                            <a href="puntos_venta.php">PUNTOS DE VENTA</a>
                    
                                        </div>
                          
                    
                    
                    
                    
                      
                    
                                        <div id="contmodini">
                    
                    
                    
                                            <div id="cajonmapaventa">
                    
                                            
                    
                    
                    
                                                <iframe width="195" height="195" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo  $puntoPpal->getGmap() ?>"></iframe>
                    
                      
                    
                                            </div>
                    
                                            
                    
                                            <div id="cajonslideventa">
                    
                                                <iframe width="196" height="195" src="pventa_inicio.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe>
                    
                                            </div>
                    
                    
                    
                                            <br/>
                    
                                            <br/>
                    
                                            <br/>
                    
                                            <br/>
                    
                                            <br/>
                    
                                            <br/>
                    
                                            <br/>
                    
                                            <br/>
                    
                                            <br/>
                    
                                            <br/>
                    
                                            <br/> 
                    
                    
                    
                                        </div>
                    
                                        
                    
                                        <div id="footmodini"><img src="images/footmoduloinicio3.png" /></div>
                    
                    
                    
                                    </div>
                    
                                    <!--Fin Puntos de Venta-->
                    
                    
                    
                                </div>
          <!--Fin Noticias-->
          <div style="clear:both"></div>
      </div>  

      <!--Finalización div Columna Derecha-->



      <!--Inicio Columna Izquierda-->

      
            <!--Fin de Columna Izquierda-->



    </div>

    <!--Fin de bloque de Contenedores-->



    <!--Barra de Logos-->

    <div id="envcontprodinf">

        <div id="sepclear"></div>

        <?php include "pasarela_logos.php"; ?>

        <div id="sepclear">

          <div id="sepclear2"></div>

        </div>

    </div>

    <!--Fin de barra de logos-->



  </div>



</div>

<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->

<!----------------------------FOOTER INTECPLAST-------------------------------------------->

<!--Marcador Intecplast

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>

-->

<?php include("includes/principalFooter.php"); ?>



<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->



</body>

</html>