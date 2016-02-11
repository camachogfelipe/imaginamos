<div class="container">
     <div class="row-fluid">
    <div class="span12">
      <ul id="breadcrumbs">
          <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
          <li><a href="javascript:void(0)">Contacto</a></li>
          <li><a href="javascript:void(0)">Datos de Contacto</a></li>
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
                <h4>Datos de Contacto</h4>
            </div>
            <div class="w-box-content">
                <table id="dt_basic" class="dataTables_full table table-striped">
                    <thead>
                        <tr>
                            <th>Dato de contacto</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <?php if (!empty($datos)) : ?>
                        <tbody>
                            <?php foreach ($datos as $key => $value) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td class="span4" ><?php echo strtoupper($key); ?></td>
                                   <?php if($key === 'cordenada_x'){ ?>
                                    <td class="span8" ><input type="text" class="span8 edit_line coordenada_x"  id="link_red" data-filed="<?php echo $key ?>"  value="<?php echo $value ?>" readonly="readonly" /></td>
                                   <?php }elseif($key === 'cordenada_y'){ ?>
                                    <td class="span8" ><input type="text" class="span8 edit_line coordenada_y"  id="link_red" data-filed="<?php echo $key ?>"  value="<?php echo $value ?>" readonly="readonly" /></td>
                                   <?php }else{ ?>
                                    <td class="span8" ><input type="text" class="span8 edit_line"  id="link_red" data-filed="<?php echo $key ?>"  value="<?php echo $value ?>" readonly="readonly" /></td>
                                   <?php }  ?>
                                    
                                    
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td >UBICACIÓN</td>
                                    <td >
                                         <?= $map['js']; ?>
                                         <?= $map['html']; ?>
                                    </td>
                                </tr>  
                        </tbody>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>
</div>