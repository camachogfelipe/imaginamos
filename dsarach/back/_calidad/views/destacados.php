<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div style="position: absolute;float: left;height: 60px;">
                    <?php 
                    if ($count < 6){
                        echo anchor("cms/calidad/adddestacados/", "Nuevo", 'class="uibutton icon add" style="top: 100%"') ;
                    }
                    ?>
                    </div>
                    <p>&nbsp;</p>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th><div class='th_wrapp'>Título</div></th> 
                                    <th><div class='th_wrapp'> Acciones</div></th> 

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($info as $d){ ?>
                                <tr class="odd gradeX" > 
                                    <td  class='center'><?php echo $d->titulo?></td> 
                                    <td width="25%" class="center">
                                        <?php echo anchor("cms/calidad/editdestacados/".$d->id, "Editar", "class='uibutton'"); ?> 
                                        <?php 
                                        if ($count>1){
                                        echo anchor("cms/calidad/deletedestacados/".$d->id, "Eliminar", "class='uibutton  special'"); 
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