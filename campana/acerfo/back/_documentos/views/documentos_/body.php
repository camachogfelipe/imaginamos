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
            Documentos
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                    <div class="clearfix">

                        <?php echo form_open(cms_url('documentos/documentos/add'), 'id="formajax"') ?>

                        <legend><h1>Documento</h1></legend>

                        <input name="id" value="" id="id" type="hidden">
                        <input name="img" value="-1" id="img" type="hidden">
                        <input name="file" value="-1" id="file" type="hidden">
                        <div class="section">
                            <label class="req">Título (Fuente 1)</label>
                            <input id="titulo_funte1" class="large" type="text" name="titulo_funte1" value="" maxlength="7" />
                        </div>
                        <div class="section">
                            <label class="req">Título (Fuente 2)</label>
                            <input id="titulo_funte2" class="large" type="text" name="titulo_funte2" value="" maxlength="10" />
                        </div>
                        <div class="section">
                        	<label>Destacado</label>
                          <div>
                            <input type="checkbox" id="des_si" name="des_si" onChange="cambio()" checked="true" class="YesOrNo" value="1" >
                          </div>
                        </div>
                        <div class="section">
                            <label class="req" >Texto Descriptivo</label>
                            <textarea rows="3" id="texto" class="large" maxlength="190" name="texto" placeholder="Text Descriptivo..."></textarea>
                        </div>
                    
                        <?php echo form_close() ?>

                        <form id="img_upload" action="<?php echo cms_url('documentos/documentos/upload_img') ?>" method="post" enctype="multipart/form-data">
                            <div class="section">
                                <label>Imágen Min *</label>
                                <div>
                                		<span style="color: red">La imágen debe ser de 152x164 pixeles</span><br>
                                    <input type="file" name="img" id="imagen_up" value=""  ><br>
                                    <input id="simagen" type="submit" value="Subir Imagen">
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
                        <form id="file_upload" action="<?php echo cms_url('documentos/documentos/upload_file') ?>" method="post" enctype="multipart/form-data">
                            <div class="section">
                                <label>Archivo</label>
                                <div>
                                		<span style="color: red">El archivo debe ser en formato de Excel, Word, PowerPoint o PDF</span><br>
                                    <input type="file" id="archivo_up" name="file" value=""  ><br>
                                    <input type="submit" id="sarchivo" value="Subir Archivo">
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
                                    <a id="bt_form" type="button" href="#" class="uibutton">Guardar Documento</a> 
                                    <!--   <button type="submit" id="Guardar" class="uibutton" >Crear Notificacion</button> -->
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th style="width: 10%;">Imagen</th>
                                    <th style="width: 15%;">Título<div style="display: inline; font-size: 6px;"> (Fuente 1)</div> </th>
                                    <th style="width: 15%;">Título<div style="display: inline; font-size: 6px;"> (Fuente 2)</div></th>
                                    <th style="text-align: justify;">Texto Descriptivo</th>
                                    <th style="text-align: justify;">Archivo</th>
                                    <th style="width: 15%;" ><div class="th_wrapp">Acciones</div></th>
                            </tr>
                            </thead>
                            <tbody id='table_contet' data-url-ajax="documentos/datos_ajax" class="reload-ajax">
                              <?php if (!empty($datos)) : ?>
                                    <?php foreach ($datos as $obj) : ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td>
                                                <a class="thumbnail" title="Imagen" href="<?php echo base_url().$obj->img ?>">
                                                    <img style="height:50px;width:50px" src="<?php echo base_url().$obj->img ?>" alt="" />
                                                </a>
                                            </td>
                                            <td><?php echo $obj->titulo_funte1; ?></td>
                                            <td><?php echo $obj->titulo_funte2; ?></td>
                                            <td style="text-align: justify;"><?php echo $obj->texto; ?></td>
                                            <td>
                                                <a class="thumbnail"  target="_blank" title="Imagen" href="<?php echo base_url().$obj->file ?>">
                                                   File
                                                </a>
                                            </td>
                                            <td class="center" width="100px">
                                                <span class="tip">
                                                    <a  href="<?php echo cms_url('documentos/documentos/delete') ?>" class="uibutton special" data-action="special-delete" data-value="<?php echo $obj->id ?>">Eliminar</a>
                                                    <a id="edit_<?php echo $obj->id; ?>" href="<?php echo cms_url('documentos/documentos/edit/') ?>" data-value="<?php echo $obj->id ?>" class="uibutton " >Editar</a>
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
                                                $('#titulo_funte1').val(json.titulo_funte1);
                                                $('#titulo_funte2').val(json.titulo_funte2);
                                                $('#texto').val(json.texto);
                                                $('#img').val(json.img);
                                                $('#file').val(json.file);
																								if(json.destacado == 1)
																									$('#des_si').attr("checked", true);
																								else {
																									$('#des_si').attr("checked", false);
																									$('#des_si').val(0);
																								}
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
                status1.html("Archivo subido con éxito");
                inp1.val(xhr.responseText);
            }
        }
    });
		
		iOSCheckbox.defaults = {
      onChange: "cambio"
    };
		
		function cambio(){
			var valor = jQuery("#des_si").val();
			if(valor == 1) jQuery("#des_si").val(0);
			else jQuery("#des_si").val(1);
			//alert("cambio");
		};
</script>