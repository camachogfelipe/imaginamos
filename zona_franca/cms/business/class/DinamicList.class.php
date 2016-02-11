<?php

class DinamicList
{

  private $cQuery          = NULL;
  private $cQueryGen       = NULL;
  private $cHeader         = NULL;
  private $cNumRows        = NULL;
  private $cErrorMsg       = array();
  private $cLimmit         = NULL;
  private $cHtml           = NULL;
  private $cWay            = NULL;
  private $cButtons        = NULL;
  private $cHiddens        = NULL;
  private $cAction         = "";
  private $cDownloadResult = FALSE;

  public function __construct($Url, $mLimmit = "30", $mWay = "ASC")
  {
    $this->cUrl = $Url;
    $this->cLimmit = $mLimmit;
    $this->cNumRows = 0;
    $this->cWay = $mWay;
  }

  /*
   * Metodo Publico para verificar si desea descargar la consulta generada
   * @fn setDownloadResult
   * @brief Retorna TRUE o FALSE
   * @return number numero de filas
   */
  public function setDownloadResult( $data=FALSE )
  {
    $this->cDownloadResult = (boolean)$data;
    return $this->cDownloadResult;
  }

  /*
   * Metodo Publico para asignar la consulta SQL
   * @fn setQuery
   * @brief Asigna el valor de la consulta SQL
   * @param $mQuery string consulta SQL
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error
   */
  public function setQuery($mQuery = NULL)
  {
    if (NULL === $mQuery)
    {
      $this->cErrorMsg[] = array("6001", "El campo mQuery se encuentra Vacio");
      return FALSE;
    }

    if (FALSE !== strpos($mQuery, "GROUP"))
    {
      if (FALSE === stripos($mQuery, "WHERE"))
      {
        $mTmpQuery = explode("GROUP", $mQuery);
        $mQuery = $mTmpQuery[0] . " WHERE 1 GROUP " . $mTmpQuery[1];
      }
    }
    elseif (FALSE !== strpos($mQuery, "group"))
    {
      if (FALSE === stripos($mQuery, "WHERE"))
      {
        $mTmpQuery = explode("group", $mQuery);
        $mQuery = $mTmpQuery[0] . " WHERE 1 GROUP " . $mTmpQuery[1];
      }
    }
    else
      if (FALSE === stripos($mQuery, "WHERE"))
        $mQuery .= "WHERE 1 ";

    if (FALSE !== strpos($mQuery, "ORDER"))
    {
      $mQuery = explode("ORDER", $mQuery);
      $mQuery = $mQuery[0];
    }
    elseif (FALSE !== strpos($mQuery, "order"))
    {
      $mQuery = explode("order", $mQuery);
      $mQuery = $mQuery[0];
    }

    if (FALSE !== strpos($mQuery, "LIMIT"))
    {
      $mQuery = explode("LIMIT", $mQuery);
      $mQuery = $mQuery[0];
    }
    elseif (FALSE !== strpos($mQuery, "limit"))
    {
      $mQuery = explode("limit", $mQuery);
      $mQuery = $mQuery[0];
    }

    $this->cQuery = $mQuery;
    return TRUE;
  }

  /*
   * Metodo Publico para asignar las cabeceras del listado dinamico
   * @fn setHeader
   * @brief Asigna las cabeceras del listado
   * @param $mlabel string etiqueta del listado
   * @param $mProperties string/array propiedades de la cabecera
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error
   */
  public function setHeader($mlabel = NULL, $mProperties = NULL)
  {
    if (NULL === $mlabel)
    {
      $this -> cErrorMsg[] = array("6001", "El campo mlabel se encuentra Vacio");
      return FALSE;
    }

    if (NULL === $mProperties)
      $mProperties = array("sort" => FALSE, "filter" => FALSE);
    elseif (!is_array($mProperties))
      $mProperties = parceAtribute($mProperties);

    if (array_key_exists("dbfield", $mProperties))
    {
      if (!array_key_exists("sort", $mProperties))
        $mProperties["sort"] = TRUE;

      if (!array_key_exists("filter", $mProperties))
        $mProperties["filter"] = TRUE;

      if (!array_key_exists("filtfield", $mProperties))
        $mProperties["filtfield"] = $mProperties["dbfield"];
    }
    else
    {
      $mProperties["sort"] = FALSE;
      $mProperties["filter"] = FALSE;
    }

    if (NULL === $this->cHeader)
      $this->cHeader = array(array("label" => $mlabel, "proper" => $mProperties));
    else
      $this->cHeader[] = array("label" => $mlabel, "proper" => $mProperties);

    return TRUE;
  }

  /*
   * Metodo Publico para calcular el numero total de filas a listar
   * @fn setNumRows
   * @brief Calcula el numero total de filas del listado
   * @param $mFilters string filtros de busqueda
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error
   */
  public function setNumRows($mFilters = NULL)
  {
    if (NULL === $this->cQuery)
    {
      $this->cErrorMsg[] = array("6001", "El campo mQuery se encuentra Vacio");
      return FALSE;
    }

    $mQuery = $this->cQuery;

    if (NULL !== $mFilters)
      if (FALSE !== strpos($this->cQuery, "GROUP"))
      {
        $mTmpQuery = explode("GROUP", $this->cQuery);
        $mQuery = $mTmpQuery[0] . " " . $mFilters . " GROUP " . $mTmpQuery[1];
      }
      elseif (FALSE !== strpos($this->cQuery, "group"))
      {
        $mTmpQuery = explode("group", $this->cQuery);
        $mQuery = $mTmpQuery[0] . " " . $mFilters . " GROUP " . $mTmpQuery[1];
      }
      else
        $mQuery = $this->cQuery . " " . $mFilters;

    $mQueryCount = "SELECT COUNT( * ) AS rows " .
            "FROM ( " . $mQuery . " ) AS Gy " .
            "LIMIT 0, 1 ";

    $mNumRows = DbHandler::GetRow($mQueryCount);
    if (FALSE !== $mNumRows)
    {
      $this->cNumRows = $mNumRows["rows"];
      return TRUE;
    }
    else
      return FALSE;
  }

  /*
   * Metodo Publico para retornar el numero total de filas del listado
   * @fn getNumRows
   * @brief Retorna el numero total de filas del listado
   * @return number numero de filas
   */
  public function getNumRows()
  {
    return $this->cNumRows;
  }

  /*
   * Metodo Publico retorna los filtros dinamicos de busqueda formato SQL
   * @fn getFilters
   * @brief Retorna los filtros dinamicos de busqueda del listado
   * @return string cadena formateada con los filtros de busqueda
   */
  private function getFilters()
  {
    $mFilters = NULL;

    foreach ($this->cHeader as $mHeader)
    {
      if (TRUE === $mHeader["proper"]["filter"] || "true" === strtolower($mHeader["proper"]["filter"]))
      {
        $mValue = StripHtml(GetData(str_replace(".", "_", "Dl" . $this->cSessionName . "_" . $mHeader["proper"]["filtfield"]), FALSE));

        if (FALSE !== $mValue && '' !== $mValue && NULL !== $mValue)
          if (isset($mHeader["proper"]["type"]) && "list" == strtolower($mHeader["proper"]["type"]))
            $mFilters .= " AND LOWER(" . $mHeader["proper"]["filtfield"] . ") = '" . strtolower($mValue) . "' ";
          else
            $mFilters .= " AND LOWER(" . $mHeader["proper"]["filtfield"] . ") LIKE '%" . strtolower($mValue) . "%' ";
        else
          $mFilters .= NULL;
      }
    }

    return $mFilters;
  }

  /*
   * Metodo Publico retorna el orden del listado en formato SQL
   * @fn getSort
   * @brief Retorna el orden del listado en formato SQL
   * @return string cadena formateada con el orden del listado
   */
  private function getSort()
  {
    $mSort = NULL;

    $mSortField = GetData("DlSort_" . $this->cSessionName, FALSE);

    $mSortWay = GetData("DlWay_" . $this->cSessionName, FALSE);

    if (FALSE !== $mSortField)
    {
      if ("ASC" == $mSortWay)
      {
        $mSort = " ORDER BY " . StripHtml($mSortField) . " DESC ";
        $this->cWay = "DESC";
      }
      else
      {
        $mSort = " ORDER BY " . StripHtml($mSortField) . " ASC ";
        $this->cWay = "ASC";
      }
    }

    return $mSort;
  }

  /*
   * Metodo Publico asignar los botones del listado dinamico
   * @fn setButton
   * @brief Asigna los botones a usar en el listado dinamico
   * @param $mName  string nombre del boton
   * @param $mLabel string etiqueta del boton
   * @param $mType  string tipo de boton button\link
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error
   */
  public function setButton($mName = NULL, $mLabel = NULL, $mProperties = NULL)
  {
    if (NULL === $mName)
    {
      $this->cErrorMsg[] = array("6001", "El campo mName se encuentra Vacio");
      return FALSE;
    }

    if (NULL === $mProperties)
      $mProperties = array("type" => "button");
    elseif (!is_array($mProperties))
      $mProperties = parceAtribute($mProperties);

    if (!array_key_exists("type", $mProperties))
      $mProperties["type"] = "button";

    $mButton = array("name" => $mName);
    $mButton["label"] = NULL !== $mLabel ? $mLabel : $mName;
    $mButton["proper"] = $mProperties;

    if (NULL === $this->cButtons)
      $this->cButtons = array($mButton);
    else
      $this->cButtons[] = $mButton;

    return TRUE;
  }

  /*
   * Metodo Publico asignar los campos ocultos para los formularios del boton
   * @fn setHidden
   * @brief Asigna los campos ocultos de los formularios de cada boton
   * @param $mName  string nombre del campo oculto
   * @param $mValue string valor por defecto del campo oculto
   * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error
   */
  public function setHidden($mField = NULL, $mOptions = NULL)
  {
    if (NULL === $mField)
    {
      $this->cErrorMsg[] = array("6001", "El campo mName se encuentra Vacio");
      return FALSE;
    }

    if (strpos($mField, "."))
    {
      $mTempName = explode(".", $mField);
      $mTempName = $mTempName[1];
    }
    else
      $mTempName = $mField;

    if (NULL === $mOptions || "" == $mOptions)
      $mValue = array("field" => $mTempName, "options" => NULL);
    elseif (!is_array($mOptions))
      $mValue = array("field" => $mTempName, "options" => array("default" => $mOptions));
    else {
      $mValue = array("field" => $mTempName);

      if (array_key_exists("default", $mOptions))
        $mValue["default"] = $mOptions["default"];

      if (array_key_exists("label", $mOptions))
        $mValue["label"] = $mOptions["label"];
    }

    if (NULL === $this->cHiddens)
      $this->cHiddens = array(array("name" => $mField, "options" => $mValue));
    else
      $this->cHiddens[] = array("name" => $mField, "options" => $mValue);

    return TRUE;
  }

  /*
   * Metodo privado para dibujar la cabecera del listado dinamico
   * @fn drawHeader
   * @brief Dibuja la cabecera del listado en formato HTML
   * @return string cabecera en formato HTML
   */
  private function drawHeader($mSession = NULL)
  {
    $mHtml = NULL;
    $mHtmlFilt = NULL;

    if (NULL !== $this->cHeader && is_array($this->cHeader))
    {
      $mHtmlHead = NULL;

      $mColumn = 1;
      foreach ($this->cHeader as $mHeader)
      {
        $mHtmlHead .= "    <div ";
        $mHtmlHead .= isset($mHeader["proper"]["hdClass"]) ? 'class="span2x '.$mHeader["proper"]["hdClass"].'" ' : 'class="span2x hdClass" ';
        $mHtmlHead .= isset($mHeader["proper"]["hdStyle"]) ? "style=\"".$mHeader["proper"]["hdStyle"]."\" " : "";
        $mHtmlHead .= isset($mHeader["proper"]["hdWidth"]) ? "width=\"".$mHeader["proper"]["hdWidth"]."\" " : "";
        $mHtmlHead .= isset($mHeader["proper"]["hdHeigth"]) ? "heigth=\"".$mHeader["proper"]["hdHeigth"]."\" >\n" : ">\n";

        /*if( $mHeader["label"]=="Estado" ){
          $mHeader["label"] = '<img src="'.Link::Build("/images/icon_sem_1.png").'"><img src="'.Link::Build("/images/icon_sem_2.png").'"><img src="'.Link::Build("/images/icon_sem_3.png").'">';
        }*/

        if ( TRUE === $mHeader["proper"]["sort"] || "true" === strtolower($mHeader["proper"]["sort"] ) )
        {
          $file = parse_url($this->cAction);

          if ( isset( $file["query"] ) )
            $mHtmlHead .= "      <center><a href=\"".$this->cAction."&amp;DlSort_".$this->cSessionName."=".$mHeader["proper"]["dbfield"]."&amp;DlWay_".$this->cSessionName."=".$this->cWay." \" ";
          else
            $mHtmlHead .= "      <center><a href=\"".$this->cAction."?DlSort_".$this->cSessionName."=".$mHeader["proper"]["dbfield"]."&amp;DlWay_".$this->cSessionName."=".$this->cWay." \" ";

          $mHtmlHead .= isset($mHeader["proper"]["orClass"]) ? 'class="btn btn-link '.$mHeader["proper"]["orClass"].'" ' : 'class="btn btn-link orClass" ';
          $mHtmlHead .= isset($mHeader["proper"]["orStyle"]) ? 'style="'.$mHeader["proper"]["orStyle"].'" >' : '>';
          $mHtmlHead .= $mHeader["label"]."</a></center>\n";
        }
        else
        {
          $mHtmlHead .= "      <center><label ";
          $mHtmlHead .= isset($mHeader["proper"]["orClass"]) ? 'class="btn btn-link '.$mHeader["proper"]["orClass"].'" ' : 'class="btn btn-link orClass" ';
          $mHtmlHead .= isset($mHeader["proper"]["orStyle"]) ? "style=\"".$mHeader["proper"]["orStyle"]."\" >" : " >";
          $mHtmlHead .= $mHeader["label"]."</label></center>\n";
        }
        $mHtmlHead .= "    </div>\n";

        $mHtmlFilt .= "      <div class=\"span2x hdClass\">\n        <center>\n";
        if ( TRUE === $mHeader["proper"]["filter"] || "true" === strtolower( $mHeader["proper"]["filter"] ) )
        {
          if ( isset( $mHeader["proper"]["type"] ) && "list" == strtolower( $mHeader["proper"]["type"] ) )
          {
            if ( isset( $mHeader["proper"]["options"] ) )
            {
              $mValue = StripHtml(GetData("Dl" . $this->cSessionName . "_". str_replace(".", "_", $mHeader["proper"]["dbfield"]), FALSE));

              $mHtmlFilt .= "          <select id=\"Dl".$this->cSessionName."_".str_replace( ".", "_", $mHeader["proper"]["filtfield"] )."\" name=\"Dl".$this->cSessionName."_".str_replace( ".", "_", $mHeader["proper"]["filtfield"] )."\" onchange=\"javascript:document.DlFilter_".$this->cSessionName.".submit()\" >\n";
              $mHtmlFilt .= "            <option value=\"\">--</option>\n";

              foreach ($mHeader["proper"]["options"] as $mOption)
              {
                if ($mOption["value"] == $mValue)
                  $mHtmlFilt .= "            <option value=\"".$mOption["value"]."\" selected=\"selected\" >".$mOption["label"]."</option>\n";
                else
                  $mHtmlFilt .= "            <option value=\"".$mOption["value"]."\">".$mOption["label"]."</option>\n";
              }

              $mHtmlFilt .= "          </select>\n";
            }
            else
              $mHtmlFilt .= "          &nbsp; \n";
          }
          else
          {
            $mHtmlFilt .= "          <input type=\"text\" id=\"Dl" . $this->cSessionName . "_" . str_replace(".", "_", $mHeader["proper"]["filtfield"]) . "\" name=\"Dl" . $this->cSessionName . "_" . str_replace(".", "_", $mHeader["proper"]["filtfield"]) . "\" size=\"15px\" ";
            $mHtmlFilt .= isset($mHeader["proper"]["class"]) ? 'class="input-medium search-query '.$mHeader["proper"]["class"].'" ' : 'class="input-medium search-query flClass" ';

            if (FALSE !== strpos($mSession["Filters"], $mHeader["proper"]["dbfield"]))
            {
              $mTempFilter = $mSession["Filters"];

              $mFiltValue = explode($mHeader["proper"]["dbfield"], $mTempFilter);
              //echo " -- ".$mFiltValue[0]." -- ".$mFiltValue[1];
              $mFiltValue = explode("%", $mFiltValue[1]);
              if( isset($mFiltValue[1]))
              {
                $mFiltValue = $mFiltValue[1];
              }
              else
              {
                $mFiltValue = $mFiltValue[0];
              }
            }
            else
              $mFiltValue = FALSE;

            $mValue = StripHtml(GetData(str_replace(".", "_", "Dl". $this->cSessionName . "_" . $mHeader["proper"]["filtfield"] ), $mFiltValue ));

            $mHtmlFilt .= FALSE !== $mValue ? 'value="' . $mValue . '" ' : 'value="" ';
            $mHtmlFilt .= isset($mHeader["proper"]["orStyle"]) ? "style=\"" . $mHeader["proper"]["orStyle"] . "\" onchange=\"javascript:document.DlFilter_" . $this->cSessionName . ".submit()\" />\n" : "onchange=\"javascript:document.DlFilter_" . $this->cSessionName . ".submit()\" />\n";
          }
        }
        else
          $mHtmlFilt .= "            &nbsp; \n";

        $mHtmlFilt .= "        </center>\n      </div>\n";
      }

      if (NULL !== $this->cButtons)
      {
        $mColSpan = count($this->cButtons);
        $mHtmlHead .= "    <div class=\"span2x hdClass\" >\n";
        $mHtmlHead .= "      <center><label class=\"btn btn-link acciones \">Acciones</label></center>\n";
        $mHtmlHead .= "    </div>\n";

        $mHtmlFilt .= "      <div class=\"span2x hdClass\" colspan=\"".$mColSpan."\" >\n";
        $mHtmlFilt .= "        &nbsp;\n";
        $mHtmlFilt .= "      </div>\n";
      }

      $mHtml = "  <div class=\"row-fluid\">\n" . $mHtmlHead . "  </div>\n  <div class=\"row-fluid\">\n    <form action=\"" . $this->cAction . "\" name=\"DlFilter_" . $this->cSessionName . "\" id==\"DlFilter_" . $this->cSessionName . "\" method=\"post\" >\n" . $mHtmlFilt . "    </form>\n  </div>\n";
    }

    return $mHtml;
  }

  /*
   * Metodo privado para dibujar la paginacion del listado dinamico
   * @fn drawPager
   * @brief Dibuja la paginacion del listado en formato HTML
   * @return string paginacion en formato HTML
   */
  private function drawPager($mNumPages = NULL, $mPage = NULL)
  {
    $mHtmlPager = NULL;

    if ($mNumPages > 1)
    {
      $mColSpan = count( $this->cHeader );
      if (NULL !== $this->cButtons)
      {
        $mNumButt = count( $this->cButtons );
        (int) $mColSpan += (int) $mNumButt;
      }

      $total_pages = 9;
      $mPrev = (int) $mPage - 1;
      $mNext = (int) $mPage + 1;

      $mHtmlPager .= "  <div class=\"row\" >\n";
      $mHtmlPager .= "    <div class=\"pagination\" >\n";
      $mHtmlPager .= "      <ul>\n";

      //ir al inicio
      if ( $mPage == 1 )
        $mHtmlPager .= "      <li class=\"disabled\"><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=1\" > << </a></li>\n";
      else
      {
        $file = parse_url( $this -> cAction );

        if ( isset( $file["query"] ) )
          $mHtmlPager .= "    <li><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=1\" > << </a></li>\n";
        else
          $mHtmlPager .= "    <li><a href=\"".$this->cAction."?DlPage_".$this->cSessionName."=1\" > << </a></li>\n";
      }

      //Pagina anterior
      if ($mPage == 1)
        $mHtmlPager .= "      <li class=\"disabled\"><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$mPrev."\" > < </a></li>\n";
      else
      {
        $file = parse_url($this->cAction);

        if ( isset ($file["query"] ) )
          $mHtmlPager .= "    <li><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$mPrev."\" > < </a></li>\n";
        else
          $mHtmlPager .= "    <li><a href=\"".$this->cAction."?DlPage_".$this->cSessionName."=".$mPrev."\" > < </a></li>\n";
      }

      //paginacion
      if ($mNumPages < $total_pages)
      {
        for ($x = 1; $x <= $mNumPages; $x++)
        {
          if ($x == $mPage)
            $mHtmlPager .= "<li class=\"active\"><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$x."\" class=\"page\">".$x."</a></li>\n";
          else
          {
            $file = parse_url( $this->cAction );
            if ( isset( $file["query"] ) )
              $mHtmlPager .= "<li><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$x."\" class=\"page\">".$x."</a></li>\n";
            else
              $mHtmlPager .= "</li><a href=\"" . $this->cAction."?DlPage_".$this->cSessionName."=".$x."\" class=\"page\">".$x."</a></li>\n";
          }
        }
      }
      else
      {
        if ($mPage == 1 || $mPage <= 4)
        {
          if ($mNumPages >= $total_pages)
          {
            for ($x = 1; $x <= $total_pages; $x++)
            {
              if ($x == $mPage)
                $mHtmlPager .= "<li class=\"active\"><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$x."\" class=\"page\">".$x."</a></li>\n";
              else
              {
                $file = parse_url( $this->cAction );
                if ( isset( $file["query"] ) )
                  $mHtmlPager .= "<li><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$x."\" class=\"page\">".$x."</a></li>\n";
                else
                  $mHtmlPager .= "<li><a href=\"".$this->cAction."?DlPage_".$this->cSessionName."=".$x."\" class=\"page\">".$x."</a></li>\n";
              }
            }
          }
          else
          {
            for ( $x = 1; $x <= $mNumPages; $x++ )
            {
              if ( $x == $mPage )
                $mHtmlPager .= "<li class=\"active\"><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$x."\" class=\"page\">".$x."</a></li>\n";
              else
              {
                $file = parse_url( $this->cAction );
                if (isset($file["query"]))
                  $mHtmlPager .= "<li><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$x."\" class=\"page\">".$x." </a></li>\n";
                else
                  $mHtmlPager .= "<li><a href=\"".$this->cAction."?DlPage_".$this->cSessionName."=".$x."\" class=\"page\">".$x."</a></li>\n";
              }
            }
          }
        }

        if ($mPage >= 5)
        {
          if ($mPage == ($mNumPages))
          {
            $inicialpage = $mNumPages - 8;
            for ($x = $inicialpage; $x <= $mNumPages; $x++)
            {
              if ($x == $mNumPages)
                $mHtmlPager .= "<li class=\"active\"><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$x."\" class=\"page\" >".$x."</a></li>\n";
              else
              {
                $file = parse_url($this->cAction);
                if (isset($file["query"]))
                  $mHtmlPager .= "<li><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$x."\" class=\"page\" >".$x."</a></li>\n";
                else
                  $mHtmlPager .= "<li><a href=\"".$this->cAction."?DlPage_".$this->cSessionName."=".$x."\" class=\"page\" >".$x."</a></li>\n";
              }
            }
          }
          else
          {
            if ($mPage == ($mNumPages - 3))
            {
              $inicialpage = $mPage - 5;
              $finpage = $mPage + 3;
            }
            elseif ($mPage == ($mNumPages - 2))
            {
              $inicialpage = $mPage - 6;
              $finpage = $mPage + 2;
            }
            elseif ($mPage == ($mNumPages - 1))
            {
              $inicialpage = $mPage - 7;
              $finpage = $mPage + 1;
            }
            else
            {
              $inicialpage = $mPage - 4;
              $finpage = $mPage + 4;
            }

            for ($x = $inicialpage; $x <= $finpage; $x++)
            {
              if ($x == ($mPage))
              {
                $mHtmlPager .= "<li class=\"active\"><a href=\"".$this->cAction. "&DlPage_".$this->cSessionName."=".$x."\" class=\"page\" >".$x."</a></li>\n";
              }
              else
              {
                $file = parse_url($this->cAction);
                if (isset($file["query"]))
                  $mHtmlPager .= "<li><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$x."\" class=\"page\" >".$x."</a></li>\n";
                else
                  $mHtmlPager .= "<li><a href=\"".$this->cAction."?DlPage_".$this->cSessionName."=".$x."\" class=\"page\" >".$x."</a></li>\n";
              }
            }
          }
        }
      }

      if ($mPage == $mNumPages)
        $mHtmlPager .= "      <li class=\"disabled\"><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$mNext."\" > > </a></li>\n";
      else
      {
        $file = parse_url($this->cAction);
        if (isset($file["query"]))
          $mHtmlPager .= "    <li><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$mNext."\" > > </a></li>\n";
        else
          $mHtmlPager .= "    <li><a href=\"".$this->cAction."?DlPage_".$this->cSessionName."=".$mNext."\" > > </a></li>\n";
      }

      if ($mPage == $mNumPages)
        $mHtmlPager .= "      <li class=\"disabled\"><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$mNumPages."\" > >> </a></li>\n";
      else
      {
        $file = parse_url($this->cAction);
        if (isset($file["query"]))
          $mHtmlPager .= "    <li><a href=\"".$this->cAction."&DlPage_".$this->cSessionName."=".$mNumPages."\" > >> </a></li>\n";
        else
          $mHtmlPager .= "    <li><a href=\"".$this->cAction."?DlPage_".$this->cSessionName."=".$mNumPages."\" > >> </a></li>\n";
      }

      $mHtmlPager .= "      </ul>\n";
      $mHtmlPager .= "    </div>\n";
      $mHtmlPager .= "  </div>\n";
    }

    return $mHtmlPager;
  }

  public function setAction($mAction = NULL)
  {
    if (NULL === $mAction)
    {
      $this->cErrorMsg[] = array("0000", "El campo mAction se encuentra Vacio");
      return FALSE;
    }

    $mUrl = parse_url($mAction);
    $mFile = basename($mUrl["path"]);
    $mFile = explode(".", $mFile);

    if (isset($mFile[1]))
    {
      //var_dump( $mUrl );
      if (isset($mUrl["query"]))
      {
        $mDlPos = stripos($mAction, "?DL");
        if (FALSE !== $mDlPos)
          $this->cAction = substr($mAction, 0, (int) $mDlPos);
        else
        {
          $mDlPos = stripos($mAction, "&amp;DL");
          if (FALSE !== $mDlPos)
            $this->cAction = substr($mAction, 0, (int) $mDlPos);
          else
            $this->cAction = $mAction;
        }
      }
      else
        $this->cAction = $mAction;
    }
    else
      $this->cAction = $mAction . "index.php";

    return TRUE;
  }

  /*
   * Metodo Publico para generar el listado dinamico
   * @fn generateList
   * @brief Genera el listado dinamico en formato HTML
   * @param $mSessionName  string nombre de la Session de destino
   * @return string listado dinamico en formato HTML
   */
  public function generateList($mSessionName = NULL)
  {
    if (NULL === $mSessionName)
    {
      $this->cErrorMsg[] = array("6001", "El campo mSessionName se encuentra Vacio");
      return FALSE;
    }
    else
      $this->cSessionName = $mSessionName;

    if (NULL === $this->cAction)
    {
      $mLista->setAction($this->cUrl);

      if (NULL === $this->cAction)
      {
        $this->cErrorMsg[] = array("6001", "El campo cAction se encuentra Vacio");
        return FALSE;
      }
    }

    //$mSession = $this -> cSecurity -> GetSessionValue( $mSessionName, FALSE );
    if (!isset($_SESSION[$mSessionName]))
    {
      $_SESSION[$mSessionName] = NULL;
    }

    $mSession = $_SESSION[$mSessionName];

    if (NULL == $this->cQuery)
    {
      if (isset($mSession["Query"]))
        $this->cQuery = $mSession["Query"];
    }
    else
    {
      $mSession["Query"] = $this->cQuery;
    }

    if (NULL === $this->cQuery)
    {
      $this->cErrorMsg[] = array("6001", "El campo cQuery se encuentra Vacio");
      return FALSE;
    }

    $mFilters = $this->getFilters();

    $mPage = GetData("DlPage_" . $this->cSessionName, FALSE);

    if (FALSE === $mPage)
      if (NULL !== $mFilters)
      {
        $mSession["Filters"] = $mFilters;
        $mPage = 1;
      }
      else
        $mSession["Filters"] = NULL;

    if (FALSE === $mPage)
      $mPage = 1;

    if ($mPage < 1)
      $mPage = 1;

    $mSession["LastPage"] = (int) $mPage;

    if (NULL !== $mSession["Filters"] && NULL !== $mFilters)
      $this->setNumRows($mSession["Filters"]);
    elseif (NULL === $this->cNumRows)
    {
      if (isset($mSession["NumRows"]))
        $this->cNumRows = $mSession["NumRows"];
      else
        $this->setNumRows();
    }
    else
      $this->setNumRows();

    $mSession["NumRows"] = $this->cNumRows;

    $mSort = $this->getSort();
    if (NULL !== $mSort)
      $mSession["Sort"] = $mSort;
    else
      $mSession["Sort"] = " ORDER BY 1 DESC ";

    $mInit = ((int) $mPage - 1) * $this->cLimmit;

    $mNumPages = ceil($this->cNumRows / $this->cLimmit);

    if (FALSE !== strpos($this->cQuery, "GROUP"))
    {
      $mTmpQuery = explode("GROUP", $this->cQuery);
      $mQuery = $mTmpQuery[0] . " " . $mSession["Filters"] . " GROUP " . $mTmpQuery[1] . " " . $mSession["Sort"];
    }
    elseif (FALSE !== strpos($this->cQuery, "group"))
    {
      $mTmpQuery = explode("group", $this->cQuery);
      $mQuery = $mTmpQuery[0] . " " . $mSession["Filters"] . " GROUP " . $mTmpQuery[1] . " " . $mSession["Sort"];
    }
    else
      $mQuery = $this->cQuery . " " . $mSession["Filters"] . " " . $mSession["Sort"];

    $mQuery .= " LIMIT " . $mInit . ", " . $this->cLimmit;
    $this->cQueryGen = $mQuery;

    $mResults = DbHandler::GetALL($mQuery);

    //$this -> cSecurity -> SetSessionValue( $mSessionName, $mSession, FALSE );
    $_SESSION[$mSessionName] = $mSession;

    $this->cHtml = "<div class=\"span12 DlTable\">\n";

    //$this->cHtml = "<table class=\"table table-bordered span11\" id=\"tabla_cuerpo\" cellpadding=\"0\" cellspacing=\"0\" >\n";

    $this->cHtml .= $this->drawPager($mNumPages, $mPage);
    $this->cHtml .= $this->drawHeader($mSession);

    $mHtml = NULL;
    $mNumRow = 0;

    if (0 < count($mResults))
      foreach ($mResults as $mRow)
      {
        $mHtmlCol = NULL;
        for ($mVi = 0, $mStop = count($this->cHeader); $mVi < $mStop; $mVi++)
        {
          $mHeader = $this->cHeader[$mVi];
          $mHtmlCol .= isset( $mHeader["proper"]["RutImg"] ) ? "<div align=\"center\" " : "<div valign=\"top\" ";
          $mHtmlCol .= isset( $mHeader["proper"]["clClass"] ) ? 'class="span2x '.$mHeader["proper"]["clClass"].'"' : 'class="span2x clClass" ';
          $mHtmlCol .= isset( $mHeader["proper"]["clStyle"] ) ? "style=\"".$mHeader["proper"]["clStyle"]."\" >\n" : " >\n";

          $mHtmlCol .= "      <label ";
          $mHtmlCol .= isset($mHeader["proper"]["claClass"]) ? 'class="'.$mHeader["proper"]["claClass"].'"' : 'class="laClass" ';
          $mHtmlCol .= isset($mHeader["proper"]["claStyle"]) ? "style=\"". $mHeader["proper"]["claStyle"]."\" >" : " >";

          if (strpos($mHeader["proper"]["dbfield"], "."))
          {
            $mName = explode(".", $mHeader["proper"]["dbfield"]);
            $mName = $mName[1];
          }
          else
            $mName = $mHeader["proper"]["dbfield"];

          if (isset($mHeader["proper"]["RutImg"]))
          {
            if( $mRow[$mName]==(int)$mRow[$mName] )
            {
              $mHtmlCol .= "<img src=\"" . str_replace("xxx", $mRow[$mName], $mHeader["proper"]["RutImg"] ) . "\" align=\"middle\" /></label>\n";
            }
            else
            {
              $mAlt = isset($mHeader["proper"]["AltImg"]) ? "alt=\"" . $mHeader["proper"]["AltImg"] . "\"" : "alt=\"\"";
              $mHtmlCol .= "<img src=\"" . $mHeader["proper"]["RutImg"] . $mRow[$mName] . "\" align=\"middle\" " . $mAlt . " /></label>\n";
            }
          }
          else
          {
            $mHtmlCol .= strip_tags ( $mRow[$mName], '<span><ul><li><br><p><b>' ) . "</label>\n";
          }

          $mHtmlCol .= "      </div>\n";
          $mHeader = NULL;
        }

        if (NULL !== $this->cButtons)
        {
          $nNumButt = 0;

          $mHtmlCol .= "      <div ";
          $mHtmlCol .= isset($mHeader["proper"]["clClass"]) ? 'class="span2x btn-group '.$mHeader["proper"]["clClass"].'"' : 'class="span2x btn-group clClass" ';
          $mHtmlCol .= isset($mHeader["proper"]["clStyle"]) ? "style=\"".$mHeader["proper"]["clStyle"]."\" >\n" : " >\n";

          foreach ($this->cButtons as $mButton)
          {
            if (!array_key_exists("condition", $mButton["proper"]))
            {
              if (isset($mButton["proper"]["action"]))
                $mUrl = $mButton["proper"]["action"];
              else
                $mUrl = $this->cAction;

              if (NULL !== $this->cHiddens)
              {
                foreach ($this->cHiddens as $mHidden)
                {
                  if (FALSE !== strpos($mUrl, "?"))
                  {
                    if (isset($mHidden["options"]["label"]))
                      $mUrl .= "&" . $mHidden["options"]["label"] . "=";
                    else
                      $mUrl .= "&" . str_replace(".", "_", $mHidden["name"]) . "=";

                    $mTempName = $mHidden["options"]["field"];
                    $mUrl .= isset($mRow[$mTempName]) ? $mRow[$mTempName] : $mHidden["options"]["default"];
                  }
                  else
                  {
                    if (isset($mHidden["options"]["label"]))
                      $mUrl .= "&" . $mHidden["options"]["label"] . "=";
                    else
                      $mUrl .= "&" . str_replace(".", "_", $mHidden["name"]) . "=";

                    $mTempName = $mHidden["options"]["field"];
                    $mUrl .= isset($mRow[$mTempName]) ? $mRow[$mTempName] : $mHidden["options"]["default"];
                  }
                }
                $mUrl .= "&amp;iframe=true";

                $mHtmlCol .= "          <a ";
                if (isset($mButton["proper"]["onclick"]))
                {
                  $mHtmlCol .= "href=\"javascript:void(0);\" onclick=\"" . $mButton["proper"]["onclick"] . "\" ";
                }
                else if (isset($mButton["proper"]["confirm"]))
                {
                  $mHtmlCol .= "href=\"javascript:void(0);\" onclick=\"confirmRedirect('" . $mUrl . "', '" . $mButton["proper"]["confirm"] . "')\" ";
                }
                else
                {
                  $mHtmlCol .= "href=\"" . $mUrl . "\" ";
                }

                if (isset($mButton["proper"]["class"]))
                  $mHtmlCol .= "class=\"btn ".$mButton["proper"]["class"]."\" ";
                else
                  $mHtmlCol .= "class=\"btn\" ";

                $mHtmlCol .= " ><i class=\"icon-tasks\"></i> " . $mButton["label"] . "</a>\n";
              }
            }
            else
            {
              $mConditio = $mButton["proper"]["condition"];

              $mContinue = TRUE;

              if( isset( $mConditio["field"] ) )
              {
                if( array_key_exists( $mConditio["field"], $mRow ) )
                {
                  if( array_key_exists( "cond", $mConditio ) )
                  {
                    switch( $mConditio["cond"] )
                    {
                      case "!=":
                      {
                        if( $mRow[$mConditio["field"]] == $mConditio["value"] )
                        {
                          $mContinue = FALSE;
                        }
                        break;
                      }

                      case "=":
                      {
                        if( $mRow[$mConditio["field"]] != $mConditio["value"] )
                        {
                          $mContinue = FALSE;
                        }
                        break;
                      }
                    }
                  }
                  else
                  {
                    if( $mRow[$mConditio["field"]] != $mConditio["value"] )
                    {
                      $mContinue = FALSE;
                    }
                  }
                }
              }
              else
              {
                foreach( $mConditio as $mCondi )
                {
                  if( array_key_exists( $mCondi["field"], $mRow ) )
                  {
                    if( array_key_exists( "cond", $mCondi ) )
                    {
                      switch( $mCondi["cond"] )
                      {
                        case "!=":
                        {
                          if( $mRow[$mCondi["field"]] == $mCondi["value"] )
                          {
                            $mContinue = FALSE;
                          }
                          break;
                        }

                        case "=":
                        {
                          if( $mRow[$mCondi["field"]] != $mCondi["value"] )
                          {
                            $mContinue = FALSE;
                          }
                          break;
                        }
                      }
                    }
                    else
                    {
                      if( $mRow[$mCondi["field"]] != $mCondi["value"] )
                      {
                        $mContinue = FALSE;
                      }
                    }
                  }
                }
              }

              if( TRUE == $mContinue )
              {
                if (isset($mButton["proper"]["action"]))
                  $mUrl = $mButton["proper"]["action"];
                else
                  $mUrl = $this->cAction;

                if (NULL !== $this->cHiddens)
                {
                  foreach ($this->cHiddens as $mHidden)
                  {
                    if (FALSE !== strpos($mUrl, "?"))
                    {
                      if (isset($mHidden["options"]["label"]))
                        $mUrl .= "&" . $mHidden["options"]["label"] . "=";
                      else
                        $mUrl .= "&" . str_replace(".", "_", $mHidden["name"]) . "=";

                      $mTempName = $mHidden["options"]["field"];
                      $mUrl .= isset($mRow[$mTempName]) ? $mRow[$mTempName] : $mHidden["options"]["default"];
                    }
                    else
                    {
                      if (isset($mHidden["options"]["label"]))
                        $mUrl .= "&" . $mHidden["options"]["label"] . "=";
                      else
                        $mUrl .= "&" . str_replace(".", "_", $mHidden["name"]) . "=";

                      $mTempName = $mHidden["options"]["field"];
                      $mUrl .= isset($mRow[$mTempName]) ? $mRow[$mTempName] : $mHidden["options"]["default"];
                    }
                  }

                  $mUrl .= "&amp;iframe=true";
                  $mHtmlCol .= "          <a ";
                  if (isset($mButton["proper"]["onclick"]))
                  {
                    $mHtmlCol .= "href=\"javascript:void(0);\" onclick=\"" . $mButton["proper"]["onclick"] . "\" ";
                  }
                  else if (isset($mButton["proper"]["confirm"]))
                  {
                    $mHtmlCol .= "href=\"javascript:void(0);\" onclick=\"confirmRedirect('" . $mUrl . "', '" . $mButton["proper"]["confirm"] . "')\" ";
                  }
                  else
                  {
                    $mHtmlCol .= "href=\"" . $mUrl . "\" ";
                  }

                  if (isset($mButton["proper"]["class"]))
                  {
                    $mHtmlCol .= "class=\"btn " . $mButton["proper"]["class"] . "\" ";
                  }
                  else
                    $mHtmlCol .= "class=\"btn\" ";

                $mHtmlCol .= " ><i class=\"icon-tasks\"></i> " . $mButton["label"] . "</a>\n";
                }
              }
              //}
            }
          }

          $mHtmlCol .= "      </div>\n";
        }
        $mHtml .= "  <div class=\"row-fluid \">\n  " . stripcslashes($mHtmlCol) . "</div>\n";
        $mNumRow++;
      }
      else
      {
        $mColSpan = count($this->cHeader);
        if (NULL !== $this->cButtons)
        {
          $mNumButt = count($this->cButtons);
          (int) $mColSpan += (int) $mNumButt;
        }
        $mHtml .= "  <div class=\"row-fluid \">\n  <div class=\"span12 \"><center><label>No se encontraron registros</label></center></div></div>\n";
      }

      //$this->cHtml .= $mHtml . "</table> \n";
      $this->cHtml .= $mHtml . "</div> \n";

      if( $this->cDownloadResult )
      {
        $headers = array();
        foreach ( $this->cHeader as $mHeader )
        {
          $headers[] = $mHeader["label"];
        }
        $htmlDownload = '
          <form action="'.Link::Build("/index.php?descargar_reporte=TRUE").'" method="post" target="_blank" class="left">
            <input type="hidden" name="nombre" value="'.$this->cSessionName.'.xls"/>
            <input type="hidden" name="headers" value="'.implode(",", $headers).'"/>
            <input type="hidden" name="query" value="'.$this->cQueryGen.'"/>
            <input type="submit" value="Descargar reporte" class="button btn-dv" />
          </form>';
        $this->cHtml = '<br/>'.$htmlDownload.'<br/><br/>'.$this->cHtml;
      }

      return $this->cHtml;
    }

}

?>