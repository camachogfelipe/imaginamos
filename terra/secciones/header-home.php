<div id="loader"><div id="progress"></div></div>
<header>
    <div class="con-header-home">
        <div class="mg-header clearfix">
            <div class="header-logo"><a href="index.php?seccion=index"><img src="assets/img/header-logo.jpg" width="220" height="90" alt=""></a></div>
            <nav>
                <div class="con-nav">
                    <ul class="nav-main">
                        <li class="serv-nav <?php
if ($_GET['seccion'] == 'servicios' || $_GET['seccion'] == 'servicio-2' || $_GET['seccion'] == 'servicio-2' || $_GET['seccion'] == 'servicio-1') {
    echo 'nav-act';
}
?>"><a href="index.php?seccion=servicios" class="first-nav-v">PRODUCTOS Y SERVICIOS<span>+</span></a>
                            <ul class="nav-sub">
                                <a href="index.php?seccion=servicio-1"><li>Ganadería y Equinos</li></a>
                                <a href="index.php?seccion=servicio-2"><li>Piscicultura</li></a>
                                <a href="index.php?seccion=servicio-3"><li>Agroindustria</li></a>
                            </ul>
                        </li>
                        <li class="nav-main-sep-1"></li>
                        <li class="<?php
                            if ($_GET['seccion'] == 'noticias') {
                                echo 'nav-act';
                            }
?>"><a href="index.php?seccion=noticias">NOTICIAS<span>+</span></a></li>
                        <li class="nav-main-sep"></li>
                        <li class="serv-nav <?php
                            if ($_GET['seccion'] == 'empresa') {
                                echo 'nav-act';
                            }
?>"><a href="index.php?seccion=empresa">¿QUIÉNES SOMOS?<span>+</span></a>
                        	<ul class="nav-sub">
                            <a href="index.php?seccion=empresa#valor-t"><li>Terra group</li></a>
                            <a href="index.php?seccion=empresa#valor-t"><li>Misión</li></a>
                            <a href="index.php?seccion=empresa#valor-b"><li>Visión</li></a>
                            <a href="index.php?seccion=empresa#valor-b"><li>RSC</li></a>
                          </ul>                        
                        </li>
                        <li class="nav-main-sep-1"></li>
                        <li class="<?php
                            if ($_GET['seccion'] == 'contacto') {
                                echo 'nav-act';
                            }
?>"><a href="index.php?seccion=contacto">CONTÁCTENOS<span>+</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>