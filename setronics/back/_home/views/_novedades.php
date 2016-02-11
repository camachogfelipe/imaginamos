<div class="container">
     <div class="row-fluid">
        <div class="span12"  style="color: #208BBD;">
            <h3>Novedades</h3>
        </div>
    </div>
    <div class="row-fluid">
       <div class="span12">
            <div class="w-box w-box-blue">
                <div class="w-box-header">
                    <h4>Novedad</h4>
                </div>
                <div class="w-box-content cnt_a">
                    <div class="row-fluid">
                        <?php echo form_open_multipart(cms_url('home/novedades/save_upload'),array("id"=>"validate_field_types" ,"novalidate"=>"novalidate")) ?>
                        <div class="row-fluid">
                          <input name="id" value="" id="id" type="hidden">
                           <div class="span3">
                              <label class="req" >Imagen de Novedad</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                <img id="img" src="" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; "></div>
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
                         
                          <div class="span2">
                              <label class="req">Titulo</label>
                              <input type="text" id="titulio" name="titulo" class="span12" maxlength="32">
                          </div>
                          
                          <div class="span3">
                              <label class="req">Url</label>
                              <input type="text" name="link"  id="link" class="span12" >
                          </div>
                          
                          <div class="span2">
                                        <label class="req">Fecha de Novedad</label>
                                        <input id="dpYear" name="fecha" data-date="2013/08/16" class="span12" data-date-format="yyyy/mm/dd" data-date-start-view="2" value="2013/08/16" type="text" />
                                        <span class="help-block">mm / dd / yyyy</span>
                          </div>
                          <div class="span7">
                              <label class="req">Descripción de Novedad</label>
                               <textarea class="span12" name="texto" id="count-textarea2" data-count="102" cols="30" rows="3"></textarea>
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
       </div>
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
                                <th class="span1" >Fecha</th>
                                <th class="span4" >Texto</th>
                                <th class="span2" >Link</th>
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
                                      <?php echo $img->titulo; ?>
                                    </td>
                                    <td>
                                      <?php echo $img->fecha; ?>
                                    </td>
                                    <td>
                                      <?php echo $img->texto; ?>
                                    </td>
                                    <td>
                                        <a class="link" title="link" href="<?php echo base_url().$img->link; ?>">
                                          <?php echo substr($img->link, 0, 15)."...";?>
                                        </a>
                                    </td>
                                    <td class="center" width="100px">
                                        <a href="<?php echo cms_url('home/novedades/delete') ?>" class="btn btn-danger btn-small logic-delete" data-value="<?php echo $img->id ?>">Eliminar</a>
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