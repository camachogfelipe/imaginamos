<?php

/*
 * @file               : Correo.php
 * @brief              : Clase interaccion correo electronico
 * @version            : 1.0
 * @ultima_modificacion: 02-feb-2012
 * @author             : Ruben Dario Cifuentes T
 */

/*
 * @class: Correo
 * @brief: Clase interaccion correo electronico
 */

class Correo {
  /*
   * Metodo Publico para Inicializar las variables necesarias de la clase.
   * @fn __construct
   * @param $mSecurity obj Objeto de la clase seguridad
   * @brief Inicializa variables necesarias de la clase
   */

  public function __construct()
  {

  }

  /*
   * Metodo Publico para enviar un correo electronico
   */
  public static function SendEmail($para = "", $asunto = "", $cuerpo = "")
  {
    $img_base = Link::Build("/images/correo");

    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'.
            '<html xmlns="http://www.w3.org/1999/xhtml">'.
              '<head>'.
                '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.
                '<title>Untitled Document</title>'.
              '</head>'.
              '<body>'.
                '<table width="600" cellpadding="0" cellspacing="0" border="0">'.
                  '<tr>'.
                    '<td colspan="3">'.
                      '<img src="img_base/header.jpg" />'.
                    '</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td height="30">'.
                    '</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td width="20">'.
                    '</td>'.
                    '<td style="font-size:15px; font-family:Arial, Helvetica, sans-serif">'.$cuerpo.'</td>'.
                    '<td width="20">'.
                    '</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td height="30">'.
                    '</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td colspan="3">'.
                      '<img src="img_base/footer.jpg" />'.
                    '</td>'.
                  '</tr>'.
                '</table>'.
              '</body>'.
            '</html>';

    $body = str_replace("img_base", $img_base, $body);

    // Instanciamos PHPMailer
    $mail = new PHPMailer();
    // Metodo de envio SMTP
    $mail->IsSMTP();
    // Obligamos autenticacion de cuenta
    $mail->SMTPAuth = true;
    // Obligamos certificado de seguridad (Debemos habilitar el SSL en la configuracion PHP)
    $mail->SMTPSecure = "ssl";
    // Servidor smtp
    $mail->Host = "smtp.startlogic.com";
    // Puerto de salida de envio de email
    $mail->Port = 465;
    // Usuario (Cuenta de correo)
    $mail->Username = "robot@allreps.com";
    // Contraseña
    $mail->Password = "Dríadas6&";
    // Desde que correo quiere que se muestre
    $mail->From = "noreply@allreps.com";
    // Desde (Nombre)
    $mail->FromName = "Allreps";
    // Asunto
    $mail->Subject = "AllReps - " . $asunto;
    // HTML contenido en el mail
    $mail->MsgHTML($body);
    // Adjuntar archivos
    //$mail->AddAttachment("files/files.zip");
    // Para y nombre del que recibe
    $mail->AddAddress($para);
    // Obligamos que el texto sea en formato html
    $mail->IsHTML(true);
    // Enviamos el correo
    return $mail->Send();
  }

  /*
   * Metodo Publico para enviar correo electronico confirmacion de reserva al usuario
   */
  public static function ReservaConfirmacionCliente($data = NULL)
  {
    if( $data["cotiza"] === FALSE )
    {
      $body = 'Confirmaci&oacute;n de reserva<br/>
               Numero de pasajeros ' . count($data["pasajeros"]) . '<br/><br/>
               Reserva # ' . $data["id"] . '<br/><br/>';
    }
    else
    {
      $body = 'Cotizaci&oacute;n de reserva<br/>
               Numero de pasajeros ' . count($data["pasajeros"]) . '<br/><br/>
               Cotizaci&oacute;n # ' . $data["id"] . '<br/><br/>';
    }

    $body .= 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    <br/><br/>
    Estado ' . $data["estado"] . '<br/><br/>
    <a href="'.$data["link_pdf"].'">Descarga de PDF hoja de confirmacion para agencia</a><br/><br/><br/>';

    // Recorremos los datos de cada uno de los pasajeros
    $cClientePasajeros = new Dbcliente_pasajeros();
    $cReservaCiudades = new Dbreserva_ciudades();
    $cServicios = new Dbservicios();
    for ($i = 0, $tot = count($data["pasajeros"]); $i < $tot; $i++) {
      $pasajero = $cClientePasajeros->getByPk($data["pasajeros"][$i]["id_pasajero"]);
      $body .= $pasajero["nombre"] . '
              <table border="1" >
                <tr>
                    <td>Destino</td>
                    <td>Servicio</td>
                    <td>Valor</td>
                    <td>In</td>
                    <td>Out</td>
                </tr>';

      // Adjuntamos cada uno de los servicios
      for ($j = 0, $totJ = count($data["pasajeros"][$i]["servicios"]); $j < $totJ; $j++) {
        $reservaCiudades = $cReservaCiudades->getByPk($data["pasajeros"][$i]["servicios"][$j]["id_reserva_ciudad"], array(
            "campos"=>",b.nombre AS ciudad",
            "join"=>"INNER JOIN ciudades b ON b.id=a.id_ciudad"
        ));
        $servicios = $cServicios->getByPk($data["pasajeros"][$i]["servicios"][$j]["id_servicio"]);
        $body .= '
                <tr>
                    <td>' . $reservaCiudades["ciudad"] . '</td>
                    <td>' . $servicios["nombre"] . '</td>
                    <td>' . $data["pasajeros"][$i]["servicios"][$j]["valor"] . '</td>
                    <td>' . $data["pasajeros"][$i]["servicios"][$j]["fech_ini"] . '</td>
                    <td>' . $data["pasajeros"][$i]["servicios"][$j]["fech_fin"] . '</td>
                </tr>';
      }

      $body .= '</table><br/>';
    }


    $body .= '    <br/>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br/><br/>';
    if( $data["cotiza"] === FALSE )
    {
      $body .='<a href="' . $data["link_cancelar"] . '">Cancelar solicitud</a>
              &nbsp;&nbsp;&nbsp;
              <a href="' . $data["link_confirmar"] . '">Confirmar solicitud</a>';
      $mAsunto = "La solicitud ".$data["id"]." se encuentra reservada";
    }
    else
      $mAsunto = "Cotizacion ".$data["id"];

    return self::SendEmail($data["para"], $mAsunto, $body);
  }

  public static function ReservaConfirmacionClienteEs($data = NULL)
  {
    setlocale(LC_MONETARY, 'en_US');

    $mAsunto = "La solicitud ".$data["id"]." se encuentra reservada";

    $cReserva = new Dbreservas();
    $mReserva = $cReserva -> getByPk( $data["id"] );

    $cCliente = new Dbclientes();
    $mCliente = $cCliente -> getByPk( $mReserva["id_cliente"] );

    $cUsuario = new Dbusuarios();
    $mUsuario = $cUsuario -> getByPk( $mReserva["id_usuarios"] );

    $body = 'Bogotá D.C., '.date( "Y-m-d" ).'. <br /><br />'.
            'Estimados señores: '.ucfirst( $mCliente["nombre"] ).' <br /><br />'.
            'En respuesta a su solicitud de reserva con gusto estamos enviando la confirmación. Importante '.
            'tener en cuenta la fecha del pago, de lo contrario la reserva será cancelada automáticamente. <br /> <br />'.
            'RESERVA N. '.$data["id"].' <br />'.
            'PASAJEROS: '.count( $data["pasajeros"] ).' <br />'.
            'FECHA INICIO: '.$mReserva["fech_ini"].' <br />'.
            'FECHA FINAL: '.$mReserva["fech_fin"].' <br />'.
            'ESTATUS RESERVA: '.$data["estado"].'.<br />'.
            'TOTAL RESERVA: '.money_format( '%i', $mReserva["valor"] ).' <br /> <br />'.
            '<a href="'.$data["link_pdf"].'">Descarga de PDF de la confirmación de la reserva</a>. <br /><br />'.
            'Quedamos pendientes del pago de la reserva en la fecha estipulada para proceder con la garantía '.
            'de servicios ó información de la cancelación de la misma. En caso que existan cambios informar '.
            'sobre las fechas, destino o lo que requiera dentro de la reserva. <br /><br />'.
            '<a href="'.$data["link_cancelar"].'">Cancelar solicitud</a>&nbsp;&nbsp;&nbsp;<a href="'.$data["link_confirmar"].'">Confirmar solicitud</a> <br /> <br />'.
            'Si desea hacer modificación (es) a la reserva, por favor escriba a:<br />'.ucfirst( $mUsuario["nombre"] ).' - '.$mUsuario["email"].'<br /> <br />'.
            'Atentamente,<br /><br />'.
            ucfirst( $mUsuario["nombre"] );

    unset( $cReserva, $mReserva, $cCliente, $mCliente, $cUsuario, $mUsuario );
    return self::SendEmail( $data["para"], $mAsunto, $body );
  }

  public static function ReservaConfirmacionClienteEn($data = NULL)
  {
    setlocale(LC_MONETARY, 'en_US');

    $mAsunto = "La solicitud ".$data["id"]." se encuentra reservada";

    $cReserva = new Dbreservas();
    $mReserva = $cReserva -> getByPk( $data["id"] );

    $cCliente = new Dbclientes();
    $mCliente = $cCliente -> getByPk( $mReserva["id_cliente"] );

    $cUsuario = new Dbusuarios();
    $mUsuario = $cUsuario -> getByPk( $mReserva["id_usuarios"] );

    $body = 'Bogotá D.C., '.date( "Y-m-d" ).'. <br /><br />'.
            'Dear Sirs.: '.ucfirst( $mCliente["nombre"] ).' <br /><br />'.
            'According your request, with pleasure we will send confirmation. Is important the date payment, '.
            'if we do not have it, the reservation will be cancel <br /> <br />'.
            'RESERVATION  N. '.$data["id"].' <br />'.
            'PASSENGER: '.count( $data["pasajeros"] ).' <br />'.
            'CHECK IN: '.$mReserva["fech_ini"].' <br />'.
            'CHECK OUT: '.$mReserva["fech_fin"].' <br />'.
            'RESERVATION STATUS: '.$data["estado"].'.<br />'.
            'TOTAL RESERVATION: '.money_format( '%i', $mReserva["valor"] ).' <br /> <br />'.
            '<a href="'.$data["link_pdf"].'">Download PDF Reservation file.</a>. <br /><br />'.
            'We will waiting for the pre-payment according guarantee day and reconfirm all services or cancel. '.
            'In case that need change please advise about dates or destination.  <br /><br />'.
            '<a href="'.$data["link_cancelar"].'">Cancel request</a>&nbsp;&nbsp;&nbsp;<a href="'.$data["link_confirmar"].'">Confirm request</a> <br /> <br />'.
            'If you want to do any changes in your confirmation. Please write to:<br />'.ucfirst( $mUsuario["nombre"] ).' - '.$mUsuario["email"].'<br /> <br />'.
            'Best regards,<br /><br />'.
            ucfirst( $mUsuario["nombre"] );

    unset( $cReserva, $mReserva, $cCliente, $mCliente, $cUsuario, $mUsuario );
    return self::SendEmail( $data["para"], $mAsunto, $body );
  }

  public static function ReservaConfirmacionClientePor($data = NULL)
  {
    setlocale(LC_MONETARY, 'en_US');

    $mAsunto = "La solicitud ".$data["id"]." se encuentra reservada";

    $cReserva = new Dbreservas();
    $mReserva = $cReserva -> getByPk( $data["id"] );

    $cCliente = new Dbclientes();
    $mCliente = $cCliente -> getByPk( $mReserva["id_cliente"] );

    $cUsuario = new Dbusuarios();
    $mUsuario = $cUsuario -> getByPk( $mReserva["id_usuarios"] );

    $body = 'Bogotá D.C., '.date( "Y-m-d" ).'. <br /><br />'.
            'Prezados senhores: '.ucfirst( $mCliente["nombre"] ).' <br /><br />'.
            'Com resposta sua solicitude da reserva, com prazer estamos enviando a confirmação. '.
            'Importante ter presente a data de pagamento, se noss não temos uma informação para '.
            'garantir a reserva vai ser cancelada automáticamente. <br /> <br />'.
            'RESERVA  N. '.$data["id"].' <br />'.
            'PASSAGEIROS: '.count( $data["pasajeros"] ).' <br />'.
            'DATA  INICIO: '.$mReserva["fech_ini"].' <br />'.
            'DATA FINAL: '.$mReserva["fech_fin"].' <br />'.
            'ESTATUS RESERVA: '.$data["estado"].'.<br />'.
            'TOTAL RESERVA: '.money_format( '%i', $mReserva["valor"] ).' <br /> <br />'.
            '<a href="'.$data["link_pdf"].'">Download PDF confirmação da reserva.</a> <br /><br />'.
            'Quando tivermos a confirmação do pagamento na data informada, procederemos com a '.
            'garantia dos serviços ou informação de cancelamento. No caso tenha alguma alteração '.
            'favor informar novas datas e destinos.  <br /><br />'.
            '<a href="'.$data["link_cancelar"].'">Cancelar solicitação</a>&nbsp;&nbsp;&nbsp;<a href="'.$data["link_confirmar"].'">Confirme pedido</a> <br /> <br />'.
            'Se você deseja fazer alguma troca na confirmação. Por favor escrever a:<br />'.ucfirst( $mUsuario["nombre"] ).' - '.$mUsuario["email"].'<br /> <br />'.
            'Atenciosamente,<br /><br />'.
            ucfirst( $mUsuario["nombre"] );

    unset( $cReserva, $mReserva, $cCliente, $mCliente, $cUsuario, $mUsuario );
    return self::SendEmail( $data["para"], $mAsunto, $body );
  }

  public static function EmisivoConfirmacionCliente($data = NULL)
  {
    $body = '
    Confirmacion de reserva<br/>
    Numero de pasajeros ' . count($data["pasajeros"]) . '<br/><br/>
    Reserva # ' . $data["id"] . '<br/><br/>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    <br/><br/>
    Estado ' . $data["estado"] . '<br/><br/>
    <a href="'.$data["link_pdf"].'">Descarga de PDF hoja de confirmacion para agencia</a><br/><br/><br/>';

    // Recorremos los datos de cada uno de los pasajeros
    $cClientePasajeros = new Dbcliente_pasajeros();
    $cReservaCiudades = new Dbemisivo_ciudades();
    $cServicios = new Dbemisivo_servicios();

    for ($i = 0, $tot = count( $data["pasajeros"] ); $i < $tot; $i++ )
    {
      $pasajero = $cClientePasajeros->getByPk($data["pasajeros"][$i]["id_pasajero_emisivo"]);
      $body .= $pasajero["nombre"] . '
              <table border="1" >
                <tr>
                    <td>Destino</td>
                    <td>Servicio</td>
                    <td>Valor</td>
                    <td>In</td>
                    <td>Out</td>
                </tr>';

      // Adjuntamos cada uno de los servicios
      for( $j = 0, $totJ = count( $data["pasajeros"][$i]["servicios"] ); $j < $totJ; $j++ )
      {
        $reservaCiudades = $cReservaCiudades -> getByPk( $data["pasajeros"][$i]["servicios"][$j]["id_emisivo_ciudad"], array(
            "campos"=>",b.nombre AS ciudad",
            "join"=>"INNER JOIN ciudades b ON b.id=a.id_ciudad"
        ));

        $servicios = $cServicios -> getByPk( $data["pasajeros"][$i]["servicios"][$j]["id_emisivo_servicio"] );

        $body .= '
                <tr>
                    <td>' . $reservaCiudades["ciudad"] . '</td>
                    <td>' . $servicios["descripcion"] . '</td>
                    <td>' . $data["pasajeros"][$i]["servicios"][$j]["valor"] . '</td>
                    <td>' . $data["pasajeros"][$i]["servicios"][$j]["fech_ini"] . '</td>
                    <td>' . $data["pasajeros"][$i]["servicios"][$j]["fech_fin"] . '</td>
                </tr>';
      }

      $body .= '</table><br/>';
    }


    $body .= '    <br/>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br/><br/>
            <a href="' . $data["link_cancelar"] . '">Cancelar solicitud</a>
            &nbsp;&nbsp;&nbsp;
            <a href="' . $data["link_confirmar"] . '">Confirmar solicitud</a>
        ';

    return self::SendEmail($data["para"], "La solicitud ".$data["id"]." se encuentra reservada", $body);
  }

  /*
   * Metodo Publico para enviar correo electronico confirmacion de reserva al usuario
   */
  public static function ReservaConfirmacionProveedor($data = NULL)
  {
    $body = '
    LOGO ALLREPS<br/><br/>
    Confirmacion del servicio # "' . $data["servicio_numero"] . ' - ' . $data["servicio"] . '"<br/>
    Descripcion del servicio "' . $data["servicio_descripcion"] . '"<br/>
    Valor del servicio $ ' . $data["valor"] . '<br/>
    Numero de reserva # ' . $data["id"] . '<br/><br/>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    <br/><br/>
    Estado del servicio "' . $data["estado"] . '"<br/><br/><br/>';

    $body .= '    <br/>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br/><br/>
            <a href="' . $data["link_cancelar"] . '">Cancelar servicio</a>
            &nbsp;&nbsp;&nbsp;
            <a href="' . $data["link_confirmar"] . '">Confirmar servicio</a>
        ';

    return self::SendEmail($data["para"], "Confirmacion del servicio # " . $data["servicio_numero"], $body);
  }

  /*
   * Metodo Publico para enviar correo electronico proforma de compra al usuario
   */
  public static function ReservaProformaEnviarEs( $data = NULL )
  {
    setlocale(LC_MONETARY, 'en_US');

    $cReserva = new Dbreservas();
    $mReserva = $cReserva -> getByPk( $data["id"] );

    $cCliente = new Dbclientes();
    $mCliente = $cCliente -> getByPk( $mReserva["id_cliente"] );

    $cUsuario = new Dbusuarios();
    $mUsuario = $cUsuario -> getByPk( $mReserva["id_usuarios"] );

    $cResPasa = new Dbreserva_pasajeros();
    $mResPasa = $cResPasa -> getList( array( "id_reserva" => $mReserva["id"] ) );

    $body = 'Bogotá D.C., '.date( "Y-m-d" ).'.<br /><br />'.
            'Estimados señores: '.ucfirst( $mCliente["nombre"] ).'<br /> <br />'.
            'Con gusto estamos enviando factura proforma para proceder '.
            'con el pago de la reserva, según la siguiente información: <br /> <br />'.
            'RESERVA N. '.$mReserva["id"].' <br />'.
            'PASAJEROS: '.count( $mResPasa ).' <br />'.
            'TOTAL RESERVA: '.money_format( '%i', $mReserva["valor"] ).' <br />'.
            'BANCO INFORMADO: '.$data["banco"].' - '.$data["cuenta"].' <br /><br />'.
            '<a href="'.$data["link_pdf"].'">Descarga de PDF de la factura proforma.</a><br /><br />';

    if( NULL != $mCliente["cuenta"] && "" != $mCliente["cuenta"]  )
    {
      $mFCuenta = Link::Build( "/files/clientes/".$mCliente["cuenta"] );
      $body.= '<a href="'.$mFCuenta.'">Descarga archivo de cuenta.</a><br /><br />';
    }

    $body.= 'Favor enviar al correo electrónico la copia del Swift de la transferencia realizada, '.
            'para verificar con administración el recibido del dinero y enviar voucher.<br /><br />'.
            'Atentamente,<br /><br />'.
            ucfirst( $mUsuario["nombre"] );

    return self::SendEmail( $data["para"], $data["asunto"], $body );
  }

  public static function ReservaProformaEnviarEn( $data = NULL )
  {
    setlocale(LC_MONETARY, 'en_US');

    $cReserva = new Dbreservas();
    $mReserva = $cReserva -> getByPk( $data["id"] );

    $cCliente = new Dbclientes();
    $mCliente = $cCliente -> getByPk( $mReserva["id_cliente"] );

    $cUsuario = new Dbusuarios();
    $mUsuario = $cUsuario -> getByPk( $mReserva["id_usuarios"] );

    $cResPasa = new Dbreserva_pasajeros();
    $mResPasa = $cResPasa -> getList( array( "id_reserva" => $mReserva["id"] ) );

    $body = 'Bogotá D.C., '.date( "Y-m-d" ).'.<br /><br />'.
            'Dear Sirs: '.ucfirst( $mCliente["nombre"] ).'<br /> <br />'.
            'With pleasure we send invoice , for make a transfer wire about your '.
            'reservation, according next information: <br /> <br />'.
            'RESERVATION  N. '.$mReserva["id"].' <br />'.
            'PASSENGER: '.count( $mResPasa ).' <br />'.
            'TOTAL RESERVATION: '.money_format( '%i', $mReserva["valor"] ).' <br />'.
            'BANK INFORMED: '.$data["banco"].' - '.$data["cuenta"].' <br /><br />'.
            '<a href="'.$data["link_pdf"].'">Download PDF Invoice.</a><br /><br />'.
            'We will wait for the swift copy, as soon as we reconfirm the payment, '.
            'we will continue  to issue the voucher.<br /><br />'.
            'Best regards,<br /><br />'.
            ucfirst( $mUsuario["nombre"] );

    return self::SendEmail( $data["para"], $data["asunto"], $body );
  }

  public static function ReservaProformaEnviarPor( $data = NULL )
  {
    setlocale(LC_MONETARY, 'en_US');

    $cReserva = new Dbreservas();
    $mReserva = $cReserva -> getByPk( $data["id"] );

    $cCliente = new Dbclientes();
    $mCliente = $cCliente -> getByPk( $mReserva["id_cliente"] );

    $cUsuario = new Dbusuarios();
    $mUsuario = $cUsuario -> getByPk( $mReserva["id_usuarios"] );

    $cResPasa = new Dbreserva_pasajeros();
    $mResPasa = $cResPasa -> getList( array( "id_reserva" => $mReserva["id"] ) );

    $body = 'Bogotá D.C., '.date( "Y-m-d" ).'.<br /><br />'.
            'Prezados senhores: '.ucfirst( $mCliente["nombre"] ).'<br /> <br />'.
            'Com prazer estamos enviando a fatura proforma para assim proceder com o '.
            'pagamento  da reserva, segundo a siguente informação: <br /> <br />'.
            'RESERVA N. '.$mReserva["id"].' <br />'.
            'PASSAGEIROS: '.count( $mResPasa ).' <br />'.
            'TOTAL RESERVA: '.money_format( '%i', $mReserva["valor"] ).' <br />'.
            'BANCO INFORMADO: '.$data["banco"].' - '.$data["cuenta"].' <br /><br />'.
            '<a href="'.$data["link_pdf"].'">Descarga de PDF da fatura proforma.</a><br /><br />'.
            'Favor enviar o e-mail com a cópia do Swift da transferencia feita, '.
            'assim verificar com administração o recibido do dinheiro e enviar voucher.<br /><br />'.
            'Atenciosamente,<br /><br />'.
            ucfirst( $mUsuario["nombre"] );

    return self::SendEmail( $data["para"], $data["asunto"], $body );
  }

  /*
   * Metodo Publico para enviar correo electronico orden de pago credito
   */
  public static function ReservaOrdenPagoCreditoEnviar( $data = NULL )
  {
    setlocale(LC_MONETARY, 'en_US');

    $body = '<table cellpadding="0" cellspacing="0" border="0">'.
              '<tr>'.
                '<td>Bogotá D. C. '.date( "Y-m-d" ).'</td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"></td>'.
              '</tr>'.
              '<tr>'.
                '<td>Señores</td>'.
              '</tr>'.
              '<tr>'.
                '<td>'.$data["proveedor_nombre"].'</td>'.
              '</tr>'.
              '<tr>'.
                '<td>Atn. Contacto</td>'.
              '</tr>'.
              '<tr>'.
                '<td>Departamento de Reservas</td>'.
              '</tr>'.
              '<tr>'.
                '<td>Ciudad</td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"></td>'.
              '</tr>'.
              '<tr>'.
                '<td>RESERVA '.$data["ordenpago"]["id_reserva"].' </td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"></td>'.
              '</tr>'.
              '<tr>'.
                '<td>Buenos días '.$data["proveedor_repres"].':<br /><br /></td>'.
              '</tr>'.
              '<tr>'.
                '<td style="text-align:justify">Adjunto a la presente estamos enviado voucher No. DVC ____, que ampara alojamiento para el pasajero y fechas en referencia, de acuerdo a la siguiente información:</td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"></td>'.
              '</tr>'.
              '<tr>'.
                '<td>'.
                  '<table style="width:100%" border="1" cellpadding="0" cellspacing="0">'.
                    '<tr>'.
                      '<td width="250">Tarifa</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vBase"] ).'</td>'.
                    '</tr>'.
                    '<tr>'.
                      '<td width="250">Seguro</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vSeguro"] ).'</td>'.
                    '</tr>'.
                    '<tr>'.
                      '<td width="250">Adicionales</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vAdicio"] ).'</td>'.
                    '</tr>'.
                    '<tr>'.
                      '<td width="250">Iva</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vIvaAlojamiento"] ).'</td>'.
                    '</tr>'.
                    '<tr>'.
                      '<td width="250">Descuento</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vDescuento"] ).'</td>'.
                    '</tr>'.
                    '<tr>'.
                      '<td width="250">Total</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vTotal"] ).'</td>'.
                    '</tr>'.
                  '</table>'.
                '</td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"><a href="'.$data["link_pdf"].'">Descarga orden de pago.</a></td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"></td>'.
              '</tr>'.
              '<tr>'.
                '<td style="text-align:justify">'.
                  'Favor enviar la factura a la Calle 97 Bis No. 19 ? 20 Oficina 502. 302. All Reps Ltda. Nit. 830.000.800-7, por los servicios que amparamos en nuestra carta. Los consumos adicionales que realicen los huéspedes serán cancelados directamente por ellos en el hotel en facturas diferentes. Por ningún motivo al pasajero se le debe entregar copia de la factura de los servicios que nosotros estamos garantizando.<br />'.
                  '<br />'.
                  'Cordial Saludo,'.
              '</td>'.
            '</tr>'.
            '<tr>'.
              '<td></td>'.
            '</tr>'.
          '</table>';
            //ucfirst( $mUsuario["nombre"] );

    return self::SendEmail( $data["para"], $data["asunto"], $body );
  }

  /*
   * Metodo Publico para enviar correo electronico orden de pago credito
   */
  public static function ReservaOrdenPagoEnviar( $data = NULL )
  {
    setlocale(LC_MONETARY, 'en_US');

    $body = '<table cellpadding="0" cellspacing="0" border="0">'.
              '<tr>'.
                '<td>Bogotá D. C. '.date( "Y-m-d" ).'</td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"></td>'.
              '</tr>'.
              '<tr>'.
                '<td>Señores</td>'.
              '</tr>'.
              '<tr>'.
                '<td>'.$data["proveedor_nombre"].'</td>'.
              '</tr>'.
              '<tr>'.
                '<td>Atn. Contacto</td>'.
              '</tr>'.
              '<tr>'.
                '<td>Departamento de Reservas</td>'.
              '</tr>'.
              '<tr>'.
                '<td>Ciudad</td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"></td>'.
              '</tr>'.
              '<tr>'.
                '<td>RESERVA '.$data["ordenpago"]["id_reserva"].' </td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"></td>'.
              '</tr>'.
              '<tr>'.
                '<td>Buenos días '.$data["proveedor_repres"].':<br /><br /></td>'.
              '</tr>'.
              '<tr>'.
                '<td style="text-align:justify">'.
                  'Por medio de la presente estamos garantizando la reserva de los pasajeros en referencia con la consignación '.
                  'bancaria adjunta realizada el día hoy del mes de noviembre del año en curso, quienes se estarán alojando en '.
                  'el hotel de acuerdo a la siguiente información:<br /><br />'.
                  'Tener en cuenta que esta reserva se debe facturar con los siguientes datos por los servicios que amparamos '.
                  'en nuestra carta.'.
                '</td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"></td>'.
              '</tr>'.
              '<tr>'.
                '<td>'.
                  '<table style="width:100%" border="1" cellpadding="0" cellspacing="0">'.
                    '<tr>'.
                      '<td width="250">Tarifa</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vBase"] ).'</td>'.
                    '</tr>'.
                    '<tr>'.
                      '<td width="250">Seguro</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vSeguro"] ).'</td>'.
                    '</tr>'.
                    '<tr>'.
                      '<td width="250">Adicionales</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vAdicio"] ).'</td>'.
                    '</tr>'.
                    '<tr>'.
                      '<td width="250">Iva</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vIvaAlojamiento"] ).'</td>'.
                    '</tr>'.
                    '<tr>'.
                      '<td width="250">Descuento</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vDescuento"] ).'</td>'.
                    '</tr>'.
                    '<tr>'.
                      '<td width="250">Total</td>'.
                      '<td>'.money_format( '%i', $data["ordenpago"]["vTotal"] ).'</td>'.
                    '</tr>'.
                  '</table>'.
                '</td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"><a href="'.$data["link_pdf"].'">Descarga formato orden de pago.</a></td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"><a href="'.$data["adjunto"].'">Descarga Comprobante de pago.</a></td>'.
              '</tr>'.
              '<tr>'.
                '<td height="15"></td>'.
              '</tr>'.
              '<tr>'.
                '<td style="text-align:justify">'.
                  'Por ningún motivo al pasajero se le debe entregar copia de la factura de los servicios que nosotros estamos garantizando. '.
                  'Los consumos adicionales que realicen los huéspedes serán cancelados directamente por ellos en el hotel en facturas '.
                  'diferentes. Somos mayoristas de turismo que vendemos nuestros paquetes a mayoristas en el exterior y  '.
                  'minoristas en Colombia.<br /><br />'.
                  'Quedo a la espera de su confirmación<br /><br />'.
                  'Cordial Saludo,'.
              '</td>'.
            '</tr>'.
            '<tr>'.
              '<td></td>'.
            '</tr>'.
          '</table>';
            //ucfirst( $mUsuario["nombre"] );

    return self::SendEmail( $data["para"], $data["asunto"], $body );
  }

  public static function EncuestaEnviar( $data = NULL )
  {
    $body = '<table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td rowspan="4"><img src="'.$data["img"].'" width="70%" height="70%"></td>
              <td><div align="right">'.$data["title"].'nombre encuesta </div></td>
            </tr>
            <tr>
              <td><div align="right">'.$data["cod_encuesta"].'</div></td>
            </tr>
            <tr>
              <td><div align="right">'.date( "Y-m-d" ).'</div></td>
            </tr>
            <tr>
              <td></td>
            </tr>';
            for($i=0;$i<$data["cantidad"];$i++){
                $j=$i+1;
               $body.='<tr>
              <td colspan="2"><div>'.$j.'. '.$data["pregunta"][$i].'</div></td>
            </tr>';
            }
            $body.='<tr>
              <td colspan="2">
                <div align="center"><a href="'.$data["url"].'">Clic para comenzar</a></div>    </td>
            </tr>
            <tr>
              <td colspan="2">
                <div align="center" id="footer" style="text-align:justify">'.$data["footer"].'</div></td>
            </tr>
          </table>';
            //ucfirst( $mUsuario["nombre"] );

    return self::SendEmail( $data["para"], $data["asunto"], $body );
  }

  public static function itinerario( $data = NULL )
  {
    $body = '';

    foreach( $data["vuelos"] as $mItem )
    {
      $body.= '<table width="600" cellpadding="0" cellspacing="6" border="0" style="font-size:15px; font-family:Arial, Helvetica, sans-serif; color:#626262;">'.
	              '<tr>'.
                  '<td height="30"></td>'.
                '</tr>'.
                '<tr>'.
  	              '<td width="7"></td>'.
                  '<td>NOMBRE:</td>'.
                  '<td width="380">'.$mItem["nombre"].'</td>'.
                  '<td width="7"></td>'.
                '</tr>'.
                '<tr>'.
  	              '<td></td>'.
                  '<td>Referencia:</td>'.
                  '<td>Reserva No. '.$data["referencia"].'</td>'.
    	            '<td></td>'.
                '</tr>'.
                '<tr>'.
  	              '<td></td>'.
                  '<td>&nbsp;</td>'.
                  '<td>&nbsp;</td>'.
                  '<td></td>'.
                '</tr>'.
                '<tr>'.
  	              '<td></td>'.
                  '<td>Fecha:</td>'.
                  '<td>'.$mItem["fech_ini"].'</td>'.
  	              '<td></td>'.
                '</tr>'.
                '<tr>'.
                  '<td></td>'.
                  '<td>Servicio:</td>'.
                  '<td>'.$data["servicio"]["nombre"].'</td>'.
  	              '<td></td>'.
                '</tr>'.
                '<tr>'.
  	              '<td></td>'.
                  '<td>Lugar de recogida:</td>'.
                  '<td>'.$mItem["lugar_inicio"].'</td>'.
                  '<td></td>'.
                '</tr>'.
                '<tr>'.
  	              '<td></td>'.
                  '<td>Lugar de destino:</td>'.
                  '<td>'.$mItem["lugar_fin"].'</td>'.
                  '<td></td>'.
                '</tr>'.
                '<tr>'.
  	              '<td></td>'.
                  '<td>Vuelo:</td>'.
                  '<td>'.$mItem["vuelo"].'</td>'.
  	              '<td></td>'.
                '</tr>'.
                '<tr>'.
  	              '<td></td>'.
                  '<td>Procedencia:</td>'.
                  '<td>'.$mItem["procedencia"].'</td>'.
  	              '<td></td>'.
                '</tr>'.
                '<tr>'.
  	              '<td></td>'.
                  '<td>Destino:</td>'.
                  '<td>'.$mItem["destino"].'</td>'.
  	              '<td></td>'.
                '</tr>'.
                '<tr>'.
  	              '<td></td>'.
                  '<td>Hora de llegada:</td>'.
                  '<td>'.$mItem["hora_llegada"].'</td>'.
                  '<td></td>'.
                '</tr>'.
                '<tr>'.
                  '<td></td>'.
                  '<td>Hora de salida:</td>'.
                  '<td>'.$mItem["hora_salida"].'</td>'.
  	              '<td></td>'.
                '</tr>'.
                '<tr>'.
                  '<td></td>'.
                  '<td>Hora de recogida:</td>'.
                  '<td>'.$mItem["hora_recogida"].'</td>'.
                  '<td></td>'.
                '</tr>'.
                '<tr>'.
                  '<td></td>'.
                  '<td>Valor:</td>'.
                  '<td>'.$mItem["valor"].'</td>'.
                  '<td></td>'.
                '</tr>'.
              '</table>';
    }

    $body.= '<table width="600" cellpadding="0" cellspacing="0" border="0" style="font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#626262; border-top:1px dashed #fabd31; margin-top:25px; padding-top:5px;">'.
              '<tr>'.
              '</tr>'.
              '<tr>'.
                '<td width="20"></td>'.
                '<td>'.
                  '<strong class="alert">IMPORTANTE</strong>'.
                '</td>'.
                '<td height="50"></td>'.
              '</tr>'.
              '<tr>'.
                '<td width="20"></td>'.
                '<td>El transporte debe presentarse con mínimo 15 minutos de anticipación a prestar cada uno de los servicios.</td>'.
                '<td></td>'.
              '</tr>'.
              '<tr>'.
  	            '<td height="38px"></td>'.
                '<td>'.
                  'Número 24 horas: <strong>314 242 5870</strong>; Favor informar inmediatamente a ALL REPS LTDA, cualquier variación ó inconveniente que se presente.'.
                '</td>'.
                '<td></td>'.
              '</tr>'.
              '<tr>'.
  	            '<td height="38px"></td>'.
                '<td>'.
                  'En caso de que el cliente solicite servicio adicional, se debe solicitar autorización a la oficina solicitante antes de prestarlo.'.
                '</td>'.
                '<td></td>'.
              '</tr>'.
              '<tr>'.
  	            '<td height="38px"></td>'.
                '<td>'.
                  'Teniendo en cuenta que la seguridad de los pasajeros es responsabilidad tanto de ustedes como de ALL REPS LTDA., solicitamos cumplir las normas de seguridad y tránsito establecidas.'.
                '</td>'.
                '<td></td>'.
              '</tr>'.
              '<tr>'.
  	            '<td height="38px"></td>'.
                '<td>'.
                  'Al momento de <strong>facturar</strong> el servicio se debe especificar nuestra referencia como está en el <strong>asunto del mensaje</strong>.'.
                '</td>'.
                '<td></td>'.
              '</tr>'.
              '<tr>'.
  	            '<td height="38px"></td>'.
                '<td>'.
                  'El vehículo debe estar en excelentes condiciones mecánicas y en perfecto estado de limpieza.'.
                '</td>'.
                '<td></td>'.
              '</tr>'.
              '<tr>'.
  	            '<td height="38px"></td>'.
                '<td>'.
                  'Mientras los pasajeros estén fuera del vehículo, favor pedir a los pasajeros que guarden sus bolsos de mano y artículos personales en la bodega ó baúl del vehículo con seguro.'.
                '</td>'.
                '<td></td>'.
              '</tr>'.
              '<tr>'.
                '<td height="30"></td>'.
              '</tr>'.
            '</table>';

    return self::SendEmail( $data["para"], $data["asunto"], $body );
  }
}

?>