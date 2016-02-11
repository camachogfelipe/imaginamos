<div class="container">
     <div class="row-fluid">
        <div class="span12"  style="color: #208BBD;">
            <h3><?php echo $section; ?></h3>
        </div>
         
    </div>
    <div class="row-fluid">
       <div class="span12">
            <div class="w-box w-box-blue">
                <div class="w-box-header">
                    <h4><?php echo $section_title; ?></h4>
                </div>
                <div class="w-box-content cnt_a">
                    <div class="row-fluid">
                        <?php echo form_open_multipart($ruta_add,array("id"=>"validate_field_types" ,"novalidate"=>"novalidate")) ?>
                        <div class="row-fluid">
                          <input name="id" value="" id="id" type="hidden">
                         
                           <div class="span3">
                              <label class="req" >Imagen de Grupo</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                <img id="img" src="" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="width: 150px; height: 150px; "></div>
                                            <div>
                                                <span class="btn btn-small btn-file">
                                                    <span class="fileupload-new">Cargar Imgen</span>
                                                    <span class="fileupload-exists">Cambiar</span>
                                                    <input type="file" name="path" id="path" />
                                                </span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                                            </div>
                                        </div>
                                         <span class="help-block">280 x 116</span>
                          </div>
                          
                          <div class="span6">
                              <label class="req">Nombre de Categoria</label>
                              <input type="text" id="categoria" name="categoria" class="span12" maxlength="32">
                          </div>
                          
                          <div class="span8">
                              <label class="req">Descripción</label>
                               <textarea class="span12" name="descripcion" id="count-textarea2" data-count="645" cols="30" rows="3"></textarea>
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
                       
                          <div class="span6">
                        <label class="req">Categorias</label>
                        <select name="categoria_id" class="span10">
                            <?php if (!empty($categorias)) : ?>
                                <?php foreach ($categorias as $line) : ?>
                                    <option value="<?php echo $line->id; ?>" selected="selected"><?php echo $line->categoria; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                          
                          
                          </div>
                          <div class="span12">
                            <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
                          </div>
                        

                        <?php echo form_close() ?>

                    </div>
                </div>
            </div>
        </div>
       </div>
      <div class="row-fluid">
        <div class="span12">
            <div class="w-box w-box-blue">
                <div class="w-box-header">
                    <h4>Datos Guardados</h4>
                </div>
                <div class="w-box-content">
                    <table id="dt_basic" class="dataTables_full table table-striped">
                        <thead>
                            <tr>
                                <th class="span2" >Imagen</th>
                                <th class="span2" >Nombre</th>
                                <th class="span4" >Dscripcion</th>
                                <th class="span2" >Linea</th>
                                <th class="span2" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody id='table_contet'  >
                         <?php if (!empty($datos)) : ?>
                            <?php foreach ($datos as $img) : ?>
                                <tr class="odd gradeX parent-delete">
                                   <td>
                                        <a class="thumbnail" title="Imagen" href="<?php echo base_url().$img->imagen_path ?>">
                                            <img style="height:50px;width:50px" src="<?php echo base_url().$img->imagen_path ?>" alt="" />
                                        </a>
                                    </td>
                                    <td>
                                      <?php echo $img->categoria; ?>
                                    </td>
                                    <td>
                                      <?php echo substr($img->descripcion, 0, 255)."..."; ?>
                                    </td>
                                     <td>
                                      <?php echo $img->linea_titulo; ?>
                                     </td>
                                    <td class="center" width="100px">
                                        <a href="<?php echo $ruta_delete ?>" class="btn btn-danger btn-small logic-delete" data-value="<?php echo $img->id ?>">Eliminar</a>
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