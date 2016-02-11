<?php
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);

  // Archivo de configuracion
  include( 'include/define.php' );
  include( 'include/config.php' );
  include( 'business/function/plGeneral.fnc.php' );

  $mSql = "SELECT a.txt_cargo, b.txt_nom_comercial, b.txt_nit, c.txt_email ".
            "FROM zona_ofertas AS a LEFT JOIN zona_empresas AS b ON a.id_empresa = b.id ".
                                   "LEFT JOIN zona_registrados AS c ON b.id_registrado = c.id ".
           "WHERE a.ind_estado = '1' ".
             "AND a.ind_visible = '1' ".
             "AND ADDDATE( a.fec_creasi, 45) <= '".date( "Y-m-d" )."' ";

  $mResOfertas = DbHandler::GetAll($mSql);

  // Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  // Cabeceras adicionales
  $cabeceras .= 'From: Recordatorio <no-reply@empleoenmarcha.com>' . "\r\n";

  foreach( $mResOfertas AS $oferta )
  {
    mail( $oferta["txt_email"], "Oferta apunto de expirar", "Su oferta ".$oferta["txt_cargo"]."esta apunto de expirar", $cabeceras );
  }

  $mSqlUdate = "UPDATE zona_ofertas SET ind_visible = '0' WHERE a.ind_estado = '1' AND a.ind_visible = '1' AND ADDDATE( a.fec_creasi, 60) <= '".date( "Y-m-d" )."'";
  DbHandler::Execute($mSql);

  $mSqlUsuario = "SELECT a.num_identifica, CONCAT( a.txt_prim_nom, '', a.txt_prim_apell ) AS nom_persona, b.txt_email ".
                   "FROM zona_personas AS a LEFT JOIN zona_registrados AS b ON a.id_registrado = b.id ".
                  "WHERE a.id NOT IN ( SELECT c.id_persona ".
                                        "FROM zona_oferta_postulado AS c ".
                                       "WHERE c.fec_creasi BETWEEN '".date( "Y-m-d 00:00:00", strtotime( "-60 days" ) )."' AND '".date( "Y-m-d 23:59:59" )."' )";

  $mResPersonas = DbHandler::GetAll($mSql);

  foreach( $mResPersonas AS $persona )
  {
    mail( $persona["txt_email"], "Inactividad de cuenta", "Hemos notado una inactividad en tu cuenta", $cabeceras );
  }
?>