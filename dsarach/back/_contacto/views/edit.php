<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/contacto/update_record/', 'id="form"') ?>
                    <input type="hidden" value="<?php echo $info->id?>" name="id" id="id" />
                    <div>
                        <p><label>Teléfono</label></p>
                        <div>
                            <input type="text" value="<?php echo $info->telefono1?>" name="telefono1" id="telefono1" />
                        </div>
                    </div>
                    <div>
                        <p><label>Celular</label></p>
                        <div>
                            <input type="text" value="<?php echo $info->telefono2 ?>" name="telefono2" id="telefono2" />
                            
                        </div>
                    </div>
                    
                    <div>
                        <p><label>E-mail </label></p>
                        <div>
                            <input type="email" class="medium" value="<?php echo $info->email ?>" name="email" id="email" />
                            
                        </div>
                    </div>
                    <div>
                        <p><label>Facebook </label></p>
                        <div>
                            <input type="text" class="large" value="<?php echo $info->facebook ?>" name="facebook" id="facebook" />
                            
                        </div>
                    </div>
                    
                    <div>
                        <p><label>Twitter </label></p>
                        <div>
                            <input type="text" required  class="medium" value="<?php echo $info->twitter ?>" name="twitter" id="twitter"  />
                            
                        </div>
                    </div>
                    <div>
                        <p><label>Youtube </label></p>
                        <div>
                            <input type="text" class="medium" value="<?php echo $info->youtube ?>" name="youtube" id="youtube" />
                            
                        </div>
                    </div>
                    
                    <div style="width: 100px;height: 30px;position: relative;top: 30px">
                        <input onclick="valida();" type="button" value="Guardar" class="uibutton confirm" />
                    </div>
                    <?php echo form_close() ?>
                    <p>&nbsp;</p>
                 </fieldset>
                <br>
            </div>
        </div>
    </div>	
</div><!-- End content -->
<script type="text/javascript">
    function valida(){
        var youtube = $("#youtube").val();
        var facebook = $("#facebook").val();
        var twitter = $("#twitter").val();
        var email = $("#email").val();
        var telefono2 = $("#telefono2").val();
        var telefono1 = $("#telefono1").val();
        if (youtube == "" || facebook == "" || twitter == "" || email == "" || telefono2 == "" || telefono1 == ""){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }else{
                $('#form').submit();
            }
   }                    
    
</script>
 <script>
    <?php if (isset($save)){
            if ($save ==  1){?>
            showSuccess('Actualización correcta.',3000);
            <?php } ?>
    <?php } ?>
</script>