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
                  <?php if($seccion == "libros") : ?>
                  <th class="span2" >Imagen Libro</th>
                  <?php endif; ?>
                  <th>Nombre</th>
                  <?php if($seccion == "libros") : ?>
                  <th>Tipo de libro</th>
                  <?php endif; ?>
                  <th>Fecha compra</th>
                  <th class="span2" >Acciones</th>
                </tr>
              </thead>
              <tbody id='table_contet'  >
                <?php foreach ($datos as $img) : ?>
                  <tr class="odd gradeX parent-delete">
                    <td>
                    	<a class="thumbnail img_action_zoom" title="Imagen" href="<?php echo base_url($img['imagen_path']) ?>">
                      	<img style="height:50px;width:50px" src="<?php echo base_url($img['imagen_path']) ?>" alt="" />
                      </a>
                    </td>
                    <td><?php echo $img['cms_titulo']; ?></td>
                    <?php if($img['cms_tipo'] == "L") : ?>
                    <td><?php
                      switch ($img['cms_tipolibro']) :
                        case 'P' : echo "PDF"; break;
                        case 'I' : echo "IMPRESO"; break;
                        case 'A' : echo "PDF - IMPRESO"; break;
                      endswitch;
                    ?></td>
                    <?php endif; ?>
                    <td><?php echo date("d/m/Y", strtotime($img['cms_fecha_compra'])); ?></td>
                    <td class="center" width="250">
                    <?php if($img['cms_pago'] != "Y") : ?>
                      <a href="<?php echo cms_url($direct_form . $img['id']) ?>" class="btn btn-info btn-small" data-num="1" data-value="<?php echo $img['id'] ?>">Registrar como paga la compra</a>
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
