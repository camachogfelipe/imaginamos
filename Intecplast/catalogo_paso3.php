<?php
  require_once './php/clases.php';

  //Recibimos el codigo del producto por GET
  $producto_codigo = $_GET['id'];

  //Instanciamos el objeto de base de datos correspondiente a los productos
  $productoDAO = new productoDAO();
  $producto = new producto();
  //Obtenemos el arreglo con la información del producto correspondiente al codigo recibido   
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
<!--[if IE]>


  <style type="text/css">

    body, html {
      height:1000px;
      overflow:auto;
    }

  </style>

<![endif]-->
  <title>INTECPLAST S.A.</title>

  <style type="text/css">

    #envcoliconos {
    	position:relative;
    }
  </style>

  <link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />
  <link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
  <link href="css/menu.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/style_modal.css" type="text/css" charset="utf-8"/>
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


<div id="logointecplast">
	<a href="index.php"><img src="images/log.png" border="0" /></a>
</div>


<div style="clear:both"></div>



<div style="height:20px;width:100%;">



<?php if ($_GET['add']==1):?>





  <div style="font-weight:bold; color:#666;width:100%;padding:4px;background-color:#CCC;">Producto añadido al cotizador correctamente</div>





<?php endif; ?>
<?php if ($_GET['sendmail']==1):?>
  <div style="font-weight:bold; color:#666;width:100%;padding:4px;background-color:#CCC;">Solicitud enviada exitosamente</div>
<?php endif; ?>
</div>



<!----------------------------FIN HEADER INTECPLAST------------------------------------------->





<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->

  

<script>
 function enviarCarrito2(id_prod2)

  {

    str=id_prod2;

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

<div id="subtit2">SUGERENCIAS</div>

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
                	<a rel="example_group" href=".<?php echo $sugerido1->getProducto_imagen() ?>"><img src=".<?php echo $sugerido1->getProducto_imagen() ?>" /></a>
                    <a rel="example_group" href=".<?php echo $array_sugerencias[$i][$j]->getImagen() ?>" class="b1">Ver Ensamble</a>
                    <a href="catalogo_paso3.php?id=<?php echo $sugerido1->getProducto_codigo() ?>">Ver Detalles</a>
                    <a href="javascript:enviarCarrito2(<?php echo $sugerido1->getProducto_codigo() ?>)" class="b3">Cotizar</a>
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

<div id="tituloficha2">EJEMPLOS</div>
    <div id="slides_e">
		<div class="slides_container">


      <?php for ($i=0; $i < $iteraciones ; $i++): ?>
      <div class="slide">

        <?php for ($j=0 ,$cont_interno = count($array_div[$i]); $j<$cont_interno ; $j++): ?>

            <a rel="example_group2" href=".<?php echo $array_div[$i][$j]->getimagen(); ?>"><img src=".<?php echo $array_div[$i][$j]->getimagen(); ?>" /></a>

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

<div id="tituloficha"><?php echo $producto->getProducto_nombre() ?> </div>



<table width="288" border="0" cellspacing="4" cellpadding="0">

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Código:</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $producto->getProducto_codigo() ?></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; ">Linea:</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $linea->getnombre_e() ?></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Sublinea:</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $sublinea->getnombre_e() ?></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Boca (<?php echo strtolower($unidadBoca->getnombre()) ?>): </td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $boca->getBoca() ?></td>

  </tr>

  <?php if ($producto->getClase_id()!=3): ?>
    
  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Capacidad (<?php echo strtolower($unidadCapacidad->getnombre()) ?>):</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $producto->getProducto_capacidad() ?></td>

  </tr>
  <?php endif ?>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Material:</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $material->getnombre_e() ?></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Forma:</td>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px; font-weight:bold"><?php echo $forma->getnombre_e() ?></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;">Peso (g): </td>

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

<div id="rowtxticon">Solicitar más información</div>

<div id="rowtxticon">Imprimir</div>

<div id="rowtxticon">



<div id="envbtagregar">
	<div id="bt_agregar">
    	<a href="javascript:enviarCarrito()">&nbsp;</a>
        <!--<button type="button" onclick="enviarCarrito()">Agregar</button>-->
        </div>
   </div>

</div>


<A href="cotizador.php" target="_new" class="boton_b">Cotizar </a>

</div>

</div>

</div>







  <div id="sepclear"></div>

</div>





<!--div id="sepclear3"></div-->

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
<div id="img_tamanos"><img src=".<?php echo $categoria->getimgRango() ?>" /></div>
<table width="965" border="0" cellspacing="0" cellpadding="0">
  <tr class="cabeza_tabla">
    <td class="celdatop">Código del artículo </td>
    <?php if ($producto->getClase_id()==3): ?>
      <td class="celdatop">Boca</td>
    <?php else: ?>
      <td class="celdatop">Capacidad</td>
    <?php endif ?>
    <td class="celdatop">Peso (g) </td>
    <td class="celdatop">Material</td>
  </tr>


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

    <td class="celda1" width="187"><?php echo $materialRango->getnombre_e() ?></td>

  </tr>



  <?php endforeach ?>   

  <?php endif ?>

</table>

</div>

<div id="sepclear"></div>

</div>

</div>

</body>

</html>