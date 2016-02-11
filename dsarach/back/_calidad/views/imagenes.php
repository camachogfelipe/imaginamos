<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br>
        <?php echo anchor('cms/calidad/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div style="position: absolute;float: left;height: 60px;">
                    <?php 
                    if ($count < 5){
                        echo anchor("cms/calidad/addimagenes/", "Nuevo", 'class="uibutton icon add" style="top: 100%"') ;
                    }
                    ?>
                    </div>
                    <p>&nbsp;</p>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th><div class='th_wrapp'>Imagen uno</div></th> 
                                    <th><div class='th_wrapp'>Imagen dos</div></th> 
                                    <th><div class='th_wrapp'> Acciones</div></th> 

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($info as $d){ ?>
                                <tr class="odd gradeX" > 
                                    <td width="25%" class="center"><div ><img class="cuadro_edicion_fotos"  src="<?php echo base_url()."uploads/".$d->imagen?>" width="100" height="50" ></div></td> 
                                    <td width="25%" class="center"><div ><img class="cuadro_edicion_fotos"  src="<?php echo base_url()."uploads/".$d->imagen2?>" width="100" height="50" ></div></td> 
                                    <td width="25%" class="center">
                                        <?php echo anchor("cms/calidad/editimagenes/".$d->id, "Editar", "class='uibutton'"); ?> 
                                        <?php echo anchor("cms/calidad/deleteimagenes/".$d->id, "Eliminar", "class='uibutton  special'"); ?>
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
    
    <?php if (isset($save)){
            
            if ($save==1){?>
            showSuccess('Acción correcta.',3000);
            <?php } ?>
    <?php } ?>
</script>