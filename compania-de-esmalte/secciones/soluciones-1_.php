<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>GRUPO NORTH | Soluciones</title>
<meta name="viewport" content="width=1000, maximum-scale=2" />
<link type="image/x-icon" href="../favicon.ico" rel="shortcut icon" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="<?php echo Link::Build() ?>/css/north.css" rel="stylesheet" />

</head>
<body>

	<div id="loader"><div id="progress"></div></div>

  <?php include("header.php"); 
  //Prog: Héctor Fernández
  // Lineas de productos, categorias, subcategorias y productos.
  // Obtenemos los datos en variables que relacionaremos con el nombre de la tabla. Utilizando el DbHanddler de Rucowfony.
  // se hace un str_replace para llamar la imagen redimensiondad. y no la referenciada en base de datos que es la original.
  // Nos aseguramos que no ocurran problemas de cotejamiento utilizando utf8_encode para traer los textos.
  ?>
  
  <div class="info-general pag-soluciones">
  	<div class="con-info-general">
      <div class="con-soluciones">
      	<img src="imagenes/titulos/home-1.png" width="500" height="100" alt="">
      	<!--<h2>Nuestras</h2>
      	<h1>Soluciones</h1>-->
        <div class="con-nav-sol">
        	<ul>
          	<?php
							// Definimos la solución
							if(isset($_GET['sol'])) $sol = $_GET['sol'];
							else $sol = 1;
							//definimos la categoría
							if(isset($_GET['cat'])) $cat = $_GET['cat'];
							else $cat = "";
							//definimos la subcategoría
							if(isset($_GET['scat'])) $scat = trim($_GET['scat']);
							else $scat = "";
            ?>
          	<a class="item-solucion <?= ($sol==1)?"sub-actual ":" "; ?>itemsol1" data-id="solucion-1"><li class="bt-nav-sol bt-nav-sol-1"><img src="imagenes/solucion-t1.png"></li></a>
            <a class="item-solucion <?= ($sol==2)?"sub-actual ":" "; ?>itemsol2 " data-id="solucion-2"><li class="bt-nav-sol bt-nav-sol-2"><img src="imagenes/solucion-t2.png"></li></a>
            <a class="item-solucion <?= ($sol==3)?"sub-actual ":" "; ?>itemsol3 " data-id="solucion-3"><li class="bt-nav-sol bt-nav-sol-3"><img src="imagenes/solucion-t3.png"></li></a>
          </ul>
        </div>     
        
<!--Solución 1-->        
<?php 


//Damos inicio al bucle queneral que nos trarerá todos los datos;
for($general=0; $general<3; $general++): ?>
        <div id="solucion-<?=($general+1)?>" class="con-solucion" style="display:<?= ($sol==($general+1))?"block":"none"; ?>">
            <?php
            // Obtenemos las categorías  de cada linea de productos empezando por cocción, en base de datos referenciado como linea 1.
            $coccion = DbHandler::GetAll("SELECT * FROM categorias WHERE lineas_id = ".($general+1)." ORDER BY id ASC");
            $contadorCoccion = count($coccion);
            ?>
        	<div class="con-sub-nav">
          	<!--Sub-menu-1-->
                <?php 
                $consecutivo = 0;
                for($i=0; $i<$contadorCoccion; $i++): 
                  ($i==0? $activo = 'sub-first': $activo=''); 
                  ($i==0? $activosub = 'submenu-sol-'.($general+1): $activosub=''); 
                  //($i==0? $activosubnav = 'sub-nav-'.($general+1): $activosubnav=''); 
									$activosubnav = 'sub-nav-'.($general+1);
                    ?>
            <div>
              <ul class="menu-sol <?= $activo; ?>">
                <li><?php echo $coccion[$i]['titulo']; ?></li>
                <div class="sub-nav-lazo-1"></div>
                <div class="sub-nav-lazo-2"></div>
                <div class="sub-nav-arrow"></div>
              </ul>
              <ul class="submenu-sol <?= $activosub; ?>" data-id="<?= $coccion[$i]['id']; ?>" style="display:<?= ($cat==$coccion[$i]['id'])?"block":"none"; ?>">
                  <?php $subs=  DbHandler::GetAll("SELECT * FROM subcategorias WHERE categorias_id =".$coccion[$i]['id']);
                  // obtenemos las subcategorías.
                  
                  for($h=0, $count=  count($subs); $h<$count; $h++):
                      $consecutivo = $consecutivo +1;
                      ?><li><a class="item-gal-<?=($general+1)?> <?= ($scat==$consecutivo)?$activosubnav:""; ?>" data-id="info-sol-<?=($general+1)?>_<?= $consecutivo ?>" data-title="<?= $activosubnav ?>"><?php echo $subs[$h]['titulo']; ?></a></li><?php
                  endfor;
                  ?>
              </ul>
            </div>
                <?php endfor; ?>
          </div>
          <div class="con-vistas-sol">
<!--Galeria items soluciones-->
<?php 
$consecutivo = 0;
 for($i=0; $i<$contadorCoccion; $i++): 
$subs=  DbHandler::GetAll("SELECT * FROM subcategorias WHERE categorias_id =".$coccion[$i]['id']);

for($h=0, $count=  count($subs); $h<$count; $h++):
     $consecutivo = $consecutivo +1;
$productos1 = DbHandler::GetAll("SELECT * FROM productos WHERE subcategorias_id =".$subs[$h]['id']); 
$contadorproductos = count($productos1);
?>
            <div id="info-sol-<?=($general+1)?>_<?= $consecutivo ?>" class="con-item-soluciones-<?=($general+1)?>">
              <div class="paging_site-<?=($general+1)?>_<?= $consecutivo ?>">
                <ul class="content_paging">
                    <?php for($p=0; $p<$contadorproductos; $p++):
                        ?>
                  <li>
                    <a href="index.php?base&seccion=solucion-info&idp=<?=$productos1[$p]['id']."&sol=".$coccion[$i]['lineas_id']."&cat=".$coccion[$i]['id']."&scat=".$consecutivo?>">
                      <div class="item-sol">
                        <img src="img/productos/<?php echo str_replace('original','redimension',$productos1[$p]['imagen1']) ?>" width="220" height="208" alt="">
                        <div class="over-item-sol">
                          <div class="pick-over-sol"><img src="imagenes/pick-over-sol.png" width="42" height="42" alt=""></div>
                          <p><?php echo $productos1[$p]['nombre']; ?></p>
                          <h3>$<?php echo $productos1[$p]['precio']; ?></h3>
                          <h4>PRECIO</h4>
                        </div>
                      </div>
                    </a>
                    <div class="sombra-item-sol"></div>
                  </li>
                        <?php
                    endfor; ?>           
                </ul>
              	<div class="page_navigation"></div>
              </div>
            </div>
<?php endfor;
endfor;
?>

          </div>
        </div>
  <?php // Bucle general finaliza aquí.
 endfor;
  ?>
<!--Fin solución 1-->   
      </div>
      <div class="sep-sombra sep-internas"></div>
    </div>
  </div>

	<?php include("footer.php"); ?>
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.pajinate.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript" src="js/jSoluciones.js"></script>
<?php 
//Ajuste: llamamos la variable traída por método get que nos indica cual item debe mostrarse.
if(isset($_GET['idsol'])){
$idsol = $_GET['idsol'];
if($idsol==2){
 ?>
<script type="text/javascript" >
$(document).ready(function(){
//    alert();
    $(".con-nav-sol ul a").removeClass("sub-actual");
    $(".con-nav-sol ul a").next().addClass("sub-actual");
   $(".itemsol2").click();
});
</script>    
 <?php   
}elseif($idsol==3){
     ?>
<script type="text/javascript" >
$(document).ready(function(){
    
     $(".con-nav-sol ul a").removeClass("sub-actual");
    $(".con-nav-sol ul a").next().next().addClass("sub-actual");
   $(".itemsol3").click();
});
</script>    
 <?php  
}    
}
?>
</body>
</html>