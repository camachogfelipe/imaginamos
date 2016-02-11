<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of descripcion
 *
 * @author carlos
 */
class descripcion
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
    $mIdEmpresa = StripHtml( GetData( "id_empresa" ) );

    $mSql = "SELECT a.id, a.txt_nom_comercial, a.txt_razon_social, a.txt_descripcion, ".
                   "b.txt_nombre AS nom_ramo, a.txt_ramo_2, a.fil_logo, a.txt_website ".
              "FROM zona_empresas AS a LEFT JOIN zona_ramos AS b ON a.id_ramo = b.id ".
             "WHERE a.ind_estado = '1' ".
               "AND a.id = '".$mIdEmpresa."' ";

    $mSql .= "ORDER BY a.txt_nom_comercial ASC ";

    $this -> cEmpresa = DbHandler::GetRow( $mSql );

    $mSql = "SELECT a.id, a.txt_cargo, b.fil_logo, b.txt_nom_comercial, ".
                   "CONCAT( SUBSTRING( a.txt_descripcion, 1, 250 ), '...' ) AS descripcion, ".
                   "c.txt_nombre AS nom_area, d.txt_nombre AS nom_departamento ".
              "FROM zona_ofertas AS a LEFT JOIN zona_empresas AS b ON a.id_empresa = b.id ".
                                     "LEFT JOIN zona_area_laboral AS c ON a.id_area = c.id ".
                                     "LEFT JOIN cms_departamentos AS d ON a.id_departamento = d.id ".
             "WHERE a.ind_visible = '1' ".
               "AND a.ind_estado = '1' ".
               "AND a.id_empresa = '".$mIdEmpresa."' ".
             "ORDER BY a.fec_creasi DESC ";

    $this -> cOfertas = DbHandler::GetAll( $mSql );

    $this -> cNumOfertas = count( $this -> cOfertas );
  }
}

?>
