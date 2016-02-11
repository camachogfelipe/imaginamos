<form id="From-ajax" name="From-ajax" method="POST">
    <?php if (!empty($datos)) : ?>
        <div class="row-fluid">
            <div class="span12">
                <div class="w-box w-box-blue">
                    <div class="w-box-header">
                        <h4>Registros</h4>
                    </div>
                    <div class="w-box-content cnt_a">
                        <table id="dt_basic" class="dataTables_full table table-striped">
                            <thead>
                                <tr>
                                    <th class="span1 table_checkbox sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 5px;"></th>
                                    <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 16px;"><i class="splashy-star_empty"></i></th>
                                    <th class="span2" >Titulo</th>
                                    <th class="span2" >Tipo</th>
                                    <th class="span3" >Intro</th>
                                    <th class="span1" >$ Clie.</th>
                                    <th class="span1" >$ Prov.</th>
                                    <th class="span1" >Archivos</th>
                                    <th class="span2" >Acciones</th>
                                </tr>
                            </thead>
                            <tbody id='table_contet'  >
                                <?php foreach ($datos as $img) : ?>
                                    <tr class="odd gradeX parent-delete">
                                        <td class="nolink ">
                                            <input type="checkbox"  value="<?php echo $img->id ?>" name="id" class="select_obj">
                                        </td>
                                        <td class="nolink starSelect"><i class="splashy-star_empty mbox_star" data-url="<?php echo cms_url("productos/recomendar") ?>" data-id="<?php echo $img->id ?>" style="visibility: visible;"></i></td>
                                        <td>
                                            <?php echo $img->titulo; ?>
                                        </td>
                                        <td>
                                            <?php echo $img->grupo_grupo; ?>
                                        </td>
                                        <td style="text-align: justify;">
                                            <?php echo $img->descripcion_intro; ?>
                                        </td>
                                        <td>
                                            <?php echo $img->precio_client; ?>
                                        </td>
                                        <td>
                                            <?php echo $img->precio_prov; ?>
                                        </td>
                                        <td>
                                            <?php if (!empty($img->path_info_tenica)) { ?>
                                                <a class="link" target="_blank" title="link" href="<?php echo base_url() . $img->path_info_tenica; ?>">
                                                    Tecnica
                                                </a>
                                            <?php } if (!empty($img->path_folleto)) { ?>
                                                <a class="link" target="_blank" title="link" href="<?php echo base_url() . $img->path_folleto; ?>">
                                                    Folleto
                                                </a>
                                            <?php } ?>

                                        </td>
                                        <td class="center" width="100px">
                                            <a href="<?php echo cms_url('productos/delete') ?>" class="btn btn-danger btn-small logic-delete" data-value="<?php echo $img->id ?>">Eliminar</a>
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
//    
//     $('#dirup').attr('dato', 'id=' + $('#producto_id').val());
//    $('#producto_id').change(function(e) {
//       $('#dirup').attr('dato', 'id=' + $('#producto_id').val());
//  });
//
////    $('.table').on('mouseenter', '.starSelect', function() {
////        if ($(this).children('i.splashy-star_empty').length) {
////            $(this).children('i.mbox_star').css('visibility', 'visible');
////        }
////    }).on('mouseleave', '.starSelect', function() {
////        if ($(this).children('i.splashy-star_empty').length) {
////            $(this).children('i.mbox_star').css('visibility', '');
////        }
////    });
//
//    $(".mbox_star").click(function(e) {
//        $dato = 'id=' + $(this).data('id');
//        $.ajax({
//            type: "POST",
//            url: $(this).data('url'),
//            data: $dato,
//            dataType: 'json',
//            success: function(jx) {
//                if (jx.ok) {
//                   $(this).toggleClass('splashy-star_empty splashy-star_full');
//                } else {
//                    CMS.Modals.alerta('Hubo un error en la aplicacion, favor contacte con el administrador...');
//                }
//            }
//        });
//
//    });
</script>

