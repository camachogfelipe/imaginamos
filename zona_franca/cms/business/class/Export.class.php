<?php
/******************************************************************************
 * @file               : Export.class.php.                                  *
 * @brief              : Clase para la generacion de archivo.                 *
 * @version            : 1.0                                                  *
 * @ultima_modificacion: 16-sep-2010                                          *
 * @author             : Carlos A. Mock-kow M.                                *
 ******************************************************************************/

/******************************************************************************
 * @class: Export                                                           *
 * @brief: Clase para la generacion de archivos planos                        *
 ******************************************************************************/
class Export
{
  /**< cMsgError: array Mensajes de error*/
  protected $cErrorMsg = NULL;
  /**< cDirExpor: string ruta directorio de destino*/
  protected $cDirExpor = NULL;
  /**< cHeaders: array cabeceras del archivo*/
  protected $cHeaders  = NULL;
  /**< cRows: array Informacion del archivo*/
  protected $cRows     = NULL;
  /**< cRows: string Consulta sql para obtener las filas*/
  protected $cQuery    = NULL;

  /****************************************************************************
   * Metodo Publico para Inicializar las variables necesarias de la clase.    *
   * @fn __construct                                                          *
   * @param $mDirExpor string ruta directorio de destino.                     *
   * @brief Inicializa variables necesarias de la clase                       *
   ****************************************************************************/
  public function  __construct( $mDirExpor = NULL )
  {
    if( NULL !== $mDirExpor )
      $this -> cDirExpor = $mDirExpor;
    else
      $this -> cDirExpor = DWLOADS;
  }

  /****************************************************************************
   * Metodo Publico para asignar los valores de la cabecera.                  *
   * @fn setHeaders                                                           *
   * @brief Asigna los valores de la cabecera.                                *
   * @param $mHeaders array/string valor de la cabecera.                      *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function setHeaders( $mHeaders )
  {
    if( NULL === $mHeaders )
    {
      $this -> cErrorMsg[] = array( "6001", "El campo mHeaders se encuentra Vacio" );
      return FALSE;
    }

    if( is_array( $mHeaders ) )
      $this -> cHeaders = $mHeaders;
    else
    {
      if( NULL === $this -> cHeaders )
        $this -> cHeaders = array( $mHeaders );
      else
        $this -> cHeaders[] = $mHeaders;
    }

    return TRUE;
  }

  /****************************************************************************
   * Metodo Publico para asignar los valores de las filas.                    *
   * @fn setRows                                                              *
   * @brief Asigna los valores de la(s) fila(s).                              *
   * @param $mRows array valor de la(s) fila(s).                              *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function setRows( $mRows = NULL )
  {
    if( !is_array( $mRows ) )
    {
      $this -> cErrorMsg[] = array( "6001", "El campo mRows se encuentra Vacio, o no es una array" );
      return FALSE;
    }

    if( isset( $mRows["0"] ) )
      if( is_array( $mRows["0"] ) )
      {
        if( 300 >= count( $mRows ) )
          $this -> cRows = $mRows;
        else
        {
          $this -> cErrorMsg[] = array( "6001", "La cantidad de registros es superior a 500" );
          return FALSE;
        }
      }
      else
      {
        if( NULL === $this -> cRows )
          $this -> cRows = array( $mRows );
        else
        {
          if( 300 >= count( $this -> cRows ) )
            $this -> cRows = $mRows;
          else
          {
            $this -> cErrorMsg[] = array( "6001", "La cantidad de registros es superior a 500" );
            return FALSE;
          }
        }
      }

    return TRUE;
  }

  /****************************************************************************
   * Metodo Publico para asignar la consulta SQL.                             *
   * @fn setQuery                                                             *
   * @brief Asigna el valor de la consulta SQL                                *
   * @param $mQuery string consulta SQL.                                      *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function setQuery( $mQuery = NULL )
  {
    if( NULL === $mQuery )
    {
      $this -> cErrorMsg[] = array( "6001", "El campo mQuery se encuentra Vacio" );
      return FALSE;
    }
    $this -> cQuery = $mQuery;
    return TRUE;
  }

  /****************************************************************************
   * Metodo Publico para asignar la consulta SQL.                             *
   * @fn setQuery                                                             *
   * @brief Asigna el valor de la consulta SQL                                *
   * @param $mQuery string consulta SQL.                                      *
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error.    *
   ****************************************************************************/
  public function setRowsByQuery( $mInit = 0, $mQuery = NULL )
  {
    if( NULL !== $mQuery )
      $this -> cQuery = $mQuery;

    if( NULL === $this -> cQuery )
    {
      $this -> cErrorMsg[] = array( "6001", "El campo cQuery se encuentra Vacio" );
      return FALSE;
    }

    $this -> setRows( DbHandler::GetALL( $this -> cQuery." LIMIT ".$mInit.", 300 " ) );
    return TRUE;
  }

  /****************************************************************************
   * Metodo Publico retornar los mensajes de error.                           *
   * @fn getError                                                             *
   * @brief Retorna el valor actual de cErrorMsg.                             *
   * @return array valor actual de cErrorMsg.                                 *
   ****************************************************************************/
  public function getError()
  {
    return $this -> cErrorMsg;
  }
}
?>
