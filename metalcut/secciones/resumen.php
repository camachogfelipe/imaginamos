<?php include("head.php"); ?>
	<style type="text/css">.con-info-total h2 {width:65%;}</style>
	<?php include("header-int.php"); 
        $iduser=isset($_SESSION['id']) ? $_SESSION['id'] : '';
        $detalle=''; $valor=0; 
         //  $iduser=$_SESSION['id'];       
            $cCompras= new Dbcompras();
            $mDataP = array("where"=>"user_id='".$iduser."' and estado='Proceso' ");
            $compras = $cCompras->getList2($mDataP);
            $cant = count($compras);


        ?>
    
  <section>
    <div class="con-section">
    	<div class="mg-section clearfix">
        <h1>
        	Resumen de su compra
        	<a href="javascript:history.back()"><div class="back-vn"></div></a>
        </h1>
        <h2>Productos agregados</h2>
        <div class="con-tabla-rs">
          <div>
            <table cellpadding="0" width="100%" cellspacing="0" border="0" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th>Referencia</th>
                  <th>Descripci&#243;n</th>
                  <th>Cantidad</th>
                  <th>V unitario</th>
                  <th>SubTotal</th>
                  <th>IVA</th>
                  <th>Total</th>
                  <th>Acci&#243;n</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                   $Tcan=0; $TotaI=0; $total=0; $iva=0;
                   for($i = 0 ; $i < $cant ; $i++){ 
                       $pieces = explode("-", $compras[$i]["det"]);
                       $detalle='';
                       $j=0;
                       foreach ($pieces  as $valor){
                           if ($j>0) $detalle.=$valor.' ';
                           $j++;
                       }
                       $valoTo=$compras[$i]["cant"]*$compras[$i]["valor"];
                       $iva=$valoTo*0.16;
                       $total=$valoTo+$iva;
                       $TotaI=$TotaI+$iva;
                       $Tcan=$Tcan+$valoTo;
                       
                  ?>
                <tr>
                  <td><?php echo $pieces[0] ?></td>
                  <td><?php echo $detalle ?></td>
                  <td><?php echo $compras[$i]["cant"] ?></td>
                  <td>
                  	<div class="con-datos-rs clearfix">
                    	$<?php echo $compras[$i]["valor"] ?>
                    </div>
                  </td>
                  <td>$<?php echo $valoTo ?></td>
                  <td>
                  	<div class="con-datos-rs clearfix">
                    	$<?php echo $iva ?>
                    </div>
                  </td>
                  <td>
                  	<div class="con-datos-rs clearfix">
                    	$<?php echo $total  ?>
                    </div>
                  </td>
                  <td>
                   <div class="con-datos-rem-bt clearfix">
                      <a href="#" class="elimina-bt" onclick="eliminar('<?php echo $compras[$i]["idcompras"] ?>');"></a>
                    </div>
                  </td>
                </tr>
                <?php  } ?>         
              </tbody>
            </table>
          </div>
				</div>
        <div class="con-total-resumen">
          <ul>
            <li>Precio sin IVA:</li>
            <li class="nums">$<?php echo $Tcan ?></li>
            <li>IVA</li>
            <li class="nums">$<?php echo $TotaI ?></li>
            <li>TOTAL</li>
            <li class="nums">$<?php echo $TotaI+$Tcan; ?></li>
          </ul>
          <div class="con-pago-final">
              
               <?php
                $llave_encripcion = "13bbfc6e379"; //llave de encripción que se usa para generar la fima
                $usuarioId = "96032"; //código único del cliente
                $refVenta = time(); //referencia que debe ser única para cada transacción
                $iva=$TotaI; //impuestos calculados de la transacción
                $baseDevolucionIva=$Tcan; //el precio sin iva de los productos que tienen iva
                $valor=$TotaI+$Tcan;; //el valor total
                $moneda ="COP"; //la moneda con la que se realiza la compra
              //  $prueba = "0"; //variable para poder utilizar tarjetas de crédito de prueba
                $descripcion = $detalle; //descripción de la transacción
                $url_respuesta = "http://repositorio.imaginamos.com.co/FBZ/metalcut2/index.php?base&seccion=respuesta";
                $emailComprador=$_SESSION['user']; //email al que llega confirmación del estado final de la transacción, forma de identificar al comprador
                $firma_cadena = "$llave_encripcion~$usuarioId~$refVenta~$valor~$moneda"; //concatenación para realizar la firma
                $firma = md5($firma_cadena); //creación de la firma con la cadena previamente hecha
                ?>
           <!-- <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);javascript:new_window('https://gateway2.pagosonline.net/apps/gateway/index.html',1100,600);"> -->
                <form method="post" action="https://gateway.pagosonline.net/apps/gateway/index.html" target="_blank">
                <input name="usuarioId" type="hidden" value="<?php echo $usuarioId?>">
                <input name="descripcion" type="hidden" value="<?php echo $descripcion ?>" >
                <input name="extra1" type="hidden" value="<?php echo $descripcion ?>" >
                <input name="refVenta" type="hidden" value="<?php echo $refVenta ?>">
                <input name="valor" type="hidden" value="<?php echo $valor ?>">
                <input name="iva" type="hidden" value="<?php echo $iva ?>">
                <input name="baseDevolucionIva" type="hidden" value="<?php echo $baseDevolucionIva ?>" >
                <input name="firma" type="hidden" value="<?php echo $firma?>">
                <input name="emailComprador" type="hidden" value="<?php echo $emailComprador?>">
              <!--  <input name="prueba" type="hidden" value="0"> -->
                <input name="url_respuesta" type="hidden" value="<?php echo $url_respuesta?>">
                <input class="coco-bt compra-bt" name="Submit" type="submit" value="        ">
                </form>

        <!--     <form name="form1" id="form1" method="post"action="https://gateway2.pagosonline.net/apps/gateway/index.html">
               <input name="usuarioId" id="usuarioId" type="hidden" value="<?php echo $usuarioId; ?>">
                <input name="descripcion" id="descripcion" type="hidden" value="<?php echo $descripcion; ?>" >
                <input name="extra1" id="extra1" type="hidden" value="" >
                <input name="refVenta" id="refVenta" type="hidden" value="<?php echo $refVenta ?>">
                <input name="valor"  id="valor" type="hidden" value="<?php echo $valor; ?>">
                <input name="iva" id="iva" type="hidden" value="<?php echo $iva1; ?>">
                <input name="baseDevolucionIva" id="baseDevolucionIva" type="hidden" value="<?php echo $baseDevolucionIva; ?>" >
                <input name="firma" id="firma" type="hidden" value="<?php echo  $firmacreada; ?>">
                <input name="emailComprador" id="emailComprador" type="hidden" value="<?php echo $emailComprador; ?>" >
                <input name="prueba" id="prueba" type="hidden" value="<?php echo $prueba; ?>"> 
                <input name="url_respuesta" id="url_respuesta" type="hidden" value="<?php echo $url_respuesta; ?>">
                <img src="http://www.pagosonline.com/logos/images/transpeque_05_60x180.png" alt="" width="180" height="60" border="0" />
                <input class="coco-bt compra-bt" name="bt" id="bt" type="submit" value="">
                <div class="coco-bt compra-bt"></div> -->
            <!--  </form>  </a> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>
  <script>
    function eliminar(id){       
         $.ajax({
                        dataType: 'json',
                        type: 'POST',
                        url: "secciones/process-eliminar.php",
                        data: "id="+id,              
                        success:function(data){
                            if (data.success == true){
                                alert(data.message);
                                $(location).attr('href','index.php?base&seccion=resumen');
                            }
                            else{                        
                                $('#msg-error').html('<p>' + data.message + '</p>');
                                $('#msg-error').addClass('msg-error');
                            }
                        },
                        error: function(data,error,errorThrown){alert(error + errorThrown);}
                    }); 
    }
  </script>