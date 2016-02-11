<style type="text/css">

    /* float clearing for IE6 */
    * html .clearfix{
        height: 1%;
        overflow: visible;
    }

    /* float clearing for IE7 */
    *+html .clearfix{
        min-height: 1%;
    }

    /* float clearing for everyone else */
    .clearfix:after{
        clear: both;
        content: ".";
        display: block;
        height: 0;
        visibility: hidden;
        font-size: 0;
    }



</style>
<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>
            Líneas de Produccion
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                    <div class="clearfix">

                        <?php echo form_open(cms_url('lineas/lineas/add'), 'data-action="ajax-form"') ?>

                        <legend><h1>Línea de Producción</h1></legend>

                        <input name="id" value="" id="id" type="hidden">
                        <div class="section">
                            <label class="req">Título</label>
                            <input id="titulo" class="large" type="text" name="titulo" value="" maxlength="20" />
                        </div>
                        <div class="section">
                            <label class="req">Subtítulo</label>
                            <input id="subtitulo" class="large" type="text" name="subtitulo" value="" maxlength="27" />
                        </div>
                        <br/><br/>
                         <button type="submit" id="Guardar" class="uibutton" >Crear Línea</button>
                    
                        <?php echo form_close() ?>
                 
                    </div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Subtítulo</th>
                                    <th><div class="th_wrapp">Acciones</div></th>
                               </tr>
                            </thead>
                            <?php if (!empty($datos)) : ?>
                                <tbody id='table_contet' data-url-ajax="lineas/datos_ajax" class="reload-ajax">
                                    <?php foreach ($datos as $obj) : ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $obj->titulo; ?></td>
                                            <td><?php echo $obj->subtitulo; ?></td>
                                            <td class="center" width="100px">
                                                <span class="tip">
                                                    <a href="<?php echo cms_url('lineas/lineas/delete') ?>" class="uibutton special" data-action="special-delete" data-value="<?php echo $obj->id ?>">Eliminar</a>
                                                    <a id="edit_<?php echo $obj->id; ?>" href="<?php echo cms_url('lineas/lineas/edit/') ?>" data-value="<?php echo $obj->id ?>" class="uibutton " >Editar</a>
                                                </span>
                                            </td>
                                        </tr>
                            <script>
                                $('#edit_<?php echo $obj->id; ?>').click(function(e) {
                                    $.ajax({
                                        url: $(this).attr('href'),
                                        type: 'POST',
                                        dataType: 'json',
                                        data: 'id=' + $(this).attr('data-value'),
                                        success: function(json) {
                                            if (json.ok) {
                                                $('#id').val(json.id);
                                                $('#titulo').val(json.titulo);
                                                $('#subtitulo').val(json.subtitulo);
                                                window.location.href = "#formajax";
                                            }
                                            if (json.messages) {
                                                window.CMS.Modals.alerta(json.messages);
                                            }

                                            if (json.alertbox) {
                                                $msg_wrap.html(json.alertbox);
                                            }
                                            return;
                                        },
                                        error: function(error) {
                                            window.CMS.Modals.alerta('Hubo un error al ejecutar la aplicación, inténte de nuevo más tarde...');
                                            window.console.error('Error CMS Ajax: ' + error.responseText);
                                        }
                                    });
                                    return false;
                                });</script>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif; ?>
                        </table>
                    </div>
                </fieldset>
            </div>

        </div>
    </div>	
</div>