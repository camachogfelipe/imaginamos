
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>CMS Imaginamos / Usuarios / Editar</span>
        <br />
        <a href="javascript:history.back(0)" class="uibutton icon special answer" style="float:right;position: relative;top: -5px">Volver</a>

    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>


                <div>
                    <div class="imu_info" id="info"></div>



                    <?php echo form_open_multipart('cms/users/edit_record/' . $this->uri->segment(4) . '/' . $this->uri->segment(5)) ?>
                    <fieldset>



                        <div>
                            <p><label>Imagen</label></p>
                            <img src="<?php echo $datos->get_profile_image() ?>" width="110"><br>
                            <p><label>Nombre:</label> <?php echo ucwords($datos->full_name) ?></p>
                            <p><label>Pais:</label> <?php echo ucwords($datos->country) ?></p>
                            <p><label>Ciudad:</label> <?php echo ucwords($datos->city) ?></p>
                            <p><label>Telefono:</label> <?php echo ucwords($datos->phone) ?></p>
                            <p><label>Profesión:</label> <?php echo ucwords($datos->profession) ?></p>
                            <p><label>Descripción:</label> <?php echo ucwords($datos->about) ?></p>

                        </div>

                        <p>&nbsp;</p>
                        <div>
                            <p>
                                <label>Email:</label> 
                                <input type="email" name="email" class="small" value="<?php echo $datos->email ?>" required>
                            </p>

                        </div>

                        <p>&nbsp;</p>

                        <div>
                            <input type="submit" value="Guardar" class="uibutton confirm" />
                        </div>



                    </fieldset>
                    <br>
                    <?php echo form_close() ?>
                </div>




            </div>

        </div>
    </div>	

</div><!-- End content -->
