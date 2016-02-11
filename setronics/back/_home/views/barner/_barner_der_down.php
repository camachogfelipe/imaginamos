<div class="row-fluid">
    <div class="span12">
        <div class="w-box w-box-blue">
            <div class="w-box-content cnt_a">
                <?php echo form_open_multipart(cms_url('home/barners/add_der_down'), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
                <div class="row-fluid">
                    <input name="id" value="" id="id" type="hidden">

                    <div class="span3">
                        <label class="req" >Imagen</label>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                <img id="img" src="" alt="">
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; "></div>
                            <div>
                                <span class="btn btn-small btn-file">
                                    <span class="fileupload-new">Cargar Imgen</span>
                                    <span class="fileupload-exists">Cambiar</span>
                                    <input type="hidden" value="" name="imagen_id" >
                    <input type="file" value="" name="imagen_path" id="path" />
                                </span>
                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                            </div>
                        </div>
                        <span class="help-block">320 x 222</span>
                    </div>

                    <div class="span2">
                        <label class="req">Titulo</label>
                        <input type="text" id="titulio" name="titulo" class="span12" maxlength="32">
                    </div>

                    <div class="span3">
                        <label class="req">Subtitulo</label>
                        <input type="text" id="subtitulio" name="subtitulo" class="span12" maxlength="32">
                    </div>
                    
                    <div class="span6" >
                        <label class="req">Url</label>
                        <input type="text" id="url" name="url" class="span10" maxlength="32">
                    </div>
                    
                    <div class="span6">
                        <label class="req">Linea Asociada</label>
                        <select name="linea_id" class="span10">
                            <?php if (!empty($lineas)) : ?>
                                <?php foreach ($lineas as $line) : ?>
                                    <option value="<?php echo $line->id; ?>" selected="selected"><?php echo $line->titulo; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="formSep">
                        <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
                    </div>

                </div>
                <?php echo form_close() ?>
                <?php if (!empty($datos)) : ?>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="w-box w-box-blue">
                                <div class="w-box-header">
                                    <h4>Archivos Guardados</h4>
                                </div>
                                <div class="w-box-content">
                                    <table id="dt_basic" class="dataTables_full table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="span1" >Imagen</th>
                                                <th class="span2" >Titulo</th>
                                                <th class="span4" >subtitulo</th>
                                                <th class="span1" >Linea</th>
                                                <th class="span2" >url</th>
                                                <th class="span2" >Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id='table_contet'  >

                                            <?php foreach ($datos as $img) : ?>
                                                <tr class="odd gradeX parent-delete">
                                                    <td>
                                                        <a class="thumbnail img_action_zoom" title="Imagen" href="<?php echo base_url() . $img->imagen_path ?>">
                                                            <img style="height:50px;width:50px" src="<?php echo base_url() . $img->imagen_path ?>" alt="" />
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <?php echo $img->titulo; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $img->subtitulo; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $img->linea_titulo; ?>
                                                    </td>
                                                    <td>
                                                        <a class="link" title="link" href="<?php echo base_url() . $img->url; ?>">
                                                            <?php echo substr($img->url, 0, 15) . "..."; ?>
                                                        </a>
                                                    </td>
                                                    <td class="center" width="100px">
                                                        <a href="<?php echo cms_url('home/barners/delete_der_down') ?>" class="btn btn-danger btn-small logic-delete" data-value="<?php echo $img->id ?>">Eliminar</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
