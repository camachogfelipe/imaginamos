<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include("cms/core/class/db.class.php");

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
}else{
    $nombre = '';
}

if(isset($_POST['empresa'])){
   $empresa = $_POST['empresa'];
}else{
    $empresa = '';
}

if(isset($_POST['nit_empresa'])){
   $nit_empresa = $_POST['nit_empresa'];
}else{
    $nit_empresa = '';
}

if(isset($_POST['correo'])){
    $correo = $_POST['correo'];
}else{
    $correo = '';
}

if(isset($_POST['contrasena'])){
    $contrasena = $_POST['contrasena'];
}else{
    $contrasena = '';
}

if(isset($_POST['ciudad'])){
    $ciudad = $_POST['ciudad'];
}else{
    $ciudad = '';
}

if(isset($_POST['genero'])){
    $genero = $_POST['genero'];
}else{
    $genero = '';
}

if(isset($_POST['fecha_nacimiento'])){
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
}else{
    $fecha_nacimiento = '';
}


$db = new Database();
$db->connect();

if ($_REQUEST['estado']=='1'){
        if (!isset($_SESSION['Nombre'])) {
            $db->doQuery("SELECT * FROM user_carrito WHERE correo='". $_POST["correo"]."'", SELECT_QUERY);
            $corr = $db->results;
            if (count($corr) > 0) {
                echo "<script type='text/javascript'>window.location='index.php?seccion=registro&Erno=2';</script>";
                exit;
            } else {        
                $db->doQuery("INSERT INTO user_carrito
                                    (
                                    empresa,
                                    nombre,
                                    fecha_nacimiento,
                                    genero,
                                    ciudad,
                                    correo,
                                    contrasena,
                                    nit_empresa,
                                    estado)
                                    VALUES(
                                    '" . $_POST["empresa"] . "',
                                    '" . $_POST["nombre"] . "',
                                    '" . $_POST["fecha_nacimiento"] . "',
                                    '" . $_POST["genero"] . "',
                                    '" . $_POST["ciudad"] . "',
                                    '" . $_POST["correo"] . "',                            
                                    '" . base64_encode($_POST["contrasena"]) . "',
                                    '" . $_POST["nit_empresa"] . "' ,
                                    'Inactivo'
                                    )", INSERT_QUERY);
                          }
        }

        $message = '
        <div style="margin-left:20px;">
        <p>
                Se han registrado con la siguiente informaci&#243;n:
        </p>
        Asunto : Registro <br/>
        Nombre : '.utf8_encode($nombre).'<br/>
        Email : '.$correo.'<br/>
        Empresa : '.  utf8_encode($empresa).'<br/>    
        Ciudad : '.  utf8_encode($ciudad).'<br/>    
        <i>Enviado por  Metalcut</i>
        <p>Este email fue generado autom&aacute;ticamente, por favor abst&eacute;ngase de responderlo.</p>
        </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin: 10px 0px 0px 0px; padding: 10px 0px 0px 0px; border-top: 1px solid #168893">
            <tr>
                <td>
                <span style="height: 40px;line-height: 40px;width: 260px;position: relative;margin: 0px 0px 0px 0px; float:right">
                <span style="background: url(http://www.imaginamos.com/derechos_autor_gris/ahorranito-2.png) no-repeat 0px 0px;width: 21px;height: 22px;display: block;float: left;margin: 9px 10px 0px 0px;">						</span>
                <a href="http://www.imaginamos.com" style="font-family: "Helvetica";font-weight: 500;font-size: 16px;color: #39444A;text-decoration: underline;">Creado por: </a>
                <a href="http://www.imaginamos.com" style="font-family: "Helvetica";font-weight: 500;font-size: 16px;color: #39444A;text-decoration: underline;">imagin<span style="color: #0CF;">a</span>mos.com</a>
                </span>
                </td>
            </tr>
        </table>
        ';
        $correo2='alexandra.gomez@imaginamos.com';
}else if ($_REQUEST['estado']=='2'){
    if (!isset($_SESSION['Nombre'])) {
            $db->doQuery("SELECT * FROM user_carrito WHERE correo='". $_POST["correo"]."' and estado='Activo' ", SELECT_QUERY);
            $corr = $db->results[0];
            if (count($corr) == 0) {
                echo "<script type='text/javascript'>window.location='index.php?seccion=carro-compras&Erno=4';</script>";
                exit;
            } else {    
                //print_r($corr);
                
                $contra=base64_decode($corr['contrasena']);
                $correo2=$corr['correo'];
                $message = '
                    <div style="margin-left:20px;">
                    <p>
                            Su Contrase&#241; es : '.$contra.'
                    </p>
                    <i>Enviado por  Metalcut</i>
                    <p>Este email fue generado autom&aacute;ticamente, por favor abst&eacute;ngase de responderlo.</p>
                    </div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin: 10px 0px 0px 0px; padding: 10px 0px 0px 0px; border-top: 1px solid #168893">
                        <tr>
                            <td>
                            <span style="height: 40px;line-height: 40px;width: 260px;position: relative;margin: 0px 0px 0px 0px; float:right">
                            <span style="background: url(http://www.imaginamos.com/derechos_autor_gris/ahorranito-2.png) no-repeat 0px 0px;width: 21px;height: 22px;display: block;float: left;margin: 9px 10px 0px 0px;">						</span>
                            <a href="http://www.imaginamos.com" style="font-family: "Helvetica";font-weight: 500;font-size: 16px;color: #39444A;text-decoration: underline;">Creado por: </a>
                            <a href="http://www.imaginamos.com" style="font-family: "Helvetica";font-weight: 500;font-size: 16px;color: #39444A;text-decoration: underline;">imagin<span style="color: #0CF;">a</span>mos.com</a>
                            </span>
                            </td>
                        </tr>
                    </table>
                    ';
            }
        }
}else if ($_REQUEST['estado']=='3'){
    if (!isset($_SESSION['Nombre'])) {
            $db->doQuery("SELECT * FROM compras WHERE user_id='". $_SESSION['id']."' and estado='Proceso' ", SELECT_QUERY);
            $compras = $db->results;
             $cant = count($compras);
            
            $db->doQuery("SELECT * FROM user_carrito WHERE iduser_carrito='". $_SESSION['id']."' and estado='Activo' ", SELECT_QUERY);
            $corr = $db->results[0];
            
                //print_r($corr);
            $correo2=$corr['correo'];
            $message = '
                <div style="margin-left:20px;">
                <p>
                    Asunto : COTIZACION <br/>
                    Nombre : '.utf8_encode($corr['nombre']).'<br/>
                    Email : '.$corr['correo'].'<br/>
                    Empresa : '.  utf8_encode($corr['empresa']).'<br/> 
                    Nit Empresa : '.  utf8_encode($corr['nit_empresa']).'<br/>     
                    Ciudad : '.  utf8_encode($corr['ciudad']).'<br/>    
                </p>
                <br>
                <p>Productos Cotizados</p>
                <table cellpadding="0" cellspacing="0" border="1" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th width="80">Referencia</th>
                  <th width="528">Descripci&#243;n</th>
                  <th width="80">Direcci&#243;n</th>
                  <th width="80">Cantidad</th>
                  <th width="80">Valor</th>
                </tr>
              </thead>
              <tbody>';
               for($i = 0 ; $i < $cant ; $i++){ 
                       $pieces = explode("-", $compras[$i]["det"]);
                       $detalle='';
                       $j=0;
                       foreach ($pieces  as $valor){
                           if ($j>0) $detalle.=$valor.' ';
                           $j++;
                       }
                $db->doQuery("update compras set estado='En Cotizacion' where idcompras='".$compras[$i]["idcompras"]."' ", UPDATE_QUERY);
                  
              $message.= '  <tr>
                  <td>'.$pieces[0].'</td>
                  <td>'.$detalle.'</td>
                  <td>'.$compras[$i]["ori"] .'</td>
                  <td>'.$compras[$i]["cant"] .'  </td>
                  <td>'.$compras[$i]["Valor"] .'  </td>
                </tr>';
                 } 
            
             $message.='</tbody>
            </table>
            <br>
            <i>Enviado por  Metalcut</i>
                <p>Este email fue generado autom&aacute;ticamente, por favor abst&eacute;ngase de responderlo.</p>
                </div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin: 10px 0px 0px 0px; padding: 10px 0px 0px 0px; border-top: 1px solid #168893">
                    <tr>
                        <td>
                        <span style="height: 40px;line-height: 40px;width: 260px;position: relative;margin: 0px 0px 0px 0px; float:right">
                        <span style="background: url(http://www.imaginamos.com/derechos_autor_gris/ahorranito-2.png) no-repeat 0px 0px;width: 21px;height: 22px;display: block;float: left;margin: 9px 10px 0px 0px;">						</span>
                        <a href="http://www.imaginamos.com" style="font-family: "Helvetica";font-weight: 500;font-size: 16px;color: #39444A;text-decoration: underline;">Creado por: </a>
                        <a href="http://www.imaginamos.com" style="font-family: "Helvetica";font-weight: 500;font-size: 16px;color: #39444A;text-decoration: underline;">imagin<span style="color: #0CF;">a</span>mos.com</a>
                        </span>
                        </td>
                    </tr>
                </table>
                ';
             $_REQUEST['estado']=='3';
             $correo2='alexandra.gomez@imaginamos.com';
            
        }
    
}

$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "info@metalcut.com";
$mail->FromName = "Metalcut";
$mail->Subject = "Registro";
$mail->AddAddress($correo2);
$body = "<strong>Mensaje</strong><br><br>";
$body.= wordwrap($message, 70)."<br>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();
$body = "<strong>Mensaje</strong><br><br>";
$body.= wordwrap($message, 70)."<br>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();

if ($_REQUEST['estado']=='1'){
 header('Location:index.php?seccion=registro&Erno=1');
exit;
}if ($_REQUEST['estado']=='3'){
   header('Location:index.php?seccion=carro-compras');
exit; 
}else{
  header('Location:index.php?seccion=registro&Erno=3');
exit;  
}
?>
