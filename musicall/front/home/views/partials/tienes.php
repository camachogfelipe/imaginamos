<div class="content_right">
    <!-- Registro -->
    <div class="content_registro1">
        <div class="content_registro">
            <a href="javascript:abrirMasinfo();" class="btn_masinfo"></a>
            <a href="javascript:toHome();" class="btn_volver"> </a>
            <a href="javascript:abrirIngreso();" class="btn_ingresa"></a>
            <?php echo form_open('usuarios/registro/validation_register', 'class="form_reg" data-action="validation-register" data-content="tienes" autocomplete="off"') ?>
            <input class="input1" name="email" type="email" placeholder="E-mail"  />
            <input class="input1" name="password" type="password" placeholder="Contraseña"  autocomplete="off" />
            <input class="input1" name="password_confirm" type="password" placeholder="Repetir contraseña"  />
            <span>Acepto los <a href="javascript:abrirTerminos();">términos y condiciones&nbsp;</a><input name="terms" type="checkbox" value="1"  /></span>
            <input class="btn_registro" type="submit" value="" style="border: none;" />
            <?php echo form_close() ?>
        </div>
    </div>

    <!-- Subir Cancion -->
    <div class="content_subir1">
        <div class="content_subir">
            <div class="popup_notif" id="popup_notif">
                <a style="right:-30px; top:-30px;" class="cerrarIngreso" href="javascript:cerrarNotif();"></a>
                <div class="content_notif"></div>
            </div>

            <div id="mi-musica-content"></div>

            <h2 class="textoBienvenido">Bienvenido</h2>
            <h1 class="nombre_usuario"><span data-userinfo="username"></span> &ndash; <a class="btn_cerrar_sesion" href="<?php echo site_url('usuarios/logout') ?>">Cerrar Sesión</a></h1>
            <div class="foto">
                <div style="margin:13px 0 0 15px; width:113px; height:86px; overflow:hidden;">
                    <div style="color:#FFF; display: block; width: 113px; height: 86px; background: #02A39F; text-align:center; line-height:86px; font-family: 'gotham_lightregular', sans-serif;" data-action="open-edit-info"  data-userinfo="image">Sube tu foto</div>
                </div>
            </div>

            <a href="javascript:abrirNotif();" class="btn_notif desactive" data-notification="counter" data-counter-type="tienes">0</a>

            <a href="javascript:toHome();" class="btn_vover2"></a>
            <a id="open-mi-musica" href="javascript:;" class="btn_mimusica"></a>

            <?php echo form_open_multipart('usuarios/perfil/upload_song?content=tienes', 'class="form_subir placeholder_dark" data-action="upload-song" autocomplete="off"') ?>

            <div class="buscarCancion">
                <div class="file">
                    <input type="file" id="fileUpload" name="fileUpload" accept="audio/*" />
                    <span class="button">Busca tu Archivo en MP3</span>
                </div>
            </div>
			
            <input type="text" name="title" placeholder="Título" required="true" />
              
            <div class="content_drop">
            <div onclick="javascript:abrirGenero();" class="select_genero">
                Género
                <div class="tooltip_genero " id="tooltip_genero_tienes"></div>
            </div>
            <div class="drop_genero scroll-pane checkboxes-valid drop_genero_tienes" id="drop_genero">
                <ul>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Rock" />
                        <h4 id="rock">Rock</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Pop" />
                        <h4 id="pop">Pop</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Tropical" />
                        <h4 id="tropical">Tropical</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Vallenato" />
                        <h4 id="vallenato">Vallenato</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Reggae" />
                        <h4 id="reggae">Reggae</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Urbano" />
                        <h4 id="urbano">Urbano</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Electrónica" />
                        <h4 id="electro" >Electrónica</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Fusión" />
                        <h4 id="fusion">Fusión</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Reggaeton" />
                        <h4 id="reggaeton">Reggaeton</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Popular" />
                        <h4 id="popular">Popular</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Jazz" />
                        <h4 id="jazz">Jazz</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="R&B" />
                        <h4 id="r_b">R&B</h4>

                    </li>
                    <li class="clearfix">

                        <input name="gender[]" class="styled" type="checkbox" value="Otros" />
                        <h4 id="otros">Otros</h4>

                        <input type="text" name="gender_another" class="input_otros" />
                    </li>

                </ul>
            </div>
            </div>
            
            <div class="content_drop">
            <div onclick="javascript:abrirUso();" class="select_genero">
                Uso
                <div class="tooltip_genero " id="tooltip_uso_tienes"></div>
            </div>
            <div class="drop_genero scroll-pane checkboxes-valid" id="drop_uso">
                <ul >
                    <li class="clearfix">
                        <input name="uses[]" type="checkbox" class="styled" value="Todos los usos" />
                        <h4 id="todos">Todos los usos</h4>
                    </li>
                    <li class="clearfix">
                        <input name="uses[]" type="checkbox" class="styled" value="Películas" />
                        <h4 id="peliculas">Películas</h4>
                    </li>
                    <li class="clearfix">
                        <input name="uses[]" type="checkbox" class="styled" value="Series de TV" />
                        <h4 id="series">Series de TV</h4>
                    </li><li class="clearfix">
                        <input name="uses[]" type="checkbox" class="styled" value="Publicidad" />
                        <h4 id="publicidad">Publicidad</h4>
                    </li>
                    <li class="clearfix">
                        <input name="uses[]" type="checkbox" class="styled" value="Video Juegos" />
                        <h4 id="juegos">Video Juegos</h4>
                    </li>
                    <li class="clearfix">
                        <input name="uses[]" type="checkbox" class="styled" value="Jingles" />
                        <h4 id="jingles">Jingles</h4>
                    </li>
                    <li class="clearfix">
                        <input name="uses[]" type="checkbox" class="styled" value="Proyectos de otros artistas" />
                        <h4 id="proyectos">Proyectos de otros artistas</h4>
                    </li>
                    <li class="clearfix">
                        <input name="uses[]" type="checkbox" class="styled" value="Otros" />
                        <h4 id="otros_uso">Otros</h4>
                          <input type="text" name="use_another" class="input_otros" />
					</li>
                </ul>
            </div>
            </div>
            <div class="content_input_info">
              <input name="project_code" type="text" placeholder="Código de proyecto" />
              <div class="tooltip_genero tooltip_info">
                <p>
               Si vas a participar en una convocatoria específica, copia el código incluido en la notificación, pégalo aquí y envía tu canción. De lo contrario, déjalo vacío y envía tu canción para que quede registrada en nuestra Biblioteca y así
poder ofrecerla a nuestros clientes.
                </p>
              </div>
            </div>

            <input class="btn_subir" type="submit" value="" style="border: none; background-color: transparent;" />

            <?php echo form_close() ?>
        </div>
    </div>

</div>
<div class="popup_masinfo">
    <div class="content_masinfo">
        <a href="javascript:cerrarMasinfo();" class="btn_cerrarMasinfo"></a>
        <div id="slider">
            <ul>
                <li>
                    <p class="texto_masinfo">
                        ¿Quieres recibir información sobre las oportunidades que surjan para tu música, y participar de aquellas que te interesen?<br />
                        <br />
                        ¿Quieres que tu música sea usada para películas, campañas publicitarias, televisión, juegos de video, en proyectos de otros artistas y mucho más?
                    </p>
                </li>
                <li>
                    <p class="texto_masinfo">
                        ¿Quieres permanecer independiente y conservar los derechos sobre tu música?<br />
                        <br />
                        ¿Quieres tener control sobre los ingresos que genere tu música?
                    </p>
                </li>
                <li>
                    <p class="texto_masinfo">
                        Si estás interesado regístrate, y haz parte de nuestra comunidad de artistas y compositores.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="popup_ingreso" id="ingreso">
    <?php echo form_open('usuarios/login_ajax/', 'data-action="login-ajax" data-type="json" data-content="tienes" autocomplete="off"') ?>
    <div class="content_ingreso">
        <a class="cerrarIngreso" href="javascript:cerrarIngreso();"></a>
        <div class="content_input">
            <input type="email" name="email" placeholder="Email" style="height: 57px;" />
            <input type="password" name="password" placeholder="Contraseña"  style="height: 57px;" />
            <input type="submit" value="" class="btn_ingresa1" />
            <p>&nbsp;</p>
            <a href="javascript:abrirRecupera2();" class="bt-recordar">¿Olvido su contraseña?</a>
        </div>
    </div>
    <?php echo form_close() ?>
</div>

<!--Recuperación-->
<div class="popup_ingreso" id="ingreso_recupera2">
    <div class="content_ingreso">
        <a class="cerrarIngreso" href="javascript:cerrarIngreso();"></a>
        <div class="content_input" style="padding-top:105px;">
		
				<input type="email" id="emailRC" name="email" placeholder="Email recuperación" style="height: 57px;" />
				<input type="button" value="" class="btn_ingresa1" id="botonRecupClave" onclick="recuperar_password();" />
			
        </div>
    </div>
</div>
<!--Fin recuperación-->

<div class="popup_ingreso" id="popup_terminos">
    <div class="content_ingreso">
        <a class="cerrarIngreso" href="javascript:cerrarIngreso();"></a>
        <div class="content_terminos">
            <h1>TERMINOS Y CONDICIONES</h1>
            <div class="texto_terminos scroll-pane">
                <?php echo $terminos_y_condiciones ?>
            </div>
        </div>
    </div>
</div>
<div class="popup_ingreso" id="popup_registro">
    <div class="content_popupregistro">
        <a class="cerrarIngreso" href="javascript:cerrarIngreso();"></a>
        <div class="content_popupregistro2">
            <h1 style="padding-top:10px">REGÍSTRATE</h1>

            <?php echo form_open('usuarios/registro/complete_register/tienes', 'class="placeholder_dark" data-action="complete-register"  data-content="tienes" autocomplete="off"') ?>
            <div style="margin-top:10px;" class="clearfix">
                <div class="left_registro">
                    <div class="content_input_registro">
                        <input name="full_name" type="text" placeholder="¿Cuál es tu nombre?" />
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
                        <input name="mobile_phone" type="text" placeholder="Celular" />
                    </div>
                    <div class="content_input_registro">
                        <input name="city" type="text" placeholder="Ciudad" />
                    </div>
                    <div class="content_input_registro">
                    		<input name="website" type="text" placeholder="Sitio web" onclick="if(this.value=='Sitio web')this.value='http://'" onblur="if(this.value=='http://')this.value='Sitio web'" value="Sitio web" style="color:#333;"/>
                    </div>
                    <div class="content_input_registro">
                    		<input name="facebook" type="text" placeholder="Facebook" onclick="if(this.value=='Facebook')this.value='https://www.facebook.com/'" onblur="if(this.value=='https://www.facebook.com/')this.value='Facebook'" value="Facebook" style="color:#333;"/>
                    </div>
                    <div class="content_input_registro">
                    		<input name="twitter" type="text" placeholder="Twitter" onclick="if(this.value=='Twitter')this.value='https://twitter.com/'" onblur="if(this.value=='https://twitter.com/')this.value='Twitter'" value="Twitter" style="color:#333;"/>
                    </div>
                    <div style="height:32px;" class="content_input_registro">
                    		<input name="youtube" type="text" placeholder="YouTube" onclick="if(this.value=='YouTube')this.value='http://www.youtube.com/user/'" onblur="if(this.value=='http://www.youtube.com/user/')this.value='YouTube'" value="YouTube" style="color:#333;"/>
                    </div>
                    
                    
                </div>
                <div class="right_registro">
                    <div class="banda select1" data-options="Banda">
                        <h2>¿Quiénes son los miembros?</h2>
                        <div class="content_input_registro">
                            <input name="members[]" type="text" />
                        </div>
                        <div class="content_input_registro">
                            <input name="members[]" type="text"   />
                        </div>
                        <div class="content_input_registro">
                            <input name="members[]" type="text"   />
                        </div>
                        <div  class="content_input_registro">
                            <input name="members[]" type="text"   />
                        </div>
                        <div  class="content_input_registro">
                            <input name="members[]" type="text"   />
                        </div>
                        <div style="height:32px;" class="content_input_registro">
                            <input name="members[]" type="text"   />
                        </div>
                    </div>
                    <div class="representante select1" data-options="Representante">
                        <h2>¿A quién representas?</h2>
                        <div class="content_input_registro">
                            <input name="representations[]" type="text"   />
                        </div>
                        <div class="content_input_registro">
                            <input name="representations[]" type="text"   />
                        </div>
                        <div class="content_input_registro">
                            <input name="representations[]" type="text"   />
                        </div>
                        <div  class="content_input_registro">
                            <input name="representations[]" type="text"   />
                        </div>
                        <div  class="content_input_registro">
                            <input name="representations[]" type="text"   />
                        </div>
                        <div style="height:32px;" class="content_input_registro">
                            <input name="representations[]" type="text"   />
                        </div>
                    </div>
                </div>
                <input class="btn_registro2" type="submit" value="" style="bottom:34px; right:30px;" />
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<!-- Edita tus datos-->
<div id="edit-info-content"></div>

<div class="popup_ingreso" id="notif1">
    <div class="content_ingreso">
        <a class="cerrarIngreso" href="javascript:cerrarIngreso();"></a>
        <div style="margin-top:60px" class="content_terminos">
            <div class="texto_terminos scroll-pane">
                <p class="content-notification-tienes">

                </p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">



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




    function valida_envia(){
        var prueba = $("#emailRC").val();

        if(prueba ==""){
            alert("Debe escribir un correo");

        }else{

           alert("Su correo es: "+prueba);

        }
        

    }


/*
    $("#btenviocontact").click(function() {


        var prueba = $("#emailRC").val();
        alert(prueba);    

     });  
*/

    



/*

    function guardarRegistro(){
        $.ajax({
            url: "http://repositorio.imaginamos.com/RIC/musicall/usuarios/registro/recupera_correo",
            type: "POST",
            dataType: "json",
            data: { emailRC: $("#emailRC").val()},
            success: function( data ) {
              if (data.respuesta == "ok") {
                alert("Su nueva clave de acceso se ha envíado al correo "+$("#emailRC").val());
                location.href = 'http://www.admestilodevida.com/site/callform/1';
              }
              else{
                alert("Su correo electronico no fue encontrado en nuestro sistema");
              }
            },
            error: function (jqXHR, textStatus, errorThrown){
              // Si se presento algun error, mostramos la descripcion
              alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
            }
              });

         return false;

    }

*/


</script>


