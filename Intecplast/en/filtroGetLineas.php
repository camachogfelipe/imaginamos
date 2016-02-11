<?php
$clase_id = $_GET["clase"];
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

        Line

      </div>

    </div>

    <div class="content_scroll scroll1">
      
<?php if ($totallinea > 0): ?>

                  <input name="linea" type="radio" value="" onClick="todoLineas()" checked/>Todo<br/>

  <?php foreach ($lineas as $linea): ?>


                  <input name="linea" type="radio" value="<?php echo $linea->getid() ?>" onClick="getSublineas()"/> <?php echo $linea->getnombre_i() ?><br/>
                  
  <?php endforeach; ?>

<?php endif; ?>

              <input style="visibility:hidden;" name="linea" type="radio" value=""/>

    </div>

    <br/>

  </div>

</form>

<div id="footcolprods1">

  <div id="bt_borrar">

  <script type="text/javascript">
      
      function limpiaLinea(){
        $('input[name=linea]').attr('checked',false);
        getLineas();
      }

      function todoLineas(){
        getLineas();
      }

  </script>

    <a href="javascript:void(0)" onClick="limpiaLinea()">ERASE</a>

  </div>

</div>

<script>
  $(".scroll1").mCustomScrollbar();
</script>