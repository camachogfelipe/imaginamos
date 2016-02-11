<div class="row-fluid">
    <div class="span12">
        <div class="w-box w-box-blue">
            <div class="w-box-content cnt_a">
                 <div class="row-fluid">
     
                    <div class="span8">
                        <label class="req">Producto</label>
                        <select name="producto_id" id="producto_id" class="span10">
                            <?php if (!empty($prod)) : ?>
                                <?php foreach ($prod as $line) : ?>
                                    <option value="<?php echo $line->id; ?>" selected="selected"><?php echo $line->titulo; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    
                    <div class="span8">
                        <label class="req">Lista de Imagenes</label>
                        <!-- <input id="dirup" value="<?php echo cms_url('lineas/gallery/add'); ?>" dato="" type="hidden"/> -->
                         <input id="dirup" value="<?php echo base_url() ."cms/lineas/gallery/add"; ?>" dato="id=0" type="hidden"/>
           
                        <div class="w-box" id="n_multiupload">
                            <div class="w-box-header">
                                <h4>Imagenes</h4>
                            </div>
                            <div class="w-box-content">
                                <div id="multi_upload" class="beoro-upload">
                                    <p>You browser doesn't have Flash, Silverlight or HTML5 support.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    

                </div>
                <br/>
              

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
                                            <th class="span3" >Imagen Producto</th>
                                            <th>Producto</th>
                                            <th>Descripcion Intro</th>
                                            <th class="span1" >Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id='table_contet'  >
                                        <?php if (!empty($datos)) : ?>
                                            <?php foreach ($datos as $img) : ?>
                                                <tr class="odd gradeX parent-delete">
                                                    <td>
                                                        <a class="thumbnail" title="Imagen" href="<?php echo base_url() . $img->imagen_path ?>">
                                                            <img style="height:50px;width:50px" src="<?php echo base_url() . $img->imagen_path ?>" alt="" />
                                                        </a>
                                                    </td>
                                                    <td style="text-align: justify;">
                                                        <?php echo $img->titulo; ?>
                                                    </td>
                                                    <td style="text-align: justify;">
                                                        <?php echo $img->descripcion_intro; ?>
                                                    </td>
                                                    
                                                    <td class="center" width="100px">
                                                        <a href="<?php echo cms_url('lineas/gallery/delete') ?>" class="btn btn-danger btn-small logic-delete" data-related_value="<?php echo $img->imagen_id; ?>" data-value="<?php echo $img->id; ?>">Eliminar</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div> </div> </div> </div> 
</div>