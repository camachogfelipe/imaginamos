<div class="container">
    <div class="row-fluid">
    
     <div class="span8">
      <ul id="breadcrumbs">
          <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
          <?php foreach ($migas as $miga): ?>
          <li><a href="javascript:void(0)"><?php echo $miga; ?></a></li>
          <?php endforeach; ?>
      </ul>
    </div>
    
  </div>
     <div class="row-fluid">
        <div class="span12 wt-box-<?php echo $color_module ?>">
            <h3><?php echo $title_page; ?></h3>
        </div>
    </div>
    
    
    <div class="row-fluid">
          <div class="span3">
         <div class="w-box w-box-<?php echo $color_module ?>">
       <div  class="w-box-header"><?php echo $title_page; ?></div>
            <div class="w-box-content cnt_a">
                <div>
                     <?php echo form_open_multipart(cms_url($direct_form_edit), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>   <?php echo $form_edit ?>
                        <div class="formSep">
                            <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
                        </div>
                      <?php echo form_close() ?>
                </div>
            </div>
        </div>
       </div>       
        <div class="span9">
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
                                <th class="span2" >Imagen</th>
                                <th class="span2" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody id='table_contet'  >
                            <?php foreach ($datos as $img) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td>
                                        <a class="thumbnail img_action_zoom" title="Imagen" href="<?php echo base_url() . $img->imagen_path ?>">
                                            <img style="width:100px" src="<?php echo base_url() . $img->imagen_path ?>" alt="" />
                                        </a>
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
        </div>
    </div>
    
</div>
