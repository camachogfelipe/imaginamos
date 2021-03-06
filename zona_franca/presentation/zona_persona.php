<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of zona_persona
 *
 * @author carlos
 */
class zonaPersona
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
    $this -> cRegist  = Link::ToSection( array( "s" => "registro_persona" ) );
    $this -> cRegofe  = Link::ToSection( array( "s" => "registro_oferta" ) );
    $this -> cBusPer  = Link::ToSection( array( "s" => "buscador_personas" ) );
  }

  public function init()
  {
    if( isset( $_SESSION["user"] ) )
    {
      if( $_SESSION["user"]["id_tipo"] == '2' )
      {
        if( isset( $_POST["modo"] ) )
        {
          $mTxtPasswd = GetData( "txt_passwd" );
          $mIndPrivaci = GetData( "ind_privaci" );

          $retorno = ClassFile::UploadImagenFile( "fil_image", FILES_DIR."personas", "perso_".$_SESSION["user"]["id"], "thum_".$_SESSION["user"]["id"], 330, 200 );

          $mRegistro = new Dbzona_registrados();

          $mRegistro -> getByPk( $_SESSION["user"]["id"] );
          $mRegistro -> setind_privaci( $mIndPrivaci );

          if( NULL !== $mTxtPasswd && "" != $mTxtPasswd )
          {
            $mRegistro -> settxt_passwd( sha1( $mTxtPasswd  ) );
          }

          if ( $retorno["Status"]=="Uploader" )
          {
            $mRegistro -> setfil_image( $_SESSION["user"]["id"].$retorno["Ext"] );
          }

          $mRegistro -> save();
        }

        $mSql = "SELECT CONCAT( a.txt_prim_nom, ' ', a.txt_seg_nom, ' ', a.txt_prim_apell ) AS nom_aspirante, ".
                       "CONCAT( SUBSTRING( b.txt_perfil, 1, 250 ), '...' ) AS perfil, ".
                       "a.txt_telefono, a.txt_movil, c.txt_email, h.txt_nombre AS nom_profesion, ".
                       "CONCAT( d.txt_nombre, ' - ', e.txt_nombre ) AS lugar, c.ind_privaci, c.fil_image, ".
                       "a.id, a.id_registrado, i.txt_nombre AS nom_area ".
                  "FROM zona_personas AS a LEFT JOIN zona_personas_perfil AS b ON a.id = b.id_persona ".
                                          "LEFT JOIN zona_registrados AS c ON a.id_registrado = c.id ".
                                          "LEFT JOIN cms_departamentos AS d ON a.id_departamento = d.id ".
                                          "LEFT JOIN cms_ciudades AS e ON a.id_ciudad = e.id ".
                                          "LEFT JOIN zona_personas_eduformal AS f ON a.id = f.id_persona ".
                                          "LEFT JOIN zona_personas_experiencia AS g ON a.id = g.id_persona ".
                                          "LEFT JOIN zona_profesion AS h ON b.id_profesion = h.id ".
                                          "LEFT JOIN zona_area_laboral AS i ON h.id_area = i.id ".
                 "WHERE a.ind_estado = '1' ".
                   "AND a.id = '".$_SESSION["user"]["info"]["id"]."' ".
                 "LIMIT 0, 1";

        $this -> cInfoPer  = DbHandler::GetRow( $mSql );

        $mSql = "SELECT a.id, a.txt_cargo, b.fil_logo, b.txt_nom_comercial, ".
                       "CONCAT( SUBSTRING( a.txt_descripcion, 1, 250 ), '...' ) AS descripcion, ".
                       "c.txt_nombre AS nom_area, d.txt_nombre AS nom_departamento ".
                  "FROM zona_ofertas AS a LEFT JOIN zona_empresas AS b ON a.id_empresa = b.id ".
                                         "LEFT JOIN zona_area_laboral AS c ON a.id_area = c.id ".
                                         "LEFT JOIN cms_departamentos AS d ON a.id_departamento = d.id ".
                                         "LEFT JOIN zona_personas_perfil AS e ON a.id_sector = e.id_profesion ".
                                         "LEFT JOIN zona_personas_eduformal AS f ON a.id_nivel_estudio = f.id_nivel_estudio ".
                                                                               "AND e.id_persona = f.id_persona ".
                                         "LEFT JOIN zona_personas_experiencia AS g ON a.id_area = g.id_arealab ".
                                                                                 "AND e.id_persona = g.id_persona ".
                 "WHERE a.ind_visible = '1' ".
                   "AND a.ind_estado = '1' ".
                   "AND e.id_persona = '".$_SESSION["user"]["info"]["id"]."' ".
                   "AND a.id NOT IN ( SELECT id_oferta ".
                                       "FROM zona_oferta_postulado ".
                                      "WHERE id_persona = '".$_SESSION["user"]["info"]["id"]."' ) ";

        $this -> cOfert = DbHandler::GetAll( $mSql );

        $mSqlHv = "SELECT a.fec_nacimiento, c.txt_nombre AS nom_estado_civ, a.txt_telefono,  ".
                         "a.txt_movil, d.txt_nombre AS nom_ciudad, b.txt_perfil, b.txt_habilidades ".
                    "FROM zona_personas AS a LEFT JOIN zona_personas_perfil AS b ON a.id = b.id_persona ".
                                            "LEFT JOIN zona_estados_civil AS c ON a.id_estado_civ = c.id ".
                                            "LEFT JOIN cms_ciudades AS d ON a.id_ciudad = d.id ".
                   "WHERE a.id = '".$_SESSION["user"]["info"]["id"]."' ";

        $this -> cPerHv = DbHandler::GetRow( $mSqlHv );

        //estudios formales
        $mSqlHv = "SELECT a.txt_titulo, a.txt_institucion, a.fec_finaliza ".
                    "FROM zona_personas_eduformal AS a ".
                   "WHERE a.id_persona = '".$_SESSION["user"]["info"]["id"]."' ";


        $this -> cPerHv["estudios"] = DbHandler::GetAll( $mSqlHv );

        $mSqlHv = "SELECT b.txt_titulo, b.txt_institucion, b.fec_finaliza ".
                    "FROM zona_personas_edunoformal AS b ".
                   "WHERE b.id_persona = '".$_SESSION["user"]["info"]["id"]."' ";
        
        $mNoformal = DbHandler::GetAll( $mSqlHv );
        
        foreach( $mNoformal as $item )
        {
          $this -> cPerHv["estudios"][] = $item;
        }
        
        //Idiomas
        $mSqlHv = "SELECT b.txt_nombre, c.txt_nombre AS habla, ".
                         "d.txt_nombre AS escri, e.txt_nombre AS lectur ".
                    "FROM zona_personas_idiomas AS a LEFT JOIN zona_idiomas AS b ON a.id_idioma = b.id ".
                                                    "LEFT JOIN zona_idioma_dominio AS c ON a.id_habla = c.id ".
                                                    "LEFT JOIN zona_idioma_dominio AS d ON a.id_escritura = d.id ".
                                                    "LEFT JOIN zona_idioma_dominio AS e ON a.id_lectura = e.id ".
                   "WHERE a.id_persona = '".$_SESSION["user"]["info"]["id"]."' ";


        $this -> cPerHv["idiomas"] = DbHandler::GetAll( $mSqlHv );
        
        //Informatica
        $mSqlHv = "SELECT a.txt_aplicacion, b.txt_nombre ".
                    "FROM zona_personas_informatica AS a LEFT JOIN zona_informa_dominio AS b ON a.id_dominio = b.id ".
                   "WHERE a.id_persona = '".$_SESSION["user"]["info"]["id"]."' ";


        $this -> cPerHv["informa"] = DbHandler::GetAll( $mSqlHv );

        //experiencia
        $mSqlHv = "SELECT a.txt_cargo, a.txt_empresa, a.fec_ingreso, ".
                         "a.fec_finaliza, a.txt_funciones ".
                    "FROM zona_personas_experiencia AS a ".
                   "WHERE a.id_persona = '".$_SESSION["user"]["info"]["id"]."' ";

        $this -> cPerHv["exper"] = DbHandler::GetAll( $mSqlHv );

        $mSqlOferApl = "SELECT b.id, b.txt_cargo, c.fil_logo, c.txt_nom_comercial, ".
                              "CONCAT( SUBSTRING( b.txt_descripcion, 1, 250 ), '...' ) AS descripcion, ".
                              "d.txt_nombre AS nom_area, e.txt_nombre AS nom_departamento, ".
                              "IF( b.ind_estado = '0', 'disabled', '' ) AS estado ".
                         "FROM zona_oferta_postulado AS a LEFT JOIN zona_ofertas AS b ON a.id_oferta = b.id ".
                                                         "LEFT JOIN zona_empresas AS c ON b.id_empresa = c.id ".
                                                         "LEFT JOIN zona_area_laboral AS d ON b.id_area = d.id ".
                                                         "LEFT JOIN cms_departamentos AS e ON b.id_departamento = e.id ".
                        "WHERE a.id_persona = '".$_SESSION["user"]["info"]["id"]."' ".
                        "ORDER BY a.fec_creasi DESC ";

        $this -> cOferApl = DbHandler::GetAll( $mSqlOferApl );

        $this -> cCatego = "";

        for( $j = 14; $j >= 0; $j-- )
        {
          $this -> cCatego .= "'".date( "Y-m-d", strtotime( "-".$j." days" ) )."'";
          $this -> cCatego .= ($j-1) >= 0 ? ", " : "";

          $mQuery = "SELECT COUNT( id ) AS total ".
                      "FROM zona_oferta_postulado ".
                     "WHERE id_persona = '".$_SESSION["user"]["info"]["id"]."' ".
                       "AND fec_creasi BETWEEN '".date( "Y-m-d 00:00:00", strtotime( "-".$j." days" ) )."' AND '".date( "Y-m-d 23:59:59", strtotime( "-".$j." days" ) )."' ";

          $this -> mResList .= (int)DbHandler::GetOne( $mQuery );
          $this -> mResList .= ($i+1) == $tot ? "" : ",";
        }
        
        $this -> cCatego2 = "";

        for( $j = 14; $j >= 0; $j-- )
        {
          $this -> cCatego2 .= "'".date( "Y-m-d", strtotime( "-".$j." days" ) )."'";
          $this -> cCatego2 .= ($j-1) >= 0 ? ", " : "";

          $mQuery = "SELECT COUNT( id ) AS total ".
                      "FROM zona_persona_vistas ".
                     "WHERE id_persona = '".$_SESSION["user"]["info"]["id"]."' ".
                       "AND fec_creasi BETWEEN '".date( "Y-m-d 00:00:00", strtotime( "-".$j." days" ) )."' AND '".date( "Y-m-d 23:59:59", strtotime( "-".$j." days" ) )."' ";

          $this -> mResList2 .= (int)DbHandler::GetOne( $mQuery );
          $this -> mResList2 .= ($i+1) == $tot ? "" : ",";
        }

      }
      else
        header( "location:".$this -> mSiteUrl );
    }
    else
      header( "location:".$this->mSiteUrl );
  }
}

?>
