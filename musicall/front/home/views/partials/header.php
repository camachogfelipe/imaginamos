<div class="acceso-ayuda-cont">
    <div class="ayuda-rapido"></div>
    <div class="ayuda">
        ¿Necesitas ayuda o información?</br><b>3105184056</b>
        <div class="mini-aco">Lun - Vie (9am - 5pm)</div>
        <div class="ayuda-icos">
            <ul>
                <a href="contacto.php"><li><img src="imagenes/ico-mail.png" /></li></a>
                <a href="skype:<USUARIO>?call"><li><img src="imagenes/ico-skype.png" /></li></a>
            </ul>
        </div>
    </div>
</div>

<div class="pre-header"></div>

<div class="header-cont">
    <div class="header">
        <div class="header-iz">
            <a href="<?php echo site_url() ?>"><div class="logo">Idearama.co</div></a>
        </div>
        <div class="header-de">
            <div class="header-nav">
                <?php if ($is_usuario == true) : ?>
                    <ul>
                        <li><a href="<?php echo site_url('usuarios/perfil') ?>">Mi perfil</a></li>
                        <li class="punto"></li>
                        <li><a href="<?php echo site_url('usuarios/logout') ?>">Cerrar sesión</a></li>
                    </ul>
                <?php else: ?>
                    <ul>
                        <a href="<?php echo site_url('usuarios/registro/empresas') ?>"><li>Registro empresa</li></a>
                        <li class="punto"></li>
                        <a href="<?php echo site_url('usuarios/registro/creativos') ?>"><li>Registro creativo</li></a>
                        <li class="punto"></li>
                        <li class="login">MI perfil</li>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="login-form">
                <?php echo form_open('usuarios/login/') ?>
                <input type="text" placeholder="Usuario o Email" />
                <input type="password" placeholder="Contraseña" />
                <input type="submit" class="bot-login" value="Login" />
                <div class="olv"><a href="<?php echo site_url('usuarios/forgot-password') ?>">¿Olvidaste tu contraseña?</a></div>
                <?php echo form_close() ?>
            </div>
            <div class="clear"></div>
            <div class="menu-princ">
                <ul>
                    <a href="<?php echo site_url() ?>"><li class="b1">Home</li></a>
                    <li class="separador"></li>
                    <a href="<?php echo site_url('proyectos') ?>"><li class="b2">Proyectos</li></a>
                    <li class="separador"></li>
                    <a href="<?php echo site_url('categorias') ?>"><li class="b3">Categorias</li></a>
                    <li class="separador"></li>
                    <a href="<?php echo site_url('empresas') ?>"><li class="b4">Empresas</li></a>
                    <li class="separador"></li>
                    <a href="<?php echo site_url('creativos') ?>"><li class="b5">Creativos</li></a>
                    <li class="separador"></li>
                    <a href="<?php echo site_url('ayuda') ?>"><li class="b6">Ayuda</li></a>
                    <li class="separador"></li>
                </ul>
            </div>
            <div class="buscar">
                <input type="text" class="campo-buscar" onfocus="if(this.value=='Búsqueda') this.value='';" onblur="if(this.value=='') this.value='B√∫squeda';" value="B√∫squeda">
                <input type="submit" class="bot-buscar">
            </div>
        </div>
        <div class="desplegables">
            <div class="desp1">
                <div class="triangulo1"></div>
                <ul>
                    <a href="<?php echo site_url('ayuda#ayuda1') ?>"><li>Preguntas frecuentes</li></a>
                    <a href="<?php echo site_url('ayuda#ayuda2') ?>"><li>Como funciona</li></a>
                    <a href="<?php echo site_url('ayuda#ayuda3') ?>"><li>Video explicativo</li></a>
                </ul>
            </div>
        </div> 
    </div>
</div>


<div class="acceso-cont">
    <div class="acceso-rapido"><img class="ico-msg1" src="imagenes/ico-mensaje.png" /></div>
    <div class="acceso">
        <div class="acceso-nav">
            <ul>
                <a href="<?php echo site_url('categorias') ?>"><li class="a1">Crea</br>tu proyecto</li></a>
                <li class="a2">Manda</br>propuestas</li>
                <a href="<?php echo site_url('perfil-empresa') ?>"><li class="a3"><img class="ico-msg2" src="imagenes/ico-mensaje.png" />Mi Cuenta</li></a>
            </ul>
        </div>
    </div>
</div>