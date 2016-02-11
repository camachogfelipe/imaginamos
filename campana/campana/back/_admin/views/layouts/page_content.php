        <div id="alertMessage" class="error"></div>
    
            <div id="alertMessage" class="error"></div>
    
            <div class="inner">
                <div style="width: auto;height: 30px"></div>
                <div class="clear"></div>

                <!-- full width -->
                <div class="errors"><?php
                if (!empty($alert_messages)) {
                    echo $alert_messages;
                }
                ?></div>
                <?php echo $template['body']; ?>
                <!-- End content -->
            </div><!-- End full width -->
        
            <div id="footer"> &copy; Copyright 2013 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>



      