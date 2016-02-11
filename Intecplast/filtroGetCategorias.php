<?php
$clase_id=$_GET["clase"];
$linea_id=$_GET["linea"];
$sublinea_id=$_GET["sublinea"];

if ($clase_id==NULL) {
  exit();
}

    include_once './php/clases.php';

$categoriaDAO = new categoriaDAO(); 
$categoria = new categoria(); 
if ($linea_id!=0 && $sublinea_id!=0) {
  $categorias = $categoriaDAO->getByLineaSublinea($linea_id,$sublinea_id,$clase_id); 
}
else if ($linea_id!=0) {
  $categorias = $categoriaDAO->getByLinea($linea_id,$clase_id); 
    
}
else {
  $categorias = $categoriaDAO->getByClase($clase_id);
  
}
$totalcategoria = $categoriaDAO->total();

if ($categorias==NULL) {
              error_reporting(0);
            ini_set(display_errors, 0);       
}
else {

?>
<form name="frmCategoria" class="categoria">


  <div id="contcols">

    <div id="titcolopciones1">

      <div id="textotituloscolop">
      categor&iacute;a
      </div>

    </div>

    <div class="content_scroll scroll3">

      <?php if($totalcategoria>0): ?>

                  <input name="categoria" type="radio" value="" onClick="todoCategorias()" checked/>Todo<br/>

      <?php foreach ($categorias as $categoria): ?>

                  <input name="categoria" type="radio" value="<?php echo $categoria->getid() ?>" onClick="getMateriales()"/> <?php echo $categoria->getnombre_e() ?><br/>

      <?php endforeach; ?>
      <?php endif; ?>
        <input style="visibility:hidden;" name="categoria" type="radio" value=""/>
    
    </div>
    <br/>
  </div>

  <div id="footcolprods1">
    <div id="bt_borrar">
      <a href="javascript:void(0)" onClick="limpiaCategoria()">BORRAR</a>
    </div>
  </div>
</form>
<?php } ?>
