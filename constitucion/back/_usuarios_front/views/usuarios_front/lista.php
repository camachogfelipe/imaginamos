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
                <th>Nombre completo</th>
                <th>Genero</th>
                <th>Fecha de nacimiento</th>
                <th>Email</th>
                <th>Profesión</th>
                <th>País</th>
                <th>Ciudad</th>
                <th>Teléfono</th>
                <th>Recibe información</th>
                <th class="span2" >Acciones</th>
              </tr>
            </thead>
            <tbody id='table_contet'  >
              <?php foreach ($datos as $img) : ?>
              <tr class="odd gradeX parent-delete">
                <td><?php echo $img->cms_nombre." ".$img->cms_apellidos; ?></td>
                <td><?php
									switch($img->cms_genero) :
										case "M" : echo "Masculino"; break;
										case "F" : echo "Femenino"; break;
										case "O" : echo "Otro"; break;
									endswitch;
                ?></td>
                <td><?php echo $img->cms_fechanacimiento_dia."/".$img->cms_fechanacimiento_mes."/".$img->cms_fechanacimiento_anio; ?></td>
                <td><?php echo $img->cms_email; ?></td>
                <td><?php echo $img->cms_profesion; ?></td>
                <td><?php echo $img->cms_pais; ?></td>
                <td><?php echo $img->cms_ciudad; ?></td>
                <td><?php echo $img->cms_telefono; ?></td>
                <td><?php
									switch($img->cms_recibirinfo) :
										case "Y" : echo "Si"; break;
										case "N" : echo "No"; break;
									endswitch;
                 ?></td>
                <td class="center" width="300px">
                <?php if($img->cms_activo == 0) : ?>
                	<a href="<?php echo cms_url($direct_form.$img->id) ?>" class="btn btn-info btn-small" data-num="1" data-value="<?php echo $img->id ?>">Activar</a>
                <?php else : ?>
									<a href="<?php echo cms_url($direct_form1.$img->id) ?>" class="btn btn-danger btn-small" data-num="1" data-value="<?php echo $img->id ?>">Desactivar</a>
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
