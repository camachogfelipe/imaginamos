<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>
            Información de Contacto
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                     <div class="clearfix">

                            <?php echo form_open(cms_url('home/info_contacto/add'),'data-action="ajax-form"') ?>
                             
                             
                             <div class="section">
                                <label class="req">Email</label>
                                <input id="email" class="large" type="text" name="email" value="<?php echo $obj->email; ?>" maxlength="50" />
                            </div>
                              
                            
                             <div class="section">
                                <label class="req">Dirección</label>
                                <input id="direccion" class="large" type="text" name="direccion" value="<?php echo $obj->direccion; ?>" maxlength="21" />
                            </div>
                         
                           
                            <div class="section">
                                <label class="req">Teléfono</label>
                                <input id="telefono" class="large" type="text" name="telefono" value="<?php echo $obj->telefono; ?>" maxlength="21" />
                            </div>
                        
                            <input name="id" value="<?php echo $obj->id; ?>" id="id" type="hidden">
                             
                        
                           <br><br>
                            <button type="submit" id="Guardar" class="uibutton" >Guardar Información de Contacto</button>
                          
            
                     </div>
                </fieldset>
            </div>

        </div>
    </div>	
</div>