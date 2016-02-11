<?php $logo = selecLogo(); ?>
  <div class="footer">
    <div class="content_footer">
      <div class="left">
        <h4 class="fon16"><?php if($_SESSION['idioma'] == "en"){ ?>Contact Us<?php }else{ ?>CONTÁCTENOS<?php } ?></h4>
        <h5><?php if($_SESSION['idioma'] == "en"){ ?>
        Carrera 10 No. 26-71 Int.122 Phone: (57)(1) 2438841<br /> Calle 82  No. 12-21 Phone: (57)(1) 6168430<?php }else{ ?>Carrera 10 No. 26-71 Int.122 Tel: (57)(1) 2438841<br /> Calle 82  No. 12-21 Tel: (57)(1) 6168430<?php } ?></h5>
        <h5>Bogotá - Colombia</h5>
      </div>
      <a  href="index.php" class="logo_footer"><img src="admin/modules/logo/files/<?php echo $logo->logoFooter[0]; ?>" width="135" height="105"></a>
      
      <div class="right">
        <h4 class="fon16" align="right"><?php if($_SESSION['idioma'] == "en"){ ?>FOLLOW<?php }else{ ?>SÍGUENOS<?php } ?></h4>
        <div class="clearfix redes">
          <a href="#" class="facebook left">Facebook</a>
          <a href="#" class="twitter left">Twitter</a>
          <a href="#" class="youtube left">Youtube</a>
        </div>
        <h6 class="fon11" align="right"><?php if($_SESSION['idioma'] == "en"){ ?>© KUEHNE.com All rights reserved.<br><br> <div class="con-copy"><span>Webdesign:</span> <span class="copy-ahorranito"><img src="images/icon_imaginamos.png" /></span> <a href="http://imaginamos.com/" target="_blank"><span class="con-copy-vn">Imaginamos.com</span></a></div><?php }else{ ?>© KUEHNE.com Todos los derechos reservados.<br><br /> <div class="con-copy"><span>Diseño web:</span> <span class="copy-ahorranito"><img src="images/icon_imaginamos.png"/></span> <a href="http://imaginamos.com/" target="_blank"><span class="con-copy-vn">Imaginamos.com</span></a></div><?php } ?></h6>   
      </div>
    </div>
  </div>