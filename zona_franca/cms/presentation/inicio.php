<?php
/*
 * @file               : cms_banner.db.php
 * @brief              : Clase para la interaccion con la tabla cms_banner
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-22
 * @author             : Carlos A. Mock-kow M.
 *
 * @class: inicio
 * @brief: Clase para la interaccion con la tabla cms_banner
 */

class inicio
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;

  // Class constructor
  public function __construct()
  {
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mVolver  = $this->mSiteUrl;
  }

  public function init()
  {
    $mUrlBas = Link::Build( "" );
    $mUrlImg = Link::Build( "/images/" );

    $mQuery = "SELECT b.txt_nombre, CONCAT( '".$mUrlBas."', '/index.php?seccion=', b.txt_clase ) AS link, ".
                     "CONCAT( '".$mUrlImg."', b.fil_image ) AS fil_image ".
                "FROM cms_permisos AS a INNER JOIN cms_modulos AS b ON a.id_modulo = b.id ".
               "WHERE a.id_rol = '".StripHtml( $_SESSION["user"]["id_rol"] )."' ".
                 "AND b.ind_show = '1' ".
                 "AND b.ind_estado = '1' ";

    $this -> mList = DbHandler::GetAll( $mQuery );
  }
}
?>
