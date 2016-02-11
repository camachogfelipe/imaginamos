<?php
/**
 * Description of Ponline
 *
 * @author carlos
 */
class Ponline
{
  public function makeKey( $mKey = NULL, $mUserId = NULL, $mRefVent = NULL, $mValue = NULL, $mCurrency = "COP" )
  {
    if( NULL === $mKey || "" == $mKey )
      return FALSE;
    
    if( NULL === $mUserId || "" == $mUserId )
      return FALSE;
    
    if( NULL === $mRefVent || "" == $mRefVent )
      return FALSE;
    
    if( NULL === $mValue || "" == $mValue )
      return FALSE;
    
    return md5( $mKey."~".$mUserId."~".$mRefVent."~".$mValue."~".$mCurrency );
  }
  
  public function getStatus( $mCodEst = NULL )
  {
    if( NULL === $mCodEst || "" == $mCodEst )
      return FALSE;
    
    switch( $mCodEst )
    {
      case 1:
      {
        return "Sin abrir";
        break;
      }

      case 2:
      {
        return "Abierta";
        break;
      }
      
      case 4:
      {
        return "Pagada y abonada";
        break;
      }
      
      case 5:
      {
        return "Cancelada";
        break;
      }
      
      case 6:
      {
        return "Rechazada";
        break;
      }
      
      case 7:
      {
        return "En validaci�n";
        break;
      }
      
      case 8:
      {
        return "Reversada";
        break;
      }
      
      case 9:
      {
        return "Reversada fraudulenta";
        break;
      }
      
      case 10:
      {
        return "Enviada ent. Financiera";
        break;
      }
      
      case 11:
      {
        return "Capturando datos tarjeta de cr�dito";
        break;
      }
      
      case 12:
      {
        return "Esperando confirmaci�n sistema PSE";
        break;
      }
      
      case 13:
      {
        return "Activa D�bitos ACH";
        break;
      }
      
      case 14:
      {
        return "Confirmando pago Efecty";
        break;
      }
      
      case 15:
      {
        return "Impreso";
        break;
      }
      
      case 16:
      {
        return "Debito ACH Registrado";
        break;
      }
    }
  }
  
  public function getRespuesta( $mCodResp = NULL )
  {
    if( NULL === $mCodResp || "" == $mCodResp )
      return FALSE;
    
    switch( $mCodResp )
    {
      case 1:
      {
        return "Transacci�n aprobada";
        break;
      }
      
      case 2:
      {
        return "Pago cancelado por el usuario";
        break;
      }
      
      case 3:
      {
        return "Pago cancelado por el usuario durante validaci�n";
        break;
      }
      
      case 4:
      {
        return "Transacci�n rechazada por la entidad";
        break;
      }
      
      case 5:
      {
        return "Transacci�n declinada por la entidad";
        break;
      }
      
      case 6:
      {
        return "Fondos insuficientes";
        break;
      }
      
      case 7:
      {
        return "Tarjeta invalida";
        break;
      }
      
      case 8:
      {
        return "Acuda a su entidad";
        break;
      }
      
      case 9:
      {
        return "Tarjeta vencida";
        break;
      }
      
      case 10:
      {
        return "Tarjeta restringida";
        break;
      }
      
      case 11:
      {
        return "Discrecional POL";
        break;
      }
      
      case 12:
      {
        return "Fecha de expiraci�n o campo seg. Inv�lidos";
        break;
      }
      
      case 13:
      {
        return "Repita transacci�n";
        break;
      }
      
      case 14:
      {
        return "Transacci�n inv�lida";
        break;
      }
      
      case 15:
      {
        return "Transacci�n en proceso de validaci�n";
        break;
      }
      
      case 16:
      {
        return "Combinaci�n usuario-contrase�a inv�lidos";
        break;
      }
      
      case 17:
      {
        return "Monto excede m�ximo permitido por entidad";
        break;
      }
      
      case 18:
      {
        return "Documento de identificaci�n inv�lido";
        break;
      }
      
      case 19:
      {
        return "Transacci�n abandonada capturando datos TC";
        break;
      }
      
      case 20:
      {
        return "Transacci�n abandonada";
        break;
      }
      
      case 21:
      {
        return "Imposible reversar transacci�n";
        break;
      }
      
      case 22:
      {
        return "Tarjeta no autorizada para realizar compras por internet.";
        break;
      }
      
      case 23:
      {
        return "Transacci�n rechazada";
        break;
      }
      
      case 24:
      {
        return "Transacci�n parcial aprobada";
        break;
      }
      
      case 25:
      {
        return "Rechazada por no confirmaci�n";
        break;
      }
      
      case 26:
      {
        return "Comprobante generado, esperando pago en banco";
        break;
      }
      
      case 9994:
      {
        return "Transacci�n pendiente por confirmar";
        break;
      }
      
      case 9995:
      {
        return "Certificado digital no encontrado";
        break;
      }
      
      case 9996:
      {
        return "Entidad no responde";
        break;
      }
      
      case 9997:
      {
        return "Error de mensajer�a con la entidad financiera";
        break;
      }
      
      case 9998:
      {
        return "Error en la entidad financiera";
        break;
      }
      
      case 9999:
      {
        return "Error no especificado";
        break;
      }
    }
  }
  
  public function getTipoMedioPago( $mCodMedPag = NULL )
  {
    if( NULL === $mCodMedPag || "" == $mCodMedPag )
      return FALSE;
    
    switch( $mCodMedPag )
    {
      case 2:
      {
        return "Tarjetas de Cr�dito";
        break;
      }
      
      case 3:
      {
        return "Verified by VISA";
        break;
      }
      
      case 4:
      {
        return "PSE (Cuentas corriente/ahor.)";
        break;
      }
      
      case 5:
      {
        return "Debito ACH";
        break;
      }
      
      case 7:
      {
        return "Pago en efectivo (Efecty)";
        break;
      }
      
      case 8:
      {
        return "Pago referenciado";
        break;
      }
    }
  }
  
  public function getMedioPago( $mCodMedPag = NULL )
  {
    if( NULL === $mCodMedPag || "" == $mCodMedPag )
      return FALSE;
    
    switch( $mCodMedPag )
    {
      case 10:
      {
        return "VISA";
        break;
      }
      
      case 11:
      {
        return "MASTERCARD";
        break;
      }
      
      case 12:
      {
        return "AMEX";
        break;
      }
      
      case 22:
      {
        return "DINERS";
        break;
      }
      
      case 24:
      {
        return "Verified by VISA";
        break;
      }
      
      case 25:
      {
        return "PSE";
        break;
      }
      
      case 27:
      {
        return "VISA Debito";
        break;
      }
      
      case 30:
      {
        return "Efecty";
        break;
      }
      
      case 31:
      {
        return "Pago referenciado";
        break;
      }
    }
  }
}

?>
