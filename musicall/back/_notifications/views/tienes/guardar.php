
<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>Notificar a los usuarios</span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="clearfix">

                        <?php echo form_open($save_action, 'data-action="ajax-form" data-after-save="redirect"') ?>

                        <div class="section">
                            <label forproject_namename">Nombre</label>
                            <div><input type="text" name="project_name" id="project_name"  class="large" placeholder="Escriba el nombre acá..."  autofocus="true" required="required" value="<?php echo $datos->name ?>"></div>
                        </div>

                        <div class="section">
                            <label forproject_namename">Código</label>
                            <div><strong><?php echo $datos->code ?></strong></div>
                        </div>

                        <div class="section">
                            <label for="name">Presupuesto</label>
                            <div><input type="number" name="budget" id="name"  class="budget" placeholder="Escriba el presupuesto acá..." required="required" value="<?php echo $datos->price ?>"></div>
                        </div>

                        <div class="section" >
                            <label for="description">Descripción</label>
                            <div> <textarea name="description" id="description" class="large" placeholder="Escriba la descripción acá..."></textarea></div>
                        </div>

                        <br><br>

                        <button type="submit" class="uibutton special">Guardar</button>
                        <a href="<?php echo cms_url('users/projects/detail/' . $datos->id) ?>" class="uibutton">Cancelar</a>

                        <?php echo form_close() ?>

                    </div>

                </fieldset>
            </div>

        </div>

    </div>	
</div>

