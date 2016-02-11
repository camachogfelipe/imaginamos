<?php
$clase_id=$_GET["clase"];
$linea_id=$_GET["linea"];
$sublinea_id=$_GET["sublinea"];
$categoria_id=$_GET["categoria"];

if ($clase_id==NULL) {
  exit();
}
    include_once './../php/clases.php';

$tamanoDAO = new tamanoDAO(); 
$tamano = new tamano(); 

else if ($sublinea_id!=0) {
  $tamanos= $tamanoDAO->getByClase($clase_id." AND productos.sublinea_id=".$sublinea_id);
}

else {
  $tamanos= $tamanoDAO->getByClase($clase_id);
  
}
$totaltamano = $tamanoDAO->total();

if ($tamanos==NULL) {
              error_reporting(0);
            ini_set(display_errors, 0);       
}
else {

?>
<form name="frmTamano" class="tamano">


  <div id="contcols2">

    <div id="titcolopciones2">

      <div id="textotituloscolop">
      SIZE
      </div>

    </div>
    <div id="centcolprods">

      <?php if($totaltamano>0): ?>
      <?php foreach ($tamanos as $tamano): ?>

        <input name="tamano" type="radio" value="<?php echo $tamano->getid() ?>" /> <?php echo $tamano->getnombre_i() ?><br/>

      <?php endforeach; ?>
      <?php endif; ?>
        <input style="visibility:hidden;" name="tamano" type="radio" value=""/>

    </div>
    <br/>
  </div>

  <div id="footcolprods2">
    <div id="bt_borrar">
      <a href="#nogo">ERASE</a>
    </div>
  </div>
</form>
<?php } ?>