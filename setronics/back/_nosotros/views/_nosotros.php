<div class="container">
     <div class="row-fluid">
        <div class="span12"  style="color: #208BBD;">
            <h3>Nosotros</h3>
        </div>
    </div>
    <div class="row-fluid">
       <div class="span12">
            <div class="w-box w-box-blue">
                <div class="w-box-header">
                    <h4>Nosotros</h4>
                </div>
                <div class="w-box-content cnt_a">
                    <div class="row-fluid">
                        
                        
             
                        <?php echo form_open_multipart(cms_url('nosotros/save_upload'),array("id"=>"validate_field_types" ,"novalidate"=>"novalidate")) ?>
                        <div class="row-fluid">
                            <input name="id" value="<?php echo isset($nosotros->id)?$nosotros->id:"1"; ?>" id="id" type="hidden">
                          <input type="hidden" id="titulio" name="imagen_id"  value="<?php echo isset($nosotros->imagen_id)?$nosotros->imagen_id:""; ?>"class="span12" maxlength="32">
                           <div class="span3">
                              <label class="req" >Imagen Corporativa</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                                                <img id="img" src="<?php echo isset($nosotros->imagen_path)?base_url().$nosotros->imagen_path:""; ?>" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="width: 150px; height: 150px; "></div>
                                            <div>
                                                <span class="btn btn-small btn-file">
                                                    <span class="fileupload-new">Cargar Imgen</span>
                                                    <span class="fileupload-exists">Cambiar</span>
                                                    <input type="file" name="path" value="<?php echo isset($nosotros->imagen_path)?base_url().$nosotros->imagen_path:""; ?>" id="path" />
                                                </span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                                            </div>
                                        </div>
                                         <span class="help-block">932px × 300px</span>
                                         <br/><br/><br/><br/>
                          </div>
                         
                          <input type="hidden" id="titulio" name="parrafo_id"  value="<?php echo isset($nosotros->parrafo_id)?$nosotros->parrafo_id:""; ?>"class="span12" maxlength="32">
                          
                          <div class="span3">
                              <label class="req">Titulo Parrafo 1</label>
                              <input type="text" id="titulio" name="parrafo_titulo" value="<?php echo isset($nosotros->parrafo_titulo)?$nosotros->parrafo_titulo:""; ?>" class="span12" maxlength="32">
                          </div>
                          
                          <div class="span7">
                              <label class="req">Descripción Parrafo 1</label>
                               <textarea class="span12" name="parrafo_texto" id="count-textarea" ><?php echo isset($nosotros->parrafo_texto)?$nosotros->parrafo_texto:""; ?></textarea>
                          </div>
                          
                          <input type="hidden" id="titulio" name="parrafo1_id"  value="<?php echo isset($parrafo1->id)?$parrafo1->id:""; ?>"class="span12" maxlength="32">
                          
                          <div class="span3">
                              <label class="req">Titulo Parrafo 2</label>
                              <input type="text" id="titulio" name="parrafo1_titulo"  value="<?php echo isset($parrafo1->titulo)?$parrafo1->titulo:""; ?>"class="span12" maxlength="32">
                          </div>
                          
                          <div class="span7">
                              <label class="req">Descripción Parrafo 2</label>
                               <textarea class="span12" name="parrafo1_texto" id="count-textarea"  ><?php echo isset($parrafo1->texto)?$parrafo1->texto:""; ?></textarea>
                          </div>
                          
                          
                          </div>
                          <div class="formSep">
                            <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
                          </div>
                        

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
       </div>
     
</div>