<?php



    include_once './../php/clases.php';



$producto_codigo = $_GET['id'];



$productoDAO = new productoDAO();



$producto = new producto();



$producto = $productoDAO->getById($producto_codigo);



include("lib_carrito.php"); 





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

</style>

<link rel="stylesheet" href="css/style_modal.css" type="text/css" charset="utf-8"/>



        <script type="text/javascript" src="js/jquery-1.3.2.js"></script>

        <script type="text/javascript">

            $(function() {

                $('#activator').click(function(){

                    $('#overlay').fadeIn('fast',function(){

                        $('#box').animate({'top':'10px'},500);

                    });

                });

                $('#boxclose').click(function(){

                    $('#box').animate({'top':'-1000px'},500,function(){

                        $('#overlay').fadeOut('fast');

                    });

                });



            });





</script>

<!--

	1 ) Reference to the files containing the JavaScript and CSS.

	These files must be located on your server.

-->



<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>

<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />



<!--

	2) Optionally override the settings defined at the top

	of the highslide.js file. The parameter hs.graphicsDir is important!

-->



<script type="text/javascript">

	hs.graphicsDir = 'highslide/graphics/';

	hs.align = 'center';

	hs.transitions = ['expand', 'crossfade'];

	hs.wrapperClassName = 'dark borderless floating-caption';

	hs.fadeInOut = true;

	hs.dimmingOpacity = .75;



	// Add the controlbar

	if (hs.addSlideshow) hs.addSlideshow({

		//slideshowGroup: 'group1',

		interval: 5000,

		repeat: false,

		useControls: true,

		fixedControls: 'fit',

		overlayOptions: {

			opacity: .6,

			position: 'bottom center',

			hideOnMouseOut: true

		}

	});

</script>





       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script src="js/slides.min.jquery.js"></script>
		<script>
            $(function(){
                $('#slides_s').slides({
                    preload: true,
                    play: 5000,
                    pause: 2500,
					generateNextPrev: true,
					generatePagination: false,
                    hoverPause: true
                });
				  $('#slides_e').slides({
                    preload: true,
                    play: 5000,
                    pause: 2500,
					generateNextPrev: true,
					generatePagination: false,
                    hoverPause: true
                });
            });
        </script>
        <script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>	
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.cs" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			$("a[rel=example_group2]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>



</head>



<body class="body">





<div id="wrapcontentintecplast">



<!----------------------------HEADER INTECPLAST-------------------------------------------->



<!----------------------------HEADER INTECPLAST-------------------------------------------->



<div id="topheader02">





<div id="columtophead">



<div id="envmenutop">





</div>





</div>



<div id="logointecplast"><a href="index.php"><img src="images/log.png" border="0" /></a></div>





</div>



<div style="height:60px;width:100%;">



<?php if ($_GET['add']==1):?>





  <div style="font-weight:bold; color:#666;width:100%;padding:4px;background-color:#CCC;">Product added to quotation correctly</div>





<?php endif; ?>



<?php if ($_GET['sendmail']==1):?>





  <div style="font-weight:bold; color:#666;width:100%;padding:4px;background-color:#CCC;">Request sent successfully</div>





<?php endif; ?>



</div>



<!----------------------------FIN HEADER INTECPLAST------------------------------------------->





<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->







<script>



  function enviarCarrito2()

  {

    str=document.getElementById("id_prod2").value;

    str2=1;

    srt3 = 1;

    location.href = "mete_producto.php?m="+srt3+"&q="+str+"&s="+str2;  



  }



</script>



<script>



  function enviarCarrito3()

  {

    str=document.getElementById("id_prod3").value;

    str2=1;

    srt3 = 1;

    location.href = "mete_producto.php?m="+srt3+"&q="+str+"&s="+str2;  



  }



</script>

<div id="subtit2">SUGGESTIONS</div>

<div id="bgcontcat3">
<div id="colcatag3_1">

    <div id="slides_s">
    <div class="slides_container">



<?php

    $ensambleDAO = new ensambleDAO();
    $ensamble = new ensamble();

    if ($producto->getClase_id()==3) {
      $ensambles = $ensambleDAO->getByComplemento($producto_codigo);
    }
    else{
      $ensambles = $ensambleDAO->getByBase($producto_codigo);
    }

    $total = count($ensambles);
    $iteraciones = $total / 2;
    $iteraciones = ceil($iteraciones);
    $array_sugerencias = array_chunk($ensambles, 2);

?>



    <?php for ($i=0; $i < $iteraciones ; $i++): ?>
      <div class="slide">

        <?php for ($j=0 ,$cont_interno = count($array_sugerencias[$i]); $j<$cont_interno ; $j++): ?>   

        <?php 
            if ($producto->getClase_id()==3) {
              $sugerido1_id = $array_sugerencias[$i][$j]->getBase();
            }
            else {
              $sugerido1_id = $array_sugerencias[$i][$j]->getComplemento();
            }
            
            $sugerido1 = new producto();

            $sugerido1 = $productoDAO->getById($sugerido1_id);


         ?>

                <div class="cajita">
                  <a rel="example_group" href="..<?php echo $sugerido1->getProducto_imagen() ?>"><img src="..<?php echo $sugerido1->getProducto_imagen() ?>" /></a>
                    <a rel="example_group" href="..<?php echo $array_sugerencias[$i][$j]->getImagen() ?>" class="b1">See Assemble</a>
                    <a href="catalogo_paso3.php?id=<?php echo $sugerido1->getProducto_codigo() ?>">See Details</a>
                    <a href="javascript:enviarCarrito2(<?php echo $sugerido1->getProducto_codigo() ?>)" class="b3">Quote</a>
                </div>


      <?php endfor; ?>
      </div>
    <?php endfor; ?>

      
    </div>
  </div>





<div id="sepclear3"></div>

<div id="seplineaficha2">
  <img src="images/seplinea_ficha2.jpg" width="284" height="24" border="0" /></div>



<?php



  $ejemploDAO = new ejemploDAO();

  $ejemplo = new ejemplo();

  $ejemplos = $ejemploDAO->getsByProducto_codigoCms($producto_codigo);

  $total = count($ejemplos);

  $iteraciones = $total / 3;
  $iteraciones = ceil($iteraciones);

  $array_div = array_chunk($ejemplos, 3);

 ?>

<div id="sepclear3"></div>

<div id="tituloficha2">EXAMPLES</div>
    <div id="slides_e">
    <div class="slides_container">


      <?php for ($i=0; $i < $iteraciones ; $i++): ?>
      <div class="slide">

        <?php for ($j=0 ,$cont_interno = count($array_div[$i]); $j<$cont_interno ; $j++): ?>

            <a rel="example_group2" href="..<?php echo $array_div[$i][$j]->getimagen(); ?>"><img src="..<?php echo $array_div[$i][$j]->getimagen(); ?>" /></a>

        <?php endfor; ?>
      </div>
      <?php endfor; ?>

    
      
    </div>
  </div>


</div>





<div id="colcatag3_2"><?php include "demo.php"; ?></div>





<?php

  $sublinea_id = $producto->getSublinea_id();

  $sublineaDAO = new sublineaDAO();

  $sublinea = new sublinea();

  $sublinea = $sublineaDAO->getById($sublinea_id);

  $linea_id = $sublinea->getLineaId();





  $lineaDAO = new lineaDAO();

  $linea = new linea();

  $linea = $lineaDAO->getById($linea_id);



  $material_id = $producto->getMaterial_id();

  $materialDAO = new materialDAO();

  $material = new material();

  $material = $materialDAO->getById($material_id);



  $forma_id = $producto->getForma_id();

  $formaDAO = new formaDAO();

  $forma = new forma();

  $forma = $formaDAO->getById($forma_id);



  $unidadBoca_id = $producto->getProducto_unidadBoca ();

  $unidadDAO = new unidadDAO();

  $unidadBoca = new unidad();

  $unidadBoca = $unidadDAO->getById($unidadBoca_id);

  

  $unidadCapacidad_id = $producto->getProducto_unidadCap ();

  $unidadCapacidad = new unidad();

  $unidadCapacidad = $unidadDAO->getById($unidadCapacidad_id);



  $bocaDAO = new bocaDAO();

  $boca = new boca();

  $boca = $bocaDAO->getById($producto->getBoca_id());



  ?>





<div id="colcatag3_3">

<div id="tituloficha"><?php echo $producto->getProducto_nombre_i() ?> </div>



<table width="288" border="0" cellspacing="4" cellpadding="0">

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Code:</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $producto->getProducto_codigo() ?></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; ">Line:</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $linea->getnombre_i() ?></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Subline:</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $sublinea->getnombre_i() ?></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Pit (<?php echo strtolower($unidadBoca->getnombre()) ?>): </td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $boca->getBoca() ?></td>

  </tr>

  <?php if ($producto->getClase_id()!=3): ?>
    
  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Capacity (<?php echo strtolower($unidadCapacidad->getnombre()) ?>):</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $producto->getProducto_capacidad() ?></td>

  </tr>
  <?php endif ?>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Material:</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $material->getnombre_i() ?></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Form:</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $forma->getnombre_i() ?></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Weight (g): </td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $producto->getProducto_peso() ?></td>

  </tr>

</table>







<div id="seplineaficha"><img src="images/seplinea_ficha.jpg" /></div>



<div id="envcoliconos">





<script>



  function enviarCarrito()

  {

    str=document.getElementById("id_prod").value;

    str2=document.getElementById("cantidad").value;

    srt3 = 1;

    location.href = "mete_producto.php?m="+srt3+"&q="+str+"&s="+str2;  



  }



</script>





<div id="envcontador"> 

  <select id="cantidad" name="cantidad" class="selectsintec2" style="margin-left:80px; height:30px; width:90px;">

   
    <option value="1">1 - 5.000</option>

    <option value="2">5.001 - 10.000</option>

    <option value="3">10.001 - 50.000</option>

    <option value="4">50.001 - 100.000</option>
    
    <option value="5">Más de 100.000</option>
    



  </select>

</div>



<input type="hidden" id="id_prod" name="id_prod" value="<?php echo $producto->getProducto_codigo() ?>" size="2"/>



<div id="colicons">

<div id="iconficha">



<div id="bt_iconinfo"><a href="contactosmall.php?codigo=<?php echo $producto->getProducto_codigo() ?>" class="activator" id="activator">&nbsp;</a></div>

</div>

<div id="iconficha"><div id="bt_impr"><a href="exportPdf.php?id=<?php echo $producto->getProducto_codigo() ?>" target="_blank">&nbsp;</a></div></div>



<div id="iconficha"><img src="images/icono_cesta.png" width="34" height="32" /></div>

</div>







<div id="coltexticonos">

<div id="rowtxticon">More Information</div>

<div id="rowtxticon">Print</div>

<div id="rowtxticon">



<div id="envbtagregar">
	<div id="bt_agregar">
    	<a href="javascript:enviarCarrito()">&nbsp;</a>
    </div>
</div>
<div style="clear:both"></div>
<a href="cotizador.php" target="_new" class="boton_b" style="margin-right:0px">quote </a>

</div>

</div>

</div>

</div>







  <div id="sepclear"></div>

</div>





<div id="sepclear3"></div>



<div id="sepdotted"><img src="images/seplinea.png" width="965" height="40" /></div>



<div id="sepclear3"></div>

<div id="envproductos">



<div id="envcajontablacata3">



<?php 



  $categoria_id = $producto->getCategoria_id();



  $categoriaDAO = new categoriaDAO();

  $categoria = new categoria();

  $categoria = $categoriaDAO->getById($categoria_id);



  $productosRango = new producto();

  $productosRango = $productoDAO->getByCategoria($categoria_id);





 ?>



<div id="img_tamanos"><img src="./..<?php echo $categoria->getimgRango() ?>" /></div>







<div id="toptabla">



<table width="764" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td class="celdatop" width="187">Code </td>

    <?php if ($producto->getClase_id()==3): ?>
      <td class="celdatop" width="187">Pit</td>
    
    <?php else: ?>
      <td class="celdatop" width="187">Capacity</td>
    
    <?php endif ?>

    <td class="celdatop">Weight (g) </td>

    <td class="celdatop" width="187">Material</td>

  </tr>

</table>

</div>



<table width="764" border="0" align="left" cellpadding="0" cellspacing="0">

  <?php if ($productosRango>0): ?>

  <?php foreach ($productosRango as $item): ?>



  <?php 

    

    $materialRango_id = $item->getMaterial_id();

    $materialRango = $materialDAO->getById($materialRango_id);



    $unidadCapacidadRango_id = $item->getProducto_unidadCap ();

    $unidadCapacidadRango = $unidadDAO->getById($unidadCapacidadRango_id);

  

    $bocaDAO = new bocaDAO();

  $boca = new boca();

  $boca = $bocaDAO->getById($item->getBoca_id());



   ?>







       

  <tr>

    <td class="celda01" width="186"><a href="catalogo_paso3.php?id=<?php echo $item->getProducto_codigo() ?>" ><?php echo $item->getProducto_codigo() ?></a></td>

    <td class="celda1" width="184"><?php echo $boca->getBoca() ?> (<?php echo strtolower($unidadCapacidadRango->getnombre()) ?>)</td>

    <td class="celda1"><?php echo $item->getProducto_peso() ?> </td>

    <td class="celda1" width="187"><?php echo $materialRango->getnombre_i() ?></td>

  </tr>



  <?php endforeach ?>   

  <?php endif ?>

</table>

</div>

<div id="sepclear"></div>

</div>







<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->

</div>

<!----------------------------FOOTER INTECPLAST-------------------------------------------->



<div style="height:150px;width:100%;"></div>





<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->





</body>

</html>