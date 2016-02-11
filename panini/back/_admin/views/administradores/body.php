<style type="text/css">

    /* float clearing for IE6 */
    * html .clearfix{
        height: 1%;
        overflow: visible;
    }

    /* float clearing for IE7 */
    *+html .clearfix{
        min-height: 1%;
    }

    /* float clearing for everyone else */
    .clearfix:after{
        clear: both;
        content: ".";
        display: block;
        height: 0;
        visibility: hidden;
        font-size: 0;
    }


</style>
<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>
            Configuración de admnistradores del CMS
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                     <div class="clearfix">

                        <?php echo form_open(cms_url('admin/administradores/add'), 'data-action="ajax-form"') ?>

                        <legend><h1>Administradores</h1></legend>

                        <div class="section">
                            <label>Nuevo email del usuario</label>
                            <div><input type="email" name="email" id="emailuser"  class="large" ></div>
                        </div>
                        <div class="section">
                            <label>Nombre del usuario</label>
                            <div><input type="text" name="username" id="emailuser"  class="large" ></div>
                        </div>
                        <div class="section">
                            <label>Rol del usuario</label>
                            <div>
                                <input type="checkbox" id="roluser" name="is_superadmin" class="preOrder" value="1">
                            </div>
                        </div>

                        <br><br>

                        <button type="submit" class="uibutton">Guardar</button>

                        <?php echo form_close() ?>

                    </div>



                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th><div class="th_wrapp">Nombre de usuario</div></th>
                            <th><div class="th_wrapp">Email</div></th>
                            <th><div class="th_wrapp">Rol</div></th>
                            <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                            </thead>
                            <?php if (!empty($datos)) : ?>
                                <tbody>
                                    <?php foreach ($datos as $user) : ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td class="center" width="300px"><?php echo $user->username ?></td>
                                            <td class="center" width="300px"><?php echo $user->email ?></td>
                                            <td class="center" width="300px">
                                                <?php foreach ($user->grupos as $grupo) : ?>
                                                    <span><?php echo $grupo->description ?></span><br>
                                                <?php endforeach; ?>
                                            </td>
                                            <td class="center" width="100px">
                                                <?php if (count($datos) >= 1 && $user->email !== 'cms@imaginamos.com') : ?>
                                                    <span class="tip">
                                                        <a href="<?php echo cms_url('admin/actions/delete') ?>" class="uibutton special" data-action="special-delete" data-table="users" data-field="id" data-value="<?php echo $user->id ?>">Eliminar</a>
                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif; ?>
                        </table>
                    </div>
                </fieldset>
            </div>

        </div>
    </div>	
</div>
