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
                                 <th class="span3" >Tipo de Producto</th>
                                 <th class="span4" >Descripcion</th>
                                <th class="span2" >Categoria</th>
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
                                      <?php echo $img->grupo; ?>
                                    </td>
                                    <td style="text-align: justify;">
                                      <?php echo substr($img->texto,0,255)."..."; ?>
                                     </td>
                                     <td>
                                      <?php echo  $img->categoria_categoria; ?>
                                     </td>
                                    <td class="center" width="100px">.
                                        <a href="<?php echo cms_url('grupo_producto/delete') ?>" class="btn btn-danger btn-small logic-delete" data-value="<?php echo $img->id ?>">Eliminar</a>
                                    </td>
                                   
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

