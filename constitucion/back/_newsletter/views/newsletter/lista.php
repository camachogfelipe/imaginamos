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
                  <th>Nombre</th>
                  <th>Email</th>
                  <th class="span2" >Acciones</th>
                </tr>
              </thead>
              <tbody id='table_contet'  >
                <?php foreach ($datos as $img) : ?>
                  <tr class="odd gradeX parent-delete">
                    <td><?php echo $img->cms_nombre; ?></td>
                    <td><?php echo $img->cms_email; ?></td>
                    <td class="center" width="300px">
                      <?php if ($delete): ?>
                        <a href="<?php echo cms_url($direct_form) ?>" class="btn btn-danger btn-small logic-delete del_count" data-num="1" data-value="<?php echo $img->id ?>">Eliminar</a>
                      <?php endif; ?></td>
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
