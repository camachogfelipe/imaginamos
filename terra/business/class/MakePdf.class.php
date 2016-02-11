<?php
class MakePdf
{
  private $cCss    = NULL;
  private $cTitle  = NULL;

  private $cHeader = NULL;
  private $cBody   = NULL;
  private $cFooter = NULL;
  
  private $cDompdf = NULL;

  public function __construct( $mOptions = NULL )
  {
    require_once( SITE_ROOT."libs/dompdf/dompdf_config.inc.php" );

    $this -> cDompdf = new DOMPDF();
    /* */
    if( NULL !== $mOptions && "" != $mOptions )
    {
      if( isset( $mOptions["paper"] ) && isset( $mOptions["orientation"] ) )
        $this -> cDompdf -> set_paper ( $mOptions["paper"], $mOptions["orientation"] );
      elseif( isset( $mOptions["paper"] ) )
        $this -> cDompdf -> set_paper ( $mOptions["paper"] );
    }
    /* */
  }
  
  public function setCss( $mData = NULL )
  {
    if( NULL === $mData || "" == $mData )
      return FALSE;
    
    $this -> cCss = $mData;
  }
  
  public function setHeader( $mData = NULL )
  {
    if( NULL === $mData || "" == $mData )
      return FALSE;
    
    $this -> cHeader = $mData;
  }
  
  public function setTitle( $mData = NULL )
  {
    if( NULL === $mData || "" == $mData )
      return FALSE;
    
    $this -> cTitle = $mData;
  }
  
  public function setBody( $mData = NULL )
  {
    if( NULL === $mData || "" == $mData )
      return FALSE;
    
    $this -> cBody = $mData;
  }
  
  public function makeHeader( $mTitle = NULL )
  {
    $this -> setTitle( $mTitle );

    $this -> cHeader = "<table style=\"text-align: left; width: 100%;\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\">".
                         "<tr>".
                           "<td style=\"width:20px;\">".
                             //"<img src=\"http://localhost/allreps/images/logo_bkp.png\" height=\"100\" />".
                             "<img src=\"".SITE_ROOT."images/logo_bkp.png\" height=\"100\" />".
                           "</td>";
    
    if( NULL !== $this -> cTitle && "" != $this -> cTitle )
    {
      $this -> cHeader .=  "<td style=\"text-align:center\">".$this -> cTitle."</td>";
    }

    $this -> cHeader .=  "</tr>".
                       "</table>";
  }
  
  public function writePdf( $mFileName = "miArchivo.pdf", $mOptions = NULL )
  {
    /* */
    $mDocument = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">".
                 "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">".
                 "<head>";
    
    if( NULL !== $this -> cCss && "" != $this -> cCss )
    {
      if( is_array( $this -> cCss ) )
      {
        foreach( $this -> cCss as $item )
        {
          $mDocument .= "<link href='".$item."' rel='stylesheet' type='text/css' />";
        }
      }
      else
      {
        $mDocument .= "<link href='".$this -> cCss."' rel='stylesheet' type='text/css' />";
      }
    }

    $mDocument .= "</head>".
                  "<body>";

    if( is_array( $this -> cBody ) )
    {
      for( $i = 0, $mTot = count( $this -> cBody ); $i < $mTot; $i++ )
      {
        $mDocument .= "<div class=\"pdf_page\" style=\"text-align: left; width: 100%;\">";
    
          if( NULL !== $this -> cHeader && "" != $this -> cHeader )
            $mDocument .= "<div class=\"pdf_header\" style=\"text-align: left; width: 100%;\">".$this -> cHeader."</div>";

          $mDocument .= "<div class=\"pdf_body\" style=\"text-align: left; width: 100%;\">".$this -> cBody[$i]."</div>";

          if( NULL !== $this -> cFooter && "" != $this -> cFooter )
            $mDocument .= "<div class=\"pdf_footer\" style=\"text-align: left; width: 100%;\">".$this -> cFooter."</div>";
        
        $mDocument .= "</div>";
        
        if( ($i+1) != $mTot )
          $mDocument .= "<div style='page-break-before: always;'></div>";
      }
    }
    else
    {
      $mDocument .= "<div class=\"pdf_page\" style=\"text-align: left; width:100%; \">";

        if( NULL !== $this -> cHeader && "" != $this -> cHeader )
          $mDocument .= "<div class=\"pdf_header\" style=\"text-align: left; width:100%; \">".$this -> cHeader."</div>";
        $mDocument .= "<div class=\"pdf_body\" style=\"text-align: left; border:0px solid #333; width:100%; \">".$this -> cBody."</div>";

        if( NULL !== $this -> cFooter && "" != $this -> cFooter )
          $mDocument .= "<div class=\"pdf_footer\" style=\"text-align: left;\">".$this -> cFooter."</div>";
        
      $mDocument .= "</div>";
    }

    $mDocument .= "</body></html>";
    //echo $mDocument;

    /* */
    $this -> cDompdf -> load_html( $mDocument );
    $this -> cDompdf -> render();
    
    if( isset( $mOptions["view"] ) )
    {
      $this -> cDompdf -> stream( $mFileName, array("Attachment" => false) );
    }
    elseif( isset( $mOptions["disk"] ) )
    {
      $pdf = $this -> cDompdf -> output();
      file_put_contents( FILES_DIR.$mOptions["disk"].$mFileName, $pdf );
    }
    else
    {
      $this -> cDompdf -> stream( $mFileName );
    }
  }
}

?>
