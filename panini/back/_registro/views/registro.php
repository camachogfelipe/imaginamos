<div class="widget">
    <div class="header"><span><span class="ico gray sphere"></span><?php echo $nombremodulo ?></span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div style="position: absolute;float: left;height: 60px;">
                    <?php 
                    if ($count < 5){
                       // echo anchor("cms/registro/add/", "Nueva Registro", 'class="uibutton icon add" style="top: 100%; border-radius: 10px;"') ;
                    }
                    ?>
                    </div>
                    <p>&nbsp;</p>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>  
                                    <th><div class='th_wrapp'>Raz&oacute;n Social</div></th> 
                                    <th><div class='th_wrapp'> Acciones</div></th> 

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($info as $d){ ?>
                                <tr class="odd gradeX" > 
                                    <td width="25%" class="center"><?php echo $d->razon_social ?></td> 
                                    <td width="25%" class="center">
                                        <?php echo anchor("cms/registro/edit/".$d->id, "Ver", "class='uibutton'"); ?> 
                                        <?php echo anchor("cms/registro/delete/".$d->id, "Eliminar", "class='uibutton  special'"); ?>                                        
                                    </td> 
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>	
</div>
 <script>
     function valida(){
        var titulo = $("#titulo").val();
        var texto = $("#texto").val();
        if (titulo == "" || texto == "" ){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }else{
                $('#form').submit();
            }
   }  
    <?php if (isset($save)){
            
            if ($save==1){?>
            showSuccess('Acción correcta.',3000);
            <?php } ?>
    <?php } ?>
</script>