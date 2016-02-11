<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div style="position: absolute;float: left;height: 60px;">
                    <?php 
                    if ($count < 4){
                        echo anchor("cms/destacados/add/", "Nuevo", 'class="uibutton icon add" style="top: 100%"') ;
                    }
                    ?>
                    </div>
                    <p>&nbsp;</p>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th><div class='th_wrapp'>Sección</div></th> 
                                    <th><div class='th_wrapp'>Imagen</div></th> 
                                    <th><div class='th_wrapp'> Acciones</div></th> 

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($info as $d){ ?>
                                <tr class="odd gradeX" > 
                                    <td  class='center'><?php echo $d->seccion?></td> 
                                    <td width="25%" class="center"><div ><img class="cuadro_edicion_fotos"  src="<?php echo base_url()."uploads/thumbnail/".$d->imagen?>" width="100" height="50" ></div></td> 
                                    <td width="25%" class="center">
                                        <?php echo anchor("cms/destacados/edit/".$d->id, "Editar", "class='uibutton'"); ?> 
                                        <?php 
                                        if ($count>1){
                                        echo anchor("cms/destacados/delete/".$d->id, "Eliminar", "class='uibutton  special'"); 
                                        }?>
                                    </td> 
                                </tr>
                                <?php 
                                }?>
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