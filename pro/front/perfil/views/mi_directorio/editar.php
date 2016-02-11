<div class="contenido">

    <div class="mi-directorio-cont">
        <ul class="tabs">
            <li class="t6"><a href="javascript:;">Editar anuncio</a></li>
        </ul>
    </div>

    <div class="clear"></div>

    <div class="selectores">
        <?php echo form_open_multipart(null, 'id="md-form"') ?>

        <?php if (!empty($alert_messages)) : ?>
            <div class="messages">
                <?php echo $alert_messages ?>
            </div>
        <?php endif; ?>

        <div class="selectores-publicar2">

            <div style="margin-bottom:2em;">

                

                <div class="logo-img"><img src="<?php echo (!empty($datos->logo) ? uploads_url($datos->logo) : front_asset('images/logo-anuncio.png')) ?>" alt="Logo del anuncio: <?php echo $datos->empresa ?>" /></div>

                Cambiar: <input type="file" name="logo"  />
                <div class="acotacion-campo3">Tamaño del logo: ( 127x127 px )</div>
            </div>
			
            <div class="campo-reg-lab" style="width:254px;">
    			<label style="padding-left: 4px;">Nombre de la Empresa</label>
            	<input name="empresa" class="campo4" type="text" value="<?php echo $datos->empresa ?>">
            </div>
            
             <div class="campo-reg-lab" style="width:254px;">
    			<label style="padding-left: 4px;">Dirección</label>
            	<input name="direccion" class="campo4" type="text" value="<?php echo $datos->direccion ?>">
            </div>
            
            <div class="campo-reg-lab" style="width:254px;">
    			<label style="padding-left: 4px;">Teléfono</label>
            	<input name="telefono" class="campo4" type="text" value="<?php echo $datos->telefono ?>">
                <div class="clr"></div>
            </div>

            <div class="clr"></div>
            
            <div class="campo-reg-lab" style="width:254px;">
    			<label style="padding-left: 4px;">Sitio web</label>
            	<input name="sitio_web" class="campo4" type="text" value="<?php echo $datos->sitio_web ?>">
            </div>
            
            <div class="campo-reg-lab" style="width:254px;">
    			<label style="padding-left: 4px;">E-mail</label>
            	<input name="email" class="campo4" type="text" value="<?php echo $datos->email ?>">
                <div class="clr"></div>
            </div>

            <div class="clr"></div>
			
            <div class="campo-reg-lab" style="width:254px;">
    			<label style="padding-left: 4px;">Cuenta Facebook</label>
            	<input name="facebook" class="campo4" type="text" value="<?php echo $datos->facebook ?>">
            </div>
            
            <div class="campo-reg-lab" style="width:254px;">
    			<label style="padding-left: 4px;">Cuenta Twitter</label>
            	<input name="twitter" class="campo4" type="text" value="<?php echo $datos->twitter ?>">
            </div>
            
            <div class="campo-reg-lab" style="width:254px;">
    			<label style="padding-left: 4px;">Cuenta Twitter</label>
            	<input name="youtube" class="campo4" type="text" placeholder="Cuenta YouTube"  value="<?php echo $datos->youtube ?>">
                <div class="clear"></div>
            </div>

            <div class="clear"></div>
            
            <div class="campo-reg-lab" style="width:254px;">
    			<label style="padding-left: 4px;">Selecciona la categoría</label>
                <div class="selectBox no-ico" id="select-largo">
                    <?php echo form_dropdown('directorio_categoria_id', $select_categorias, $datos->directorio_categoria->id, 'style="width:386px;" class="comboBox1"') ?>
                    <div class="clr"></div>
            	</div>
            </div>
            <div class="clear"></div>
            
            <div class="lista-check3">
                <div class="select-check-tit">Cosas que ofrece adicionales:</div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]"  value="Boleteria" />
                    <label>Boleteria</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Escenario">
                    <label >Escenario</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Bar">
                    <label >Bar</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Lugar para tocar">
                    <label >Lugar para tocar</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Luces">
                    <label >Luces</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Efectos especiales">
                    <label >Efectos especiales</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Backline">
                    <label >Backline</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Proyección de video">
                    <label >Proyección de video</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Ingeniero de sonido">
                    <label >Ingeniero de sonido</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Vestidores">
                    <label >Vestidores</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Barricadas">
                    <label >Barricadas</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Transoirte">
                    <label >Transporte</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Catering">
                    <label >Catering</label>
                </div>
                <div class="elemento-check2">
                    <input class="adicionales-checkboxes" type="checkbox" name="adicionales[]" value="Seguridad">
                    <label >Seguridad</label>
                </div>

                <div class="clear"></div>
            </div>
            <textarea name="descripcion" class="area1" placeholder="Introduce las palabras clave de tu publicación (120 Caracteres)"><?php echo $datos->descripcion ?></textarea>
            <div class="clr"></div>

            <div>
                <div class="acotacion-campo3">Imagenes</div>


                <?php if ($datos->directorio_image->exists()) : ?>
                    <ul class="listImages">
                        <?php foreach ($datos->directorio_image as $image) : ?>
                            <li><a class="closeImg" href="<?php echo site_url('perfil/directorios/eliminar_imagen/' . $image->id) ?>"></a><img src="<?php echo uploads_url($image->thumb) ?>" alt="" style=" width: 100%;"/></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="clr"></div>
                <div id="container">
                    <a id="pickfiles" class="btn-primary mini" href="#">Seleccione las imagenes</a>
                    <div id="filelist" class="filelist lista-img" ></div>
                </div>
                <div class="acotacion-campo3">Tamaño de la imagen: ( 310x200 PX)</div>
            </div>
        </div>

        <input class="bot-publicar" type="submit" value="Guardar" style="margin-bottom: 20px;margin-right: 420px;margin-top: -70px;">

        <?php echo form_close(); ?>
    </div>

</div>


<script>
    (function($) {
        var adicionales = <?php echo $datos->adicionales_object ?>;
        $(function() {
            if (adicionales.length > 0) {
                $.each(adicionales, function(index, element) {
                    $('.adicionales-checkboxes[value="' + element + '"]').attr('checked', 'checked');
                });
            }
        });
    })(jQuery);
</script>




<script>
    /*  */
    $(document).ready(function() {
        $('.listImages li').hover(function() {
            $(this).find('.closeImg').css('display', 'block');
        }, function() {
            $(this).find('.closeImg').css('display', 'none');
        })
    });
    var uploader = new plupload.Uploader({
        runtimes: 'html5, flash, gears, html4',
        browse_button: 'pickfiles',
        container: 'container',
        unique_names: true,
        resize: {width: 1200, height: 1200, quality: 90},
        multipart: true,
        multi_selection: true,
        url: <?php echo json_encode($upload_url) ?>,
        flash_swf_url: <?php echo json_encode(global_asset('plupload/js/plupload.flash.swf')) ?>,
        silverlight_xap_url: <?php echo json_encode(global_asset('plupload/js/plupload.silverlight.xap')) ?>,
        filters: [
            {title: "Archivos de imagen", extensions: "jpg,gif,png,jpeg"}
        ]

    });

    uploader.bind('Init', function(up, params) {
    });


    uploader.init();

    uploader.bind('FilesAdded', function(up, files) {
        $.each(files, function(i, file) {
            $('#filelist').append(
                    '<div id="' + file.id + '">' +
                    file.name + ' (' + plupload.formatSize(file.size) + ') <b></b>' +
                    '</div>');
        });

        up.refresh();
    });

    uploader.bind('UploadProgress', function(up, file) {
        $('#' + file.id + " b").html(file.percent + "%");
    });

    uploader.bind('Error', function(up, err) {
        $('#filelist').append("<div>Error: " + err.code +
                ", Message: " + err.message +
                (err.file ? ", File: " + err.file.name : "") +
                "</div>"
                );

        up.refresh();
    });

    uploader.bind('FileUploaded', function(up, file) {
        $('#' + file.id + " b").html("100%");
    });

    $('#md-form').on('submit', function() {

        if (uploader.files.length > 0) {

            uploader.bind('StateChanged', function() {
                if (uploader.files.length === (uploader.total.uploaded + uploader.total.failed)) {
                    $('#md-form')[0].submit();
                }
            });

            uploader.start();
        } else {
            $('#md-form')[0].submit();
        }
        return false;
    });

    $('.closeImg').click(function() {
        var $this = $(this);

        if (confirm('¿Estás seguro de eliminar la imagen?')) {

            $.getJSON($this.attr('href'), null, function(json) {
                if (json.ok === true) {
                    $this.parent().fadeOut(function() {
                        return $this.remove();
                    });
                }
            });
        }

        return false;
    });
</script>


