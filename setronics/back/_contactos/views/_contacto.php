<div class="container">
    <div class="row-fluid">
        <div class="span12"  style="color: #208BBD;">
            <h3>Datos de Contacto</h3>
        </div>
    </div>
    <div class="span11">
        <div class="w-box w-box-blue">
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
                                    <td class="span8" ><input type="text" class="span8 edit_line"  id="link_red" data-filed="<?php echo $key ?>"  value="<?php echo $value ?>" readonly="readonly" /></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>