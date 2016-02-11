<div class="container">
     <div class="row-fluid">
        <div class="span12"  style="color: #208BBD;">
            <h3>Propuesta de Valor</h3>
        </div>
    </div>
    <div class="row-fluid">
       <div class="span12">
            <div class="w-box w-box-blue">
                <div class="w-box-header">
                    <h4>Propuesta de Valor</h4>
                </div>
                <div class="w-box-content cnt_a">
                    <div class="row-fluid">
                       <?php echo form_open_multipart(cms_url('propuesta/add'),array("id"=>"validate_field_types" ,"novalidate"=>"novalidate")) ?>
                        <div class="row-fluid">
                            <input name="id" value="<?php echo isset($propuesta->id)?$propuesta->id:"1"; ?>" id="id" type="hidden">
                         
                          <div class="span10">
                              <label class="req">Descripción</label>
                              <textarea class="span12" rows="15" name="texto" id="wysiwg_editor"  ><?php echo isset($propuesta->texto)?$propuesta->texto:""; ?></textarea>
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