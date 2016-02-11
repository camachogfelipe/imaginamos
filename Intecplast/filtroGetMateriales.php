<?php
$clase_id=$_GET["clase"];
$linea_id=$_GET["linea"];
$sublinea_id=$_GET["sublinea"];
$categoria_id=$_GET["categoria"];



if ($clase_id==NULL) {
  exit();
}
    include_once './php/clases.php';

$materialDAO = new materialDAO(); 
$material = new material(); 

if ($sublinea_id!=0) {
  $materiales= $materialDAO->getByClase($clase_id." AND productos.sublinea_id=".$sublinea_id);
}

else {
  $materiales= $materialDAO->getByClase($clase_id);
  
}
$totalmaterial = $materialDAO->total();

if ($materiales==NULL) {
              error_reporting(0);
            ini_set(display_errors, 0);       
}
else {

?>
<form name="frmMaterial" class="material">


  <div id="contcols2">

    <div id="titcolopciones2">

      <div id="textotituloscolop">
      Material
      </div>

    </div>

    <div class="content_scroll scroll4">


      <?php if($totalmaterial>0): ?>

                  <input name="material" type="radio" value="" onClick="todoMateriales()" checked/>Todo<br/>

      <?php foreach ($materiales as $material): ?>

                  <input name="material" type="radio" value="<?php echo $material->getid() ?>" onClick="getFormas()"/> <?php echo $material->getnombre_e() ?><br/>

      <?php endforeach; ?>
      <?php endif; ?>
        <input style="visibility:hidden;" name="material" type="radio" value=""/>

    </div>
    <br/>
  </div>

  <div id="footcolprods2">
    <div id="bt_borrar">
      <a href="javascript:void(0)" onClick="limpiaMaterial()">BORRAR</a>
    </div>
  </div>
</form>
<?php } ?>