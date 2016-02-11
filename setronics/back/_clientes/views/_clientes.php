
<header>
    <div class='container'>
        <div class="w-box">
            <div class="w-box-header">
                <h4>Pestañas Diseño y Construccion</h4>
                <div id="termino"></div>
            </div>
        </div>
    </div>
</header> 

<div class="container">

    <div class="row-fluid">

        <div class="span4">
            <div class="w-box">
                <div class="w-box-header">
                    <h4>Pestaña de Diseño</h4>
                </div>
                <div class="w-box-content cnt_a">
                    <div class="row-fluid">
                        <?php echo form_open_multipart(cms_url('admin/clientes/save_upload'),array("id"=>"validate_field_types" ,"novalidate"=>"novalidate")) ?>
                        <input name="id" value="" id="id" type="hidden">

                            <div class="formSep">
                                <label class="req">Nombre del Cliente</label>
                                <input id="cliente_name" class="span10" type="text" name="cliente_name" value="" />
                            </div>
                            <div class="formSep">
                               <label class="req" >logo de Cliente</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                <img id="img" src="" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-small btn-file">
                                                    <span class="fileupload-new">Select image</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" name="file" id="imgData" />
                                                </span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                          </div>

                          <div class="formSep">
                            <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
                          </div>
                        

                        <?php echo form_close() ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="span7">
            <div class="w-box">
                <div class="w-box-header">
                    <h4>Archivos Guardados</h4>
                </div>
                <div class="w-box-content">
                    <table id="dt_basic" class="dataTables_full table table-striped">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Nombre del Cliente</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <?php if (!empty($datos)) : ?>
                        <tbody id='table_contet' data-url-ajax="clientes/datos_ajax" class="reload-ajax">
                            <?php foreach ($datos as $img) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td>
                                        <a class="thumbnail" title="Imagen" href="<?php echo base_url() . "assets/" . $img->path . $img->file ?>">
                                            <img style="height:50px;width:50px" src="<?php echo base_url() . "assets/" . $img->path . $img->file ?>" alt="" />
                                        </a>
                                    </td>
                                    <td><?php echo $img->cliente_name ?></td>
                                    <td class="center" width="100px">
                                        <a href="<?php echo cms_url('admin/clientes/delete') ?>" class="btn btn-danger btn-small logic-delete"  data-delete_file="<?php echo $img->file; ?>" data-field="id" data-value="<?php echo $img->id ?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>

        
    </div>
</div>