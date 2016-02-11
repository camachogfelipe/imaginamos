<style type="text/css">
    .change-password-form section{
        display:block;
        margin-bottom:2em;
    }
    .change-password-form div:first-child,
    .change-password-form label{
        text-transform: none;
        display:block;
        margin-bottom:.5em;
    }
</style>

<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>CMS Imaginamos</span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>

                    <?php echo form_open('cms/login/change_password', 'class="change-password-form" data-action="ajax-form"') ?>

                    <section class="clearfix">
                        <label>
                            <div>
                                Contraseña actual<strong style="color:red"> *</strong>
                            </div>
                            <input type="password" class="medium" name="old_pasword" />
                        </label>

                        <label>
                            <div>
                                Nueva contraseña<strong style="color:red"> *</strong>
                            </div>
                            <input type="password" class="medium" name="new_pasword" />
                        </label>
                        <label>
                            <div>
                                Repetir nueva contraseña<strong style="color:red"> *</strong>
                            </div>
                            <input type="password" class="medium" name="new_confirm_pasword" />
                        </label>
                    </section>


                    <input type="submit" value="Cambiar" class="uibutton" />
                    <?php echo form_close() ?>
                </fieldset>
            </div>

        </div>
    </div>	

</div><!-- End content -->