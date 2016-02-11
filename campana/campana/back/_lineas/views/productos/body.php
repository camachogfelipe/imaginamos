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
            Productos
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                    <div class="clearfix">

                        <?php echo form_open(cms_url('lineas/productos/add'), 'id="formajax"') ?>

                        <legend><h1>Productos</h1></legend>
                        <input name="id" value="" id="id" type="hidden">
                        <input name="img" value="-1" id="img" type="hidden">
                        <input name="file" value="-1" id="file" type="hidden">
                        <div class="section">
                            <label class="req">Titulo</label>
                            <input id="titulo" class="large" type="text" name="titulo" value="" />
                        </div>
                        <div class="section">
                            <label class="req">Subtitulo</label>
                            <input id="subtitulo" class="large" type="text" name="subtitulo" value="" />
                        </div>
                        <div class="section">
                            <label class="req" >Texto Descriptivo</label>
                            <textarea rows="3"  class="large"  name="texto" placeholder="Texto Descriptivo ..."></textarea>
                        </div>
                         <div class="section">
                            <label class="req" >Texto Introductorio</label>
                            <textarea rows="3"  class="large"  name="intro_text" placeholder="Text Introductorio..."></textarea>
                        </div>
                        <div class="section">
                            <label class="req">Sub Categoria</label>
                            <select id="s2_single" name="cms_sub_categorias_id" class="large" style="display: none;">
                                <?php if (!empty($scateg)) : ?>
                                    <?php foreach ($scateg as $scat) : ?>
                                        <option value="<?php echo $scat->id; ?>" selected="selected"><?php echo $scat->titulo; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>

                        <?php echo form_close() ?>

                        <form id="img_upload" action="<?php echo cms_url('lineas/productos/upload_img') ?>" method="post" enctype="multipart/form-data">
                            <div class="section">
                                <label>Imagen *</label>
                                <div>
                                    <input type="file" name="img"><br>
                                    <input type="submit" value="Upload File to Server">
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
                        <form id="file_upload" action="<?php echo cms_url('lineas/productos/upload_file') ?>" method="post" enctype="multipart/form-data">
                            <div class="section">
                                <label>Especificaciones Tecnicas</label>
                                <div>
                                    <input type="file" name="file"><br>
                                    <input type="submit" value="Upload File to Server">
                                </div>
                            </div>
                            <div class="section">
                                <div> 
                                    <div class="progress">
                                        <div class="bar1"></div >
                                        <div class="percent1">0%</div>
                                    </div>
                                    <br/><br/><br/><br/>
                                    <div id="status1"></div>
                                </div>
                            </div>     

                        </form>

                        <form>              
                            <div class="section">
                                <div>
                                    <a id="bt_form" type="button" href="#" class="uibutton">Crear Notificacion</a> 
                                    <!--   <button type="submit" id="Guardar" class="uibutton" >Crear Notificacion</button> -->
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Titulo</th>
                                    <th>Subtitulo</th>
                                    <th>Texto</th>
                                    <th>Texto Intro</th>
                                    <th>File</th>
                                    <th>S. Categ.</th>
                                    <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                            </thead>
                            <?php if (!empty($datos)) : ?>
                                <tbody id='table_contet' data-url-ajax="productos/datos_ajax" class="reload-ajax">
                                    <?php foreach ($datos as $obj) : ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td>
                                                <a class='thumbnail' title='Imagen' href='<?php echo base_url().$obj->img; ?>' >
                                                    <img style='height:50px;width:50px' src='<?php echo base_url().$obj->img; ?>' alt='' />
                                                </a>
                                            </td>                                         
                                            <td><?php echo $obj->titulo; ?></td>
                                            <td><?php echo $obj->subtitulo; ?></td>
                                            <td><?php echo substr($obj->texto, 0 , 255);  ?></td>
                                            <td><?php echo substr($obj->intro_text, 0 , 255);  ?></td>
                                            <td><?php echo $obj->scategoria; ?></td>
                                            <td>
                                                <a class='thumbnail' title='File' href='<?php echo base_url().$obj->file; ?>' >
                                                  File
                                                </a>
                                            </td> 
                                             <td class="center" width="100px">
                                                <span class="tip">
                                                    <a href="<?php echo cms_url('lineas/productos/delete') ?>" class="uibutton special" data-action="special-delete" data-value="<?php echo $obj->id ?>">Eliminar</a>
                                                </span>
                                            </td>
                                        </tr>
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


<script>
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
                                        // Aquí desaparece la imagen ya que estamos reemplazando todo el HTML del contenido de la div.
                                        $("#table_contet").html(data);
                                        
                                    }
                          });
                    $form[0].reset();
                    $('#img').val('-1');
                    $('#file').val('-1');
                    $('#id').val('');

                    var bar0 = $('.bar0');
                    var percent0 = $('.percent0');
                    var status0 = $('#status0');

                    status0.empty();
                    var percentVal = '0%';
                    bar0.width(percentVal)
                    percent0.html(percentVal);              

                    var bar1 = $('.bar1');
                    var percent1 = $('.percent1');
                    var status1 = $('#status1');

                    status1.empty();
                    var percentVal1= '0%';
                    bar1.width(percentVal1)
                    percent1.html(percentVal1);

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

    $('#bt_form').click(function() {
        var $form = $('#formajax');
        var data = $form.serialize();
        enviarajax($form, data);
        return false;
    });




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
                status0.html("Archivo subido con exito");
                inp0.val(xhr.responseText);
            }
        }
    });

    var bar1 = $('.bar1');
    var percent1 = $('.percent1');
    var status1 = $('#status1');
    var inp1 = $('#file');
    $('form#file_upload').ajaxForm({
        beforeSend: function() {

            status1.empty();
            var percentVal = '0%';
            bar1.width(percentVal)
            percent1.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar1.width(percentVal)
            percent1.html(percentVal);
        },
        success: function() {
            var percentVal = '100%';
            bar1.width(percentVal)
            percent1.html(percentVal);
        },
        complete: function(xhr) {
            if (xhr.responseText === "false") {
                var percentVal = '0%';
                bar1.width(percentVal)
                percent1.html(percentVal);
                status1.html("Archivo no valido...!");
                inp1.val('-1');
            } else {
                status1.html("Archivo subido con exito");
                inp1.val(xhr.responseText);
            }
        }
    });

</script>