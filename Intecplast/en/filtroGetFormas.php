<?php
$clase_id=$_GET["clase"];
$linea_id=$_GET["linea"];
$sublinea_id=$_GET["sublinea"];
$categoria_id=$_GET["categoria"];
$material_id=$_GET["material"];


if ($clase_id==NULL) {
  exit();
}
    include_once './../php/clases.php';

$formaDAO = new formaDAO(); 
$forma = new forma(); 
//$formas = $formaDAO->gets();
if($sublinea_id!=0 && $material_id!=0) {
  $formas= $formaDAO->getByClase($clase_id." AND productos.sublinea_id=".$sublinea_id." AND productos.material_id=".$material_id);
}

else if ($sublinea_id!=0) {
  $formas= $formaDAO->getByClase($clase_id." AND productos.sublinea_id=".$sublinea_id);
}

else {
  $formas= $formaDAO->getByClase($clase_id);
  
}
$totalforma = $formaDAO->total();

if ($formas==NULL) {
              error_reporting(0);
            ini_set(display_errors, 0);       
}
else {

?>
<form name="frmForma" class="forma">


  <div id="contcols">

    <div id="titcolopciones1">

      <div id="textotituloscolop">
      Form
      </div>

    </div>

    <div class="content_scroll scroll5">


      <?php if($totalforma>0): ?>

                  <input name="forma" type="radio" value="" onClick="todoFormas()" checked/>Todo<br/>

      <?php foreach ($formas as $forma): ?>

                  <input name="forma" type="radio" value="<?php echo $forma->getid() ?>" onClick="getCapacidad()"/> <?php echo $forma->getnombre_i() ?><br/>

      <?php endforeach; ?>
      <?php endif; ?>
        <input style="visibility:hidden;" name="forma" type="radio" value=""/>
    </div>
    <br/>
  </div>

  <div id="footcolprods1">
    <div id="bt_borrar">
      <a href="javascript:void(0)" onClick="limpiaForma()">ERASE</a>
    </div>
  </div>
</form>
<?php } ?>