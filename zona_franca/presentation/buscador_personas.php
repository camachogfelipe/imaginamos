<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of buscador_personas
 *
 * @author carlos
 */
class buscadorPersonas
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
  }

  public function init()
  {
    $mIdProf = StripHtml( GetData( "id_prof" ) );
    $mPerfil = StripHtml( GetData( "perfil" ) );

    $mSql = "SELECT a.id AS id_perfil, CONCAT( a.txt_prim_nom, ' ', a.txt_seg_nom, ' ', a.txt_prim_apell ) AS nom_aspirante, ".
                         "CONCAT( SUBSTRING( b.txt_perfil, 1, 250 ), '...' ) AS perfil, ".
                         "a.txt_telefono, a.txt_movil, c.txt_email, h.txt_nombre AS nom_profesion, ".
                         "CONCAT( d.txt_nombre, ' - ', e.txt_nombre ) AS lugar, c.fil_image ".
                    "FROM zona_personas AS a LEFT JOIN zona_personas_perfil AS b ON a.id = b.id_persona ".
                                            "LEFT JOIN zona_registrados AS c ON a.id_registrado = c.id ".
                                            "LEFT JOIN cms_departamentos AS d ON a.id_departamento = d.id ".
                                            "LEFT JOIN cms_ciudades AS e ON a.id_ciudad = e.id ".
                                            "LEFT JOIN zona_personas_eduformal AS f ON a.id = f.id_persona ".
                                            "LEFT JOIN zona_personas_experiencia AS g ON a.id = g.id_persona ".
                                            "LEFT JOIN zona_profesion AS h ON g.id_arealab = h.id ".
                   "WHERE a.ind_estado = '1' ".
                     "AND c.ind_privaci = '1' ";


    $mSql .= NULL !== $mIdProf && "" != $mIdProf ? "AND g.id_arealab = '".$mIdProf."' " : "";
    $mSql .= NULL !== $mPerfil && "" != $mPerfil ? "AND b.txt_perfil LIKE '%".$mPerfil."%' OR b.txt_habilidades LIKE '%".$mPerfil."%' OR h.txt_nombre LIKE '%".$mPerfil."%' " : "";

    $mSql .= "GROUP BY a.id ";
    $mSql .= "ORDER BY a.txt_prim_apell ASC ";

    $this->cData = DbHandler::GetAll( $mSql );
  }
}

?>
