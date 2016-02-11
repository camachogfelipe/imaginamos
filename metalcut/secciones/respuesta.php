
<?php include("head.php"); ?>
  <?php include("header-int.php"); ?>
<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<?php
$llave="13bbfc6e379";/////llave de usuario de pruebas 2
$usuario_id=$_REQUEST['usuario_id'];
$ref_venta=$_REQUEST['ref_venta'];
$valor=$_REQUEST['valor'];
$moneda=$_REQUEST['moneda'];
$estado_pol=$_REQUEST['estado_pol'];
$firma_cadena= "$llave~$usuario_id~$ref_venta~$valor~$moneda~$estado_pol";
$firmacreada = md5($firma_cadena);//firma que generaron ustedes
$firma =$_REQUEST['firma'];//firma que envía nuestro sistema
$ref_venta=$_REQUEST['ref_venta'];
$fecha_procesamiento=$_REQUEST['fecha_procesamiento'];
$ref_pol=$_REQUEST['ref_pol'];
$cus=$_REQUEST['cus'];
$extra1=$_REQUEST['extra1'];
$banco_pse=$_REQUEST['banco_pse'];
if($_REQUEST['estado_pol'] == 6 && $_REQUEST['codigo_respuesta_pol'] == 5)
{$estadoTx = "Transacci&oacute;n fallida";}
else if($_REQUEST['estado_pol'] == 6 && $_REQUEST['codigo_respuesta_pol'] == 4)
{$estadoTx = "Transacci&oacute;n rechazada";}
else if($_REQUEST['estado_pol'] == 12 && $_REQUEST['codigo_respuesta_pol'] == 9994)
{$estadoTx = "Pendiente, Por favor revisar si el d&eacute;bito fue realizado en el Banco";}
else if($_REQUEST['estado_pol'] == 4 && $_REQUEST['codigo_respuesta_pol'] == 1)
{$estadoTx = "Transacci&oacute;n aprobada";}
else
{$estadoTx=$_REQUEST['mensaje'];}
if(strtoupper($firma)==strtoupper($firmacreada)){//comparacion de las firmas para comprobar que los datos si vienen de Pagosonline
?>
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        
        <div class="con-full">
          <h1>
            Confirmación de su pago
            <a href="javascript:history.back()"><div class="back-vn"></div></a>
          </h1>
          <div class="con-torn-img"><img src="assets/img/torneado-img-rs.jpg" width="396" height="450" alt=""></div>
          <div class="sep-line"></div>
          <div class="con-torn-info">
            <div class="torn-hd">
              <h1>Resumen del pago</h1>
            </div>
            <div class="torn-info">
              <div class="scroll-wrap">
                <ul>
                  <table width="100%" border="1">
                    <tr>
                      <td><p>Nombre de la empresa:</p></td>
                      <td><p>METALCUT</p></td>
                    </tr>
                    <tr>
                      <td><p>Fecha de procesamiento:</p></td>
                      <td><p> <?php echo $fecha_procesamiento; ?> </p></td>
                    </tr>
                    <tr>
                      <td><p><?php echo 'Estado de la transacción' ?></p></td>
                      <td><p> <?php echo $estadoTx; ?> </p></td>
                    </tr>
                    <tr>
                      <td><p>Referencia de la venta:</p></td>
                      <td><p> <?php echo $ref_venta; ?> </p></td> 
                    </tr>
                    <tr>
                      <td><p>Referencia de la transacción:</p></td>
                      <td><p> <?php echo $ref_pol; ?> </p></td>
                    </tr>
                    <tr><?php if($banco_pse!=null){ ?>
                    <tr>
                      <td>cus </td>
                      <td><?php echo $cus; ?> </td>
                    </tr>
                    <tr>
                      <td><p>Banco:</p></td>
                      <td><p> <?php echo $banco_pse; ?> </p></td>
                    </tr>
                    <?php
                    }
                    ?>
                    <tr>
                      <td><p>Valor total:</p></td>
                      <td><p> <?php echo number_format($valor); ?> </p></td>
                    </tr>
                    <tr>
                      <td><p>Moneda:</p></td>
                      <td><p> <?php echo $moneda; ?> </p></td>
                    </tr>
                    <tr>
                      <td><p>Descripción:</p></td>
                      <td><p> <?php echo ($extra1); ?> </p></td>
                    </tr>
                  </table>
                </ul>
              </div>
            </div>
            <div class="torn-fn">
            	<p>Si tiene alguna duda acerca de esta transacci&oacute;n por favor cumun&iacute;quese con nuestro departamento de servicio al cliente al tel&eacute;fono XXX.</p>
            	<form class="torn-fm" method="post">
                <fieldset>
                	<input type="button" class="bt-print" value="" onclick="window.print();">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>

<?php
}
?>