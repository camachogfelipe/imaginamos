<?php echo form_open_multipart('usuarios/perfil/save_edit_info?content=quieres', 'class="placeholder_dark"') ?>

<div class="popup_ingreso" id="popup_editar2_buscas">
    <div class="content_popupregistro_buscas">
        <a class="cerrarIngreso_buscas" href="javascript:cerrarIngreso();"></a>
        <h1>EDITA TUS DATOS</h1>
        <div class="form_registro_buscas">
            <div  class="content_input_registro_buscas">
                <input type="text" name="full_name" placeholder="Cual es tu nombre" value="<?php echo $datos->full_name ?>"  />
            </div>
            <div  class="content_input_registro_buscas">
                <input type="text" name="company_name" placeholder="Nombre de empresa o proyecto" value="<?php echo $datos->company_name ?>"  />
            </div>
            <div  class="content_input_registro_buscas">
                <input type="text" name="mobile_phone"  placeholder="Teléfono de contacto" value="<?php echo $datos->mobile_phone ?>"  />
            </div>
            <div class="content_input_registro_buscas">
                <input type="text" name="city"  placeholder="Ciudad" value="<?php echo $datos->city ?>"  />
            </div>
            <div class="content_input_registro_buscas">
                <!--<input type="url" name="website" placeholder="Página Web" value=""  />-->
                <?php 
								if($datos->website  !=  ""){ $pweb = $datos->website; }
								else{ $pweb = "Sitio web";}
								?>
                <input name="website" type="text" placeholder="Sitio web" onclick="if(this.value=='Sitio web')this.value='http://'" onblur="if(this.value=='http://')this.value='Sitio web'" value="<?PHP echo  $pweb; ?>" style="color:#333;"/>
            </div>
            <div  class="content_input_registro_buscas">
            		<?php 
								if($datos->facebook  !=  ""){ $pfb = $datos->facebook; }
								else{ $pfb = "Facebook";}
								?>
                <input name="facebook" type="text" placeholder="Facebook" onclick="if(this.value=='Facebook')this.value='https://www.facebook.com/'" onblur="if(this.value=='https://www.facebook.com/')this.value='Facebook'" value="<?PHP echo  $pfb; ?>" style="color:#333;"/>
            </div>
            <div  class="content_input_registro_buscas">
            		<?php 
								if($datos->twitter  !=  ""){ $ptw = $datos->twitter; }
								else{ $ptw = "Twitter";}
								?>
                <input name="twitter" type="text" placeholder="Twitter" onclick="if(this.value=='Twitter')this.value='https://twitter.com/'" onblur="if(this.value=='https://twitter.com/')this.value='Twitter'" value="<?PHP echo  $ptw; ?>" style="color:#333;"/>
            </div>
            <div  class="content_input_registro_buscas">
            		<?php 
								if($datos->youtube  !=  ""){ $pyt = $datos->youtube; }
								else{ $pyt = "YouTube";}
								?>
                <input name="youtube" type="text" placeholder="YouTube" onclick="if(this.value=='YouTube')this.value='http://www.youtube.com/user/'" onblur="if(this.value=='http://www.youtube.com/user/')this.value='YouTube'" value="<?PHP echo  $pyt; ?>" style="color:#333;"/>
            </div>
            <input class="btn_edita_buscas2" type="submit" value="" style="border: none; background-color: transparent;" />
        </div>
    </div>
</div>

<div class="popup_ingreso" id="popup_editar1_buscas">
    <div class="content_ingreso">
        <a class="cerrarIngreso_buscas" href="javascript:cerrarIngreso();"></a>
        <div class="content_terminos">
            <h1>EDITA TUS DATOS</h1>
            <div class="edita1">
                <div class="content_input_editar editar_buscas1">
                    <input type="text" name="username" placeholder="Usuario" value="<?php echo $datos->username ?>" />
                </div>
                <!--<div class="content_input_editar editar_buscas1">
                    <input onclick="if (this.value == 'Contraseña')
                            this.value = ''" onblur="if (this.value == '')
                            this.value = 'Contraseña'" value="Contraseña" />
                </div>
                <div class="content_input_editar editar_buscas1">
                    <input onclick="if (this.value == 'repetir contraseña')
                            this.value = ''" onblur="if (this.value == '')
                            this.value = 'repetir contraseña'" value="repetir contraseña" />
                </div>-->
                <div class="file2">
                    <input type="file" id="fileUpload" name="imageUpload" accept="image/*" />
                    <span class="button">Sube tu foto</span>
                </div>
                <a href="javascript:editaPaso2Buscas();" class="btn_editar_buscas"></a>
                <a style="background-image:url(./assets/img/btn_change_pass.png) !important" href="javascript:editaPassBuscas();" class="btn_editar_buscas"></a>
            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>

<?php echo form_open('usuarios/change_password', 'class="ajax-form placeholder_dark" autocomplete=off') ?>
<div class="popup_ingreso" id="popup_editar_pass_buscas">
    <div class="content_ingreso">
        <a class="cerrarIngreso_buscas" href="javascript:cerrarIngreso();"></a>
        <div class="content_terminos">
            <h1>CAMBIA TU CONTRASEÑA</h1>
            <div class="edita1">
                <div class="content_input_editar editar_buscas1">
                    <input name="old" type="password" placeholder="Contraseña actual" />
                </div>
                <div class="content_input_editar editar_buscas1">
                    <input name="new" type="password" placeholder="Nueva contraseña" />
                </div>
                <div class="content_input_editar editar_buscas1">
                    <input name="new_confirm" type="password" placeholder="Repetir nueva contraseña" />
                </div>
                <input class="btn_editar_buscas" type="submit" value="" style="border: none; background-color: transparent;" />
            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>
