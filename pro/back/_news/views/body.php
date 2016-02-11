
<section class="clearfix">
    <a href="<?php echo cms_url('news/guardar') ?>" class="uibutton icon confirm add">Crear noticia</a>
</section>

<hr>

<section class="clearfix">
    <div class="tableName toolbar">
        <table class="display data_table2" >
            <thead>
                <tr>
                    <th style="width:200px;"><div class="th_wrapp">Titulo</div></th>

                    <th style="width:50px;"><div class="th_wrapp">Contenido (Fragmento)</div></th>
                    <th style="width:200px;"><div class="th_wrapp">Acciones</div></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($datos->exists()) : ?>
                    <?php foreach ($datos as $dato) : ?>
                        <tr class="odd gradeX parent-delete">
                            <td class="center"><?php echo $dato->title ?></td>
                            <td class="center"><?php echo $dato->content ?></td>
                           
                            <td class="center">
                                <span class="tip">
                                    <a href="<?php echo sprintf($delete_url, $dato->id) ?>" class="uibutton special" data-action="special-delete" data-table="news" data-field="id" data-value="<?php echo $dato->id ?>">
                                        Eliminar
                                    </a>
                                    <a href="<?php echo sprintf($edit_url, $dato->id) ?>" class="uibutton special">Editar</a>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>

