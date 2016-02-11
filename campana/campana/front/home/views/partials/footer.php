

<div class="footer_desplegable">
  <a href="#" class="bt_headerdesplegable"></a>
  <div class="cont_940 contenidos_footer clearfix">
    <div class="grilla235 cont_seccionesfooter inline">
      <img src="img/iconos/iconos_secciones/mensaje.png" alt="">
      <p> <span><a href="mailto:hola@lacampana.co"><?php if(!empty($datos['footer']->email)) echo $datos['footer']->email; ?></a></span></p>
    </div>
    <div class="grilla235 cont_seccionesfooter inline">
      <img src="img/iconos/iconos_secciones/home_footer.png" alt="">
      <p><?php if(!empty($datos['footer']->direccion)) echo $datos['footer']->direccion; ?></p>
    </div>
    <div class="grilla235 cont_seccionesfooter inline">
      <img src="img/iconos/iconos_secciones/celular.png" alt="">
      <p> <span><?php if(!empty($datos['footer']->telefono)) echo $datos['footer']->telefono; ?></span></p>
    </div>
    <div class="grilla235 cont_seccionesfooter inline redes_footer">
      <a href="https://twitter.com/lacampana_acero"><img src="img/iconos/redes_footer/twiter.png" alt=""></a>
      <a href="http://www.facebook.com/pages/la-campana/151565408220649"><img src="img/iconos/redes_footer/face.png" alt=""></a>
      <a href="http://pinterest.com/lacampanaaceros/"><img src="img/iconos/redes_footer/p_red.png" alt=""></a>
      <a href="https://plus.google.com/u/0/112856535283529764048/posts"><img src="img/iconos/redes_footer/google+.png" alt=""></a>
      <a href="http://www.youtube.com/user/lacampanaaceros"><img src="img/iconos/redes_footer/youtube_red.png" alt=""></a>
      <a href="http://www.linkedin.com/company/la-campana-servicios-de-acero-s-a-?trk=hb_tab_compy_id_2327778"><img src="img/iconos/redes_footer/linkedin.png" alt=""></a>
    </div>
  </div>
</div>

<div class="footer_abajo">
    <div class="footer2">
      <div class="footer_cliente inline">
        <p>© 2013 <span>La Campana</span>  - Todos los derechos reservados - Prohibida su reproducción parcial o total </p>
      </div>
      <div class="footer-autor inline">
        <span id="ahorranito2"></span>
        <a href="http://www.imaginamos.com" target="_blank">Diseño Web: </a>
        <a href="http://www.imaginamos.com" target="_blank">imagin<span>a</span>mos.com</a>
      </div>
    </div> <!-- footer2 -->
</div>

<!-- footer -->

 <!-- Scripts -->
 <script src="js/lib/jquery-1.8.3.min.js"></script>
 <!-- RESIZE 
  <script type="text/javascript" src="js/lib/resize/jquery.ba-resize.js"></script> -->

 <!-- Estilizar
================================================== -->
  <script type="text/javascript" src="js/lib/dd/jquery.dd.js"></script>

   <!-- SCROLL -->
  <script type="text/javascript" src="js/lib/estilizar/jscrollpane/js/jquery.jscrollpane.min.js"></script>

  
  <!-- Easing -->
  <script src="js/lib/parallax/jquery.easing.1.3.js"></script>
  <script src="js/lib/parallax/jquery.mousewheel.js"></script>

  <!-- Bootstrap
  ================================================== -->
  <script src="js/lib/bootstrap/js/bootstrap-transition.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-alert.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-modal.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-dropdown.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-scrollspy.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-tab.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-tooltip.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-popover.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-button.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-collapse.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-carousel.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap-typeahead.js"></script> 
  <script src="js/lib/bootstrap/js/bootstrap-fileupload.js"></script> 


       <!-- Isotopo
  ================================================== -->
  <script src="js/lib/isotope/jquery.isotope.js"></script>


  <!-- Fancybox
================================================== -->

  <script type="text/javascript" src="js/lib/source/jquery.fancybox.js"></script>

  <!-- Add Button helper (this is optional) -->
  <script type="text/javascript" src="js/lib/source/helpers/jquery.fancybox-buttons.js"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <script type="text/javascript" src="js/lib/source/helpers/jquery.fancybox-thumbs.js"></script>

  <!-- Media (this is optional) -->
  <script type="text/javascript" src="js/lib/source/helpers/jquery.fancybox-media.js"></script>
  <!-- Acciones
================================================== -->

<!-- Slider
================================================== -->
  <script type="text/javascript" src="js/lib/Elastideslide/js/jquery.elastislide.js"></script>
  <script type="text/javascript" src="js/lib/bxslider/js/jquery.bxslider.js"></script>

<!-- Menu
================================================== -->
<script src="js/lib/sidr/js/jquery.sidr.min.js"></script>
<script src="js/lib/sidr/js/jquery.touchwipe.js"></script>


   <!-- Llamados
================================================== -->

<!-- Formularios
================================================== -->
<script src="js/jquery.validationEngine-es.js"></script>
<script src="js/jquery.validationEngine.js"></script>

<!-- Acciones
================================================== -->
 <script src="js/actions.js"></script>
 <script src="js/actions1020.js"></script>
<script type="text/javascript">
/* SCROLL */
jQuery(function() {
	jQuery('.cont_scroll').jScrollPane({
		horizontalDragMaxWidth: 21,
		showArrows: false,
		autoReinitialise: true
	});
});


var URL_SITE = "<?= base_url(); ?>";

</script>
<!--<script src="<?= base_url(); ?>chat/views/javascript/visitorchat.js"></script>-->

<script type="text/javascript">
var __lc = {};
__lc.license = 3333612;
__lc.lang = 'es'; 

(function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script> 
<script src="js/site.js"></script>