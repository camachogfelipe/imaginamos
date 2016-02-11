<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of buscador_columna
 *
 * @author carlos
 */
class buscadorColumna
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
    $this -> cOfPubli = Link::ToSection( array( "s" => "ofertas_publicadas" ) );
  }

  public function init()
  {
    $this -> cIdArea = GetData( "area" );
    $this -> cIdLugar = GetData( "lugar" );
    $this -> cIdJerar = GetData( "jerar" );
    $this -> cFecha = GetData( "fecha" );
    $this -> cIdAspira = GetData( "aspira" );
    $this -> cSection = GetData( "seccion", "" );

    $mSqlArea = "SELECT a.id, a.txt_nombre, ".
                       "( SELECT COUNT( b.id ) ".
                           "FROM zona_ofertas AS b ".
                          "WHERE a.id = b.id_area ".
                            "AND b.ind_visible = '1' ".
                            "AND b.ind_estado = '1' ) AS num ".
                  "FROM zona_area_laboral AS a ".
                 "WHERE a.ind_estado = '1' ".
                   "AND ( SELECT COUNT( z.id ) ".
                           "FROM zona_ofertas AS z ".
                          "WHERE a.id = z.id_area ".
                            "AND z.ind_visible = '1' ".
                            "AND z.ind_estado = '1' ) > 0 ".
                 "ORDER BY num DESC ";

    $this -> cAreas = DbHandler::GetAll( $mSqlArea );
    $this -> cContador["area"] = count( $this -> cAreas );

    $mSqlLug = "SELECT a.id, a.txt_nombre,  ".
                      "( SELECT COUNT( b.id ) ".
                          "FROM zona_ofertas AS b ".
                         "WHERE a.id = b.id_departamento ".
                           "AND b.ind_visible = '1' ".
                           "AND b.ind_estado = '1' ) AS num ".
                 "FROM cms_departamentos AS a ".
                "WHERE ( SELECT COUNT( z.id ) ".
                          "FROM zona_ofertas AS z ".
                         "WHERE a.id = z.id_departamento ".
                           "AND z.ind_visible = '1' ".
                           "AND z.ind_estado = '1' ) > 0 ".
                "ORDER BY num DESC ";

    $this -> cLugares = DbHandler::GetAll( $mSqlLug );
    $this -> cContador["lugar"] = count( $this -> cLugares );

    $mSqlJerar = "SELECT a.id, a.txt_nombre, ".
                        "( SELECT COUNT( b.id ) ".
                            "FROM zona_ofertas AS b ".
                           "WHERE a.id = b.id_jerarquia ".
                             "AND ind_visible = '1' ".
                             "AND ind_estado = '1' ) AS num ".
                   "FROM zona_jerarquias AS a ".
                  "WHERE ind_estado = '1' ".
                  "ORDER BY num DESC ";

    $this -> cJerar = DbHandler::GetAll( $mSqlJerar );


    
    $mSqlAspira = "SELECT a.id, a.txt_nombre, ".
                        "( SELECT COUNT( b.id ) ".
                            "FROM zona_ofertas AS b ".
                           "WHERE a.id = b.id_area_aspi ".
                             "AND ind_visible = '1' ".
                             "AND ind_estado = '1' ) AS num ".
                   "FROM zona_aspiracion AS a ".
                  "WHERE ind_estado = '1' ".
                  "ORDER BY num DESC ";

    $this -> cAspira = DbHandler::GetAll( $mSqlAspira );
    $this -> cContador["area"] = count( $this -> cAspira );

  }
}

?>