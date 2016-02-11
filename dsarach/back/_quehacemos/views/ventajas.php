<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/quehacemos/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div style="position: absolute;float: left;height: 60px;">
                    <?php 
                    if ($count < 8){
                        echo anchor("cms/quehacemos/addventajas/".$quehacemos_id, "Nuevo", 'class="uibutton icon add" style="top: 100%"') ;
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
                                        <?php echo anchor("cms/quehacemos/editventajas/".$d->id."/".$quehacemos_id, "Editar", "class='uibutton'"); ?> 
                                        <?php 
                                        if ($count>1){
                                        echo anchor("cms/quehacemos/deleteventajas/".$d->id."/".$quehacemos_id, "Eliminar", "class='uibutton  special'"); 
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
</div><!-- End content -->
<script type="text/javascript">
    function valida(){
        var titulo = $("#titulo").val();
        var descripcion = $("#texto").val();
        if (titulo == "" || descripcion == ""){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }else{
                $('#form').submit();
            }
   }                    
    
</script>
 <script>
    <?php if (isset($update)){
            if ($update ==  1){?>
            showSuccess('Actualización correcta.',3000);
            <?php } ?>
    <?php } ?>
</script>