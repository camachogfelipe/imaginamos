<?php echo form_open_multipart('usuarios/perfil/save_edit_info?content=tienes', 'class="placeholder_dark"') ?>
<div class="popup_ingreso" id="popup_editar2">
    <div class="content_popupregistro">
        <a class="cerrarIngreso" href="javascript:cerrarIngreso();"></a>
        <div class="content_popupregistro2" style="padding:5px 10px;">
            <h1 style="padding-top:10px">EDITA TUS DATOS</h1>

            <div style="margin-top:10px;" class="clearfix">
                <div class="left_registro">
                    <div class="content_input_registro">
                        <input name="full_name" type="text" placeholder="¿Cuál es tu nombre?" value="<?= $datos->full_name ?>" />
                    </div>
                    <div class="content_input_registro">
                        <select name="about_you" id="country_id5">
                            <option value="0"><span style="font-family: 'gotham_boldregular';">¿Que haces?</span></option>
                            <option value="Solista">Solista</option>
                            <option value="Banda">Banda</option>
                            <option value="Compositor">Compositor</option>
                            <option value="Representante">Representante</option>
                            <option value="Productor">Productor</option>
                        </select>
                    </div>

                    <div class="content_input_registro">
                        <input name="mobile_phone" type="text" placeholder="Celular" value="<?= $datos->mobile_phone ?>" />
                    </div>
                    <div class="content_input_registro">
                        <input name="city" type="text" placeholder="Ciudad" value="<?= $datos->city ?>" />
                    </div>
                    <div class="content_input_registro">
                        <!--<input name="website" type="url" placeholder="Sitio web" value="<?= $datos->website ?>" />-->
                        <?php 
												if($datos->website  !=  ""){ $pweb = $datos->website; }
												else{ $pweb = "Sitio web";}
												?>
												<input name="website" type="text" placeholder="Sitio web" onclick="if(this.value=='Sitio web')this.value='http://'" onblur="if(this.value=='http://')this.value='Sitio web'" value="<?PHP echo  $pweb; ?>" style="color:#333;"/>
                    </div>
                    <div class="content_input_registro">
                        <!--<input name="facebook" type="url" placeholder="Facebook" value="<?= $datos->facebook ?>" />-->
                        <?php 
												if($datos->facebook  !=  ""){ $pfb = $datos->facebook; }
												else{ $pfb = "Facebook";}
												?>
												<input name="facebook" type="text" placeholder="Facebook" onclick="if(this.value=='Facebook')this.value='https://www.facebook.com/'" onblur="if(this.value=='https://www.facebook.com/')this.value='Facebook'" value="<?PHP echo  $pfb; ?>" style="color:#333;"/>
                    </div>
                    <div class="content_input_registro">
                        <!--<input name="twitter" type="url" placeholder="Twitter" value="<?= $datos->twitter ?>" />-->
                        <?php 
												if($datos->twitter  !=  ""){ $ptw = $datos->twitter; }
												else{ $ptw = "Twitter";}
												?>
												<input name="twitter" type="text" placeholder="Twitter" onclick="if(this.value=='Twitter')this.value='https://twitter.com/'" onblur="if(this.value=='https://twitter.com/')this.value='Twitter'" value="<?PHP echo  $ptw; ?>" style="color:#333;"/>
                    </div>
                    <div style="height:32px;" class="content_input_registro">
                        <!--<input name="youtube" type="url" placeholder="YouTube" value="<?= $datos->youtube ?>" />-->
                        <?php 
												if($datos->youtube  !=  ""){ $pyt = $datos->youtube; }
												else{ $pyt = "YouTube";}
												?>
												<input name="youtube" type="text" placeholder="YouTube" onclick="if(this.value=='YouTube')this.value='http://www.youtube.com/user/'" onblur="if(this.value=='http://www.youtube.com/user/')this.value='YouTube'" value="<?PHP echo  $pyt; ?>" style="color:#333;"/>
                    </div>
                </div>
                <div class="right_registro">
                    <div class="banda select1" data-options="Banda">
                        <h2>¿Quíenes son los miembros?</h2>
                        <?php if ($datos->users_member->exists()): ?>
                            <?php foreach ($datos->users_member as $member): ?>
                                <div class="content_input_registro">
                                    <input name="members[]" type="text" value="<?= $member->name ?>" />
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        
                        <?php for ($i = 0, $total = (5 - $datos->users_member->count()); $i <= $total; $i++): ?>
                            <div class="content_input_registro">
                                <input name="members[]" type="text"   />
                            </div>
                        <?php endfor; ?>
                       
                    </div>
                    <div class="representante select1" data-options="Representante">
                        <h2>¿A quién representas?</h2>
                        <?php if ($datos->users_representation->exists()): ?>
                            <?php foreach ($datos->users_representation as $member): ?>
                                <div class="content_input_registro">
                                    <input name="representations[]" type="text" value="<?= $member->name ?>" />
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        
                        <?php for ($i = 0, $total = (5 - $datos->users_representation->count()); $i <= $total; $i++): ?>
                            <div class="content_input_registro">
                                <input name="representations[]" type="text"   />
                            </div>
                        <?php endfor; ?>
                        
                     
                    </div>
                </div>
                <input class="btn_editar2" type="submit" value="" style="border: none; background-color: transparent; margin:-3px;" />
            </div>


        </div>
    </div>
</div>

<div class="popup_ingreso" id="popup_editar1">
    <div class="content_ingreso">
        <a class="cerrarIngreso" href="javascript:cerrarIngreso();"></a>
        <div class="content_terminos">
            <h1>EDITA TUS DATOS</h1>
            <div class="edita1">
                <div class="content_input_editar">
                    <input name="username" placeholder="Usuario" value="<?php echo $datos->username ?> " />
                </div>
                <div class="file2">
                    <input type="file" id="fileUpload" name="imageUpload" accept="image/*" />
                    <span class="button">Sube tu foto</span>
                </div>

                <a href="javascript:editaPaso2();" class="btn_editar"></a>
                <a style="background-image:url(./assets/img/btn_change_pass2.png)" href="javascript:editaPass();" class="btn_editar"></a>
            </div>
        </div>
    </div>
</div>

<?php echo form_close() ?>

<?php echo form_open('usuarios/change_password', 'class="ajax-form placeholder_dark" autocomplete=off') ?>

<div class="popup_ingreso" id="popup_editar_pass">
    <div class="content_ingreso">
        <a class="cerrarIngreso" href="javascript:cerrarIngreso();"></a>
        <div class="content_terminos">
            <h1>CAMBIA TU CONTRASEÑA</h1>
            <div class="edita1">
                <div class="content_input_editar">
                    <input name="old" type="password" placeholder="Contraseña actual" />
                </div>
                <div class="content_input_editar">
                    <input name="new" type="password" placeholder="Nueva contraseña" />
                </div>
                <div class="content_input_editar">
                    <input name="new_confirm" type="password" placeholder="Repetir nueva contraseña" />
                </div>
                 <input class="btn_editar" type="submit" value="" style="border: none; background-color: transparent;" />
            </div>
        </div>
    </div>
</div>

<?php echo form_close() ?>



