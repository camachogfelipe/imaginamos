<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of areas_empleo
 *
 * @author carlos
 */
class areasEmpleo
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
    $mIdArea = StripHtml( GetData( "area" ) );
    $mIdLugar = StripHtml( GetData( "lugar" ) );
    $mIdJerar = StripHtml( GetData( "jerar" ) );
    $mFecha = StripHtml( GetData( "fecha" ) );

    $mSql = "SELECT a.id_area, b.txt_nombre ".
              "FROM zona_ofertas AS a LEFT JOIN zona_area_laboral AS b ON a.id_area = b.id ".
             "WHERE a.ind_visible = '1' ".
               "AND a.ind_estado = '1' ";

    $mSql .= NULL !== $mIdArea && "" != $mIdArea ? "AND a.id_area = '".$mIdArea."' " : "";
    $mSql .= NULL !== $mIdLugar && "" != $mIdLugar ? "AND a.id_departamento = '".$mIdLugar."' " : "";
    $mSql .= NULL !== $mIdJerar && "" != $mIdJerar ? "AND a.id_jerarquia = '".$mIdJerar."' " : "";

    if( NULL !== $mFecha && "" != $mFecha )
    {
      $mFecIni = date( "Y-m-d 00:00:00", strtotime( "-".$mFecha." days" ) );
      $mFeFin = date( "Y-m-d 23:59:59" );
      $mSql .= "AND a.fec_creasi BETWEEN '".$mFecIni."' AND '".$mFeFin."' ";
    }

    $mSql .= "GROUP BY id_area ";

    $mSql .= "ORDER BY a.fec_creasi DESC ";

    $this -> cData = DbHandler::GetAll( $mSql );

    for( $i = 0, $mTot = count( $this -> cData ); $i < $mTot; $i++ )
    {
      $mSql = "SELECT a.id_sector, b.txt_nombre, ".
                     "( SELECT COUNT( z.id ) ".
                         "FROM zona_ofertas AS z ".
                        "WHERE z.id_sector = a.id_sector ".
                          "AND z.ind_visible = '1' ".
                          "AND z.ind_estado = '1' ";
      $mSql .= NULL !== $mIdArea && "" != $mIdArea ? "AND z.id_area = '".$mIdArea."' " : "";
      $mSql .= NULL !== $mIdLugar && "" != $mIdLugar ? "AND z.id_departamento = '".$mIdLugar."' " : "";
      $mSql .= NULL !== $mIdJerar && "" != $mIdJerar ? "AND z.id_jerarquia = '".$mIdJerar."' " : "";

      $mSql .= " ) AS num ".
                "FROM zona_ofertas AS a LEFT JOIN zona_profesion AS b ON a.id_sector = b.id ".
               "WHERE a.ind_visible = '1' ".
                 "AND a.ind_estado = '1' ".
                 "AND a.id_area = '".$this -> cData[$i]["id_area"]."' ";

      $mSql .= NULL !== $mIdLugar && "" != $mIdLugar ? "AND a.id_departamento = '".$mIdLugar."' " : "";
      $mSql .= NULL !== $mIdJerar && "" != $mIdJerar ? "AND a.id_jerarquia = '".$mIdJerar."' " : "";

      if( NULL !== $mFecha && "" != $mFecha )
      {
        $mFecIni = date( "Y-m-d 00:00:00", strtotime( "-".$mFecha." days" ) );
        $mFeFin = date( "Y-m-d 23:59:59" );

        $mSql .= "AND a.fec_creasi BETWEEN '".$mFecIni."' AND '".$mFeFin."' ";
      }

      $mSql .= "GROUP BY id_sector ";

      $mSql .= "ORDER BY a.fec_creasi DESC, num DESC ";
      $this -> cData[$i]["profe"] = DbHandler::GetAll( $mSql );
    }

    $this -> Subtitulo();
  }

  private function Subtitulo()
  {
    $mIdArea = GetData( "area" );
    $mIdLugar = GetData( "lugar" );
    $mIdJerar = GetData( "jerar" );
    $mFecha = GetData( "fecha" );

    if( NULL !== $mIdArea && "" != $mIdArea )
    {
      $mData = new Dbzona_area_laboral();
      $mData = $mData -> getByPk( $mIdArea );
      $this -> cSubTitulo = ucfirst( $mData["txt_nombre"] );
    }
    else if( NULL !== $mIdLugar && "" != $mIdLugar )
    {
      $mData = new Dbcms_departamentos();
      $mData = $mData -> getByPk( $mIdLugar );
      $this -> cSubTitulo = ucfirst( $mData["txt_nombre"] );
    }
    else if( NULL !== $mIdJerar && "" != $mIdJerar )
    {
      $mData = new Dbzona_jerarquias();
      $mData = $mData -> getByPk( $mIdJerar );
      $this -> cSubTitulo = ucfirst( $mData["txt_nombre"] );
    }
    else if( NULL !== $mFecha && "" != $mFecha )
    {
      if( 1 == $mFecha )
        $this -> cSubTitulo = "Último día";
      else
        $this -> cSubTitulo = "Últimos (".$mFecha.") días";
    }
    else
    {
      $this -> cSubTitulo = "Últimas ofertas";
    }
  }
}

?>
