<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cargos_oferta
 *
 * @author carlos
 */
class cargosOferta
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
    $mSql = "SELECT a.id, a.txt_nombre, ".
                   "( SELECT COUNT( b.id ) ".
                       "FROM zona_ofertas AS b ".
                      "WHERE a.id = b.id_sector ".
                        "AND ind_visible = '1' ".
                        "AND ind_estado = '1' ) AS num ".
              "FROM zona_profesion AS a ".
             "WHERE a.ind_estado = '1' ".
             "ORDER BY num DESC ";

    $this -> cSectorOferta = DbHandler::GetAll( $mSql );
  }
}

?>
