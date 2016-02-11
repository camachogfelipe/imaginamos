<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<link href="css/tabla.css" rel="stylesheet" type="text/css" />

<script src="js/funciones.js" type="text/javascript" charset="utf-8"></script>
<?php include 'scripst.php'; ?>
<style type="text/css">
    .documentacion, .zona-seguridad {display:none !important;}
    #elimitemos{background: red;padding: 6px 8px;color: white;border-radius: 8px; cursor:pointer;}
</style>
<?php
if (isset($_GET["ss"])) {
    $ss = $_GET["ss"];
} else {
    echo "<script type='text/javascript'>window.location='index.php?seccion=zonasegura';</script>";
}
$cot = DbHandler::GetAll("SELECT * FROM cotizaciones WHERE id=" . $ss);
?>

<script type="text/javascript">
	$(document).ready(function(){$('.bt-preview').colorbox({inline:true, width:"900px", height:"1165px"});});
</script>

</head>
<body onload="menuSlider.init('menu','slide')">
    <div class="principal">
        <?php include 'header1.php'; ?>
        <div class="titulo">
            <div class="contienetitulo"><h1>EDICIÓN</h1></div>
        </div>    
        <div class="contenido">
            <div class="contenedorcompany">
                <div class="con-cerrar-zona">
                    <a id="btnmoreenviar" href="index.php?seccion=salir"  onclick="cambiar3(<?php echo  $ss ?>)"><span id="bold">cerrar sesión</span></a>
                    <a id="btnmoreenviar" onclick="cambiar2(<?php echo  $ss ?>)" href="index.php?seccion=zonasegura"><span id="bold">« volver</span></a>
                </div>            
                <h1 class="t-zona"><?php echo  utf8_encode($cot[0]["nombre"]) ?>&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo  utf8_encode($cot[0]["ubicacion"]) ?></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eleifend, quam a volutpat scelerisque, orci odio tristique orci, vel scelerisque lorem magna quis enim.</p>
                <?php
                $resultados = DbHandler::GetAll("SELECT * FROM cantidad_cotizacion WHERE id_cotizacion='" . $ss . "'");
                $arrayfinal = array();
                $arrayid = array();
                $arrayfinalcant = array();
                //se hace segun el numero de veces que este en la consulta
                for ($i = 0, $tot = count($resultados); $i < $tot; $i++) {
                    $arrayid[] = $resultados[$i]["id"];
                    //if resultados[posicion] esta en arrayfinal
                    if (in_array($resultados[$i]["id_productos"], $arrayfinal)) {
                        // se evalua o se busca en todas las posiciones
                        for ($j = 0, $tot2 = count($arrayfinal); $j < $tot2; $j++) {
                            //si la posicion es verdadera entonces se suma en 1 la cantidad
                            if ($arrayfinal[$j] == $resultados[$i]["id_productos"]) {
                                $arrayfinalcant[$j] = (int) $arrayfinalcant[$j] + 1;
                            }
                        }
                    } else {
                        $arrayfinal[] = $resultados[$i]["id_productos"];
                        $arrayfinalcant[] = 1;
                        //   $arrayId[]=$resultados[$i]["id_productos"]; style="height: auto !important;"
                    }
                }
                ?>
                <input type="hidden" value="<?php echo count($arrayfinal) ?>" id="holas" /> 
                <div class="con-tabla-editar">
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="tablaEdicion">
                        <!--Encabezado Tabla-->
                        <thead>
                            <tr>
                                <th width="3%" style="cursor:default;">Borrar</th>
                                <th width="5%" style="cursor:default;">Importado</th>                            
                                <th width="5%" style="cursor:default;">Referencia</th>                            
                                <th width="25%" style="cursor:default;">Producto</th>                            
                                <th width="7%" style="cursor:default;">Iva</th>                            
                                <th width="16%" style="cursor:default;">Cantidad</th>
                                <th width="17%" style="cursor:default;">Valor unitario</th>
                                <th width="17%" style="cursor:default;">Valor total</th>

                            </tr>
                        </thead>                  
                        <!--Contenido Tabla-->
                        <tbody style="position:relative;">
                            <?php for ($a = 0, $b = count($arrayfinal); $a < $b; $a++) { ?>
                                <tr>
                                   
                                    <?php
                                    $produ = DbHandler::GetAll("SELECT * FROM productos WHERE id=" . $arrayfinal[$a]); ?>
                                     <td class="center"><a id="elimitemos" onclick="elimitemo(<?php echo  $produ[0]["id"] ?>,<?php echo  $ss ?>); ">X</a></td>    
                                    <?php
                                    if ($produ[0]["importado"] == 1) {

                                        //1 es porque si 
                                        ?>
                                        <td class="center">Si</td>          
                                    <?php } else { ?>
                                        <td class="center">No</td>
                                    <?php } ?>

                                    <td class="center"><?php echo  $produ[0]["referencia"] ?></td>                                
                                    <td class="center"><?php echo  $produ[0]["nombre"] ?></td>                                
                                    <td class="center"><input type="checkbox" id="chk_iva<?php echo  $a ?>" onclick="sabiva(<?php echo  $a ?>,$('#canti<?php echo  $a ?>').val(),$('#valsss<?php echo  $a ?>').val())" name="chk_iva" /></td>                                
                                    <td class="center">
                                        <div class="pesos"></div>
                                        <input type="text" class="valores" id="canti<?php echo  $a ?>" style="margin-top: -25px; overflow: hidden;" value="<?php echo  $arrayfinalcant[$a] ?>" onblur=" if(this.value==''){this.value='cantidad'} else{sabcant(this.value ,$('#valsss<?php echo  $a ?>').val(),<?php echo  $a ?>)}" onclick="if(this.value=='cantidad') this.value=''"/>
                                    </td>                               
                                    <td class="center">
                                        <div class="pesos"></div>
                                        <input type="text" class="valores" id="valsss<?php echo  $a ?>" value="valor" onblur=" if(this.value==''){this.value='valor'} else{sabcant($('#canti<?php echo  $a ?>').val(),this.value,<?php echo  $a ?>)}" onclick="if(this.value=='valor') this.value=''"/>
                                    </td>
                                    <td class="center">
                                        <div class="pesos">
                                            <span>$</span> 
                                            <input type="hidden" name="valf<?php echo  $produ[0]["id"] ?>" id="valf<?php echo  $a ?>" value="a" />
                                            <span style="width: 120px;margin-left: -32px; overflow: hidden;height: 15px;background-color: transparent;text-align: right;padding: 5px;color: #626262;font: 18px 'MyriadPro-Bold';position: absolute;" id="<?php echo  $a ?>">
                                            </span>
                                        </div>
                                    </td>

                                </tr>                       
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="conToTabla">                    
                        <div class="conTitToTabla">TOTAL:</div>                    
                        <div class="conValToTabla">  $ <input type="text" id="finalje"/>                        
                        </div>
                    </div>
                </div>
                <form class="form-edicion" action="">
                    <textarea name='campocomentario' class='area-edicion' rows="4"  onblur="if(this.value=='') this.value='Comentario'" onclick="if(this.value=='Comentario') this.value=''" style="width:920px;" ;>Comentario</textarea>
                </form>
                <div style="width:100%; height:auto; float:left; margin-bottom:40px;">
                    <a id="btnmorerealizar" href="#"><span id="bold">enviar</span></a>
                    <a id="btnmorerealizar" href="#preview" class="bt-preview"><span id="bold">previsualizar</span></a>
                    <a id="btnmoreenviar" onclick="cambiar2(<?php echo  $ss ?>)" href="javascript:history.back()"><span id="bold">cancelar</span></a>
                </div>
                <div style="display:none;">
                  <div id="preview">
                  	<div class="con-pre-cot">
                    	<div class="cotizacion-esq"><img src="imagenes/cotizacion.jpg" width="900" height="1165" alt=""></div>
                      <div class="con-campos">
                      
                      
                      
                      
                      
                      	<div class="campo-1" style="position:absolute; width:140px; height:16px; left:160px; top:146px; overflow:hidden;"></div>
                        
                        <div class="campo-2" style="position:absolute; width:136px; height:16px; left:440px; top:146px; overflow:hidden;"></div>
                        
                        <div class="campo-3" style="position:absolute; width:124px; height:16px; left:730px; top:146px; overflow:hidden;"></div>
                        
                        <div class="campo-4" style="position:absolute; width:754px; height:16px; left:100px; top:206px; overflow:hidden;"></div>
                        
                        <div class="campo-5" style="position:absolute; width:476px; height:16px; left:100px; top:254px; overflow:hidden;"></div>
                        
                        <div class="campo-6" style="position:absolute; width:228px; height:16px; left:625px; top:254px; overflow:hidden;"></div>
                        
                        <div class="campo-7" style="position:absolute; width:200px; height:16px; left:100px; top:302px; overflow:hidden;"></div>
                        
                        <div class="campo-8" style="position:absolute; width:200px; height:16px; left:370px; top:302px; overflow:hidden;"></div>
                        
                        <div class="campo-9" style="position:absolute; width:174px; height:16px; left:680px; top:302px; overflow:hidden;"></div>
                        
                        
                        
                        <div class="campo-10" style="position:absolute; width:808px; height:468px; padding-right:18px; left:48px; top:372px; overflow:auto;">
                        
                        	<ul>
                          
                          	<li class="ct1">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct2">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct3">Lorem ipsum</li>
                            <li class="ct3">Lorem ipsum</li>
                            
                          </ul>
                          
                          <ul>
                          
                          	<li class="ct1">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct2">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct3">Lorem ipsum</li>
                            <li class="ct3">Lorem ipsum</li>
                            
                          </ul>
                          
                          <ul>
                          
                          	<li class="ct1">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct2">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct3">Lorem ipsum</li>
                            <li class="ct3">Lorem ipsum</li>
                            
                          </ul>
                          
                          <ul>
                          
                          	<li class="ct1">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct2">Lorem ipsum</li>
                            <li class="ct1">Lorem ipsum</li>
                            <li class="ct3">Lorem ipsum</li>
                            <li class="ct3">Lorem ipsum</li>
                            
                          </ul>
                          
                        
                        </div>
                        
                        
                        
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>       
        <?php include 'footer1.php'; ?>
    </div>
    

</body>
</html>
<?php if (isset($_GET["el"])) { echo '<script>setTimeout(\'alert("Eliminado correctamente");\',400);</script>';} ?>