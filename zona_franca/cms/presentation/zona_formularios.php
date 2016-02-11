<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of zona_formularios
 *
 * @author carlos
 */
class zonaFormularios
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
                 "AND b.ind_estado = '1' ".
                 "AND a.id_modulo IN ( 23, 25, 26, 28, 30, 38, 39, 51, 54 ) ";

    $this -> mList = DbHandler::GetAll( $mQuery );
  }
}

?>
