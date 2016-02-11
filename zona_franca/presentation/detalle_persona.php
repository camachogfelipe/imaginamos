<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of detalle_persona
 *
 * @author carlos
 */
class detallePersona
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
      if( $_SESSION["user"]["id_tipo"] == '1' )
      {
        $mIdPersona = base64_decode( GetData( "id" ) );
        
        $mVisita = new Dbzona_persona_vistas();
        $mVisita -> setid_empresa( $_SESSION["user"]["info"]["id"] );
        $mVisita -> setid_persona( $mIdPersona );
        $mVisita -> setfec_creasi( date( "Y-m-d h:i:s" ) );
        $mVisita -> save();
        
        $mSql = "SELECT CONCAT( a.txt_prim_nom, ' ', a.txt_seg_nom, ' ', a.txt_prim_apell ) AS nom_aspirante, ".
                       "CONCAT( SUBSTRING( b.txt_perfil, 1, 250 ), '...' ) AS perfil, ".
                       "a.txt_telefono, a.txt_movil, c.txt_email, h.txt_nombre AS nom_profesion, ".
                       "CONCAT( d.txt_nombre, ' - ', e.txt_nombre ) AS lugar, c.ind_privaci, c.fil_image ".
                  "FROM zona_personas AS a LEFT JOIN zona_personas_perfil AS b ON a.id = b.id_persona ".
                                          "LEFT JOIN zona_registrados AS c ON a.id_registrado = c.id ".
                                          "LEFT JOIN cms_departamentos AS d ON a.id_departamento = d.id ".
                                          "LEFT JOIN cms_ciudades AS e ON a.id_ciudad = e.id ".
                                          "LEFT JOIN zona_personas_eduformal AS f ON a.id = f.id_persona ".
                                          "LEFT JOIN zona_personas_experiencia AS g ON a.id = g.id_persona ".
                                          "LEFT JOIN zona_profesion AS h ON b.id_profesion = h.id ".
                 "WHERE a.ind_estado = '1' ".
                   "AND a.id = '".$mIdPersona."' ".
                 "LIMIT 0, 1";

        $this -> cInfoPer  = DbHandler::GetRow( $mSql );

        $mSqlHv = "SELECT a.fec_nacimiento, c.txt_nombre AS nom_estado_civ, a.txt_telefono,  ".
                         "a.txt_movil, d.txt_nombre AS nom_ciudad, b.txt_perfil, b.txt_habilidades ".
                    "FROM zona_personas AS a LEFT JOIN zona_personas_perfil AS b ON a.id = b.id_persona ".
                                            "LEFT JOIN zona_estados_civil AS c ON a.id_estado_civ = c.id ".
                                            "LEFT JOIN cms_ciudades AS d ON a.id_ciudad = d.id ".
                   "WHERE a.id = '".$mIdPersona."' ";

        $this -> cPerHv = DbHandler::GetRow( $mSqlHv );

        //estudios formales
        $mSqlHv = "SELECT a.txt_titulo, a.txt_institucion, a.fec_finaliza, a.fec_ingreso, a.ind_encurso ".
                    "FROM zona_personas_eduformal AS a ".
                   "WHERE a.id_persona = '".$mIdPersona."' ";


        $this -> cPerHv["estudios"] = DbHandler::GetAll( $mSqlHv );

        $mSqlHv = "SELECT b.txt_titulo, b.txt_institucion, b.fec_finaliza ".
                    "FROM zona_personas_edunoformal AS b ".
                   "WHERE b.id_persona = '".$mIdPersona."' ";
        
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
                   "WHERE a.id_persona = '".$mIdPersona."' ";


        $this -> cPerHv["idiomas"] = DbHandler::GetAll( $mSqlHv );
        
        //Informatica
        $mSqlHv = "SELECT a.txt_aplicacion, b.txt_nombre ".
                    "FROM zona_personas_informatica AS a LEFT JOIN zona_informa_dominio AS b ON a.id_dominio = b.id ".
                   "WHERE a.id_persona = '".$mIdPersona."' ";


        $this -> cPerHv["informa"] = DbHandler::GetAll( $mSqlHv );
        
        
        //experiencia
        $mSqlHv = "SELECT a.txt_cargo, a.txt_empresa, a.fec_ingreso, ".
                         "a.fec_finaliza, a.txt_funciones ".
                    "FROM zona_personas_experiencia AS a ".
                   "WHERE a.id_persona = '".$mIdPersona."' ";

        $this -> cPerHv["exper"] = DbHandler::GetAll( $mSqlHv );

      }
      else
        header( "location:".$this->mSiteUrl );
    }
    else
      $this -> cInfoPer["id_encrypt"]  = GetData( "id" );
      //header( "location: http://www.empleoenmarcha.com/index.php?seccion=home&login=1" );
  }
}

?>
