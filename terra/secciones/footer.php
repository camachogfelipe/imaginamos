<?php
$cZS1 = new Dbparrafo_zs();
$zona1 = $cZS1->getByPk(1);
?>
<footer>
    <div class="con-footer">
        <div class="mg-footer clearfix">
            <div class="footer-c1">
                <ul class="list-footer-map">
                    <a href="index.php?seccion=index"><li id="map-home">Home</li></a>
                    <a href="index.php?seccion=servicios"><li class="<?php
if ($_GET['seccion'] == 'servicios') {
    echo 'map-act';
}
?>">Servicios</li></a>
                    <a href="index.php?seccion=noticias"><li class="<?php
                                                              if ($_GET['seccion'] == 'noticias') {
                                                                  echo 'map-act';
                                                              }
?>">Noticias</li></a>
                    <a href="index.php?seccion=empresa"><li class="<?php
                                                             if ($_GET['seccion'] == 'empresa') {
                                                                 echo 'map-act';
                                                             }
?>">Acerca de nosotros</li></a>
                    <!--<a href="contacto.php?seccion=4"><li class="<?php
                                                            if ($_GET['seccion'] == 'contacto') {
                                                                echo 'map-act';
                                                            }
?>">Contáctenos</li></a>-->
                </ul>
                <div class="footer-copy">
                    <p><strong><a href="index.php?seccion=contacto">&copy; 2013 TERRA CAPITAL GROUP™</a></strong> - Todos los derechos reservados</p>
                    <div class="con-agency"><div class="agency-c1"><p>Prohibida su reproducción parcial o total</p></div><div class="footer-ahorranito"></div></div>
                </div>
                <div class="footer-logo"><a href="index.php?seccion=index"><img src="assets/img/footer-logo-1.png" width="112" height="52" alt="" class="img-c1"></a></div>
            </div>
            <div class="footer-c2">
                <div class="footer-datos">
                    <div class="footer-datos-c1">
                        <?php
                        $cFooter = new Dbfooter();
                        $footer = $cFooter->getByPk(1);
                        ?>
                        <ul>
                            <li><h1>Teléfonos</h1></li>
                            <li><?php echo utf8_encode($footer["tel1"]) ?></li>
                            <li><?php echo utf8_encode($footer["tel2"]) ?></li>
                        </ul>
                    </div>
                    <div class="footer-datos-c2">
                        <ul>
                            <li><h1>Direcciones</h1></li>
                            <li><?php echo utf8_encode($footer["direccion"]) ?></li>
                            <li><?php echo utf8_encode($footer["ciudad"]) ?></li>
                            <?php
                            $arroba = explode("@", $footer["correo"]);
                            ?>
                            <a href="mailto:<?php echo $footer["correo"] ?>" target="_blank"><li><?php echo $arroba[0] ?><span>@<?php echo $arroba[1] ?></span></li></a>
                        </ul>
                    </div>
                </div>
                <div class="footer-logo"><a href="http://www.imacinv.com" target="_blank"><img src="assets/img/footer-logo-2.png" width="112" height="52" alt="" class="img-c2"></a></div>
            </div>
        </div>
    </div>
    <div class="con-terms-footer">
        <div class="mg-section clearfix">
            <ul class="list-footer-terms">
                <!--<a href="#"><li>Mapa de navegación</li></a><li class="terms-sep"></li>-->
                <a class="modal-terms fancybox.iframe" href="index.php?seccion=politicas"><li style="margin-left:20px;">Políticas de calidad</li></a>
                <li class="terms-sep"></li>
                <a class="modal-terms fancybox.iframe" href="index.php?seccion=terminos"><li>Términos y condiciones</li></a>
            </ul>
        </div>
        <div class="footer-ct"></div>
    </div>
</footer>
<!--Modal-form-login-->
<div style="display:none;" class="modal-login">
    <div id="form-login">
        <div class="con-form">
            <h1>LOGIN A ZONA CLIENTE</h1>
            <form class="contact-form" action="index.php?seccion=validar" method="post">
                <fieldset>
                    <input placeholder="Correo" name="user" class="validate[required,custom[email]]" type="text">
                </fieldset>
                <fieldset>
                    <input placeholder="Contraseña" name="pass" class="validate[required]" type="password">
                </fieldset>
                <a class="modal-recordar" href="#form-recordar">¿Olvido su contraseña?</a>
                <fieldset class="fs-last">
                    <input type="submit" value="Ingresar" class="submit">
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--Modal-form-registro-->
<div style="display:none;" class="modal-registro">
    <div id="form-registro">
        <div class="con-form">
            <h1>FORMULARIO DE REGISTRO</h1>
            <div class="registro-tx">
                <p><?php echo utf8_encode(nl2br($zona1["registro"])) ?></p>
            </div>
            <form class="contact-form" action="index.php?seccion=registro" method="post">
                <fieldset>
                    <input placeholder="Nombre y apellido..." name="nombre" class="validate[required]" type="text">
                </fieldset>
                <fieldset>
                    <input placeholder="Empresa..." name="empresa" class="validate[required]" type="text">
                </fieldset>
                <fieldset>
                    <input placeholder="Correo electrónico..." name="correo" class="validate[required, custom[email]]" type="text">
                </fieldset>
                <fieldset>
                    <input placeholder="Contraseña deseada..." name="contrasena" class="validate[required]" type="password"><!--id="pass"-->
                </fieldset>
                <!--<fieldset>
                    <input placeholder="Verifique su contraseña..." name="contrasena1" class="validate[required, equals[pass]]" type="password" id="pass2">
                </fieldset>-->
                <fieldset>
                    <input placeholder="Teléfono..." name="telefono" class="validate[required, custom[phone]]" type="text">
                </fieldset>
                <fieldset>
                    <textarea placeholder="Mensaje..." name="mensaje" class="validate[required]" type="text"></textarea>
                </fieldset>
                <fieldset class="fs-last">
                    <input type="submit" value="Enviar" class="submit">
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--Modal-form-recordar-->
<div style="display:none;" class="modal-recordar">
    <div id="form-recordar">
        <div class="con-form">
            <h1>RECORDAR CONTRASEÑA</h1>
            <form class="contact-form" action="index.php?seccion=forgot" method="post">
                <fieldset>
                    <input placeholder="Correo electrónico..." name="correo" class="validate[required, custom[email]]" type="text">
                </fieldset>
                <fieldset class="fs-last">
                    <input type="submit" value="Enviar contraseña al correo" class="submit">
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.royalslider.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.valid.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>	
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" src="assets/js/actions.js"></script>

</body>
</html>