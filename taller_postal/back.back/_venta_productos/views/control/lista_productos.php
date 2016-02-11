<form id="From-ajax" name="From-ajax" method="POST">
<?php if (!empty($datos)) : ?>
    <div class="row-fluid">
        <div class="span12">
            <div class="w-box w-box-<?php echo $color_module ?>">
                <div class="w-box-header">
                    <h4>Registros</h4>
                </div>
                <div class="w-box-content">
                    <table id="dt_basic" class="dataTables_full table table-striped">
                        <thead>
                            <tr>
                                <th class="span1 table_checkbox sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 5px;"></th>
                                <th>Producto</th>
                                <th>Venta</th>
                                <th>Cantidad</th>
                                <th>Papel</th>
                                <th>Color_papel</th>
                                <th>Cantidad_sobre</th>
                                <th>Color_sobre</th>
                                <th>Color_diseno</th>
                                <th>Impresion_dorso</th>
                                <th>Tipo_sobre</th>
                                <th>Stiker_cierre</th>
                                <th>Mensaje</th>
                                <th>Tipo_envio</th>
                            </tr>
                        </thead>
                        <tbody id='table_contet'  >
                            <?php foreach ($datos as $img) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td class="nolink ">
                                        <input type="radio"  value="<?php echo $img->id ?>" name="id" class="select_obj">
                                    </td>
                                    <td><?php echo $img->cantidad;  ?></td>
                                    <td><?php echo $img->papel;  ?></td>
                                    <td><?php echo $img->color_papel;  ?></td>
                                    <td><?php echo $img->cantidad_sobre;  ?></td>
                                    <td><?php echo $img->color_sobre;  ?></td>
                                    <td>
                                        <?php echo substr(strip_tags($img->color_diseno),0,120)."...";  ?>
                                    </td>
                                    <td><?php echo $img->impresion_dorso;  ?></td>
                                    <td><?php echo $img->tipo_sobre;  ?></td>
                                    <td><?php echo $img->stiker_cierre;  ?></td>
                                    <td>
                                        <?php echo substr(strip_tags($img->mensaje),0,120)."...";  ?>
                                    </td>
                                    <td><?php echo $img->tipo_envio;  ?></td>
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

