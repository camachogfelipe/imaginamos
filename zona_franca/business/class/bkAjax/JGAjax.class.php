<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ajax
 *
 * @author carlos
 */
class Ajax 
{
  /*
   * Metodo Publico para Inicializar las variables necesarias de la clase
   * @fn __construct
   * @brief Inicializa variables necesarias de la clase
   */
  public function __construct($mSecurity = NULL)
  {

  }

  /*
   * Funcion por defecto
   * @fn FunctDefault
   * @brief Funcion por defecto
   */
  public function FunctDefault()
  {
    echo json_encode(array("title" => "Error", "message" => "Funcion por defecto en el ajax"));
  }

  public function FunctRecargarCiudades()
  {
    $mIdDepartamento = (int)GetData( "valor", 0 );

    $mArticulos = new Dbcms_ciudades();
    $mData = $mArticulos -> getList( array( "id_departamento" => $mIdDepartamento, "where" => " ORDER BY txt_nombre ASC" ) );

    for($i = 0, $mTot = count( $mData ); $i < $mTot; $i++ )
    {
      $mData[$i]["txt_nombre"] = utf8_encode( $mData[$i]["txt_nombre"] );
    }

    $datos = json_encode( array( "count" => count( $mData ), "datos" => $mData ) );
    echo  $datos;
  }

  public function FunctRecargarProfesion()
  {
    $mIdArea = (int)GetData( "valor", 0 );

    $mProfesion = new Dbzona_profesion();
    $mData = $mProfesion -> getList( array( "id_area" => $mIdArea, "ind_estado" => "1" ) );

    for($i = 0, $mTot = count( $mData ); $i < $mTot; $i++ )
    {
      $mData[$i]["txt_nombre"] = utf8_encode( $mData[$i]["txt_nombre"] );
    }

    $datos = json_encode( array( "count" => count( $mData ), "datos" => $mData ) );
    echo  $datos;
  }

  public function FunctAddExperiencia()
  {
    $mNext = GetData( "next", 0 );
    $mNext++;

    $mArealab = new Dbzona_area_laboral();
    $mArealab = $mArealab -> getList( array( "ind_estado" => "1" ) );

    $mDeparta = new Dbcms_departamentos();
    $mDeparta = $mDeparta -> getList();

    $mHtml = '<div id="expe_opc_'.$mNext.'" class="contenedor_mas">
                <a href="javascript:void(0);" class="eliminar_obj" onclick="eliminarObjetoRecursivoDOM(\'#expe_opc_'.$mNext.'\');">Eliminar</a>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Empresa</label>
                </div>
                <div class="span5">
                  <input type="text" name="lab_txt_empresa[]" id="lab_txt_empresa" placeholder="Empresa" value="">
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Cargo</label>
                </div>
                <div class="span5">
                  <input type="text" name="lab_txt_cargo[]" id="lab_txt_cargo" placeholder="Cargo" value="">
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                
                <div class="span7">
                  <label>Sector <span>(*)</span></label>
                </div>
                <div class="span5">
                  <select class="selectdd requerido4 validate[required]" style="width:100% ;" title="Seleccione el sector laboral" onchange="RecargarProfesion2(\'.lab_id_arealab_'.$mNext.'\', this.value);">
                    <option value="">Seleccione</option>';
    for($i=0,$tot=count($mArealab);$i<$tot;$i++){
      $mHtml .= '   <option value="'.$mArealab[$i]["id"].'">'.$mArealab[$i]["txt_nombre"].'</option>';
    }
      $mHtml .= '
                  </select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>&Aacute;rea<span> (*)</span></label>
                </div>
                <div class="span5">
                  <select class="lab_id_arealab_'.$mNext.' selectdd requerido4 validate[required]" name="lab_id_arealab[]" id="lab_id_arealab" style="width:100% ;" title="Seleccione el &Aacute;rea laboral">
                    <option value="">Seleccione</option>
                  </select>
                </div>

                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Fecha de ingreso</label>
                </div>
                <div class="span5">
                  <input type="text" class="datepicker" name="lab_fec_ingreso[]" id="lab_fec_ingreso_'.$mNext.'" placeholder="Fecha de ingreso" value="">
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label for="option3" class="lblr">Trabajo ah&iacute; actualmente<span> (*)</label>
                </div>
                <div class="span5 col-forms">
                  <p>
                    <input type="radio" name="lab_ind_actual[]" value="si" id="optiona_'.$mNext.'" onclick="hideFinaliza( \'lab_fecfin_'.$mNext.'\' );">
                    <label for="optiona_'.$mNext.'" class="lblr">Si</label>
                  </p>
                  <p>
                    <input type="radio" name="lab_ind_actual[]" value="option1" id="optionb_'.$mNext.'" onclick="showFinaliza( \'lab_fecfin_'.$mNext.'\' );">
                    <label for="optionb_'.$mNext.'" class="lblr">No</label>
                  </p>
                </div>
                <div id="lab_fecfin_'.$mNext.'" style="display: none;">
                  <div class="clear espacio_en_blancopeque"></div>
                  <div class="span7">
                    <label>Fecha de Finalizaci&oacute;n</label>
                  </div>
                  <div class="span5">
                    <input type="text" class="datepicker" name="lab_fec_finaliza[]" id="lab_fec_finaliza_'.$mNext.'" placeholder="Fecha de Finalizaci&oacute;n" value="">
                  </div>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Departamento </label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="lab_id_departamento[]" id="lab_id_departamento" style="width:100% ;" onchange="RecargarCiudades( \'lab_id_ciudad_'.$mNext.'\', this );" >
                    <option value="">Seleccione</option>';

    foreach( $mDeparta as $item )
    {
      $mHtml .=    '<option value="'.$item["id"].'">'.utf8_encode( $item["txt_nombre"] ).'</option>';
    }

		$mHtml .=    '</select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Ciudad/municipio </label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="lab_id_ciudad[]" id="lab_id_ciudad_'.$mNext.'" style="width:100% ;" >
                    <option value="">Seleccione</option>
                  </select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Tel&eacute;fono</label>
                </div>
                <div class="span5">
                  <input type="text" name="lab_txt_telefono[]" id="lab_txt_telefono" placeholder="Tel&eacute;fono" value="">
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span12 relativo"><a href="#oferta-detalle2" class="bt_ayudaform popup"></a>
                  <label>Funciones y Logros (M&aacute;ximo 500 caracteres)</label>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span12">
                  <textarea name="lab_txt_funciones[]" id="lab_txt_funciones" ></textarea>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
              </div>
              <hr>
              <script>
                reloadUI();
              </script>';

    echo json_encode( array( "html" => utf8_encode( $mHtml ) ) );
  }

  public function FunctAddEduformal()
  {
    $mNext = GetData( "next", 0 );
    $mNext++;

    $mNivEst = new Dbzona_nivel_estudio();
    $mNivEst = $mNivEst -> getList( array( "ind_estado" => "1" ) );

    $mDeparta = new Dbcms_departamentos();
    $mDeparta = $mDeparta -> getList();

    $mHtml = '<div id="edf_opc_'.$mNext.'" class="contenedor_mas">
                <a href="javascript:void(0);" class="eliminar_obj" onclick="eliminarObjetoRecursivoDOM(\'#edf_opc_'.$mNext.'\');">Eliminar</a>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Nivel de Estudio</label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="edf_id_nivel_estudio[]" id="id_nivel_estudio" style="width:100% ;" >
                    <option value="">Seleccione</option>';

    foreach( $mNivEst as $item )
    {
      $mHtml .=    '<option value="'.$item["id"].'">'.utf8_encode( $item["txt_nombre"] ).'</option>';
    }

    $mHtml .=    '</select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>T&iacute;tulo Obtenido</label>
                </div>
                <div class="span5">
                  <input type="text" name="edf_txt_titulo[]" id="edf_txt_titulo" placeholder="T&iacute;tulo Obtenido" value="">
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Instituci&oacute;n</label>
                </div>
                <div class="span5">
                  <input type="text" name="edf_txt_institucion[]" id="edf_txt_institucion" placeholder="Instituci&oacute;n" value="">
                </div>
                
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Fecha de ingreso</label>
                </div>
                <div class="span5">
                  <input type="text" class="datepicker" name="edf_fec_ingreso[]" id="edf_fec_ingreso_'.$mNext.'" placeholder="Fecha de ingreso" value="">
                </div>
                
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label for="option3" class="lblr">�Estudio en Curso? <span>(*)</label>
                </div>
                <div class="span5 col-forms">
                  <p>
                    <input type="radio" name="edf_ind_encurso[]" value="si" id="edf_optiona_'.$mNext.'" onclick="hideFinaliza( \'edf_anio_'.$mNext.'\' );">
                    <label for="edf_optiona_'.$mNext.'" class="lblr">Si</label>
                  </p>
                  <p>
                    <input type="radio" name="edf_ind_encurso[]" value="no" id="edf_optionb_'.$mNext.'" onclick="showFinaliza( \'edf_anio_'.$mNext.'\' );">
                    <label for="edf_optionb_'.$mNext.'" class="lblr">No</label>
                  </p>
                </div>

                <div id="edf_anio_'.$mNext.'" style="display: none;">
                  <div class="clear espacio_en_blancopeque"></div>
                  <div class="span7" >
                    <label>Fecha finalizaci&oacute;n</label>
                  </div>
                  <div class="span5">
                    <input type="text" class="datepicker" name="edf_fec_finaliza[]" id="edf_fec_finaliza_'.$mNext.'" placeholder="Fecha de finalizacion" value="">
                  </div>
                </div>
                
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Departamento </label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="edf_formal_id_departamento[]" id="edf_formal_id_departamento" style="width:100% ;" onchange="RecargarCiudades( \'edf_formal_id_ciudad_'.$mNext.'\', this );">
                    <option value="">Seleccione</option>';

    foreach( $mDeparta as $item )
    {
      $mHtml .=    '<option value="'.$item["id"].'">'.utf8_encode( $item["txt_nombre"] ).'</option>';
    }

    $mHtml .=    '</select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Ciudad/municipio <span>(*)</span></label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="edf_formal_id_ciudad[]" id="edf_formal_id_ciudad_'.$mNext.'" style="width:100% ;" >
                    <option value="">Seleccione</option>
                  </select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <hr>
              </div>
              <script>
                reloadUI();
              </script>';

    echo json_encode( array( "html" => utf8_encode( $mHtml ) ) );
  }

  public function FunctAddEdunoformal()
  {
    $mNext = GetData( "next", 0 );
    $mNext++;

    $mDeparta = new Dbcms_departamentos();
    $mDeparta = $mDeparta -> getList();

    $mHtml = '<div id="ednf_opc_'.$mNext.'" class="contenedor_mas">
                <a href="javascript:void(0);" class="eliminar_obj" onclick="eliminarObjetoRecursivoDOM(\'#ednf_opc_'.$mNext.'\');">Eliminar</a>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>T&iacute;tulo obtenido</label>
                </div>
                <div class="span5">
                  <input type="text" name="ednf_txt_titulo[]" id="ednf_txt_titulo" placeholder="T&iacute;tulo obtenido" value="">
                </div>

                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Instituci&oacute;n</label>
                </div>
                <div class="span5">
                  <input type="text" name="ednf_txt_institucion[]" id="ednf_txt_institucion" placeholder="Instituci&oacute;n" value="">
                </div>

                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Fecha de ingreso</label>
                </div>
                <div class="span5">
                  <input type="text" class="datepicker" name="ednf_fec_ingreso[]" id="ednf_fec_ingreso_'.$mNext.'" placeholder="Fecha de ingreso" value="">
                </div>

                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label for="option3" class="lblr">�Estudio en Curso? <span>(*)</label>
                </div>
                <div class="span5 col-forms">
                  <p>
                    <input type="radio" name="ednf_ind_encurso[]" value="1" id="ednf_optiona_'.$mNext.'" onclick="hideFinaliza( \'ednf_anio_'.$mNext.'\' );">
                    <label for="ednf_optiona_'.$mNext.'" class="lblr">Si</label>
                  </p>
                  <p>
                    <input type="radio" name="ednf_ind_encurso[]" value="0" id="ednf_optionb_'.$mNext.'" onclick="showFinaliza( \'ednf_anio_'.$mNext.'\' );">
                    <label for="ednf_optionb_'.$mNext.'" class="lblr">No</label>
                  </p>
                </div>

                <div id="ednf_anio_'.$mNext.'" style="display: none;">
                  <div class="clear espacio_en_blancopeque"></div>
                  <div class="span7">
                    <label>A&ntilde;o de Finalizaci&oacute;n</label>
                  </div>
                  <div class="span5">
                    <input type="text" class="datepicker" name="ednf_fec_finaliza[]" id="ednf_fec_finaliza'.$mNext.'" placeholder="A&ntilde;o de Finalizaci&oacute;n" value="">
                  </div>
                </div>
                
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Departamento </label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="ednf_id_departamento[]" id="ednf_id_departamento" style="width:100% ;" onchange="RecargarCiudades( \'ednf_id_ciudad_'.$mNext.'\', this );">
                    <option value="">Seleccione</option>';

    foreach( $mDeparta as $item )
    {
      $mHtml .=    '<option value="'.$item["id"].'">'.utf8_encode( $item["txt_nombre"] ).'</option>';
    }

    $mHtml .=    '</select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Ciudad/municipio </label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="ednf_id_ciudad[]" id="ednf_id_ciudad_'.$mNext.'" style="width:100% ;">
                    <option value="">Seleccione</option>
                  </select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <hr>
              </div>
              <script>
                reloadUI();
              </script>';

    echo json_encode( array( "html" => utf8_encode( $mHtml ) ) );
  }

  public function FunctAddIdioma()
  {
    $mIdioma = new Dbzona_idiomas();
    $mIdioma = $mIdioma -> getList( array( "ind_estado" => "1" ) );

    $mIdioDomi = new Dbzona_idioma_dominio();
    $mIdioDomi = $mIdioDomi -> getList( array( "ind_estado" => "1" ) );

    $randomi = rand( 0, 2000 );

    $mHtml = '<div id="idioma_'.$randomi.'" class="contenedor_mas">
                <a href="javascript:void(0);" class="eliminar_obj" onclick="eliminarObjetoRecursivoDOM(\'#idioma_'.$randomi.'\');">Eliminar</a>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Idioma</label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="id_idioma[]" id="id_idioma" style="width:100% ;" onchange="validarCual(this.value, '.$randomi.');">
                    <option value="">Seleccione</option>';

    foreach( $mIdioma as $item )
    {
      $mHtml .=    '<option value="'.$item["id"].'">'.$item["txt_nombre"].'</option>';
    }

    $mHtml .=    '  <option value="0">Otro</option>
                  </select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                
                <span id="idioma_cual_'.$randomi.'" style="display:none;">
                  <div class="span7">
                    <label>�Cu&aacute;l?</label>
                  </div>
                  <div class="span5">
                    <input type="text" name="txt_cual[]" id="txt_cual" placeholder="Cu&aacute;l" value="">
                  </div>
                  <div class="clear espacio_en_blancopeque"></div>
                </span>
                <div class="span7">
                  <h3>Dominio</h3>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label> Habla</label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="id_habla[]" id="id_habla" style="width:100% ;" >
                    <option value="">Seleccione</option>';

    foreach( $mIdioDomi as $item )
    {
      $mHtml .=    '<option value="'.$item["id"].'">'.utf8_encode( $item["txt_nombre"] ).'</option>';
    }

    $mHtml .=    '</select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Escritura</label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="id_escritura[]" id="id_escritura" style="width:100% ;" >
                    <option value="">Seleccione</option>';

    foreach( $mIdioDomi as $item )
    {
      $mHtml .=    '<option value="'.$item["id"].'">'.utf8_encode( $item["txt_nombre"] ).'</option>';
    }

    $mHtml .=    '</select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Lectura</label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="id_lectura[]" id="id_lectura" style="width:100% ;" >
                    <option value="">Seleccione</option>';

    foreach( $mIdioDomi as $item )
    {
      $mHtml .=    '<option value="'.$item["id"].'">'.utf8_encode( $item["txt_nombre"] ).'</option>';
    }

    $mHtml .=    '</select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <hr>
              </div>
              <script>
                reloadUI();
              </script>';

    echo json_encode( array( "html" => utf8_encode( $mHtml ) ) );
  }

  public function FunctAddInfor()
  {
    $mInfoDomi = new Dbzona_informa_dominio();
    $mInfoDomi = $mInfoDomi -> getList( array( "ind_estado" => "1" ) );

    $randomi = rand( 0, 2000 );

    $mHtml = '<div id="infor_'.$randomi.'">
                <a href="javascript:void(0);" class="eliminar_obj" onclick="eliminarObjetoRecursivoDOM(\'#infor_'.$randomi.'\');">Eliminar</a>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Programa o aplicaci&oacute;n</label>
                </div>
                <div class="span5">
                  <input type="text" name="inf_txt_aplicacion[]" id="inf_txt_aplicacion" placeholder="Programa o aplicaci&oacute;n" value="">
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="span7">
                  <label>Dominio</label>
                </div>
                <div class="span5">
                  <select class="selectdd" name="inf_id_dominio[]" id="inf_id_dominio" style="width:100% ;" >
                    <option value="">Seleccione</option>';

    foreach( $mInfoDomi as $item )
    {
      $mHtml .=    '<option value="'.$item["id"].'">'.utf8_encode( $item["txt_nombre"] ).'</option>';
    }

    $mHtml .=    '</select>
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <hr>
              </div>
              <script>
                reloadUI();
              </script>';

    echo json_encode( array( "html" => utf8_encode( $mHtml ) ) );
  }

  public function FunctDetalleConsejo()
  {
    $mId = GetData( "id" );

    $mSiteUrl = Link::Build("");

    $mDetalle = new Dbcms_articulos();
    $mResoult = $mDetalle ->getByPk( $mId );

    $mHtml = '<h1 class="centrar_contenido">'.$mResoult["txt_titulo"].'</h1>
    <div class="clear"></div>
    <div class="sombra_division"></div>
    <div class="row-fluid">
	    <div class="span4 noticias-detalle">
        <img src="'.$mSiteUrl.'/cms/files/articulos/art_img_'.$mResoult["fil_image"].'" alt="">
		    <div class="clear espacio_en_blanco"></div>';

    if( NULL !== $mResoult["fil_video"] && "" != $mResoult["fil_video"] )
		  $mHtml .= '<iframe width="200" height="170" src="http://www.youtube.com/embed/'.$mResoult["fil_video"].'" frameborder="0" allowfullscreen></iframe>';

    $mHtml .= '</div>
	    <div class="span8">
		    <div class="clear espacio_en_blanco"></div>
        <p>'.$mResoult["txt_titulo"].'</p>
		    <p>'.nl2br($mResoult["txt_descripcion"]).'</p>
	    </div>
    </div>';

    echo json_encode( array( "html" => utf8_encode( $mHtml ) ) );
  }

  public function FunctVotar()
  {
    $mIdPregunta = GetData( "id_pregunta" );
    $mIdOpcion = GetData( "id_opcion" );

    $mEncRespuesta = new Dbcms_encuesta_respuesta();

    $mEncRespuesta -> setind_pregunta( $mIdPregunta );
    $mEncRespuesta -> setind_opcion( $mIdOpcion );
    $mEncRespuesta -> settxt_ip( $_SERVER["REMOTE_ADDR"] );
    $mEncRespuesta -> setfec_creasi( date( "Y-m-d h:i:s" ) );
    $mEncRespuesta -> save();

    $mOpciones = new Dbcms_encuesta_opciones();
    $mOptResul = $mOpciones -> getList( array( "id_pregunta" => $mIdPregunta, "ind_estado" => "1" ) );

    $mOptList = array( );
    $mResList = array( );

    foreach( $mOptResul as $item )
    {
      $mOptList[] = utf8_encode( $item["txt_respuesta"] );

      $mQuery = "SELECT COUNT( ind_opcion ) AS total ".
                  "FROM cms_encuesta_respuesta ".
                 "WHERE ind_pregunta = '".$mIdPregunta."' ".
                   "AND ind_opcion = '".$item["id"]."' ";

      $mResList[] = (int)DbHandler::GetOne( $mQuery );
    }

    echo json_encode( array( "categories" => $mOptList, "data" => $mResList ) );
  }

  public function FunctLogin()
  {
    // Obtenemos los valores del ajax y los limpiamos
    $mTxtNickname = StripHtml( GetData( "txt_nickname", "" ) );
    $mTxtPasswd = StripHtml( GetData("txt_passwd", "" ) );

    // Validamos que los valores se encuentren llenos
    if( $mTxtNickname == "")
    {
      echo json_encode( array("title" => "Error", "message" => "Digite el nombre de usuario") );
    }
    else if ( $mTxtPasswd == "" )
    {
      echo json_encode(array("title" => "Error", "message" => "Digite la contrase�a"));
    }
    else
    {
      // Hacemos consulta a DB
      $cUsuarios = new Dbzona_registrados();
      $usuarios = $cUsuarios -> getList( array( "txt_nickname" => $mTxtNickname , "txt_passwd"=> sha1( $mTxtPasswd ) ) );

      if ( count($usuarios) == 1 )
      {
        $_SESSION["user"] = $usuarios[0];

        if( $_SESSION["user"]["id_tipo"] == '1' )
        {
          $mInfo = new Dbzona_empresas();
          $mInfo = $mInfo -> getList( array( "id_registrado" => $_SESSION["user"]["id"] ) );

          $_SESSION["user"]["info"] = $mInfo[0];

          //echo json_encode( array( "title" => "Exito", "message" => "Inicio sesion correctamente", "event" => "window.open('".Link::ToSection( array( "s" => "zona_empresa" ) )."' );" ) );
          echo json_encode( array( "event" => "window.location.href='".str_replace( "&amp;", "&", Link::ToSection( array( "s" => "zona_empresa" ) ) )."';" ) );
        }
        else
        {
          $mInfo = new Dbzona_personas();
          $mInfo = $mInfo -> getList( array( "id_registrado" => $_SESSION["user"]["id"] ) );
          //echo  Link::ToSection( array( "s" => "zona_persona" ) );
          if(count($mInfo)>0){
            $_SESSION["user"]["info"] = $mInfo[0];
          }else{
            $_SESSION["user"]["info"] = NULL;
          }
          
          //echo json_encode( array( "title" => "Exito", "message" => "Inicio sesion correctamente", "event" => "window.open('".Link::ToSection( array( "s" => "zona_persona" ) )."' );" ) );
          echo json_encode( array( "event" => utf8_encode("window.location.href='".str_replace( "&amp;", "&", Link::ToSection( array( "s" => "zona_persona" ) ) )."';" ) ) );
        }
      }
      else
      {
        unset( $_SESSION["user"] );
        echo json_encode( array( "title" => "Error", "message" => utf8_encode( "Revise correo electr�nico y/o contrase�a" ) ) );
      }
    }
  }

  public function FunctEstadoOferta()
  {
    $mId = (int)GetData( "id", 0 );
    $mIndVisible = (int)GetData( "valor", 0 );

    if( isset( $_SESSION["user"] ) )
    {
      if( 0 != $mId )
      {
        $mOferta = new Dbzona_ofertas();

        $mOfertas = $mOferta -> getList( array( "id" => $mId, "id_empresa" => $_SESSION["user"]["info"]["id"] ) );

        if( 1 == count( $mOfertas ) )
        {
          $mOferta -> getByPk( $mId );
          $mOferta -> setind_visible( $mIndVisible );
          $mOferta -> save();

          echo json_encode( array( "title" => utf8_encode( "�xito" ), "message" => utf8_encode( "Cambio de estado con �xito" ) ) );
        }
        else
          echo json_encode( array( "title" => "Error", "message" => utf8_encode( "Cambio de estado sin �xito" ) ) );
      }
      else
        echo json_encode( array( "title" => "Error", "message" => utf8_encode( "Cambio de estado sin �xito" ) ) );
    }
    else
      echo json_encode( array( "title" => "Error", "message" => utf8_encode( "Cambio de estado sin �xito" ) ) );

  }

  public function FunctSegEmpresa()
  {
    $mId = GetData( "id" );

    $mHtml = '<script type="text/javascript">
                // Pierde el foco y cambia el contenido del texto en el formulario
                $(".class_frm .field_frm").blur(function (){
                  if( trim ( $(this).attr("value") ) == 0 ){
                    $(this).attr("value", $(this).attr("title"));
                    //$(this).attr("value", "");
                  }
                });

                // Cuando llega el foco al campo de texto
                $(".class_frm .field_frm").focus(function (){
                  if( $(this).attr("value")  == $(this).attr("title") ){
                    $(this).attr("value", "");
                  }
                });

                // Valiacion del formulario y envio de parametros ajax
                $(".submit_frm").click(function (){
                  // Si tratamos con tynimce, volcamos la info al textarea
                  //if (tinyMCE) tinyMCE.triggerSave();
                  var formComplete = true;
                  var formSubmit = false;
                  var stringJSON = "";
                  var idfrm = $(this).attr("frmid");
                  $("."+idfrm+" .field_frm").each(function (index){
                    var valueTemp = $(this).attr("value")==undefined ? $(this).html() : $(this).attr("value");

                    // Validamos si es tipo radio, de ser asi lo enviamos por post si se encuentra chequeado
                    if( $(this).attr("type")=="radio" ){
                      if( $(this).is(":checked") ){
                        stringJSON += (stringJSON!="" ? ", " : "") + ($(this).attr("id")!="" ? $(this).attr("id") : \'def\') + \':"\' + escape(valueTemp) + \'"\';
                      }
                    }else if( $(this).attr("type")=="checkbox" ){
                      if( $(this).is(":checked") ){
                      stringJSON += (stringJSON!="" ? ", " : "") + $(this).attr("id")+\':\'+valueTemp;
                    }
                  }else{
                    stringJSON += (stringJSON!="" ? ", " : "") + ($(this).attr("id")!="" ? $(this).attr("id") : \'def\') + \':"\' + escape(valueTemp) + \'"\';
                  }

                  if( $(this).attr("id")=="myForm" ){
                    formSubmit = valueTemp;
                  }

                  if( $(this).attr("title") ){
                    if( valueTemp == $(this).attr("title") || valueTemp == "" ){
                      alert( "Error\n" + $(this).attr("title") );
                      if( $(this).attr("id")!="" ){
                        $("#"+$(this).attr("id")).focus();
                      }
                      formComplete = false;
                      return false;
                    }
                  }
                });

                // Si el formulario esta completo y es para hacer submit ejecutamos submit, en caso contrario si el formulario esta completo enviamos json y recibimos json ajax
                if(formSubmit && formComplete){
                  $("#"+formSubmit).submit();
                }else if(formComplete){
                  eval("var myObject = { " + stringJSON + " };");
                  $.ajax({
                    url: ajaxRutaAbs,
                    type: "POST",
                    data: myObject,
                    dataType: "json",
                    success: function( data ) {
                      // Si el ajax respondio
                      if( data.event!=null ){
                        //alert( data.title+"\n"+data.message );
                        eval ( data.event );
                      }else{
                        alert( data.title+"\n"+data.message);
                      }
                    },
                    error: function (jqXHR, textStatus, errorThrown){
                    // Si se presento algun error, mostramos la descripcion
                    alert( "Error\nAlgo ha salido mal. Por favor int�ntalo de nuevo en unos minutos -> "+textStatus);
                  }
                });
              }
            });

                $(document).ready( function()
                {
                  $(".con_empl_a" ).click(function (){
                    $("#if_si").css( "display", "block" );
                    $("#if_no").css( "display", "none" );
                    $("#if_si2").css( "display", "none" );
                    $("#if_no2").css( "display", "none" );
                    
                    $("#radio").val( "1" );
                  });
  
                  $(".con_empl_b" ).click(function (){
                    $("#if_si").css( "display", "none" );
                    $("#if_no").css( "display", "block" );
                    $("#if_si2").css( "display", "none" );
                    $("#if_no2").css( "display", "none" );
                    
                    $("#radio").val( "1" );
                  });
  
                  $(".trav_emar_a" ).click(function (){
                    $("#if_si2").css( "display", "block" );
                    $("#if_no2").css( "display", "none" );
                  });
  
                  $(".trav_emar_b" ).click(function (){
                    $("#if_si2").css( "display", "none" );
                    $("#if_no2").css( "display", "block" );
                  });
                });
                
                function BorrarOferta( id )
                {
                  var myObject = {myFunct:"BorrarOferta", id:id};
                  $.ajax({
                    url: ajaxRutaAbs,
                    type: "POST",
                    data: myObject,
                    dataType: "json",
                    success: function( data ) {
                      // Si el ajax respondio
                      if( data.event!=null ){
                        alert( data.title+"\n"+data.message );
                        window.location.href=data.event;
                        //eval ( data.event );
                      }else{
                        alert( data.title+"\n"+data.message);
                      }
                    },
                    error: function (jqXHR, textStatus, errorThrown){
                      // Si se presento algun error, mostramos la descripcion
                      alert( "Error\nAlgo ha salido mal. Por favor int�ntalo de nuevo en unos minutos -> "+textStatus);
                    }
                  });
                }
              </script>
              <div class="clear espacio_en_blanco"></div>
              <div class="contenedor_internas contenedor_internasbgcompleto">
                <div class="">
                  <div class="cont_titulos-dv2 inline">
                    <h1 class="inline">Formulario <span>Seguimiento</span></h1>
                    <div class="clear"></div>
                    <h2 class="inline">Empresa</h2>
                  </div>
                  <div class="clear espacio_en_blanco"></div>
                  <div class="cont_grisancho620 centrado">
                    <div class="cont_cont_grisancho620">
                      <div class="row-fluid form_fluid">
                        <div class="span12">
                          <div class="class_frm frmborrar_oferta">
                            <form>
                            <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
                            <input type="hidden" class="field_frm" id="myFunct" value="SegEmp" />
                            <input type="hidden" class="field_frm" id="clase" value="zona_empseg" />
                            <input type="hidden" class="field_frm" id="id_oferta" value="'.$mId.'" />
                              
                            <input type="hidden" class="field_frm" id="radio" value="" title="Debe ingresar si consigui� empleado para su oferta" />
                            
                            <div class="row-fluid cont_formfluid">
                              <fieldset class="pasos_formulario" id="info1">
                                <legend class="tit_formulario"></legend>
                                <div class="clear espacio_en_blanco"></div>
                                <div class="span8">
                                  <p>�Consigui� empleado para su oferta? (*)</p>
                                </div>
                                <div class="span2 ">
                                  <p>
                                    <input type="radio" name="con_empl" id="con_empl" value="si" class="field_frm con_empl_a">
                                    <label for="con_empl_a" class="lblr">Si</label>
                                  </p>
                                </div>
                                <div class="span2 ">
                                  <p>
                                    <input type="radio" name="con_empl" id="con_empl" value="no" class="field_frm con_empl_b">
                                    <label for="con_empl_b" class="lblr">No</label>
                                  </p>
                                </div>
                  
                                <div id="if_si" style="display: none;" >
                                  <div class="clear espacio_en_blanco"></div>
                                  <div class="span8">
                                    <p>�El empleado que consigui� fue a trav�s de Empleo en Marcha?</p>
                                  </div>
                                  <div class="span2">
                                    <input type="radio" name="trav_emar" id="trav_emar" value="si" class="field_frm trav_emar_a" >
                                    <label for="trav_emar_a" class="label_radio">Si</label>
                                  </div>
                                  <div class="span2">
                                    <input type="radio" name="trav_emar" id="trav_emar" value="no" class="field_frm trav_emar_b" >
                                    <label for="trav_emar_b" class="label_radio">No</label>
                                  </div>

                                  <div id="if_si2" style="display: none;" >
                                    <div class="clear espacio_en_blanco"></div>
                                    <div class="span8">
                                      <label>Califique su experiencia de contrataci�n a trav�s de Empleo en Marcha</label>
                                    </div>
                                    <div class="span4">
                                      <select class="field_frm selectdd" name="cali_exp" id="cali_exp" style="width:100%;">
                                        <option value=""></option>
                                        <option value="Muy satisfecho">Muy satisfecho</option>
                                        <option value="Satisfecho">Satisfecho</option>
                                        <option value="poco Satisfecho">poco Satisfecho</option>
                                        <option value="En desacuerdo">En desacuerdo</option>
                                      </select>
                                    </div>
                      
                                    <div class="clear espacio_en_blanco"></div>
                                    <div class="span8">
                                      <p>En t�rminos de tiempo �La obtenci�n de empleado se ajust� en los t�rminos esperados por la empresa?</p>
                                    </div>
                                    <div class="span2">
                                      <input type="radio" name="tiem_esp" id="tiem_esp" value="si" class="field_frm">
                                      <label for="tiem_esp_a" class="label_radio">Si</label>
                                    </div>
                                    <div class="span2">
                                      <input type="radio" name="tiem_esp" id="tiem_esp" value="no" class="field_frm">
                                      <label for="tiem_esp_b" class="label_radio">No</label>
                                    </div>
                                  </div>
                    
                                  <div id="if_no2" style="display: none;">
                                    <div class="clear espacio_en_blanco"></div>
                                    <div class="span8">
                                      <label>�C�mo consigui� el empleado?</label>
                                    </div>
                                    <div class="span4">
                                      <select class="field_frm selectdd" name="como_emp" id="como_emp" style="width:100%;">
                                        <option value=""></option>
                                        <option value="Empleado Interno de la empresa ocup� el cargo">Empleado Interno de la empresa ocup� el cargo</option>
                                        <option value="Por medio de un proceso de Selecci�n presencial">Por medio de un proceso de Selecci�n presencial</option>
                                      </select>
                                    </div>
                      
                                    <div class="clear espacio_en_blanco"></div>
                                    <div class="span8">
                                      <p>�Dentro del proceso le fue de utilidad a la empresa el servicio otorgado por Empleo en Marcha?</p>
                                    </div>
                                    <div class="span2">
                                      <input type="radio" name="util_emar" id="util_emar" value="si" class="field_frm">
                                      <label for="util_emar_a" class="label_radio">Si</label>
                                    </div>
                                    <div class="span2">
                                      <input type="radio" name="util_emar" id="util_emar_b" value="no" class="field_frm">
                                      <label for="util_emar_b" class="label_radio">No</label>
                                    </div>
                                  </div>
                                </div>
                  
                                <div id="if_no" style="display: none;">
                                  <div class="clear espacio_en_blanco"></div>
                                  <div class="span8">
                                    <label>�Por qu� est� eliminando su oferta?</label>
                                  </div>
                                  <div class="span4">
                                    <select class="field_frm selectdd" name="elim_ofe" id="elim_ofe" style="width:100%;">
                                      <option value=""></option>
                                      <option value="Ya no necesita un empleado">Ya no necesita un empleado</option>
                                      <option value="El cargo fue eliminado">El cargo fue eliminado</option>
                                      <option value="No encontr� personal que se acoplara a sus necesidades">No encontr� personal que se acoplara a sus necesidades</option>
                                    </select>
                                  </div>
                    
                                  <div class="clear espacio_en_blanco"></div>
                                  <div class="span8">
                                    <p>�Dentro del proceso le fue de utilidad a la empresa el servicio otorgado por Empleo en Marcha?</p>
                                  </div>
                                  <div class="span2">
                                    <input type="radio" name="util_emar2" id="util_emar2" value="si"  class="field_frm">
                                    <label for="util_emar2_a" class="label_radio">Si</label>
                                  </div>
                                  <div class="span2">
                                    <input type="radio" name="util_emar2" id="util_emar2" value="no"  class="field_frm">
                                    <label for="util_emar2_b" class="label_radio">No</label>
                                  </div>
                                </div>

                                <div class="clear espacio_en_blanco"></div>
                                <div class="span8">
                                  <label>Ingrese el resultado de su experiencia con el portal de Empleo en Marcha (*)</label>
                                </div>
                                <div class="span4">
                                  <textarea name="resu_exp" id="resu_exp" class="field_frm" title="Debe ingresar el resultado de la experiencia" ></textarea>
                                </div>
                              </div>
                            </fieldset>
                            <fieldset>
                              <div class="span4 offset8">
                                <div class="clear espacio_en_blanco"></div>
                                <a href="javascript:void(0);" class="bt_enviar submit_frm boton-dv" frmid="frmborrar_oferta">Enviar</a>
                              </div>
                            </fieldset>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';

    echo json_encode( array( "html" => utf8_encode( $mHtml ) ) );
  }

  public function FunctBorrarOferta()
  {
    $mId = (int)GetData( "id", 0 );
    if( isset( $_SESSION["user"] ) )
    {
      if( 0 != $mId )
      {
        $mOferta = new Dbzona_ofertas();

        $mOfertas = $mOferta -> getList( array( "id" => $mId, "id_empresa" => $_SESSION["user"]["info"]["id"] ) );

        if( 1 == count( $mOfertas ) )
        {
          $mOferta -> getByPk( $mId );
          $mOferta -> setind_estado( "0" );
          $mOferta -> save();

          echo json_encode( array( "title" => utf8_encode( "�xito" ), "message" => utf8_encode( "Oferta eliminada con �xito" ), "event"=> urldecode( Link::ToSection( array( "s" => "zona_empresa" ) ) ) ) );
        }
        else
          echo json_encode( array( "title" => "Error", "message" => utf8_encode( "Oferta eliminada sin �xito" ) ) );
      }
      else
        echo json_encode( array( "title" => "Error", "message" => utf8_encode( "Oferta eliminada sin �xito" ) ) );
    }
    else
      echo json_encode( array( "title" => "Error", "message" => utf8_encode( "Oferta eliminada sin �xito" ) ) );
  }

  public function FunctDetalleOfertaH()
  {
    $mId = GetData( "id" );

    $mSiteUrl = Link::Build("");

    $mLinkToPdf = Link::ToSection( array( "s" => "ofertas_publicadas", "i" => $mId, "m" => "pdf" ) )."&pdf";
    $mLinkToPrint = Link::ToSection( array( "s" => "imprimir_oferta", "i" => $mId ) )."&print";

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

    $mHtml = '<h1 class="centrar_contenido">'.$mResoult["txt_cargo"].'</h1>
              <div class="clear"></div>
              <h2 class="centrar_contenido">'.$mResoult["txt_nom_comercial"].'</h2>
              <div class="sombra_division"></div>
              <div class="row-fluid">
                <div class="span4">
                  <div class="logo_empresa1"><img alt="" src="'.$mSiteUrl.'/cms/files/empresas/emp_'.$mResoult["fil_logo"].'"></div>
                </div>
                <div class="span8">
                  <h2>Descripci&oacute;n de la Oferta</h2>
                  <div class="clear espacio_en_blancopeque"></div>
                  <p>'.$mResoult["txt_descripcion"].'</p>
                  
                  <p><span class="text_naranja">Fecha de publicaci&oacute;n:</span>'.date( "d/m/Y", strtotime( $mResoult["fec_creasi"] ) ).'</p>
                  <p><span class="text_naranja">Departamento:</span> '.$mResoult["dep_ofe"].'</p>

                  <p><span class="text_naranja">Ciudad / Municipio:</span> '.$mResoult["ciu_ofe"].' </p>
                  <p><span class="text_naranja">Sector:</span> '.$mResoult["nom_sector"].'</p>
                  <p><span class="text_naranja">&Aacute;rea:</span> '.$mResoult["nom_area"].'</p>
                   <p><span class="text_naranja">Jerarqu�a:</span> '.$mResoult["nom_jerarquia"].' </p>
                    <p><span class="text_naranja">Salario:</span> '.$mResoult["salario"].' </p>
                  <p><span class="text_naranja">Vacantes:</span> '.$mResoult["num_vacantes"].'</p>
                   <div class="clear sombra_division"></div>

                   <h2>Requisitos</h2>
                   <div class="clear espacio_en_blancopeque"></div>
                <p>'.$mResoult["txt_requisitos"].'</p>
                 <div class="clear sombra_division"></div>

<h2>Informaci�n general del aspirante</h2>
<div class="clear espacio_en_blancopeque"></div>
<p><span class="text_naranja">Nivel de estudios:</span> '.$mResoult["nom_nivel_estudio"].'</p>

<p><span class="text_naranja">Departamento de residencia del aspirante:</span> '.$mResoult["dep_aspi"].'</p>
 <p><span class="text_naranja">Ciudad / Municipio del aspirante:</span> '.$mResoult["ciu_aspi"].' </p>
  <p><span class="text_naranja">Edad:</span> '.$mResoult["num_edad_aspi"].'</p>
    <p><span class="text_naranja">&Aacute;rea:</span> '.$mResoult["nom_area_aspi"].'</p>
         <p><span class="text_naranja">Experiencia laboral:</span> '.$mResoult["num_exp_aspi"].'</p>

                  <!--<p>'.$mResoult["txt_descripcion"].'</p>-->
                </div>
                <div class="clear espacio_en_blancopeque"></div>
                <div class="clear sombra_division"></div>

                <div class="clear espacio_en_blanco"></div>
                
                <h2>Cargos equivalentes</h2>
                <div class="clear espacio_en_blanco"></div>
                <p>';

    for( $i = 0, $tot = count( $mResRela ); $i < $tot; $i++ )
    {
      $mHtml .= $mResRela[$i]["txt_nombre"];
      $mHtml .= ($i+1) < $tot ? ", " : "";
    }

    $mHtml .=  '</p>
                <div class="clear espacio_en_blanco"></div>';
    if( isset( $_SESSION["user"] ) )
    {
      if( $_SESSION["user"]["id_tipo"] == '2' )
      {
        $mHtml .= '<a class="centrado bt_negro popup" href="#aplicacion-exitosa" onclick="AplicaOferta( \''.$mId.'\' );">Aplicar</a>';
      }
    }
    else
    {
      $mHtml .= '<a class="centrado bt_negro popup" href="#zona_segura_usuario">Aplicar</a>';
    }

    $mHtml .= '<div class="clear espacio_en_blanco"></div>
                <div class="centrar_inline iconos_izq">
                  <a id="imprimir" class="inline" href="'.$mLinkToPrint.'" target="_blank"></a>
                  <a id="guardar" class="inline" href="'.$mLinkToPdf.'"></a>
                  <a id="mensaje" class="inline" href="#"></a>
                  <a id="compartir" class="inline" href="#"></a>
                </div>
              </div>';

    echo json_encode( array( "html" => utf8_encode( $mHtml ) ) );
  }

  public function FunctAplicaOferta()
  {
    $mIdOferta = GetData( "id" );

    $mSql = "SELECT a.txt_cargo, a.txt_descripcion, b.txt_nom_comercial, c.txt_email ".
              "FROM zona_ofertas AS a LEFT JOIN zona_empresas AS b ON a.id_empresa = b.id ".
                                     "LEFT JOIN zona_registrados AS c ON b.id_registrado = c.id ".
             "WHERE a.id = '".$mIdOferta."' ";

    $mResoult = DbHandler::GetRow( $mSql );

    $mIdPersona = '1';

    if( isset( $_SESSION["user"] ) )
    {
      if( $_SESSION["user"]["id_tipo"] == '2' )
      {
        $mIdPersona = $_SESSION["user"]["info"]["id"];
        
        $mPostula = new Dbzona_oferta_postulado();
        $mPostula -> setid_oferta( $mIdOferta );
        $mPostula -> setid_persona( $mIdPersona );
        $mPostula -> setfec_creasi( date( "Y-m-d h:i:s" ) );
        $mPostula -> save();
    
        $cabeceras  = 'From: info@zonafranca.com' . "\r\n" .
                      'Reply-To: info@zonafranca.com' . "\r\n" .
                      'MIME-Version: 1.0' . "\r\n".
                      'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $mMessage = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo</p>
                    
                    <a href="'.Link::ToSection( array( "s" => "detalle_persona" ) ).'&id='.base64_encode( $mIdPersona ).'" target="_blank">Click</a>';
    
        mail( $mResoult["txt_email"], "Aplicacion oferta", $mMessage, $cabeceras );
    
        $mHtml = '<h1 class="centrar_contenido">�Felicitaciones!</h1>
        <div class="clear espacio_en_blanco"></div>
        <h2 class="centrar_contenido">La empresa ha recibido tu hoja de vida</h2>
        <div class="sombra_division"></div>
        <h6><span>Nombre de la empresa u organizaci&oacute;n:</span> '.$mResoult["txt_nom_comercial"].'</h6>
        <div class="clear espacio_en_blancopeque"></div>
        <h6><span>Cargo:</span> '.$mResoult["txt_cargo"].'</h6>
        <div class="clear espacio_en_blanco"></div>
        <p class="centrar_contenido">'.$mResoult["txt_descripcion"].'</p>
        <a class="perfil-dv" href="index.php" target="_parent">Aceptar</a>';        
      }
    }
    else
    {
      $mHtml = '<p>Debe iniciar sesion antes de postularse</p>';  
    }

    echo json_encode( array( "html" => utf8_encode( $mHtml ) ) );
  }
  
  public function FunctAyudaHV()
  {
    $mIdOferta = GetData( "id" );

    $mSecciArt = new Dbcms_secciones_articulo();
    $mSecciArt = $mSecciArt->getByPk( $mIdOferta );
    
    $mHtml = '<h2>'.$mSecciArt["txt_titulo"].'</h2>
              <br>
              <p>'.$mSecciArt["txt_descripcion"].'</p>';

    echo json_encode( array( "html" => utf8_encode( $mHtml ) ) );
  }
  
  public function FunctRecorUsuario()
  {
    $mEmail = GetData( "email" );

    $mRegistra = new Dbzona_registrados();
    $mRegistra = $mRegistra->getList( array( "txt_email" => $mEmail ) );
    
    if( count($mRegistra) > 0 )
    {
      $cabeceras  = 'From: info@zonafranca.com' . "\r\n" .
                      'Reply-To: info@zonafranca.com' . "\r\n" .
                      'MIME-Version: 1.0' . "\r\n".
                      'Content-type: text/html; charset=iso-8859-1' . "\r\n";

      $mMessage = "Estimado usuario \n\n".
                  "Segun su solicitud, su nombre de usuario es:".$mRegistra[0]["txt_nickname"];

      mail( $mRegistra[0]["txt_email"], "Recuperar usuario", $mMessage, $cabeceras );
    }

    echo json_encode( array( "html" => utf8_encode( "aa" ) ) );
  }
  
  public function FunctRecorClave()
  {
    $mNickname = GetData( "nickname" );

    $mRegistra = new Dbzona_registrados();
    $mRegist = $mRegistra->getList( array( "txt_nickname" => $mNickname ) );
    
    if( count( $mRegist ) > 0 )
    {
      $cabeceras  = 'From: info@zonafranca.com' . "\r\n" .
                      'Reply-To: info@zonafranca.com' . "\r\n" .
                      'MIME-Version: 1.0' . "\r\n".
                      'Content-type: text/html; charset=iso-8859-1' . "\r\n";

      $mNuevaClave = substr( md5( date( "Ymdhis" ) ), 5, 5 );

      $mRegistra->getByPk( $mRegist[0]["id"] );
      $mRegistra->settxt_passwd( sha1( $mNuevaClave ) );
      $mRegistra->save();
      
      $mMessage = "Estimado usuario \n\n".
                  "Segun su solicitud, su nueva clave es:".$mNuevaClave;

      mail( $mRegist[0]["txt_email"], "Recuperar usuario", $mMessage, $cabeceras );
    }

    echo json_encode( array( "html" => utf8_encode( "aa" ) ) );
  }

  public function FunctElimUsuario()
  {
    if( isset( $_SESSION["user"] ) )
    {
      if( $_SESSION["user"]["id_tipo"] == '2' )
      {
        $mPerson = new Dbzona_personas();
        $mPerson->getByPk( $_SESSION["user"]["info"]["id"] );
        $mPerson->deleteLogic();

        $mRegist = new Dbzona_registrados();
        $mRegist->getByPk(  $_SESSION["user"]["id"] );
        $mRegist->deleteLogic();
      }
    }

    echo json_encode( array( "event" => "window.location.href='".str_replace( "&amp;", "&", Link::ToSection( array( "s" => "logout" ) )."';" ) ) );
  }

  public function FunctElimEmpresa()
  {
    if( isset( $_SESSION["user"] ) )
    {
      if( $_SESSION["user"]["id_tipo"] == '1' )
      {
        $cData = new Dbzona_empresas();
        $cData->getByPk( $_SESSION["user"]["info"]["id"] );
        $cData->deleteLogic();

        $mRegist = new Dbzona_registrados();
        $mRegist->getByPk(  $_SESSION["user"]["id"] );
        $mRegist->deleteLogic();
      }
    }

    echo json_encode( array( "event" => "window.location.href='".str_replace( "&amp;", "&", Link::ToSection( array( "s" => "logout" ) )."';" ) ) );
  }

  public function FunctValidarCaptcha()
  {

    require_once( SITE_ROOT.'libs/recaptcha/recaptchalib.php' );
    $privatekey = recap_prikey;

    $resp = recaptcha_check_answer ( $privatekey,
                                     $_SERVER["REMOTE_ADDR"],
                                     $_POST["recaptcha_challenge_field"],
                                     $_POST["recaptcha_response_field"]);

    if ( !$resp->is_valid )
    {
      echo json_encode( array( "event" => "alert( 'El captcha no corresponde' );reloadCAP();$('#atras_btn_frm2').trigger('click');", "message" => "true" ) );
      exit;
    }
    else
    {
      echo json_encode( array( "event" => "", "message" => "false" ) );
      exit;
    }
  }
  
  // Funcion para enviar correo electronico con informaicon de nueva contrase�a
  public function FunctRecordarContrasena(){
    // Obtenemos los valores del registro por correo electronico
    $email = GetData("env_contrasena", "");
    $cRegistrados = new Dbzona_registrados();
    $registrados = $cRegistrados->getList(array("txt_email"=>$email));
    // SI el correo esta registrado en DB enviamos correo electronico
    if(count($registrados)>0){
      // Creamo nueva contrasea aleatoria y enviamos correo electronico
      $pass = GeneraRandomDistintc(14, 0, 99);
      $newPass = "rec";
      for($i=0,$tot=count($pass);$i<$tot;$i++){
        $newPass .= $pass[$i];
      }
      $newPass .= "over";
      
      // Obetenemos los datos del usuario
      $mInfo = new Dbzona_personas();
      $mInfo = $mInfo->getList( array( "id_registrado"=>$registrados[0]["id"] ) );
      if(count($mInfo)>0){
        $info = $mInfo[0];
      }else{
        $info = NULL;
      }
      
      // Insertamos registro en DB
      $cRecordar = new Dbzona_recordar();
      $cRecordar->setfecha(date("Y-m-d H:i:s"));
      $cRecordar->setpass($newPass);
      $cRecordar->setid_zona_registrados($registrados[0]["id"]);
      $cRecordar->save();
      
      $idInsert = $cRecordar->getLastId();
      
      $encry = base64_encode($idInsert."|".$newPass."|".$registrados[0]["id"]);
      
      $urlActivar = $this->mSiteUrl = Link::Build('/index.php?ajax&myFunct=RecordarContrasenaActivar&estado=1&encry='.$encry);
      $urlNegar   = $this->mSiteUrl = Link::Build('/index.php?ajax&myFunct=RecordarContrasenaActivar&estado=0&encry='.$encry);
      
      $datos = array(
          "nombre"=>$info["txt_prim_nom"]." ".$info["txt_seg_nom"]." ".$info["txt_prim_apell"]." ".$info["txt_seg_apell"],
          "newpass"=>$newPass,
          "url_activar"=>$urlActivar,
          "url_negar"=>$urlNegar,
          "email"=>$registrados[0]["txt_email"]
      );
      
      $cCorreo = new Correo();
      $cCorreo->UsuariosRecordarContrasena($datos);
      
      echo json_encode( array( "event" => "alert( 'Se a enviado un correo electronico con sus datos de ingreso' )", "message" => "true" ) );
      exit;
    }else{
      echo json_encode( array( "event" => "alert( 'El correo electronico no se encuentra registrado' )", "message" => "true" ) );
      exit;
    }
  }
  
  // Funcion para cambiar el estado de la transaccion en DB
  public function FunctRecordarContrasenaActivar(){
    $datos = explode("|", base64_decode($_GET["encry"]));
    $cRecordar = new Dbzona_recordar();
    // Validamos que la peticion exista
    $recordar = $cRecordar->getList(array("id"=>$datos[0], "pass"=>$datos[1], "id_zona_registrados"=>$datos[2]));
    if(count($recordar)>0){
      $cRecordar->deleteById($datos[0]);
      // Modificamos los valores enDB
      if($_GET["estado"]==1){
        $cRegistrados = new Dbzona_registrados();
        $cRegistrados->settxt_passwd(sha1($datos[1]));
        $cRegistrados->setid($recordar[0]["id_zona_registrados"]);
        $cRegistrados->save();
        echo '<script>
          alert("Su nueva contrase�a es: '.$datos[1].'");
          window.location.href = "'.Link::Build("").'";
        </script>';
      }else{
        echo '<script>
          alert("Se a eliminado la peticion de cambio de contrase�a");
          window.location.href = "'.Link::Build("").'";
        </script>';
      }
    }else{
      echo '<script>
          alert("Error\nLa peticion solicitada no existe");
          window.location.href = "'.Link::Build("").'";
        </script>';
    }  
  }
  
  // Funcion para cambiar el estado de la transaccion en DB
  public function FunctRecordarUsuario(){
    $email = GetData("env_usuario_persona", "");
    $cRegistrados = new Dbzona_registrados();
    $registrados = $cRegistrados->getList(array("txt_email"=>$email));
    // SI el correo esta registrado en DB enviamos correo electronico
    if(count($registrados)>0){
      // Obetenemos los datos del usuario
      $mInfo = new Dbzona_personas();
      $mInfo = $mInfo->getList( array( "id_registrado"=>$registrados[0]["id"] ) );
      if(count($mInfo)>0){
        $info = $mInfo[0];
      }else{
        $info = NULL;
      }
      
      $datos = array(
          "nombre"=>$info["txt_prim_nom"]." ".$info["txt_seg_nom"]." ".$info["txt_prim_apell"]." ".$info["txt_seg_apell"],
          "usuario"=>$registrados[0]["txt_nickname"],
          "email"=>$registrados[0]["txt_email"]
      );
      
      $cCorreo = new Correo();
      $cCorreo->UsuariosRecordarUsuario($datos);
      
      echo json_encode( array( "event" => "alert( 'Se a enviado un correo electronico con sus datos de ingreso' )", "message" => "true" ) );
      exit;
    }else{
      echo json_encode( array( "event" => "alert( 'El correo electronico no se encuentra registrado' )", "message" => "true" ) );
      exit;
    }
  }
  
}

?>