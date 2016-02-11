
<?php
if (isset($_SESSION["id_productos"])) {
// echo $_SESSION["id_productos"][2];exit;                                         
    $arrayfinal = array();
    $arrayfinalcant = array();
//se hace segun el numero de veces que este en la consulta
    for ($i = 0, $tot = count($_SESSION["id_productos"]); $i < $tot; $i++) {
//if resultados[posicion] esta en arrayfinal
        if (in_array($_SESSION["id_productos"][$i], $arrayfinal)) {
// se evalua o se busca en todas las posiciones
            for ($j = 0, $tot2 = count($arrayfinal); $j < $tot2; $j++) {
//si la posicion es verdadera entonces se suma en 1 la cantidad
                if ($arrayfinal[$j] == $_SESSION["id_productos"][$i]) {
                    $arrayfinalcant[$j] = (int) $arrayfinalcant[$j] + 1;
                }
            }
        } else {
            $arrayfinal[] = $_SESSION["id_productos"][$i];
            $arrayfinalcant[] = 1;
//   $arrayId[]=$resultados[$i]["id_productos"];
        }
    }
}
/* Sección para definir las variables de paginación */
if(isset($_GET['pag'])) $pag = (int)abs($_GET['pag']);
else $pag = 1;
/* Fin Sección definir variables de paginación */
if (isset($_GET["le"])) {
	$total_productos = DbHandler::GetAll("SELECT COUNT(*) FROM productos WHERE nombre LIKE '" . $_GET["le"] . "%'");
	$total_productos = $total_productos[0]['COUNT(*)'];
	$total_paginas = ceil($total_productos / 6);
	if($pag > $total_paginas) $pag = $total_paginas;
	$limit = ($pag - 1) * 6;
    $productos = DbHandler::GetAll("SELECT * FROM productos WHERE nombre LIKE '" . $_GET["le"] . "%' ORDER BY nombre DESC LIMIT ".$limit.", 6");
} elseif (isset($_GET["pal"])) {
	$total_productos = DbHandler::GetAll("SELECT COUNT(*) FROM productos WHERE nombre REGEXP(LOWER('" . $_GET["pal"] . "')) OR 
										referencia REGEXP(LOWER('" . $_GET["pal"] . "'))");
	$total_productos = $total_productos[0]['COUNT(*)'];
	$total_paginas = ceil($total_productos / 6);
	if($pag > $total_paginas) $pag = $total_paginas;
	$limit = ($pag - 1) * 6;
	$productos = DbHandler::GetAll("SELECT * FROM productos WHERE nombre REGEXP(LOWER('" . $_GET["pal"] . "')) OR 
									referencia REGEXP(LOWER('" . $_GET["pal"] . "')) ORDER BY nombre DESC LIMIT ".$limit.", 6");
} else {
	$total_productos = DbHandler::GetAll("SELECT COUNT(*) FROM productos");
	$total_productos = $total_productos[0]['COUNT(*)'];
	$total_paginas = ceil($total_productos / 6);
	if($pag > $total_paginas) $pag = $total_paginas;
	$limit = ($pag - 1) * 6;
	$productos = DbHandler::GetAll("SELECT * FROM productos LIMIT ".$limit.", 6");
}
?>
<!DOCTYPE html>
  <!--[if lt IE 7]>	<html lang="es" class="no-js ie6">	<![endif]-->
  <!--[if IE 7]>		<html lang="es" class="no-js ie7">	<![endif]-->
  <!--[if IE 8]>		<html lang="es" class="no-js ie8">	<![endif]-->
  <!--[if IE 9]>		<html lang="es" class="no-js ie9">	<![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Norquimicos</title>
        <meta name="viewport" content="width=1024, maximum-scale=2">
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
            <meta http-equiv="content-language" content="es" />
            <meta http-equiv="pragma" content="No-Cache" />
            <meta name="Keywords" lang="es" content="" />
            <meta name="Description" lang="es" content="" />
            <meta name="copyright" content="imaginamos.com" />
            <meta name="date" content="2011" />
            <meta name="author" content="diseño web: imaginamos.com" />
            <meta name="robots" content="All" />
           
  
            <link href="css/norquimicos.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="jquery.ui.all.css">
                <link href="css/jquery.selectbox.css" rel="stylesheet" type="text/css" />
                <?php include 'scripst.php'; ?>
                <script type="text/javascript" src="js/funciones.js"></script>
                <script type="text/javascript" language="javascript">
                    function cambios(valor) {
                        window.location = 'index.php?seccion=cotizar&le=' + valor + '';
                    }
                    function cambios1(valor) {
                        window.location = 'index.php?seccion=cotizar&pal=' + valor + '';
                    }
                </script>
                
                
                
                
                <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
                <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
                <!--<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script> -->
                <script src="js/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8"></script>
                <style type="text/css">
                    .jejes{
                        width: 100%;
                        background: #7ebe57;
                        position: relative;
                        color: #fff;
                        min-width: 120px;
                        font-size: 14px;
                        border: 2px solid #ddd;
                        box-shadow: 0 0 6px #000;
                        -moz-box-shadow: 0 0 6px #000;
                        -webkit-box-shadow: 0 0 6px #000;
                        -o-box-shadow: 0 0 6px #000;
                        padding: 4px 10px 4px 10px;
                        border-radius: 6px;
                        -moz-border-radius: 6px;
                        -webkit-border-radius: 6px;
                        -o-border-radius: 6px;
                        height: 19px;
                        width: 131px;
                        margin-left: 373px;
                        margin-top: 88px;
                    }

                </style>
                <?php include 'scripst.php'; ?>
                <script type="text/javascript">
                    $(function() {
                        $("#mens1").hide();
                        $('#btnmoreenviar').click(function() {
                            var pais = $('.pais').val();
                            if (pais == "noes") {
                                $("#mens1").fadeIn();
                                return false;
                            } else {
                                $("#mens1").fadeOut();
                                $("#formenviar").validationEngine();
                            }
                        });

                    });
										$(function(){$(window).bind("load", function(){$("#loader").fadeOut("slow");});	});
                </script> 
                <script>
                    function cambioCant(band, cant) { //document.getElementById("myHeader");
                        var bandera = parseInt(cant);

                        var urls1 = "index.php?seccion=Funcion1";
                        var data1 = {
                            id2: band,
                            cantidad2: bandera
                        }
                        $.ajax({
                            type: "POST",
                            url: urls1,
                            data: data1,
                            dataType: "json",
                            success: function(data) {
                                // Si el ajax respondio
                                if (data.val == 1) {
                                    //si data es 1 se suma y se guarda
                                    var apuntador = "#productid" + bandera;
                                    var newCant = parseInt($(apuntador).val(bandera));
                                    $(apuntador).val(newCant);
                                    //alert(newCant);
                                    //move.find("input").val(parseInt(move.find("input").val()) + 1);
                                } else {
                                    var apuntador = "#productid" + bandera;
                                    var newCant = parseInt($(apuntador).val(data.val));
                                    $(apuntador).val(newCant);
                                }
                            }
                        });
                    }
                </script>
                </head>
                <body onload="menuSlider.init('menu', 'slide')">
                		<div id="loader">
                      <div id="progress">
                        <div id="inTurnFadingTextG">
  <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">C</div><div id="inTurnFadingTextG_2" class="inTurnFadingTextG">a</div><div id="inTurnFadingTextG_3" class="inTurnFadingTextG">r</div><div id="inTurnFadingTextG_4" class="inTurnFadingTextG">g</div><div id="inTurnFadingTextG_5" class="inTurnFadingTextG">a</div><div id="inTurnFadingTextG_6" class="inTurnFadingTextG">n</div><div id="inTurnFadingTextG_7" class="inTurnFadingTextG">d</div><div id="inTurnFadingTextG_8" class="inTurnFadingTextG">o</div><div id="inTurnFadingTextG_9" class="inTurnFadingTextG">&nbsp;</div><div id="inTurnFadingTextG_10" class="inTurnFadingTextG">p</div><div id="inTurnFadingTextG_11" class="inTurnFadingTextG">r</div><div id="inTurnFadingTextG_12" class="inTurnFadingTextG">o</div><div id="inTurnFadingTextG_13" class="inTurnFadingTextG">d</div><div id="inTurnFadingTextG_14" class="inTurnFadingTextG">u</div><div id="inTurnFadingTextG_15" class="inTurnFadingTextG">c</div><div id="inTurnFadingTextG_16" class="inTurnFadingTextG">t</div><div id="inTurnFadingTextG_17" class="inTurnFadingTextG">o</div><div id="inTurnFadingTextG_18" class="inTurnFadingTextG">s</div><div id="inTurnFadingTextG_19" class="inTurnFadingTextG">,</div><div id="inTurnFadingTextG_20" class="inTurnFadingTextG">&nbsp;</div><div id="inTurnFadingTextG_21" class="inTurnFadingTextG">u</div><div id="inTurnFadingTextG_22" class="inTurnFadingTextG">n</div><div id="inTurnFadingTextG_23" class="inTurnFadingTextG">&nbsp;</div><div id="inTurnFadingTextG_24" class="inTurnFadingTextG">m</div><div id="inTurnFadingTextG_25" class="inTurnFadingTextG">o</div><div id="inTurnFadingTextG_26" class="inTurnFadingTextG">m</div><div id="inTurnFadingTextG_27" class="inTurnFadingTextG">e</div><div id="inTurnFadingTextG_28" class="inTurnFadingTextG">n</div><div id="inTurnFadingTextG_29" class="inTurnFadingTextG">t</div><div id="inTurnFadingTextG_30" class="inTurnFadingTextG">o</div><div id="inTurnFadingTextG_31" class="inTurnFadingTextG">&nbsp;</div><div id="inTurnFadingTextG_32" class="inTurnFadingTextG">p</div><div id="inTurnFadingTextG_33" class="inTurnFadingTextG">o</div><div id="inTurnFadingTextG_34" class="inTurnFadingTextG">r</div><div id="inTurnFadingTextG_35" class="inTurnFadingTextG">&nbsp;</div><div id="inTurnFadingTextG_36" class="inTurnFadingTextG">f</div><div id="inTurnFadingTextG_37" class="inTurnFadingTextG">a</div><div id="inTurnFadingTextG_38" class="inTurnFadingTextG">v</div><div id="inTurnFadingTextG_39" class="inTurnFadingTextG">o</div><div id="inTurnFadingTextG_40" class="inTurnFadingTextG">r</div><div id="inTurnFadingTextG_41" class="inTurnFadingTextG">.</div><div id="inTurnFadingTextG_42" class="inTurnFadingTextG">.</div><div id="inTurnFadingTextG_43" class="inTurnFadingTextG">.</div></div>
                      </div>
                    </div>
                    <div class="principal">
                        <div class="header">
                            <div class="contieneheader">
                                <div class="logo"><a href="index.php?seccion=index" class="<?php
                                    if ($_GET['seccion'] == 'index') {
                                        echo 'activo';
                                    }
                                    ?>"><img src="imagenes/logo.png" /></a></div>
                                <div class="menu">
                                    <ul id="menu">
                                        <li value="1"><a href="index.php?seccion=index" class="<?php
                                            if ($_GET['seccion'] == 'index') {
                                                echo 'activo';
                                            }
                                            ?>">Inicio</a></li>
                                        <li value="<?php
                                        if ($_GET['seccion'] == 'nosotros') {
                                            echo '1';
                                        }
                                        ?>"><a href="index.php?seccion=nosotros" class="<?php
                                                if ($_GET['seccion'] == 'nosotros') {
                                                    echo 'activo';
                                                }
                                                ?>">¿Quiénes somos?</a></li>
                                        <li value="<?php
                                        if ($_GET['seccion'] == 'negocio') {
                                            echo '1';
                                        }
                                        ?>"><a href="index.php?seccion=negocio" class="<?php
                                                if ($_GET['seccion'] == 'negocio') {
                                                    echo 'activo';
                                                }
                                                ?>">Líneas de negocio</a></li>
                                        <li value="<?php
                                        if ($_GET['seccion'] == 'contactenos') {
                                            echo '1';
                                        }
                                        ?>"><a href="index.php?seccion=contactenos" class="<?php
                                                if ($_GET['seccion'] == 'contactenos') {
                                                    echo 'activo';
                                                }
                                                ?>">Contáctenos</a></li>
                                        <li value="<?php
                                        if ($_GET['seccion'] == 'company') {
                                            echo '1';
                                        }
                                        ?>"><a href="index.php?seccion=company" class="<?php
                                                if ($_GET['seccion'] == 'company') {
                                                    echo 'activo';
                                                }
                                                ?>"><img class="bandera" src="imagenes/bandera.png" />English</a></li>
                                    </ul>
                                    <div id="slide"></div>
                                </div>
                            </div>
                        </div>
                        <div class="titulo">
                            <div class="contienetitulo"><h1>COTIZACIONES</h1></div>
                        </div>    
                        <div class="contenido">
                            <div class="contenedorcompany">
                                <div class="con-filtros">
                                    <div id="paso-1"></div>
                                    <div id="buscador">
                                        <input type="text" id="buscars" onblur="if (this.value == '')
                            this.value = 'Buscar...'" onclick="if (this.value == 'Buscar...')
                            this.value = ''" value="Buscar..." ;/>
                                        <input type="submit" onclick="cambios1($('#buscars').val());" class="mas"  onclick="MM_goToURL('parent', 'resultado-busqueda.php');
                        return document.MM_returnValue" value="Ir"/>
                                    </div>
                                    <div id="formulario-az">
                                        <select  onchange="cambios(this.value)" id="country_id">
                                            <option value="">A - Z</option>
                                            <option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option>
                                            <option value="E">E</option><option value="F">F</option><option value="G">G</option><option value="H">H</option>
                                            <option value="I">I</option><option value="J">J</option><option value="K">K</option><option value="L">L</option>
                                            <option value="M">M</option><option value="N">N</option><option value="O">O</option><option value="P">P</option>
                                            <option value="Q">Q</option><option value="R">R</option><option value="S">S</option><option value="T">T</option>
                                            <option value="U">U</option><option value="V">V</option><option value="W">W</option><option value="X">X</option>
                                            <option value="Y">Y</option><option value="Z">Z</option>
                                        </select>
                                    </div>
                                </div>
                                <p>Este moderno módulo le permitirá desarrollar cotizaciones de manera ordenada, rápida, en línea y con múltiples productos de manera simultánea.  
                                    Siga estos 3 pasos básicos y recibirá un correo electrónico con nuestra oferta en un formato Ãºnico.
                                </p>


  <link rel="stylesheet" href="tooltips/tooltips.css" />
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
  $(function() {
    $( document ).tooltip();
  });
  </script>
  <style>
  label {
    display: inline-block;
    width: 5em;
  }
  </style>
  
                                <div class="container" style="margin:40px 0;">
                                    <div id="paso-2"></div>

                                    <div id="paging_site" class="container-pag">
                                        <div class="page_navigation">
                                        	<?php
											$primero = $ultimo = $anterior = $siguiente = 1;
											if($total_productos > 6) :
												if($pag <= $total_paginas and $pag >= ($total_paginas - 4)) :
													$primero = $total_paginas - 4;
													$ultimo = $total_paginas;
													if($pag == $total_paginas) :
														$siguiente = $total_paginas;
														$anterior = $pag - 1;
													else :
														$siguiente = $pag + 1;
														$anterior = $pag - 1;
													endif;
												elseif($pag >= 1 and $pag <= 5) :
													$primero = 1;
													$ultimo = 5;
													if($pag == 1) :
														$anterior = 1;
														$siguiente = $pag + 1;
													else :
														$anterior = $pag - 1;
														$siguiente = $pag + 1;
													endif;
												else :
													$primero = $pag - 2;
													$ultimo = $pag + 2;
													$anterior = $pag - 1;
													$siguiente = $pag + 1;
												endif;
											endif;
											if($primero == 0) $primero = 1;
											?>
                                        	<a class="first_link no_more" href="index.php?seccion=cotizar&pag=1<?php
												if(isset($_GET["le"])) echo "&le=".$_GET["le"];
												if(isset($_GET["pal"])) echo "&pal=".$_GET["pal"];
                                            ?>">Primero</a>
                                            <a class="previous_link no_more" href="index.php?seccion=cotizar&pag=<?php
                                            	echo $anterior;
												if(isset($_GET["le"])) echo "&le=".$_GET["le"];
												if(isset($_GET["pal"])) echo "&pal=".$_GET["pal"];
											?>">&laquo;</a>
                                            <span class="ellipse less" style="display: none;">...</span>
                                            <?php
											for($i=$primero; $i<=$ultimo; ++$i) :
												?>
                                                <a class="page_link first<?php
													if($pag == $i) echo " active_page";
                                                ?>" href="index.php?seccion=cotizar&pag=<?php
                                                	echo $i;
													if(isset($_GET["le"])) echo "&le=".$_GET["le"];
													if(isset($_GET["pal"])) echo "&pal=".$_GET["pal"];
												?>" longdesc="0" style="display: inline;"><?= $i ?></a>
                                                <?php
											endfor;
											?>
                                            <span class="ellipse more" style="display: block;">...</span>
                                            <a class="next_link" href="index.php?seccion=cotizar&pag=<?php
                                            	echo $siguiente;
												if(isset($_GET["le"])) echo "&le=".$_GET["le"];
												if(isset($_GET["pal"])) echo "&le=".$_GET["pal"];
											?>">&raquo;</a>
                                            <a class="last_link" href="index.php?seccion=cotizar&pag=<?php
                                            	echo $total_paginas;
												if(isset($_GET["le"])) echo "&le=".$_GET["le"];
												if(isset($_GET["pal"])) echo "&le=".$_GET["pal"];
											?>">&Uacute;ltimo</a>
                                        </div>
                                        <div id="product">
                                            <ul class="clear content_paging">
                                                <?php for ($a = 0, $b = count($productos); $a < $b; $a++) { ?>
                                                    
                                                   
                                                    <li data-id="<?php echo $productos[$a]["id"] ?>">
                                                        
                                                            <a href="#" title="<?php echo utf8_encode(ucfirst($productos[$a]["texto"])); ?>">
                                                            <h4 class="ui-widget-header"><?php echo utf8_encode($productos[$a]["nombre"]) ?></h4>
                                                            <h7><span id="rojo">Ref:&nbsp;</span><?php echo utf8_encode($productos[$a]["referencia"]) ?></h7>
                                                             
                                                            <div class="saber" style="display: none !important;">
                                                                <div class="saber2">
                                                                    <img style="width: 90px !important; height: 90px !important;" src="imagenes/productos/<?php echo $productos[$a]["img"] ?>" />
                                                                </div>
                                                            </div>
                                                             <div class="foto-pro"><img style="width: 120px; height: 160px;" src="imagenes/productos/<?php echo $productos[$a]["img"] ?>" /></div>
                                                            
                                                            
                                                            <p><?php echo utf8_encode(nl2br(substr($productos[$a]["texto"], 0, 30))) ?>...</p>
                                                            <div class="ui-icon"></div>
                                                        </a>
                                                    </li>
                                                    
                                                <?php } ?>                                      
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tx-sup-cesta">
                                        <h4 class="ui-widget-header">Cotizar</h4>
                                        <p class="tx-cesta">Con un click sostenido sobre la imagen, trae a este lugar tus productos.</p>
                                    </div>
                                    <div id="sidebar">
                                        <div class="basket">
                                            <div class="basket_list">
                                                <div class="head">
                                                    <span class="name">Producto</span>
                                                    <span class="count">Cantidad</span>
                                                </div>
                                                <ul class="con-item-sel">                     
                                                    <?php
                                                    if (isset($arrayfinal)) {
                                                        for ($j = 0, $h = count($arrayfinal); $j < $h; $j++) {
                                                            $productos = DbHandler::GetAll("SELECT * FROM productos WHERE id=" . $arrayfinal[$j]);
                                                            ?>
                                                            <li data-id="<?php echo $arrayfinal[$j] ?>">
                                                                <span class="name">
                                                                    <img style="width: 90px !important; height: 90px !important;" src="imagenes/productos/<?php echo $productos[0]["img"] ?>"  alt="El quinto" /> <!--onblur="cambioCant(<?php echo $arrayfinal[$j] ?>,this.value);"--> 
                                                                </span>
                                                                <input name="productid<?php echo $arrayfinal[$j] ?>" id="productid<?php echo $arrayfinal[$j] ?>" class="count" onblur="cambioCant(<?php echo $arrayfinal[$j] ?>, this.value);" value="<?php echo $arrayfinalcant[$j] ?>" type="text">
                                                                    <button onclick="GenericAjax('EliminarItem',<?php echo $arrayfinal[$j] ?>);" class="delete">X</button>
                                                            </li>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div style="width:250px; height:40px; float:left; margin-top:80px;">
                                            <a id="btncotizar" href="#formenviar"  style="position:relative;"><span id="bold">Cotizar</span><div id="paso-3"></div></a></div>
                                    </div>
                                </div>
                                <form class="cotizar" method="post" action="index.php?seccion=cotenvio" id="formenviar" style="display: none;">     
                                    <div class="seccion1cotiza" >
                                        <div id="formulario">
                                            <input type="hidden" value="Cotizacion" name="envioCot" />
                                            <input value="Nombre" name="nombre" onblur="javascript:if (this.value == '')
                            this.value = 'Nombre';" onfocus="javascript:if (this.value == 'Nombre')
                            this.value = '';" class="validate[required]" data-validation-placeholder="Nombre" type="text" id="texto">
                                        </div>
                                        <div id="formulario">                            
                                            <input value="Nit o cedula" name="cedula" onblur="javascript:if (this.value == '')
                            this.value = 'Nit o cedula';" onfocus="javascript:if (this.value == 'Nit o cedula')
                            this.value = '';" class="validate[required[number]]" data-validation-placeholder="Nit o cedula" type="text" id="texto">
                                        </div>
                                        <div id="formulario">
                                            <input value="Compañía / institución" name="institucion" onblur="javascript:if (this.value == '')
                            this.value = 'Compañía / institución';" onfocus="javascript:if (this.value == 'Compañía / institución')
                            this.value = '';" class="validate[required]" data-validation-placeholder="Compañía / institución" type="text" id="texto">
                                        </div>
                                        <div id="formulario">
                                            <input value="E-mail" name="email" onblur="javascript:if (this.value == '')
                            this.value = 'E-mail';" onfocus="javascript:if (this.value == 'E-mail')
                            this.value = '';" class="validate[custom[email]]" data-validation-placeholder="E-mail" type="text" id="texto">
                                        </div>
                                        <div id="formulario">
                                            <input value="Dirección" name="direccion" onblur="javascript:if (this.value == '')
                            this.value = 'Dirección';" onfocus="javascript:if (this.value == 'Dirección')
                            this.value = '';" class="validate[required]" data-validation-placeholder="Dirección" type="text" id="texto">
                                        </div>
                                    </div>
                                    <div class="seccion1cotiza">
                                        <div id="formulario">
                                            <input value="Teléfono" name="telefono" onblur="javascript:if (this.value == '')
                            this.value = 'Teléfono';" onfocus="javascript:if (this.value == 'Teléfono')
                            this.value = '';" class="validate[custom[phone]]" data-validation-placeholder="Teléfono" type="text" id="texto">
                                        </div>
                                        <div id="formulario">
                                            <input value="Celular" name="celular" onblur="javascript:if (this.value == '')
                            this.value = 'Celular';" onfocus="javascript:if (this.value == 'Celular')
                            this.value = '';" class="validate[custom[phone]]" data-validation-placeholder="Celular" type="text" id="texto">
                                        </div>
                                        <div id="formulario">
                                            <select class="pais" name="zona" id="country_id" tabindex="8" >
                                                <option value="noes" >¿Dónde estás ubicado?</option>
                                                <option value="Bogotá">Bogotá DC.</option>
                                                <option value="FBogotá">Fuera de Bogotá DC.</option>   
                                            </select>
                                        </div>   <div class="jejes" id="mens1">* No eligio su pais</div>
                                        <div id="btnse" style="position:relative;">
                                            <div id="paso-4"></div>
                                            <a href="skype:norquimicos.ltd?call" id="skype"></a>
                                            <input type="submit" value="Enviar" id="btnmoreenviar" />
                                            <!--   <a id="btnmoreenviar" href="#"><span id="bold">enviar</span></a>-->
                                        </div>
                                    </div>
                                </form>    
                            </div>
                        </div>
                        <?php include 'footer.php' ?>
                    </div>
                    
                </body>
                </html>
                <?php
                if (isset($_GET["apr"])) {
                    echo '<script>setTimeout(\'alert("Cotización enviada correctamente, pronto un asesor se contactará con usted");\',400);</script>';
                }
                ?>