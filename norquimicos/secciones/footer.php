<script type="text/javascript">
    $(function(){
        $("#footform").validationEngine();
    });
    $(function(){
        $("#footform1").validationEngine();
    });
   
</script>
<?php
if (isset($_GET["er"])) {
    echo '<script>setTimeout(\'alert("Usuario y / o contreseña incorrectos");\',400);</script>';
} else {
    
}
?>


<div class="footer">
    <div class="contienefooter">
        <div class="zonasegura">
            <h4>Zona segura</h4>
            <div id="iconosegura"></div>
            <p>Módulo privado, ingresa aquí para cotizar si eres empleado de Norquimicos Ltda.</p>
            <?php if (isset($_SESSION["Nombre"])) { ?>
                <a href="index.php?seccion=zonasegura" id="btnzona"></a>
            <?php } else { ?>
                <a href="#zona-sec" class="zona-seguridad" id="btnzona"></a>
            <?php } ?>
            <div style="display:none;">
                <div id="zona-sec">
                    <div class="con-ingreso">
                        <form class="zona" id="footform" method="post" action="index.php?seccion=validar">     
                            <div class="seccion1cotiza">
                                <h2>Ingreso a la zona segura</h2>
                                <div class="t-input">Nombre</div>
                                <div id="formulario">
                                    <input value=""  name="nombre" id="userf" class="validate[required]" type="text" id="texto">
                                </div>
                                <div class="t-input">Contrase&ntilde;a</div>
                                <div id="formulario">
                                    <input value="" name="contrasena" id="passf" class="validate[required]" type="password" id="texto">
                                </div>
                                <a href="#zona-recover" class="zona-recupera"><div class="recor">¿Olvid&oacute; su contraseña?</div></a>
                                <div id="btnse">
                                    <input type="submit" onclick=" login($('#userf').val(),$('#passf').val())" class="zona-entorno" value="Ingresar" id="btnmoreenviar"/>
                                   <!-- <a id="btnmoreenviar" class="zona-entorno" ><span id="bold">ingresar</span></a>-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="zona-recover">
                    <div class="con-ingreso">
                        <form class="zona" id="footform1" method="post" action="index.php?seccion=recovery">     
                            <div class="seccion1cotiza">
                                <h2>Recordar contraseña</h2>
                                <div class="t-input">E-mail de recuperación</div>
                                <div id="formulario">
                                    <input value=""  name="emails" id="userf" class="validate[required,custom[email]]"  type="text" id="texto">
                                </div>
                                <div id="btnse">
                                    <input type="submit" onclick="" class="zona-entorno" value="Enviar" id="btnmoreenviar"/>
                                   <!-- <a id="btnmoreenviar" class="zona-entorno" ><span id="bold">ingresar</span></a>-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="contactofoo">
            <h4>Contáctenos</h4>
            <h4><span id="rojo">Norquimicos</span></h4>
            <p><span id="ico"></span>info@norquimicos.com.co<br /><span id="ico2"></span>Tel: (1) 4143089<br /><span id="ico3"></span>SKYPE: norquimicos.ltd<br /><span id="ico4"></span>Dirección: Carrera 56 A # 4D-19<br /><span id="ico5"></span>Bogotá - Colombia</p>
        </div>
        <div class="mapa">
            <h4>Mapa de sitio</h4>
            <p>
                <span id="rojo">&#9658;</span><a href="index.php?seccion=index" class="<?php
            if ($_GET['seccion'] == 'index') {
                echo '1';
            }
            ?>">Inicio</a><br />
                <span id="rojo">&#9658;</span><a href="index.php?seccion=nosotros" class="<?php
                                                 if ($_GET['seccion'] == 'nosotros') {
                                                     echo '1';
                                                 }
            ?>">Quiénes somos</a><br />
                <span id="rojo">&#9658;</span><a href="index.php?seccion=negocio" class="<?php
                                                 if ($_GET['seccion'] == 'negocio') {
                                                     echo '1';
                                                 }
            ?>">Líneas de negocio</a><br />
                <span id="rojo">&#9658;</span><a href="index.php?seccion=contactenos" class="<?php
                                                 if ($_GET['seccion'] == 'contactenos') {
                                                     echo '1';
                                                 }
            ?>">Contáctenos</a><br />
                <span id="rojo">&#9658;</span><a href="index.php?seccion=cotizar">Cotizaciones</a>
            </p>
        </div>
        <div class="siguenos">
            <h4>Síguenos</h4>
            <div id="redes">
                <a href="https://twitter.com/norquimicosltda" target="_blank"><div id="twi"></div><p><span id="rojo">Twitter</span><br />@norquimicosltda</p></a>
            </div>
            <div id="redes">
                <a href="http://www.facebook.com/Norquimicos" target="_blank"><div id="face"></div><p><span id="rojo">Facebook</span><br />Norquimicoscompany</p></a>
            </div>
            <div id="redessinb">
                <a href="http://www.linkedin.com/company/norquimicos-ltd" target="_blank"><div id="link"></div><p><span id="rojo">Linked-in</span><br />NORQUIMICOS LTD</p></a>
            </div>
        </div>
    </div>
    <div class="pie">
        <img src="imagenes/logo.png" />
        <div id="texpie">2013 <span id="rojo">NORQUIMICOS.</span> Todos los derechos reservados <div class="footer-ahorranito" style="overflow: hidden;"></div></div>
    </div>
</div>