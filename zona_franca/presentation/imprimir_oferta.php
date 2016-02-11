<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ofertas_publicadas
 *
 * @author carlos
 */
class imprimirOferta
{
  // Class constructor
  public function __construct()
  {
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mVolver  = $this->mSiteUrl;
  }

  public function init()
  {
    $mId = GetData( "id" );

    $mSql = "SELECT a.txt_cargo, a.txt_descripcion, c.txt_nombre AS dep_ofe, d.txt_nombre AS ciu_ofe, ".
                   "e.txt_nombre AS nom_area, f.txt_nombre AS nom_sector, g.txt_nombre AS nom_jerarquia, ".
                   "a.num_vacantes, a.txt_requisitos, h.txt_nombre AS nom_nivel_estudio, a.id_area, ".
                   "i.txt_nombre AS nom_area_aspi, j.txt_nombre AS dep_aspi, k.txt_nombre AS ciu_aspi, ".
                   "a.num_edad_aspi, a.num_exp_aspi, b.txt_nom_comercial, b.fil_logo, a.fec_creasi, l.txt_nombre AS salario  ".
              "FROM zona_ofertas AS a LEFT JOIN zona_empresas AS b ON a.id_empresa  = b.id ".
                                     "LEFT JOIN cms_departamentos AS c ON a.id_departamento = c.id ".
                                     "LEFT JOIN cms_ciudades AS d ON a.id_ciudad = d.id ".
                                     "LEFT JOIN zona_area_laboral AS e ON a.id_area = e.id ".
                                     "LEFT JOIN zona_profesion AS f ON a.id_sector = f.id ".
                                     "LEFT JOIN zona_jerarquias g ON a.id_jerarquia = g.id ".
                                     "LEFT JOIN zona_nivel_estudio AS h ON a.id_nivel_estudio = h.id ".
                                     "LEFT JOIN zona_profesion AS i ON a.id_sector = i.id ".
                                     "LEFT JOIN cms_departamentos AS j ON a.id_depto_aspi = j.id ".
                                     "LEFT JOIN cms_ciudades AS k ON a.id_ciudad_aspi = k.id ".
                                     "LEFT JOIN zona_aspiracion AS l ON a.id_area_aspi = l.id ".
             "WHERE a.id = '".$mId."' ";

    $this->mData = DbHandler::GetRow( $mSql );

    $mSqlRela = "SELECT b.txt_nombre ".
                  "FROM zona_ofertas AS a LEFT JOIN zona_profesion AS b ON id_area_aspi = b.id ".
                 "WHERE a.id_area = '".$mResoult["id_area"]."' ".
                 "GROUP BY a.id_area_aspi ".
                 "LIMIT 0, 5 ";

    $this->mRela = DbHandler::GetAll( $mSqlRela );
  }
}