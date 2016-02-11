    <footer>
      <div class="con-footer">
        <div class="mg-footer clearfix">
          <div class="footer-info">
          	<div class="footer-c1"><a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/img/footer-logo.png" width="370" height="124" alt=""></a></div>
            <div class="footer-c2">
            	<ul>
              	<li><span><img src="<?php echo base_url()?>assets/img/footer-pick-1.png" width="24" height="24" alt=""></span>Telefono: + <?php echo $contacto->telefono1?></li>
                <li><span><img src="<?php echo base_url()?>assets/img/footer-pick-2.png" width="24" height="24" alt=""></span>Mobile: + <?php echo $contacto->telefono2?></li>
                <li><span><img src="<?php echo base_url()?>assets/img/footer-pick-3.png" width="24" height="24" alt=""></span><a href="mailto:info@dsarach.com"><?php echo $contacto->email?></a></li>
              </ul>
            </div>
            <div class="footer-c3">
            	<a href="<?php echo $contacto->youtube?>" target="_blank"><div class="foo-red foo-yt"></div></a>
              <a href="<?php echo $contacto->facebook?>" target="_blank"><div class="foo-red foo-fb"></div></a>
              <a href="<?php echo $contacto->twitter?>" target="_blank"><div class="foo-red foo-tw"></div></a>
            </div>
          </div>
          <div class="footer-copy">
          	<div class="copy-tx"><p>&copy; <?php echo date("Y");?> <strong>D'SARACH</strong> - Todos los derechos reservados - Prohibida su reproducciónn parcial o total</p></div>
            <div class="footer-ahorranito"></div>
          </div>
        </div>
        <div class="footer-sw"></div>
      </div>
    </footer><div id="to-top"></div>
    <a class="icon-call-fx" href="<?php echo base_url()?>contactenos"></a>
    
    <!--<script type="text/javascript" src="<?php echo base_url()?>assets/js/lib/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.plugs.min.js"></script>
    <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/actions.js"></script>
