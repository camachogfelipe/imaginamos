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
    .bar1 { background-color: #00A9FF; width:0%; height:20px; border-radius: 3px; }
    .percent1 { position:absolute; display:inline-block; top:3px; left:48%; }


</style>
<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>
            Servicios a su medida
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                    <div class="clearfix">

                        <?php echo form_open(cms_url('servicios/servicio_cortes/add'), 'id="formajax"') ?>

                        <legend><h1>Servicio a su medida</h1></legend>

                        <input name="id" value="" id="id" type="hidden">
                        <input name="file" value="-1" id="file" type="hidden">
                        <input name="img_min" value="-1" id="img_min" type="hidden">

                        <div class="section">
                            <label class="req">Título</label>
                            <input id="titulo" class="large" type="text" name="titulo" value="" maxlength="32" />
                        </div>
                        <div class="section">
                            <label class="req">Link del Video</label>
                            <input id="vid" class="large" type="text" name="vid" value="" maxlength="211" />
                        </div>
                        <div class="section">
                            <label class="req" >Texto Descriptivo</label>
                            <textarea rows="3" id="texto" class="large"  name="texto" placeholder="Text Descriptivo..." maxlength="211"></textarea>
                        </div>
                    
                        <?php echo form_close() ?>

                        <form id="img_min_upload" action="<?php echo cms_url('servicios/servicio_cortes/upload_img') ?>" method="post" enctype="multipart/form-data">
                            <!--<div class="section">
                                <label>Imagen Min del Video</label>
                                <div>
                                    <input type="file" name="img"><br>
                                    <input type="submit" value="Subir Archivo">
                                </div>
                            </div>
                            <div class="section">
                                <div> 
                                    <div class="progress">
                                        <div class="bar1"></div >
                                        <div class="percent1">0%</div >
                                    </div>
                                    <br/><br/><br/><br/>
                                    <div id="status1"></div>
                                </div>
                            </div>-->

                        </form>
                        
                        <form id="img_upload" action="<?php echo cms_url('servicios/servicio_cortes/upload_file') ?>" method="post" enctype="multipart/form-data">
                            <div class="section">
                                <label>Especificaciones Técnicas</label>
                                <div>
                                		<span style="color: red">El formato del archivo debe ser PDF, Excel, Word, JPG o PNG</span><br>
                                    <input type="file" name="file"><br>
                                    <input type="submit" value="Subir Archivo">
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
                                    <a id="bt_form" type="button" href="#" class="uibutton">Crear o Modificar Servicio</a> 
                                    <!--   <button type="submit" id="Guardar" class="uibutton" >Crear Notificacion</button> -->
                          
                        </form>


                    </div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <!--<th>Imagen Video</th>-->
                                    <th>Título</th>
                                    <th style='width: 40%;'>texto Descriptivo</th>
                                    <th>Archivo</th>
                                    <th>Video</th>
                                    <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                            </thead>
                            <tbody id='table_contet' data-url-ajax="servicio_cortes/datos_ajax" class="reload-ajax">
                            <?php if (!empty($datos)) : ?>
                                    <?php foreach ($datos as $obj) : ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $obj->titulo; ?></td>
                                            <td style='text-align: justify;'><?php echo substr($obj->texto, 0 , 255); ?></td>
                                            <td>
                                                <a class="thumbnail" title="Imagen" href="<?php echo base_url().$obj->file; ?>">
                                                      File
                                                </a>
                                            </td>
                                            <td>
                                                <a class="thumbnail" title="Imagen" href="<?php echo $obj->vid; ?>">
                                                      Video
                                                </a>
                                            </td>
                                            <td class="center" width="100px">
                                                <span class="tip">
                                                    <a href="<?php echo cms_url('servicios/servicio_cortes/delete') ?>" class="uibutton special" data-action="special-delete" data-value="<?php echo $obj->id ?>">Eliminar</a>
                                                    <a id="edit_<?php echo $obj->id; ?>" href="<?php echo cms_url('servicios/servicio_cortes/edit/') ?>" data-value="<?php echo $obj->id ?>" class="uibutton " >Editar</a>
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
                                                $('#texto').val(json.texto);
                                                $('#file').val(json.file);
                                                //$('#img_min').val(json.img_min);
                                                $('#vid').val(json.vid);
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
                    $('#file').val('-1');
                    $('#id').val('');


                    var bar0 = $('.bar0');
                    var percent0 = $('.percent0');
                    var status0 = $('#status0');

                    status0.empty();
                    var percentVal0 = '0%';
                    bar0.width(percentVal0)
                    percent0.html(percentVal0);


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
    var inp0 = $('#file');
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
    
    
   

   
</script>