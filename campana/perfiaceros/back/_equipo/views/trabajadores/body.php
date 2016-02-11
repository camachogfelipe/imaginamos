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
    .bar2 { background-color: #00A9FF; width:0%; height:20px; border-radius: 3px; }
    .percent2 { position:absolute; display:inline-block; top:3px; left:48%; }


</style>
<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>
            Trabajadores
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                    <div class="clearfix">

                        <?php echo form_open(cms_url('equipo/trabajadores/add'), 'id="formajax"') ?>

                        <legend><h1>Trabajadores</h1></legend>

                        <input name="id" value="" id="id" type="hidden">
                        <input name="img" value="-1" id="img" type="hidden">
                        <input name="img_min" value="-1" id="img_min" type="hidden">
                        <input name="img_grande" value="-1" id="img_grande" type="hidden">
                        <div class="section">
                            <label class="req">Nombre</label>
                            <input id="nombre" class="large" type="text" name="nombre" value="" maxlength="47" />
                        </div>
                        <div class="section">
                            <label class="req">Cargo</label>
                            <input id="cargo" class="large" type="text" name="cargo" value="" maxlength="74" />
                        </div>
                        <div class="section">
                            <label class="req">Orden</label>
                            <input id="orden" class="large" type="text" name="orden" value="" maxlength="74" />
                        </div>
                        <div class="section">
                            <label class="req" >Comentario</label>
                            <textarea rows="3" id="comentario" class="large"  name="comentario" placeholder="Comentario..."></textarea>
                        </div>
                    
                        <?php echo form_close() ?>

                        
                        <form id="img_grande_upload" action="<?php echo cms_url('equipo/trabajadores/upload_img_grande') ?>" method="post" enctype="multipart/form-data">
                            <div class="section">
                                <label>Foto Grande</label>
                                <div>
                                		<span style="color: red">La imágen debe ser de 357x386 pixeles</span><br>
                                    <input type="file" name="img_grande"><br>
                                    <input type="submit" value="Subir Imagen">
                                </div>
                            </div>
                            <div class="section">
                                <div> 
                                    <div class="progress">
                                        <div class="bar2"></div >
                                        <div class="percent2">0%</div>
                                    </div>
                                    <br/><br/><br/><br/>
                                    <div id="status2"></div>
                                </div>
                            </div>     

                        </form>
                        
                        
                        
                        <form id="img_upload" action="<?php echo cms_url('equipo/trabajadores/upload_img') ?>" method="post" enctype="multipart/form-data">
                            <div class="section">
                                <label>Foto Color</label>
                                <div>
                                		<span style="color: red">La imágen debe ser de 176x190 pixeles</span><br>
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
                        <form id="img_min_upload" action="<?php echo cms_url('equipo/trabajadores/upload_img_min') ?>" method="post" enctype="multipart/form-data">
                            <div class="section">
                                <label>Foto Gris</label>
                                <div>
                                		<span style="color: red">La imágen debe ser de 176x190 pixeles</span><br>
                                    <input type="file" name="img_min"><br>
                                    <input type="submit" value="Subir Imagen">
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
                                    <a id="bt_form" type="button" href="#" class="uibutton">Crear o Modificar Trabajador</a> 
                                    <!--   <button type="submit" id="Guardar" class="uibutton" >Crear Notificacion</button> -->
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th style="width: 15%;">Foto Mini</th>
                                    <th style="width: 15%;">Foto Detalle</th>
                                    <th style="width: 20%;">Nombre</th>
                                    <th style="width: 20%;">Cargo</th>
                                    <th>Orden</th>
                                    <th style="width: 50%;" >Comentario</th>
                                    <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                            </thead>
                            <tbody id='table_contet' data-url-ajax="trabajadores/datos_ajax" class="reload-ajax">
                            <?php if (!empty($datos)) : ?>
                                    <?php foreach ($datos as $obj) : ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td>
                                                <a class="thumbnail" title="Imagen" href="<?php echo base_url().$obj->img_min ?>">
                                                    <img style="height:50px;width:50px" src="<?php echo base_url().$obj->img_min ?>" alt="" />
                                                </a>
                                            </td>
                                            <td>
                                                <a class="thumbnail" title="Imagen" href="<?php echo base_url().$obj->img_grande ?>">
                                                    <img style="height:50px;width:50px" src="<?php echo base_url().$obj->img_grande ?>" alt="" />
                                                </a>
                                            </td>
                                            <td><?php echo $obj->nombre; ?></td>
                                            <td><?php echo $obj->cargo; ?></td>
                                            <td><?php echo $obj->orden; ?></td>
                                            <td style="text-align: justify;" ><?php echo substr($obj->comentario, 0, 255)."..."; ?></td>
                                            <td class="center" width="100px">
                                                <span class="tip">
                                                    <a href="<?php echo cms_url('equipo/trabajadores/delete') ?>" class="uibutton special" data-action="special-delete" data-value="<?php echo $obj->id ?>">Eliminar</a>
                                                    <a id="edit_<?php echo $obj->id; ?>" href="<?php echo cms_url('equipo/trabajadores/edit/') ?>" data-value="<?php echo $obj->id ?>" class="uibutton " >Editar</a>
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
                                                $('#nombre').val(json.nombre);
                                                $('#cargo').val(json.cargo);
                                                $('#comentario').val(json.comentario);
                                                $('#img').val(json.img);
                                                $('#img_min').val(json.img_min);
                                                $('#img_grande').val(json.img_grande);
																								$('#orden').val(json.orden);
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
                    $('#img_min').val('-1');
                    $('#img_grande').val('-1');
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
                    var inp1 = $('#img_min');

                    status1.empty();
                    var percentVal1 = '0%';
                    bar1.width(percentVal1)
                    percent1.html(percentVal1);

                    var bar2 = $('.bar2');
                    var percent2 = $('.percent2');
                    var status2 = $('#status2');

                    status2.empty();
                    var percentVal2 = '0%';
                    bar2.width(percentVal2)
                    percent2.html(percentVal2);


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
                status0.html("Archivo subido con exito");
                inp0.val(xhr.responseText);
            }
        }
    });

    var bar1 = $('.bar1');
    var percent1 = $('.percent1');
    var status1 = $('#status1');
    var inp1 = $('#img_min');
    $('form#img_min_upload').ajaxForm({
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
    
    
    
     var bar2 = $('.bar2');
    var percent2 = $('.percent2');
    var status2 = $('#status2');
    var inp2 = $('#img_grande');
    $('form#img_grande_upload').ajaxForm({
        beforeSend: function() {

            status2.empty();
            var percentVal = '0%';
            bar2.width(percentVal)
            percent2.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar2.width(percentVal)
            percent2.html(percentVal);
        },
        success: function() {
            var percentVal = '100%';
            bar2.width(percentVal)
            percent2.html(percentVal);
        },
        complete: function(xhr) {
            if (xhr.responseText === "false") {
                var percentVal = '0%';
                bar2.width(percentVal)
                percent2.html(percentVal);
                status2.html("Archivo no valido...!");
                inp2.val('-1');
            } else {
                status2.html("Archivo subido con exito");
                inp2.val(xhr.responseText);
            }
        }
    });

</script>