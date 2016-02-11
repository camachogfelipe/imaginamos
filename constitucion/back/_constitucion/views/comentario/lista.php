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
                  <?php if($tipo == "image") : ?>
                  <th class="span2">Imagen</th>
                  <?php endif; ?>
                  <th>Clasificación</th>
                  <th>Tipo</th>
                  <th>Título</th>
                  <th>Artículo</th>
                  <th class="span2" >Acciones</th>
                </tr>
              </thead>
              <tbody id='table_contet'  >
                <?php foreach ($datos as $img) : ?>
                  <tr class="odd gradeX parent-delete">
                  	<td class="nolink "><input type="radio"  value="<?php echo $img->id ?>" name="id" class="select_obj"></td>
                    <?php if($tipo == "image") : ?>
                    <td><a class="thumbnail img_action_zoom" title="Imagen" href="<?php echo base_url() . $img->imagen_path ?>"> <img style="height:50px;width:50px" src="<?php echo base_url() . $img->imagen_path ?>" alt="" /> </a></td>
                    <?php endif; ?>
                    <td><?php //print_r($img);
                      switch ($img->cms_clasificacion) :
                        case "A" : echo "Artículo";
                          break;
                        case "E" : echo "Expresión";
                          break;
                        case "I" : echo "Inciso";
                          break;
                      endswitch;
                      ?></td>
                    <td><?php
                      switch ($img->cms_tipo) :
                        case "T" : default : echo "Texto";
                          break;
                        case "I" : echo "Imagen";
                          break;
                      endswitch;
                      ?></td>
                    <td><?php echo $img->cms_titulo; ?></td>
                    <td><?php echo $img->constitucion_cms_articulo; ?></td>
                    <td class="center" width="300px">
                      <?php //if ($delete): ?>
                        <?php //if ($datos->result_count() > 1): ?>
                          <a href="<?php echo cms_url($direct_form) ?>" class="btn btn-danger btn-small logic-delete del_count" data-num="1" data-value="<?php echo $img->id ?>">Eliminar</a>
                        <?php //endif; ?>
                      <?php //endif; ?></td>
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
