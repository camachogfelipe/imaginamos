<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of consejos
 *
 * @author carlos
 */
class consejos
{
public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;
  public $cTitulo       = NULL;

  // Class constructor
  public function __construct()
  {
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mVolver  = $this->mSiteUrl;
  }

  public function init()
  {
    $this -> mTipo = StripHtml( GetData( "id_tipo", "1" ) );

    $mSql = "SELECT id, txt_titulo, fil_image, fec_creasi, ".
                   "CONCAT( SUBSTRING( txt_descripcion, 1, 250 ), '...' ) AS descripcion ".
              "FROM cms_articulos ".
             "WHERE ind_estado = '1' ".
               "AND id_tipo = '".$this -> mTipo."' ".
             "ORDER BY fec_creasi DESC ".
             "LIMIT 0, 50";

    $this -> cData = DbHandler::GetAll( $mSql );
  }
}

?>
