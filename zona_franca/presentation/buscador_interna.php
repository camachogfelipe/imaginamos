<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of buscador_interna
 *
 * @author carlos
 */
class buscadorInterna
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

    $this -> cOfPubli = Link::ToSection( array( "s" => "ofertas_publicadas" ) );
  }

  public function init()
  {
    $this -> cIdArea = StripHtml( GetData( "area" ) );
    $this -> cFecha = StripHtml( GetData( "fecha" ) );
    $this -> cTitulo = StripHtml( GetData( "titulo" ) );

    $mSqlArea = "SELECT a.id, a.txt_nombre, ".
                       "( SELECT COUNT( b.id ) ".
                           "FROM zona_ofertas AS b ".
                          "WHERE a.id = b.id_area ".
                            "AND ind_visible = '1' ".
                            "AND ind_estado = '1' ) AS num ".
                  "FROM zona_area_laboral AS a ".
                 "WHERE a.ind_estado = '1' ".
                 "ORDER BY txt_nombre ASC ";

    $this -> cAreas = DbHandler::GetAll( $mSqlArea );
  }
}

?>
