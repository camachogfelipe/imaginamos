

<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>Crear categoria</span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="clearfix">

                        <?php echo form_open($save_url, 'data-action="ajax-form" data-after-save="reload"') ?>

                        <div class="section">
                            <label for="name">Nombre</label>
                            <div><input type="text" name="name" id="name"  class="large" placeholder="Escriba el nombre acá..."></div>
                        </div>
                        
                        <div class="section">
                            <label for="description">Descripción</label>
                            <div> <textarea name="description" id="description" class="large" placeholder="Escriba la descripción acá..."></textarea> </div>
                        </div>

                        <br><br>

                        <button type="submit" class="uibutton">Guardar</button>

                        <?php echo form_close() ?>

                    </div>

                </fieldset>
            </div>

        </div>

    </div>	
</div>

<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>Todas los categorias</span>
    </div><!-- End header -->
    <div class="content">

        <section class="clearfix">
            <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><div class="th_wrapp">Nombre</div></th>
                            <th><div class="th_wrapp">Descripción</div></th>
                            <th style="width:200px;"><div class="th_wrapp">Acciones</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($datos->exists()) : ?>
                            <?php foreach ($datos as $dato) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td class="center"><?php echo $dato->name ?></td>
                                    <td class="center"><em><?php echo $dato->description ?></em></td>
                                    <td class="center">
                                        <span class="tip">
                                            <a href="<?php echo sprintf($edit_url, $dato->id) ?>" class="uibutton special">Editar</a>
                                            <a href="<?php echo cms_url('admin/actions/delete') ?>" class="uibutton special" data-action="special-delete" data-table="directorio_categorias" data-field="id" data-value="<?= $dato->id ?>">
                                                Eliminar
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>	
</div>

