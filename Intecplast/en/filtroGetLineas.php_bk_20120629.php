<?php
$clase_id=$_GET["clase"];
    include_once './../php/clases.php';

$lineaDAO = new lineaDAO(); 
$linea = new linea(); 
$lineas = $lineaDAO->getByClase($clase_id); 
$totallinea = $lineaDAO->total();

?>
<form name="frmLinea" class="linea">

    <div id="contcols">
      <div id="titcolopciones1">
        <div id="textotituloscolop">
          LINEA
        </div>
      </div>

      <div id="centcolprods">
      <div id="mcs_container">
      <?php if($totallinea>0): ?>
      <?php foreach ($lineas as $linea): ?>

        <input name="linea" type="radio" value="<?php echo $linea->getid() ?>" onClick="getSublineas()"/> <?php echo $linea->getnombre_e() ?><br/>
        <input name="linea" type="radio" value="<?php echo $linea->getid() ?>" onClick="getSublineas()"/> <?php echo $linea->getnombre_e() ?><br/>
        <input name="linea" type="radio" value="<?php echo $linea->getid() ?>" onClick="getSublineas()"/> <?php echo $linea->getnombre_e() ?><br/>
        <input name="linea" type="radio" value="<?php echo $linea->getid() ?>" onClick="getSublineas()"/> <?php echo $linea->getnombre_e() ?><br/>
        <input name="linea" type="radio" value="<?php echo $linea->getid() ?>" onClick="getSublineas()"/> <?php echo $linea->getnombre_e() ?><br/>
        <input name="linea" type="radio" value="<?php echo $linea->getid() ?>" onClick="getSublineas()"/> <?php echo $linea->getnombre_e() ?><br/>

      <?php endforeach; ?>
      <?php endif; ?>
           
              <input style="visibility:hidden;" name="linea" type="radio" value=""/>



      </div>
      </div>
      
  <br/>

  </div>
</form>
  <div id="footcolprods1">
    <div id="bt_borrar">
      <a href="javascript:limpiaLinea()">BORRAR</a>
    </div>
  </div>

<script>

function mCustomScrollbarsOp1(){

  /* 

  malihu custom scrollbar function parameters: 

  1) scroll type (values: "vertical" or "horizontal")

  2) scroll easing amount (0 for no easing) 

  3) scroll easing type 

  4) extra bottom scrolling space for vertical scroll type only (minimum value: 1)

  5) scrollbar height/width adjustment (values: "auto" or "fixed")

  6) mouse-wheel support (values: "yes" or "no")

  7) scrolling via buttons support (values: "yes" or "no")

  8) buttons scrolling speed (values: 1-20, 1 being the slowest)

  */

  $("#opcion1").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15); 

}



/* function to fix the -10000 pixel limit of jquery.animate */

$.fx.prototype.cur = function(){

    if ( this.elem[this.prop] != null && (!this.elem.style || this.elem.style[this.prop] == null) ) {

      return this.elem[ this.prop ];

    }

    var r = parseFloat( jQuery.css( this.elem, this.prop ) );

    return typeof r == 'undefined' ? 0 : r;

}
  mCustomScrollbarsOp1();


</script>