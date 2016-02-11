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
                <th>Año</th>
                <th>Mes</th>
                <th>Expediente</th>
                <th>Sentencia</th>
                <th>Demanda</th>
                <th>Magistrado</th>
                <th>Tema</th>
                <th>Decisión</th>
                <th>Archivo</th>
                <th class="span2" >Acciones</th>
              </tr>
            </thead>
            <tbody id='table_contet'  >
              <?php foreach ($datos as $img) : ?>
              <tr class="odd gradeX parent-delete">
                <td class="nolink "><input type="radio"  value="<?php echo $img->id ?>" name="id" class="select_obj"></td>
                <td><?php echo $img->cms_anio; ?></td>
                <td><?php echo $img->cms_mes; ?></td>
                <td><?php echo $img->cms_tutela_expediente; ?></td>
                <td><?php echo $img->cms_sentencia; ?></td>
                <td><?php echo $img->demandas_tutelas_cms_numeroref; ?></td>
                <td><?php echo $img->magistrados_cms_nombre; ?></td>
                <td><?php echo $img->temas_cms_tema; ?></td>
                <td><?php echo $img->cms_decision; ?></td>
                <td><a target="_blank" title="Archivo" href="<?php echo base_url() . $img->link_path ?>">Link Archivo</a></td>
                <td class="center" width="300px">
								<?php if($delete): ?>
                  <?php if($datos->result_count() > 1): ?>
                  <a href="<?php echo cms_url($direct_form) ?>" class="btn btn-danger btn-small logic-delete del_count" data-num="1" data-value="<?php echo $img->id ?>">Eliminar</a>
                  <?php endif; ?>
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
