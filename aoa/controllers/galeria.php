<?php session_start();
include( '../include/define.php' );
include( '../include/config.php' );
include( '../business/function/plGeneral.fnc.php' );
$dbgaleria = new Dbgaleria_de_fotos();
if(isset($_GET['id'])&& !empty($_GET['id'])){
    $id = $_GET['id'];
    $galeria = $dbgaleria->getByPk($id);
}
$html='';
$html.='<div class="title_serv">
     <h3>'.utf8_encode($galeria['titulo']).'</h3>
   </div>
   <div class="clearfix">
     <img src="img/galeria_de_fotos/'. str_replace("original","redimension",$galeria["imagen"]).'?'.substr(md5(uniqid(rand())), 0, 6).'" class="left img_detalle" width="330" height="260" />
     <div class="texto_detalle right scroll-pane">
       <p>'.utf8_encode($galeria['texto']).'</p>
     </div>
   </div>';

echo $html;
?>