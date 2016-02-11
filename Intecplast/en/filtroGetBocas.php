<?php
$clase_id=$_GET["clase"];
$linea_id=$_GET["linea"];
$sublinea_id=$_GET["sublinea"];
$categoria_id=$_GET["categoria"];
$material_id=$_GET["material"];
$forma_id=$_GET["forma"];

if ($clase_id==NULL) {
  exit();
}
    include_once './../php/clases.php';

$bocaDAO = new bocaDAO(); 
$boca = new boca(); 

if($sublinea_id!=0 && $material_id!=0 && $forma_id!=0) {
  $bocas= $bocaDAO->getByClase($clase_id." AND productos.sublinea_id=".$sublinea_id."  AND productos.material_id=".$material_id." AND productos.forma_id=".$forma_id);
}

else if($sublinea_id!=0  && $material_id!=0) {
  $bocas= $bocaDAO->getByClase($clase_id." AND productos.sublinea_id=".$sublinea_id."  AND productos.material_id=".$material_id);
}

else if ($sublinea_id!=0) {
  $bocas= $bocaDAO->getByClase($clase_id." AND productos.sublinea_id=".$sublinea_id);
}

else {
  $bocas= $bocaDAO->getByClase($clase_id);
  
}
$totalboca = $bocaDAO->total();

if ($bocas==NULL) {
              error_reporting(0);
            ini_set(display_errors, 0);       
}
else {

?>

<form name="frmBoca" class="boca">


  <div id="contcols">

    <div id="titcolopciones1">

      <div id="textotituloscolop">
      Pit
      </div>

    </div>

    <div class="content_scroll scroll5">


      <?php if($totalboca>0): ?>

                  <input name="boca" type="radio" value="" onClick="todoBocas()" checked/>Todo<br/>

      <?php foreach ($bocas as $boca): ?>

                  <input name="boca" type="radio" value="<?php echo $boca->getId() ?>" onClick="getGaleria()"/> <?php echo $boca->getBoca() ?><br/>

      <?php endforeach; ?>
      <?php endif; ?>
        <input style="visibility:hidden;" name="boca" type="radio" value=""/>
    </div>
    <br/>
  </div>

  <div id="footcolprods1">
    <div id="bt_borrar">
      <a href="javascript:void(0)" onClick="limpiaBoca()">ERASE</a>
    </div>
  </div>
</form>
<?php } ?>