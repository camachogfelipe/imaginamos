<?php

$s = $_GET['s'];

  include_once './php/clases.php';



  $id = $_GET['id'];





  $productoDAO = new productoDAO();

  $producto = new producto();

  $productos = $productoDAO->getByCategoria($id);

  $total = $productoDAO->total();



  $categoriaDAO = new categoriaDAO();

  $categoria = new categoria();

  $categoria = $categoriaDAO->getById($id);







function paginacion( $pagActual=0, $regPorPagina=0, $cantidad=0, $showPages=5, $objData = NULL ){

  $pagFirst = 'javascript:void(0);';

  $pagLast = 'javascript:void(0);';

  $pagPrev = 'javascript:void(0);';

  $pagNext = 'javascript:void(0);';

  $paginacion = array();

  $paginacionFin = array();

  $paginas = ceil( $cantidad / $regPorPagina );

  $pagNextPrev = ($showPages-1)/2;

  $addIni = 0;

  $addIniInd = 999;

  $addFin = 0;

  $addFinInd = 999;



  // Construimos paginacion interna

  for( $i=1; $i<=$paginas ; $i++ ){

    $paginacion[$i] = array(

      "label" => $i,

      "accion" => "javascript:cambiarInputPagina(".$i.");"

      );

  }



  // Validamos la pagina actual y agregamos link a primero y anterior en caso de estar en pagian actual superior a 1

  if( $pagActual>1 ){

    $pagFirst = "javascript:cambiarInputPagina(1);";

    $pagPrev = "javascript:cambiarInputPagina(".($pagActual-1).");";

  }



  // Validamos la pagina actual y agregamos link a ultimo y siguiente en caso de estar en pagian actual no sea la ultima

  if( $pagActual<$paginas ){

    $pagLast = "javascript:cambiarInputPagina(".$paginas.");";

    $pagNext = "javascript:cambiarInputPagina(".($pagActual+1).");";

  }



  // Obtenemos las dos primeras paginas

  for( $i=$pagActual; $i<($pagActual+$pagNextPrev) ; $i++){

    if( isset($paginacion[($i-2)]) ){

      $paginacionFin[] = $paginacion[($i-2)];

      $addIniInd = $i-2;

      $addIni ++;

    }

  }





  // Agregamos pagina actual, debemos colocar los estilos de activo

  if( isset($paginacion[$pagActual]) ){

    $paginacionFin[] = $paginacion[$pagActual];

  }



  // Obtener las dos paginas finales

  for( $i=$pagActual; $i<($pagActual+$pagNextPrev) ; $i++){

    if( isset($paginacion[($i+1)])){

      $paginacionFin[] = $paginacion[($i+1)];

      $addFinInd = ($i+1);

      $addFin ++;

    }

  }



  // Verificamos si se agregaron las cantidides iniciales completas, de hacer falta alguna, tratamos de agregar al final

  if( $addIni < $pagNextPrev ){

    $faltante = $pagNextPrev - $addIni;

    for( $i=$addFinInd ; $i<($addFinInd+$faltante) ; $i++ ){

      if( isset($paginacion[($i+1)]) ){

        $paginacionFin[] = $paginacion[($i+1)];

      }

    }

  }



  // Verificamos si se agregaron las cantidides iniciales completas, de hacer falta alguna, tratamos de agregar al final

  if( $addFin < $pagNextPrev ){

    $faltante = $pagNextPrev - $addFin;

    $arrayFin = array();

    $ult = $addIniInd-1;

    for( $i=($ult-$faltante); $i<$ult ; $i++ ){

      if( isset($paginacion[$i]) ){

        $arrayFin[] = $paginacion[$i];

      }

    }

    for( $i=0,$tot=count($paginacionFin); $i<$tot; $i++ ){

      $arrayFin[] = $paginacionFin[$i];

    }

    unset($paginacionFin);

    $paginacionFin = $arrayFin;

  }



  // Recorremos y obtenemos solo los datos para mostrar

  $hasta = $regPorPagina * $pagActual;

  $desde = $hasta - $regPorPagina;

  $objDataSalida = array();

  for( $i=$desde; $i<$hasta ; $i++ ){

    if( isset($objData[$i])){

      $objDataSalida[] = $objData[$i];

    }

  }



  // Agregar links faltantes al inicio del array

  $retorno = array(

    'first'=>$pagFirst,

    'prev'=>$pagPrev,

    'paginacion'=>$paginacionFin,

    'next'=>$pagNext,

    'last'=>$pagLast,

    'data'=>$objDataSalida

    );



  return $retorno;

}



$pag=1;

if( isset( $_GET["pag"])){

  $pag = (int)$_GET["pag"];

}



$resultadoFinal = paginacion( $pag, 10, count($productos), 5, $productos );

$productos = $resultadoFinal["data"];





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

<link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />

<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

<link href="css/menu.css" rel="stylesheet" type="text/css" />

<style type="text/css">

<!--

.Estilo1 {color: #00FFFF}

-->



#subtit1 a{

 

  text-decoration:none;

  color:#3F88C1;

}



#subtit1 a:active{

 

  text-decoration:none;

  color:#3F88C1;



}



#subtit1 a:hover{

 

  text-decoration:none;

  color:#3F88C1;



}



#subtit1 a:visited{

 

  text-decoration:none;

  color:#3F88C1;



}

</style>





<link href="style_acord/format.css" rel="stylesheet" type="text/css" />

<link href="style_acord/text.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>

<script type="text/javascript" src="includes/javascript.js"> </script>



<script type="text/javascript">



function getResulset(){





if (window.XMLHttpRequest)

  {// code for IE7+, Firefox, Chrome, Opera, Safari

  var xmlhttp=new XMLHttpRequest();

  }

else

  {// code for IE6, IE5

  var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

  }

xmlhttp.onreadystatechange=function()

  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {

    document.getElementById("resulset").innerHTML=xmlhttp.responseText;



    }

  }

xmlhttp.open("GET","productos_detalle.php?id="+$("#id").val()+"&pag="+$("#pag").val(),true);

xmlhttp.send();

}





function cambiarInputPagina(pag){

  $("#pag").val(pag);

  getResulset();

}



</script>

</head>



<body class="body" id="resulset">





<div id="wrapcontentintecplast">



<!----------------------------HEADER INTECPLAST-------------------------------------------->





<?php include("includes/principalHeader.php"); ?>





<!----------------------------FIN HEADER INTECPLAST------------------------------------------->





<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->





<div id="subtit1"><a href="productos.php" >Productos: </a> <?php echo $categoria->getnombre_e() ?> <div id="btbackp"><a href="productos.php?s=<?php echo $s; ?>">&nbsp;</a></div></div>



<input type="hidden" id="id" name="id" value="<?php echo $id ?>" />

<div id="envcontprodinf">





<?php if ($total>0): ?>

  

<?php foreach ($productos as $producto): ?>



<div id="thumb2col">

  <div id="imgthumb2">

  

    <div id="btmodprodsec">

      <a href="" onclick="window.open('catalogo_paso3.php?id=<?php echo $producto->getProducto_codigo() ?>','', 'width=1084, height=900, location=no, menubar=no, status=no,toolbar=no, scrollbars=yes, resizable=no'); return false">&nbsp;</a>



      <!--<a href="catalogo_paso3.php?id=<?php echo $producto->getProducto_codigo() ?>">&nbsp;</a>-->

    </div>



    <img src=".<?php echo $producto->getProducto_imagen() ?>" width="170" height="153" border="0" />



  </div>

  <div id="textosdetalle">

    <h1><?php echo $producto->getProducto_codigo() ?> </h1>

    <?php echo $producto->getProducto_nombre() ?>

  </div>

</div>



<?php endforeach ?>



<?php endif ?>







<div id="sepclear"></div>





<div id="subtitproductos">

<div id="envpaginacion">

<div id="btpag1"><a href="<?php echo $resultadoFinal['first'] ?>" >PRIMERO</a></div>

<div id="btpag1"><a href="<?php echo $resultadoFinal['prev'] ?>">ANTERIOR</a></div>

<?php

//echo "<pre>"; var_dump($resultadoFinal['paginacion']); echo"</pre>";

foreach ($resultadoFinal['paginacion'] as $resultado): ?>

  

<div id="btpag2"><a href="<?php echo $resultado['accion'] ?>"><?php echo $resultado['label'] ?></a></div>



<?php endforeach ?>



<div id="btpag1"><a href="<?php echo $resultadoFinal['next'] ?>">SIGUIENTE</a></div>

<div id="btpag1"><a href="<?php echo $resultadoFinal['last'] ?>">ÚLTIMO</a></div>





</div>





  <input type="hidden" id="pag" name="pag" value="1"/>



</div>



















<div id="sepclear2"></div>













</div>



<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->

</div>

<!----------------------------FOOTER INTECPLAST-------------------------------------------->



<?php include("includes/principalFooter.php"); ?>





<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->





</body>

</html>