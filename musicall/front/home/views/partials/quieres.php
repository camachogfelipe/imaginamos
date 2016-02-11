
<div class="content_left">
    <div class="registro2">
        <div class="content_registro_quieres">
            <a href="javascript:toHome();" class="btn_tohome2"></a>
            <a href="javascript:abrirMasinfo2();" class="btn_masinfo2"></a>
            <a href="javascript:abrirIngresoBuscas();" class="btn_ingresa_buscas"></a>
             <?php echo form_open('usuarios/registro/validation_register', 'class="form_reg2" data-action="validation-register" data-content="quieres" autocomplete="off"') ?>
            <input class="input1" name="email" type="email" placeholder="E-mail"  />
            <input class="input1" name="password" type="password" placeholder="Contraseña"  autocomplete="off" />
            <input class="input1" name="password_confirm" type="password" placeholder="Repetir contraseña"  />
            <span>Acepto los <a href="javascript:abrirTerminosBuscas();">términos y condiciones&nbsp;</a><input name="terms" type="checkbox" value="1"  /></span>
            <input class="btn_registro_buscas" type="submit" value="" style="border: none;" />
            <?php echo form_close() ?>
        </div>
    </div>
    <div class="solicitud1">
        <div class="content_solic">
            <h2 class="textoBienvenido_buscas">Bienvenido</h2>
            <h1 class="nombre_usuario_buscas"><span data-userinfo="username"></span> &ndash;  <a class="btn_cerrar_sesion" href="<?php echo site_url('usuarios/logout') ?>">Cerrar Sesión</a></h1>
            <a href="javascript:abrirNotifBuscas();" class="btn_notif_buscas desactive" data-notification="counter" data-counter-type="buscas"></a>
            
            <div style="left:220px;" class="popup_notif" id="popup_notif_buscas">
                <a style="right:-30px; top:-30px; background:url(<?= front_asset('img/btn_cerrar_popup2.png') ?>);" class="cerrarIngreso" href="javascript:cerrarNotif();"></a>
                <div class="content_notif">
                    <div class="content_notif1 scroll-pane">Cargando, por favor espera...</div>
                </div>
            </div>
            <div class="foto_buscas">
              <div style="margin:13px 0 0 15px; width:113px; height:86px; overflow:hidden;">
                
                <!--<div data-action="open-edit-info-quieres" data-userinfo="image"></div>-->
                
                <div style="display: block; width: 113px; height: 86px; color:#FFF; text-align:center; line-height:86px; background: rgb(195,19,108); font-family:'gotham_lightregular',  sans-serif;" data-action="open-edit-info-quieres"  data-userinfo="image">Sube tu foto</div>
                </div>
            </div>
            <a href="javascript:toHome();" class="btn_volver4"></a>

            <div class="form_solic">
                <?php echo form_open('usuarios/perfil/upload_project', 'class="ajax-form placeholder_dark"') ?>
                <div class="content_input_solic">
                    <input name="name" type="text" placeholder="Nombre de proyecto" />
                </div>
                <div class="content_input_solic">
                  <div class="content_drop">
                    <div onclick="javascript:abrirGenero_buscas();" class="select_genero_buscas">
                        Género
                        <div class="tooltip_genero " id="tooltip_genero_buscas"></div>
                    </div>
                    <div class="drop_genero_buscas scroll-pane checkboxes-valid" id="drop_genero_buscas">
                        <ul>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Rock" />
                                <h4 id="rock2">Rock</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Pop" />
                                <h4 id="pop2">Pop</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Trópical" />
                                <h4 id="tropical2">Tropical</h4>
                            </li><li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Vallenato" />
                                <h4 id="vallenato2">Vallenato</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Reggae" />
                                <h4 id="reggae2">Reggae</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Urbano" />
                                <h4 id="urbano2">Urbano</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Electrónica" />
                                <h4 id="electro2">Electrónica</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Fusión" />
                                <h4 id="fusion2">Fusión</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Reggaeton" />
                                <h4 id="reggaeton2">Reggaeton</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Popular" />
                                <h4 id="popupar2">Popular</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Jazz" />
                                <h4 id="jazz2">Jazz</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="R&B" />
                                <h4 id="r_b2">R&B</h4>
                            </li>
                            <li class="clearfix">
                                <input name="genders[]" type="checkbox" class="styled" value="Otros"  />
                                <h4 id="otros2">Otros</h4>
                                <input type="text" name="gender_another" class="input_otros" />
                            </li>

                        </ul>
                    </div>
                  </div>
                </div>
                <div class="content_input_solic">
                  <div class="content_drop">
                    <div onclick="javascript:abrirUsoBuscas();" class="select_genero_buscas">
                        Uso
                        <div class="tooltip_genero " id="tooltip_uso_buscas"></div>
                    </div>
                    <div class="drop_genero_buscas scroll-pane checkboxes-valid" id="drop_uso_buscas">
                        <ul >
                            <li class="clearfix">
                                <input name="uses[]" type="checkbox" class="styled" value="Todos los usos" />
                                <h4 id="todos2">Todos los usos</h4>
                            </li>
                            <li class="clearfix">
                                <input name="uses[]" type="checkbox" class="styled" value="Películas" />
                                <h4 id="peliculas2">Películas</h4>
                            </li>
                            <li class="clearfix">
                                <input name="uses[]" type="checkbox" class="styled" value="Series de TV" />
                                <h4 id="series2">Series de TV</h4>
                            </li>
                            <li class="clearfix">
                                <input name="uses[]" type="checkbox" class="styled" value="Publicidad" />
                                <h4 id="publicidad2">Publicidad</h4>
                            </li>
                            <li class="clearfix">
                                <input name="uses[]" type="checkbox" class="styled" value="Video Juegos" />
                                <h4 id="juegos2">Video Juegos</h4>
                            </li>
                            <li class="clearfix">
                                <input name="uses[]" type="checkbox" class="styled" value="Jingles" />
                                <h4 id="jingles2">Jingles</h4>
                            </li>
                            <li class="clearfix">
                                <input name="uses[]" type="checkbox" class="styled" value="Proyectos de otros artistas" />
                                <h4 id="proyectos2">Proyectos de otros artistas</h4>
                            </li>
                            <li class="clearfix">
                                <input name="uses[]" type="checkbox" class="styled" value="Otros" />
                                <h4 id="otros_uso2">Otros</h4>
                                <input type="text" name="use_another" class="input_otros" />
                            </li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="content_input_solic">
                    <!--<input type="text" name="price" placeholder="Presupuesto" />-->
                    <div class="content_input_info">
                    <input type="text" name="price" placeholder="Presupuesto" onclick="if(this.value=='Presupuesto')this.value='usd'" onblur="if(this.value=='usd')this.value='Presupuesto'" value="Presupuesto" style="color:#333;" />
                      <div class="tooltip_genero tooltip_info">
                        <p>
                        Define el presupuesto que tienes por canción para la música de tu proyecto (en dólares) . Si pones 0, explica abajo por qué deberían postular canciones para tu proyecto.
                        </p>
                      </div>
                    </div>
                </div>
                <div class="content_input_solic content_input_info">
                    <input type="text" name="reference" placeholder="Referencia" />
                    <div class="tooltip_genero tooltip_info">
                      <p>
                      Si tienes alguna música de referencia para tu proyecto, copia el link (youtube, Vevo, etc.) y pégalo aquí. Tendremos una idea más clara de lo que estás buscando.
                      </p>
                    </div>
                </div>
                <div style="height:100px;" class="content_input_solic">
                    <textarea name="description" placeholder="¿Algo más que debamos saber sobre tu proyecto?"></textarea>
                </div>

                <input class="btn_enviar_buscas" type="submit" value="" style="border:none; background-color: transparent;" />
                <?php echo form_close() ?>
            </div>
            <a id="open-mis-proyectos" href="#" class="btn_proyectos"></a>
            <div id="mis-proyectos-content"></div>
        </div>
    </div>
</div>

<div class="popup_masinfo2">
    <div class="content_masinfo2">
        <a style="background:url(<?php echo front_asset('img/btn_cerrar_masinfo2.png') ?>)" href="javascript:cerrarMasinfo2();" class="btn_cerrarMasinfo"></a>
        <div id="slider2">
            <ul>
                <li>
                    <p class="texto_masinfo">
                        ¿Buscas recibir de forma gratuita un número amplio de propuestas musicales de acuerdo a tus necesidades específicas?<br />
                        <br />
                        ¿Buscas que los mejores compositores y artistas de diferentes géneros y estilos hagan la música para tu proyecto?
                    </p>
                </li>
                <li>
                    <p class="texto_masinfo">
                        ¿Buscas propuestas musicales de calidad que se adapten a tu presupuesto?<br />
                        <br />
                        ¿Buscas que un equipo especializado atienda tus solicitudes musicales ofreciendo una atención ágil y personalizada?
                    </p>
                </li>
                <li>
                    <p class="texto_masinfo">
                        Si estás interesado regístrate y haz tu solicitud.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="popup_ingreso" id="ingreso_buscas">
    <?php echo form_open('usuarios/login_ajax/', 'data-action="login-ajax" data-type="json" data-content="quieres"') ?>
    <div class="content_ingreso">
        <a class="cerrarIngreso_buscas" href="javascript:cerrarIngreso();"></a>
        <div class="content_input">
            <input type="email" name="email" placeholder="Email" style=" height: 57px " />
            <input type="password" name="password" placeholder="Contraseña" style="height: 57px; display:block !important" />

            <input type="submit" value="" class="btn_ingresa1" />
            <p>&nbsp;</p>
            <a href="javascript:abrirRecupera();" class="bt-recordar">¿Olvido su contraseña?</a>
        </div>
    </div>
    <?php echo form_close() ?>
</div>
<!--Recuperación-->
<div class="popup_ingreso" id="ingreso_recupera">
    <div class="content_ingreso">
        <a class="cerrarIngreso_buscas" href="javascript:cerrarIngreso();"></a>
        <div class="content_input" style="padding-top:105px;">
            <input type="email" name="email" id="emailRC" placeholder="Email recuperación" style="height: 57px " />
            <input type="submit" value="" class="btn_ingresa1" onclick="recuperar_password();" />
        </div>
    </div>
</div>
<!--Fin recuperación-->
<div class="popup_ingreso" id="popup_terminos2">
    <div class="content_ingreso">
        <a class="cerrarIngreso_buscas" href="javascript:cerrarIngreso();"></a>
        <div class="content_terminos">
            <h1>TÉRMINOS Y CONDICIONES</h1>
            <div class="texto_terminos scroll-pane">
                <?php echo $terminos_y_condiciones ?>
            </div>
        </div>
    </div>
</div>
<div class="popup_ingreso" id="popup_registro_buscas">
    <div class="content_popupregistro_buscas">
        <a class="cerrarIngreso_buscas" href="javascript:cerrarIngreso();"></a>
        <h1>REGÍSTRATE</h1>
        <?php echo form_open('usuarios/registro/complete_register/buscas', 'class="placeholder_dark" data-action="complete-register" data-content="quieres"') ?>
        <div class="form_registro_buscas">
            <div class="content_input_registro_buscas">
                <input name="full_name" type="text" placeholder="¿Cuál es tu nombre?" />
            </div>
            <div class="content_input_registro_buscas">
                <input name="company_name" type="text" placeholder="Nombre de empresa o proyecto" />
            </div>
            <div class="content_input_registro_buscas">
                <input name="mobile_phone" type="text" placeholder="Teléfono de contácto" />
            </div>
            <div class="content_input_registro_buscas">
                <input name="city" type="text" placeholder="Ciudad" />
            </div>
            <div class="content_input_registro_buscas">
                <input name="website" type="text" placeholder="Sitio web" onclick="if(this.value=='Sitio web')this.value='http://'" onblur="if(this.value=='http://')this.value='Sitio web'" value="Sitio web" style="color:#333;"/>
                <!--<input name="website" type="url" placeholder="Sitio web" />-->
            </div>
            <div class="content_input_registro_buscas">
            		<input name="facebook" type="text" placeholder="Facebook" onclick="if(this.value=='Facebook')this.value='https://www.facebook.com/'" onblur="if(this.value=='https://www.facebook.com/')this.value='Facebook'" value="Facebook" style="color:#333;"/>
                <!--<input name="facebook" type="url" placeholder="Facebook" />-->
            </div>
            <div class="content_input_registro_buscas">
            		<input name="twitter" type="text" placeholder="Twitter" onclick="if(this.value=='Twitter')this.value='https://twitter.com/'" onblur="if(this.value=='https://twitter.com/')this.value='Twitter'" value="Twitter" style="color:#333;"/>
                <!--<input name="twitter" type="url" placeholder="Twitter" />-->
            </div>
            <div style="height:32px;" class="content_input_registro_buscas">
                <input name="youtube" type="text" placeholder="YouTube" onclick="if(this.value=='YouTube')this.value='http://www.youtube.com/user/'" onblur="if(this.value=='http://www.youtube.com/user/')this.value='YouTube'" value="YouTube" style="color:#333;"/>
                <!--<input name="youtube" type="url" placeholder="YouTube" />-->
            </div>
            <input class="btn_registro_buscas2" type="submit" value="" style="border:none; baackground-color: transparent;" />
        </div>
        <?php echo form_close() ?>
    </div>
</div>


<div id="edit-info-quieres"></div>

<div class="popup_ingreso" id="popup_notif2">
    <div class="content_notif2 content-notification">
        <p style="text-align:center; color: #FFF; padding: 2em 0;">Cargando, por favor espera...</p>
    </div>
</div>
<script type="javascript">
function val_email(valor)
{
    var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    if(filter.test(valor))
        return true;
    else
        return false;
}

function recuperar_password(){
    var email = $('#emailRC').val();

    if(! val_email(email) ){
        alert('Email invalido');
    }
    else{

        var toLoad = '<?=base_url('usuarios/recover_pass')?>';
        $.post(toLoad, {email:email},
            function (responseText){
                if(responseText == "1"){
                    alert('Su clave fue enviada a su correo.');
                }
                else{
                    alert("error!!!: ");
                }
            }
        );
    }
}
</script>