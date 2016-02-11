<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/destacados/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/calidad/new_destacados/', 'id="form"') ?>
                    <div>
                        <p><label>T&iacute;tulo </label></p>
                        <div><input style="width:250px" type="text"  id="titulo" name="titulo" class="small" value="" maxlength="28" title="28 caracteres máximo" /> </div>
                    </div>
                    <div>
                        <p><label>Link </label></p>
                        <div><input style="width:250px" type="url"  id="link" name="link" class="largelink" value="" maxlength="15" title="15 caracteres máximo" /> </div>
                    </div>
                    <div>
                        <p><label>Texto </label></p>
                        <div><textarea style="width:350px;height:130px;" type="text"  id="texto" name="descripcion" maxlength="69" title="69 caracteres máximo"   /></textarea></div>
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
        var titulo = $("#titulo").val();
        var link = $("#link").val();
        var descripcion = $("#descripcion").val();
        if (titulo == "" || link == "" || descripcion == ""  ){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }else{
                $('#form').submit();
            }
   }                    
    
</script>
 <script>
    <?php if (isset($save)){
            if ($save !=  TRUE){?>
            showError('Problemas al almacenar.',3000);
            <?php } ?>
    <?php } ?>
</script>