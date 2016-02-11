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

$capacidadDAO = new capacidadDAO(); 
$capacidad = new capacidad(); 

if($sublinea_id!=0 && $material_id!=0 && $forma_id!=0) {
  $capacidades= $capacidadDAO->getByClase($clase_id." AND productos.sublinea_id=".$sublinea_id."  AND productos.material_id=".$material_id." AND productos.forma_id=".$forma_id);
}

else if($sublinea_id!=0 && $material_id!=0) {
  $capacidades= $capacidadDAO->getByClase($clase_id." AND productos.sublinea_id=".$sublinea_id." AND productos.material_id=".$material_id);
}

else if ($sublinea_id!=0) {
  $capacidades= $capacidadDAO->getByClase($clase_id." AND productos.sublinea_id=".$sublinea_id);
}

else {
  $capacidades= $capacidadDAO->getByClase($clase_id);
  
}
$totalcapacidad = $capacidadDAO->total();

if ($capacidades==NULL) {
              error_reporting(0);
            ini_set(display_errors, 0);       
}
else {

?>
<form name="frmCapacidad" class="capacidad">


  <div id="contcols2">

    <div id="titcolopciones2">

      <div id="textotituloscolop">
      Capacity
      </div>

    </div>

    <div class="content_scroll scroll6">


      <?php if($totalcapacidad>0): ?>

                  <input name="capacidad" type="radio" value="" onClick="todoCapacidades()" checked/>Todo<br/>

      <?php foreach ($capacidades as $capacidad): ?>

                  <input name="capacidad" type="radio" value="<?php echo $capacidad->getId() ?>"  onClick="getBoca()"/> <?php echo $capacidad->getCapacidad_rango() ?><br/>

      <?php endforeach; ?>
      <?php endif; ?>
        <input style="visibility:hidden;" name="capacidad" type="radio" value=""/>

    </div>
    <br/>
  </div>

  <div id="footcolprods2">
    <div id="bt_borrar">
      <a href="javascript:void(0)" onClick="limpiaCapacidad()">ERASE</a>
    </div>
  </div>
</form>
<?php } ?>