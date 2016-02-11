<div class="container">
     <div class="row-fluid">
        <div class="span12"  style="color: #208BBD;">
            <h3>Logos</h3>
        </div>
    </div>
    <div class="row-fluid">
       <div class="span4">
            <div class="w-box w-box-blue">
                <div class="w-box-header">
                    <h4>Logos</h4>
                </div>
                <div class="w-box-content cnt_a">
                    <div class="row-fluid">
                        <?php echo form_open_multipart(cms_url('home/logos/save_upload'),array("id"=>"validate_field_types" ,"novalidate"=>"novalidate")) ?>
                        <input name="id" value="" id="id" type="hidden">
                           <div class="formSep">
                               <label class="req" >logos Cargados</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                <img id="img" src="" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-small btn-file">
                                                    <span class="fileupload-new">Cargar Imgen</span>
                                                    <span class="fileupload-exists">Cambiar</span>
                                                    <input type="file" name="path" id="imgData" />
                                                </span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
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
        <div class="span8">
            <div class="w-box w-box-blue">
                <div class="w-box-header">
                    <h4>Archivos Guardados</h4>
                </div>
                <div class="w-box-content">
                    <table id="dt_basic" class="dataTables_full table table-striped">
                        <thead>
                            <tr>
                                <th class="span5" >Logo</th>
                                <th class="span3" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody id='table_contet'  >
                         <?php if (!empty($datos)) : ?>
                            <?php foreach ($datos as $img) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td>
                                        <a class="thumbnail" title="Imagen" href="<?php echo base_url().$img->path; ?>">
                                            <img style="height:50px;" src="<?php echo base_url().$img->path; ?>" alt="" />
                                        </a>
                                    </td>
                                    <td class="center" width="100px">
                                        <a href="<?php echo cms_url('home/logos/delete') ?>" class="btn btn-danger btn-small logic-delete" data-field="id" data-value="<?php echo $img->id ?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>

        
    </div>
</div>