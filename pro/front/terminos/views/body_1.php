<script>
  $(document).ready(function(){
    $('div[name^="oculto"]').hide();
  });  

</script>

<div class="bgEncabezado">
  <div class="conEncabezado">
    <div id="txSeccion">
      <div class="encabezado-tit">FAQ</div>
      <div class="encabezado-subtit">Nombre de la categoría de preguntas</div>
    </div>
  </div>
</div>
<div class="contenido">


  <div class="clear"></div>
  <div class="faq-list1">
    <ul>
      <?php
      foreach ($faqs as $val) {
        //  echo '<li>' . $val->titulo_faq . '</li>';
      }
      ?>     
    </ul>
  </div>
  <?php
  foreach ($faqs as $val1) {
    // echo '<li>' . $val1->respuesta_faq . '</li>';
    echo ' 
      <div class="cat-faq-tit"  style="margin-left: -37px;margin-top:8px;">
        <a  href="#" onclick="mostrar(' . $val1->id . ');" id="cambios' . $val1->id . '">' . $val1->titulo_faq . '</a>
      </div>
    <div class="inshaka-txt" style="margin-top: -9px;" name="oculto" id="valor' . $val1->id . '" >' . nl2br(utf8_encode($val1->respuesta_faq)) . '</div>';
  }
  ?> 

  <div class="clr"></div>


</div>
<script type="text/javascript">
  function mostrar(ids){
     $('div[name^="oculto"]').hide(700);
    $('#valor'+ids).show(700);
  }
</script>