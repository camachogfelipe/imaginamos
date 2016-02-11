<form id="From-ajax" name="From-ajax" method="POST">
<?php if (!empty($datos)) : ?>
    <div class="row-fluid">
        <div class="span12">
            <div class="w-box w-box-blue">
                <div class="w-box-header">
                    <h4>Registros</h4>
                </div>
                <div class="w-box-content">
                    <table id="dt_basic" class="dataTables_full table table-striped">
                        <thead>
                            <tr>
                                <th class="span1 table_checkbox sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 5px;"></th>
                                <th class="span2" >Imagen</th>
                                <th>Titulo</th>
                                <th>Linea</th>
                                <th class="span2" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody id='table_contet'  >
                            <?php foreach ($datos as $img) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td class="nolink ">
                                        <input type="checkbox"  value="<?php echo $img->id ?>" name="id" class="select_obj">
                                    </td>
                                    <td>
                                        <a class="thumbnail img_action_zoom" title="Imagen" href="<?php echo base_url() . $img->imagen_path ?>">
                                            <img style="height:50px;width:50px" src="<?php echo base_url() . $img->imagen_path ?>" alt="" />
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $img->titulo;  ?>
                                    </td>
                                    <td>
                                        <?php echo $img->linea_titulo; ?>
                                    </td>
                                    <td class="center" width="100px">
                                        <a href="<?php echo cms_url('sector_exito/delete') ?>" class="btn btn-danger btn-small logic-delete" data-value="<?php echo $img->id ?>">Eliminar</a>
                                    </td> 
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
<?php endif; ?>
    </form>
<script>
    $('.select_obj').change(function() {
        $('.obj_sel').on('click', function() {
            if ($(this).is(':checked')) {
                $(this).closest('tr').addClass('rowChecked');
            } else {
                $(this).closest('tr').removeClass('rowChecked');
            }
        });
    });
</script>

