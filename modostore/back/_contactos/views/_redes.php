<div class="container">
     <div class="row-fluid">
    <div class="span12">
      <ul id="breadcrumbs">
          <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
          <li><a href="javascript:void(0)">Contacto</a></li>
          <li><a href="javascript:void(0)">Redes Sociales</a></li>
      </ul>
    </div>
  </div>
    <div class="row-fluid">
        <div class="span12 wt-box-<?php echo $color_module; ?>"  >
            <h3>Datos de Contacto</h3>
        </div>
    </div>
    <div class="row-fluid">
    <div class="span11">
        <div class="w-box w-box-<?php echo $color_module; ?>">
            <div class="w-box-header">
                <h4>Redes Sociales</h4>
            </div>
            <div class="w-box-content">
                <table id="dt_basic" class="dataTables_full table table-striped">
                    <thead>
                        <tr>
                            <th class="span1">ID</th>
                            <th class="span3" >Red Social</th>
                            <th class="span8">Link</th>
                        </tr>
                    </thead>
                    <?php if (!empty($datos)) : ?>
                        <tbody>
                            <?php foreach ($datos as $redes_sociales) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td><?php echo $redes_sociales['id'] ?></td>
                                    <td><?php echo $redes_sociales['nombre'] ?></td>
                                    <td><input type="text" id="link_red" data-reg-id="<?php echo $redes_sociales['id'] ?>" class="editar_red_social" value="<?php echo $redes_sociales['link'] ?>" readonly="readonly" style="width:370px;" /></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>
</div>    