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

    <link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />

    <link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

    <link href="css/menu.css" rel="stylesheet" type="text/css" />

    <style type="text/css">

      <!--

      .Estilo1 {color: #00FFFF}

      -->

    </style>

    <script type="text/javascript" src="js/jquery.js"></script>

    <script type="text/javascript" src="js/ajaxEvents.js"></script>

    <link href="style_acord/format.css" rel="stylesheet" type="text/css" />

    <link href="style_acord/text.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>

    <script type="text/javascript" src="includes/javascript.js"> </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>

    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.mCustomScrollbar.js"></script>

    <script type="text/javascript">

      $(document).ready(function(){ 

        $(window).load(function() {

          mCustomScrollbars();

        });


        function mCustomScrollbars(){  

          $("#mcs_container2").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15); 

        }







        /* function to fix the -10000 pixel limit of jquery.animate */



        $.fx.prototype.cur = function(){



          if ( this.elem[this.prop] != null && (!this.elem.style || this.elem.style[this.prop] == null) ) {



            return this.elem[ this.prop ];



          }



          var r = parseFloat( jQuery.css( this.elem, this.prop ) );



          return typeof r == 'undefined' ? 0 : r;



        }







        /* function to load new content dynamically */



        function LoadNewContent(id,file){



          $("#"+id+" .customScrollBox .content").load(file,function(){



            mCustomScrollbars();



          });



        }





      



      });



    </script>



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




          </div><!--Fin de la columna 2-->


          <div id="colopciones1"><!--Inicio de la Columna 3-->



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







            <div id="opcion4" name="opcion4"><!--Inicio Contenedor de opciones-->







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

                <div id="txtthumb">ENVASES</div>

                <form name="frmClase">

              </div>

              <img src=".<?php echo $clases[0]->getimagen() ?>" width="130" height="120" border="0" />



            </div>



            <div id="leftcheck"><input name="clase" id="envase" class="espcheck" type="radio" value="<?php echo $clases[0]->getid() ?>" onClick="getLineas()"/></div>

          </div>

          <div id="thumbcol">

            <div id="imgthumb">

              <div id="titulothumb">

                <div id="txtthumb">TAPAS</div>

              </div>



              <img src=".<?php echo $clases[2]->getimagen() ?>" width="130" height="120" border="0" />



            </div>



            <div id="leftcheck"><input name="clase" id="tapa" class="espcheck" type="radio" value="<?php echo $clases[2]->getid() ?>" onClick="getLineas()" /></div>


          </div>

          <div id="thumbcol">

            <div id="imgthumb">



              <div id="titulothumb">

                <div id="txtthumb">POTES</div>

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


      <div id="resulset"><!--Inicio contenedor de resultados-->



      </div><!--Fin Contenedor de Resultados-->


      <!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->
    </div>
    <!----------------------------FOOTER INTECPLAST-------------------------------------------->

<?php include("includes/principalFooter.php"); ?>

    <!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->

  </body>
</html>