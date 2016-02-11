<script src="<?php echo global_asset('js/formplugin.js') ?>"></script>
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

    .progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
    .bar0 { background-color: #00A9FF; width:0%; height:20px; border-radius: 3px; }
    .percent0 { position:absolute; display:inline-block; top:3px; left:48%; }


</style>
<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>
            Vacantes
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                    <div class="clearfix">

                        <?php echo form_open(cms_url('trabaja_nosotros/vacantes/add'), 'id="formajax"') ?>

                        <legend><h1>Vacante</h1></legend>

                        <input name="id" value="" id="id" type="hidden">
                        <input name="img" value="-1" id="img" type="hidden">

                        <div class="section">
                            <label class="req">Cargo</label>
                            <input id="nombre" class="large" type="text" name="nombre" value="" maxlength="42" />
                        </div>

                        <div class="section">
                            <label class="req">&Aacute;rea</label>
                            <input id="subtitulo" class="large" type="text" name="subtitulo" value="" maxlength="70" />
                        </div>

                        <div class="section">
                            <label class="req" >breve introducci&oacute;n</label>
                            <textarea  id="intro_detalle" class="large"  name="intro_detalle" placeholder="Introduccion de vacante..."  maxlength="65"></textarea>
                        </div>

                        <div class="section">
                            <label class="req" >descripci&oacute;n de la vacante</label>
                            <p><textarea rows="3" id="detalle" class="large" name="detalle" placeholder="Detalle de vacante..."></textarea></p>
                        </div>



                        <?php echo form_close() ?>
                    </div>




                    <form id="img_upload" action="<?php echo cms_url('trabaja_nosotros/vacantes/upload_img') ?>" method="post" enctype="multipart/form-data">
                        <div class="section">
                            <label>Im&aacute;gen Min *</label>
                            <span style="color:red">La im&aacute;gen debe ser de 268 x 200 pixeles</span>
                            <div>
                                <input type="file" name="img"><br>
                                <input type="submit" value="Subir Imagen">
                            </div>
                        </div>
                        <div class="section">
                            <div> 
                                <div class="progress">
                                    <div class="bar0"></div >
                                    <div class="percent0">0%</div >
                                </div>
                                <br/><br/><br/><br/>
                                <div id="status0"></div>
                            </div>
                        </div>     

                    </form>

                    <form>              
                        <a id="bt_form" type="button" href="#" class="uibutton">Crear o Modificar Vacante</a> 
                        <!--   <button type="submit" id="Guardar" class="uibutton" >Crear Notificacion</button> -->
                    </form>




                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>Im&aacute;gen</th>
                                    <th>Nombre</th>
                                    <th>Subtitulo</th>
                                    <th style='width: 25%;'>Intro Detalle</th>
                                    <th style='width: 10%;' >Postulados</th>
                                    <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                            </thead>
                            <tbody id='table_contet' data-url-ajax="vacantes/datos_ajax" class="reload-ajax">
                                <?php if (!empty($datos)) : ?>
                                    <?php foreach ($datos as $obj) : ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td>
                                                <a class="thumbnail" title="Imagen" href="<?php echo base_url() . $obj->img ?>">
                                                    <img style="height:50px;width:50px" src="<?php echo base_url() . $obj->img ?>" alt="" />
                                                </a>
                                            </td>
                                            <td><?php echo $obj->nombre ?></td>
                                            <td><?php echo $obj->subtitulo ?></td>
                                            <td style='text-align: justify;'><?php echo strip_tags(substr($obj->intro_detalle, 0 , 255)); ?></td>
                                           <td>
                                                <a class="link-ajax" data-value="<?php echo $obj->id; ?>" title="Imagen" href="<?php echo cms_url('trabaja_nosotros/inicio/postuladosajax'); ?>">
                                                    Ver postulados
                                                </a>
                                            </td>

                                            <td class="center" width="100px">
                                                <span class="tip">
                                                    <a href="<?php echo cms_url('trabaja_nosotros/vacantes/delete') ?>" class="uibutton special" data-action="special-delete" data-table="users" data-field="id" data-value="<?php echo $obj->id ?>">Eliminar</a>
                                                    <a id="edit_<?php echo $obj->id; ?>" href="<?php echo cms_url('trabaja_nosotros/vacantes/edit/') ?>" data-value="<?php echo $obj->id ?>" class="uibutton " >Editar</a>
                                                </span>
                                            </td>
                                        </tr>
                                    <script>
                                        $('.link-ajax').click(function(e) {
                                            $.ajax({
                                                url: $(this).attr('href'),
                                                type: 'POST',
                                                dataType: 'html',
                                                data: 'id=' + $(this).attr('data-value'),
                                                success: function(html) {
                                                     window.CMS.Modals.html(html);
                                                      window.CMS.Modals.dialog();
                                                     window.CMS.Modals.open();
                                                     return;
                                                },
                                                error: function(error) {
                                                    window.CMS.Modals.alerta('Hubo un error al ejecutar la aplicación, inténte de nuevo más tarde...');
                                                    window.console.error('Error CMS Ajax: ' + error.responseText);
                                                }
                                            });
                                            return false;
                                        });

                                        $('#edit_<?php echo $obj->id; ?>').click(function(e) {
                                            $.ajax({
                                                url: $(this).attr('href'),
                                                type: 'POST',
                                                dataType: 'json',
                                                data: 'id=' + $(this).attr('data-value'),
                                                success: function(json) {
                                                    if (json.ok) {
                                                        $('#id').val(json.id);
                                                        $('#nombre').val(json.nombre);
                                                        $('#subtitulo').val(json.subtitulo);
                                                        $('#intro_detalle').val(json.intro_detalle);
                                                        $('#detalle').text(json.detalle).blur();
													    $('#img').val(json.img);
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
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </div>

        </div>
    </div>	
</div>

<script>


    $('#bt_form').click(function() {
        var $form = $('#formajax');
        var data = $form.serialize();
        enviarajax($form, data);
        return false;
    });

    function enviarajax($form, data) {

        var $msg_wrap = $form.find('.messages-wrap');

        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            dataType: $form.data('data-type') || 'json',
            data: data,
            beforeSend: function() {
                window.CMS.Loading.start('Guardando...');
                $msg_wrap.empty();
            },
            success: function(json) {
                if (json.ok) {
                    $.ajax({
                        url: $("#table_contet").attr("data-url-ajax"),
                        data: $("#table_contet").attr("data-dato-ajax"),
                        type: "POST",
                        dataType: "html",
                        success: function(data) {
                            $("#table_contet").html(data);
                        }
                    });
                    $form[0].reset();
                    $('#img').val('-1');
                    $('#id').val('');
					$('.cleditorConMain iframe').find('body').html('');
                    var bar0 = $('.bar0');
                    var percent0 = $('.percent0');
                    var status0 = $('#status0');

                    status0.empty();
                    var percentVal = '0%';
                    bar0.width(percentVal)
                    percent0.html(percentVal);
										$('.cleditorConMain iframe').html('');

                    if (json.continue_url) {
                        window.location.href = json.continue_url;
                    } else if ($form.data('after-save') === 'reload') {
                        window.location.reload();
                    }
                }

                if (json.messages) {
                    CMS.Modals.alerta(json.messages);
                }

                if (json.alertbox) {
                    $msg_wrap.html(json.alertbox);
                }

                return;
            },
            error: function(error) {
                window.CMS.Modals.alerta('Hubo un error al ejecutar la aplicación, inténte de nuevo más tarde...');
                window.console.error('Error CMS Ajax: ' + error.responseText);
            },
            complete: function() {
                window.CMS.Loading.end();
            }
        });
    }



    var bar0 = $('.bar0');
    var percent0 = $('.percent0');
    var status0 = $('#status0');
    var inp0 = $('#img');
    $('form#img_upload').ajaxForm({
        beforeSend: function() {
            status0.empty();
            var percentVal = '0%';
            bar0.width(percentVal)
            percent0.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar0.width(percentVal)
            percent0.html(percentVal);
        },
        success: function() {
            var percentVal = '100%';
            bar0.width(percentVal)
            percent0.html(percentVal);
        },
        complete: function(xhr) {
            if (xhr.responseText === "false") {
                var percentVal = '0%';
                bar0.width(percentVal)
                percent0.html(percentVal);
                status0.html("Archivo no valido...!");
                inp0.val('-1');
            } else {
                status0.html("Archivo subido con éxito");
                inp0.val(xhr.responseText);
            }
        }
    });
		
		jQuery("#detalle").cleditor({
			controls:     // controls to add to the toolbar
          "bold italic underline strikethrough subscript superscript | " +
          "removeformat | bullets numbering | outdent " +
          "indent | alignleft center alignright justify | undo redo | " +
          "cut copy paste pastetext | print source",
		});



</script>

