<?php
/******************************************************************************
 * @file               : ExpXls.class.php.                                  *
 * @brief              : Clase para la generacion de archivos Xls.            *
 * @version            : 1.0                                                  *
 * @ultima_modificacion: 17-sep-2010                                          *
 * @author             : Carlos A. Mock-kow M.                                *
 ******************************************************************************/

/******************************************************************************
 * @class: ExpXls                                                         *
 * @brief: Clase para la generacion de archivos planos                        *
 ******************************************************************************/

class ExpXls extends Export
{
  /**< cFileName: string Mensajes de error*/
  private $cFileName = NULL;
  /**< cHeadStyl: string/array Estilos de las columnas de la cabecera*/
  private $cHeadStyl = NULL;
  /**< cBodyStyl: string/array Estilos de las columnas del body*/
  private $cBodyStyl = NULL;

  /****************************************************************************
   * Metodo Publico para Inicializar las variables necesarias de la clase.    *
   * @fn __construct                                                          *
   * @param $mFileName string Nombre del archivo a generar.                   *
   * @param $mSpliter  char Separador de columnas.                            *
   * @param $mHeadStyl  string/array stilos para.                             *
   * @param $mBodyStylr string ruta directorio de destino.                    *
   * @brief Inicializa variables necesarias de la clase                       *
   ****************************************************************************/
  public function  __construct( $mFileName = NULL, $mHeadStyl = NULL, $mBodyStyl = NULL, $mDirExpor = NULL )
  {
    parent::__construct( $mDirExpor );

    if( NULL !== $mFileName )
      $this -> cFileName = $mFileName;

    if( NULL !== $mHeadStyl )
      $this -> cHeadStyl = $mHeadStyl;

    if( NULL !== $mBodyStyl )
      $this -> cBodyStyl = $mBodyStyl;
  }

  /****************************************************************************
   * Metodo Publico para asignar los estilos de la cabecera.                  *
   * @fn setHeaderStyle                                                       *
   * @param $mHeadStyl  string/array stilos para.                             *
   * @brief Asigna los estilos de la cabecera.                                *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function setHeaderStyle( $mHeadStyl = NULL )
  {
    if( NULL === $mHeadStyl )
    {
      $this -> cErrorMsg[] = array( "6001", "El campo mHeadStyl se encuentra Vacio" );
      return FALSE;
    }

    $this -> cHeadStyl = $mHeadStyl;
    return TRUE;
  }

  /****************************************************************************
   * Metodo Publico para asignar los estilos del cuerpo.                      *
   * @fn setBodyStyle                                                         *
   * @param $mBodyStyl  string/array stilos para.                             *
   * @brief Asigna los estilos del cuerpo.                                    *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function setBodyStyle( $mBodyStyl = NULL )
  {
    if( NULL === $mBodyStyl )
    {
      $this -> cErrorMsg[] = array( "6001", "El campo mBodyStyl se encuentra Vacio" );
      return FALSE;
    }

    $this -> cBodyStyl = $mBodyStyl;
    return TRUE;
  }

  /****************************************************************************
   * Metodo Publico para Inicializar el archivo en formato XLS.               *
   * @fn openFile                                                             *
   * @brief Inicializa el archivo XLS.                                        *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function openFile()
  {
    $mExpFile = fopen( $this -> cDirExpor.$this -> cFileName, "w" );
    fwrite( $mExpFile, "<table>" );
    return fclose( $mExpFile );
  }

  /****************************************************************************
   * Metodo Publico para Finaliza el archivo en formato XLS.                  *
   * @fn closeFile                                                            *
   * @brief Finaliza el archivo XLS.                                          *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function closeFile()
  {
    $mExpFile = fopen( $this -> cDirExpor.$this -> cFileName, "a" );
    fwrite( $mExpFile, "</table>" );
    return fclose( $mExpFile );
  }

  /****************************************************************************
   * Metodo Publico para escribir las cabeceras del archivo.                  *
   * @fn writeHeader                                                          *
   * @brief Escribe las cabeceras del archivo                                 *
   * @param $mHeaders array/string valor de la cabecera.                      *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function writeHeader( $mHeaders = NULL )
  {
    if( NULL !== $mHeaders )
      $this -> setHeaders( $mHeaders );

    if( NULL === $this -> cHeaders )
    {
      $this -> cErrorMsg[] = array( "6001", "El campo cHeaders se encuentra Vacio" );
      return FALSE;
    }

    $mLineToWrite = "<tr>";
    for( $mGy = 0, $mTot = count( $this -> cHeaders ); $mGy < $mTot; $mGy++ )
    {
      if( NULL !== $this -> cHeadStyl )
      {
        if( is_array( $this -> cHeadStyl ) )
          $mLineToWrite .= "<td style=\"".$this -> cHeadStyl[$mGy]."\" >".$this -> cHeaders[$mGy]."</td>";
        else
          $mLineToWrite .= "<td style=\"".$this -> cHeadStyl."\" >".$this -> cHeaders[$mGy]."</td>";
      }
      else
        $mLineToWrite .= "<td>".$this -> cHeaders[$mGy]."</td>";
    }
    $mLineToWrite .= "</tr>";

    if( NULL !== $mLineToWrite )
    {
      $mExpFile = fopen( $this -> cDirExpor.$this -> cFileName, "a" );
      fwrite( $mExpFile, $mLineToWrite );
      fclose( $mExpFile );

      return TRUE;
    }
    else
      return FALSE;
  }

  /****************************************************************************
   * Metodo Publico para escribir el contenido del archivo.                   *
   * @fn writeRows                                                            *
   * @brief Escribe el contenido del archivo                                  *
   * @param $mRows array valor de la(s) fila(s).                              *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function writeRows( $mRows = NULL )
  {
    if( NULL !== $mRows )
      $this -> setRows( $mRows );

    if( NULL === $this -> cRows )
    {
      $this -> cErrorMsg[] = array( "6001", "El campo cRows se encuentra Vacio" );
      return FALSE;
    }

    $mExpFile = fopen( $this -> cDirExpor.$this -> cFileName, "a" );

    foreach( $this -> cRows as $mRow )
    {
      $mLineToWrite = "<tr>";
      $mTot = count( $mRow );
      $mGy = 0;

      foreach( $mRow as $mColumn )
      {
        $mColumn = stripcslashes( $mColumn );
        $mColumn = html_entity_decode( $mColumn );
        $mColumn = str_replace( "<br />","",$mColumn );

        if( NULL !== $this -> cBodyStyl )
        {
          if( is_array( $this -> cBodyStyl ) )
            $mLineToWrite .= "<td style=\"".$this -> cBodyStyl[$mGy]."\" >".$mColumn."</td>";
          else
            $mLineToWrite .= "<td style=\"".$this -> cBodyStyl."\" >".$mColumn."</td>";
        }
        else
          $mLineToWrite .= "<td>".$mColumn."</td>";
        
        $mGy++;
      }

      $mLineToWrite .= "</tr>";

      fwrite( $mExpFile, $mLineToWrite );
    }

    return fclose( $mExpFile );
  }

  /****************************************************************************
   * Metodo Publico para generar un archivo plano.                            *
   * @fn generatePlane                                                        *
   * @brief Escribe un archivo plano                                          *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function generateXls()
  {
    $this -> openFile();

    if( NULL !== $this -> cHeaders )
      if( !$this -> writeHeader() )
        return FALSE;

    if( NULL === $this -> cRows )
    {
      if( NULL === $this -> cQuery )
      {
        $this -> cErrorMsg[] = array( "6001", "El campo cQuery se encuentra Vacio" );
        return FALSE;
      }

      $mAux = explode( "ORDER", $this -> cQuery );
      $mQueryCount = "SELECT COUNT( * ) AS rows ".
                       "FROM ( ".$mAux[0]." ) AS Gy ".
                      "LIMIT 0, 1 ";

      $mNumRows = DbHandler::GetRow( $mQueryCount );

      if( 0 < $mNumRows["rows"] )
      {
        $mIni = 0;
        $mIte = ceil( $mNumRows["rows"]/300 );
        for( $mGy = 0; $mGy < $mIte; $mGy++ )
        {
          $this -> setRowsByQuery( $mIni );
          $this -> writeRows();
          $mIni = $mIni+300;
        }
        unset( $mIni );
      }
    }
    else
      $this -> writeRows();

    $this -> closeFile();
  }
}
?>
