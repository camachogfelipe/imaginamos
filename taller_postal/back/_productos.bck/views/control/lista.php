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
                                
<th>tiutlo</th>
<th>texto</th>
<th>precio</th>
<th>precio_envio</th>
<th>precio_stiker</th>
<th>precio_cdiseno</th>
<th>precio_idorso</th>
<th>categoria_id</th>
<th>disenador_id</th>

                            </tr>
                        </thead>
                        <tbody id='table_contet'  >
                            <?php foreach ($datos as $img) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td class="nolink ">
                                        <input type="radio"  value="<?php echo $img->id ?>" name="id" class="select_obj">
                                    </td>
<td>
                                        <?php echo $img->id;  ?>
                                    </td>
<td>
                                        <?php echo $img->tiutlo;  ?>
                                    </td>
<td>
                                        <?php echo substr(strip_tags($img->texto),0,120)."...";  ?>
                                    </td>
<td>
                                        <?php echo $img->precio;  ?>
                                    </td>
<td>
                                        <?php echo $img->precio_envio;  ?>
                                    </td>
<td>
                                        <?php echo $img->precio_stiker;  ?>
                                    </td>
<td>
                                        <?php echo $img->precio_cdiseno;  ?>
                                    </td>
<td>
                                        <?php echo $img->precio_idorso;  ?>
                                    </td>
<td>
                                        <?php echo $img->categoria_id;  ?>
                                    </td>
<td>
                                        <?php echo $img->disenador_id;  ?>
                                    </td>

                                    <td class="center" width="100px">
                                        <?php if($delete): ?>  
                                       <?php if($datos->result_count() > 0): ?>
                                        <a href="<?php echo cms_url($direct_form) ?>" class="btn btn-danger btn-small logic-delete del_count" data-num="0" data-value="<?php echo $img->id ?>">Eliminar</a>
                                       <?php endif; ?>
                                       <?php endif; ?> 
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