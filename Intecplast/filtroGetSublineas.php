<?php
$clase_id=$_GET["clase"];
$linea_id=$_GET["linea"];

if ($clase_id==NULL) {
  exit();
}


    include_once './php/clases.php';

$sublineaDAO = new sublineaDAO(); 
$sublinea = new sublinea();
if ($linea_id != 0) {
$sublineas = $sublineaDAO->getByLinea($linea_id,$clase_id);
  
}else{
  $sublineas = $sublineaDAO->gets($clase_id);
  
}
$totalsublinea = $sublineaDAO->total();

if ($sublineas==NULL) {
              //error_reporting(0);
            //ini_set(display_errors, 0);
}
else {

?>

<form name="frmSublinea" class="sublinea">

  <div id="contcols2">

    <div id="titcolopciones2">

      <div id="textotituloscolop">
      SUBLINEA
      </div>

    </div>
    
    <div class="content_scroll scroll2">

        <?php if($totalsublinea>0): ?>
                  
                  <input name="sublinea" type="radio" value="" onClick="todoSublineas()" checked/>Todo<br/>
                         
        <?php foreach ($sublineas as $sublinea): ?>

                  <input name="sublinea" type="radio" value="<?php echo $sublinea->getid() ?>" onClick="getMateriales()"/> <?php echo $sublinea->getnombre_e() ?><br/>
          
        <?php endforeach; ?>
        <?php endif; ?>

          <input style="visibility:hidden;" name="sublinea" type="radio" value=""/>
      
    </div>
    <br/>
  </div>


  <div id="footcolprods2">
    <div id="bt_borrar">
      <a href="javascript:void(0)" onClick="limpiaSublinea()">BORRAR</a>
    </div>
  </div>
 </form> 
<?php } ?>