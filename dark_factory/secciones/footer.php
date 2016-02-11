<?php $dbfooter = new Dbfooter();
$idfoo = $dbfooter->getMaxId();
$foo = $dbfooter->getByPk($idfoo);
?>
<footer>
      <div class="con-footer">
        <div class="mg-footer clearfix">
          <div class="foo-c1">
          	<h1>ABOUT <strong>DARK FACTORY</strong></h1>
            <div class="foo-tx">
                <p><?php echo utf8_encode($foo['texto']); ?></p>
            </div>
          </div>
          <div class="foo-c2">
          	<h1>CONTACT <strong>INFO</strong></h1>
            <ul>
            	<li><?php echo utf8_encode($foo['direccion']); ?></li>
              <li><?php echo utf8_encode($foo['ciudad']); ?></li>
              <li><?php echo utf8_encode($foo['telefono']); ?></li>
              <li><a href="mailto:<?php echo utf8_encode($foo['email']); ?>"><?php echo utf8_encode($foo['email']); ?></a></li>
            </ul>
            <div class="con-foo-redes">
            	<a href="https://www.facebook.com/DarkFactoryEntertainment" target="_blank"><div class="foo-red"><div class="red-f1"></div></div></a>
              <a href="https://twitter.com/darkfactory1/" target="_blank"><div class="foo-red"><div class="red-f2"></div></div></a>
              <a href="http://www.youtube.com/user/DarkFactory6000" target="_blank"><div class="foo-red"><div class="red-f3"></div></div></a>
            </div>
          	<div class="foo-sep-1"></div>
            <div class="foo-sep-2"></div>
          </div>
          <div class="foo-c3">
          	<h1>SITE <strong>MAP</strong></h1>
            <ul>
<a href="index.php"><li>Home</li></a>
              <li><a href="index.php?base&seccion=about-us">About Us</a></li>
              <li><a href="index.php?base&seccion=films">Films</a></li>
              <li><a href="index.php?base&seccion=theater">Theater</a></li>
              <li><a href="index.php?base&seccion=media">Media</a></li>
              <li><a href="index.php?base&seccion=contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="con-copy">
        <div class="mg-footer clearfix">
        	<div class="copy-info">
                    <p>Copyright © <?php echo date("Y"); ?> - <strong>DARK FACTORY</strong> - All rights reserved</p>
          </div>
          <div class="footer-ahorranito"></div>
        </div>
      </div>
    </footer>
    
    <script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>   
    <script type="text/javascript" src="assets/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="assets/js/actions.js"></script>    
    <script type="text/javascript" src="assets/js/jquery.royalslider.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.tw.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>	
    <script type="text/javascript" src="assets/js/jquery-galeria-lightbox.js"></script>	 
    <script type="text/javascript" src="assets/js/jquery.validacion.js"></script>  
    <script type="text/javascript" src="assets/js/jquery.validationEngine-es.js"></script>  
    <!--<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>-->
    <script type="text/javascript" src="assets/js/pop-up.js"></script> 
    <script type="text/javascript" language="javascript" src="assets/js/jquery.carrusel.js"></script>
    <script src="assets/js/face-share.js" type="text/javascript"></script>
    <script src="assets/js/jquery.paginador.js" type="text/javascript"></script>
    <script src="assets/js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".inline").colorbox({inline:true, width:"80%"});
			});
		</script>
    <script>
	 //$(".footer-ahorranito").ahorranito({theme:"claro"}).find(".imaginamosOver").first().text("Web Design :");
	</script>
        
	</body>
</html>