<?php session_start();
include( '../include/define.php' );
include( '../include/config.php' );
include( '../business/function/plGeneral.fnc.php' );

if(isset($_GET['kind'])){
    $kind = $_GET['kind'];
}
switch ($kind){
    case 1:
         $html='';
   if(isset($_GET['id'])){
    $aseguradoras = DbHandler::GetAll("SELECT * FROM aseguradoras WHERE servicios_id =".$_GET['id']);
    $contador = count($aseguradoras);
   }
   if($contador>0){
   for($i=0; $i<$contador; $i++):  
    $html.='<a onclick="getcondiciones('. $aseguradoras[$i]['id'] .')" href="javascript:void(0)">'. $aseguradoras[$i]['titulo'] .'</a>';
      endfor;
   }else{
    $html.='<a  id="servcond'. $_GET['id'] .'" onclick="getcondicionesserv('. $_GET['id'] .')" href="javascript:void(0)"></a>';   
    $html.='<script>$("servcond'. $_GET['id'] .'").hide(); setTimeout(function(){$("#servcond'. $_GET['id'] .'").click()}, 200);  </script>';   
   }
      
      echo $html;
        break;
    case 2:
        $html='';
        if(isset($_GET['id'])){
            $condiciones = DbHandler::GetRow("SELECT * FROM condiciones_de_servicio WHERE aseguradoras_id =".$_GET['id']);
            $html.='<h3>'.  utf8_encode($condiciones['titulo']).'</h3>
      <p>'.  utf8_encode($condiciones['texto_descriptivo']).'</p>
      <div class="clearfix">
        <div class="content_datos_seguro left">
          <h4>Datos de contacto</h4>
          <ul>
            <li>'.  utf8_encode($condiciones['datos_de_contacto_1']).'</li>
            <li>'.  utf8_encode($condiciones['datos_de_contacto_2']).'</li>
          </ul>
        </div>
        <a onclick="getdocumentacion('.utf8_encode($condiciones['id']).')"  href="javascript:abrirDocumentos();" class="btn_documentos right">Documentaci&oacute;n requerida</a>
      </div>';
        }
        echo $html;
        break;
    case 3:
        if(isset($_GET['id'])){
           $condiciones = DbHandler::GetRow("SELECT * FROM condiciones_de_servicio WHERE id =".$_GET['id']);
           $html=utf8_encode($condiciones['texto_documentacion_requerida']);
           echo $html;
        }
        
        break;
    case 4:
        $html='';
        if(isset($_GET['id'])){
            $condiciones = DbHandler::GetRow("SELECT * FROM condiciones_del_servicio_default WHERE servicios_id =".$_GET['id']);
            $html.='<h3></h3>
      <p>'.  utf8_encode($condiciones['texto_descriptivo']).'</p>
      <div class="clearfix">
        <div class="content_datos_seguro left">
          <h4>Datos de contacto</h4>
          <ul>
            <li>'.  utf8_encode($condiciones['datos_de_contacto_1']).'</li>
            <li>'.  utf8_encode($condiciones['datos_de_contacto_2']).'</li>
          </ul>
        </div>
        <a onclick="getdocumentacion2('.utf8_encode($condiciones['id']).')"  href="javascript:abrirDocumentos();" class="btn_documentos right">Documentaci&oacute;n requerida</a>
      </div>';
        }
        echo $html;
        break;
    case 5:
        if(isset($_GET['id'])){
           $condiciones = DbHandler::GetRow("SELECT * FROM condiciones_del_servicio_default WHERE id =".$_GET['id']);
           $html=utf8_encode($condiciones['texto_documentacion_requerida']);
           echo $html;
        }
        break;
}

      ?>