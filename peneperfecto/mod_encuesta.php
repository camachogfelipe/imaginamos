<?
    include_once './php/clases.php';
    
    $encuestaDAO = new encuestaDAO();
    $encuesta = $encuestaDAO->getById(1);
    
    $encuestaresDAO = new encuestaresDAO();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css" />
</head>

<body><div id="envmodencuestafancy">
          <div id="tit_encuesta">Encuesta</div>
          <div id="envencuesta">
              <div id="txt_encuesta"><?=$encuesta->getpregunta() ?></div>
            <div id="opciones_encuesta">
                <table style="text-align: left; width: 200px;" width="100%" ><tr>
                        
                    
                        <td><div style="float: left; padding-right: 3px;"><?=$encuesta->geto1() ?></div><div style="background-color: #004F8E; float: left; width: <?=(((($encuestaresDAO->totalo(1)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 20px">&nbsp;</div></td>
                    </tr>
                    <tr>
                        <td><div style="float: left; padding-right: 3px;"><?=$encuesta->geto2() ?></div><div style="background-color: #004F8E; float: left; width: <?=(((($encuestaresDAO->totalo(2)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 20px">&nbsp;</div></td>
                    </tr>
                    <tr>  
                        <td><div style="float: left; padding-right: 3px;"><?=$encuesta->geto3() ?></div><div style="background-color: #004F8E; float: left; width: <?=(((($encuestaresDAO->totalo(3)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 20px">&nbsp;</div></td>
                      </tr>
                    <tr>
                        <td><div style="float: left; padding-right: 3px;"><?=$encuesta->geto4() ?></div><div style="background-color: #004F8E; float: left; width: <?=(((($encuestaresDAO->totalo(4)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 20px">&nbsp;</div></td>
                      </tr>
                </table>
            </div>
            
          </div>
		  
		  
		  </div><div id="envbtencuesta2">
		  
		   <div id="bregen"><a href="index.php" target="_top"></a></div>
		  <div id="bresult"><a href="testimonios.php" target="_top"></a></div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  </div>
</body>
</html>
