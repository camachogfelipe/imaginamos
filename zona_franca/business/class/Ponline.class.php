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
        return "En validación";
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
        return "Capturando datos tarjeta de crédito";
        break;
      }
      
      case 12:
      {
        return "Esperando confirmación sistema PSE";
        break;
      }
      
      case 13:
      {
        return "Activa Débitos ACH";
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
        return "Transacción aprobada";
        break;
      }
      
      case 2:
      {
        return "Pago cancelado por el usuario";
        break;
      }
      
      case 3:
      {
        return "Pago cancelado por el usuario durante validación";
        break;
      }
      
      case 4:
      {
        return "Transacción rechazada por la entidad";
        break;
      }
      
      case 5:
      {
        return "Transacción declinada por la entidad";
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
        return "Fecha de expiración o campo seg. Inválidos";
        break;
      }
      
      case 13:
      {
        return "Repita transacción";
        break;
      }
      
      case 14:
      {
        return "Transacción inválida";
        break;
      }
      
      case 15:
      {
        return "Transacción en proceso de validación";
        break;
      }
      
      case 16:
      {
        return "Combinación usuario-contraseña inválidos";
        break;
      }
      
      case 17:
      {
        return "Monto excede máximo permitido por entidad";
        break;
      }
      
      case 18:
      {
        return "Documento de identificación inválido";
        break;
      }
      
      case 19:
      {
        return "Transacción abandonada capturando datos TC";
        break;
      }
      
      case 20:
      {
        return "Transacción abandonada";
        break;
      }
      
      case 21:
      {
        return "Imposible reversar transacción";
        break;
      }
      
      case 22:
      {
        return "Tarjeta no autorizada para realizar compras por internet.";
        break;
      }
      
      case 23:
      {
        return "Transacción rechazada";
        break;
      }
      
      case 24:
      {
        return "Transacción parcial aprobada";
        break;
      }
      
      case 25:
      {
        return "Rechazada por no confirmación";
        break;
      }
      
      case 26:
      {
        return "Comprobante generado, esperando pago en banco";
        break;
      }
      
      case 9994:
      {
        return "Transacción pendiente por confirmar";
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
        return "Error de mensajería con la entidad financiera";
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
        return "Tarjetas de Crédito";
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
