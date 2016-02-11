<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta name="Keywords" lang="es" content="palabras clave" />

    <meta name="Description" lang="es" content="texto empresarial" />

    <meta name="robots" content="All" />

    <title>INTECPLAST S.A.</title>

    <link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" /><!--necesaria-->

    <link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" /><!--necesaria-->

    <script type="text/javascript" src="js/ajaxEvents.js"></script>

    <link href="style_acord/format.css" rel="stylesheet" type="text/css" />

    <link href="style_acord/text.css" rel="stylesheet" type="text/css" />
    
    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />

    <!--<script type="text/javascript" src="js/jquery.js"></script> -->

    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>




    <!-- Fancybox
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="js/source/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="js/source/helpers/jquery.fancybox-thumbs.css"/>

    <!-- JQuery UI -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  	<script>!window.jQuery.ui && document.write(unescape('%3Cscript src="jquery/jquery-ui-1.8.21.custom.min.js"%3E%3C/script%3E'))</script>

    <script type="text/javascript" src="includes/javascript.js"> </script>

    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>

    <script src="js/jquery.mCustomScrollbar.js"></script>

     <!-- Fancybox
    ================================================== -->

    <script type="text/javascript" src="js/source/jquery.fancybox.js"></script>

    <!-- Add Button helper (this is optional) -->
    <script type="text/javascript" src="js/source/helpers/jquery.fancybox-buttons.js"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <script type="text/javascript" src="js/source/helpers/jquery.fancybox-thumbs.js"></script>

    <!-- Media (this is optional) -->
    <script type="text/javascript" src="js/source/helpers/jquery.fancybox-media.js"></script>

    <script type="text/javascript">
	  setTimeout("$('.accordionContent').slideUp('medium');", 5000);
	</script>
    
    <style type="text/css">
      .content_scroll{
        width:128px;
        height:290px;
        overflow:auto;
        font-family: Arial,Helvetica,sans-serif;
        color: #333333;
        font-size: 9px;
        font-weight: normal;
        line-height: 25px;
        text-align: left;
      }

      .cont_resulset{
        position: relative;
      }

      
      .loader_carga {
        background: url("img/loading.gif") no-repeat scroll center center #FFFFFF;
        height: 100% !important;
        display: none;
        position: absolute;
        width: 100% !important;
      }

    </style>
    
  </head>

  <body class="body">

    <div id="wrapcontentintecplast">



      <!----------------------------HEADER INTECPLAST-------------------------------------------->


      <?php include("includes/principalHeader.php"); ?>


      <!----------------------------FIN HEADER INTECPLAST------------------------------------------->


      <!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->


      <div id="subtit01tabs2">Catálogo de productos</div>


      <div id="wrapperacord">

        <div class="accordionButton" style="  font-family: 'DejaVuSansCondensed'; font-weight: bold; font-size: 18px; color: #ffffff; text-align:center;letter-spacing: -1px;">PASOS PARA BÚSQUEDA </div>

        <div class="accordionContent">  

          <div id="bgcontpasos">

            <div id="envpaso1">



              <div id="paso1"><img src="images/img_paso1.png" /></div>



              <div id="textospasos">



                <h1>SELECCIONE</h1>



                El tipo de producto



                (envase, tapa o pote)



              </div>


            </div>

            <div id="flecha"></div>

            <div id="envpaso2">



              <div id="paso2"><img src="images/img_paso2.png" /></div>


              <div id="textospasos">

                <h1>CONFIGURE</h1>

                su producto mediante el uso de los campos de filtro

              </div>

            </div>

            <div id="flecha"></div>

            <div id="envpaso2">



              <div id="paso3"><img src="images/img_paso3.png" /></div>







              <div id="textospasos">



                <h1>SELECCIONE</h1>



                Su producto para ver todas las especificaciones y solicitar una muestra, si es necesario



              </div>







            </div>







            <div id="sepclear"></div>











          </div>



          <div id="piepasos"><img src="images/piepasos.png" /></div>







        </div>



      </div>







      <div id="sepdotted"><img src="images/seplinea.png" width="965" height="40" /></div>







      <div id="sepclear">&nbsp;</div>



      <div id="sepclear">&nbsp;</div>



      <div id="envproductos">



        <div id="sepclear">&nbsp;</div>







        <!--Inicio del Filtro-->



        <div id="columderproductos" style="visibility:hidden;">











          <div id="colopciones1"><!--Inicio de la columna 1-->







            <div id="flechcol1">



              &nbsp;



            </div>







            <div id="opcion1" name="opcion1"><!--Inicio Contenedor de opciones-->







            </div><!--Fin Contenedor de opciones-->







          </div><!--Fin de la columna 1-->















          <div id="colopciones1"><!--Inicio de la Columna 2-->







            <div id="flechcol2">



              &nbsp;



            </div>



            <div id="opcion2" name="opcion2"><!--Inicio Contenedor de opciones-->



            </div><!--Fin Contenedor de opciones-->




          </div>
          <!--Fin de la columna 2-->


          <div id="colopciones1" style="display:none"><!--Inicio de la Columna 3-->



            <div id="flechcol3">



              &nbsp;

            </div>
            <div id="opcion3" name="opcion3"><!--Inicio Contenedor de opciones-->

            </div><!--Fin Contenedor de opciones-->

          </div><!--Fin de la columna 3-->


          <div id="colopciones1"><!--Inicio de la Columna 4-->

            <div id="flechcol2">



              &nbsp;
            </div>

            <div id="opcion4" name="opcion4"><!--Inicio Contenedor de opciones-->

            </div><!--Fin Contenedor de opciones-->

          </div><!--Fin de la columna 4-->

          <div id="colopciones1"><!--Inicio de la Columna 5-->



            <div id="flechcol3">



              &nbsp;



            </div>



            <div id="opcion5" name="opcion5"><!--Inicio Contenedor de opciones-->







            </div><!--Fin Contenedor de opciones-->







          </div><!--Fin de la columna 5-->



          <div id="colopciones1"><!--Inicio de la Columna 6-->







            <div id="flechcol2">



              &nbsp;



            </div>



            <div id="opcion6" name="opcion6"><!--Inicio Contenedor de opciones-->







            </div><!--Fin Contenedor de opciones-->

          </div><!--Fin de la columna 6-->

          <div id="colopciones1"><!--Inicio de la Columna 7-->



            <div id="flechcol4">



              &nbsp;



            </div>







            <div id="opcion7" name="opcion7"><!--Inicio Contenedor de opciones-->







            </div><!--Fin Contenedor de opciones-->







          </div><!--Fin de la Columna 7-->



          <!--Fin Seccion de Filtro-->



          <p>&nbsp;</p>



          <p>&nbsp;</p>



          <p>&nbsp;</p>



          <p>&nbsp;</p>



          <p>&nbsp;</p>



        </div>

        <?php
        include_once './php/clases.php';
        $claseDAO = new claseDAO();
        $clase = new clase();
        $clases = $claseDAO->gets();
        ?>


        <div role="parametroFiltro">
          <input type="hidden" id="pag" name="pag" value="1"/>


        </div>


        <div id="columizqprod">



          <div id="thumbcol">

            <div id="imgthumb">


              <div id="titulothumb">

                <div id="txtthumb"><?php echo $clases[0]->getnombre_e() ?></div>

                <form name="frmClase">

              </div>

              <img src=".<?php echo $clases[0]->getimagen() ?>" width="130" height="120" border="0" />



            </div>



            <div id="leftcheck"><input name="clase" id="envase" class="espcheck" type="radio" value="<?php echo $clases[0]->getid() ?>" onClick="getLineas()"/></div>

          </div>

          <div id="thumbcol">

            <div id="imgthumb">

              <div id="titulothumb">

                <div id="txtthumb"><?php echo $clases[2]->getnombre_e() ?></div>

              </div>



              <img src=".<?php echo $clases[2]->getimagen() ?>" width="130" height="120" border="0" />



            </div>



            <div id="leftcheck"><input name="clase" id="tapa" class="espcheck" type="radio" value="<?php echo $clases[2]->getid() ?>" onClick="getLineas()" /></div>


          </div>

          <div id="thumbcol">

            <div id="imgthumb">



              <div id="titulothumb">

                <div id="txtthumb"><?php echo $clases[1]->getnombre_e() ?></div>

              </div>



              <img src=".<?php echo $clases[1]->getimagen() ?>" width="130" height="120" border="0" />



            </div>



            <div id="leftcheck"><input name="clase" id="pote" class="espcheck" type="radio" value="<?php echo $clases[1]->getid() ?>" onClick="getLineas()" /></div>


          </div>



          </form>

        </div>


        <div id="sepclear"></div>


      </div>

      <div id="sepdotted"><img src="images/seplinea.png" width="965" height="40" /></div>

      <div class="cont_resulset">
        <div class="loader_carga"></div>
        <div id="resulset"><!--Inicio contenedor de resultados-->
          <div style="clear:both"></div>


        </div><!--Fin Contenedor de Resultados-->
      </div>
<div style="clear:both"></div>


      <!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->
    </div>
    <!----------------------------FOOTER INTECPLAST-------------------------------------------->

<div style="clear:both"></div>
<?php include("includes/principalFooter.php"); ?>

    <!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->


   

  <script>
    $(".carga_modal").fancybox({
    'width' : 1000,
    'height' : 800,
    fitToView : false,
    autoSize : false,
    'transitionIn' : 'none',
    'transitionOut' : 'none',
    'type' : 'iframe',
    'padding' : 20
  }); 

  </script>

  </body>
</html>