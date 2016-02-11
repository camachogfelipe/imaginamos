<div class="container">
    <div class="row-fluid">
        <div class="span8 wt-box-<?php echo $color_module; ?>">
            <h3>Administrador de OAuth (Autenticación con redes sociales)</h3>
        </div>
        <div class="span4">
            <div class="button-group-cust">
                <button style="margin-top: 15px;" class="btn table-oauth pull-right" type="button">Agregar OAuth</button>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span8">
            <label>URI pare redireccionar cuando se haga el login</label>
            <div class="input-prepend">
                <span class="add-on"><?php echo site_url() ?></span><input type="text" id="uri_config" name="uri_config" value="<?php echo $uri['0']['uri'] ?>" class="span6">
            </div>
            <a href="<?php echo site_url().'oauth/oauth_mod/log/twitter' ?>"><i class="icon-twitter-sign"></i> Twitter</a>
            <a href="<?php echo site_url().'oauth/oauth_mod/log/facebook' ?>"><i class="icon-facebook-sign"></i> Facebook</a>
            <a href="<?php echo site_url().'oauth/oauth_mod/log/google' ?>"><i class="icon-google-plus-sign"></i> Google</a>
        </div>
        <div class="span4">

        </div>
    </div>
    <?php
    $c = 0;
    foreach ($datos as $c => $row):
        if ($c % 2 == 0):
            ?>
            <div class="row-fluid">
            <?php endif; ?>
            <div class="span6">
                <div class="w-box w-box-<?php echo $color_module; ?>">
                    <div class="w-box-header">
                        <h4><?= $row['name']; ?></h4>
                    </div>
                    <div class="w-box-content cnt_b">
                        <form class="datos_oauth">
                            <div class="row-fluid">
                                <label class="span6">Key</label>
                                <input class="span6" type="text" name="key" value="<?= $row['api_key'] ?>" id="key" />
                            </div>
                            <div class="row-fluid">
                                <label class="span6">Secret</label>
                                <input class="span6" type="text" name="secret" value="<?= $row['api_secret'] ?>" id="secret" />
                            </div>
                            <div class="row-fluid">
                                <label class="span6">Scope</label>
                                <input class="span6" type="text" name="scope" value="<?= $row['scope'] ?>" id="scope" />
                            </div>
                            <div class="row-fluid">
                                <label class="span6">Activar OAuth</label>
                                <input type="checkbox" <?php echo $row['active'] ? 'checked' : null ?> name="active" id="active" class="sb_ch1">
                            </div>
                            <input type="hidden" id="provider" name="provider" value="<?= $row['provider'] ?>"/>
                            <div class="button-group-cust">
                                <button style="margin-top: -40px;margin-right: 18px;" class="btn guardar pull-right" type="button">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php if ($c % 2 == 1):
                ?>
            </div>
        <?php endif; ?>
        <?php
        $c++;
    endforeach;
    if ($c % 2 == 1):
        ?>
    </div>
<?php endif; ?>
<div class="row-fluid">
</div>

</div>
<!--Tabla de OAuth-->
<div id="tableOAthModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <h3 id="myModalLabel">Selección los OAuth</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="span12">
                <table id="oauth-table" class="table table-striped table-condensed" data-save-url="<?php echo cms_url('users/save_active_oauth') ?>">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Agregar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($table as $t) : ?>
                            <tr>
                                <td><?php echo $t['name'] ?></td>
                                <td><input type="checkbox" <?php echo $t['active_oauth'] ? 'checked' : null ?> data-type="active_oauth" value="<?php echo $t['id'] ?>"/></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary actulizar" data-dismiss="modal" aria-hidden="true">Actualizar Ahora</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Salir</button>
    </div>
</div>
