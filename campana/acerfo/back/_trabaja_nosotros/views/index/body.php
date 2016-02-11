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
            Configuración de "Trabaje Con Nosotros"
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                    <div class="clearfix">

                        <?php echo form_open(cms_url('trabaja_nosotros/inicio/add'), 'id="formajax"') ?>

                        <legend><h1> Trabaja Con Nosotros</h1></legend>

                        <input  name="id" value="<?php echo!empty($obj_id) ? $obj_id : ""; ?>" id="id" type="hidden">
                   
                        <div class="section" id="uploadify">
                            <label class="req">Nombre Imágen</label>
                            <img id="imgvew" src="<?php echo base_url().'uploads/'.!empty($obj_img) ? $obj_img : ""; ?>" width="150" /> 
                            
                            <input id="img" type="hidden" readonly class="large" name="img" value="<?php echo!empty($obj_img) ? $obj_img : ""; ?>" />
                        </div>
                        

                        <?php echo form_close() ?>
                        <form id="img_upload" action="<?php echo cms_url('trabaja_nosotros/inicio/upload_img') ?>" method="post" enctype="multipart/form-data">
                            <div class="section">
                                <label>Imágen Min *</label>
                                <div>
                                		<span style="color: red">La imágen debe ser de 366x191 pixeles</span><br>
                                    <input type="file" name="img" value="<?php echo!empty($obj_img) ? $obj_img : ""; ?>"><br>
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
                            <a id="bt_form" type="button" href="#" class="uibutton">Guardar Cambios</a> 
                            <!--   <button type="submit" id="Guardar" class="uibutton" >Crear Notificacion</button> -->
                        </form>




                    </div>
                </fieldset>  
                <br/><br/>
                <!--
                <fieldset>
                    <legend><h1>Listado de Postulados</h1></legend>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>Vacante</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Ciudad</th>
                                    <th>Telefono</th>
                                    <th>Comentario</th>
                                    <th>Archivo CV</th>
                                    <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                            </thead>
                            <tbody id='table_contet'  >
                            <?php if (!empty($datos)) : ?>
                                    <?php foreach ($datos as $obj) : ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $obj->vacante ?></td>
                                            <td><?php echo $obj->nombre ?></td>
                                            <td><?php echo $obj->email ?></td>
                                            <td><?php echo $obj->ciudad ?></td>
                                            <td><?php echo $obj->telefono ?></td>
                                            <td><?php echo $obj->comentario ?></td>
                                            <td>
                                                <a class="thumbnail" title="Imagen" href="<?php echo base_url() . $obj->cv ?>">
                                                    Archivo CV
                                                </a>
                                            </td>
                                            <td width="100px">
                                                <span class="tip">
                                                    <a href="<?php echo cms_url('trabaja_nosotros/index/delete') ?>" class="uibutton special"  data-field="id" data-value="<?php echo $obj->id ?>">Eliminar</a>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                            <?php endif; ?>
                           </tbody>               
                        </table>
                    </div>
                </fieldset>
                -->
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
                $('imgvew').attr('src','./uploads/'+xhr.responseText+'?'+Date()); 
            }
        }
    });



</script>

