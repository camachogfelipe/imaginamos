<script>
  $(document).ready(function(){
    $('div[name^="oculto"]').hide();
  });  

</script>

<div class="bgEncabezado">
  <div class="conEncabezado">
    <div id="txSeccion">
      <div class="encabezado-tit">FAQ</div>
      <div class="encabezado-subtit">&nbsp;</div>
    </div>
  </div>
</div>
<div class="contenido">
  <div class="clear"></div>
 <?php echo form_open_multipart('entertainment/save'); ?>
  <div class="area-cont2">
    <textarea style="resize: none;" name="presentacion" class="area2" placeholder="Ingresa aquí tu pregunta y el grupo de INSHAKA la responderá lo antes posible"></textarea>
  </div>
  <div class="clear"></div>
  <input class="bot-publicar" type="submit" value="Enviar" style="margin-top:10px;margin-right:37px;">
  </form>
  <!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
	<a class="addthis_button_tweet"></a>
	</div>
	<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-510f5c595751784a"></script>
	<!-- AddThis Button END -->
  <div class="faq-list1">
    <ul>
    </ul>
  </div>
  <?php
  if (!empty($faqs)) {
    foreach ($faqs as $val1) {
      echo ' 
      <div class="cat-faq-tit"  style="margin-left: -37px;margin-top:8px;">
        <a  href="#" onclick="mostrar(' . $val1->id . ');" id="cambios' . $val1->id . '">' . $val1->titulo_faq . '</a>
      </div>
    <div class="inshaka-txt" style="margin-top: -9px;" name="oculto" id="valor' . $val1->id . '" >' . nl2br(utf8_encode($val1->respuesta_faq)) . '</div>';
    }
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