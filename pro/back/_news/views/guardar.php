<div class="clearfix" style="float:right; padding:.8em 1em 0 0;">
    <a href="<?php echo $regresar_url ?>" class="uibutton icon normal answer">Regresar</a>
</div>

<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span><?php echo ($edit_mode ? 'Editar noticia' : 'Crear noticia') ?></span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="clearfix">

                        <?php echo form_open($save_url, 'id="uploader_form"') ?>

                        <div class="section">
                            <label for="title">Título</label>
                            <div><input type="text" name="title" id="title"  class="large" value="<?php echo set_value('nombre', ($edit_mode ? $datos->title : null)) ?>" ></div>
                        </div>
                        
                        <div class="section">
                            <label for="content">Contenido</label>
                            <div><textarea name="content" id="content" cols="30" rows="10" class="wysiwyg"><?php echo set_value('contenido', ($edit_mode ? $datos->content : null)) ?></textarea></div>
                        </div>


                        <div class="section">
                            <label>Cargar Imagenes</label>    
                            <div id="container">
                                <div id="drag-drop-area">
                                    <div class="drag-drop-inside">
                                        <p>
                                            Arrastre la imagen acá <br> o <br> 
                                            <a id="pickfiles" class="uibutton" href="#">Seleccione</a>
                                        </p>
                                    </div>
                                </div>
                                <div id="uploader-file-list"></div>
                            </div>
                        </div>

                        <br><br>

                        <button type="submit" class="uibutton">Guardar</button>

                        <?php echo form_close() ?>

                    </div>

                </fieldset>
            </div>

        </div>

        <?php if ($edit_mode) : ?>
            <section class="clearfix" style="margin-top:4em;">
                <h3>Imagenes actuales</h3>

                <div class="tableName toolbar">
                    <table class="display" data-action="sortable" data-sortable-container="tbody" data-sortable-table="album_subtemas_items">
                        <thead>
                            <tr>
                                <th style="width:400px;"><div class="th_wrapp">Imagen</div></th>
                               
                                <th style="width:100px;"><div class="th_wrapp">Acciones</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos->news_image as $dato) : ?>
                                <tr id="<?php echo 'item_', $dato->id ?>" class="odd gradeX parent-delete">
                                    <td class="center"><img src="<?php echo cms_upload_url($dato->thumb) ?>" alt=""  /></td>
                                  
                                    <td class="center">
                                        <span class="tip">
                                            <a href="<?php echo cms_url('admin/actions/delete') ?>" class="uibutton special" data-action="special-delete" data-table="news_images" data-field="id" data-value="<?php echo $dato->id ?>" data-delete-file="<?php echo (!empty($dato->image) ? $dato->image : '') ?>">
                                                Eliminar
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        
        
            
        <?php endif; ?>

    </div>	
</div>

<script>
    /*  */
    var uploader = new plupload.Uploader({
        runtimes : 'html5, flash, gears, html4',
        browse_button : 'pickfiles',
        container : 'container',
        drop_element : 'drag-drop-area',
        
        multipart : true,
        multi_selection: true,
        
        url : <?php echo json_encode($upload_url) ?>,
        flash_swf_url : <?php echo json_encode(global_asset('plupload/js/plupload.flash.swf')) ?>,
        silverlight_xap_url : <?php echo json_encode(global_asset('plupload/js/plupload.silverlight.xap')) ?>,
        
        filters : [
            {title : "Archivos de imagen", extensions : "jpg,gif,png,jpeg"}
        ]
        
    });
    
    var edit_mode = <?php echo json_encode($edit_mode) ?>, can_submit = true;
    
    CMS.Uploader.queueMaxima = 10;
    uploader.bind('init', CMS.Uploader.init);
    uploader.bind('FilesAdded', CMS.Uploader.filesAdded);
    uploader.bind('UploadProgress', CMS.Uploader.UploadProgress);
    uploader.bind('Error', CMS.Uploader.Error);
    uploader.init();
    
    $('#uploader_form').on('submit', function(e) {
        
        if(!edit_mode){
            can_submit = uploader.files.length > 0;
        }
       
        // Files in queue upload them first
        if (can_submit) {
            var 
            $this = $(this),
            uploader_params ={
                files_length : uploader.files.length
            },
            data = $.extend($this.serializeObject(), uploader_params);
        
            $.ajax({
                url : $this.attr('action'),
                data : data,
                type : $this.attr('method'),
                dataType : 'json',
                max_file_count: 1,
                chunk_size : '1mb',
                unique_names : true,
                
                beforeSend : function(){
                    CMS.Loading.start('Guardando...');
                },
                
                success : function(json){
                    if(json.ok){
                        
                        /* Setteando el ID del nuevo elemento como parametro para la subida */
                        uploader.settings.multipart_params = { id : json.id };
                        
                        /* Cuando haya subido redireccionar segun la url devuelta del AJAX */
                        uploader.bind('StateChanged', function() {
                            if (uploader.files.length === (uploader.total.uploaded + uploader.total.failed)){
                                window.location.reload();
                            }
                        });
                        
                        /* Inciar subida */
                        uploader.start();
                    } else {
                        CMS.Modals.alerta(json.messages, json.title_error)
                    }
                },
                
                
                complete : function(){
                    CMS.Loading.end();
                }
            });
            
            
            
            
        } else {
            CMS.Modals.alerta('Debe elegir al menos una imagen para poder continuar.', 'Error al guardar datos');
        }
           

        return false;
    });
    
    
    
</script>