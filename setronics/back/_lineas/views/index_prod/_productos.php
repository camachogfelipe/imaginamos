<div class="row-fluid">
    <div class="span12">
        <div class="w-box w-box-blue">
            <div class="w-box-content cnt_a">
                <?php echo form_open_multipart(cms_url('productos/add'), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
                <div class="row-fluid">
                    <input name="id" value="" id="id" type="hidden">
 
                     <div class="span6">
                              <label class="req">Nombre del Producto</label>
                              <input type="text" id="titulo" name="titulo" class="span12" maxlength="24">
                              <span class="help-block">Maximo de caracteres (24)</span>
                     </div>
                    
                    <div class="span4">
                        <label class="req">Precio Proveedor</label>
                        <div class="input-prepend input-append">
                            <span class="add-on">$</span><input type="text" size="16" id="precio_prov" name="precio_prov" class="span5"><span class="add-on">.00</span>
                        </div>
                    </div> 
                    
                    <div class="span4">
                        <label class="req">Precio Cliente</label>
                        <div class="input-prepend input-append">
                            <span class="add-on">$</span><input type="text" size="16" id="precio_client" name="precio_client" class="span5"><span class="add-on">.00</span>
                        </div>
                    </div> 
                    
                     <div class="span6">
                        <label class="req">Tipo de Producto</label>
                        <select name="grupo_id" id="grupo_id" class="span10">
                            <?php if (!empty($grupos)) : ?>
                                <?php foreach ($grupos as $line) : ?>
                                    <option value="<?php echo $line->id; ?>" selected="selected"><?php echo $line->grupo; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    
                    <div class="span6">
                              <label class="req">Descripción Intro</label>
                               <textarea class="span12" name="descripcion_intro" id="count-textarea2" data-count="63" cols="30" rows="3"></textarea>
                    </div>
                    
                    <div class="span6">
                              <label class="req">Descripción</label>
                               <textarea class="span12" name="descripcion" cols="30" rows="3"></textarea>
                    </div>
                    <div class="span6">
                              <label class="req">Especificación Tecnica</label>
                               <textarea class="span12" name="especificacion_tecnica" cols="30" rows="3"></textarea>
                    </div>
                    
                    <div class="span6">
                        <label class="req">Informacion Tecnica</label>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <input type="hidden" value="" name="">
                            <span class="btn btn-small btn-file">
                                <span class="fileupload-new">Seleccionar Archivo</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" name="path_info_tenica" id="imgData" >
                            </span>
                            <span class="fileupload-preview"></span>
                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                        </div>
                        <span class="help-block">pdf|xls|docx</span>
                    </div>
                    
                    <div class="span6">
                        <label class="req">Folleto</label>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <input type="hidden" value="" name="">
                            <span class="btn btn-small btn-file"><span class="fileupload-new">Seleccionar Archivo</span><span class="fileupload-exists">Change</span>
                                <input type="file" name="path_folleto" id="imgData" ></span>
                            <span class="fileupload-preview"></span>
                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                        </div>
                        <span class="help-block">pdf|xls|docx</span>
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
                                    <h4>Listado de Productos</h4>
                                </div>
                                <div class="w-box-content">
                                    <table id="dt_basic" class="dataTables_full table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 16px;"><i class="splashy-star_empty"></i></th>
                                                <th class="span2" >Titulo</th>
                                                <th class="span2" >Tipo</th>
                                                <th class="span3" >Intro</th>
                                                <th class="span1" >$ Clie.</th>
                                                <th class="span1" >$ Prov.</th>
                                                <th class="span1" >Archivos</th>
                                                <th class="span2" >Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id='table_contet'  >

                                            <?php foreach ($datos as $img) : ?>
                                                <tr class="odd gradeX parent-delete">
                                                    <td class="nolink starSelect "><i class="mbox_star splashy-star_empty" data-url="<?php echo cms_url("productos/recomendar") ?>" data-id="<?php echo $img->id ?>" style="visibility: visible;"></i></td>
                                                    <td>
                                                        <?php echo $img->titulo; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $img->grupo_grupo; ?>
                                                    </td>
                                                    <td style="text-align: justify;">
                                                        <?php echo $img->descripcion_intro; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $img->precio_client; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $img->precio_prov; ?>
                                                    </td>
                                                    <td>
                                                        <?php if(!empty($img->path_info_tenica)){ ?>
                                                        <a class="link" target="_blank" title="link" href="<?php echo base_url() . $img->path_info_tenica; ?>">
                                                            Tecnica
                                                        </a>
                                                        <?php } if(!empty($img->path_folleto)){ ?>
                                                        <a class="link" target="_blank" title="link" href="<?php echo base_url() . $img->path_folleto; ?>">
                                                            Folleto
                                                        </a>
                                                        <?php } ?>
                                                                
                                                    </td>
                                                    <td class="center" width="100px">
                                                        <a href="<?php echo cms_url('lineas/productos/delete') ?>" class="btn btn-danger btn-small logic-delete" data-value="<?php echo $img->id ?>">Eliminar</a>
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
