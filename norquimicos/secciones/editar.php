<?php
if (!isset($_SESSION["id"])) {
    echo "<script type='text/javascript'>window.location='index.php?seccion=index';</script>";
} else {
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
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
                        $(document).ready(function() {
                            $('.bt-preview').colorbox({inline: true, width: "900px", height: "1165px"});
														$('.bt-preview-2').colorbox({inline: true, width: "900px", height: "1205px"});
                        });
                        function cambiar2(band1) {

                            $.post('index.php?seccion=volverlos', {bandera: band1}, function(cambioresultado) {
                                if (cambioresultado == 1) {
                                    window.location = 'index.php?seccion=zonasegura';
                                } else {
                                }
                            });
                        }
                    </script>
                    </head>
                    <body onload="menuSlider.init('menu', 'slide')">
                        <div class="principal">
                            <?php include 'header1.php'; ?>
                            <div class="titulo">
                                <div class="contienetitulo"><h1>EDICI&Oacute;N</h1></div>
                            </div>    
                            <div class="contenido">
                                <div class="contenedorcompany">
                                    <div class="con-cerrar-zona">
                                        <a id="btnmoreenviar" href="index.php?seccion=salir"  onclick="cambiar3(<?php echo $ss ?>)"><span id="bold">cerrar sesión</span></a>
                                        <a id="btnmoreenviar" onclick="cambiar2(<?php echo $ss ?>)" ><span id="bold">« volver</span></a>
                                    </div>            
                                    <h1 class="t-zona"><?php echo utf8_encode($cot[0]["nombre"]) ?>&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo utf8_encode($cot[0]["ubicacion"]) ?></h1>
                                    <p>Su buen desempeño en este módulo es importante para crecer y ser los mejores. Confiamos totalmente en usted.</p>
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
                                                        <input type="hidden" id="idsab<?php echo $a ?>" value="<?php echo $arrayfinal[$a] ?>" />
                                                        <?php $produ = DbHandler::GetAll("SELECT * FROM productos WHERE id=" . $arrayfinal[$a]); ?>
                                                        <td class="center"><a id="elimitemos" onclick="elimitemo(<?php echo $produ[0]["id"] ?>,<?php echo $ss ?>);">X</a></td>    
                                                        <!--   <?php if ($produ[0]["importado"] == 1) { ?>
                                                                                               <td class="center">Si</td>          
                                                        <?php } else { ?>
                                                                                               <td class="center">No</td>
                                                        <?php } ?>-->

                                                        <td class="center"><?php echo $produ[0]["referencia"] ?></td>                                
                                                        <td class="center"><?php echo $produ[0]["nombre"] ?></td>                                
                                                        <td class="center"><input type="checkbox" id="chk_iva<?php echo $a ?>" onclick="sabiva(<?php echo $a ?>, $('#canti<?php echo $a ?>').val(), $('#valsss<?php echo $a ?>').val())" name="chk_iva" /></td>                                
                                                        <td class="center">
                                                            <div class="pesos"></div>
                                                            <input type="text" class="valores" maxlength="5" id="canti<?php echo $a ?>" value="<?php echo $arrayfinalcant[$a] ?>" onblur=" if (this.value == '') {
                                    this.value = 'cantidad'
                                } else {
                                    sabcant(this.value, $('#valsss<?php echo $a ?>').val(),<?php echo $a ?>)
                                }" onclick="if (this.value == 'cantidad')
                                    this.value = ''"/>
                                                        </td>                               
                                                        <td class="center">
                                                            <div class="pesos"></div>
                                                            <input type="text" class="valores" maxlength="10" id="valsss<?php echo $a ?>" value="Ingrese valor" onblur=" if (this.value == '') {
                                    this.value = 'Ingrese valor'
                                } else {
                                    sabcant($('#canti<?php echo $a ?>').val(), this.value,<?php echo $a ?>)
                                }" onclick="if (this.value == 'Ingrese valor')
                                    this.value = ''"/>
                                                        </td>
                                                        <td class="center">
                                                            <div class="pesos" style="position:relative;">
                                                                <span>$</span> 
                                                                <input type="hidden" name="valf<?php echo $produ[0]["id"] ?>" id="valf<?php echo $a ?>" value="a" />
                                                                <span style="width: 116px;margin-left: 9px; overflow: hidden;height: 20px; line-height:20px; background-color: transparent;text-align: right;padding: 0;color: #626262;font: 18px 'MyriadPro-Bold';position: absolute;" id="<?php echo $a ?>">
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
                                    <script>
                        function validez() {
                            var dias1 = $('#country_id').val();
                            var validezs = $('#validez').val();
                            var condi = $('#condicionesdeventa').val();
                            $('#campo6').empty().html(dias1);
                            $('#campo-2').empty().html(validezs);
                            $('#camp11').empty().html(condi);
                        }
                        ;
                                    </script>
                                    <form style="margin-top: 45px;" class="form-edicion" action="">
                                        <div style="margin-top: -40px;"id="formulario">
                                            <input s type="text" maxlength="33" name="validez" id="validez" value="Validez" onblur="if (this.value == '') {
                                this.value = 'Validez'
                            }" onclick="if (this.value == 'Validez') {
                                this.value = ''
                            }" /><br><br>
                                        </div>
                                        <textarea maxlength="150" id="condicionesdeventa" name='condicionesdeventa' class='area-edicion' rows="4" placeholder="Formas de pago" style="width:920px;">Formas de pago</textarea>
                                        <span style="margin-left: 754px !important;color: #666;font-size: 15px;">L&iacute;mite de car&aacute;cteres (" 150 ")</span>

                                        <br></br>


                                        <div >
                                            <select name="dias" id="country_id" onchange="dias(this.value);">
                                                <option value="Inmediata">Inmediata</option>
                                                <option value="15 Dias">15 Dias</option>
                                                <option value="30 Dias">30 Dias</option>
                                                <option value="60 Dias">60 Dias</option>
                                                <option value="90 Dias">90 Dias</option>
                                            </select>
                                        </div>
                                        
                                    </form>


                                    <div style="width:100%; height:auto; float:left; margin-bottom:40px;">
                                      
                                        <br/><br/><br/>
                                        
                                        <a id="btnmorerealizar" style="margin-top: 74px; cursor:pointer;" onclick="Hacerpdf($('#country_id').val(), $('#validez').val(), $('#condicionesdeventa').val(),<?php echo $ss ?>,<?php echo count($arrayfinal) ?>, $('#condicionesdeventa').val(), $('#campocomentario').val(), $('#subtenvio1').val(), $('#ivaenvio').val(), $('#totaltotalenvio').val(),<?php echo $_SESSION["id"] ?>)"><span id="bold">enviar <div  id="carreraAjax">   </div></span></a>

                                        <a id="btnmorerealizar" style="margin-top: 74px;"  href="#preview" onclick="validez();" class="bt-preview"><span id="bold">previsualizar</span></a>
                                        <a id="btnmoreenviar" style="margin-top: 74px;" onclick="cambiar2(<?php echo $ss ?>)" href="javascript:history.back()"><span id="bold">cancelar</span></a>
                                        <!--<a id="btnmorerealizar" style="margin-top: 74px;"  href="#preview-2" class="bt-preview-2"><span id="bold">Nueva</span></a>-->
                                    </div>
                                    

                                    <div style="display:none;">
                                        <div id="preview">
                                            <div class="con-pre-cot">
                                                <div class="cotizacion-esq"><img src="imagenes/cotizacion.jpg" width="900" height="1165" alt=""></div>
                                                <div class="con-campos">
                                                    <!--Expedición -->
                                                    <div class="campo-1">&nbsp;&nbsp;&nbsp;<?php echo date("Y-m-d") ?></div>
                                                    <!--Vencimiento-->
                                                    <div class="campo-2" id="campo-2">&nbsp;&nbsp;&nbsp;Fecha de vencimiento</div>
                                                    <!--Cot. No-->
                                                    <div class="campo-3">&nbsp;&nbsp;&nbsp;<?php echo $ss ?></div>
                                                    <!--Señores-->
                                                    <div class="campo-4"><?php echo utf8_encode($cot[0]["nombre"]) ?></div>
                                                    <!--NIT-->
                                                    <div class="campo-4-nit"><?php echo $cot[0]["cedula"] ?></div>
                                                    <!--Dirección-->
                                                    <div class="campo-5"><?php echo utf8_encode($cot[0]["direccion"]) ?></div>
                                                    <!--Entrega  (Nuevo) -->
                                                    <div class="campo-6" id="campo6"></div>
                                                    <!--Teléfono-->
                                                    <div class="campo-7"><?php echo utf8_encode($cot[0]["telefono"]) ?></div>
                                                    <!--Ciudad-->
                                                    <?php
                                                    if ($cot[0]["ubicacion"] == "FBogotá") {
                                                        $ubicacion = "Fuera de Bogotá";
                                                    } else {
                                                        $ubicacion = "Bogotá";
                                                    }
                                                    ?>
                                                    <div class="campo-8"><?php echo $ubicacion ?></div>
                                                    <!--E-mail-->
                                                    <div class="campo-9" style="font-size: 9.5px;"><?php echo utf8_encode($cot[0]["email"]) ?></div>
                                                    <!--Listado productos-->
                                                    <div class="campo-10">
                                                        <?php
                                                        for ($c = 0, $b = count($arrayfinal); $c < $b; $c++) {
                                                            $produ = DbHandler::GetAll("SELECT * FROM productos WHERE id=" . $arrayfinal[$c]);
                                                            ?>
                                                            <ul>
                                                                <li class="ct1"><?php echo $produ[0]["referencia"] ?></li>
                                                                <li class="ct2" id="cantct1<?php echo $c ?>"><?php echo $arrayfinalcant[$c] ?></li>
                                                                <li class="ct3"><?php echo $produ[0]["presentacion"] ?></li>
                                                                <li class="ct4"><?php echo utf8_encode($produ[0]["texto"]) ?></li>
                                                                <li class="ct5"><img src="imagenes/productos/<?php echo $produ[0]["img"] ?>" width="128" height="70" alt=""></li>
                                                                <li class="ct6" id="ct1<?php echo $c ?>"></li>
                                                                <li class="ct7" id="ct3<?php echo $c ?>"></li><input type="hidden" id="subtenvio" value="0" />
                                                                <li class="ct8" id="precioct3<?php echo $c ?>"></li>
                                                            </ul>


                                                        <?php }
                                                        ?>
                                                    </div>
                                                    <!--Observaciones-->
                                                    <div class="campo-11" id="camp11"></div>
                                                    <!--Condiciones-->
                                                    <div class="campo-12" id="camp12" style="display: none;"></div>
                                                    <!--Aceptada-->
                                                    <div class="campo-13"></div>
                                                    <!--Sello-->
                                                    <div class="campo-14"></div>
                                                    <!--Subtotal-->
                                                    <div class="campo-15" id="subtotje"></div><input type="hidden" id="subtenvio1" value="0" />
                                                    <!--IVA-->
                                                    <div class="campo-16" id="ivaje"></div><input type="hidden" id="ivaenvio" value="0" />
                                                    <!--Total-->
                                                    <div class="campo-17" id="campsfinals"></div><input type="hidden" id="totaltotalenvio" value="0" />
                                                    
                                                    <input type="hidden" id="subtotal" value="0" />
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--Cotización dividida-->
                                        <div id="preview-2">
                                        	<div class="con-pre-cot">
                                          	<div class="con-head-cot"></div>
                                            <div class="con-body-cot"></div>
                                            <div class="con-foot-cot"></div>
                                          </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>       
                            <?php include 'footer1.php'; ?>
                        </div>
                    </body>
                    </html>
                    <?php
                    if (isset($_GET["el"])) {
                        echo '<script>setTimeout(\'alert("Eliminado correctamente");\',400);</script>';
                    }
                    ?>



                <?php } ?>