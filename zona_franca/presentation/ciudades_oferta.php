<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ciudades_oferta
 *
 * @author carlos
 */
class ciudadesOferta 
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;
  public $cTitulo       = NULL;
  public $cSubTitulo    = NULL;

  // Class constructor
  public function __construct()
  {
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mVolver  = $this->mSiteUrl;
    $this -> cOfPubli = Link::ToSection( array( "s" => "ofertas_publicadas" ) );
  }

  public function init()
  {
    $mSql = "SELECT ( SELECT COUNT( z.id ) ".
                       "FROM zona_ofertas AS z ".
                      "WHERE z.id_ciudad = a.id_ciudad ".
                        "AND z.ind_estado = '1' ".
                        "AND z.ind_visible = '1' ) AS num, b.txt_nombre, b.id ".
              "FROM zona_ofertas AS a LEFT JOIN cms_ciudades AS b ON a.id_ciudad = b.id ".
             "WHERE a.ind_estado = '1' ".
               "AND a.ind_visible = '1' ".
             "GROUP BY a.id_ciudad ".
             "ORDER BY num DESC ";

    $this -> cCiudadOferta = DbHandler::GetAll( $mSql );
  }
}
?>
