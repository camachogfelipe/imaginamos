
<script src="<?php echo global_asset('js/formplugin.js') ?>"></script>
<script src="<?php echo back_asset('js/cms.sortable.js') ?>"></script>
<script src="<?php echo global_asset('js/functions.js') ?>"></script>
        <!-- CMS Scripts -->


<style type="text/css">

    /* float clearing for IE6 */
    * html .clearfix{
        height: 1%;
        overflow: visible;
    }

    /* float clearing for IE7 */
    *+html .clearfix{
        min-height: 1%;
    }

    /* float clearing for everyone else */
    .clearfix:after{
        clear: both;
        content: ".";
        display: block;
        height: 0;
        visibility: hidden;
        font-size: 0;
    }

    .progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
    .bar0 { background-color: #00A9FF; width:0%; height:20px; border-radius: 3px; }
    .percent0 { position:absolute; display:inline-block; top:3px; left:48%; }


</style>
<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>
            Configuracion de Trabaje Con Nosotros
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                 <fieldset>
                    <legend><h1>Listado de Postulados</h1></legend>
                    <div class="tableName toolbar">
                        <table  class="display data_table3" >
                            <thead>
                                <tr>
                                    <th>Vacante</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Ciudad</th>
                                    <th>Telefono</th>
                                    <th>Comentario</th>
                                    <th>Archivo CV</th>
                                    <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                            </thead>
                            <tbody id='table_contet'  >
                            <?php if (!empty($datos)) : ?>
                                    <?php foreach ($datos as $obj) : ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $obj->vacante ?></td>
                                            <td><?php echo $obj->nombre ?></td>
                                            <td><?php echo $obj->email ?></td>
                                            <td><?php echo $obj->ciudad ?></td>
                                            <td><?php echo $obj->telefono ?></td>
                                            <td><?php echo $obj->comentario ?></td>
                                            <td>
                                            	<?php if(!empty($obj->cv)) : ?>
                                                <a class="thumbnail" title="Imagen" href="<?php echo base_url() . "uploads/hojas_vida/" . $obj->cv ?>">
                                                    Archivo CV
                                                </a>
                                              <?php endif; ?>
                                              <?php if(!empty($obj->cvideo)) : ?>
                                                <a class="thumbnail" title="Imagen" href="<?php echo base_url() . "uploads/hojas_vida/" . $obj->cvideo ?>">
                                                    Video
                                                </a>
                                              <?php endif; ?>
                                            </td>
                                            <td width="100px">
                                                <span class="tip">
                                                     <a href="<?php echo cms_url('trabaja_nosotros/inicio/delete') ?>" class="uibutton special" data-action="special-delete" data-table="users" data-field="id" data-value="<?php echo $obj->id ?>">Eliminar</a>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                            <?php endif; ?>
                           </tbody>               
                        </table>
                    </div>
                </fieldset>
            </div>

        </div>
    </div>	
</div>



<script type="text/javascript">
   
   $('.data_table3').dataTable({
        "sDom": 'fCl<"clear">rtip',
        "aaSorting": [],
        "aoColumns": [
        {
            "bSortable": false
        },null,null,null,{
            "bSortable": false
        }
        ]
    });

 


</script>
