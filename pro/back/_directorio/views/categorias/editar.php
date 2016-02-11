

<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>Editar categoria</span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="clearfix">

                        <?php echo form_open($save_url, 'data-action="ajax-form" data-after-save="reload"') ?>

                        <div class="section">
                            <label for="name">Nombre</label>
                            <div><input type="text" name="name" id="name"  class="large" placeholder="Escriba el nombre acá..." value="<?php echo $datos->name ?>" autofocus="true" required="true"></div>
                        </div>
                        
                        <div class="section">
                            <label for="description">Descripción</label>
                            <div> <textarea name="description" id="description" class="large" placeholder="Escriba la descripción acá..."><?php echo $datos->description ?></textarea> </div>
                        </div>

                        <br><br>

                        <button type="submit" class="uibutton">Guardar</button>

                        <?php echo form_close() ?>

                    </div>

                </fieldset>
            </div>

        </div>

    </div>	
</div>
