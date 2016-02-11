<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of zona_empresa
 *
 * @author carlos
 */
class zonaEmpresa
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;
  public $cTitulo       = NULL;
  public $cInfEmp       = NULL;
  public $cRegist       = NULL;

  // Class constructor
  public function __construct()
  {
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mVolver  = $this->mSiteUrl;
    $this -> cRegist  = Link::ToSection( array( "s" => "resgistro_empresa" ) );
    $this -> cRegofe  = Link::ToSection( array( "s" => "registro_oferta" ) );
    $this -> cBusPer  = Link::ToSection( array( "s" => "buscador_personas" ) );
  }

  public function init()
  {
    if( isset( $_SESSION["user"] ) )
    {
      if( $_SESSION["user"]["id_tipo"] == '1' )
      {
        $this->cInfEmp = $_SESSION["user"]["info"];

        $mSqlArea = "SELECT a.id, a.txt_nombre ".
                      "FROM zona_area_laboral AS a ".
                     "WHERE a.ind_estado = '1' ".
                     "ORDER BY a.txt_nombre ASC ";

        $this->cAreas = DbHandler::GetAll( $mSqlArea );
        $mProfe = new Dbzona_profesion();

        for( $i=0, $tot=count( $this->cAreas ); $i<$tot; $i++ )
        {
          $this->cAreas[$i]["profe"] = $mProfe->getList( array( "id_area" => $this -> cAreas[$i]["id"], "ind_estado" => "1" ) );
        }

        $mDepart = new Dbcms_departamentos();
        $mDepart = $mDepart -> getByPk( $this -> cInfEmp["id_departamento"] );
        $this -> cInfEmp["nom_depart"] = $mDepart["txt_nombre"];

        $mCiudad = new Dbcms_ciudades();
        $mCiudad = $mCiudad -> getByPk( $this -> cInfEmp["id_ciudad"] );
        $this -> cInfEmp["nom_ciudad"] = $mCiudad["txt_nombre"];

        $mRamo = new Dbzona_area_laboral();
        $mRamo = $mRamo -> getByPk( $this -> cInfEmp["id_ramo"] );
        $this -> cInfEmp["nom_ramo"] = $mRamo["txt_nombre"];
        unset( $mCiudad, $mDepart, $mRamo );

        $mTitle = explode( " ", $this -> cInfEmp["txt_nom_comercial"] );
        $this -> cInfEmp["titulo"] = "";

        for( $i = 0, $mTot = count( $mTitle ); $i < $mTot; $i++  )
        {
          if( ($i+1) == $mTot )
            $this -> cInfEmp["titulo"] .= "<span>".$mTitle[$i]."</span> ";
          else
            $this -> cInfEmp["titulo"] .= $mTitle[$i]." ";
        }

        $mSql = "SELECT id, fec_creasi, txt_cargo, ind_visible, ".
                       "id_nivel_estudio, id_area, id_sector, num_edad_aspi ".
                  "FROM zona_ofertas ".
                 "WHERE id_empresa = '".$this -> cInfEmp["id"]."' ".
                   "AND ind_estado = '1' ".
                 "LIMIT 0, 20 ";

        $this -> cOfertas = DbHandler::GetAll( $mSql );
        $this -> cNumOfertas = count( $this -> cOfertas );

        $this -> cCatego = "";
				
				$x = 0;
				foreach($this->cOfertas as $oferta) {
					$mIdOferta = $oferta['id'];

					$mSql = "SELECT b.id, b.txt_prim_nom, b.txt_seg_nom, b.txt_prim_apell, b.txt_seg_apell ".
									"FROM zona_oferta_postulado AS a ".
									"LEFT JOIN zona_personas AS b ON a.id_persona = b.id AND b.id_departamento='25' AND b.id_ciudad='25473000' ".
									"AND ((SELECT zp.id_nivel_estudio FROM zona_personas_eduformal AS zp WHERE b.id=zp.id_persona)>='".$oferta['id_nivel_estudio']."' OR ".
									"(YEAR(CURDATE()) - YEAR(b.fec_nacimiento))>='".$oferta['num_edad_aspi']."') ".
									"WHERE a.id_oferta = '".$mIdOferta."' ".
									"GROUP BY b.id";
					
					$mResoults = DbHandler::GetAll( $mSql );
					
					$mHtml = '<h3 class="tit_emergente">Lista de postulados</h3>';
					$mHtml .= '<ul class="lista_postulados">';
					$mHtml2 = "";
					foreach( $mResoults as $item ) {
						if(!is_null($item['id'])) {
						$mHtml2 .= '<li>'.
											'<a href="'.Link::ToSection( array( "s" => "detalle_persona" ) ).'&id='.base64_encode( $item["id"] ).'" target="_blank">'.$item["txt_prim_nom"].' '.$item["txt_seg_nom"].' '.$item["txt_prim_apell"].' '.$item["txt_seg_apell"].'</a>'.
											'</li>';
						}
					}
					$mHtml .= $mHtml2;
					$mHtml .= '</ul>';
					$this->cOfertas[$x]['postulados'] = $mHtml;
					$x++;
				}

        for( $j = 14; $j >= 0; $j-- )
        {
          $this -> cCatego .= "'".date( "m-d", strtotime( "-".$j." days" ) )."'";
          $this -> cCatego .= ($j-1) >= 0 ? ", " : "";
        }

        for( $i = 0; $i < $this -> cNumOfertas; $i++ )
        {
          $this -> cOfertas[$i]["datos"] = "";

          for( $j = 14; $j >= 0; $j-- )
          {
            $mSqlSum = "SELECT COUNT( id ) AS num ".
                         "FROM zona_oferta_postulado ".
                        "WHERE id_oferta = '".$this -> cOfertas[$i]["id"]."' ".
                          "AND fec_creasi BETWEEN '".date( "Y-m-d 00:00:00", strtotime( "-".$j." days" ) )."' AND '".date( "Y-m-d 23:59:59", strtotime( "-".$j." days" ) )."' ";

            $this -> cOfertas[$i]["datos"] .= DbHandler::GetOne( $mSqlSum );
            $this -> cOfertas[$i]["datos"] .= ($j-1) >= 0 ? ", " : "";
          }
        }

        $mItera = $mRecome  = 0;
        $mLimit = 5;

        $this -> cRecome = array();
        $stop = true;

        do
        {
          $mPos = abs( rand( 0, 19 ) );

          $mLimit = abs($mLimit-$mRecome);

          $mSql = "SELECT CONCAT( a.txt_prim_nom, ' ', a.txt_seg_nom, ' ', a.txt_prim_apell ) AS nom_aspirante, ".
                         "CONCAT( SUBSTRING( b.txt_perfil, 1, 250 ), '...' ) AS perfil, ".
                         "a.txt_telefono, a.txt_movil, c.txt_email, h.txt_nombre AS nom_profesion, ".
                         "CONCAT( d.txt_nombre, ' - ', e.txt_nombre ) AS lugar, c.fil_image, a.id ".
                    "FROM zona_personas AS a LEFT JOIN zona_personas_perfil AS b ON a.id = b.id_persona ".
                                            "LEFT JOIN zona_registrados AS c ON a.id_registrado = c.id ".
                                            "LEFT JOIN cms_departamentos AS d ON a.id_departamento = d.id ".
                                            "LEFT JOIN cms_ciudades AS e ON a.id_ciudad = e.id ".
                                            "LEFT JOIN zona_personas_eduformal AS f ON a.id = f.id_persona ".
                                            "LEFT JOIN zona_personas_experiencia AS g ON a.id = g.id_persona ".
                                            "LEFT JOIN zona_profesion AS h ON b.id_profesion = h.id ".
                   "WHERE b.id_profesion = '".$this -> cOfertas[$mPos]["id_sector"]."' ".
                     "AND f.id_nivel_estudio = '".$this -> cOfertas[$mPos]["id_nivel_estudio"]."' ".
                     "AND g.id_arealab = '".$this -> cOfertas[$mPos]["id_area"]."' ".
                     "AND c.ind_privaci = '1' ".
                   "LIMIT 0, ".$mLimit." ";

          $mResult = DbHandler::GetAll( $mSql );

          foreach( $mResult as $item )
          {
            $this -> cRecome[] = $item;
          }

          $mRecome = count( $this -> cRecome );

          if( (int)$mRecome == 5 )
            $stop = false;

          if( $stop == true )
          {
            if( $mItera == 20 )
              $stop = false;
          }

          $mItera++;
        }while( $stop );

        for( $i = 0, $mtot = count( $this -> cRecome ); $i < $mtot; $i++ )
        {
          $this->cRecome[$i]["link"] = Link::ToSection( array( "s" => "detalle_persona" ) )."&id=".base64_encode( $this->cRecome[$i]["id"] );
        }
        /* */

      }
      else
        header( "location:".$this -> mSiteUrl );
    }
    else
      header( "location:".$this->mSiteUrl );
  }
}

?>