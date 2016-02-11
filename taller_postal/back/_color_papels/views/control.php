<div class="row-fluid">
    <div class="span12">
        <div id="pageNavToolbar" class="mbox_toolbar clearfix">
            <li><a id="refrescar" class="jnav-ext1 c_datatables" href="<?php echo $path_list; ?>"><i class="icsw32-refresh"></i><span>Listar</span></a></li>
           <?php if($add): ?> <li><a id="crear" class="jnav-ext1 c_datatables" href="<?php echo $path_add; ?>"><i class="icsw32-create-write"></i><span>Crear</span></a></li><?php endif; ?>
            <?php if($editar): ?> <li><a id="editar" data-chek="1" class="jnav-ext1 c_datatables" href="<?php echo $path_edit; ?>"><i class="icsw32-pencil"></i><span>Editar</span></a></li><?php endif; ?>
        </div>
    </div>
</div>                                         

<div class="row-fluid">
    <div id="form_data">
          <?php echo $mpag_content; ?>
    </div>
</div>
