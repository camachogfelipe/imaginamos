<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/comolohacemos/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/comolohacemos/update_video/', 'id="form"') ?>
                     <div>
                        <p><label>Descripción </label></p>
                        <div><textarea cols="70" rows="20" type="text"  id="texto" name="video" maxlength="137" title="137 caracteres máximo"   /><?php echo $info->video?></textarea></div>
                    </div>
                    <div>
                        <div><p><label>Video</label><p/>
                            <div>
                                <input type="text"  id="video" name="video" class="full" value="<?php echo $info->video?>" />
                                <input type="hidden" name="id" id="id" value="<?php echo $info->id?>" />
                                <input type="hidden" name="comolohacemos_id" id="comolohacemos_id" value="<?php echo $comolohacemos_id?>" />
                            </div>
                            <br />
                            <?php if ($info->video != ""){?>
                            <div>
                                <iframe src="<?php echo $info->video?>" width="400" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            </div>
                            <?php }?>
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
        /*var titulo = $("#titulo").val();
        var video = $("#texto").val();
        if (titulo == "" || video == ""){
                $('#info').focus();
                showError('Complete todos los campos.',3000);*/
            //}else{
                $('#form').submit();
            //}
   }                    
    
</script>
 <script>
    <?php if (isset($update)){
            if ($update ==  1){?>
            showSuccess('Actualización correcta.',3000);
            <?php } ?>
    <?php } ?>
</script>