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
class ofertasPublicadas
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
    $mIdArea = StripHtml( GetData( "area" ) );
    $mIdLugar = StripHtml( GetData( "lugar" ) );
    $mIdJerar = StripHtml( GetData( "jerar" ) );
    $mIdProf = StripHtml( GetData( "id_prof" ) );
    $mIdCiudad = StripHtml( GetData( "id_ciudad" ) );
    $mFecha = StripHtml( GetData( "fecha" ) );
    $mTitulo = StripHtml( GetData( "titulo" ) );
    $mIdAspira = StripHtml( GetData( "aspira" ) );

    $mModo = GetData( "modo" );

    if( $mModo == "pdf" )
    {
      $mId = GetData( "id" );

      $mFileNAme = $this -> DownloadPdf( $mId );
      downloadFile( FILES_DIR."ofertas/".$mFileNAme );
      /*
      if( $mFileNAme !== null && $mFileNAme != "" )
      {
        $file = FILES_DIR."ofertas/".$mFileNAme;
        if( isset( $file ) )
          unset( $file );
      }
      */
      exit();
    }

    $mSql = "SELECT a.id, a.txt_cargo, b.fil_logo, b.txt_nom_comercial, ".
                   "CONCAT( SUBSTRING( a.txt_descripcion, 1, 200 ), '...' ) AS descripcion, ".
                   "c.txt_nombre AS nom_area, d.txt_nombre AS nom_departamento ";

    if( "cargo" == $mModo )
      $mSql .= ", ( SELECT COUNT( z.id ) FROM zona_ofertas AS z WHERE a.id_area = z.id_area ) AS num ";
    else if( "ciudad" == $mModo )
      $mSql .= ", ( SELECT COUNT( z.id ) FROM zona_ofertas AS z WHERE a.id_ciudad = z.id_ciudad ) AS num ";

    $mSql .=  "FROM zona_ofertas AS a LEFT JOIN zona_empresas AS b ON a.id_empresa = b.id ".
                                     "LEFT JOIN zona_area_laboral AS c ON a.id_area = c.id ".
                                     "LEFT JOIN cms_departamentos AS d ON a.id_departamento = d.id ".
             "WHERE a.ind_visible = '1' ".
               "AND a.ind_estado = '1' ";

    $mSql .= NULL !== $mIdArea && "" != $mIdArea ? "AND a.id_area = '".$mIdArea."' " : "";
    $mSql .= NULL !== $mIdLugar && "" != $mIdLugar ? "AND a.id_departamento = '".$mIdLugar."' " : "";
    $mSql .= NULL !== $mIdJerar && "" != $mIdJerar ? "AND a.id_jerarquia = '".$mIdJerar."' " : "";
    $mSql .= NULL !== $mIdProf && "" != $mIdProf ? "AND a.id_sector = '".$mIdProf."' " : "";
    $mSql .= NULL !== $mIdCiudad && "" != $mIdCiudad ? "AND a.id_ciudad = '".$mIdCiudad."' " : "";
    $mSql .= NULL !== $mIdAspira && "" != $mIdAspira ? "AND a.id_area_aspi = '".$mIdAspira."' " : "";
    $mSql .= NULL !== $mTitulo && "" != $mTitulo ? "AND a.txt_cargo LIKE '%".$mTitulo."%' OR a.txt_descripcion LIKE '%".$mTitulo."%' " : "";

    if( NULL !== $mFecha && "" != $mFecha )
    {
      $mFecIni = date( "Y-m-d 00:00:00", strtotime( "-".$mFecha." days" ) );
      $mFeFin = date( "Y-m-d 23:59:59" );
      $mSql .= "AND a.fec_creasi BETWEEN '".$mFecIni."' AND '".$mFeFin."' ";
    }

    $mSql .= NULL !== $mModo && "" != $mModo ? "ORDER BY num DESC, a.fec_creasi DESC" : "ORDER BY a.fec_creasi DESC ";

    $this -> cData = DbHandler::GetAll( $mSql );

    $this -> Subtitulo();
  }

  private function Subtitulo()
  {
    $mIdArea = GetData( "area" );
    $mIdLugar = GetData( "lugar" );
    $mIdJerar = GetData( "jerar" );
    $mIdProf = GetData( "id_prof" );
    $mIdCiudad = GetData( "id_ciudad" );
    $mFecha = GetData( "fecha" );

    $mModo = GetData( "modo" );

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
    else if( NULL !== $mIdProf && "" != $mIdProf )
    {
      $mData = new Dbzona_profesion();
      $mData = $mData -> getByPk( $mIdProf );
      $this -> cSubTitulo = ucfirst( $mData["txt_nombre"] );
    }
    else if( NULL !== $mIdCiudad && "" != $mIdCiudad )
    {
      $mData = new Dbcms_ciudades();
      $mData = $mData -> getByPk( $mIdCiudad );
      $this -> cSubTitulo = ucfirst( $mData["txt_nombre"] );
    }
    else if( NULL !== $mFecha && "" != $mFecha )
    {
      if( 1 == $mFecha )
        $this -> cSubTitulo = "Último día";
      else
        $this -> cSubTitulo = "Últimos (".$mFecha.") días";
    }
    else if( "cargo" == $mModo )
    {
      $this -> cSubTitulo = "&Aacute;reas con mayor oferta";
    }
    else if( "ciudad" == $mModo )
    {
      $this -> cSubTitulo = "Ciudades con mayor oferta";
    }
    else
    {
      $this -> cSubTitulo = "Últimas ofertas";
    }
  }

  private function DownloadPdf( $mId = null )
  {
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

    $mResoult = DbHandler::GetRow( $mSql );

    $mSqlRela = "SELECT b.txt_nombre ".
                  "FROM zona_ofertas AS a LEFT JOIN zona_profesion AS b ON id_area_aspi = b.id ".
                 "WHERE a.id_area = '".$mResoult["id_area"]."' ".
                 "GROUP BY a.id_area_aspi ".
                 "LIMIT 0, 5 ";

    $mResRela = DbHandler::GetAll( $mSqlRela );
    /* */
    $mHtml = '<table width="100%" border="0" style="border: 1px solid #ddd;">
                <tr>
                  <td style="color:#4E4E4E; font-size:32px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif">'.$mResoult["txt_cargo"].'</td>
                </tr>
                <tr>
                  <td style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif">'.$mResoult["txt_nom_comercial"].'</td>
                </tr>
                <tr>
                  <td>
                    <table width="100%" border="0">
                      <tr>
                        <td width="25%" align="center" valign="top">
                          <img src="'.FILES_DIR.'empresas/emp_'.$mResoult["fil_logo"].'" width="150" height="150" style="border: 4px solid #ddd; border-radius: 5px;"/>
                        </td>
                        <td width="75%" valign="top" style="color:#4E4E4E; font-family:Verdana, Geneva, sans-serif; font-size: 14px;">
                          <div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif">Descripción de la Oferta</div>
                          <div>'.$mResoult["txt_descripcion"].'</div>
                          <div><span style="color: #F55E2D;">Fecha de publicación: </span>'.date( "d/m/Y", strtotime( $mResoult["fec_creasi"] ) ).'</div>
                          <div><span style="color: #F55E2D;">Departamento: </span>'.$mResoult["dep_ofe"].'</div>
                          <div><span style="color: #F55E2D;">Ciudad / Municipio: </span>'.$mResoult["ciu_ofe"].'</div>
                          <div><span style="color: #F55E2D;">Sector: </span>'.$mResoult["nom_sector"].'</div>
                          <div><span style="color: #F55E2D;">Área: </span>'.$mResoult["nom_area"].'</div>
                          <div><span style="color: #F55E2D;">Jerarquía: </span>'.$mResoult["nom_jerarquia"].'</div>
                          <div><span style="color: #F55E2D;">Salario: </span>'.$mResoult["salario"].'</div>
                          <div><span style="color: #F55E2D;">Vacantes: </span>'.$mResoult["num_vacantes"].'</div>
                          <div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>
                          <div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"> Requisitos</div>
                          <div>'.$mResoult["txt_requisitos"].'</div>
                          <div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>
                          <div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"> Información general del aspirante</div>
                          <div><span style="color: #F55E2D;">Nivel de estudios: </span>'.$mResoult["nom_nivel_estudio"].'</div>
                          <div><span style="color: #F55E2D;">Departamento de residencia del aspirante: </span> '.$mResoult["dep_aspi"].'</div>
                          <div><span style="color: #F55E2D;">Ciudad / Municipio del aspirante: </span> '.$mResoult["ciu_aspi"].'</div>
                          <div><span style="color: #F55E2D;">Edad: </span> '.$mResoult["num_edad_aspi"].'</div>
                          <div><span style="color: #F55E2D;">Área: </span> '.$mResoult["nom_area_aspi"].'</div>
                          <div><span style="color: #F55E2D;">Experiencia laboral:</span> '.$mResoult["num_exp_aspi"].'</div>
                          <div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>
                          <div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"> Cargos equivalentes</div>
                          <div>';

    for( $i = 0, $tot = count( $mResRela ); $i < $tot; $i++ )
    {
      $mHtml .= $mResRela[$i]["txt_nombre"];
      $mHtml .= ($i+1) < $tot ? ", " : "";
    }

    $mHtml .=            '</div>  
                          <div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>';
/* */
//<img src="'.$mSiteUrl.'/cms/files/empresas/emp_'.$mResoult["fil_logo"].'" width="150" height="150" />
/* *
    $mHtml = '<table>
                <tr>
                  <td>'.$mResoult["txt_cargo"].'</td>
                </tr>
                <tr>
                  <td>'.$mResoult["txt_nom_comercial"].'</td>
                </tr>
                <tr>
                  <td>
                    <table>
                      <tr>
                        <td>
                        </td>
                        <td>
                          <div>Descripcion de la Oferta</div>
                          <p>'.$mResoult["txt_descripcion"].'</p>
                          <p><span>Fecha de publicacion </span>'.date( "d/m/Y", strtotime( $mResoult["fec_creasi"] ) ).'</p>
                          <p><span>Departamento </span>'.$mResoult["dep_ofe"].'</p>
                          <p><span>Ciudad  Municipio </span>'.$mResoult["ciu_ofe"].'</p>
                          <p><span>Sector </span>'.$mResoult["nom_sector"].'</p>
                          <p><span>Area </span>'.$mResoult["nom_area"].'</p>
                          <p><span>Jerarquia </span>'.$mResoult["nom_jerarquia"].'</p>
                          <p><span>Salario </span>'.$mResoult["salario"].'</p>
                          <p><span>Vacantes </span>'.$mResoult["num_vacantes"].'</p>
                          <div></div>
                          <div> Requisitos</div>
                          <p>'.$mResoult["txt_requisitos"].'</p>
                          <div></div>
                          <div> Informacion general del aspirante</div>
                          <p><span>Nivel de estudios: </span>'.$mResoult["nom_nivel_estudio"].'</p>
                          <p><span>Departamento de residencia del aspirante: </span> '.$mResoult["dep_aspi"].'</p>
                          <p><span>Ciudad  Municipio del aspirante: </span> '.$mResoult["ciu_aspi"].'</p>
                          <p><span>Edad </span> '.$mResoult["num_edad_aspi"].'</p>
                          <p><span>Area </span> '.$mResoult["nom_area_aspi"].'</p>
                          <p><span>Experiencia laboral:</span> '.$mResoult["num_exp_aspi"].'</p>
                          <div></div>
                          <div> Cargos equivalentes</div>
                          <p>';

    for( $i = 0, $tot = count( $mResRela ); $i < $tot; $i++ )
    {
      $mHtml .= $mResRela[$i]["txt_nombre"];
      $mHtml .= ($i+1) < $tot ? ", " : "";
    }

    $mHtml .=            '</p>  
                          <div></div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>';
/* */
//$mHtml = "<table border='1'><tr><td>hola diego</td></tr></table>";
    $pdf = new MakePdf( array( "paper" => "legal", "orientation" => "landscape" ) );
    $pdf->setBody( $mHtml );
    $pdf->writePdf( "oferta_".$mId.".pdf", array( "disk" => "ofertas/" ) );

    return "oferta_".$mId.".pdf";
  }
}

?>
