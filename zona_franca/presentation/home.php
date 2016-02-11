<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author carlos
 */
class home
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
    $this->cDescrip = Link::ToSection(array("s" => "descripcion"));

  }

  public function init()
  {
    $mMeses = array( "1" => "<span>ENE</span>", "2" => "<span>FEB</span>", "3" => "<span>MAR</span>", "4" => "<span>ABR</span>",
                     "5" => "<span>MAY</span>", "6" => "<span>JUN</span>", "7" => "<span>JUL</span>", "8" => "<span>AGO</span>",
                     "9" => "<span>SEP</span>", "10" => "<span>OCT</span>", "11" => "<span>NOV</span>", "12" => "<span>DIC</span>" );

    $this -> mTipo = StripHtml( GetData( "id_tipo", "1" ) );

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

    $mSql = "SELECT id, txt_titulo, fil_image, fec_creasi, ".
                   "CONCAT( SUBSTRING( txt_descripcion, 1, 200 ), '...' ) AS descripcion ".
              "FROM cms_articulos ".
             "WHERE ind_estado = '1' ".
               "AND id_tipo = '".$this -> mTipo."' ".
             "ORDER BY fec_creasi DESC ".
             "LIMIT 0, 3 ";

    $this -> cData = DbHandler::GetAll( $mSql );

    $mSqlEnc = "SELECT id, txt_pregunta ".
                 "FROM cms_encuesta_pregunta ".
                "WHERE ind_estado = '1' ".
                "ORDER BY fec_creasi DESC ".
                "LIMIT 0, 1 ";

    $this -> cEncuesta = DbHandler::GetRow( $mSqlEnc );

    $mSqlOpcion = "SELECT id, txt_respuesta ".
                    "FROM cms_encuesta_opciones ".
                   "WHERE id_pregunta = '".$this -> cEncuesta["id"]."' ".
                     "AND ind_estado = '1' ";

    $this -> cEncuesta["opciones"] = DbHandler::GetAll( $mSqlOpcion );

    $mSqlDesta = "SELECT a.id, a.txt_nom_comercial, a.txt_website, a.fil_logo ".
                   "FROM zona_empresas AS a INNER JOIN zona_empresas_desta AS b ON a.id = b.id_empresa ".
                  "WHERE a.ind_estado = '1' ".
                  "LIMIT 0, 10 ";

    $this -> cDesta = DbHandler::GetAll( $mSqlDesta );

    $mContacto = new Dbcms_contacto();
    $this -> cContac = $mContacto -> getByPk( '1' );

    $mSql = "SELECT a.id, a.txt_cargo, b.txt_nom_comercial, a.fec_creasi, ".
                   "CONCAT( SUBSTRING( a.txt_descripcion, 1, 50 ), '...' ) AS descripcion ".
              "FROM zona_ofertas AS a LEFT JOIN zona_empresas AS b ON a.id_empresa = b.id ".
             "WHERE a.ind_visible = '1' ".
               "AND a.ind_estado = '1' ".
             "ORDER BY a.fec_creasi DESC ".
             "LIMIT 0, 20 ";

    $this -> cOfertas = DbHandler::GetAll( $mSql );
    for( $i = 0, $tot = count( $this -> cOfertas ); $i < $tot; $i++ )
    {
      $this -> cOfertas[$i]["fecha"] = date( "d", strtotime( $this -> cOfertas[$i]["fec_creasi"] ) );
      $this -> cOfertas[$i]["fecha"] .= $mMeses[date( "n", strtotime( $this -> cOfertas[$i]["fec_creasi"] ) )];
    }
/* *
    $mSql = "SELECT COUNT( a.id ) AS num, b.txt_nombre, b.id  ".
              "FROM zona_ofertas AS a LEFT JOIN zona_profesion AS b ON a.id_sector = b.id ".
             "WHERE a.ind_estado = '1' ".
               "AND a.ind_visible = '1' ".
             "GROUP BY a.id_sector ".
             "ORDER BY num DESC ".
             "LIMIT 0, 25 ";
/* */
    $mSql = "SELECT a.id, a.txt_nombre, ".
                   "( SELECT COUNT( b.id ) ".
                       "FROM zona_ofertas AS b ".
                      "WHERE a.id = b.id_area ".
                        "AND ind_visible = '1' ".
                        "AND ind_estado = '1' ) AS num ".
              "FROM zona_area_laboral AS a ".
             "WHERE a.ind_estado = '1' ".
             "ORDER BY num DESC ";
             "LIMIT 0, 25 ";
/* */
    $this -> cSectorOferta = DbHandler::GetAll( $mSql );

    $mSql = "SELECT COUNT( a.id ) AS num, b.txt_nombre, b.id ".
              "FROM zona_ofertas AS a LEFT JOIN cms_ciudades AS b ON a.id_ciudad = b.id ".
             "WHERE a.ind_estado = '1' ".
               "AND a.ind_visible = '1' ".
             "GROUP BY a.id_ciudad ".
             "ORDER BY num DESC ".
             "LIMIT 0, 4 ";

    $this -> cCiudadOferta = DbHandler::GetAll( $mSql );

    $cData = new Dbcms_home();
    $this->mBannerHome = $cData->getByPk( '1' );

    $mTitulo = explode( " ", $this->mBannerHome["txt_titulo"] );
    $mTitulo2 = "";

    for( $i = 0, $mTot = count( $mTitulo ); $i < $mTot; $i++ )
    {
      $mTitulo2 .= ($i+1) == $mTot ? "<span>".$mTitulo[$i]."</span> " : $mTitulo[$i]." ";
    }

    $this -> mBannerHome["txt_titulo"] = $mTitulo2;

    $mSection = new Dbcms_secciones();

    $this->cCity = $mSection->getByPk( '12' );
  }
}

?>
