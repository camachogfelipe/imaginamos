<div class="container">
     <div class="row-fluid">
        <div class="span12"  style="color: #208BBD;">
            <h3>Lineas</h3>
        </div>
    </div>
    <div class="row-fluid">
       <div class="span12">
            <div class="w-box w-box-blue">
                <div class="w-box-header">
                    <h4>Linea</h4>
                </div>
                <div class="w-box-content cnt_a">
                    <div class="row-fluid">
                        <?php echo form_open_multipart(cms_url('lineas/lineas/add'),array("id"=>"validate_field_types" ,"novalidate"=>"novalidate")) ?>
                        <div class="row-fluid">
                          <input name="id" value="" id="id" type="hidden">
                         
                          <div class="span4">
                              <label class="req">Titulo</label>
                              <input type="text" id="titulio" name="titulo" class="span12" >
                                 
                          </div>
                       
                          <div class="span4">
                              <label class="req">Color</label>
                       
                              <input type="text" class="span8"  name="color"  >
                          </div>
                          
                          <div class="span8">
                              <label class="req">Descripción de Novedad</label>
                               <textarea class="span12" name="descripcion" id="count-textarea2" data-count="645" cols="30" rows="3"></textarea>
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
                                <th class="span2" >Titulo</th>
                                <th class="span1" >color</th>
                                <th class="span7" >Dscripcion</th>
                                <th class="span2" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody id='table_contet'  >
                         <?php if (!empty($datos)) : ?>
                            <?php foreach ($datos as $img) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td>
                                        <?php echo $img->titulo; ?>
                                    </td>
                                    <td>
                                       class ="<?php echo $img->color; ?>"   
                                    </td>
                                    <td>
                                      <?php echo substr($img->descripcion, 0, 255)."..."; ?>
                                    </td>
                                    <td class="center" width="100px">
                                        <a href="<?php echo cms_url('lineas/lineas/delete') ?>" class="btn btn-danger btn-small logic-delete" data-value="<?php echo $img->id ?>">Eliminar</a>
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