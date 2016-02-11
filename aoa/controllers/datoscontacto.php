<?php session_start();
include( '../include/define.php' );
include( '../include/config.php' );
include( '../business/function/plGeneral.fnc.php' );
$kind = $_GET['kind'];
switch ($kind){
    case 1:
        $sqlQuery = "SELECT * FROM aseguradoras WHERE servicios_id =".$_GET['id'];
        $aseguradoras = DbHandler::GetAll($sqlQuery);
        $contador = count($aseguradoras);
        $html='';
        for($i=0; $i<$contador; $i++):
            $sqlQuery2 = "SELECT datos_de_contacto_1 AS d1, datos_de_contacto_2 AS d2 FROM condiciones_de_servicio WHERE aseguradoras_id =".$aseguradoras[$i]['id'];
            $datos = DbHandler::GetRow($sqlQuery2);
            $html.='<li>
        <h3>'.$aseguradoras[$i]['titulo'].'</h3>
        <h4>'.$datos['d1'].'</h4>
        <h4>'.$datos['d2'].'</h4>
      </li>';
        endfor;
        break;
    
}
echo $html;
?>
