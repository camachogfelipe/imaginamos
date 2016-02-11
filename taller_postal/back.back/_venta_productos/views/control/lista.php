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
                                <th>Referencia</th>
                                <th>Fecha</th>
                                <th>Usuario Compra</th>
                                <th>Usuario Receptor</th>
                                <th>% pago</th>
                                <th>Costo envio</th>
                                <th>Otro costos</th>
                                <th>Sub-total</th>
                                <th>Iva</th>
                                <th>Total</th>
                                
                                <th class="span1 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 5px;">Est.</th>
                            </tr>
                        </thead>
                        <tbody id='table_contet'  >
                            <?php foreach ($datos as $img) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td class="nolink ">
                                        <input type="radio"  value="<?php echo $img->id ?>" name="id" class="select_obj">
                                    </td>
                                    
                                    <td><?php echo $img->referencia;  ?></td>
                                    <td><?php echo $img->fecha;  ?></td>
                                    <td>
                                        <?php echo $img->datos_usuario_id;  ?>
                                    </td>
                                    <td>
                                        <?php echo $img->datos_usuario1_id;  ?>
                                    </td>
                                    <td><?php echo $img->porcentaje_pago;  ?></td>
                                    <td>
                                        $<?php echo number_format($img->costo_envio,0,',','.');  ?>
                                    </td>
                                    <td>
                                        $<?php echo number_format($img->otro_costos,0,',','.');  ?>
                                    </td>
                                    <td>
                                        $<?php echo number_format($img->sub_total,0,',','.');  ?>
                                    </td>
                                    <td><?php echo $img->iva;  ?>%</td>
                                    <td>
                                        $<?php echo number_format($img->total,0,',','.');  ?>
                                    </td>
                                    
                                    <td class="nolink starSelect">
                                        <i class="mbox_star splashy-gem_<?php echo ($img->estado == 1)?"okay":"remove"; ?>" data-url="<?php echo $direct_estado; ?>" data-id="<?php echo $img->id ?>" style="visibility: visible;">
                                        </i>
                                    </td>
                                    
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            
           <!--<div class="w-box w-box-<?php echo $color_module ?>"> 
            <div class="w-box-header">
               <h4>Trafico de Venta</h4>
            </div>
            <div class="w-box-content cnt_b">
               <div class="chart_data chart_a" id="chart1" data-url="http://localhost/modostore/cms/venta_productos/get_chart"></div>    
           </div>
          </div>  -->
            
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
<script>
    if($(window).width() > '1280') {
        $('body').append('<a href="javascript:void" class="fluid_lay" style="position:fixed;top:6px;right:10px;z-index:10000" title="fluid layout"><i class="splashy-arrow_state_grey_left"></i><i class="splashy-arrow_state_grey_right"></i></a>');
        $('.fluid_lay').click(function() {
            var url = window.location.href;    
            if (url.indexOf('?') > -1){
               url += '&fluid=1'
            }else{
               url += '?fluid=1'
            }
            window.location.href = url;
        });
        $(window).on('resize',function() {
            if($(window).width() > '1280') {
                $('.fluid_lay').show();
            } else {
                $('.fluid_lay').hide();
            }
        })
    }
</script>

