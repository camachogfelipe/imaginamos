<?php
// error_reporting(E_ALL);
// ini_set('display_errors','1');
include( '../include/define.php' );
include( '../include/config.php' );
include( '../business/function/plGeneral.fnc.php' );
$html = '';
$html .= '
    <option value="">Ciudad</option>
    ';
$code = $_GET['id'];
$cities = DbHandler::GetAll("SELECT Name FROM city WHERE CountryCode = '$code'");
for($i=0, $count=count($cities); $i<$count; $i++ ):
    $html.='
        <option value="'.  utf8_encode($cities[$i]['Name']).'">'.  utf8_encode($cities[$i]['Name']).'</option>
        ';
endfor;
    
echo $html;
?>
